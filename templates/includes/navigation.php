<nav class="p-4 mb-5">
   <div class="container mx-auto flex justify-center">
      <ul class="flex space-x-6">
         <?php
         $currentRoute = $_SERVER['REQUEST_URI'];
         ?>
         <li>
            <a href="/" class="text-black text-lg hover:text-blue-500 <?= $currentRoute == '/' ? 'border-b-2 border-blue-500' : '' ?>">Length</a>
         </li>
         <li>
            <a href="/weight" class="text-black text-lg hover:text-blue-500 <?= $currentRoute == '/weight' ? 'border-b-2 border-blue-500' : '' ?>">Weight</a>
         </li>
         <li>
            <a href="/temperature" class="text-black text-lg hover:text-blue-500 <?= $currentRoute == '/temperature' ? 'border-b-2 border-blue-500' : '' ?>">Temperature</a>
         </li>
      </ul>
   </div>
</nav>