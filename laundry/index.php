<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- navbar disini -->
     <?php include('components/navbar.php'); ?>
    <!-- navbar selesai -->

    <!-- content home -->
    <section class="bg-yellow-500 text-gray-900 body-font">
        <div class="container px-5 py-20 mx-auto">
            <div class="text-center mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-white mb-4">Laundry</h1>
            <p class="text-gray-200 leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Welcome to Drew House Laundry Service, please login.</p>
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
            <div class="p-2 sm:w-1/2 w-full">
                <a href="https://thehouseofdrew.com/" target="_blank">
                    <div class="bg-yellow-100 rounded flex p-4 h-full items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-medium">Drew mo</span>
                    </div>
                </a>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
                <a href="http://" target="_blank">
                    <div class="bg-yellow-100 rounded flex p-4 h-full items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-medium">Read Here</span>
                    </div>
                </a>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
            <a href="https://thehouseofdrew.com/blogs/fabrics" target="_blank">
                <div class="bg-yellow-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Fabric guide</span>
                    </div>
                </a>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-yellow-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">About Us</span>
                </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
                <a href="https://thehouseofdrew.com/pages/order-policy" target="_blank">
                <div class="bg-yellow-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Order Policy</span>
                </div>
                </a>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-yellow-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Shipping and Returns Policy</span>
                </div>
            </div>
            </div>
            <button class="flex mx-auto mt-16 text-white bg-yellow-700 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-800 rounded text-lg">Source Code</button>
            <a href="https://github.com/dany-boop/UKL-Laundry/tree/dany-boop-upload-1" target="_blank">
        </div>
    </section>
    <!-- content selesai -->

    <!-- footer disini -->
     <?php include('components/footer.php'); ?>
    <!-- footer selesai -->
</body>
</html>