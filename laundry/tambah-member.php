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
		<form class="bg-white" action="utils/proses-tambah-member.php" method="post">
			<h1 class="text-gray-800 font-bold text-2xl mb-1">Add Member</h1>
            <form action="utils/proses-tambah-member.php" method="post">
			<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
				<input class="pl-2 outline-none border-none" type="text" name="nama" value="" placeholder="name" class="form-control"/>
      		</div>
				<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
					<input class="pl-2 outline-none border-none" type="text" name="alamat" value="" placeholder="adress" class="form-control" />
      			</div>
					<div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
						<input class="pl-2 outline-none border-none" type="text" name="tlp" value="" placeholder="telephone" class="form-control" />
      				</div>
                    <div class="relative inline-flex">
                    	<svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                    	<select name="jenis_kelamin" class="form-control" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        	<option value="L">Man</option>
                        	<option value="P">Woman</option>
                    	</select>
        			</div>
							<button type="submit" class="block w-full bg-yellow-500 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">add</button>
							<a href="tampil-member.php">
		</form>
	</div>
</div>
    </form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
