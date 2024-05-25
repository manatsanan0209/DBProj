<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>SormMaiSed</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="">
  <!-- Navbar -->
  @include('components\_navbar')
  <?php
    $id = Session::get('customer_id');
  ?>
  <?php echo $id ?>
  <!-- Content -->
  <div class="">
    <h1 class="mx-auto text-4xl font-semibold text-gray-900 dark:text-white w-fit my-8">Maintennance / Service</h1>
    <form class="max-w-sm mx-auto my-14">
      @csrf
      <div class="mb-5">
        <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
        <input type="text" 
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="First name" required />
      </div>
      <div class="mb-5">
        <label for="lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
        <input type="text" id="lname"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Last name" required />
      </div>
      <div class="mb-5">
        <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your type</label>
        <select id="type"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

          <option>PC</option>
          <option>Labtop</option>
          <option>Mobile (iOS)</option>
          <option>Mobile (Android)</option>
          <option>Other</option>
        </select>

      </div>
      <div class="mb-5">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail</label>
        <textarea id="message" rows="4"
          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Detail..." required></textarea>
      </div>
      <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add more</button>
      <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
  </div>

  <!-- Footer -->
  @include('components\_footer')
</body>

</html>