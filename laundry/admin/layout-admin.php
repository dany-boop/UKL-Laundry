<?php
     session_start();

     if($_SESSION['status_login']!=true) {
         header('location:login.php');
     }
?>

<!-- Header -->
  <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
        <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-yellow-400 dark:bg-yellow-500 border-none">
          <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="./gummy2.png" />
          <span class="hidden md:block"><?=$_SESSION['nama']?></span>
        </div>
        <div class="flex justify-center items-center mx-auto h-14 bg-yellow-200 bg-yellow-500 header-right">
          <img src="drewhouse_horizontal_logo_150x.png" alt="Logo">
        </div>
      </div>
      <!-- ./Header -->
    
      <!-- Sidebar -->
      <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-yellow-300 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-black uppercase">Main</div>
              </div>
            </li>
            <li>
              <a href="dashboard-admin.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 text-black hover:text-black border-l-4 border-transparent hover:border-black pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="outlet.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 text-black hover:text-black border-l-4 border-transparent hover:border-black pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Outlet</span>
              </a>
            </li>
            <li>
              <a href="produk.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 text-black hover:text-black border-l-4 border-transparent hover:border-black pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke-width="1" stroke="currentColor" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Produk</span>
              </a>
            </li>
            <li>
              <a href="tampil-member.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 text-black hover:text-black border-l-4 border-transparent hover:border-black pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Member</span>
              </a>
            </li>
            <li>
              <a href="transaksi.php?total_paket=1" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 text-black hover:text-black border-l-4 border-transparent hover:border-black pr-6">
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
                <div class="text-sm font-light tracking-wide text-black uppercase">Settings</div>
              </div>
            </li>
            <li>
              <a href="user.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 text-black hover:text-black border-l-4 border-transparent hover:border-black pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">User</span>
              </a>
            </li>
            <li>
              <a href="../utils/proses-logout.php" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-yellow-800 text-black hover:text-black border-l-4 border-transparent hover:border-black pr-6">
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