<?php
require_once("vendor/autoload.php");

function getData(string $url) : array
{
	$data = [];

	$html = file_get_contents($url);
	phpQuery::newDocument($html);
	$links = pq('.infinite-post')->find('a');

	foreach($links as $link){
		$link = pq($link);
		$data[] = [
			"title" => $link->attr("title"),
			"url"  => $link->attr("href")
		];
	}

	phpQuery::unloadDocuments();

	return $data;
}