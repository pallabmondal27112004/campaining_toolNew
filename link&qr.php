<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("headlink.php") ?>
  <link rel="stylesheet" href="style.css">
  <title>Whatsapp Link & QR </title>
  <link rel="icon" type="image/png" href="image/webview/favicon.svg" />

</head>

<body class="font-[inder] bg-white  overflow-x-hidden">

  <?php include 'nevbar.php'; ?>

  <!-- Top Section -->
  <section class="w-full py-10">
    <div class="mt-10 space-y-4 bg-gradient-to-r from-[#e6f1ea] to-[#114e3b] dark:from-[#000000] dark:to-[#01432e] text-black dark:text-white mx-3 px-4 py-8 md:mb-8 md:ml-10 rounded-[2rem] shadow-xl shadow-gray-500"
    style="background: linear-gradient(to right, #e6f1ea, #114e3b);"
    >
      <h2 class="text-2xl font-semibold capitalize sm:text-4xl text-[#114e3b] poppins">Free WhatsApp link generator by Mahadev</h2>
      <p class="text-xl text-[#6e6e6e] px-4 leading-relaxed md:pr-[12rem] inder">
        Drive users to WhatsApp in a click! Create FREE WhatsApp Links & WhatsApp QR Codes for your business in 3 simple steps, share it & boost your business growth.     
      </p>
    </div>
  </section>

  <!-- Form & Image -->
  <section>
    <div class="flex flex-col lg:flex-row items-center mt-10 justify-between gap-8 mb-8 overflow-hidden">
      <!-- Form Column -->
      <div class="w-full lg:w-1/2 h-full xl:px-32 p-6">
        <h3 class="text-2xl text-gray-950 pb-4 poppins">WhatsApp Phone Number</h3>
        <form action="#">
          <label for="phone" class="pt-6 text-xl text-gray-600 block mb-2  inder">
            Select your country code & Type your WhatsApp phone number
          </label>
          <div class="flex flex-wrap gap-4 mb-6">
            <input type="number" name="country_code" class="shadow-black inset-shadow-sm rounded-lg h-[2.8rem] w-[5.8rem] border border-[#E0E0E0]" />
            <input type="number" name="phone" class="inset-shadow-sm rounded-lg h-[2.8rem] flex-1 max-w-[21rem] md:min-w-[180px] border border-[#E0E0E0]" />
          </div>
          <h4 class="poppins">Custom Message 😊</h4>
          <label for="message" class="pt-6 text-xl text-gray-600 block mb-2 inder">
            Type your custom message with emojis & WhatsApp text formatting
          </label>
          <textarea name="message" class="inset-shadow-sm rounded-lg h-[6rem] w-full max-w-[28rem] border border-[#E0E0E0]"></textarea>
        </form>
      </div>

      <!-- Image Column with Background Shape -->
      <div class="relative w-full lg:w-1/2 flex justify-center overflow-hidden">
        <div class="absolute z-0 
          w-[250px] h-[260px] md:w-[300px] md:h-[300px]
          rounded-[4rem] 
          bg-gradient-to-r 
          from-[#f9fbfa] to-[#114e3b7d] 
          dark:from-[#3fcf8e3c] dark:to-black 
          rotate-[40deg] 
          top-[100px] right-0 md:right-[2.5rem] lg:right-[5rem]">
        </div>
        <img src="img/image 123.svg" alt="Customer Support" class="rounded-xl w-full max-w-[18rem] z-10">
      </div>
    </div>
  </section>

  <!-- Info Boxes with Decorative Shape -->
  <section class="relative w-full overflow-hidden py-5">
    <div class="relative z-10 mt-10 space-y-4 bg-[#d9d9d9] text-black dark:text-white mx-3 px-5 py-8 md:mb-8 md:ml-10 rounded-[2rem]">
      <p class="text-xl text-[#6e6e6e] px-4 leading-relaxed inder">
        Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
      </p>
    </div>

    <div class="relative z-10 mt-10 space-y-4 bg-[#d9d9d9] text-black dark:text-white mx-3 px-5 mb-10 py-8 md:mb-8 md:ml-10 rounded-[2rem]">
      <p class="text-xl text-[#6e6e6e] px-4 leading-relaxed inder">
        Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
      </p>
    </div>

    <!-- Rotated Background Element (Fixed Right Value) -->
    <div class="absolute z-0 
      w-[250px] h-[260px] md:w-[300px] md:h-[300px]
      rounded-[4rem] 
      bg-gradient-to-r 
      from-[#f9fbfa] to-[#114e3b7d]
      dark:from-black dark:to-[#3fcf8e3c]
      rotate-[215deg] 
      top-[270px] right-[13rem] md:right-[28rem] lg:right-[43rem]">
    </div>

    <div class="relative z-10 mt-10 space-y-4 bg-[#d9d9d9] text-black dark:text-white mx-3 px-5 mb-10 py-8 md:mb-8 md:ml-10 rounded-[2rem]">
      <p class="text-xl text-[#6e6e6e] px-4 leading-relaxed inder">
        Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat. Lorem ipsum dolor sit amet consectetur adipiscing elit dolor posuere vel venenatis eu sit massa volutpat.
      </p>
    </div>
  </section>

  <!-- 3 Images in Row -->
  <section class="w-full py-10 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row gap-6 justify-center items-center">
        <div class="w-full max-w-xs">
          <img src="img/image 126.svg" alt="Generate WhatsApp QR" class="w-full h-auto rounded-xl shadow-md">
        </div>
        <div class="w-full max-w-xs">
          <img src="img/image 125.svg" alt="Add WhatsApp to Website" class="w-full h-auto rounded-xl shadow-md">
        </div>
        <div class="w-full max-w-xs">
          <img src="img/image 124.svg" alt="WhatsApp Marketing Tools" class="w-full h-auto rounded-xl shadow-md">
        </div>
      </div>
    </div>
  </section>

  <!-- Final Section with Image -->
  <div class="flex flex-col lg:flex-row items-center mt-10 justify-between gap-8 mb-8 p-5">
    <div class="w-full lg:w-1/2 h-full p-12">
      <p class="text-[#6e6e6e] text-xl font-semibold sm:text-2xl inder">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eaque corporis maiores, veritatis labore perspiciatis.
      </p>
    </div>

    <div class="w-full lg:w-1/2 flex justify-center">
      <img src="img/image 122.svg" alt="Customer Support" class="rounded-xl shadow-md w-full max-w-[27rem]">
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>