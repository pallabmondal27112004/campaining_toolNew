<?php
// Define features dropdown items
$features_items = [

  'Whatsapp broadcast' => 'Whatsapp-broadcast',
  'Whatsapp chatbot ' => 'chatbot',
  'whatsapp ads' => 'whatsapp-ads',
  'Whatsapp catalogue' => 'catalogue',
  'whatsapp pay' => 'whatsapp-pay',
  'whatsapp webview' => 'whatsapp-webview',
  'whatsapp forms' => 'whatsapp-forms',
  'whatsapp Click tracking' => 'whatsapp-Click-tracking',
  'whatsapp scheduler' =>'whatsapp_scheduler',
];

$product_items = [
  'whatsapp ads' => 'whatsapp-ads',
  'blue tik' => 'bluetik',
  'whatsapp marketing'=>'whatsapp-marketing',
  'whatsapp pay' => 'whatsapp-pay',
  'whatsapp webview' => 'whatsapp-webview',
  'whatsapp_api' => 'whatsapp_api',

  'whatsapp Click tracking' => 'whatsapp-Click-tracking',
  'Whatsapp link & QR'=>'link&qr'
];
$indtries_items = [

  'Finance & Insurance' => 'Industry-Finance&Insurance',
  'Finance & healthcare' => 'Industry-Finance&healthcare',
  'Event & Webinar' => 'Industry-Event&Webinar',
  'Real Estate' => 'Industry-RealEstate',
  'Automobile' => 'Industry-Automobile',
  'ecommerce' => 'indrustry_ecommerce',
  'Tech Companies' => 'industry_tech_compacy',
  'Education'=>'industry-education',

];
$resource_items = [
  'Template Library' => 'Template-Library',
  'Case studies' => 'case-studies',
  'whatsapp_api' => 'whatsapp_api',
  'Help center ' => 'askto',

];


?>
<style>
  #mobile-menu{
    overflow-y: scroll;
  }
