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
      <link rel="stylesheet" href="css/micromodal.css">
      <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
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
      <!-- Callout -->
      <section class="w-full py-2 flex items-center bg-[#17b978] justify-center">
        <div class="w-[80%] grid grid-cols-10 text-[0.8rem] text-white">
          <div class="col-span-2">
            <h1 class="text-white font-semibold">Ibrahim Billali Enterprise</h1>
          </div>
          <div class="col-span-8 flex items-center justify-end  text-white">
            <i class="fa-solid fa-map-marker-alt mr-2 relative top-[3px]"></i>
            <h3> Tumu Upper West </h3>
            <span class="mx-5"> | </span>
            <a href="#"class="mr-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#"class="mr-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="mr-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="mr-2"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </section>

      <!-- Navbar -->
      <?php include('nav.php')?>

      <!-- Banner -->
      <section style="background-image: url('image/img2.jpg');" class="overflow-hidden sm:rounded-0 img-container w-full h-[60vh] sm:h-[90vh]">
        <div class="inset-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
          <div class="w-[80%] sm:w-[65%]">
            <h1 class="animate__animated animate__fadeInUp text-white text-[3rem] sm:text-[4rem] font-bold w-[90%] sm:w-[80%]"> Agro Business & Construction Services </h1>
            <div class="animate__animated animate__fadeInUp my-5 flex items-center w-full sm:w-[40%]">
              <a href="#services" class="mr-5 text-[0.8rem] py-2 px-5 rounded text-white bg-yellow-600 font-semibold transition hover:bg-yellow-800">
                 Our Services
                 <i class="fa-solid fa-angles-right"></i>
               </a>

               <button data-micromodal-trigger="contact-modal" class="contact-btn ml-[0.5rem] text-[0.8rem] py-2 px-5 rounded text-white bg-green-600 font-semibold transition hover:bg-green-800">
                  Contact Us
                  <i class="fa-solid fa-angles-right"></i>
                </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Features -->
      <section class="w-[80%] sm:w-[65%] mx-auto mt-[-3rem] grid gap-[10px] grid-cols-1 sm:grid-cols-6">
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
        <div class="col-span-5">
          <img src="image/cm2.png" class="max-w-full"/>
        </div>

        <div class="col-span-5">
          <h1 class="mini-header my-2 text-green-600 flex items-center">
            <span class="mr-2 p-[3px] w-8 rounded-full flex items-center justify-center border-2 border-green-600">
              <img src="image/maple-leaf.png" class="max-w-full" />
            </span>
            <span class="">about company </span>
          </h1>

          <h1 class="text-gray-800 text-4xl font-bold my-5"> Agriculture & Farming Organic Products </h1>
          <p class="my-2 text-gray-600">
            Founded in 2015 and based in the Sissala East Municipality of Tumu, Upper West Region of Ghana,
            Ibrahim Billali Enterprise is a dynamic agribusiness and construction company.
            We are dedicated to supporting smallholder farmers through farm inputs,
            ploughing and threshing services, market linkage, and livestock rearing.
          </p>

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

          <div class="my-5 flex items-center">
            <a href="about.php" class="mr-5 text-[0.8rem] py-2 px-5 rounded text-white bg-green-600 font-semibold transition hover:bg-green-800">
               More about us
               <i class="fa-solid fa-angles-right"></i>
             </a>

             <div class="flex items-center">
               <span class="rounded-full overflow-hidden bg-blue-500 text-white flex items-center justify-center w-12 h-12">
                <img src="image/staff/01.jpg" class="max-w-full" />
              </span>

              <span class="ml-[0.7rem] text-[0.8rem]">
                <h3 class="font-bold text-gray-800"> Mr. Ibrahim Bilali </h3>
                <h6 class="text-gray-400"> CEO </h6>
              </span>
             </div>
          </div>
        </div>
      </section>

      <!-- Services -->
      <section id="services" class="w-full bg-gray-50 py-[10vh]">
        <div class="w-[80%] sm:w-[65%] mx-auto grid sm:grid-cols-10 gap-5">

          <div class="border-2 rounded-xl flex items-center justify-center col-span-5 bg-white">
            <div class="p-5">
              <h1 class="mini-header my-2 text-green-600 flex items-center">
                <img src="image/leaves.png" class="w-7 mr-2" />
                <span class="">our services </span>
              </h1>
                <h1 class="text-gray-800 text-4xl font-bold"> We offer the best services </h1>
                <p class="my-2 text-gray-400">
                  We are committed to providing top-tier services that meet the diverse needs of our customers.
                  We place strong emphasis on reliability, and affordability.
                </p>

                <div class="w-full flex items-center justify-between">
                  <a href="#" class="my-5 sm:my-0 text-[0.8rem] py-2 px-5 rounded text-white  font-semibold transition bg-yellow-600 hover:bg-yellow-800">
                     Read More
                     <i class="fa-solid fa-angles-right"></i>
                   </a>
                  <!-- Slides controls -->
                  <div class="flex items-center my-5">
                    <!-- Left -->
                    <span id="previous-service-slide" class="mr-2 rounded-full cursor-pointer text-[0.8rem] flex items-center justify-center w-11 h-11 transition border-green-600 border-2 hover:bg-green-600 text-green-800 hover:text-white">
                      <i class="fa-solid fa-angles-left"></i>
                    </span>

                    <!-- Right -->
                    <span id="next-service-slide" class="rounded-full cursor-pointer text-[0.8rem] flex items-center justify-center w-11 h-11 bg-green-600 transition hover:bg-green-800 text-white">
                      <i class="fa-solid fa-angles-right"></i>
                    </span>
                  </div>
                </div>
            </div>
          </div>

          <div id="slides-wrapper" class="overflow-hidden border-2 rounded-xl flex items-center justify-center col-span-5">
              <!-- Slides Container -->
              <div id="slides-container" class="flex items-center w-[100%] h-full">
                <!-- Slide 1 -->
                <div class="w-[100%] min-h-[200px] h-full shrink-0 text-center bg-white">
                  <img src="image/img13.jpg" class="max-w-[100%] mx-auto"/>
                  <div class="my-2 py-2 px-5">
                    <h3 class="my-2 text-gray-800 font-semibold"> Large-Scale Commercial Farming </h3>
                    <p class="my-2 text-gray-400">
                      We cultivate a variety of crops including maize, soybeans, cowpeas, and rice
                      using modern farming techniques to ensure high yields and top-quality produce.
                    </p>
                  </div>
                </div>

                <!-- Slide 2 -->
                <div class="w-[100%] min-h-[200px] h-full shrink-0 text-center bg-white">
                  <img src="image/img9.jpg" class="max-w-[100%] mx-auto"/>
                  <div class="my-2 py-2 px-5">
                    <h3 class="my-2 text-gray-800 font-semibold"> Aggregation/Outgrower scheme  </h3>
                    <p class="my-2 text-gray-400">
                      We support over 520 smallholder farmers with essential inputs like fertilizers, seeds,
                      and agro-chemicals, along with ploughing and threshing services. Our outgrowers benefit
                      from market linkages, ensuring their produce reaches the right buyers at the best prices.
                    </p>
                  </div>
                </div>

                <!-- Slide 3 -->
                <div class="w-[100%] min-h-[200px] h-full shrink-0 text-center bg-white">
                  <img src="image/img11.jpg" class="max-w-[100%] mx-auto"/>
                  <div class="my-2 py-2 px-5">
                    <h3 class="my-2 text-gray-800 font-semibold"> Retailing of Grains  </h3>
                    <p class="my-2 text-gray-400">
                      We buy and sell grains, including maize, soybeans, and cowpeas, ensuring that our customers have
                      access to quality produce at all times.
                    </p>
                  </div>
                </div>


                <!-- Slide 4 -->
                <div class="w-[100%] min-h-[200px] h-full shrink-0 text-center bg-white">
                  <img src="image/img7.jpg" class="max-w-[100%] mx-auto"/>
                  <div class="my-2 py-2 px-5">
                    <h3 class="my-2 text-gray-800 font-semibold">Livestock Rearing </h3>
                    <p class="my-2 text-gray-400">
                      Our livestock rearing services cater to farmers and businesses looking for
                      healthy and well-raised cattle, sheep, goats, and fowls, ensuring that our
                      customers get the best returns on their investments.
                    </p>
                  </div>
                </div>

                <!-- Slide 5 -->
                <div class="w-[100%] min-h-[200px] h-full shrink-0 text-center bg-white">
                  <img src="image/img12.jpg" class="max-w-[100%] mx-auto"/>
                  <div class="my-2 py-2 px-5">
                    <h3 class="my-2 text-gray-800 font-semibold"> Construction Solutions </h3>
                    <p class="my-2 text-gray-400">
                      We also undertake district-level construction projects, delivering durable and high-standard results on time.
                    </p>
                  </div>
                </div>

                <!-- Slide 6 -->
                <div class="w-[100%] min-h-[200px] h-full shrink-0 text-center bg-white">
                  <img src="image/img8.jpg" class="max-w-[100%] mx-auto"/>
                  <div class="my-2 py-2 px-5">
                    <h3 class="my-2 text-gray-800 font-semibold"> Sale of Farm Inputs and Building Materials </h3>
                    <p class="my-2 text-gray-400">
                      We offer a wide range of premium fertilizers, seeds, agro-chemicals, and construction materials
                      at competitive prices, ensuring that our clients always have access to the best resources.
                    </p>
                  </div>
                </div>

                <!-- Slide 1 -->
                <div class="w-[100%] min-h-[200px] h-full shrink-0 text-center bg-white">
                  <img src="image/img1.jpg" class="max-w-[100%] mx-auto"/>
                  <div class="my-2 py-2 px-5">
                    <h3 class="my-2 text-gray-800 font-semibold"> Large-Scale Commercial Farming </h3>
                    <p class="my-2 text-gray-400">
                      We cultivate a variety of crops including maize, soybeans, cowpeas, and rice
                      using modern farming techniques to ensure high yields and top-quality produce.
                    </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured products -->
      <section id="featured-products" class="w-full bg-slate-800 border-2 border-slate-800">
        <div class="w-[80%] mx-auto my-[10vh]">
          <div class="w-full grid grid-cols-1 sm:grid-cols-10 gap-5">
            <div class="text-left col-span-4">

              <span class="w-[200px] my-5">
                <img src="image/shopping-cart2.png" class="max-w-[100%]" />
              </span>
            </div>

            <div class="col-span-6">
              <h1 class="mini-header my-2 text-green-600 flex items-center">
                <img src="image/leaves.png" class="w-7 mr-2" />
                <span class="">what's in store</span>
              </h1>
              <div class="w-full flex items-center justify-between">
                <h1 class="text-white text-4xl font-bold"> Featured Products </h1>
                <a href="store.php" target="_blank" class="mr-5 sm:m-[0] text-[0.8rem] py-2 px-5 shadow-md rounded transition hover:shadow-none text-white bg-yellow-600 font-semibold transition hover:bg-yellow-800">
                  <i class="fas fa-shopping-cart flex shrink-0 items-center justify-between"></i>
                    View more in  our store
                  <i class="fa-solid fa-angles-right"></i>
               </a>
              </div>

              <!-- products -->
              <div class="w-full my-[10vh] grid grid-cols-1 gap-5 sm:grid-cols-3">
                <!-- Card 1 -->
                <div class="col-span-1 transform sm:translate-y-8 hover:translate-y-0 transition translate-y-0 p-5 bg-white rounded-lg">
                  <div class="w-[100%] mx-auto text-center">
                    <img src="image/img13.jpg" class="max-w-[100%]" />
                  </div>
                  <div>
                    <h3 class="my-2 text-gray-800 text-[1.3rem] font-semibold"> Fertiliers </h3>
                    <p class="text-[0.9rem] text-gray-600">
                       Prized between <span class="font-semibold">GH&#8373;440.00</span> - <span class="font-semibold">GH&#8373;480.00</span>
                       depending on the type (e.g., Chemico, Yara, AMG fertilizers).
                    </p>
                  </div>
                </div>

                <!-- Card 2 -->
                <div class="col-span-1 transform  sm:-translate-y-8 hover:-translate-y-16 transition translate-y-0 p-5 bg-white rounded-lg">
                  <div class="w-[100%] mx-auto text-center">
                    <img src="image/img14.jpg" class="max-w-[100%]" />
                  </div>
                  <div>
                    <h3 class="my-2 text-gray-800 text-[1.3rem] font-semibold">Grains/Farm Produce </h3>
                    <p class="text-[0.9rem] text-gray-600">
                       Prized between <span class="font-semibold">GH&#8373;650.00</span> - <span class="font-semibold">GH&#8373;1000.00</span>
                    </p>
                  </div>
                </div>

                <!-- Card 3 -->
                <div class="col-span-1 transform  sm:translate-y-8 hover:translate-y-0 transition translate-y-0 p-5 bg-white rounded-lg">
                  <div class="w-[100%] mx-auto text-center">
                    <img src="image/img8.jpg" class="max-w-[100%]" />
                  </div>
                  <div>
                    <h3 class="my-2 text-gray-800 text-[1.3rem] font-semibold"> Agro-Chemicals </h3>
                    <p class="text-[0.9rem] text-gray-600">
                       Prized between <span class="font-semibold">GH&#8373;50.00</span> - <span class="font-semibold">GH&#8373;150.00</span>
                    </p>
                  </div>
                </div>

                <!-- Second row -->


                <!-- Card 4 -->
                <div class="col-span-1 "></div>
                <div class="col-span-1 transform  sm:-translate-y-8 hover:translate-y-8 transition translate-y-0 p-5 bg-white rounded-lg">
                  <div class="w-[60%] mx-auto text-center">
                    <img src="image/shopping-cart.png" class="max-w-[100%]" />
                  </div>
                  <div>
                    <h3 class="my-2 text-gray-800 text-[1.3rem] font-semibold"> Cement </h3>
                    <p class="text-[0.9rem] text-gray-600">
                       Prized between <span class="font-semibold">GH&#8373;100.00</span> - <span class="font-semibold">GH&#8373;115.00</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials -->
        <section id="testimonials" class="w-full bg-white py-[10vh]">
          <div class="w-[80%] sm:w-[70%] mx-auto">
            <div class="text-center w-full">
              <h1 class="mini-header my-2 text-green-600 flex items-center justify-center">
                <img src="image/leaves.png" class="w-7 mr-2" />
                <span class="">customer feedback </span>
              </h1>
              <h1 class="text-gray-800 text-4xl font-bold"> What our Customers say </h1>
            </div>

            <div class="w-full gap-5 grid grid-cols-1 sm:grid-cols-6 my-[15vh]">
              <!-- Card 1 -->
              <div style="background-position: top right; background-size: 40%; background-image: url('image/ux.png');" class="bg-opacity-50 img-container col-span-2 border-2 min-h-[200px] rounded-xl">
                <div class="mt-[-45px] overflow-hidden ml-[1.5rem] rounded-full bg-blue-500 text-white flex items-center justify-center w-[90px] h-[90px]">
                  <img src="image/user.png" class="max-w-full" />
                </div>

                <div class="w-[80%] mx-auto my-2">
                  <h3 class="font-semibold text-gray-800"> Basuglo Hamdiya </h3>
                <!--  <h4 class="text-gray-500 text-[0.9rem]"> Profession </h4> -->

                  <p class="text-gray-500 my-5">
                    I was impressed with the quality of fertilizer from Ibrahim Billali Enterprise. After using it, my crop yields exceeded expectations. Highly recommended!
                  </p>
                </div>
              </div>

              <!-- Card 2-->
              <div style="background-position: top right; background-size: 40%; background-image: url('image/ux.png');" class="mt-[4rem] sm:my-0 bg-opacity-50 img-container col-span-2 border-2 min-h-[200px] rounded-xl">
                <div class="mt-[-45px] overflow-hidden ml-[1.5rem] rounded-full bg-blue-500 text-white flex items-center justify-center w-[90px] h-[90px]">
                  <img src="image/user.png" class="max-w-full" />
                </div>

                <div class="w-[80%] mx-auto my-2">
                  <h3 class="font-semibold text-gray-800"> Buduan Sumaila </h3>
                  <!-- <h4 class="text-gray-500 text-[0.9rem]"> Profession </h4> -->

                  <p class="text-gray-500 my-5">
                    The farm inputs I purchased significantly improved my farm’s productivity. Great quality at affordable prices!
                  </p>
                </div>
              </div>


            </div>


            <div class="w-full flex items-center justify-center">
              <span class="w-[8px] h-[8px] rounded-full bg-green-600 animate-pulse"> </span>
              <span class="w-[50px] h-[8px] rounded-xl bg-green-600 mx-2 animate-pulse"> </span>
              <span class="w-[8px] h-[8px] rounded-full bg-green-600 animate-pulse"> </span>
            </div>
          </div>
        </section>



        <!-- Achievements -->
        <section style="background-image: url('image/img10.png');" class="img-container w-full h-[59vh] sm:h-[70vh]">
          <div class="inset-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
            <div class="mx-auto w-[80%] sm:w-[60%] text-center">
              <h1 class="text-white text-[2.5rem] font-bold"> Sustainable farming practices for a healthier tomorrow </h1>
            </div>
          </div>
        </section>

        <section class="w-[80%] sm:w-[65%] bg-gray-100 mx-auto mt-[-4rem] grid grid-cols-1 sm:grid-cols-6 divide-y sm:divide-x">
          <!-- Item 1 -->
          <div class="flex p-2 items-center sm:justify-center col-span-2 min-h-[130px] shadow">
            <span class="mr-2 flex shadow-lg bg-white border-2 border-gray-200 items-center justify-center shrink-0 w-[50px] h-[50px] rounded-full p-2">
              <img  class="max-w-[100%]" src="image/farmer.png" />
            </span>
            <div class="shrink-0 min-w-[45%]">
              <h2 class="font-bold text-[1.5rem] text-gray-800"> 520+  </h2>
              <h3 class="w-full text-gray-600 text-[0.9rem] font-semibold w-[100px] my-2 shrink-0"> Smallholder farmers supported </h3>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="flex p-2 items-center sm:justify-center col-span-2 min-h-[130px] shadow">
            <span class="mr-2 flex shadow-lg bg-white border-2 border-gray-200 items-center justify-center shrink-0 w-[50px] h-[50px] rounded-full p-2">
              <img  class="max-w-[100%]" src="image/sprout.png" />
            </span>
            <div class="shrink-0 min-w-[45%]">
              <h2 class="font-bold text-[1.5rem] text-gray-800"> 1,550+ </h2>
              <h3 class="w-full text-gray-600 text-[0.9rem] font-semibold w-[100px] my-2 shrink-0"> Acres cultivated </h3>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="flex p-2 items-center sm:justify-center col-span-2 min-h-[130px] shadow">
            <span class="mr-2 flex shadow-lg bg-white border-2 border-gray-200 items-center justify-center shrink-0 w-[50px] h-[50px] rounded-full p-2">
              <img  class="max-w-[100%]" src="image/reward.png" />
            </span>
            <div class="shrink-0 min-w-[45%]">
              <h2 class="font-bold text-[1.5rem] text-gray-800"> 2012 </h2>
              <h3 class="w-full text-gray-600 text-[0.9rem] font-semibold w-[100px] my-2 shrink-0">District Best Farmer Award </h3>
            </div>
          </div>
        </section>

        <!-- Our Partners -->
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

          <!-- Contact us modal -->
          <div class="z-[100] modal micromodal-slide" id="contact-modal" aria-hidden="true">
            <div class="z-[100] modal__overlay" tabindex="-1" data-micromodal-close>
              <form class="z-[100] modal__container p-2" role="dialog" aria-modal="true" aria-labelledby="modal-1-title" action="https://formsubmit.co/tontiebilali@gmail.com" method="POST">
                <div class="flex items-center justify-between">
                  <span class="flex items-center justify-center rounded-lg border-2 p-2 overflow-hidden w-[70px] h-[70px]"><img src="image/logo.png" class="max-w-[100%]" /></span>
                  <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </div>

                <h1 class="text-gray-800 font-semibold text-[1.7rem] my-2"> Need help with anything? Get in touch with us </h1>

                <div class="w-full grid grid-cols-2 gap-[10px] my-5">
                    <!-- Name -->
                    <div class="col-span-1">
                      <p><label class="text-gray-600"> Name </label></p>
                      <input name="fullname" type="text" placeholder="enter full name" class="my-2 w-full rounded-lg p-2 border-2 outline-none" />
                    </div>

                    <!-- Phone -->
                    <div class="col-span-1">
                      <p><label class="text-gray-600"> Phone </label></p>
                      <input name="phone" type="text" placeholder="enter phone number" class="my-2 w-full rounded-lg p-2 border-2 outline-none" />
                    </div>

                    <!-- Email -->
                    <div class="col-span-2">
                      <p><label class="text-gray-600"> Phone </label></p>
                      <input name="email" type="email" placeholder="enter email address" class="my-2 w-full rounded-lg p-2 border-2 outline-none" />
                    </div>

                    <!-- Message -->
                    <div class="col-span-2">
                      <p><label class="text-gray-600"> What do you want to discuss </label></p>
                      <textarea name="message" class="my-2 w-full rounded-lg p-2 border-2 outline-none"></textarea>
                    </div>
                </div>

                <footer class="modal__footer">
                  <button type="submit" class="modal__btn modal__btn-primary">Continue</button>
                  <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
                </footer>
              </form>
            </div>
          </div>


          <!-- Footer -->
          <?php include('footer.php')?>
    </main>


    <!-- jQuery Script -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/micromodal/dist/micromodal.min.js"></script>
    <script>
      $(document).ready(function(){

        MicroModal.init();
        let slideCount = 1; // Slide counter

        function slideShow(slideLimit, slideDirection, slideContainer, animateContainer, slideDuration) {
          let divWidth = $(slideContainer).width(); // Get the width of the container
          let newWidth = 0;

          // Handle "right" direction when slideCount reaches the limit
          if (slideCount >= slideLimit && slideDirection == "right") {
            slideCount = 1; // Reset to first slide
            newWidth = 0; // Move back to the first slide

            $(animateContainer).css("transition", "none"); // Disable animation
            $(animateContainer).css("left", "0px"); // Set position to start

          }else if (slideCount == 1 && slideDirection == "left") {
            slideCount = 1; // Go to the last slide
            newWidth = 0; // Calculate width for the last slide

            $(animateContainer).css("transition", "none"); // Disable animation
            $(animateContainer).css("left", "0px"); // Set position to start

          }else {
            // Increase or decrease the slide count depending on direction
            if (slideDirection == 'right') {
              slideCount++;
            } else if (slideDirection == "left") {
              slideCount--;
            }

            // Calculate new width based on slide count
            newWidth = divWidth * (slideCount - 1);

            $(animateContainer).css("position", "relative");

            $(animateContainer).animate({
              left: -newWidth + "px" // Move slides correctly, left for both directions
            }, slideDuration);
          }
        }

        $('#next-service-slide').click(function () {
          slideShow(7, "right", "#slides-wrapper", "#slides-container", 500);
        });

        $('#previous-service-slide').click(function () {
          slideShow(7, "left", "#slides-wrapper", "#slides-container", 500);
        });

        setInterval(function() {
          slideShow(7, "right", "#slides-wrapper", "#slides-container", 500);
        }, 5000);

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
</html>
