<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Example 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../comments/css/stylesheet.css"/>
</head>
<body>

<h1>Example 3</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus posuere sodales condimentum. Vestibulum ut felis nec tortor pharetra blandit et vel nunc. Sed nec ligula ac orci scelerisque lobortis quis et velit. Pellentesque tristique ligula mattis neque dignissim aliquam. Duis suscipit accumsan libero, nec fringilla urna consequat non. Fusce consequat eros vitae nunc eleifend cursus. Etiam ornare rhoncus ligula, ac pretium ipsum blandit eu. Duis mattis dapibus lorem, ut euismod lorem semper id. Aenean dapibus dapibus odio eget ullamcorper. Pellentesque non tincidunt est. Pellentesque ultricies, nisl id dictum blandit, augue dolor dictum lorem, vel lobortis urna magna nec lorem. Aenean dignissim turpis sit amet mi ultricies tempus. Phasellus vel ante in tortor hendrerit aliquam sit amet sed urna. Ut pharetra odio quis dui vestibulum facilisis et a lectus. 編碼.</p>

<br/>

<?php
$cmtx_page_id = '3';
$cmtx_reference = 'Page Three';
$cmtx_path = '../comments/';
define('IN_COMMENTICS', 'true'); //no need to edit this line
require $cmtx_path . 'includes/commentics.php'; //no need to edit this line
?>

</body>
</html>