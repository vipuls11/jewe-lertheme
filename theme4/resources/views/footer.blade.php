<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- -----------------tailwind-------------- --}}
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <style>
    .container {
      width: 90%;
      margin: auto;
    }

    .line-footer li a {
      position: relative;
    }

    .line-footer li a::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 1px;
      left: 0;
      bottom: -5px;
      background-color: #000;
      transform: scale(0, 1);
      transition: transform 0.7s ease;
    }

    .line-footer li a:hover::after {
      transform: scale(1, 1);
    }
  </style>
</head>

<body>
  {{-- .................................footer................................. --}}

  <div class=" bg-[rgb(135,55,78)] text-white">
    <div class=" border-b border-[rgb(252,234,227)] ">
      <div class="container">
        {{-- <div class="flex flex-wrap justify-between items-center  ">
          <div class="py-4">
            You’re invited! Join our mailing list to get 12% off your first order, new launches and more!
          </div>

          <div class="my-2 border-solid border border-red-500 bg-red-500 rounded-lg">
            <input type="text" placeholder="Enter Your Email Address"
              class="rounded-lg py-2 w-44 outline-none lg:w-72 md:w-72 px-2"><button
              class="foot-btn text-center text-white py-2 px-2 ">Sign Up<button>
          </div>
        </div> --}}
      </div>
    </div>
    <div class="container ">

      <div class="r py-4 grid lg:grid-cols-5  gap-4">

        <div>
          <h1 class="">INFORMATION</h1>
          <ul class=" mt-3 line-footer text-sm">
            <li class="mb-2"><a href="">About Us</a></li>
            <li class="mb-2"><a href="">Advantages</a></li>
            <li class="mb-2"><a href="">Career</a></li>
            <li class="mb-2"><a href="">FAQ</a></li>
            <li><a href=""></a>Certification</li>
            <li><a href=""></a>Blog</li>
          </ul>
        </div>

        <div>
          <h1 class=" "> MISCELLANEOUS</h1>
          <ul class=" mt-3 line-footer text-sm">
            <li class="mb-2"><a href="">My Account</a></li>
            <li class="mb-2"><a href="">Contact Us</a></li>
            <li class="mb-2"><a href="">Site Map</a></li>
            <li class="mb-2"><a href="">Corporate Gift</a></li>
            <li class="mb-2"><a href="">Order</a></li>
            <li class="mb-2"><a href="">Reciprocal Links</a></li>
          </ul>
        </div>

        <div>
          <h1 class=" ">POLICIES</h1>
          <ul class=" mt-3 line-footer text-sm">
            <li class="mb-2"><a href="">Cancellation</a></li>
            <li class="mb-2"><a href="">Privary Policy</a></li>
            <li class="mb-2"><a href="">Shipping & Delivery</a></li>
            <li class="mb-2"><a href="">Terms & Conditions</a></li>
            <li class="mb-2"><a href="">Return & Refund </a></li>
            <li class="mb-2"><a href="">Lifetime Warranty</a></li>
          </ul>
        </div>

        <div>
          <h1 class=""> 24/7 CUSTOMER SUPPORT</h1>
          <ul class=" mt-3 line-footer text-sm">
            <li class="mb-2"><a href=""><i class="fa-solid fa-phone-flip"></i>&nbsp; 999999999999</a></li>
            <li class="mb-2"><a href=""><i class="fa-solid fa-envelope"></i>&nbsp; Email</a></li>
            <li class="mb-2"><a href="">jewelley Inc. Downtown Los Angeles</a></li>
            <li class="mb-2">FOLLOW US ON</li>
            {{-- <div class="flex">
              <div class=" text-2xl mr-5 text-indigo-300"><i class="fa-brands fa-facebook"></i></div>
              <div class=" text-2xl mr-5 text-indigo-300"><i class="fa-brands fa-twitter"></i></div>
              <div class=" text-2xl mr-5 text-indigo-300"><i class="fa-brands fa-instagram"></i></div>
              <div class=" text-2xl  text-indigo-300"><i class="fa-brands fa-linkedin"></i></div>
            </div> --}}
            <div class="mt-2">
              <button type="button"
                class="text-white rounded-full bg-[#3b5998] hover:bg-[#3b5998]/90 font-medium  text-sm px-3 py-3 text-center inline-flex items-center  mr-2 mb-2">
                <svg class=" w-3 h-3" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                  <path fill="currentColor"
                    d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z">
                  </path>
                </svg>

              </button>
              <button type="button"
                class="text-white rounded-full bg-[#1da1f2] hover:bg-[#1da1f2]/90 font-medium  text-sm px-3 py-3 text-center inline-flex items-center  mr-2 mb-2">
                <svg class=" w-3 h-3" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z">
                  </path>
                </svg>

              </button>
              <button type="button"
                class="text-white rounded-full bg-[#24292F] hover:bg-[#FD1D1D]/70 bg-[#FD1D1D]/90 font-medium  text-sm px-3 py-3 text-center inline-flex items-center  dark:hover:bg-[#050708]/30 mr-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                  class="bi bi-pinterest" viewBox="0 0 16 16">
                  <path
                    d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
                </svg>

              </button>
              <button type="button"
                class="text-white rounded-full bg-[#F56040] hover:bg-[#F56040]/90 font-medium  text-sm px-3 py-3 text-center inline-flex  items-center  mr-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
              </button>
            </div>
          </ul>
        </div>

        <div>
          <h1 class=" ">NETWORK PAYMENT SYSTEMS</h1>
          <ul class=" mt-3 line-footer text-sm">
            <li class="mb-2">
              <p>We use Payu for 100% Secure Payments. We accept Payments from all major Credit Card, Debit Cards,
                Netbanking.</p>
            </li>
            <div class="mt-2">
              <div class="mt-2">
                <div class="inline-flex py-2 text-center inline-flex items-center  mr-1 mb-2 ">
                  <img src="image/RuPay.svg.png" alt="" class="w-10 h-4">
                </div>
                <div class="inline-flex py-2 text-center inline-flex items-center  mr-1 mb-2">
                  <img src="image/Visa_Inc._logo.svg.webp" alt="" class="w-10 h-4">
                </div>
                <div class="inline-flex  py-2 text-center inline-flex items-center  mr-1 mb-2">
                  <img src="image/2560px-PayPal_logo.svg.png" alt="" class="w-10 h-4">
                </div>
                <div class="inline-flex  py-2  text-center inline-flex items-center  mr-1 mb-2">
                  <img src="image/american.png" alt="" class="w-10 h-5">
                </div>
              </div>
            </div>
            <li class="mb-2">
              <h1>DELIVERY SERVICES</h1>
            </li>
            <li class="mb-2">
              <p>we ships our items in 3-4 Days, and we use India's Prifered Shipping Companies Like:Fedex, DHL, UPS</p>
            </li>
            <div class="mt-2">
              <div class="inline-flex py-2 text-center inline-flex items-center  mr-1 mb-2 ">
                <img src="image/DHL-Emblem.png" alt="" class="w-16 h-4">
              </div>
              <div class="inline-flex py-2 text-center inline-flex items-center  mr-1 mb-2">
                <img src="image/download (1).png" alt="" class="w-14 h-4">
              </div>
              {{-- <div class="inline-flex  py-2 text-center inline-flex items-center  mr-1 mb-2">
                <img src="image/RuPay.svg.png" alt="" class="w-10 h-4">
              </div>
              <div class="inline-flex   py-2 text-center inline-flex items-center  mr-1 mb-2">
                <img src="image/RuPay.svg.png" alt="" class="w-10 h-4">
              </div> --}}
            </div>
          </ul>

          <div>

            <div data-dial-init class="fixed right-3 bottom-20 group">
              <div id="speed-dial-menu-default" class="flex flex-col items-center hidden mb-4 space-y-2">
                {{-- <button type="button" data-tooltip-target="tooltip-share" data-tooltip-placement="left" class="flex justify-center
                items-center w-[52px] h-[52px] text-gray-500 z-50 hover:text-gray-900 bg-white rounded-full border border-gray-200
                  dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700
                  dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                  <svg aria-hidden="true" class="w-6 h-6 -ml-px " fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0
                  10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"></path>
                  </svg>
                  <span class="sr-only">Share</span>
                </button> --}}
                {{-- <div id="tooltip-share" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium
              text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                  Share
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div> --}}
                {{-- <button type="button" data-tooltip-target="tooltip-print" data-tooltip-placement="left" class="flex justify-center items-center z-50 w-[52px] h-[52px] text-gray-500 hover:text-gray-900 bg-white rounded-full
                  border border-gray-200 dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400
                    hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none
                    dark:focus:ring-gray-400">
                  <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 
                    2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span class="sr-only">Print</span>
                </button> --}}
                {{-- <div id="tooltip-print" role="tooltip"
                  class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                  Print
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div> --}}
                <button type="button" data-tooltip-target="tooltip-download" data-tooltip-placement="left" class="flex justify-center
                items-center w-[52px] h-[52px] z-50 text-gray-500 hover:text-gray-900 bg-white rounded-full border border-gray-200
                  dark:border-gray-600 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700
                  dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
                  <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-5L9 4H4zm7 5a1 1 0 00-2 0v1.586l-.293-.293a.999.999 
                    0 10-1.414 1.414l2 2a.999.999 0 001.414 0l2-2a.999.999 0 10-1.414-1.414l-.293.293V9z" fill-rule="evenodd">
                    </path>
                  </svg>
                  <span class="sr-only">Order</span>
                </button>
                <div id="tooltip-download" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm 
                font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip
                dark:bg-gray-700">
                <a href="{{asset('order')}}"> Order</a>
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button type="button" data-tooltip-target="tooltip-copy" data-tooltip-placement="left" class="flex justify-center items-center w-[52px] h-[52px] z-50 text-gray-500 hover:text-gray-900 bg-white rounded-full 
                border border-gray-200 dark:border-gray-600 dark:hover:text-white shadow-sm dark:text-gray-400
                hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none
                  dark:focus:ring-gray-400">
                  <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                    <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                  </svg>
                  <span class="sr-only">What's app Chat</span>
                </button>
                <div id="tooltip-copy" role="tooltip" class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium
              text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              What's app Chat
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
              </div>
              <button type="button" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default"
                aria-expanded="false" id="top-hide" class="flex items-center z-50 justify-center  text-white bg-[rgb(39,67,132)] rounded-full w-14 h-14
              hover:bg-[rgb(39,67,132)]  dark:bg-[rgb(39,67,132)] dark:hover:bg-[rgb(39,67,132)]">
                <svg aria-hidden="true" class="w-8 h-8 transition-transform group-hover:rotate-45 m-auto " fill="none"
                  stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                  </path>
                </svg>
                <span class="sr-only">Open actions menu</span>
              </button>
            </div>

          </div>
          <button id="scroll" class="hidden fixed bottom-5 right-3 z-50  border border-blue-900 outline-none 
          outline-0 bg-[rgb(39,67,132)] hover:bg-orange-200 text-white cursor-pointer 
          py-4 px-5 rounded-full"><i class="fa-solid fa-arrow-up text-xl text-black"></i></button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Get the button

const tophide = document.getElementById("top-hide");
// When the user scrolls down 30px from the top of the document, show the button
window.onscroll = function() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
   
    tophide .style.display = "block";
  } else {
    tophide .style.display = "none";
 
  }
};
  </script>

<script>
  $(document).ready(function(){ 
$(window).scroll(function(){ 
    if ($(this).scrollTop() > 100) { 
        $('#scroll').fadeIn(); 
    } else { 
        $('#scroll').fadeOut(); 
    } 
}); 
$('#scroll').click(function(){ 
    $("html, body").animate({ scrollTop: 0 }, 800); 
    return false; 
}); 
});

</script>  
</body>

</html>