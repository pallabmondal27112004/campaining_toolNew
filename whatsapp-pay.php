<!DOCTYPE html>
<html lang="en" class="dark overflow-x-hidden">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="image/webview/favicon.svg" />

   <?php

    include("headlink.php")
    ?>
  <title>WhatsApp Pay </title>
  <!-- <link rel="stylesheet" href="src/input.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
    }
  </script> -->
</head>

<body class="font-[dmsans] bg-white  overflow-x-hidden  dark:text-white transition-colors duration-300 border-red border">
  <?php
    include("nevbar.php")
    ?>
  <!-- Header -->
    <section class="flex flex-col xl:flex-row items-center md:items-center bg-gradient-to-r from-[#0a162d] to-black  text-black shadow-gray-400 shadow-lg  dark:shadow-none pt-10" >
      <div class="mt-10 space-y-4 bg-gradient-to-r from-[#e6f1ea] to-[#114e3b] dark:from-[#000000] dark:to-[#01432e] text-black dark:text-white mx-3 px-4 py-8 md:mb-8 md:ml-10 rounded-[2rem] max-w-[36rem]  md:mx-0 z-10">
        <h2 class="text-2xl font-semibold capitalize sm:text-4xl text-black poppins">Send and receive money right where you chat</h2>
        <p class="text-xl md:text-[2rem] text-[#6e6e6e]  md:px-5 leading-relaxed inder">
          Whether it’s sending money home, splitting the cost of your aunt’s birthday gift, or paying back a friend for lunch, do it all with no fees on WhatsApp.
        </p>
      </div>
      <img src="img/image 62.svg" alt="Header" class="w-full lg:w-[74rem] ">
    </section>

<div class=" p-4 px-10 md:px-0 space-y-10 xl:pt-36 w-full ">
    
  <!-- Payment Backgrounds -->
  <section class="w-full  xl:px-20 xl:py-16 pt-8 text-white md:pt-36 mx-0">
    <div class="flex flex-col xl:flex-row justify-between items-center relative">

      <!-- Left Block -->
      <div class="relative w-full md:w-2/3">
        <!-- Paper Clip Icon -->
        <img src="img/image 66.svg" alt="Clip" class="absolute md:-top-12 lg:-top-8 -top-12 -left-12 w-24 md:32 lg:w-36  z-20 rounded-3xl">

        <!-- Background image -->
        <div class="relative z-10">
          <img src="img/image 60.svg" alt="bg1" class="w-full  xl:max-w-[44rem] pb-6">
        </div>
      </div>

    <!-- Right Block -->
    <div class="relative w-full sm:px-20 mx-0   flex justify-center items-center  xl:py-0 pt-44 sm:py-52 pb-24 md:w-[40rem] lg:w-[44rem]  mt-12">
      <!-- Rotated Background -->
      <div class="absolute bg-gradient-to-r dark:from-[#3fcf8e44] dark:to-black from-[#114e3b7d] to-[#f9fbfa] rotate-[135deg] sm:w-[24rem] sm:h-[24rem] w-[17rem] h-[17rem] rounded-[4rem] xl:z-0 xl:top-[-8rem] top-[7rem] xl:right-18 2xl:right-24 z-0 "></div>

      <!-- Foreground Content -->
      <div class="xl:relative text-left z-10  ">
        <img src="img/image 68.svg" alt="Card Icon" class="absolute overflow-hidden top-12 left-24  sm:top-[24px] sm:left-[20rem]  xl:top-[-17rem] md:left-[22rem] xl:left-[8rem] w-36 sm:w-48 lg:w-52 xl:w-60 mx-auto md:mx-0 mb-4 z-20">
        <p class="text-[#6e6e6e] z-20 text-2xl md:text-4xl font-normal    md:pl-12 lg:pl-10 pl-8 px-2 sm:pt-10 pt-5 xl:mx-0 inder">
           Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
        </p>
      </div>
    </div>

  </div>
  </section>


    <!-- Text Block 1 -->
  <section class="text-2xl w-full md:w-[80%] xl:w-[70%] lg:text-4xl md:text-3xl text-black dark:text-gray-300 px-10 py-10 inder">
    <p class="text-[#6e6e6e]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possuere vel veniam eu sit massa volutpat.</p>
  </section>

    <!-- Icons Section -->

    <section class="flex flex-col md:flex-row gap-0 items-center justify-between  z-30">
      <div class="flex flex-col relative items-center  ">
        <div class="mt-12 ml-16 bg-gradient-to-r dark:from-[#3fcf8e3c] dark:to-black from-[#114e3b7d] to-[#f9fbfa] rotate-[45deg] xl:w-[480px] xl:h-[460px] lg:w-[360px] lg:h-[350px] md:w-[290px] md:h-[280px] sm:w-[320px] sm:h-[310px] h-[260px] w-[250px]  rounded-[4rem] xl:z-10  z-10 "></div>
        <img src="img/image 70.svg" alt="QR" class=" absolute -top-3 -left-3 w-52 md:w-72 sm:w-64  z-10">
      </div>
      <div class=" relative text-right md:p-4  text-white w-full md:w-1/2 m-0">
        <img src="img/image.svg" alt="WA" class=" absolute w-24 lg:w-36  md:w-32 sm:w-36 md:-top-16 md:-left-16 top-12 -left-7 mt-2 p-4">
        <img src="img/image 61.svg" alt="Phone" class="w-full  justify-left max-w-[780px]  md:pt-0 pt-24">
      </div>

    </section>
     <!-- Text Block 2 -->
    <section class="text-xl md:text-2xl lg:text-4xl text-black dark:text-white xl:mx-24 w-full xl:w-[68%] md:w-[100%] z-50 md:pl-72 text-left  inder">
      <p class="text-[#6e6e6e]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possuere vel veniam eu sit massa volutpat.</p>
    </section>
   
    

    <!-- Final CTA Section -->
  <section class="w-full p-4 md:pb-0 pb-60 md:p-0 rounded-xl flex flex-col md:flex-row items-center justify-between">
    <!-- Left Block: WhatsApp Image -->
    <div class="flex items-center justify-center md:p-10 w-full md:w-[70%] ">
      <img src="img/image 74.svg" alt="WhatsApp" class="w-full max-w-[950px]">
    </div>

    <!-- Right Block: Secure Icon -->
    <div class="w-full md:w-[30%] flex justify-center md:justify-start mt-6 md:mt-0 relative ">
      <img src="img/image 72.svg" alt="Secure" class="w-64 xl:w-80  absolute xl:-top-80 md:top-[-14rem] md:left-1 lg:left-14 lg:w-64">
    </div>
  </section>

  </div>
   <?php
     include("footer.php")
    ?>
   <!-- Dark Mode Toggle -->
  <!-- <div class="p-4 flex justify-end">
    <button id="dark-toggle" class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-full px-4 py-1 text-sm font-medium shadow">
      Toggle Dark Mode
    </button>
  </div> -->

  <!-- Dark mode toggle script -->
  <!-- <script>
    document.getElementById("dark-toggle").addEventListener("click", () => {
      document.documentElement.classList.toggle("dark");
    });
  </script> -->
</body>
</html>
