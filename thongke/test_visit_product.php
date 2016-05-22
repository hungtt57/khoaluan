<?php
$con = mysqli_connect("mysql.hostinger.vn","u936324684_kl","hunghoang") or die("can't connect this database");
$database = "u936324684_kl";

mysqli_select_db($con,$database);
$url = "http://thuocre.net/piwik/index.php?module=API&method=Transitions.getTransitionsForPageUrl&pageUrl=http://thuocre.net/&idSite=1&period=day&date=today&format=xml&token_auth=79ee642e797177265793c45bd02f6d79";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 3);
curl_setopt($ch, CURLOPT_URL, $url);
$data_xml = curl_exec($ch);
curl_close($ch);
$xml = simplexml_load_string($data_xml);

$data = $xml -> followingPages;
foreach ($data -> row as $value) {
	$url = $value -> label;
	$loai = explode('/', $url);
	$solan = $value -> referrals;

	$sql_select = "SELECT * FROM product_blog WHERE ten = '".$loai[2]."' AND (loai = 'san-pham' OR loai = 'bai-viet')";
	$select_query =  mysqli_query($con,$sql_select);
	$res_select = mysqli_fetch_array($select_query,MYSQLI_ASSOC);
	$row = $res_select['ten'];
	
	if ($row == "")
	{	
			if ($loai[1] == 'chi-tiet-san-pham')
			{
				$sql_select = "INSERT INTO product_blog (loai,ten,solan) VALUES ('san-pham','$loai[2]',$solan)";
				$res_select = mysqli_query($con,$sql_select);
				if ($res_select) {
					echo "San pham $loai[2] inserted successfully $solan lan";
					echo "<br>";
				} else {
					echo "Error inserting record: " . mysqli_error($con);
				}
			}
			if ($loai[1] == 'bai-viet')
			{
				$sql_select = "INSERT INTO product_blog (loai,ten,solan) VALUES ('$loai[1]','$loai[2]','$solan')";
				$res_select = mysqli_query($con,$sql_select);
				if ($res_select) {
					echo "Bai viet $loai[2] inserted successfully $solan lan";
					echo "<br>";
				} else {
					echo "Error inserting record: " . mysqli_error($con);
				}
			}
		
	}
		else {
			
			$sql_update = "UPDATE product_blog SET solan = '".$solan."' WHERE id = '".$res_select['id']."'";
			$update_query = mysqli_query($con,$sql_update);
			if ($update_query) {
				echo "San pham".$res_select['ten']. " updated successfully".$solan." lan";
				echo "<br>";
			} else {
				echo "Error updating record: " . mysqli_error($con);
			}
			}
}


?>