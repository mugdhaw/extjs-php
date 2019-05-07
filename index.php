<?php

function process_node($node) {
	$parent = array();
	if(array_key_exists("nodeList",$node)) {
		foreach($node['nodeList'] as $child_node) {
			$child = process_node($child_node);
			$obj_name = basename($child_node['resourcePath']);
			if(empty($child)) {
				$parent[$obj_name] = $child_node['selected'];
			} else {
				$parent[$obj_name] = $child;
			}
			/*else if(is_string($child)) {
				$parent[$child] =true;
			}*/	
		}
	}
/*	else {
		return basename($node['resourcePath']);
	}*/
	return $parent;
}
// Read JSON file
$json = file_get_contents('input.json');
//Decode JSON
$json_data = json_decode($json,true);
$tfng_data = array();
$json_data =  $json_data['return'];

foreach($json_data['nodeList'] as $element) {
	if($element['displayName'] == "TFNG") {
		$tfng_data = $element;
	}
}

$output_array = process_node($tfng_data);

$output_json = json_encode($output_array);
print_r($output_json);



?>