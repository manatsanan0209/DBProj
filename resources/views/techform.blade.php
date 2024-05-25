<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>SormMaiSed</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-gray-900">

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
 
        <div class="flex justify-center">
            <div class="bg-gray-200 w-3/5 h-max my-5 mx-auto rounded-xl p-10 grid grid-cols-4 gap-4">
                <div class="col-span-4 flex text-black-400 font-bold text-lg text-center">Employee ID : xxxxxx</div>
                
                <div class="col-span-1 text-black-300 font-normal text-lg text-center">Name xxxx</div>
                <div class="col-span-1 text-black-300 font-normal text-lg text-center">Last Name xxxx</div>
                <div class="col-span-1 text-black-300 font-normal text-lg text-center">Tel xxxxxxxxx</div>
                <div class="col-span-1"></div> <!-- This is an empty div to fill the remaining space in the row -->
        
                <div class="col-span-1 text-black-300 font-normal text-lg text-center">Username</div>
                <div class="col-span-1 text-black-300 font-normal text-lg text-center">Password</div>
                <div class="col-span-1 text-black-300 font-normal text-lg text-center"></div>
                <div class="col-span-1 flex justify-center">
                    <a href="/ordercustomerform" class="bg-zinc-400 rounded-xl px-5 text-black-300 font-normal text-lg text-center">Order</a>
                </div>
            </div>
        </div>
              
                        
              </tbody>
          </table>
        </div>
                </form>
              </div>
          </div>
        </div>





  <!-- Footer -->
  @include('components._footer')
</body>

</html>
