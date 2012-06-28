<?php

require_once 'twitterSearch.php';

$twitterSearch = new TwitterSearch();

$requestParams = array(
    'q'     => 'searchquery',
    'until' => '2012-06-28',
    'rpp'   => '20',
    'page'  => '1',
);

$twitterSearch->setRequestParam($requestParams);
$source = $twitterSearch->httpRequest($twitterSearch->generateUrl());
$result = $twitterSearch->jsonDecode($source);

var_dump ($result);

// count up page number 
$twitterSearch->upPage();

$source = $twitterSearch->httpRequest($twitterSearch->generateUrl());
$result = $twitterSearch->jsonDecode($source);

// 2 page
var_dump ($result);
