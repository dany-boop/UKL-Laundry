<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Admin | UKL Laundry</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
      /* Custom style */
      .header-right {
          width: calc(100% - 3.5rem);
      }
      .sidebar:hover {
          width: 16rem;
      }
      @media only screen and (min-width: 768px) {
          .header-right {
              width: calc(100% - 16rem);
          }        
      }
    </style>
</head>
<body>
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-yellow-400 dark:bg-white- text-black">
      <?php include ('layout-admin.php') ?>
    
      <div class="h-full ml-14 mt-14 md:ml-64">
      <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Silakan Ubah Data Produk!</h1>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <?php
                                include ('koneksi.php');
                                $qry_get=mysqli_query($conn,"select * from paket where nama = '".$_GET['nama']."'");
                                $dt_get=mysqli_fetch_array($qry_get);
                            ?>
                            <form action="../utils/proses-edit-produk.php" method="post">
                                <div class="relative">
                                    <input autocomplete="off" name="nama" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="Nama" value="<?=$dt_get['nama']?>" />
                                    <label for="nama" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Name</label>
                                </div>
                                <div class="relative mt-5">
                                    <input autocomplete="off" id="harga" name="harga" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="Price" value="<?=$dt_get['harga'] ?>" />
                                    <label for="harga" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Price</label>
                                </div>
                                <div class="relative mt-5">
                                    <label for="jenis" class="peer h-10 w-full text-gray-600">Option</label>
                                    <?php 
                                          $arr_jenis=array('kiloan'=>'kiloan','selimut'=>'selimut', 'bed_cover'=>'bed_cover', 'kaos'=>'kaos');
                                    ?>
                                    <select name="jenis" id="jenis" class="peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none">
                                        <option disabled>Choose Option</option>
                                        <?php foreach ($arr_jenis as $key_jenis => $val_jenis):
                                              if($key_jenis==$dt_get['jenis']){
                                                  $selek="selected";
                                              } else {
                                                  $selek="";
                                              }
                                            ?>
                                          <option value="<?=$key_jenis?>" <?=$selek?>><?=$val_jenis?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="relative mt-5">
                                    <button type="submit" class="w-full bg-yellow-500 text-white rounded-md px-2 py-1 hover:bg-yellow-700">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>    

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</body>
</html>