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
    <a href="/ordernow" class="dark:text-white font-normal text-2xl text-center">Order now</a>
    <a href="/myorder" class="dark:text-blue-200 font-normal text-2xl text-center">My order</a>
    <hr class="border-t-2 border-gray-900 my-4">
    <hr class="border-t-2 border-blue-200 my-4">
  </div>

  <div class="bg-gray-200 w-4/6 h-max my-5 mx-auto rounded-xl p-10 grid grid-cols-5 gap-5">
    
    <div class="ml-10 col-span-4 text-black-400 font-bold text-xl text-center flex"> Order ID : xxxxxx</div>
    <div class="bg-gray-400 rounded-xl text-black-300 font-normal text-lg text-center w-fit px-10"> Paid </div>
    <div class="col-start-1 font-normal text-lg text-center"> Product x จน </div>
    <div class="text-black-300 font-normal text-lg text-center"> Detail </div>
    <div class="text-black-300 font-normal text-lg text-center"> Employee </div>
    <div class="text-black-300 font-normal text-lg text-center"> 500  </div>
    <div class="bg-red-600 rounded-xl text-white-300 font-normal text-lg text-center w-fit px-5"> In progress </div>
   

    <hr class="col-span-5 border-t-2 border-gray-400 my-2">

    <div class="col-start-4 col-span-2 flex text-black-400 font-normal text-lg text-center"> Total 600 บาท</div>
  </div>

  <!-- ถ้าจ่ายตังแล้วจะมีให้รีวิว ทำไม่เป็น(เป็นเงื่อนไขอะไรงี้) แล้วก็ ตรง inprigress กับ successful จะมีการเปลี่ยนตาม status สินค้า ที่ช่างเป็นคนกดว่าเสดแล้วอะ -->
  
  <div class="bg-gray-200 w-4/6 h-max my-5 mx-auto rounded-xl p-10 grid grid-cols-5 gap-5">
    
    <div class="ml-10 col-span-4 text-black-400 font-bold text-xl text-center flex"> Order ID : xxxxxx</div>
    <div class="bg-gray-400 rounded-xl text-black-300 font-normal text-lg text-center w-fit px-10"> Paid </div>
    <div class="col-start-1 font-normal text-lg text-center"> Product x จน </div>
    <div class="text-black-300 font-normal text-lg text-center"> Detail </div>
    <div class="text-black-300 font-normal text-lg text-center"> Employee </div>
    <div class="text-black-300 font-normal text-lg text-center"> 500  </div>
    <div class="bg-green-600 rounded-xl text-white-300 font-normal text-lg text-center w-fit px-5"> Sucessful </div>
   

    <hr class="col-span-5 border-t-2 border-gray-400 my-2">

    <div class="col-start-4  flex text-black-400 font-normal text-lg text-center"> Total 600 บาท</div>
    <button type="submit"
        class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-xl text-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Review</button>
  </div>


    
  <!-- Footer -->
  @include('components._footer')
</body>

</html>