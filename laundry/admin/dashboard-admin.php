<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <!-- component -->
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-yellow-100 text-black dark:text-white">
        <!-- sidebar -->
        <?php include("layout-admin.php"); ?>
        <!-- sidebar selesai -->

      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 p-4 gap-4">
          <div class="bg-yellow-500 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-yellow-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <div class="text-right">
              <?php include ('koneksi.php');
                    $qry_outl = mysqli_query($conn,"select * from outlet");
                    $i = mysqli_num_rows($qry_outl);
              ?>
              <p class="text-2xl"><?=$i ?></p>
              <p>Outlet</p>
            </div>
          </div>
          <div class="bg-yellow-500 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-yellow-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="text-right">
              <?php include ('koneksi.php');
                    $qry_mmber = mysqli_query($conn,"select * from member");
                    $i = mysqli_num_rows($qry_mmber);
              ?>
              <p class="text-2xl"><?=$i ?></p>
              <p>Pelanggan</p>
            </div>
          </div>
          <div class="bg-yellow-500 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-yellow-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            </div>
            <div class="text-right">
              <?php include ('koneksi.php');
                    $qry_trnsct = mysqli_query($conn,"select * from transaksi");
                    $i = mysqli_num_rows($qry_trnsct);
              ?>
              <p class="text-2xl"><?=$i ?></p>
              <p>Traksaksi</p>
            </div>
          </div>
          <div class="bg-yellow-500 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-yellow-600 text-white font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <div class="text-right">
              <?php include ('koneksi.php');
                    $qry_user = mysqli_query($conn,"select * from user");
                    $i = mysqli_num_rows($qry_user);
              ?>
              <p class="text-2xl"><?=$i ?></p>
              <p>Karyawan</p>
            </div>
          </div>
        </div>
        <!-- ./Statistics Cards -->
    
        <!-- Client Table -->
        <div class="mt-4 mx-4">
          <h1 class="text-xl text-black font-bold uppercase mb-5">Daftar Transaksi</h1>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-50 uppercase border-b dark:border-yellow-100 bg-yellow-500">
                    <th class="px-4 py-3">Member</th>
                    <th class="px-4 py-3">Tanggal Pemesanan</th>
                    <th class="px-4 py-3">Tanggal Selesai</th>
                    <th class="px-4 py-3">Pembayaran</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Paket</th>
                    <th class="px-4 py-3">Total Harga</th>
                    <th class="px-4 py-3">Aksi</th>
                  </tr>
                </thead>
                <tbody class="bg-yellow-600 divide-y dark:divide-yellow-100">
                <?php
                    include ('koneksi.php');
                    $qry_transaction = mysqli_query($conn,"SELECT t.id as t_id, m.nama as name_member, t.tgl, t.batas_waktu, t.tgl_bayar, t.status, t.dibayar, u.nama as name_employee, p.jenis as paket, p.harga * d_t.qty as total FROM transaksi t, detil_transaksi d_t, paket p, member m, user u WHERE t.id_member = m.id_member AND t.id_user = u.id AND t.id = d_t.id_transaksi AND p.id_paket = d_t.id_paket");
                    echo mysqli_error($conn);
                    $no=0;
                    while($data = mysqli_fetch_array($qry_transaction)){
                    $no++;
                  ?>
                  <tr class="hover:bg-yellow-700">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        </div>
                        <div>
                          <p class="font-semibold text-gray-50"><?=$data['name_member'] ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-50"><?=$data['tgl'] ?></td>
                    <td class="px-4 py-3 text-sm text-gray-50"><?=$data['batas_waktu'] ?></td>
                    <td class="px-4 py-3 text-xs">
                      <?php if ($data['dibayar'] == 'belum_dibayar'){ ?>
                        <span class="px-2 py-1 font-semibold leading-tight text-white bg-red-700 rounded-full">Belum Lunas</span>
                      <?php } else { ?>
                        <span class="px-2 py-1 font-semibold leading-tight text-white bg-green-700 rounded-full">Lunas</span>
                      <?php } ?>
                    </td>
                    <td class="px-4 py-3 text-xs">
                      <?php if ($data['status'] == 'baru' ) { ?>
                        <span class="px-2 py-1 font-semibold leading-tight text-white bg-red-700 rounded-full">Baru</span>
                      <?php } else if($data['status'] == 'proses') { ?>
                        <span class="px-2 py-1 font-semibold leading-tight text-white bg-yellow-700 rounded-full">Proses</span>
                      <?php } else if($data['status'] == 'selesai') { ?>
                        <span class="px-2 py-1 font-semibold leading-tight text-white bg-blue-700 rounded-full">Selesai</span>
                      <?php } else if($data['status'] == 'diambil') { ?>
                        <span class="px-2 py-1 font-semibold leading-tight text-white bg-green-700 rounded-full">Sudah Diambil</span>
                      <?php } else {
                                echo "Status Pengerjaan Tidak Diketahui";
                            }
                      ?>
                    </td>
                    <td>
                      <?php
                        if ($data['paket'] == 'kiloan') {
                          echo "Kiloan";
                        } else if ($data['paket'] == 'selimut') {
                          echo "Selimut";
                        } else if ($data['paket'] == 'bed_cover') {
                          echo "Bed Cover";
                        } else if ($data['paket'] == 'kaos') {
                          echo "Kaos";
                        } else {
                          echo "Tipe Jasa Produk Tidak Diketahui";
                        }
                      ?>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      Rp.
                      <?php
                        echo $data['total'];
                      ?>
                    </td>
                    <td class="px-4 py-3 text-sm flex sm:flex-row flex-col">
                      <a href="detail-transaksi.php?id=<?=$data['t_id']?>" class="px-4 py-2 text-xs rounded-full text-white bg-blue-600 hover:bg-blue-700"><i class="bi bi-info-circle"></i> Detail</a>
                      <!-- <a href="../utils/process-delete-transaction.php?id=<?=$data['id']?>" class="px-4 py-2 text-xs rounded-full text-white bg-red-600 hover:bg-red-700"><i class="bi bi-trash"></i> Delete</a> -->
                    </td>
                  </tr>
                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- ./Client Table -->
    </div>
  </div>    

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script>
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