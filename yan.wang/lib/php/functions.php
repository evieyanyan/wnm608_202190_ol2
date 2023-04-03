<?php

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}

function file_get_json($filename) {
	$file = file_get_contents($filename);
	return json_decode($file);
}

function file_put_json($filename, $data) {

        $json =json_encode($data, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
        $file = file_put_contents($filename, $json, LOCK_EX);
        return $json;
}