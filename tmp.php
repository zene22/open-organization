<?php
session_start();
include_once 'dbconnect.php';
connectDB();

parse_str($_SERVER["QUERY_STRING"], $data);
$data['client'] = $data['customerName']; // FIXME hack

$chars = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
$data['hash'] = substr(str_shuffle($chars), 0, 5);

## Get the username from the userId
$q1 = "select name from users where id = '" . $_SESSION['usr_id'] . "'";
$res = mysqli_query($db, $q1);
$row = mysqli_fetch_assoc($res);
$data['user'] = $row['name'];


$fields = array('user','client','rhEmail','country','lob','o1','o2','o3','o4','o5','d1','d2','d3','d4','d5','hash','share','contact','project','comments','comments_transparency','comments_inclusivity','comments_adaptability','comments_collaboration','comments_community');
foreach ($fields as $field) {
	$$field = mysqli_real_escape_string($db, $data[$field]);
}

if (!isset ($share)) {
	$share = "off";
}

$qq = "INSERT INTO open_data (" . implode(',', $fields).") VALUES ('$user','$client','$rhEmail','$country','$lob',$o1,$o2,$o3,$o4,$o5,$d1,$d2,$d3,$d4,$d5,'$hash','$share','$contact','$project','$comments','$comments_transparency','$comments_inclusivity','$comments_adaptability','$comments_collaboration','$comments_community')";
$result = mysqli_query($db, $qq);

if (!$result) {
    printf("Errormessage: %s\n", mysqli_error($db));
    exit;
}


# Check the referer to see if we need to go to english or russian or german
if (preg_match('/lang=de/', $_SERVER['HTTP_REFERER'])) {
## German
header("Location: results-de.php?hash=$hash");
} else if (preg_match('/lang=ru/', $_SERVER['HTTP_REFERER'])) {
## Russian
header("Location: results-ru.php?hash=$hash");
} else {
## English
header("Location: results.php?hash=$hash");
}


#header("Location: results.php?hash=$hash");
?>
