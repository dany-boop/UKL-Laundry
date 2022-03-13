<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <!-- component -->
<div class="h-screen md:flex">
	<div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-yellow-500 to-yellow-600 i justify-around items-center hidden">
		<div>
			<h1 class="text-white font-bold text-4xl font-sans">Drew House</h1>
			<p class="text-white mt-1">The most popular Laundry Factory</p>
			<button type="submit" class="block w-28 bg-white text-yellow-600 mt-4 py-2 rounded-2xl font-bold mb-2">Read More
                <link href="https://thehouseofdrew.com/blogs/scrapbook">
            </button>
		</div>
		<div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		<div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		<div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
		<div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
	</div>
	<div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
		<form class="bg-white" action="../utils/proses-register-outlet.php" method="post">
			<h1 class="text-gray-800 font-bold text-2xl mb-1">Add Outlet</h1>
			<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
				<input class="pl-2 outline-none border-none" name="nama_outlet" type="text" placeholder="outlet name"/>
      		</div>
			<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
				<input class="pl-2 outline-none border-none" name="alamat" type="text" placeholder="adress" />
      		</div>
			<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
				<input class="pl-2 outline-none border-none" name="tlp" type="text" placeholder="phone" />
      		</div>
			<button type="submit" class="block w-full bg-yellow-500 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">add</button>
		</form>
	</div>
</div>
    </form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
