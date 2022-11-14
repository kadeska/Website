<?php

$heading = '';
$local_dir = 'data/Pictures/My_Work';
$files = scandir($local_dir);

function clean_readdir($dir){
	if($handle = opendir($dir)){
	    while(false !== ($file = readdir($handle))){
		    if($file != '.' && $file != '..'){
			    $files[] = $file;
		    }
	    }
	    closedir($handle);
    }
	return $files;
}

function pre_r($array){
    echo '<pre>';
	print_r($array);
	echo '</pre>';
}

require "php/views/index.view.php";