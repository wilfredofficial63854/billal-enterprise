<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ibrahim Billali Enterprise - Leading Agribusiness and Construction Company in Tumu, Ghana</title>
      <meta name="description" content="We support smallholder farmers with farm inputs, ploughing, threshing services, market linkage, and livestock rearing. Our mission is to enhance sustainable agriculture, reduce food insecurity, and provide youth employment in rural areas. With over 20 years of experience, we offer commercial farming, farm input sales, construction projects, and more.">
      <meta name="keywords" content="Ibrahim Billali Enterprise, agribusiness Ghana, construction company Tumu, farm inputs Ghana, livestock rearing Ghana, sustainable agriculture, smallholder farmers support, rural employment Ghana, grain production Northern Ghana, building materials Ghana, farm services Tumu, agricultural supplies Ghana">
      <link rel="stylesheet" href="css/output.css">
      <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
      <link rel="icon" href="image/logo.png" sizes="32x32">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">

      <style>
        html {
          scroll-behavior: smooth;
        }

        .img-container{
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }

        .mini-header{
          font-family: "Gloria Hallelujah", cursive;
        }

      </style>
  </head>

  <body>
    <main class="w-full">
      <!-- Navbar -->
      <?php include('nav.php')?>

      <!-- Banner -->
      <section style="background-image: url('image/img3.jpg');" class="overflow-hidden sm:rounded-0 img-container w-full h-[40vh] sm:h-[40vh]">
        <div class="inset-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
          <div class="w-[80%] sm:w-[65%]">
            <h1 class="text-white text-[3rem] sm:text-[4rem] font-bold w-[90%] sm:w-[80%]"> About Us </h1>

            <div class="my-5 flex items-center w-full sm:w-[40%]">
              <a href="index.html" class="font-bold text-white"> HOME </a>
              <span class="mx-2 text-yellow-500"> <i class="fa-solid fa-angles-right"></i> </span>
              <a href="#" class="text-yellow-500 font-bold"> ABOUT US </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Features -->
      <section class="w-[80%] sm:w-[65%] mx-auto mt-[4rem] grid gap-[10px] grid-cols-1 sm:grid-cols-6">
        <!-- Feature 1 -->
        <div class="col-span-2 bg-white px-5 py-2 shadow border-t-2 border-green-600 flex items-center">
          <span class="mr-5 flex items-center justify-center shrink-0 w-12 h-12 rounded-full p-2 border-2 border-green-600">
            <img  class="max-w-[100%]" src="image/planet-earth.png" />
          </span>
          <h3 class="text-gray-800 font-semibold w-[100px]"> Affordable Agricultural Solutions </h3>
        </div>

        <!-- Feature 2 -->
        <div class="col-span-2 bg-green-500 px-5 py-2 shadow border-t-2 border-green-700 flex items-center">
          <span class="mr-5 flex items-center justify-center shrink-0 w-12 h-12 rounded-full p-2 border-2 border-white">
            <img  class="max-w-[100%]" src="image/shopping-cart.png" />
          </span>
          <h3 class="text-white font-semibold w-[100px]"> Quality & Affordable Products </h3>
        </div>

        <!-- Feature 3 -->
        <div class="col-span-2 bg-white px-5 py-2 shadow border-t-2 border-green-600 flex items-center">
          <span class="mr-5 flex items-center justify-center shrink-0 w-12 h-12 rounded-full p-2 border-2 border-green-600">
            <img  class="max-w-[100%]" src="image/partnership.png" />
          </span>
          <h3 class="text-gray-800 font-semibold w-[100px]"> Expertise you can trust </h3>
        </div>
      </section>

      <!-- About Us -->
      <section class="mx-auto w-[80%] sm:w-[65%] my-[10vh] gap-10 grid grid-cols-1 sm:grid-cols-10">
        <div class="relative col-span-5">
          <img src="image/img10.png" class="max-w-full"/>
          <span class="absolute top-[10%] left-[-10%] sm:left-[-20%] bg-orange-400 p-2 sm:p-[2rem]">
            <img src="image/tractor.png" class="w-[50px]"/>
              <?php
                $yrs = date('Y')-2015;
                echo '<h2 class="text-white text-[2rem] sm:text-[4.5rem] font-bold mini-header">'.$yrs.'+</h2>';
              ?>
            <p class="text-[0.9rem ]sm:text-[1.5rem] my-2 text-yellow-200"> Years Experience </p>
          </span>

          <div class="my-5 w-full rounded-lg p-5 bg-gray-100 flex items-center">
            <div class="flex items-center mr-[10px]">
              <img src="image/vegetables.png" class="max-w-[40px] mr-2"/>
              <h3 class="font-bold text-gray-800"> 100% Quality Products </h3>
            </div>

            <div class="flex items-center">
              <img src="image/organic-food.png" class="max-w-[40px] mr-2"/>
              <h3 class="font-bold text-gray-800"> 100% Organic </h3>
            </div>
          </div>
        </div>

        <div class="col-span-5">


          <h1 class="text-gray-800 text-4xl font-bold my-5"> Agriculture & Farming Organic Products </h1>

          <div class="w-[80px] h-[5px] rounded-lg bg-green-500 my-5"></div>

          <h1 class="mini-header my-2 text-green-600 flex items-center">
            <span class="mr-2 p-[3px] w-8 rounded-full flex items-center justify-center border-2 border-green-600">
              <img src="image/maple-leaf.png" class="max-w-full" />
            </span>
            <span class="">our story </span>
          </h1>

          <p class="my-2 text-gray-600">
            Founded in 2015 and based in the Sissala East Municipality of Tumu, Upper West Region of Ghana, Ibrahim Billali Enterprise
            is a dynamic agribusiness and construction company. We are dedicated to supporting
            smallholder farmers through farm inputs, ploughing and threshing services, market linkage,
            and livestock rearing. Additionally, we offer a wide range of farm inputs such as fertilizers,
            seeds, and agrochemicals, alongside building materials.
          </p>

          <p class="my-2 text-gray-600">
            At Ibrahim Billali Enterprise, we pride ourselves on our commitment to fostering sustainable
            agriculture and creating opportunities for youth employment in rural areas. Our mission is to
            reduce food insecurity and rural-urban migration by equipping small-scale farmers with the tools
            and resources they need to succeed.
          </p>

        </div>
      </section>

      <section class="mx-auto w-[80%] sm:w-[65%] my-5 sm:my-[10vh] gap-10 grid grid-cols-1 sm:grid-cols-10">
        <div class="relative col-span-5 hidden sm:block">
          <img src="image/staff/01.jpg" class="absolute top-0 right-0 z-50 max-w-[40%]"/>
          <span class="z-[1] absolute right-[30%] top-[-30%] w-[200px]">
            <img src="image/branch.png" class="max-w-[100%]">
          </span>
        </div>
        <div class="col-span-5">
          <h1 class="mini-header my-2 text-green-600 flex items-center">
            <img src="image/leaves.png" class="w-7 mr-2" />
            <span class="">founder story</span>
          </h1>

          <p class="my-2 text-gray-600">
            With over two decades of experience in agribusiness, our founder and CEO, Mr. Ibrahim Bilali,
            is a renowned entrepreneur and the 2012 District Best Farmer in Sissala East. His passion for
            agriculture drives our vision to become a leading producer and supplier of grains in Northern Ghana,
            utilizing modern farming techniques and technology to achieve sustainable growth.
          </p>

            <img src="image/staff/01.jpg" class="block sm:hidden max-w-[100%] "/>

          <div class="w-full my-5">
            <caption class="text-[0.8rem]">
              <h3 class="font-bold text-gray-800"> Mr. Ibrahim Bilali </h3>
              <h6 class="text-gray-400"> CEO </h6>
            </caption>
          </div>
        </div>
      </section>

      <!-- our team -->
      <section class="w-full my-[10vh] bg-slate-800 p-5">

        <div class="mx-auto w-[80%] sm:w-[65%] my-5">

          <h1 class="text-white font-bold text-[3rem]"> Our team </h1>
          <h1 class="mini-header my-2 text-green-600 flex items-center">
                      <img src="image/leaves.png" class="w-7 mr-2" />
                      <span class="">those behind the harvest</span>
                    </h1>

            <div class="w-[80px] h-[5px] rounded-lg bg-green-600 my-5"></div>

          <p class="my-2 text-gray-50 my-2">
            Our team of dedicated professionals, including managers, accountants, and field officers,
            works tirelessly to ensure we deliver quality products and services at affordable prices,
            making agricultural inputs accessible to all.
          </p>
        </div>

        <div class="mx-auto w-[80%] sm:w-[65%] text-center my-[10vh] grid grid-cols-1 gap-5 sm:grid-cols-5">
          <!-- Staff 1 -->
          <div class="col-span-1 bg-white p-2 transition hover:translate-y-0 transform sm:-translate-y-8 cursor-pointer">
            <img src="image/staff/01.jpg" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Ibrahim Bilali </h3>
            <h6 class="text-gray-400"> CEO </h6>
          </div>

          <!-- Staff 2 -->

          <div class="col-span-1 bg-white p-2 text-center transform sm:translate-y-8 transition hover:translate-y-0 cursor-pointer">
            <img src="image/staff/02.jpg" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Bilali Tontie </h3>
            <h6 class="text-gray-400"> Manager </h6>
            <h6 class="text-gray-400"> 055-713-4068 </h6>
          </div>

          <div class="col-span-1 bg-white p-2 text-center transform sm:-translate-y-8 transition hover:-translate-y-16 cursor-pointer">
            <img src="image/staff/03.jpg" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Kasim Tijani </h3>
            <h6 class="text-gray-400">Accountant </h6>
            <h6 class="text-gray-400"> 024-038-1517 </h6>
          </div>

          <div class="col-span-1 bg-white p-2 transform sm:translate-y-8 transition hover:translate-y-0 cursor-pointer">
            <img src="image/staff/04.jpg" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Fudo Labibu </h3>
            <h6 class="text-gray-400"> Field Officer - Challu </h6>
            <h6 class="text-gray-400"> 024-981-3401 </h6>
          </div>

          <div class="col-span-1 bg-white p-2 transform sm:-translate-y-8 transition hover:translate-y-0 cursor-pointer">
            <img src="image/staff/05.jpg" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Sufyan Bilali </h3>
            <h6 class="text-gray-400"> Field Officer - Pieng </h6>
            <h6 class="text-gray-400"> 055-800-1850 </h6>
          </div>

          <!-- second row -->
          <div class="col-span-1"></div>
          <div class="col-span-1 bg-white p-2 transition hover:translate-y-16 transform sm:translate-y-8 cursor-pointer">
            <img src="image/staff/06.png" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Fuosuglo Tiah </h3>
            <h6 class="text-gray-400"> Field Officer - Sakai </h6>
          </div>

          <div class="col-span-1 bg-white p-2 transform sm:-translate-y-8 transition hover:translate-y-0 cursor-pointer">
            <img src="image/staff/07.jpg" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Adams Dimah </h3>
            <h6 class="text-gray-400"> Chief Tractor Operator </h6>
            <h6 class="text-gray-400"> 024-056-1091 </h6>
          </div>

          <div class="col-span-1 bg-white p-2 transform sm:translate-y-8 transition hover:translate-y-16 cursor-pointer">
            <img src="image/staff/08.jpg" class="max-w-[100%]"/>
            <h3 class="font-bold text-gray-800"> Mr. Bakuoru Iddrisu </h3>
            <h6 class="text-gray-400"> Tractor Operator </h6>
          </div>
        </div>
      </section>

      <section class="w-full bg-white py-[10vh]">
        <div class="w-[80%] sm:w-[65%] mx-auto">

          <div class="text-center w-full">
            <h1 class="mini-header my-2 text-green-600 flex items-center justify-center">
              <img src="image/leaves.png" class="w-7 mr-2" />
              <span class="">together we grow </span>
            </h1>
            <h1 class="text-gray-800 text-4xl font-bold">Some of our Partners </h1>
          </div>

          <div class="w-full grid grid-cols-1 sm:grid-cols-6 my-[5vh]">
            <div class="col-span-2 flex items-center justify-center">
              <img src="image/partners/01.jpg" class="max-w-[100%]">
            </div>

            <div class="col-span-2 flex items-center justify-center">
              <img src="image/partners/02.jpg" class="max-w-[100%]">
            </div>

            <div class="col-span-2 flex items-center justify-center">
              <img src="image/partners/03.jpg" class="max-w-[100%]">
            </div>

            <div class="col-span-2 flex items-center justify-center">
              <img src="image/partners/04.jpg" class="max-w-[100%]">
            </div>

            <div class="col-span-2 flex items-center justify-center">
              <img src="image/partners/05.jpg" class="max-w-[100%]">
            </div>
          </div>
        </div>
      </section>

      <!-- Navbar -->
      <?php include('footer.php')?>
    </main>

    <!-- jQuery Script -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        //close nav
        $("#close-nav").click(function(){
          $("#nav").animate({
            left: "-100%"
          }, 500);
        });

        //open Navbar
        $("#open-nav").click(function(){
          $("#nav").animate({
            left: "0%"
          }, 500);
        });
      });
    </script>
  </body>
