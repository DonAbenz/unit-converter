# Unit Converter

A comprehensive and user-friendly web-based unit converter that supports conversions for **Length**, **Weight**, and **Temperature**. This project is designed to simplify unit conversions with a clean interface and robust functionality, inspired by [roadmap.sh](https://roadmap.sh/projects/unit-converter).

## Features

-  **Length Conversion**: Convert between millimeters, centimeters, meters, kilometers, inches, feet, yards, and miles.
-  **Weight Conversion**: Convert between milligrams, grams, kilograms, ounces, and pounds.
-  **Temperature Conversion**: Convert between Celsius, Fahrenheit, and Kelvin.

## How It Works

1. Routing: The application uses a simple routing mechanism defined in src/routes.php to handle requests for different unit types.
2. Controllers: Each controller handles the logic for a specific type of conversion (Length, Weight, Temperature).
3. Templates: The main.php template dynamically renders the conversion form and results.

## Getting Started

### Prerequisites

-  PHP 8.0 or higher
-  A web server (e.g., Apache, Nginx, or PHP's built-in server)

### Installation

1. Clone the repository:

```bash
git clone https://github.com/DonAbenz/unit-converter.git
cd unit-converter
```

2. Start the PHP built-in server:

```bash
php -S localhost:8000 -t public
```

3. Open your browser and navigate to:
   http://localhost:8000

### Usage

-  Select the type of conversion (Length, Weight, or Temperature) from the navigation bar.
-  Enter the value and select the units to convert from and to.
-  Click "Convert" to see the result.
