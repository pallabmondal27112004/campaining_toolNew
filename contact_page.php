<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>

    <?php
    include("headlink.php")
    ?>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom right, #16265A, #D9D9D9);

            background-attachment: fixed;
            background-size: cover;
        }

        .contact-icon:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 2px solid #fff;
            /* box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1); */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 1rem;
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: #fff;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-bottom: 2px solid #00FF37;

        }

        .contact-form textarea {
            scrollbar-width: none;
            resize: none;
            height: 5rem;
            padding-top: 40px;
            padding-bottom: 0;

        }

        .send-btn {
            width: 100%;
            padding: 7px;
            background-color: #00FF37;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.5s ease;
            color: black;
            font-weight: bold;


        }

        .send-btn:hover {
            background-color: #01C222;
        }

        .heading {
            color: #fff;
            font-family: Inika;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 4.5rem;
            margin-top: 0.5rem;


        }

        .green-gradient-box {
            background: linear-gradient(to bottom right, #ffff, #14503D);
        }
        .wp_img{
            height: 100%;
            width: 100%;
       
        }
        .wp_img_div{
  
            width: 100%;
            height: 100%;
            
        }
        .green_txt{
            color:#00FF37;
            font-family: Inika;
            font-size: 1.7rem;    
        }
    </style>
  <link rel="icon" type="image/png" href="image/webview/favicon.svg" />


</head>

<body class="">

    <?php
    include("nevbar.php")
    ?>


    <section class="py-12 px-6" data-aos="fade-up">
        <div class="max-w-6xl mx-auto text-center" data-aos="fade-down">
            <p class="heading poppins">Contact Us</p>
        </div>

        <div class="grid md:grid-cols-2  items-start max-w-4xl mx-auto green-gradient-box rounded-3xl" data-aos="zoom-in">
            <!-- Image Section -->
            <div data-aos="fade-down">
                <img src="image/contact_us/image 182.png" alt="Contact Visual" class=" object-cover">
            </div>

            <!-- Form Section -->
            <div class="p-6 rounded-xl custom-shadow contact-form " data-aos="fade-down">
                <h3 class="text-3xl font-Inika ml-2 font-bold  mb-6 text-white poppins" >Send Message</h3>
                <form class="space-y-4">
                    <input type="text" placeholder="Full Name" class=" inder">
                    <input type="email" placeholder="Email" class="mb-4 inder">
                    <textarea placeholder="Type your message here............" rows="4" class="mb-4 mt-4 inder" ></textarea>
                    <button type="submit" class="send-btn mt-4 inder">
                        Send
                    </button>
                </form>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-start justify-center gap-8 px-4 py-10 mt-2 max-w-4xl mx-auto" data-aos="fade-up">

            <!-- Contact Info Section -->
            <div class="flex flex-col gap-6 text-left text-gray-700 w-full max-w-xl mx-auto" data-aos="fade-right">

                <!-- Address -->
                <div class="flex items-center gap-4" data-aos="fade-up">
                    <img src="image/contact_us/location.png" alt="location" class="w-[105px] h-[105px] object-contain">
                    <div>
                        <h4 class="font-bold green_txt font-2xl poppins">Address</h4>
                        <p class="inder text-white">Company address, Pin no.</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="image/contact_us/call.png" alt="call" class="w-[105px] h-[105px] object-contain">
                    <div>
                        <h4 class="font-bold green_txt font-2xl poppins">Phone</h4>
                        <p class="inder text-white">Company phone number</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="200">
                    <img src="image/contact_us/message.png" alt="email" class="w-[105px] h-[105px] object-contain">
                    <div>
                        <h4 class="font-bold green_txt poppins">Email</h4>
                        <p class="inder text-white">Company Email</p>
                    </div>
                </div>

            </div>

            <!-- Image Section -->
            <div class="w-full h-full md:w-1/3 flex justify-center wp_img_div" data-aos="fade-up">
                <img src="image/contact_us/image 185.png" alt="Contact Image" class="object-contain wp_img">
            </div>

        </div>



    </section>




    <?php
    include("footer.php")
    ?>

    <script>
        AOS.init();
    </script>
</body>

</html>