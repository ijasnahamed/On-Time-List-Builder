<?php
$image_path = "images";

$details = array(
		array("Amazon", $image_path."/amazon.png"),
		array("Apple", $image_path."/apple.png"),
		array("Cisco", $image_path."/cisco.png"),
		array("Ebay", $image_path."/ebay.png"),
		array("Ericsson", $image_path."/ericsson.png"),
		array("Facebook", $image_path."/facebook.png"),
		array("Flipkart", $image_path."/flipkart.jpg"),
		array("Google", $image_path."/google.jpg"),
		array("IBM", $image_path."/ibm.png"),
		array("Intel", $image_path."/intel.png"),
		array("LG", $image_path."/lg.jpg"),
		array("Linked In", $image_path."/linkedin.png"),
		array("Microsoft", $image_path."/microsoft.png"),
		array("Motorola", $image_path."/moto.png"),
		array("Myntra", $image_path."/myntra.jpg"),
		array("Ola", $image_path."/ola.png"),
		array("Oracle", $image_path."/oracle.png"),
		array("Samsung", $image_path."/samsung.png"),
		array("Uber", $image_path."/uber.jpg"),
		array("Youtube", $image_path."/youtube.jpg")
	);

if(!empty($_POST["get_params"]) && isset($_POST["get_param_count"]) && isset($_POST["from"]))
{
	$param_count = (int)$_POST["get_param_count"];
	$from = (int) $_POST["from"] - 1;

	if($from<count($details))
	{
		if($param_count>(count($details) - $from))
		{
			$param_count = count($details) - $from;
		}

		$result = array();

		for($i=$from, $j=1; $j<=$param_count; $i++, $j++)
		{
			$result[] = $details[$i];
		}

		echo json_encode($result);
		die();
	}
}
echo "";