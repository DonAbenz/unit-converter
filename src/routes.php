<?php

return function () {
   $requestPath = $_SERVER['REQUEST_URI'] ?? '/';

   $routeHandler = match ($requestPath) {
      '/' => function () {
         include BASE_PATH . 'src/Controllers/LengthController.php';
      },
      '/weight' => function () {
         include BASE_PATH . 'src/Controllers/WeightController.php';
      },
      '/temperature' => function () {
         include BASE_PATH . 'src/Controllers/TemperatureController.php';
      },
      default => function () {
         http_response_code(404);
         echo 'Not Found';
      }
   };

   $routeHandler();
};
