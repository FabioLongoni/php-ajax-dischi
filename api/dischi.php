<?php

include __DIR__.'/../dataBase/dischi.php';

$res = [
  'success' => true,
  'response' => $dischi
];

header('Content-Type: application/json');

echo json_encode($res);