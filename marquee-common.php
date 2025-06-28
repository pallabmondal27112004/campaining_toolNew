<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
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
</head>
<body class="font-[dmsans]">
      <div class="w-full overflow-hidden bg-white border-y-2 border-gray-200 py-6 marquee-wrapper">
    <div class="relative">
      <div class="flex w-max animate-marquee space-x-8 hover:[animation-play-state:paused] px-4">
        <!-- Repeat logos -->
        <img src="image/Industry_E-Commerce/1921.png" class="h-16 w-auto object-contain" alt="Logo1" />
        <img src="image/Industry_E-Commerce/1922.png" class="h-16 w-auto object-contain" alt="Logo2" />
        <img src="image/Industry_E-Commerce/1923.png" class="h-16 w-auto object-contain" alt="Logo3" />
        <img src="image/Industry_E-Commerce/1924.png" class="h-16 w-auto object-contain" alt="Logo4" />
        <img src="image/Industry_E-Commerce/1925.png" class="h-16 w-auto object-contain" alt="Logo5" />
        <img src="image/Industry_E-Commerce/1926.png" class="h-16 w-auto object-contain" alt="Logo6" />
        <img src="image/Industry_E-Commerce/1927.png" class="h-16 w-auto object-contain" alt="Logo7" />
        <img src="image/Industry_E-Commerce/1928.png" class="h-16 w-auto object-contain" alt="Logo8" />

        <!-- Duplicate logos for seamless loop -->
        <img src="image/Industry_E-Commerce/1921.png" class="h-16 w-auto object-contain" alt="Logo1-2" />
        <img src="image/Industry_E-Commerce/1922.png" class="h-16 w-auto object-contain" alt="Logo2-2" />
        <img src="image/Industry_E-Commerce/1923.png" class="h-16 w-auto object-contain" alt="Logo3-2" />
        <img src="image/Industry_E-Commerce/1924.png" class="h-16 w-auto object-contain" alt="Logo4-2" />
        <img src="image/Industry_E-Commerce/1925.png" class="h-16 w-auto object-contain" alt="Logo5-2" />
        <img src="image/Industry_E-Commerce/1926.png" class="h-16 w-auto object-contain" alt="Logo6-2" />
        <img src="image/Industry_E-Commerce/1927.png" class="h-16 w-auto object-contain" alt="Logo7-2" />
        <img src="image/Industry_E-Commerce/1928.png" class="h-16 w-auto object-contain" alt="Logo8-2" />
      </div>
    </div>
  </div>
</body>
</html>