<?php


$result = getUrlData($_POST["url"]);
$img_src = "";
$description = "";
if (isset($result["metaTags"]["og:description"]["value"]))
$description = $result["metaTags"]["og:description"]["value"];
if (isset($result["metaTags"]["description"]["value"]) && $description == "")
$description = $result["metaTags"]["description"]["value"];
if (isset($result["metaTags"]["twitter:image"]["value"]))
$img_src = $result["metaTags"]["twitter:image"]["value"];
if (isset($result["metaTags"]["og:image"]["value"]) && $img_src == "")
$img_src = $result["metaTags"]["og:image"]["value"];
if ($img_src == "") {
libxml_use_internal_errors(true);
$doc = new DomDocument();
    $header = @file_get_contents($_POST["url"]);
if($header === FALSE){
    print_r("False");
    die();
}
$doc->loadHTML($header);
$xpath = new DOMXPath($doc);
$img_src_temp = $xpath->evaluate("//img");
$src = array();
foreach ($img_src_temp as $image) {
$src[] = $image->getAttribute('src');
}
$count = 0;
$img_src = '';
foreach ($src as $k => $v){
    $imgData =  @getimagesize('$v');
    if($imgData[0] >= 400 && $imgData[1] >= 400){
        $count++;
        if($count == 1){
            $img_src = $v;
        }
    }
}
// else $img_src = $img_src_temp;
}

// All function here
function getUrlData($url)
{
$result = false;
$contents = getUrlContents($url);
if (isset($contents) && is_string($contents))
{
$title = null;
$metaTags = null;
preg_match('/<title>([^>]*)<\/title>/si', $contents, $match );
    if (isset($match) && is_array($match) && count($match) > 0)
    {
    $title = strip_tags($match[1]);
    }
    $metaTags = array();
    preg_match_all('/<[\s]*meta[\s]*name="?' . '([^>"]*)"?[\s]*' . 'content="?([^>"]*)"?[\s]*[\/]?[\s]*>/si', $contents, $match);
    if (isset($match) && is_array($match) && count($match) == 3)
    {
    $originals = $match[0];
    $names = $match[1];
    $values = $match[2];
    if (count($originals) == count($names) && count($names) == count($values))
    {
    for ($i=0, $limiti=count($names); $i < $limiti; $i++)
    {
    $metaTags[$names[$i]] = array (
    'html' => htmlentities($originals[$i]),
    'value' => $values[$i]
    );
    }
    }
    }
    preg_match_all('/<[\s]*meta[\s]*property="?' . '([^>"]*)"?[\s]*' . 'content="?([^>"]*)"?[\s]*[\/]?[\s]*>/si', $contents, $match);
    if (isset($match) && is_array($match) && count($match) == 3)
    {
    $originals = $match[0];
    $names = $match[1];
    $values = $match[2];
    if (count($originals) == count($names) && count($names) == count($values))
    {
    for ($j=0, $limiti=count($names); $j < $limiti; $j++)
    {
    $metaTags[$names[$j]] = array (
    'html' => htmlentities($originals[$j]),
    'value' => $values[$j]
    );
    }
    }
    }
    $result = array (
    'title' => $title,
    'metaTags' => $metaTags
    );
    }
    return $result;
    }
    function getUrlContents($url, $maximumRedirections = null, $currentRedirection = 0)
    {
    $result = false;
    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
    $context = stream_context_create($opts);
    $contents = @file_get_contents($url,false,$context);
    // $contents = @file_get_contents($url);
    // Check if we need to go somewhere else
    if (isset($contents) && is_string($contents))
    {
    preg_match_all('/<[\s]*meta[\s]*http-equiv="?REFRESH"?' . '[\s]*content="?[0-9]*;[\s]*URL[\s]*=[\s]*([^>"]*)"?' . '[\s]*[\/]?[\s]*>/si', $contents, $match);
    if (isset($match) && is_array($match) && count($match) == 2 && count($match[1]) == 1)
    {
    if (!isset($maximumRedirections) || $currentRedirection < $maximumRedirections)
    {
    return getUrlContents($match[1][0], $maximumRedirections, ++$currentRedirection);
    }
    $result = false;
    }
    else
    {
    $result = $contents;
    }
    }
    return $contents;
    }
print_r(json_encode($result,JSON_PRETTY_PRINT));
die();