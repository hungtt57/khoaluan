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
foreach ($data -> row as $value) {
	$Ip = $value -> visitIp;
	
	$date = $value -> serverDate;
	if($date == $today){
		foreach ($value -> actionDetails as $val) {
			$check = $val -> row;
			
			foreach ($check as $data) {
				if($data->type == 'search'){
					$key_word = $data -> siteSearchKeyword; 
					$timestamp = $data -> timestamp;
					$sql_select = "SELECT * FROM key_search WHERE ip = '".$Ip."' AND key_word = '".$key_word."'";
					$select_query = mysqli_query($con,$sql_select);
					$res_select = mysqli_fetch_array($select_query,MYSQLI_ASSOC);
					$row = $res_select['ip'];

					if ($row == "")
					{	
						$sql_select = "INSERT INTO key_search (ip,key_word,times,time_stamp) VALUES ('$Ip','$key_word',1,'$timestamp')";
						$res_select = mysqli_query($con,$sql_select);
						if ($res_select) {
							echo "Ip $Ip da tim kiem tu khoa $key_word successfully  1 lan";
							echo "<br>";
						} else {
							echo "Error inserting record: " . mysqli_error($con);
						}
						
					}
					else {
						if($timestamp != $res_select['time_stamp']){
							$solan = $res_select['times'] + 1;
							$sql_update = "UPDATE key_search SET times = '".$solan."' WHERE id = '".$res_select['id']."'";
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
	}
}



?>