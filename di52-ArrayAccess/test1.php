<?php 
$t1 = microtime(true);
$di52 = new tad_DI52_Container();



for ($i = 0; $i < 10000; $i++) {
	$a = $di52->make('A');
}

$t2 = microtime(true);

$results = [
	'time' => $t2 - $t1,
	'files' => count(get_included_files()),
	'memory' => memory_get_peak_usage()/1024/1024
];

echo json_encode($results);