<nav class="w-full py-[0.4rem] sm:py-2 bg-white flex items-center shadow-lg justify-center z-[60] sticky top-0">
  <div class="w-[80%] grid grid-cols-10 min-h-[10vh] bg-white">
    <!-- Brand -->
    <div class="col-span-2 sm:col-span-1 flex items-center">
      <span class="w-12 h-12 rounded-full border-2 flex items-center justify-center shrink-0">
        <img src="image/logo.png" class="max-w-[100%]" />
      </span>
    </div>

    <!-- Links -->
    <div class="col-span-1 sm:col-span-7 flex items-center justify-center">

      <ul id="nav" class="z-50 sm:z-auto p-5 pr-0 border-r-[2rem] border-[#48AF2C] sm:border-0 fixed left-[-100%] top-0 sm:top-auto w-full sm:p-0 h-[100vh] sm:h-auto bg-white sm:left-0 sm:relative sm:flex items-center justify-between sm:w-[70%] font-semibold">

        <!-- Brand -->
        <li class="sm:hidden my-5 flex items-center">
          <span class="w-[60px] mr-5 shrink-0 overflow-hidden">
            <img src="image/logo.png" class="max-w-[100%]" />
          </span>

          <h1 class="text-semibold text-[1.5rem] text-green-600"> Ibrahim Billali Enterprise </h1>
        </li>
        <li class="my-2 border-b-2 sm:border-0 py-5"><a href="index.php"> <span class="transition hover:text-green-600 text-gray-700">Home</span> </a></li>
        <li class="my-2 border-b-2 sm:border-0 py-5"><a href="about.php"> <span class="transition hover:text-green-600text-gray-700">About Us</span> </a></li>
        <li class="my-2 border-b-2 sm:border-0 py-5"><a href="index.php#services"> <span class="transition hover:text-green-600 text-gray-700">Services</span> </a></li>
        <li class="my-2 border-b-2 sm:border-0 py-5"><a href="index.php#featured-products"> <span class="transition hover:text-green-600 text-gray-700">Products</span> </a></li>
        <li class="my-2 border-b-2 sm:border-0 py-5"><a href="index.php#testimonials"> <span class="transition hover:text-green-600 text-gray-700">Testimonials</span> </a></li>
        <li class="sm:hidden flex items-center justify-end">
        <!--  <span id="close-nav" class="cursor-pointer border-2 bg-green-800 rounded-md p-2 text-[1.5rem] text-white flex items-center justify-center ml-5">
            <i class="fa-solid fa-arrow-left-long"></i>
          </span>
-->
          <span id="close-nav" class="w-[100px] flex items-center">
            <img src="image/arrow.png" class="max-w-[100%] shrink-0 relative right-[-30px]" >
            <span class="text-white font-semibold relative right-[15px]"> Close </span>
          </span>
        </li>
      </ul>
    </div>

    <!-- Action -->
    <div class="col-span-7 sm:col-span-2 flex items-center justify-between sm:justify-end">
      <a href="store.php" target="_blank" class="mr-5 sm:m-[0] text-[0.8rem] py-2 px-5 shadow-md rounded transition hover:shadow-none text-white bg-yellow-600 font-semibold transition hover:bg-yellow-800">
        <i class="fas fa-shopping-cart flex shrink-0 items-center justify-between"></i>
        Our Store
         <i class="fa-solid fa-angles-right"></i>
       </a>

       <span id="open-nav" class="sm:hidden cursor-pointer p-2 rounded-md border-2  text-gray-800 flex items-center justify-center ml-5">
         <i class="fa-solid fa-bars"></i>
       </span>

    </div>
  </div>
</nav>
