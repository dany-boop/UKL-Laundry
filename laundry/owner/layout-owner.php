<?php
     session_start();

     if($_SESSION['status_login']!=true) {
         header('location:login.php');
     }
?>

<!-- Header -->
  <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
        <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-yellow-400 dark:bg-yellow-500 border-none">
          <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="./gummy.png"/>
          <span class="hidden md:block"><?=$_SESSION['nama']?></span>
        </div>
        <div class="flex justify-center items-center mx-auto h-14 bg-yellow-200 dark:bg-yellow-300 header-right">
          <img src="drewhouse_horizontal_logo_150x.png" alt="Logo">
        </div>
      </div>
      <!-- ./Header -->
    
      <!-- Sidebar -->
      <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-yellow-100 dark:bg-yellow-100 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
              </div>
            </li>
            <li>
              <a href="dashboard-owner.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 dark:hover:bg-yellow-600 text-yellow-500 hover:text-yellow-700 border-l-4 border-transparent hover:border-yellow-500 dark:hover:border-blue-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 dark:hover:bg-yellow-600 text-yellow-500 hover:text-yellow-700 border-l-4 border-transparent hover:border-yellow-500 dark:hover:border-blue-800  pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Transaksi</span>
              </a>
            </li>
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center mt-5 h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
              </div>
            </li>
            <li>
              <a href="../utils/proses-logout.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 dark:hover:bg-yellow-600 text-yellow-500 hover:text-yellow-700 border-l-4 border-transparent hover:border-yellow-500 dark:hover:border-blue-800  pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
              </a>
            </li>
          </ul>
          <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs text-black">Copyright @2022</p>
        </div>
      </div>
      <!-- ./Sidebar -->