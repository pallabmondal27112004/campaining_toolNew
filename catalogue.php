<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="image/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="image/favicon.svg" />
<link rel="shortcut icon" href="image/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png" />
<link rel="manifest" href="image/site.webmanifest" />

  <?php

  include("headlink.php")
  ?>
  <title>Catalog Page</title>

  <!-- Load Tailwind CSS -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- <script>
    tailwind.config = {
      darkMode: 'class',
    };
  </script>  -->
  <!-- <link rel="stylesheet" href="src/input.css">  -->

  <!-- Fix overflow globally -->
  <style>
    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }
  </style>
</head>

<body class="font-[dmsans] transition-colors duration-300 bg-gradient-to-r from-[#1f5e4c] to-[#f8f8f7] dark:from-[#01432e] dark:to-[#000000] text-black dark:text-white w-full">
  <?php
  include("nevbar.php")
  ?>



  <!-- Main Content -->
  <main class="px-4 py-2 md:px-10 md:py-0  w-full">

  <!-- WhatsApp Icon and Text Bubble -->
  <div class="relative w-fit mt-10  md:ml-4">
    <img src="img/vecteezy_3d-whatsapp-notification-one-new-email-message-in-the-inbox_49625543 2.svg" alt="WhatsApp Icon" class="w-44 h-44 z-10">
    <img src="img/image 57.svg" alt="Arrow" class="absolute top-[122px] left-32 md:left-36 w-20 h-20 md:w-36 md:h-36">
    <div class=" select mt-8 sm:mt-0 md:mt-3 sm:ml-56 md:ml-[295px] bg-gradient-to-r from-[#e6f1ea] to-[#114e3b] dark:from-[#000000] dark:to-[#01432e] text-black dark:text-white px-6 py-4 rounded-[2rem] shadow-md w-fit">
      <span class="font-bold text-xl md:text-2xl text-black">Know about WhatsApp <br> and its features</span>
    </div>
  </div>

  <div class="flex flex-col md:flex-row items-center justify-between mt-12 md:mt-0 w-full">
    <div class="w-full">
      <div class="text-[#6e6e6e] text-2xl md:text-4xl font-normal px-4 md:pl-10 inder">
        Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis et sit massa volutpat.
      </div>
    </div>
    <img src="img/image 52.svg" alt="Catalog" class="max-w-full h-auto md:h-[38rem] md:w-[38rem] mt-8 md:mt-0">
  </div>

  <div class="flex flex-col items-center justify-start gap-6 max-w-7xl w-full mt-5 md:mt-0 mx-auto">
    <div class="flex flex-col md:flex-row items-center justify-start gap-6 w-full">

      <!-- WhatsApp UI -->
      <div class="flex-shrink-0 pl-4 md:pl-20">
        <img src="img/WhatsApp Image 2025-05-01 at 21.37.35_bd82f728 2.svg" alt="WhatsApp Mobile UI" class="w-40 md:w-52 rounded-xl shadow-lg">
      </div>

      <!-- Arrow -->
      <div class="hidden md:block mt-36 mx-4">
        <img src="img/image 57.svg" alt="Arrow" class="w-28 h-28 md:w-32 md:h-32">
      </div>

      <!-- Catalog Card -->
      <div class="bg-gradient-to-r from-[#e6f1ea] to-[#114e3b] dark:from-[#000000] dark:to-[#01432e] text-black dark:text-white rounded-2xl p-6 md:p-14 shadow-lg mt-12 md:mt-52 max-w-3xl">
        <h2 class="text-2xl md:text-4xl font-bold mb-4 inter text-black poppins">Catalog Templates</h2>
        <p class="text-xl md:text-2xl leading-relaxed font-sans max-w-[35ch] inder text-[#6e6e6e]">
          This document explains how to create catalog templates. See <strong>Sell Products & Services</strong> to learn more about product catalogs and ways to showcase your products.
        </p>
      </div>
    </div>

    <!-- Second Row Text -->
    <div class="w-full my-12 md:mt-28 px-4">
      <p class="text-2xl md:text-4xl font-medium max-w-5xl text-left mx-auto inder text-[#6e6e6e]">
        Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
      </p>
    </div>
  </div>

  <div class="flex flex-col md:flex-row items-center justify-center gap-10 px-4 md:px-16 py-10 w-full">

    <!-- Left: Requirements Text -->
    <div class="bg-gradient-to-r from-[#e6f1ea] to-[#114e3b] dark:from-[#000000] dark:to-[#01432e] text-black dark:text-white rounded-2xl p-6 md:p-14 shadow-lg max-w-xl w-full">
      <h2 class="text-2xl md:text-5xl mb-4 inter text-black font-bold poppins">Requirements</h2>
      <p class="text-lg md:text-2xl leading-relaxed font-sans inder text-[#6e6e6e]">
        This document explains how to create catalog templates. See <strong>Sell Products & Services</strong> to learn more about product catalogs and ways to showcase your products.
      </p>
    </div>

    <!-- Center Arrow -->
    <div class="hidden md:block">
      <img src="img/image 56.svg" alt="Arrow" class="w-28 h-28 md:w-32 md:h-32" />
    </div>

    <!-- Right: Mobile Mockup -->
    <div class="mt-8 md:mt-12">
      <img src="img/image 58.svg" alt="Mobile" class="w-52 md:w-60  rounded-xl shadow-lg md:mt-44" />
    </div>
  </div>

  <div class="w-full mt-12 md:mt-28 px-4 pb-10">
    <p class="text-[#6e6e6e] text-2xl md:text-4xl font-medium max-w-5xl text-left mx-auto inder">
      Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
    </p>
  </div>

  <div class="flex flex-col md:flex-row items-center justify-center my-24">
    <img src="img/image 53.svg" alt="Interakt" class="max-w-full md:w-[950px] h-auto shadow-lg rounded-[2rem]">
  </div>

</main>

  <?php
  include("footer.php")
  ?>
  <!-- Dark mode toggle script -->
  <!-- <script>
    const btn = document.getElementById('dark-toggle');
    btn.onclick = () => {
      console.log("darkmode button clicked");
      
      document.documentElement.classList.toggle('dark');
    };
  </script> -->

</body>

</html>