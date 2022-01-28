<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        
        <!-- Client Table -->
        <div class="mt-4 mx-4">
          <h1 class="text-xl text-black font-bold uppercase mb-5">Daftar Produk</h1>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-50 uppercase border-b dark:border-yellow-100 bg-yellow-500">
                    <th class="px-4 py-3">Nama Paket</th>
                    <th class="px-4 py-3">jenis Paket</th>
                    <th class="px-4 py-3">Harga</th>
                    <th class="px-4 py-3">Action</th>
                  </tr>
                </thead>
                <tbody class="bg-yellow-600 divide-y dark:divide-yellow-100">
                  <?php
                      include('koneksi.php');
                      $qry_karyawan = mysqli_query($conn,"select * from paket");
                      $no=0;
                      while($data = mysqli_fetch_array($qry_karyawan)){
                      $no++;
                    ?>
                  <tr class="hover:bg-yellow-700">
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        </div>
                        <div>
                          <p class="font-semibold text-gray-50"><?=$data['nama'] ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-50">
                    <?php
                              if($data['jenis'] == 'kiloan'){
                                echo "Kiloan";
                              } else if($data['jenis'] == 'selimut'){
                                echo "Selimut";
                              } else if($data['jenis'] == 'bed_cover'){
                                echo "Bed Cover";
                              } else if($data['jenis'] == 'kaos'){
                                echo "Kaos";
                              } else {
                                echo "Tipe Jasa Produk Tidak Diketahui";
                              }
                            ?>
                    </td>
                    <td class="px-4 py-3 text-xs"><?=$data['harga'] ?></td>
                    <td class="px-4 py-3 text-sm">
                      <a href="edit-produk.php?nama=<?=$data['nama'] ?>" class="px-4 py-2 text-xs rounded-full text-white bg-green-600 hover:bg-green-700"><i class="bi bi-pencil-square"></i> Ubah</a>
                      <a href="../utils/proses-delete-produk.php?nama=<?=$data['nama'] ?>" class="px-4 py-2 text-xs rounded-full text-white bg-red-600 hover:bg-red-700" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="bi bi-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="grid px-4 py-3 font-semibold uppercase border-t border-white sm:grid-cols-4 bg-yellow-500">
              <a href="register-produk.php" class="flex mx-auto col-end-6 text-white bg-green-700 border-0 py-2 px-8 focus:outline-none hover:bg-green-800 rounded text-sm">Tambah Produk</a>
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