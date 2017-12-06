<?php

$data = json_decode(file_get_contents("stembureaus-amsterdam.json"));
$data = $data->data;

foreach ($data as $stadsdeel => &$stembureaus) {
  foreach ($stembureaus as &$sb) {
    $sb = [
      "categorie" => $sb[0],
      "postcode" => $sb[1],
      "naam" => $sb[2],
      "adres" => $sb[3]
    ];
  }
}

echo json_encode([
  "metadata" => [],
  "data" => $data,
]);
