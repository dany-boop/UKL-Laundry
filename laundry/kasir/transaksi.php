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
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-yellow-50 text-black dark:text-white">
      <?php include ('layout-kasir.php') ?>
    
      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
      <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold text-black">Silakan Masukkan Data Transaksi!</h1>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <form action="transaksi.php" method="get">
                                  <div class="relative mt-5">
                                    <label for="total_paket" class="peer h-10 w-full text-gray-600">Jumlah Pemesanan</label>
                                    <div class="flex">
                                        <input type="number" name="total_paket" id="total_paket" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" value="<?=$_GET['total_paket'] ? $_GET['total_paket'] : 1  ?>" min="1" />
                                        <button type="submit" class="w-24 ml-3 bg-yellow-600 text-white rounded-md px-2 py-1 hover:bg-yellow-700"><i class="bi bi-arrow-clockwise"></i></button>
                                    </div>
                                  </div>
                                </form>
                                <form action="../utils/kasir/proses-transaksi.php" method="post">
                                    <div class="relative mt-5">
                                        <label for="member" class="peer h-10 w-full text-gray-600">Member</label>
                                        <select name="member" id="member" class="peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none">
                                            <option disabled>Pilih Nama Member</option>
                                            <?php
                                            include "../koneksi.php";
                                            $qry_member=mysqli_query($conn,"select * from member");
                                            while($data_member=mysqli_fetch_array($qry_member)){
                                                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';    
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="relative mt-5">
                                        <label for="tgl" class="peer h-10 w-full text-gray-600">Tanggal Pemesanan</label>
                                        <input type="date" name="tgl" id="tgl" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="Tanggal Pemesanan" />
                                    </div>
                                    <div class="relative mt-5">
                                        <label for="batas_waktu" class="peer h-10 w-full text-gray-600">Tanggal Selesai</label>
                                        <input type="date" name="batas_waktu" id="batas_waktu" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="Tanggal Selesai" />
                                    </div>
                                    <div class="relative mt-5">
                                        <label for="tgl_bayar" class="peer h-10 w-full text-gray-600">Tanggal Bayar</label>
                                        <input type="date" name="tgl_bayar" id="tgl_bayar" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="Tanggal Bayar" />
                                    </div>
                                    <div class="relative mt-5">
                                      <label for="status" class="peer h-10 w-full text-gray-600">Status Pengerjaan</label>
                                        <select name="status" id="status" class="peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none">
                                            <option  disabled selected>Pilih Status Pengerjaan</option>
                                            <option value="baru">baru</option>
                                            <option value="proses">proses</option>
                                            <option value="selesai">selesai</option>
                                            <option value="diambil">diambil</option>
                                        </select>
                                    </div>
                                    <div class="relative mt-5">
                                      <label for="dibayar" class="peer h-10 w-full text-gray-600">Status Pembayaran</label>
                                        <select name="dibayar" id="dibayar" class="peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none">
                                            <option  disabled selected>Pilih Pembayaran</option>
                                            <option value="dibayar">dibayar</option>
                                            <option value="belum_dibayar">belum dibayar</option>
                                        </select>
                                    </div>
                                  <?php for($index = 0; $index < ($_GET['total_paket'] ? $_GET['total_paket'] : 1); $index++) : ?>
                                    <div class="relative mt-5">
                                        <label for="paket" class="peer h-10 w-full text-gray-600">Tipe Jasa</label>
                                        <select name="id_paket[]" id="id_paket[]" class="peer placeholder-transparent h-10 w-full border-gray-300 text-gray-900 focus:outline-none">
                                            <option disabled>Pilih Jenis Tipe Jasa</option>
                                            <?php
                                            include "../koneksi.php";
                                            $qry_packg=mysqli_query($conn,"select * from paket");
                                            while($data_packg=mysqli_fetch_array($qry_packg)){
                                                echo '<option value="'.$data_packg['id_paket'].'">'.$data_packg['jenis'].'</option>';    
                                            }
                                            ?>
                                          </select>
                                        </div>
                                    <div class="relative mt-5">
                                      <label for="qty" class="peer h-10 w-full text-gray-600">Kuantitas</label>
                                      <div class="flex">
                                        <input type="text" name="qty[]" id="qty[]" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none" placeholder="Kuantitas" />
                                        <span>Kg</span>
                                      </div>
                                    </div>
                                  <?php endfor; ?>
                                    <div class="relative mt-5">
                                        <button type="submit" class="w-full bg-yellow-600 text-white rounded-md px-2 py-1 hover:bg-yellow-700">Transaksi!</button>
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