</style>
<nav class=" font-[dmsans] flex h-[64px] pl-[20px] pr-[20px] sm:pl-[50px] sm:pr-[50px] border-b-2 border-[#353131] w-full items-center justify-between fixed bg-white z-30 ">

  <div class="left-side flex items-center justify-between text-black lg:w-[65%] ">
    <a
      data-aos="fade-up"
      data-aos-anchor="#example-anchor"
      data-aos-offset="500"
      data-aos-duration="1000"
      href="index">
      <div class="h4 font-bold lg:text-[16px] xl:text-xl poppins">Campaigning Tool</div>
    </a>
    <div class="list-nav hidden lg:flex lg:gap-3 items-center gap-5 ml-5">
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] relative group" tabindex="0" aria-haspopup="true" aria-expanded="false">
        <a href="#" class="hover:text-[#075E54] transition-colors focus:outline-none inder">Products <i class="ri-arrow-down-s-line"></i></a>
        <div class="absolute left-0 mt-2 min-w-48 bg-white rounded-lg shadow-lg py-2 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-all duration-300 ease-in-out z-50">
          <?php foreach ($product_items  as $name => $link): ?>
            <a href="<?php echo $link; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#075E54] hover:text-white transition-colors">
              <?php echo $name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </span>
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] relative group" tabindex="0" aria-haspopup="true" aria-expanded="false">
        <a href="#" class="hover:text-[#075E54] transition-colors focus:outline-none inder">Features <i class="ri-arrow-down-s-line"></i></a>
        <div class="absolute left-0 mt-2 min-w-48 bg-white rounded-lg shadow-lg py-2 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-all duration-300 ease-in-out z-50">
          <?php foreach ($features_items as $name => $link): ?>
            <a href="<?php echo $link; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#075E54] hover:text-white transition-colors">
              <?php echo $name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </span>
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] relative group" tabindex="0" aria-haspopup="true" aria-expanded="false">
        <a href="#" class="hover:text-[#075E54] transition-colors focus:outline-none inder">Resources <i class="ri-arrow-down-s-line"></i></a>
        <div class="absolute left-0 mt-2 min-w-48 bg-white rounded-lg shadow-lg py-2 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-all duration-300 ease-in-out z-50">
          <?php foreach ($resource_items as $name => $link): ?>
            <a href="<?php echo $link; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#075E54] hover:text-white transition-colors">
              <?php echo $name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </span>
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] relative group" tabindex="0" aria-haspopup="true" aria-expanded="false">
        <a href="#" class="hover:text-[#075E54] transition-colors focus:outline-none inder">Industres <i class="ri-arrow-down-s-line"></i></a>
        <div class="absolute left-0 mt-2 min-w-48 bg-white rounded-lg shadow-lg py-2 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-all duration-300 ease-in-out z-50">
          <?php foreach ($indtries_items  as $name => $link): ?>
            <a href="<?php echo $link; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#075E54] hover:text-white transition-colors">
              <?php echo $name; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </span>
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] "><a class="inder" href="#Enterprise">Enterprise</a></span>
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] inder"><a class="inder" href="pricing">Pricing</a></span>
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] inder"><a class="inder" href="askto">Docs</a></span>
      <span
        data-aos="fade-up"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="1000"
        class="font-[500] text-[15.2px] inder"><a class="inder" href="contact_page">Contact</a></span>
    </div>
  </div>

  <div class="right-side hidden  lg:flex items-center gap-5 lg:w[35%]">
    <div
      data-aos="fade-up"
      data-aos-anchor="#example-anchor"
      data-aos-offset="500"
      data-aos-duration="1000"

      class="flex items-center gap-1 justify-cente">
      <i class="ri-github-fill text-[28px]"></i>
      <span class="text-[12px] inder">77.1K</span>
    </div>
    <div
      data-aos="fade-up"
      data-aos-anchor="#example-anchor"
      data-aos-offset="500"
      data-aos-duration="1000"
      class="sign-in-btn inder bg-black text-white text-center rounded-[6px] py-1 px-3 font-[300] cursor-pointer">
      Sign in
    </div>
    <div
      data-aos="fade-up"
      data-aos-anchor="#example-anchor"
      data-aos-offset="500"
      data-aos-duration="1000"
      class="bg-[#075E54] inder text-white text-center rounded-[6px] py-1 px-3 font-[300] cursor-pointer">
      Start free trial
    </div>

    <!-- Mobile Menu Toggle Button -->

  </div>
  <button id="menu-toggle" class="lg:hidden text-2xl ml-2 z-50">
    <i id="menu-icon" class="ri-menu-line text-black"></i>
  </button>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="fixed  top-0 right-0 h-full min-w-64 text-black bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col p-6 gap-4 z-40">
    <div class="mobile-products-dropdown mt-5">
      <span class="font-[500] text-[16px] inder flex items-center justify-between cursor-pointer">
        Products <i class="ri-arrow-down-s-line"></i>
      </span>
      <div class="ml-4 mt-2 hidden">
        <?php foreach ($product_items as $name => $link): ?>
          <a href="<?php echo $link; ?>" class="inder block py-2 text-sm text-gray-700 hover:text-[#075E54] transition-colors">
            <?php echo $name; ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="mobile-features-dropdown">
      <span class="font-[500] text-[16px] inder flex items-center justify-between cursor-pointer">
        Features <i class="ri-arrow-down-s-line"></i>
      </span>
      <div class="ml-4 mt-2 hidden">
        <?php foreach ($features_items as $name => $link): ?>
          <a href="<?php echo $link; ?>" class="block inder  py-2 text-sm text-gray-700 hover:text-[#075E54] transition-colors">
            <?php echo $name; ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="mobile-resources-dropdown">
      <span class="font-[500] text-[16px] inder flex items-center justify-between cursor-pointer">
         Resources<i class="ri-arrow-down-s-line"></i>
      </span>
      <div class="ml-4 mt-2 hidden">
        <?php foreach ($resource_items as $name => $link): ?>
          <a href="<?php echo $link; ?>" class="block inder py-2 text-sm text-gray-700 hover:text-[#075E54] transition-colors">
            <?php echo $name; ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="mobile-industries-dropdown">
      <span class="font-[500] text-[16px] inder flex items-center justify-between cursor-pointer">
        Industres <i class="ri-arrow-down-s-line"></i>
      </span>
      <div class="ml-4 mt-2 hidden">
        <?php foreach ($indtries_items as $name => $link): ?>
          <a href="<?php echo $link; ?>" class="block py-2 text-sm inder text-gray-700 hover:text-[#075E54] transition-colors">
            <?php echo $name; ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <span class="font-[500]  text-[16px] inder"><a class="inder" href="#Enterprise">Enterprise</a></span>
    <span class="font-[500]  text-[16px] inder"><a class="inder" href="askto">Docs</a></span>
    <span class="font-[500]  text-[16px] inder"><a class="inder" href="contact_page">Contact</a></span>

    <div class="flex flex-col gap-3 mt-4">
      <div class="flex items-center gap-2">
        <i class="ri-github-fill text-[24px]"></i>
        <span class="text-[12px] inder">77.1K</span>
      </div>
      <div class="bg-black text-white text-center rounded-[6px] py-2 font-[300] cursor-pointer">Sign in</div>
      <div class="bg-[#075E54] text-white text-center rounded-[6px] py-2 font-[300] cursor-pointer">Start free trial</div>
    </div>
  </div>

  <!-- Background overlay -->
  <div id="overlay" class="fixed inset-0 bg-black opacity-30 hidden z-30"></div>
</nav>

<script>
  const mobileFeaturesDropdown = document.querySelector('.mobile-features-dropdown');
  mobileFeaturesDropdown.querySelector('span').addEventListener('click', function() {
    const dropdown = this.nextElementSibling;
    dropdown.classList.toggle('hidden');
  });
   const mobileProductDropdown = document.querySelector('.mobile-products-dropdown');
  mobileProductDropdown.querySelector('span').addEventListener('click', function() {
    const dropdown = this.nextElementSibling;
    dropdown.classList.toggle('hidden');
  });
   const mobileResourceDropdown = document.querySelector('.mobile-resources-dropdown');
  mobileResourceDropdown.querySelector('span').addEventListener('click', function() {
    const dropdown = this.nextElementSibling;
    dropdown.classList.toggle('hidden');
  });
   const mobileIndustriesDropdown = document.querySelector('.mobile-industries-dropdown');
  mobileIndustriesDropdown.querySelector('span').addEventListener('click', function() {
    const dropdown = this.nextElementSibling;
    dropdown.classList.toggle('hidden');
  });
</script>