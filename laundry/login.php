<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Laundry</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- content -->
    <div class="min-h-screen bg-gray-100 flex items-center">
      <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
        <div class="p-10 bg-white rounded-xl">
          <div class="flex mx-auto justify-center items-center mb-5">
            <img src="drewhouse_horizontal_logo_150x.png" alt="Logo"> 
            <h1 class="sm:text-2xl text-xl font-bold ml-3">Login</h1>
          </div>
          <form action="utils/proses-login.php" method="post">
            <div class="mb-6">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="username" name="username" id="username">Username</label>
              <input type="text" name="username" id="username" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded" />
            </div>
            <div class="">
              <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="pasword" name="password" id="password">Password</label>
              <input type="password"name="password" id="password" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded" />
            </div>
            <button type="submit" class="w-full mt-6 text-indigo-50 font-bold bg-yellow-500 py-3 rounded-md hover:bg-yellow-600 transition duration-300">LOGIN</button>
          </div>
          </form>
      </div>
    </div>
  </body>
</html>