<?php 


$today = strtotime(date('Y-m-d'));

$con = mysqli_connect("mysql.hostinger.vn","u936324684_kl","hunghoang") or die("can't connect this database");
$database = "u936324684_kl";

mysqli_select_db($con,$database);

$visits = '';

$url = "http://thuocre.net/piwik/index.php?module=API&method=VisitsSummary.get&idSite=1&period=day&date=now&format=xml&token_auth=79ee642e797177265793c45bd02f6d79";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 3);
curl_setopt($ch, CURLOPT_URL, $url);
$data_xml = curl_exec($ch);
curl_close($ch);
$xml = simplexml_load_string($data_xml);

$visits = $xml -> nb_visits;

// Check final data Null or Not Null
$sql_select = "SELECT * FROM thongke WHERE date_ = '".$today."'";
$select_query =  mysqli_query($con,$sql_select);
$res_select = mysqli_fetch_array($select_query,MYSQLI_ASSOC);
$row = $res_select['visits_'];

if($row == ""){
	$sql_ = "INSERT INTO thongke (date_, visits_) VALUES ('$today','$visits')";
	$res_ = mysqli_query($con,$sql_);
	if ($res_) {
			echo "Record inserted successfully $visits";
	} else {
			echo "Error inserting record: " . mysqli_error($con);
	}
}
// not NULL
else {
	if($res_select['date_'] == $today){
		$sql_ = "UPDATE thongke SET visits_ = '".$visits."' WHERE id = '".$res_select['id']."'";
		$res_ = mysqli_query($con,$sql_);
		if ($res_) {
			echo "$today updated successfully $visits";
		} else {
			echo "Error updating record: " . mysqli_error($con);
		}
	}
	else {
		$sql_ = "INSERT INTO thongke (date_, visits_) VALUES ('$today','$visits')";
		$res_ = mysqli_query($con,$sql_);
		if ($res_) {
			echo "$today inserted successfully $visits";
		} else {
			echo "Error inserting record: " . mysqli_error($con);
		}
	}
}


?>