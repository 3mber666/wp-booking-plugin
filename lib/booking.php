<?php

add_action('parse_request', 'userReceiver');
function userReceiver() {

$request_uri_string = $_SERVER['REQUEST_URI'];
    if(strpos($request_uri_string, 'booking') !== false) {
    ?>
<html>
    <head>
        <title>Bookings</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@100;200;300;400;500;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>

            .heading1 {
              font-family: 'Anton', sans-serif;
              letter-spacing: 1px!important; 
            }

            .heading2 {
              font-family: 'Anton', sans-serif;
              letter-spacing: 2px;
              color: transparent;
              -webkit-text-stroke: 2px #000;
            }

            body {
                font-family: 'Anton', sans-serif;
                font-family: 'Montserrat', sans-serif;
              }

              ::-webkit-scrollbar {
                width: 2px;
                border-radius: 10px;
              }
              
              ::-webkit-scrollbar-thumb {
                background-color: rgba(21, 20, 26, 0.63);
                border-radius: 10px;
              }

        </style>
    <head>

    
    
<body class="white">

<?php include 'room-details.php' ?>

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
  <div class="relative w-full h-full max-w-md md:h-auto">
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <div class="p-6 text-center">
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
  <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
    <defs>
      <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
        <stop stop-color="#9089FC"></stop>
        <stop offset="1" stop-color="#FF80B5"></stop>
      </linearGradient>
    </defs>
  </svg>
</div>
<!-- <div class="fixed bottom-0 left-0 right-0 z-40 px-4 py-3 text-center text-white bg-gray-800">
        This a Subscription Page by Chnirt. 
        <a class="text-gray-200 underline" href="https://tailwindcomponents.com/component/subscription-page">Component details</a></div> -->
<div class='flex min-h-screen mt-10 md:mt-0 px-[40px]'>
  <div class="min-w-full md:flex justify-center items-center h-screen">
    <div>
      <h2 class="text-gray-900 heading1 text-[50px]">BAYEIGHT <span class="heading2">BOOKING</span></h2>
      <!-- <div><p class="text-[#717F87] text-[15px] leading-[27px] font-medium">
               Aliquam sagittis sapien in nibh tincidunt fermentum. Morbi eleifend faucibus.
           </p></div> -->
      <div class="mt-[5px] inline-flex border border-[#E1E3E5] shadow-[0px 1px 2px #E1E3E5] divide-[#E1E3E5] divide-x rounded-[5px]">
        <button class="bg-[#ff1097] hover:opacity-0.5 text-[#fff] leading-[16px] text-[13px] font-semibold font-bold py-[15px] px-[25px] rounded-l">Available Today</button>
        <button data-modal-toggle="popup-modal" class="bg-white hover:bg-[#F6F6F7] hover:text-[#717F87] text-[#0E1823] text-[13px] leading-[16px] font-semibold font-bold py-[15px] px-[25px] rounded-r">Calendar</button>
      </div>
      <div class="max-w-2xl lg:max-w-full">
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-1 lg:grid-cols-3 xl:gap-x-8">
          <div class="group relative mt-5 md:mt-0">
            <div>
              <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-80 lg:aspect-none lg:h-80">
                <img src="https://bayeight.com/wp-content/uploads/2022/08/007-15421-W-Dixie-Hwy-Bay-8-_07.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
              </div>
              <div class="absolute inset-x-0 bottom-0 md:bottom-14 flex items-end p-4 flex items-end p-4">
                <button type="button" data-modal-toggle="authentication-modal" class="relative z-10 w-full rounded-md backdrop-blur-sm bg-white/30 bg-opacity-75 py-2 px-4 text-white text-sm font-medium opacity-1 md:opacity-0 focus:opacity-100 group-hover:opacity-100" @click="open = true">Quick View <span class="sr-only">, Basic Tee 6-Pack </span>
                </button>
              </div>
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-[30px] text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0 heading1"></span> <span class="heading1">SSL</span> <span class="heading2">ROOM</span></a>
                </h3>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>
          <div class="group relative mt-5 md:mt-0">
            <div>
              <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-80 lg:aspect-none lg:h-80">
                <img src="https://bayeight.com/wp-content/uploads/2022/08/127-100_brighter158.jpg.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
              </div>
              <div class="absolute inset-x-0 bottom-0 md:bottom-14 flex items-end p-4 flex items-end p-4">
                <button type="button" data-modal-toggle="authentication-modal" class="relative z-10 w-full rounded-md backdrop-blur-sm bg-white/30 bg-opacity-75 py-2 px-4 text-white text-sm font-medium opacity-1 md:opacity-0 focus:opacity-100 group-hover:opacity-100" @click="open = true">Quick View <span class="sr-only">, Basic Tee 6-Pack </span>
                </button>
              </div>
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-[30px] text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span> <span class="heading1">APOLLO</span> <span class="heading2">ROOM</span> </a>
                </h3>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>
          <div class="group relative mt-5 md:mt-0">
            <div>
              <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-80 lg:aspect-none lg:h-80">
                <img src="https://bayeight.com/wp-content/uploads/2022/08/045-15421-W-Dixie-Hwy-Bay-8-_45.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
              </div>
              <div class="absolute inset-x-0 bottom-0 md:bottom-14 flex items-end p-4 flex items-end p-4">
                <button type="button" data-modal-toggle="authentication-modal" class="relative z-10 w-full rounded-md backdrop-blur-sm bg-white/30 bg-opacity-75 py-2 px-4 text-white text-sm font-medium opacity-1 md:opacity-0 focus:opacity-100 group-hover:opacity-100" @click="open = true">Quick View <span class="sr-only">, Basic Tee 6-Pack </span>
                </button>
              </div>
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-[30px] text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span> <span class="heading1">WHISPER</span> <span class="heading2">ROOM</span> </a>
                </h3>
              </div>
              <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
          </div>
          <!-- More products... -->
        </div>
      </div>
    </div>
  </div>
</div>

</body>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
      const button2 = document.querySelector('.add-producer');
      const button = document.querySelector('.add-audio-engineer');
      const elementToToggle = document.getElementById('add-audio-engineer');
      const elementToToggle2 = document.getElementById('add-producer');
      
      button.addEventListener('mousedown', () => {
          elementToToggle.classList.toggle('hidden');
      });

      button2.addEventListener('mousedown', () => {
        elementToToggle2.classList.toggle('hidden');
      });


//       document.querySelector('#test').innerHTML += '<li>\
// <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>\
//                         <label data-popover-target="profile2" for="hosting-small" class="inline-flex w-full items-center justify-center p-3 text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">\
//                         <svg class="mr-2 w-3 h-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24"><path d="M22 13c-.027-5.497-4.497-10-10-10s-9.973 4.503-10 10h2.5c.828 0 1.5.672 1.5 1.5v7c0 .828-.672 1.5-1.5 1.5h-3c-.828 0-1.5-.672-1.5-1.5v-8.5c.027-6.601 5.394-12 12-12s11.973 5.399 12 12v8.5c0 .828-.672 1.5-1.5 1.5h-3c-.828 0-1.5-.672-1.5-1.5v-7c0-.828.672-1.5 1.5-1.5h2.5z"/></svg>\
//                         <div class="block">\
//                           <div class="w-full text-xs font-semibold">Senior 2</div>\
//                         </div>\
//                       </label>\
//                       <div data-popover id="profile2" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-slate-100 border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">\
//                         <div class="p-3">\
//                             <div class="flex items-center justify-between mb-2">\
//                                 <a href="#">\
//                                     <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Jese Leos">\
//                                 </a>\
//                             </div>\
//                             <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">\
//                                 <a href="#">Jese Leos</a>\
//                             </p>\
//                             <p class="mb-3 text-sm font-normal">\
//                                 <a href="#" class="hover:underline">@jeseleos</a>\
//                             </p>\
//                             <p class="mb-4 text-sm font-light">Proficient in use of digital and multimedia recording and sound applications. Knowledgeable in the area of audio signal processing.</p>\
//                         </div>\
//                         <div data-popper-arrow></div>\
//                     </div>\
//                     </li>';
      
    });

  </script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

</html>
<?php
      exit();
	}
}

?>