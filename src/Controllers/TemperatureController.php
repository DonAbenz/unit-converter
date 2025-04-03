<?php

$result = null;
$units = ['celsius', 'fahrenheit', 'kelvin'];

$unitFrom = $_POST['unit_from'] ?? $units[0];
$unitTo = $_POST['unit_to'] ?? $units[0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $value = isset($_POST['value']) ?? 0;

   if ($unitFrom === 'celsius' && $unitTo === 'fahrenheit') {
      $result = ($value * 9 / 5) + 32;
   } elseif ($unitFrom === 'fahrenheit' && $unitTo === 'celsius') {
      $result = ($value - 32) * 5 / 9;
   } elseif ($unitFrom === 'celsius' && $unitTo === 'kelvin') {
      $result = $value + 273.15;
   } elseif ($unitFrom === 'kelvin' && $unitTo === 'celsius') {
      $result = $value - 273.15;
   } elseif ($unitFrom === 'fahrenheit' && $unitTo === 'kelvin') {
      $result = ($value - 32) * 5 / 9 + 273.15;
   } elseif ($unitFrom === 'kelvin' && $unitTo === 'fahrenheit') {
      $result = ($value - 273.15) * 9 / 5 + 32;
   } elseif ($unitFrom === $unitTo) {
      $result = $value; // No conversion needed
   } else {
      $result = 'Invalid conversion units.';
   }
}

include BASE_PATH . 'templates/main.php';
