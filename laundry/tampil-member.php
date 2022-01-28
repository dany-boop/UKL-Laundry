<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-white-700 text-black dark:text-white">
        <?php include "layouts/layout-admin.php"; ?>
        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            <div class="mt-4 mx-4">
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-50 uppercase border-b dark:border-yellow-100 bg-yellow-500">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Adress</th>
                        <th class="px-4 py-3">Gender</th>
                        <th class="px-4 py-3">Telephone</th>
                        <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-yellow-600 divide-y dark:divide-yellow-100">
                        <?php
                            include('koneksi.php');
                            $qry_karyawan = mysqli_query($conn,"select * from member");
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
                        <td class="px-4 py-3 text-sm text-gray-50"><?=$data['alamat'] ?></td>
                        <td class="px-4 py-3 text-xs"class="px-2 py-1 font-semibold leading-tight text-green-700 dark:text-green-100"><?=$data['jenis_kelamin'] ?>
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-50"><?=$data['tlp'] ?></td>
                        <td class="px-4 py-3 text-sm flex sm:flex-row flex-col">
                            <a href="" class="px-4 py-2 text-xs rounded-full text-white bg-blue-600 hover:bg-blue-700"><i class="bi bi-pencil-square"></i> Ubah</a>
                            |
                            <a href="" class="px-4 py-2 text-xs rounded-full text-white bg-red-600 hover:bg-red-700" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
                <div class="grid px-4 py-3 font-semibold uppercase border-t border-white sm:grid-cols-4 bg-yellow-500">
                    <a href="tambah-member.php" class="flex mx-auto col-end-6 text-white bg-blue-700 border-0 py-2 px-8 focus:outline-none hover:bg-blue-800 rounded text-sm">Add Member</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>