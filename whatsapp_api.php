<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WhatsApp Business API - Campaigning Tool</title>

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
  </style>
  <link rel="icon" type="image/png" href="image/webview/favicon.svg" />

</head>

<body class="bg-white text-black transition-colors duration-300 font-[dmsans]">

  <?php
  include("nevbar.php")
  ?>
    <section
            class="w-[100%] pt-[4rem]  bg-amber-300  flex justify-between align-center flex-wrap"
            style="background: linear-gradient(90deg, #075E54 31.73%, #FFFFFF 94.71%);">
            <div class="absolute top-0 start-0">

                <img src="image/bluetikimg/Rectangle 4510.png" class="w-[300px] h-[300px]   z-[-2]  " alt="">
            </div>
            <div class="lg:w-[60%] w-[100%] flex justify-center items-center flex-col gap-8">
                <h1 class="lg:text-[36px] text-[24px] font-bold mb-6 p-3 poppins text-white ">WhatsApp Business <span class="text-[#00FFAA]">API</span></h1>
            <p class="text-lg max-w-md text-black px-3  inder text-white">Lorem ipsum dolor sit amet consectetur adipiscing elit, dolor posuere vel venenatis eu sit massa volutpat.</p>
          </div>
            <div class="lg:w-[40%]  w-[100%] flex h-[100%] justify-center align-center">            <img src="image/whatsapp_api/image-Photoroom 1.png" alt="WhatsApp Phone Mockup" class="w-auto h-auto max-h-96 relative z-10">
</div>
        </section>
    <!-- Hero Section -->
   
    <div class="pt-6 flex flex-col md:flex-row items-center px-5 gap-8" data-aos="fade-up">
      <div class="w-full md:w-1/2 mb-6 md:mb-0">
        <p class="inder text-[#6e6e6e] px-4 text-lg max-w-md mx-auto md:mx-0 text-center md:text-left">
          Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
        </p>
      </div>
      <div class="w-full md:w-1/2 flex justify-center md:justify-end">
        <div class="relative w-full max-w-xs" data-aos="zoom-in">
          <img src="image/whatsapp_api/Group-37105-Photoroom 1 .png" alt="WhatsApp API Illustration" class="w-full h-auto object-contain">
        </div>
      </div>
    </div>

    <!-- Description Section -->
   
          <div class="flex flex-col md:flex-row items-center gap-12 mb-20" data-aos="fade-up">
      
            <div class="w-full md:w-1/2 relative flex justify-center mb-8 md:mb-0">
              <div class="bg-[#E8F5E9] rounded-full p-8 w-60 h-60 md:w-80 md:h-80 mx-auto relative flex items-center justify-center" data-aos="zoom-in">
                <img src="image/whatsapp_api/Group 39540.png" alt="Person with WhatsApp" class="w-40 h-40 md:w-100 md:h-100 object-contain">
              </div>
            </div>
            <div class="w-full md:w-1/2 relative">
              <p class="inder text-[#6e6e6e] px-4 text-lg max-w-md mx-auto md:mx-0 text-center md:text-left">
                Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
              </p>
            </div>
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