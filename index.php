<html>
<body>

<h1>ANAM</h1>

<p>WELCOME</p>
<p>THIS IS A TERRAFORM WEBPAGE</p>
<br>
<?php
  $cloudfront_url = `head -n1 me.txt`;
  $img_path = "https://".$cloudfront_url."/alfi.jpg";
  echo "<br>";
  echo "<img src='{$img_path}' width=200 height=200>";
?>
</body>
</html>
