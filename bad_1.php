<?php 
// Make two tab with even and odd  
$list = [222, 4, 3 , 19, 39 , 388, 1];
$list1 = [];
$list2 = [];

foreach ($list as $l){
	$last =	str_split($l);
	$last = end($last);
	if( $last == 0 
	   || $last == 2 
	   || $last == 4 
	   || $last == 6 
	   || $last == 8 ){
		$list1[] = $l;
	}else{
	    $list2[] = $l;	
	}
}

$list = [];
$list['even'] = [];
$list['odd'] = [];

foreach ($list1 as $l){
	$list['even'][] = $l;
}

foreach ($list2 as $l){
	$list['odd'][] = $l;
}


var_dump($list);
