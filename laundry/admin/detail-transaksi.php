<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Admin | UKL Laundry</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Naufal Akbar Nugroho">
    <meta name="description" content="Create Web Laundry App with PHP Native">
    <meta property="og:title" content="UKL Laundry | Naufal Akbar Nugroho">
    <meta property="og:description" content="Create Web Laundry App with PHP Native">
    <!-- <meta property="og:url" content="/this-page.html"> -->
    <!-- <meta property="og:site_name" content="Your Site Name"> -->
    <!-- <link rel="icon" type="image/svg+xml" href="../public/favicon-org.ico"> -->
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
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-yellow-100 text-black">
      <?php include ('layout-admin.php') ?>
    
      <div class="h-full ml-14 mt-14 md:ml-64 print:-mt-16 print:mx-auto">
      <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 print:shadow-none">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold text-center print:hidden">Silakan Ubah Data Transaksi!</h1>
                        <h1 class="text-2xl font-semibold hidden print:block print:text-center">Laporan Transaksi</h1>
                        <div class="flex">
                          <p class="hidden print:block mt-2 text-sm">
                            Dilayani oleh, <?php
                            // get user name from transaction
                            include('koneksi.php');
                            $qry_get=mysqli_query($conn,"select * from transaksi where id = '".$_GET['id']."'");
                            $dt_get=mysqli_fetch_array($qry_get);

                            $qry_get_user=mysqli_query($conn,"select * from user where id = '".$dt_get['id_user']."'");
                            $dt_get_user=mysqli_fetch_array($qry_get_user);
                            echo $dt_get_user['nama'];
                            ?>
                            (<?php
                              echo $dt_get_user['role'];
                            ?>)
                          </p>
                          <p class="hidden print:flex justify-end items-end mt-2 ml-24 text-sm" id="time"></p>
                        </div>
                        <hr class="hidden print:block mt-2 border-2 border-black"/>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <?php
                                include ('koneksi.php');
                                $qry_get=mysqli_query($conn,"select * from transaksi where id = '".$_GET['id']."'");
                                $dt_get=mysqli_fetch_array($qry_get);
                                ?>
                            <form action="../utils/proses-update-transaksi.php" method="post">
                              <div class="relative">
                                <input autocomplete="off" readonly id="member" name="member" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none cursor-default" placeholder="Nama" value="<?php
                                      // show data name member from transaction.id_member
                                      $qry_member = mysqli_query($conn,"select * from member where id_member='$dt_get[id_member]'");
                                      $data_member = mysqli_fetch_array($qry_member);
                                      // echo mysqli_error($conn);
                                      // echo var_dump($qry_member);
                                      echo $data_member['nama'];
                                    ?>" />
                                    <label for="member" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Nama Pelanggan</label>
                                </div>
                                <div class="relative mt-5">
                                    <input autocomplete="off" readonly id="date" name="date" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="date" value="<?=$dt_get['tgl'] ?>" />
                                    <label for="date" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Tanggal Pemesanan</label>
                                </div>
                                <div class="relative mt-5">
                                    <input autocomplete="off" readonly id="deadline" name="deadline" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="deadline" value="<?=$dt_get['batas_waktu'] ?>" />
                                    <label for="deadline" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Tanggal Selesai</label>
                                </div>
                                <div class="relative mt-5">
                                    <input autocomplete="off" readonly id="date_pay" name="date_pay" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="date_pay" value="<?=$dt_get['tgl_bayar'] ?>" />
                                    <label for="date_pay" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Tanggal Bayar</label>
                                </div>
                                <div class="relative mt-5">
                                  <label for="payment" class="peer h-10 w-full text-gray-600">Status Pembayaran</label>
                                  <input type="text" readonly class="hidden peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none cursor-default print:block" placeholder="Kuantitas" value="<?php
                                      // show data status payment
                                      $qry_payment = mysqli_query($conn,"select * from transaksi where id='$dt_get[id]'");
                                      $data_payment = mysqli_fetch_array($qry_payment);

                                      if($data_payment['dibayar']=='dibayar'){
                                        echo "Lunas";
                                      } else {
                                        echo "Belum Lunas";
                                      }     
                                    ?>" />
                                  <?php 
                                    $arr_payment=array('dibayar'=>'Lunas','belum_dibayar'=>'Belum Lunas');
                                  ?>
                                  <select name="dibayar" id="dibayar" class="peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none print:hidden">
                                    <option disabled>Pilih Status Pengerjaan</option>
                                      <?php foreach ($arr_payment as $key_payment => $val_payment):
                                              if($key_payment==$dt_get['dibayar']){
                                                $selek="selected";
                                              } else {
                                                $selek="";
                                              }
                                              ?>
                                          <option value="<?=$key_payment?>" <?=$selek?>><?=$val_payment?></option>
                                          <?php endforeach ?>
                                   </select>
                                  </div>
                                  <div class="relative mt-5">
                                      <label for="status" class="peer h-10 w-full text-gray-600">Status Pengerjaan</label>
                                      <input type="text" readonly class="hidden peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none cursor-default print:block" placeholder="Kuantitas" value="<?php
                                        // show data status
                                        $qry_payment = mysqli_query($conn,"select * from transaksi where id='$dt_get[id]'");
                                        $data_payment = mysqli_fetch_array($qry_payment);
      
                                        if($data_payment['status']=='baru'){
                                          echo "Baru";
                                        } else if($data_payment['status']=='proses'){
                                          echo "Sedang Diproses";
                                        } else if($data_payment['status']=='selesai'){
                                          echo "Selesai";
                                        } else if($data_payment['status']=='diambil'){
                                          echo "Sudah Diambil";
                                        }
                                      ?>" />
                                      <?php 
                                          $arr_status=array('baru'=>'Baru','proses'=>'Proses', 'se;esai'=>'Selesai', 'diambil'=>'Diambil');
                                      ?>
                                      <select name="status" id="status" class="peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none print:hidden">
                                          <option disabled>Pilih Status Pengerjaan</option>
                                              <?php foreach ($arr_status as $key_status => $val_status):
                                                    if($key_status==$dt_get['status']){
                                                        $selek="selected";
                                                    } else {
                                                        $selek="";
                                                    }
                                                  ?>
                                                <option value="<?=$key_status?>" <?=$selek?>><?=$val_status?></option>
                                              <?php endforeach ?>
                                      </select>
                                  </div>
                                <?php
                                  // update data for multi transaction
                                  $qry_packg=mysqli_query($conn,"select * from detil_transaksi where id_transaksi='$dt_get[id]'");
                                  while ($dt_packg=mysqli_fetch_array($qry_packg)) {
                                    $qry_pack=mysqli_query($conn,"select * from paket where id_paket='$dt_packg[id_paket]'");
                                    $data_pack=mysqli_fetch_array($qry_pack);
                                    echo "<div class='relative mt-5'>
                                          <label for='type' class='peer h-10 w-full text-gray-600'>Tipe Jasa</label>
                                          <select name='id_paket[]' id='id_paket[]' class='peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none'>
                                            <option disabled>Pilih Jenis Tipe Jasa</option>";
                                            $qry_pack=mysqli_query($conn,"select * from paket");
                                            while ($data_pack=mysqli_fetch_array($qry_pack)) {
                                              if($data_pack['id_paket']==$dt_packg['id_paket']){
                                                echo "<option value='$data_pack[id_paket]'selected>$data_pack[jenis]</option>";
                                              }
                                            }
                                            echo "</select>
                                        </div>
                                        <div class='relative mt-5'>
                                          <label for='qty' class='peer h-10 w-full text-gray-600'>Kuantitas</label>
                                          <div class='flex'>
                                            <input type='text' readonly name='qty[]' id='qty[]' class='peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none cursor-default' placeholder='Kuantitas' value='$dt_packg[qty]' />
                                            <span>Kg</span>
                                          </div>
                                        </div>";
                                  }
                                ?>
                                <div class="relative mt-5 print:hidden">
                                    <button type="submit" class="w-full bg-yellow-600 text-white text-md rounded-md px-2 py-1 hover:bg-yellow-700">Ubah Data Transaksi</button>
                                </div>
                            </form>
                            <div class="hidden print:block">
                              <div class="relative mt-10 flex justify-end items-end">
                                <h1 class="mx-5">Hormat Kami</h1>
                              </div>
                              <div class="relative mt-10 flex justify-end items-end">
                                <h1>(</h1>
                                <span class="mx-5">UKL Laundry</span>
                                <h1>)</h1>
                              </div>
                            </div>
                            <div class="relative mt-5 print:hidden">
                              <button class="w-full px-4 py-2 text-md rounded-md text-white bg-green-600 hover:bg-green-700" onclick="const printBtn = document.getElementById('print'); window.print();" id="print"><i class="bi bi-download"></i> Report</button>
                            </div>
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
  <script>
    var today = new Date();
    var date = (today.getMonth()+1)+'-'+today.getDate()+'-'+today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes();
    var dateTime = date +', '+ time;
    document.getElementById("time").innerHTML = dateTime;

    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>
</body>
</html>