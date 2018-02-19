<!DOCTYPE html>
<html>
<head>
  <title>Edit Dashboard</title>
  <style type="text/css">
    body {
      background: yellow;
    }
    .box{
      width: 100px;
      height: 100px;
      border: 1px solid;
      /*float: left;*/
    }
    div {

      float: left;
    }
    .box img {
      width: 100px;
      height: 100px;
    }



    .button {
      position: fixed;
      background: black;
      width: 100%;
      height: 40px;
      margin-left: 80%;
      margin-top: 20%;
    }
  </style>
</head>
<body>
  <h1>Edit Dashboard</h1>
  <form method="POST" enctype="multipart/form-data">
    <div class="button">
      <input type="submit" name="simpan" value="simpan">
      <input type="reset"  value="reset pilihan">
      <input type="submit" formaction="<?php echo base_url('admin') ?>" value="kembali">
    </div>
    <div>
      <h2>Banner</h2>
    <table border="1" cellspacing="0"="center" text-align="center">
      <tr align="center">
        <td>nama</td>
        <td>tampilan sekarang</td>
        <td>edit</td>
      </tr>
      <tr>
        <td>Banner 1</td>
        <td>
          <div class="box"> <img src="../assets/upload/b1.jpg"></div>
        </td>
        <td>
           <input type="file" name="banner1">
        </td>
      </tr>
      <tr>
        <td>Banner2</td>
        <td>
          <div class="box"> <img src="../assets/upload/b2.jpg"></div>
        </td>
        <td>
           <input type="file" name="banner2">
        </td>
      </tr>
      <tr>
        <td>Banner 3</td>
        <td>
          <div class="box"> <img src="../assets/upload/b3.jpg"></div>
        </td>
        <td>
           <input type="file" name="banner3">
        </td>
      </tr>
      <tr>
        <td>Banner 4</td>
        <td>
          <div class="box"> <img src="../assets/upload/b4.jpg"></div>
        </td>
        <td>
           <input type="file" name="banner4">
        </td>
      </tr>
    </table>
    </div>

    <div>
      <h2>Snack</h2>
      <table border="1" cellspacing="0"="center" >
        <tr align="center">
          <td>nama</td>
          <td>tampilan sekarang</td>
          <td>edit</td>
        </tr>
        <tr>
          <td>Batagor</td>
          <td>
            <div class="box">depan<img src="../assets/upload/s1.jpg"></div>
            <div class="box">belakang<img src="../assets/upload/s12.jpg"></div>
          </td>
          <td>
             1<input type="file" name="s1">
             2<input type="file" name="s12">
          </td>
        </tr>
        <tr>
          <td>Bihun</td>
          <td>
            <div class="box"> <img src="../assets/upload/s2.jpg"></div>
            <div class="box"> <img src="../assets/upload/s22.jpg"></div>
          </td>
          <td>
             <input type="file" name="2">
             <input type="file" name="s22">
          </td>
        </tr>
        <tr>
          <td>Cimol</td>
          <td>
            <div class="box"> <img src="../assets/upload/s3.jpg"></div>
            <div class="box"> <img src="../assets/upload/s32.jpg"></div>
          </td>
          <td>
             <input type="file" name="s3">
             <input type="file" name="s32">
          </td>
        </tr>
        <tr>
          <td>Lumpia</td>
          <td>
            <div class="box"> <img src="../assets/upload/s4.jpg"></div>
            <div class="box"> <img src="../assets/upload/s42.jpg"></div>
          </td>
          <td>
             <input type="file" name="s4">
             <input type="file" name="s42">
          </td>
        </tr>
        <tr>
          <td>Makaroni</td>
          <td>
            <div class="box"> <img src="../assets/upload/s5.jpg"></div>
            <div class="box"> <img src="../assets/upload/s52.jpg"></div>
          </td>
          <td>
             <input type="file" name="s5">
             <input type="file" name="s52">
          </td>
        </tr>
        <tr>
          <td>pangsit</td>
          <td>
            <div class="box"> <img src="../assets/upload/s6.jpg"></div>
            <div class="box"> <img src="../assets/upload/s62.jpg"></div>
          </td>
          <td>
             <input type="file" name="s6">
             <input type="file" name="s62">
          </td>
        </tr>

          <td>Siomay</td>
          <td>
            <div class="box"> <img src="../assets/upload/s7.jpg"></div>
            <div class="box"> <img src="../assets/upload/s72.jpg"></div>
          </td>
          <td>
             <input type="file" name="s7">
             <input type="file" name="s72">
          </td>
        </tr>

          <td>Snack 2 rebu</td>
          <td>
            <div class="box"> <img src="../assets/upload/s8.jpg"></div>
            <div class="box"> <img src="../assets/upload/s82.jpg"></div>
          </td>
          <td>
             <input type="file" name="s8">
             <input type="file" name="s82">
          </td>
        </tr>
      </table>
    </div>
    <div>
      <h2>Cireng</h2>
      <table border="1" cellspacing="0"="center" >
        <tr align="center">
          <td>nama</td>
          <td>tampilan sekarang</td>
          <td>edit</td>
        </tr>
        <tr>
          <td>Bumbu Kacang</td>
          <td>
            <div class="box">depan<img src="../assets/upload/c1.jpg"></div>
            <div class="box">belakang<img src="../assets/upload/c12.jpg"></div>
          </td>
          <td>
             1<input type="file" name="c1">
             2<input type="file" name="c12">
          </td>
        </tr>
        <tr>
          <td>Bumbu Balado</td>
          <td>
            <div class="box"> <img src="../assets/upload/c2.jpg"></div>
            <div class="box"> <img src="../assets/upload/c22.jpg"></div>
          </td>
          <td>
             <input type="file" name="c2">
             <input type="file" name="c22">
          </td>
        </tr>
        <tr>
          <td>Bumbu Sambal ijo</td>
          <td>
            <div class="box"> <img src="../assets/upload/c3.jpg"></div>
            <div class="box"> <img src="../assets/upload/c32.jpg"></div>
          </td>
          <td>
             <input type="file" name="c3">
             <input type="file" name="c32">
          </td>
        </tr>
        <tr>
          <td>Bumbu Rujak</td>
          <td>
            <div class="box"> <img src="../assets/upload/c4.jpg"></div>
            <div class="box"> <img src="../assets/upload/c42.jpg"></div>
          </td>
          <td>
             <input type="file" name="c4">
             <input type="file" name="c42">
          </td>
        </tr>
      </table>
    </div>
    <div>
      <h2>Catering</h2>
      <table border="1" cellspacing="0"="center" >
        <tr align="center">
          <td>nama</td>
          <td>tampilan sekarang</td>
          <td>edit</td>
        </tr>
        <tr>
          <td>makanan berat</td>
          <td>
            <div class="box">depan<img src="../assets/upload/ct1.jpg"></div>
            <div class="box">belakang<img src="../assets/upload/ct12.jpg"></div>
          </td>
          <td>
             1<input type="file" name="ct1">
             2<input type="file" name="ct12">
          </td>
        </tr>
        <tr>
          <td>Disert</td>
          <td>
            <div class="box"> <img src="../assets/upload/ct2.jpg"></div>
            <div class="box"> <img src="../assets/upload/ct22.jpg"></div>
          </td>
          <td>
             <input type="file" name="ct2">
             <input type="file" name="ct22">
          </td>
        </tr>
        <tr>
          <td>Gorengan</td>
          <td>
            <div class="box"> <img src="../assets/upload/ct3.jpg"></div>
            <div class="box"> <img src="../assets/upload/ct32.jpg"></div>
          </td>
          <td>
             <input type="file" name="ct3">
             <input type="file" name="ct32">
          </td>
        </tr>
        <tr>
          <td>Minuman</td>
          <td>
            <div class="box"> <img src="../assets/upload/ct4.jpg"></div>
            <div class="box"> <img src="../assets/upload/ct42.jpg"></div>
          </td>
          <td>
             <input type="file" name="ct4">
             <input type="file" name="ct42">
          </td>
        </tr>
      </table>
    </div>
  </form>

  <?php 
    if (isset($_POST["simpan"])) {
      $folder = './assets/upload/';
      //header
      $sumber1 = $_FILES["banner1"]["tmp_name"];   
      move_uploaded_file($sumber1, $folder."b1.jpg");
      $sumber2 = $_FILES["banner2"]["tmp_name"];   
      move_uploaded_file($sumber2, $folder."b2.jpg");
      $sumber3 = $_FILES["banner3"]["tmp_name"];   
      move_uploaded_file($sumber3, $folder."b3.jpg");
      $sumber4 = $_FILES["banner4"]["tmp_name"];   
      move_uploaded_file($sumber4, $folder."b4.jpg");

      //snack      
      $sumbers1 = $_FILES["s1"]["tmp_name"];   
      move_uploaded_file($sumbers1, $folder."s1.jpg");
      $sumbers2 = $_FILES["s12"]["tmp_name"];   
      move_uploaded_file($sumbers2, $folder."s12.jpg");

      $sumbers3 = $_FILES["s2"]["tmp_name"];   
      move_uploaded_file($sumbers3, $folder."s2.jpg");
      $sumbers4 = $_FILES["s22"]["tmp_name"];   
      move_uploaded_file($sumbers4, $folder."s22.jpg");
      
      $sumbers5 = $_FILES["s3"]["tmp_name"];   
      move_uploaded_file($sumbers5, $folder."s3.jpg");
      $sumbers6 = $_FILES["s32"]["tmp_name"];   
      move_uploaded_file($sumbers6, $folder."s32.jpg");

      $sumbers7 = $_FILES["s4"]["tmp_name"];   
      move_uploaded_file($sumbers7, $folder."s4.jpg");
      $sumbers8 = $_FILES["s42"]["tmp_name"];   
      move_uploaded_file($sumbers8, $folder."s42.jpg");

      $sumbers9 = $_FILES["s5"]["tmp_name"];   
      move_uploaded_file($sumbers9, $folder."s5.jpg");
      $sumbers10 = $_FILES["s52"]["tmp_name"];   
      move_uploaded_file($sumbers10, $folder."s52.jpg");

      $sumbers11 = $_FILES["s6"]["tmp_name"];   
      move_uploaded_file($sumbers11, $folder."s6.jpg");
      $sumbers12 = $_FILES["s62"]["tmp_name"];   
      move_uploaded_file($sumbers12, $folder."s62.jpg");

      $sumbers13 = $_FILES["s7"]["tmp_name"];   
      move_uploaded_file($sumbers13, $folder."s7.jpg");
      $sumbers14 = $_FILES["s72"]["tmp_name"];   
      move_uploaded_file($sumbers14, $folder."s72.jpg");

      $sumbers15 = $_FILES["s8"]["tmp_name"];   
      move_uploaded_file($sumbers15, $folder."s8.jpg");
      $sumbers16 = $_FILES["s82"]["tmp_name"];   
      move_uploaded_file($sumbers16, $folder."s82.jpg");

      //cireng    
      $sumberc1 = $_FILES["c1"]["tmp_name"];   
      move_uploaded_file($sumberc1, $folder."c1.jpg");
      $sumberc12 = $_FILES["c12"]["tmp_name"];   
      move_uploaded_file($sumberc12, $folder."c12.jpg");
      
      $sumberc2 = $_FILES["c2"]["tmp_name"];   
      move_uploaded_file($sumberc2, $folder."c2.jpg");
      $sumberc22 = $_FILES["c22"]["tmp_name"];   
      move_uploaded_file($sumberc22, $folder."c22.jpg");

      $sumberc3 = $_FILES["c3"]["tmp_name"];   
      move_uploaded_file($sumberc3, $folder."c3.jpg");
      $sumberc32 = $_FILES["c32"]["tmp_name"];   
      move_uploaded_file($sumberc32, $folder."c32.jpg");
      
      $sumberc4 = $_FILES["c4"]["tmp_name"];   
      move_uploaded_file($sumberc4, $folder."c4.jpg");
      $sumberc42 = $_FILES["c42"]["tmp_name"];   
      move_uploaded_file($sumberc42, $folder."c42.jpg");

      //catering 
      $sumberct1 = $_FILES["ct1"]["tmp_name"];   
      move_uploaded_file($sumberct1, $folder."ct1.jpg");
      $sumberct2 = $_FILES["ct12"]["tmp_name"];   
      move_uploaded_file($sumberct2, $folder."ct12.jpg");

      $sumberct3 = $_FILES["ct2"]["tmp_name"];   
      move_uploaded_file($sumberct3, $folder."ct2.jpg");
      $sumberct4 = $_FILES["ct22"]["tmp_name"];   
      move_uploaded_file($sumberct4, $folder."ct22.jpg");

      $sumberct5 = $_FILES["ct3"]["tmp_name"];   
      move_uploaded_file($sumberct5, $folder."ct3.jpg");
      $sumberct6 = $_FILES["ct32"]["tmp_name"];   
      move_uploaded_file($sumberct6, $folder."ct32.jpg");

      $sumberct7 = $_FILES["ct4"]["tmp_name"];   
      move_uploaded_file($sumberct7, $folder."ct4.jpg");
      $sumberct8 = $_FILES["ct42"]["tmp_name"];   
      move_uploaded_file($sumberct8, $folder."ct42.jpg");

      echo "<script>alert('berhasil update');location.href='http://localhost/food/admin'</script>";

    }
  ?>
</body>
</html>