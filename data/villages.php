<?php

function slugify($text, string $divider = '-')
{
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, $divider);

  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

$file =  'kecamatan.json';
$data = json_decode(file_get_contents($file));


$result = [];
foreach ($data as $key => $item) {
  $result[] = [
    "id" => $item->Code,
    "district" => $item->Parent,
    "name" => $item->Name,
    "slug" => slugify($item->Name),
    "lat" => $item->Latitude,
    "long" => $item->Longitude,
    "postal" => explode(',', $item->Postal)
  ];
}


echo json_encode($result, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
