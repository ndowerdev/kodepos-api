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

$file =  'provinces.json';
$data = json_decode(file_get_contents($file));


// "id": 1101,
// "province": 11,
// "name": "SIMEULUE",
// "slug": "SIMEULUE",
// "lat": 2.5383346945001,
// "long": 96.038211656001,
// "postal": [
// "1406061"
// ]



// {
//   "code": 1101,
//   "parent": 11,
//   "name": "SIMEULUE",
//   "latitude": 2.5383346945001,
//   "longitude": 96.038211656001,
//   "postal": 23800
// },
$result = [];
foreach ($data as $key => $item) {
  $result[] = [
    "id" => $item->Code,
    "name" => $item->Name,
    "slug" => slugify($item->Name),
    "lat" => $item->Latitude,
    "long" => $item->Longitude,
    "postal" => explode(',', $item->Postal)
  ];
}


echo json_encode($result,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
