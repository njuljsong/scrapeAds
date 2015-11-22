<?php

return [
	'worldjournal' => [
		'class' => 'app\models\scrape\WJModel',
		'_hostname' => 'http://www.wjlife.com',
		'_currentCatId' => 327, //restaurant help, hardcoded in their js code
		'_currentCatName' => 'restaurant help',
		'_currentStateId' => 152,
		'_currentRegionName' => "state_ny",
		'_wjlang' => "zh-cn",
		'_pageSize' => 100, // fetch ad counts per ajax call
	],
	'craigslist' => [

	],

];