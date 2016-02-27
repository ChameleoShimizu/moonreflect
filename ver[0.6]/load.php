<?php
header("Content-type: text/xml");
if($_SERVER['REQUEST_METHOD']=='POST'){
	$index=$_POST["index"];
	if($index=="text"){
		$fh=fopen("data.xml","r");
		while($buf=fgets($fh)) {
			echo $buf;
		}
		fclose($fh);
	}
	if($index=="memory"){
		$name=$_POST["name"];
		$pt=$_POST["pt"];
		$xml=simplexml_load_file("data.xml");
		$addNode=$xml->addChild("memory");
		$addNode["id"]=$name;
		$addNode->addChild("point",$pt);
		$xml->asXml("data.xml");
		$fh=fopen("data.xml","r");
		while($buf=fgets($fh)) {
			echo $buf;
		}
		fclose($fh);
	}
}
?>