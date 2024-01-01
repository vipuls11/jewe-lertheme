<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    {{-- ----------jquery------- --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('image/logo.png')}}">
    
    <style>
      /* ––––––––––––––––––––––––––––––––––––––––––––––––––
      Based on: https://codepen.io/nickelse/pen/YGPJQG
      Influenced by: https://sproutsocial.com/
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
  
  
      /* #Mega Menu Styles
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
      .mega-menu {
        display: none;
        left: -57px;
        position: absolute;
        text-align: left;
        width: 110%;
      }
  
  
  
      /* #hoverable Class Styles
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
      .hoverable {
        position: static;
      }
  
      /* .hoverable>a:after {
        content: "\25BC";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
      } */
  
      .hoverable:hover .mega-menu {
        display: block;
      }
  
  
      /* #toggle Class Styles
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
  
      .toggleable>label:after {
        content: "\25BC";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
      }
  
      .toggle-input {
        display: none;
      }
  
      .toggle-input:not(checked)~.mega-menu {
        display: none;
      }
  
      .toggle-input:checked~.mega-menu {
        display: block;
      }
  
      .toggle-input:checked+label {
        color: white;
        background: #2c5282;
        /*@apply bg-blue-800 */
      }
  
      .toggle-input:checked~label:after {
        content: "\25B2";
        font-size: 10px;
        padding-left: 6px;
        position: relative;
        top: -1px;
      }
  
      * {
       
        font-family: 'Poppins', sans-serif;
     
      }
  
      .topheader {
        font-size: 16px;
      }
  
      /* .effect:hover {
        color: #b58038;
      } */
  
      .displaycard {
        display: none;
      }
  
      .showlogin:hover+.displaycard,
      .displaycard:hover {
        display: block;
      }
  
      .togmenu {
        display: none;
      }
  
      .btn-login {
        border-radius: 15px;
        color: rgb(253, 253, 253);
        
        /* box-shadow: 10px 10px 10px -1px rgba(240, 11, 30, 0.15), -10px -10px 10px -1px rgba(250, 115, 126, 0.15); */
      }
  
      .login {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
  
      #loginpage,
      #createpage {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 20000000;
  
  
      }
  
      .create {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
  
      /* -----search-------- */
  
      span.deleteicon {
        position: relative;
        display: inline-flex;
        align-items: center;
      }
  
      span.deleteicon span {
        position: absolute;
        display: block;
        right: 7px;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        color: #fff;
        background-color: #ccc;
        font: 13px monospace;
        text-align: center;
        line-height: 1em;
        cursor: pointer;
  
      }
  
      span.deleteicon input {
        padding-right: 28px;
        box-sizing: border-box;
  
      }
  
      /* ---------------under line------------ */
  
      .active1::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        left: 0;
        bottom: 0;
        background: linear-gradient(to left, #ff9900 0%, #cc66ff 100%);
      }
  
      .under_line::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        left: 0;
        bottom: 0;
        background: linear-gradient(to left, #ff9900 0%, #cc66ff 100%);
        transform: scale(0, 1);
        transition: transform 0.7s ease;
      }
  
      .under_line:hover::after {
        transform: scale(1, 1);
      }
  
      /* .......................footer........................ */
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
  
      /* .............................footer..................... */
    </style>
  </head>
  
  
  <!--Top Header-->
  <div class="w-full flex bg-[rgb(135,55,78)] z-30 px-4 py-2 justify-between ">
  
    <div class="flex  mb-1 lg:w-3/12 lg:flex md:flex md:w-full sm:w-full  items-center">

      <div class="mr-2 lg:hidden md:hidden"><a href="tel:" class="topheader hover:text-golden "
        style="font-size: 12px"><i
        class=" md:text-xs fa-solid fa-phone  "></i></a></div>
            <div class="mr-2 lg:hidden md:hidden"><a href="mailto:" class="topheader   hover:text-golden "
        style="font-size: 12px"><i
            class="md:text-xs fa-solid fa-envelope  "></i></a></div>


      <div class="mr-2 "><a href="tel:9999999999" class="text-white hidden lg:block md:block topheader hover:text-golden " style="font-size: 12px"><i
            class=" md:text-xs fa-solid fa-phone  "></i>&nbsp;9999999999</a></div>
      <div><a href="mailto:shop@jewelery.com" class="hidden text-white lg:block md:block topheader  hover:text-golden " style="font-size: 12px"><i
            class="md:text-xs fa-solid fa-envelope  "></i>&nbsp;shop@jewelery.com</a></div>
    </div>
    <div class="text-white  align-items-center  visible  md:flex   space-x-1 ml-2 w-2/5 topheader  mt-1  ">
      <marquee class="text-xs text-golden">Introducing jewelery Plan your purchase here</marquee>
    </div>
    <div class=" flex lg:w-5/12  md:flex md:w-full   items-center justify-end">
      <div class="flex hidden md:flex items-center ">
        {{-- <div class="w-full "><input type="text" class="mt-0.5 text-sm text-black border-1 border-golden py-1"
            placeholder="search here"><span class="  text-sm text-golden text-black  px-1  py-1 -ml-6 z-10" style=""><i
              class="fa-solid fa-magnifying-glass aboslute"></i></span>
        </div> --}}
        <div id="loginBtn" class="mr-1 text-white font-normal text-sm hidden lg:block md:block relative cursor-pointer p-1 w-18" onclick="openLogin()"
          style="font-size: 12px"><i class="fa-solid fa-user"></i> &nbsp; Login</div>

          
  
        {{-- -----------------login page start-------------- --}}
  
  
        <div id="loginpage" class="hidden">
          <div class="absolute  z-30 w-96 h-auto bg-[#F6Eff6] rounded-lg login">
            <div class=" text-right text-2xl mr-4 mt-2  " onclick="closeLogin()"><i
                class="fa-solid fa-xmark hover:bg-red-400 px-2 cursor-pointer text-black"></i></div>
            <div class="px-10">
              <div class="flex justify-between items-center py-2">
                <div class="text-xl text-black">Log In</div>
                <div class="font-medium cursor-pointer text-black" onclick="openCreate()">Create New Account<i
                    class="fa-solid fa-caret-right text-sm "></i></div>
              </div>
              <div class="">
                <input class="w-full outline-none border border-gray-300 my-4 px-1 py-2" type="text" name="" id=""
                  placeholder="Email*">
                <input class="w-full outline-none border border-gray-300 my-4 px-1 py-2" type="text" name="" id=""
                  placeholder="Password*">
              </div>
              <a href="">
                <h1 class="mb-4 text-sm">Forgot Password?</h1>
              </a>
              <div class="text-center">
              <button class="btn-login w-28 bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 border border-purple-700 text-white  py-2 px-4 text-xl">Login</button>
            </div>
            </div>
            <div class="flex justify-between bg-gray-300 rounded-b-lg mt-10 py-4 px-10 items-center">
              <div class="text-sm ">
                Don't have an account?
              </div>
              <div class=" font-medium">
                <button onclick="openCreate()"> Register Now <i class="fa-solid fa-caret-right text-sm "></i></button>
              </div>
            </div>
          </div>
        </div>
  
  
  
  
  
        {{-- -----------------login page end-------------- --}}
        {{-- -----------------create page start-------------- --}}
        <div id="createpage" class="hidden">
          <div class="absolute bg-[#F6eff6] z-30  create">
            <div class="relative text-right text-2xl text-black mt-2 " onclick="closeCreate()"><i
                class="fa-solid fa-xmark hover:bg-pink-200 px-2 cursor-pointer text-black absolute top-2 right-3"></i></div>
            <div class=" px-4 ">
              <div class="text-black text-2xl text-center font-medium py-4">Create New Account</div>
              <div class="flex gap-10">
                <div>
                  <h1 class="text-black text-lg font-medium">Your Personal Details</h1>
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="Frist name*">
  
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="Last name*">
  
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="Email*">
  
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="Mobile*">
                
                  <div>
                    <h1 class="text-black mt-3 font-medium">Your Password</h1>
  
                    <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                      placeholder="Password*">
  
                    <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                      placeholder="Conform Password*">
                  </div>
                  <div>
                    <h1 class="text-black text-lg mt-3 font-medium">
                      Newsletter
                    </h1>
                    <div class="flex mt-3 gap-20">
                      <div>
                        <h1 class="text-black font-medium">Subscribe</h1>
                      </div>
                      <div class="flex">
                        <div class="flex items-center mr-4">
                          <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  outline-0 outline-none  dark:bg-gray-700 dark:border-gray-600">
                          <label for="inline-radio"
                            class="ml-2 text-sm font-medium  dark:text-gray-300 text-black">Yes</label>
                        </div>
                        <div class="flex items-center mr-4">
                          <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 outline-0 outline-none dark:bg-gray-700 dark:border-gray-600">
                          <label for="inline-2-radio"
                            class="ml-2 text-sm font-medium  dark:text-gray-300 text-black">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div>
                  <h1 class="text-black text-lg font-medium">Your Address</h1>
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="Address 1*">
  
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="Address 2*">
  
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="City*">
  
                  <input class="outline-none border border-gray-300 px-2 py-1 mt-2 w-full" type="text"
                    placeholder="Pin code*">
  
                 
  
                   <div>
                     {{-- <label for="countries" class="block mb-3 text-md font-medium text-white dark:text-white">Select an
                    option</label> --}}
                  <select id="countries"
                    class="bg-gray-50 border outline-0 outline-none border-gray-300 text-gray-900 text-sm p-2 mt-8  block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">India</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>  
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                  </select>
                </div>
  
                <div>
                  <select id="countries"
                    class="bg-gray-50 border outline-0 outline-none border-gray-300 text-gray-900 text-sm   mt-2 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white  dark:focus:border-blue-500">
                    <option selected>Region/State</option>
                    <option value="US">India</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>  
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                  </select>
                </div>
                </div>
              </div>

              <div>
                <div class="flex items-center mt-2">
                  <input id="link-checkbox" type="checkbox" value=""
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 outline-none outline-0  dark:bg-gray-700 dark:border-gray-600">
                  <label for="link-checkbox" class="ml-2 text-sm font-medium text-black dark:text-gray-300">
                    I have read and agree to the<a href="#"
                      class="text-purple-800 dark:text-purple-800 font-medium  hover:underline"> terms
                      and conditions</a>.</label>
                </div>
              </div>

                <div class="text-center">
                  <button class="btn-login mt-5 mb-5 w-40 bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 border border-purple-500 text-white py-2 text-xl rounded-md ">Register</button>
                </div>
                   
            </div>
            
            <div class="flex justify-between bg-gray-300 px-4 py-4 w-full items-center mr-6">
              <p class="text-sm ">Already have an account?</p>
              <button onclick="openLogin()"> Login<i class="fa-solid fa-caret-right text-sm pl-1"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      
  
      {{-- -----------------create page end-------------- --}}
      <div class="font-normal text-white text-sm mr-2  w-22 hidden lg:block  md:block" style="font-size: 12px"><a href="{{ asset('/recentview')}}">
        {{-- <img src="img/view time.png" alt="" class="w-5 h-5"> --}}
        <i class="fa-regular fa-timer"></i> &#9201; Recent view</a>
    </div>
      <div class="relative font-normal text-white text-sm mr-2 w-18 hidden lg:block md:block" style="font-size: 12px"><a href="{{ asset('/wishlist') }}"><i
            class="fa-solid fa-heart"></i> &nbsp; My Wish</a>
            <div
            class="absolute top-0 left-2 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-purple-500 rounded-full">
            1</div></div>
      <div class="relative font-normal text-white text-sm mr-2 w-18 hidden lg:block  md:block"  style="font-size: 12px"><a href="{{ asset('/addtocard') }}"><i
            class="fa-solid fa-cart-shopping rg-red-300"></i> &nbsp; My Cart</a>
            <div
            class="absolute top-0 left-2 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-purple-500 rounded-full">
            1</div></div>

            {{-- ............................for mobile.................. --}}
            <div class="lg:hidden md:hidden  flex items-center ">
              {{-- ..............search bar............... --}}
              <div class="font-normal  text-sm mr-2" style="font-size: 12px">
              <span class="filtersearch relative   text-sm cursor-pointer text-gray-500 dark:text-gray-400  py-1.5    " style=" z-index:1">
                <i class="fa-solid fa-magnifying-glass text-white"></i>
                </span> 

                <div class="filterdatasearch2 absolute z-50 top-[29px]  lg:hidden rounded" style="font-size: 12px">
                  {{-- <span class=" hidden absolute w-4 h-4 text-sm cursor-pointer text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white  py-1.5   px-2 " style=" z-index:1">
                    <i class="fa-solid fa-magnifying-glass  "></i>
                    </span>  --}}
                      <button type="button" class="absolute inset-y-0 z-40 left-1 flex items-center">
                        <svg aria-hidden="true" class="w-3 h-3 font-normal text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path></svg>
                    </button> 
                    <button type="button" class="absolute inset-y-0 z-30 left-6 flex items-center pl-0">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 font-normal text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                      </svg>
                  </button> 
                  <input type="text"
                    class=" border-solid border rounded-md border-gray-300 outline-0 bg-white  outline-none w-40 text-sm font-light text-black pl-12 pr-2"
                    placeholder="search here">
                </div>
              </div>

              <script>
                $('.filtersearch').click(function() {
                    $('.filterdatasearch2').toggle();
                });
            
            </script>
              {{-- ............search bar........... --}}
                <div id="loginBtn" class="mr-2  font-normal text-sm text-white relative cursor-pointer  " onclick="openLogin()"
                    style="font-size: 12px"><i class="fa-solid fa-user"></i></div>
                <div class="font-normal text-white  text-sm mr-2" style="font-size: 12px"><a href="{{ asset('/recentview')}}">
                  {{-- <img src="img/view time.png" alt="" class="w-5 h-5"> --}}
                  <i class="fa-regular fa-timer"></i>&#9201;</a></div>
                  <div class="relative font-normal text-white  text-sm mr-2" style="font-size: 12px"><a href="{{ asset('/wishlist') }}"><i
                    class="fa-solid fa-heart"></i></a>
                    <div
                    class="absolute top-0 left-2 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-purple-500 rounded-full">
                    1</div>
                  </div>
                <div class="relative mr-2 font-normal text-white text-sm" style="font-size: 12px"><a href="{{ asset('/addtocard') }}"><i
                  class="fa-solid fa-cart-shopping rg-red-300"></i></a>
                  <div
                  class="absolute top-0 left-2 text-xs  flex items-center justify-center   p-1 h-3 w-3 text-white bg-purple-500 rounded-full">
                  1</div>
                </div>
            </div> 
{{-- ............................for mobile.................. --}}


            {{-- ..................rupess selecter........... --}}
            <div class="font-normal text-xs mr-2 w-18 flex items-center" style="font-size: 12px ">
      <select id="countries" class="bg-gray-50 px-1 py-0.5 border border-gray-300 text-gray-900 text-xs rounded-md block w-20 outline-none outline-0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        <option selected value="US" class="">₹ RUPEES</option>
        <option value="CA ">$ AUD</option>
        <option value="FR">€ EUR</option>
        <option value="DE">£ Pound</option>
        <option value="DE">$ USD</option>
      </select>
    </div>
    </div>
  
  </div>
  
  </div>
  <div class="bg-[rgb(252,234,227)]"><a href="{{asset('./home')}}" class=""><img src="{{asset('image/logo.png')}}" class=" lg:w-32 w-10 m-auto z-50 "></a>
  </div>

  <!--Nav Menu header-->
  <div class=" w-full top-0 z-30 mt-0">
  <nav class="relative  text-golden head-golden z-40  top-0  bg-[rgb(135,55,78)]">
    <div
      class=" md:w-full px-4 mx-auto flex  justify-between items-center relative  justify-center text-center  lg:block ">
      {{-- <div class="w-full md:justify-between"> --}}
        {{-- <div class=""><a href="{{asset('./home')}}" class=""><img src="{{asset('image/logo.png')}}" class="absolute   lg:w-24 w-10 mt-0.5 bg-[#F6Eff6]"></a>
        </div>
   --}}
        <div class="  md:w-10/12  justify-between items-center ml-auto">
          <ul class="  flex justify-center items-center text-nowrap">
  
  
  
  
            {{-- VIPUL --}}
            <li class=" hidden lg:block hoverable  text-white">
              <a href="{{asset('./diamond')}}"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-pink-700 active" >Diamond</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-[rgb(252,234,227)] ">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black font-bold">
                    <h2 class="text-md">Diamond</h2>
                  </div>
  
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By Style</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset("image/logo.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Studs</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset("image/logo.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Jhumkas</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset("image/logo.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Drops</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset("image/logo.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Golden
                          Earrings</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset("image/logo.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver
                          Earrings</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset("image/logo.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Pearl
                          Earrings</a>
                      </h3>
                    </div>
  
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 effect">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/solitaire.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Solitaiers</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>
  
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600">
                    <img src="{{asset(" images/earrings3.jpg")}}">
                  </ul>
                </div>
              </div>
            </li>
  
  
            <li class="hidden lg:block hoverable  text-white">
              <a href="{{asset('./gemstone')}}"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-pink-700">Gemstone</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black font-bold">
                    <h2 class="text-md">Gemstone</h2>
                  </div>
  
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By Style</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/chain_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Chain
                          Bracelets</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/flexible_b.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Flexible
                          Bracelets</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/kids_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Kids
                          Bracelets</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/oval_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Oval
                          Bracelets</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/mangalsutra_b.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Mangalsutra
                          Bracelets</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/silver_b.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver
                          Bracelets</a></h3>
                    </div>
  
                    <div class="flex items-center  py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 effect">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black  mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"> <img src="{{asset(" images/solitaire.png")}}" class="h-8  mr-3">
                        <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Solitaiers</a>
                        </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>
  
                    <div class="flex items-center  py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black  mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center  py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600">
                    <img src="{{asset(" images/bracelets2.jpeg")}}">
                  </ul>
                </div>
              </div>
            </li>
  
            <li class="hidden lg:block hoverable  text-white">
              <a href="{{asset('./gold')}}"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-pink-700">Gold</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black font-bold">
                    <h2 class="text-md">Gold</h2>
                  </div>
  
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By Style</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/choker.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Choker</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/pendant.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Pendants</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/necklace1.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Necklace</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/chain1.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Chains</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/casual_p.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Casual</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/charms.jpg")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Charms</a></h3>
                    </div>
  
                    <div class="flex items-center  my-1">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 effect">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2">
                      <h2 class="text-md uppercase underline">Shop By Metal</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gemstone.png")}}" class="h-8  mr-3"></a>
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gemstone</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"> <img src="{{asset(" images/solitaire.png")}}" class="h-8  mr-3">
                        <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Solitaiers</a>
                        </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/daimond.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Diamond</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/gold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Gold</a></h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/rosegold.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Rose Gold</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <a href="#"><img src="{{asset(" images/silverr.png")}}" class="h-8  mr-3"></a>
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Silver</a></h3>
                    </div>
  
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="w-full text-black mb-2 ">
                      <h2 class="text-md uppercase underline">Shop By</h2>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Men</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class=" text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">For Women</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Under ₹10k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹10k to
                          ₹20k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">₹20k to
                          ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center my-1">
                      <img src="{{asset(" images/dot.png")}}" class="h-8  mr-3">
                      <h3 class="text-sm text-black text-bold mb-2 uppercase"><a href="#" class="effect">Above ₹30k</a>
                      </h3>
                    </div>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600">
                    <img src="{{asset(" images/necklace3.jpg")}}">
                  </ul>
                </div>
              </div>
            </li>
  
            <li class="hidden lg:block hoverable  text-white">
              <a href="{{asset('./solitare')}}"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-pink-700">Solitare</a>
              <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black mb-8 ">
                    <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                    <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                  </div>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 1</h3>
                    </div>
                    <p class="text-black text-sm">Quarterly sales are at an all-time low create spaces to explore the
                      accountable talk and blind vampires.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 2</h3>
                    </div>
                    <p class="text-black text-sm">Prioritize these line items game-plan draw a line in the sand come up
                      with something buzzworthy UX upstream selling.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 3</h3>
                    </div>
                    <p class="text-black text-sm">This proposal is a win-win situation which will cause a stellar
                      paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 4</h3>
                    </div>
                    <p class="text-black text-sm">This is a no-brainer to wash your face, or we need to future-proof
                      this
                      high performance keywords granularity.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                </div>
              </div>
            </li>
            
            <li class="hidden lg:block hoverable  text-white">
              <a href="{{asset('./offerpage')}}"
                class="relative uppercase block py-6 mx-3  px-1  text-sm lg:text-base effect hover:text-pink-700">OFFER</a>
              {{-- <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black mb-8 ">
                    <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                    <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                  </div>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 1</h3>
                    </div>
                    <p class="text-black text-sm">Quarterly sales are at an all-time low create spaces to explore the
                      accountable talk and blind vampires.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 2</h3>
                    </div>
                    <p class="text-black text-sm">Prioritize these line items game-plan draw a line in the sand come up
                      with something buzzworthy UX upstream selling.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 3</h3>
                    </div>
                    <p class="text-black text-sm">This proposal is a win-win situation which will cause a stellar
                      paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 4</h3>
                    </div>
                    <p class="text-black text-sm">This is a no-brainer to wash your face, or we need to future-proof
                      this
                      high performance keywords granularity.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                </div>
              </div> --}}
            </li>
  
            <div class="relative hidden lg:block md:block ">
              <span class=" absolute w-4 h-4 right-16 flex text-sm cursor-pointer  text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-500  py-2  px-2 " style=" z-index:1">
                <i class="fa-solid fa-magnifying-glass  "></i>
                </span>
                  <button type="button" class="absolute inset-y-0 z-30 right-2 flex items-center pl-4">
                    <svg aria-hidden="true" class="w-4 h-4 font-normal text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path></svg>
                </button> 
                <button type="button" class="absolute inset-y-0 z-30 right-8 flex items-center pl-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 font-normal text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-500" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                  </svg>
              </button> 
              <input type="text"
                class="w-72 border-solid border rounded-md border-gray-300 outline-0 bg-white outline-none text-sm font-light text-black  py-1 pl-2 pr-24"
                placeholder="search here">  
            </div>
            {{-- ..............Mobile for search button................... --}}

            {{-- <div class="relative lg:hidden md:hidden my-2 ">
              <span class=" hidden absolute w-4 h-4 text-sm cursor-pointer text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white  py-1.5   px-2 " style=" z-index:1">
                <i class="fa-solid fa-magnifying-glass  "></i>
                </span> 
                  <button type="button" class="absolute inset-y-0 z-30 left-1 flex items-center ">
                    <svg aria-hidden="true" class="w-4 h-4 font-normal text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path></svg>
                </button> 
                <button type="button" class="absolute inset-y-0 z-30 left-6 flex items-center pl-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 font-normal text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                  </svg>
              </button> 
              <input type="text"
                class=" border-solid border rounded-md border-gray-300 outline-0 outline-none w-36 text-sm font-light text-black  py-1  pl-12 pr-2 lg:deletable"
                placeholder="search here">
                 
            </div>--}}

            <button class="px-4 lg:hidden block py-2">
            <div class="icon " >
              <i class="fa-solid fa-bars  mobmenu"></i>
            </div>
          </button>
          </ul>
  
        </div>
      </div>
    </div>
  </nav>
</div>

  {{-- ............................Mobile header.................................... --}}

  <div class="lg:hidden ">
    <div class="text-left togmenu modal top-[45px] w-full md:w-full md:ml-auto absolute z-30 ">
        <ul class="shadow bg-white text-black ">
            {{-- @foreach ($Categories as $category)
                <li class=" text-black">
                    <button
                        class="text-left py-2 px-4 w-full submenu1 cursor-pointer  border-b border-gray-400 hover:bg-gray-400 hover:text-white"
                        value="{{ $category->id }}">
                        <a href="{{ asset('shop/' . $cate_data->category_name) }}"
                            class="relative text-sm lg:text-base effect hover:text-white submenus ">
                            {{ $category->category_name }}
                        </a><i class="fa-solid fa-caret-down hover:text-golden "></i>
                    </button>
                    @foreach ($category->CategoryType as $ct_data)
                        <div class="w-full px-2 text-black mb-2 hidden submenu2{{ $category->id }}">
                            <ul class=" ">
                                <li>
                                    <h2 class="text-xs my-1 px-4 font-semibold uppercase text-black">
                                        {{ $ct_data->category_type }}
                                    </h2>
                                    <ul>
                                        <div class="">
                                            @if (count($ct_data->Subcategory) > 0)
                                                @foreach ($ct_data->Subcategory as $subc_data)
                                                    <div class="flex items-center px-5 hover:bg-gray-300">
                                                        <a href="#">

                                                            <img src="{{ asset('/storage/files/' . $subc_data->subcategory_image) }}"
                                                                class="h-4  mr-3"></a>
                                                        <h3 class=" text-xs my-1 text-black text-bold uppercase "><a
                                                                href="{{ asset('/shop/' . $category->category_name . '/' . $ct_data->category_type . '/' . $subc_data->subcategory_name) }}"
                                                                class="effect">{{ $subc_data->subcategory_name }}</a>
                                                        </h3>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    @endforeach
                </li>
            @endforeach --}}
            <li>
              <div class="p-6  mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <div class="w-full text-black mb-8 ">
                    <h2 class="font-bold text-2xl">Main Hero Message for the menu section</h2>
                    <p>Sub-hero message, not too long and not too short. Make it just right!</p>
                  </div>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 1</h3>
                    </div>
                    <p class="text-black text-sm">Quarterly sales are at an all-time low create spaces to explore the
                      accountable talk and blind vampires.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 2</h3>
                    </div>
                    <p class="text-black text-sm">Prioritize these line items game-plan draw a line in the sand come up
                      with something buzzworthy UX upstream selling.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul
                    class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 3</h3>
                    </div>
                    <p class="text-black text-sm">This proposal is a win-win situation which will cause a stellar
                      paradigm shift, let's touch base off-line before we fire the new ux experience.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                    <div class="flex items-center">
                      <svg class="h-8 mb-3 mr-3 fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                      </svg>
                      <h3 class="font-bold text-xl text-black text-bold mb-2">Heading 4</h3>
                    </div>
                    <p class="text-black text-sm">This is a no-brainer to wash your face, or we need to future-proof
                      this
                      high performance keywords granularity.</p>
                    <div class="flex items-center py-3">
                      <svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                          d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                      </svg>
                      <a href="#" class="text-black bold border-b-2 border-blue-300 hover:text-blue-300">Find out
                        more...</a>
                    </div>
                  </ul>
                </div>
              </div>
            </li>

        </ul>
     

    </div>
</div> 





<script>
  $('.mobmenu').click(function() {
        $('.togmenu').toggle();
    });

    $('.submenu1').click(function() {

        let submenu = $(this).val()
        $('.submenu2' + submenu).toggle();
    });

    $('#submenu2').click(function() {
        $('.submenus2').toggle();
    });
</script>

{{-- -----------------login script- ------------- --}}
<script>
  // function openLogin() {
    //   document.getElementById("loginpage").style.display = "block";
    // }

    // function closeLogin() {
    //   document.getElementById("loginpage").style.display = "none";
    // }
    var modal1 = document.getElementById("createpage");
    function openCreate() {
        document.getElementById("createpage").style.display = "block";
    }

    function closeCreate() {
        document.getElementById("createpage").style.display = "none";
    }
    btn.onclick = function(event ) {
        modal1.style.display = "block";
    }

    // window.onclick = function(event) {
    //   alert('test')
    //     if (event.target == modal1) {
    //         modal1.style.display = "none";
    //     }
    // }
</script>



<script>
  // Get the modal
    var modal = document.getElementById("loginpage");

    // Get the button that opens the modal
    var btn = document.getElementById("loginBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closebtn")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    function closeLogin() {
        document.getElementById("loginpage").style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
     
        if (event.target == modal) {
            modal.style.display = "none";
            
        }
        if (event.target == modal1) {
            modal1.style.display = "none";
            
        }
    }
</script>


{{-- ---------------search script--------------- --}}
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script>
  $(document).ready(function() {
        $('input.deletable').wrap('<span class="deleteicon"></span>').after($('<span>x</span>').click(
    function() {
            $(this).prev('input').val('').trigger('change').focus();
        }));
    });
</script>