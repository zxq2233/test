
<?php
// create a new cURL resource
$ch = curl_init();
// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://raw.githubusercontent.com/zxq2233/index.html/gh-pages/99.zip");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HEADER, 0);
// grab URL and pass it to the browser
$out = curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
$fp = fopen('data.zip', 'w');
fwrite($fp, $out);
fclose($fp);
?>
