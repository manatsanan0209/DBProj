<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>SormMaiSed</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-900">
  <!-- Navbar -->
  @include('components._navbar')

  <!-- Content -->
  <div class="w-3/5 h-max my-5 mx-auto p-2 grid grid-cols-2 gap-2">
    <a href="/ordernow" class="dark:text-blue-200 font-normal text-2xl text-center">Order now</a>
    <a href="/myorder" class="dark:text-white font-normal text-2xl text-center">My order</a>
    <hr class="border-t-2 border-blue-200 my-4">
    <hr class="border-t-2 border-gray-900 my-4">
  </div>

  <div class="bg-gray-200 w-4/6 h-max my-5 mx-auto rounded-xl p-10 grid grid-cols-4 gap-4">
    
    <div class="ml-10 col-span-3 text-black-400 font-bold text-xl text-center flex"> Order ID : xxxxxx</div>
    <!-- เปลี่ยนตาม status payment ถ้ายังไม่จ่ายจะขึ้น -->
    <div class="col-start-4 rounded-xl dark:text-red-600 font-normal text-lg text-center"> รอจ่ายตัง </div>
    <div class="col-start-1 text-black-300 font-normal text-lg text-center">Monitor</div>
    <div class="col-start-2 text-black-300 font-normal text-lg text-center"> 1 ชิ้น </div>
    <div class="col-start-3 text-black-300 font-normal text-lg text-center "> 600 บาท </div> 

    <hr class="col-span-4 border-t-2 border-gray-400 my-2">

    <div class="col-start-3 text-black-300 font-normal text-lg text-center "> รวม 600 บาท </div> 
    <button type="submit"
        class="col-start-4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-xl text-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Pay Now</button>
  </div>
   
  <!-- Footer -->
  @include('components._footer')
</body>

</html>