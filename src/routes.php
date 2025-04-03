<?php

return function () {
   $requestPath = $_SERVER['REQUEST_URI'] ?? '/';
   $requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';

   $routeHandler = match ($requestPath) {
      '/' => function () {
         include BASE_PATH . 'src/Length/LengthController.php';
      },
      default => function () {
         http_response_code(404);
         echo 'Not Found';
      }
   };

   $routeHandler();
};
