<?php
header("Content-type: text/xml");
$fh=fopen("data.xml","r");
while($buf=fgets($fh)) {
	echo $buf;
}
fclose($fh);
?>