<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');

$con = mysqli_connect("mysql.hostinger.vn","u936324684_kl","hunghoang") or die("can't connect this database");
$database = "u936324684_kl";
$today = date('Y-m-d');
mysqli_select_db($con,$database);

$url = "http://thuocre.net/piwik/index.php?module=API&method=Live.getVisitorProfile&idSite=1&period=day&date=today&format=xml&token_auth=79ee642e797177265793c45bd02f6d79";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 3);
curl_setopt($ch, CURLOPT_URL, $url);
$data_xml = curl_exec($ch);
curl_close($ch);
$xml = simplexml_load_string($data_xml);

$data = $xml -> lastVisits;
/*echo "<pre>";
var_dump($test);
echo "</pre>";*/
foreach ($data -> row as $value) {
	$Ip = $value -> visitIp;
	$date = $value -> serverDate;
	if($date == $today){
		foreach ($value -> actionDetails as $val) {
		$check = $val -> row;
		
		foreach ($check as $data) {
			$url = $data -> url; 
			$loai = explode('/', $url);
			//var_dump($loai);

			$sql_select = "SELECT * FROM visit_profile WHERE visit_IP = '".$Ip."' AND ten = '".$loai[4]."' ";
			$select_query = mysqli_query($con,$sql_select);
			$res_select = mysqli_fetch_array($select_query,MYSQLI_ASSOC);
			$row = $res_select['visit_IP'];

			if ($row == "")
			{	
				if ($loai[3] == 'chi-tiet-san-pham')
				{
					$sql_select = "INSERT INTO visit_profile (visit_IP,loai,ten,times) VALUES ('$Ip','san-pham','$loai[4]',1)";
					$res_select = mysqli_query($con,$sql_select);
					if ($res_select) {
						echo "Ip $Ip inserted san pham $loai[4] successfully  1 lan";
						echo "<br>";
					} else {
						echo "Error inserting record: " . mysqli_error($con);
					}
				}
				if ($loai[3] == 'bai-viet')
				{
					$sql_select = "INSERT INTO visit_profile (visit_IP,loai,ten,times) VALUES ('$Ip','$loai[3]','$loai[4]',1)";
					$res_select = mysqli_query($con,$sql_select);
					if ($res_select) {
						echo "Ip $Ip inserted san pham $loai[4] inserted successfully 1 lan";
						echo "<br>";
					} else {
						echo "Error inserting record: " . mysqli_error($con);
					}
				}

			}
			else {
				$solan = $res_select['times'] + 1;
				$sql_update = "UPDATE visit_profile SET times = '".$solan."' WHERE id = '".$res_select['id']."'";
				$update_query = mysqli_query($con,$sql_update);
				if ($update_query) {
					echo "Updated successfully";
					echo "<br>";
				} else {
					echo "Error updating record: " . mysqli_error($con);
				}
			}
		}

	} 
	}
}



?>