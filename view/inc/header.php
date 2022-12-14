 <!-- header -->
 <header class="py-4 shadow-sm bg-white">
     <div class="container flex items-center justify-between">
         <!-- logo -->
         <a href="index.php">
             <img src="./public/images/logo.svg" class="w-32" alt="">
         </a>
         <!-- searchbar -->
         <form action="search.php" method="get" class="w-full max-w-xl relative flex">
             <span class="absolute left-4 top-3 text-lg text-gray-400">
                 <i class="fas fa-search"></i>
             </span>
             <input type="text" name="search" class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none" placeholder="search">
             <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
         </form>
         <!-- icons -->
         <div class="flex items-center space-x-4">
             <a href="wishlist.html" class="text-center text-gray-700 hover:text-primary transition relative">
                 <div class="text-2xl">
                     <i class="far fa-heart"></i>
                 </div>
                 <div class="text-xs leading-3">Wish List</div>
                 <span class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">8</span>
             </a>
             <a href="cart.html" class="text-center text-gray-700 hover:text-primary transition relative">
                 <div class="text-2xl">
                     <i class="fas fa-shopping-bag"></i>
                 </div>
                 <div class="text-xs leading-3">Cart</div>
                 <span class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">8</span>
             </a>
             <a href="account.html" class="text-center text-gray-700 hover:text-primary transition relative">
                 <div class="text-2xl">
                     <i class="far fa-user"></i>
                 </div>
                 <div class="text-xs leading-3">Account</div>
             </a>
         </div>
     </div>
 </header>
 <!-- header end -->