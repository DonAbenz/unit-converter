<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Unit Converter</title>

   <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
   <div class="max-w-2xl mx-auto mt-10 bg-white shadow-md rounded-lg p-8">
      
      <h1 class="text-3xl font-bold text-center mb-6">Unit Converter</h1>
      
      <?php include("includes/navigation.php"); ?>

      <?php if (!isset($result)): ?>
         <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" class="space-y-4">
            <div class="flex items-center space-x-4">
               <input type="text" name="value" placeholder="Enter value" class="border border-gray-300 p-3 rounded w-full">
               <select name="unit_from" class="border border-gray-300 p-3 rounded w-full">
                  <?php foreach ($units as $unit): ?>
                     <option value="<?= $unit ?>"><?= ucfirst($unit) ?></option>
                  <?php endforeach; ?>
               </select>
               <span class="text-gray-500">to</span>
               <select name="unit_to" class="border border-gray-300 p-3 rounded w-full">
                  <?php foreach ($units as $unit): ?>
                     <option value="<?= $unit ?>"><?= ucfirst($unit) ?></option>
                  <?php endforeach; ?>
               </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white font-bold py-3 px-6 rounded w-full hover:bg-blue-600">Convert</button>
         </form>

      <?php else: ?>
         <div class="text-center">
            <h2 class="text-2xl font-bold mb-4">Result</h2>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-xl inline-block">
               <?= htmlspecialchars($value) ?> <?= htmlspecialchars($unitFrom) ?> = <?= htmlspecialchars($result) ?> <?= htmlspecialchars($unitTo) ?>
            </div>
            <div class="mt-6">
               <a href="<?php echo $_SERVER['REQUEST_URI']; ?>" class="bg-blue-500 text-white font-bold py-3 px-6 rounded hover:bg-blue-600">Reset</a>
            </div>
         </div>
      <?php endif; ?>
   </div>
</body>

</html>