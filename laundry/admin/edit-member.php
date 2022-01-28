<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class=" bg-yellow-50">
<div class="w-full lg:w-6/12 px-4 mx-auto pt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-yellow-300 border-0">
    <div class="rounded-t mb-0 px-6 py-6">
      <div class="btn-wrapper text-center">
        <button class="mr-1 mb-1 uppercase items-center font-bold text-xs ease-linear transition-all duration-150" type="button">
          <img alt="..." class="w-5 mr-0" src="drewhouse_horizontal_logo_150x.png" style="width:85px;height:25px;"></button>
         
      </div>
      <hr class="mt-6 border-b-1 border-blueGray-300">
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
    <?php  
          include ('koneksi.php');
          $qry_get=mysqli_query($conn,"select * from member where nama = '".$_GET['nama']."'");
          $dt_get=mysqli_fetch_array($qry_get);
          ?>  
      <form class="bg-yellow-300" action="../utils/proses-edit-member.php" method="post">
        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> Name</label>
          <input autocomplete="off" name="nama" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-yellow-100 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Name"value="<?=$dt_get['nama']?>"/>
        </div>

        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">Alamat</label>
          <input autocomplete="off" name="alamat" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="alamat" value= "<?=$dt_get['alamat']?>"/>
        </div>

        <div class="relative w-full mb-3">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">Telephone</label>
          <input autocomplete="off" name="tlp" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="telephone" value= "<?=$dt_get['tlp']?>"/>
        </div>

        <div class="relative w-full mb-3">
            <label for="jenis_kelamin" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Jenis kelamin</label>
            <?php 
            $arr_jenis_kelamin=array('L'=>'L','P'=>'P');
            ?>
            <select name="jenis_kelamin" id="jenis_kelamin" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
              <option disabled>jenis kelamin</option>
                                        <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                                              if($key_jenis_kelamin==$dt_get['jenis_kelamin']){
                                                  $select="selected";
                                              } else {
                                                  $select="";
                                              }
                                            ?>
                                          <option value="<?=$key_jenis_kelamin?>" <?=$select?>><?=$val_jenis_kelamin?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

        <div class="text-center mt-6">
          <button type="submit" class="bg-yellow-600 text-white active:bg-yellow-800 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="button">
            Submit  
          </button>
          <a href=tampil-member.php>
        </div>
      </form>
    </div>
  </div>
</div>
<footer class="relative  pt-8 pb-6 mt-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
			© 2022. Drew House.
        </div>
      </div>
    </div>
  </div>
</footer>
</section>
    </form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
