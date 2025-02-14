<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>SormMaiSed</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-900 fixed top-0 w-full z-10">
        <body class="bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4">
            <div class="flex justify-between">
                <a href="/" class="flex items-center">
                    <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">SormMaiSed</span>
                </a>
                <div class="flex items-center">
                    <a href="/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">Home</a>
                    <a href="/customerform" class="ml-6 text-gray-500 hover:text-gray-900 dark:hover:text-white">Information</a>
                    <a href="/orderall" class="ml-6 text-gray-500 hover:text-gray-900 dark:hover:text-white">Order</a>
                </div>
            </div>
        </div>
    </nav>
    
      
        <!-- Content -->
    
        <div class="w-3/5 h-max mt-20 mx-auto p-2 grid grid-cols-2 gap-2">
          <a href="customerform" class="dark:text-white font-normal text-2xl text-center">Customer</a>
          <a href="techform" class="dark:text-blue-200 font-normal text-2xl text-center">Technician</a>
          <hr class="border-t-2 border-gray-900 my-4">
          <hr class="border-t-2 border-blue-200 my-4">
        </div>

        <div class="bg-gray-200 w-fit my-5 mx-72 rounded-xl p-3 text-xl font-bold"> EmployeeID : xxxxxxx </div>

        <div class="bg-gray-200 w-3/5 h-max my-5 mx-auto rounded-xl p-10 grid grid-cols-6 gap-4">
          
          <div class="col-span-2 text-black-400 font-bold text-lg text-center"> Order ID : xxxxxx</div>
          <div class="col-span-3 flex text-black-400 font-bold text-lg text-center"> Member ID : xxxxxxx</div>
          <div class="col-start-6 flex text-black-400 font-bold text-lg text-center"> DMY HM</div>
      
          <div class="text-black-300 font-normal text-lg text-center">Maintenance</div>
          <div class="text-black-300 font-normal text-lg text-center">Monitor</div>
          <div class="text-black-300 font-normal text-lg text-center"> Detail </div>
          <div class="col-start-4 flex text-black-300 font-normal text-lg text-center"> 500 Baht </div>
          <div class="text-black-300 font-normal text-lg text-center"> xxx-xxxx-xxx </div>
          <div class="col-start-6 bg-yellow-400 rounded-xl text-black-300 font-normal text-lg text-center"> In progress </div>

          <div class="col-start-4 flex text-black-300 font-normal text-lg text-center">Total 500 Baht </div>
          <div class="col-start-6 bg-zinc-400 rounded-xl text-black-300 font-normal text-lg text-center"> Paid </div>
      
          <!-- พยายามจะทำให้อันนี้เปลี่ยนสถานะ -->
          <!-- <script>
          const condition = 1;
          if (condition == 1) {
              const div = document.createElement('div');
              div.className = 'w-fit px-4 bg-green-400 rounded-xl text-black-300 font-normal text-lg text-center';
              div.textContent = 'ควย';
              document.body.appendChild(div);
          } else if (condition == 0) {
              const div = document.createElement('div');
              div.className = 'w-fit px-4 bg-yellow-400 rounded-xl text-black-300 font-normal text-lg text-center';
              div.textContent = 'In progress';
              document.body.appendChild(div);
          }</script> -->
         
          <hr class="col-span-6 border-t-2 border-gray-400 my-4">
      
          <div class="ml-10 col-span-3 flex text-black-400 font-bold text-lg text-center">Feedback</div>
          <div class="col-span-2 flex text-black-400 font-bold text-lg text-center"> Advice </div>
          <div class="ml-10 col-span-3 flex text-black-400 font-normal text-lg text-center"> ข้อมูล Feedback</div>
          <div class="col-span-2 flex text-black-400 font-normal text-lg text-center"> ข้อมูล Advice </div>
      </div>
      
         
   
  <!-- Footer -->
  @include('components._footer')
</body>

</html>