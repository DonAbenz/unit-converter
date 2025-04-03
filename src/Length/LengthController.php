<?php

$result = null;
$units = ['millimeter', 'centimeter', 'meter', 'kilometer', 'inch', 'foot', 'yard', 'mile'];

$unitFrom = $_POST['unit_from'] ?? $units[0];
$unitTo = $_POST['unit_to'] ?? $units[0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $value = $_POST['value'] ?? 0;

   // Conversion logic
   $conversionRates = [
      'millimeter' => 0.001,
      'centimeter' => 0.01,
      'meter' => 1,
      'kilometer' => 1000,
      'inch' => 0.0254,
      'foot' => 0.3048,
      'yard' => 0.9144,
      'mile' => 1609.34
   ];

   if (isset($conversionRates[$unitFrom]) && isset($conversionRates[$unitTo])) {
      $result = ($value * $conversionRates[$unitFrom]) / $conversionRates[$unitTo];
   } else {
      $result = 'Invalid conversion units.';
   }
}

include BASE_PATH . 'templates/main.php';
