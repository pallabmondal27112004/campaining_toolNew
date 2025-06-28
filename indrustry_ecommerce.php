<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Industry Ecommerce</title>

  <?php
  include("headlink.php")
  ?>

  <style>
    .scrollbar-hide {
      -ms-overflow-style: none !important;
      /* IE and Edge */
      scrollbar-width: none !important;
      /* Firefox */
    }

    .scrollbar-hide::-webkit-scrollbar {
      display: none !important;
      /* Chrome, Safari, Opera */
    }

    a {
      text-decoration: none;
    }

    .gradient-color {
      background: #075E54;
      background: linear-gradient(90deg, rgba(7, 94, 84, 1) 0%, rgba(63, 207, 142, 0) 10%, rgba(255, 255, 255, 0) 88%, rgba(7, 94, 84, 1) 100%);
    }

    .overlay-background {
      background: #FDFBFB;
      background: linear-gradient(90deg, rgba(253, 251, 251, 0) 22%, rgba(254, 253, 253, 0.24) 59%, rgba(255, 255, 255, 1) 100%);
    }

    @keyframes marquee {
      0% {
        transform: translateX(0%);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .animate-marquee {
      display: flex;
      width: fit-content;
      animation: marquee 30s linear infinite;
    }

    .marquee-wrapper:hover .animate-marquee {
      animation-play-state: paused;
    }
  </style>
  <link rel="icon" type="image/png" href="image/webview/favicon.svg" />

</head>

<body class="font-[dmsans] bg-white text-black transition-colors duration-300">

  <?php
  include("nevbar.php")
  ?>

  <!-- Hero Section -->
  <section class="w-[100%] pt-[4rem] flex justify-between align-center flex-wrap" style="background: linear-gradient(90deg, #075E54 31.73%, #FFFFFF 94.71%);">
    <div class="absolute top-0 start-0">
      <img src="image/bluetikimg/Rectangle 4510.png" class="w-[300px] h-[300px] z-[-2]" alt="">
    </div>
    <div class="lg:w-[60%] w-[100%] flex justify-center items-center flex-col gap-8">
      <h1 class="poppins lg:text-[36px] px-2 text-[32px] text-center font-bold text-white">
        3x Your <span class="text-[#18B00E]">Ecommerce </span>Store Sales with WhatsApp
      </h1>
      <p class="inder lg:w-[50%] w-[80%] text-center text-white">
        Take your educational institution to the next level with WhatsApp automation...
      </p>
      <p class="inder">⚡️Powered by Official WhatsApp Business API</p>
    </div>
    <div class="lg:w-[40%] w-[100%] flex h-[100%] justify-center align-center">
      <img src="image/Industry_E-Commerce/image-removebg-preview 1.png" class="lg:w-[100%] lg:h-[354px] w-[260px] h-[100%]" alt="">
    </div>
  </section>


  <div>
    <p class="inder py-3 text-4xl md:text-5xl font-bold text-center">Founders & Marketers Love us</p>
  </div>

  <?php
  include("marquee-common.php");
  ?>
   <div>
    <h1 class="poppins text-4xl md:text-5xl font-bold text-center mt-3">Features</h1>
    <p class="inder text-l md:text-xl text-center mt-3">Key Features of WhatsApp Business API for E-commerce</p>
  </div>

  <!-- 1 -->

  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <p class="font-bold mt-4 md:mt-0 poppins">Broadcast Offers to Unlimited Contacts</p>
      <p class="text-[#6e6e6e] inder ">

        2x your conversions by sending beautiful carousel cards, limited time offers & multi-button messages
      </p>
      </p>
    </div>
    <div class="w-full md:w-1/2 flex justify-center md:justify-end">
      <div class="relative w-full max-w-xs" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 56.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
  </div>

  <!-- 2 -->
  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 flex justify-center md:justify-start">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 57.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <p class=" font-bold mt-4 md:mt-0 poppins">Showcase Your Catalogues, Sell on WhatsApp</p>
      <p class="text-[#6e6e6e] inder">

        Drive Orders via WhatsApp with WhatsApp Catalogs and Cart. Seamlessly build your Catalog in 10 minutes and get going!
      </p>
      </p>
    </div>
  </div>

  <!-- 3 -->
  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <p class=" font-bold mt-4 md:mt-0 poppins"> Native WhatsApp Payments</p>
      <p class="text-[#6e6e6e] inder">

        Collect Payments directly within WhatsApp via UPI, Netbanking & Cards & grow your Revenue
      </p>
      </p>
    </div>
    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:pr-3 ">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 58.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
  </div>
  <!-- 4 -->
  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 flex justify-center md:justify-start">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 59.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <p class=" font-bold mt-4 md:mt-0 poppins ">Build no-code Chatbot in minutes</p>
      <p class="text-[#6e6e6e] inder">

        Build your Own Chatbot Flows your Way! Easy-to-use Chatbot & Catalog Flow builder to build your conversational journeys
      </p>
    </div>
  </div>
  <?php
  include("common-marketing.php")
  ?>
  <div>
    <h1 class="text-4xl md:text-5xl font-bold text-center mt-3 poppins">WhatsApp Ecommerce Use Cases</h1>
  </div>



  <!-- 1 -->

  <div class="flex flex-col md:flex-row items-center px-5 gap-5 " data-aos="fade-up">
    <div class="w-full md:w-1/2 mb-2 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <h1 class="font-bold mt-4 md:mt-0 poppins"> Ads that Click to WhatsApp</h1>
      With MyWebsite, you can create and manage Facebook and Instagram ads that direct users straight to WhatsApp.
      <ol class="list-disc list-inside text-[#6e6e6e] inder">
        <li class="mt-2"> Smarter campaigns: Use our AI-powered Ad Manager to generate up to 5x more leads.</li>
        <li class="mt-2">Advanced chatbots: Automatically qualify leads with AI-powered chatbots.</li>
        <li class="mt-2">Instant lead capture: Instantly collect users’ names and WhatsApp numbers when they click your ad.</li>
        <li class="mt-2">All-in-one platform: Recharge ad credits, create campaigns, segment leads, and re-engage—all from within MyWebsite.</li>
      </ol>

      <button
        class="text-white font-semibold inder py-3 px-6 rounded-lg text-lg mt-4 transition duration-300 ml-5 mb-2"
        style="background-color: #006239;"
        onmouseover="this.style.backgroundColor='#00784A';"
        onmouseout="this.style.backgroundColor='#006239';" data-aos="zoom-in">
        Learn More
      </button>

      </p>
    </div>
    <div class="w-full md:w-1/2 flex justify-center md:justify-end">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 61.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
  </div>


  <!-- 2 -->
  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 flex justify-center md:justify-start">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 62.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
        <p
          class="font-bold mt-4 md:mt-0 poppins">Engage and Qualify Leads with AI Chatbots</p>Automate 85% of common customer queries using a drag-and-drop WhatsApp Chatbot.
      <ol class="list-disc list-inside text-[#6e6e6e] inder">
        <li class="mt-2"> Answer frequently asked questions.</li>
        <li class="mt-2"> Qualify leads automatically</li>
        <li class="mt-2">Showcase product catalogs.</li>
        <li class="mt-2">Keep your business running 24/7.. </li>
      </ol>
      <button
        class="text-white font-semibold py-3 inder px-6 rounded-lg text-lg mt-4 transition duration-300 ml-5 mb-2"
        style="background-color: #006239;"
        onmouseover="this.style.backgroundColor='#00784A';"
        onmouseout="this.style.backgroundColor='#006239';" data-aos="zoom-in">
        Learn More
      </button>
      </p>
    </div>
  </div>



  <!-- 3 -->
  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <h1 class="font-bold mt-4 md:mt-0 poppins"> Broadcast Carousel Card messages on WhatsApp</h1>
      <p class="text-[#6e6e6e] inder">

        Showcase up to 10 products at once with visually appealing WhatsApp carousel card messages designed to grab attention and drive engagement.
      </p>
      </p>
      <button
        class="text-white font-semibold inder py-3 px-6 rounded-lg text-lg mt-4 transition duration-300 ml-5 mb-2"
        style="background-color: #006239;"
        onmouseover="this.style.backgroundColor='#00784A';"
        onmouseout="this.style.backgroundColor='#006239';" data-aos="zoom-in">
        Learn More
      </button>
    </div>
    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:pr-3 ">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 63.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
  </div>
  <!-- 4 -->
  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 flex justify-center md:justify-start">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 64.png" alt="WhatsApp API Illustration" class="w-auto h-auto object-contain">
      </div>
    </div>
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <h1 class="font-bold mt-4 md:mt-0 poppins"> Recover 45-60% Abandoned Carts</h1>
      <p class="text-[#6e6e6e] inder">

        Did you know? 8 out of 10 customers abandon their carts without completing the purchase.
        With MyWebsite, you can recover these lost sales by sending abandoned cart reminders directly on WhatsApp.
        Sweeten the deal: Send exclusive discounts to motivate customers to complete their purchase—and watch your conversions soar!
      </p>
      </p>
      <button
        class="text-white inder font-semibold py-3 px-6 rounded-lg text-lg mt-4 transition duration-300 ml-5 mb-2"
        style="background-color: #006239;"
        onmouseover="this.style.backgroundColor='#00784A';"
        onmouseout="this.style.backgroundColor='#006239';" data-aos="zoom-in">
        Explore Templates </button>
    </div>
  </div>

  <!-- 5 -->

  <div class="flex flex-col md:flex-row items-center px-5 gap-8 " data-aos="fade-up">
    <div class="w-full md:w-1/2 mb-6 md:mb-0 text-xl md:text-2xl px-2  ">
      <p class="text-gray-700  max-w-md mx-auto md:mx-0 text-center md:text-left ">
      <h1 class="font-bold mt-4 md:mt-0 poppins"> Showcase Catalogs and Collect Payments Directly on WhatsApp</h1>
      <p class="text-[#6e6e6e] inder">

        This is the perfect feature for ecommerce store owners:Display your product catalogs, let customers browse, select, and purchase products without ever leaving WhatsApp
      </p>
      </p>
      <button
        class="text-white font-semibold inder py-3 px-6 rounded-lg text-lg mt-4 transition duration-300 ml-5 mb-2"
        style="background-color: #006239;"
        onmouseover="this.style.backgroundColor='#00784A';"
        onmouseout="this.style.backgroundColor='#006239';" data-aos="zoom-in">
        Learn More
      </button>
    </div>
    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:pr-3 ">
      <div class="relative w-full max-w-xl" data-aos="zoom-in">
        <img src="image/Industry_E-Commerce/image 65.png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
      </div>
    </div>
  </div>



  <?php
  include("footer.php")
  ?>

  <script>
    AOS.init();
  </script>
</body>

</html>