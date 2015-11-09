<?php 
$csrfKey = $_GET['csrfKey'];
$authcode = $_GET['AUTHCODE'];
$
if ($csrfKey && $authcode && $authcode != '' && $csrfKey != '') {
  echo "AUTHORISING CONNECTION...";
  echo "<meta http-equiv='refresh' content='3;url=/index.php?setup=complete'>";
  echo 'Your Connection authcode is'.$;
} else if ($csrfKey && $authcode && $authcode == '' && $csrfKey == ''){
  $error = 'There was an error authorising the connection...';
  die($error);
}
?>
