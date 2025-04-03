<?php

$result = null;
$units = ['milligram', 'gram', 'kilogram', 'ounce', 'pound'];

$unitFrom = $_POST['unit_from'] ?? $units[0];
$unitTo = $_POST['unit_to'] ?? $units[0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $value = isset($_POST['value']) ?? 0;

   $conversionRates = [
      'milligram' => 0.001,
      'gram' => 1,
      'kilogram' => 1000,
      'ounce' => 28.3495,
      'pound' => 453.592
   ];

   if (isset($conversionRates[$unitFrom]) && isset($conversionRates[$unitTo])) {
      $result = ($value * $conversionRates[$unitFrom]) / $conversionRates[$unitTo];
   } else {
      $result = 'Invalid conversion units.';
   }
}

include BASE_PATH . 'templates/main.php';
