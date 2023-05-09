<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Treatments</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input, textarea {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Treatment</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Layanan</label>
          <input type="text" name="treatment" autofocus="" required autocomplete="off" />
        </div>
        <div>
          <label>Deskripsi</label>
          <textarea name="description" id="" cols="54" rows="5" required autocomplete="off"></textarea>
         <!-- <input type="textarea" name="description" cols="12" rows="5" required autocomplete="off"/> -->
        </div>
        <div>
          <label>Estimasi</label>
         <input type="number" name="estimasi" min="0" step="1" required autocomplete="off" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required autocomplete="off" />
        </div>
        <div>
          <label>Gambar</label>
         <input type="file" name="gambar" required autocomplete="off" />
        </div>
        <div>
         <button type="submit">Simpan Treatment</button>
        </div>
        </section>
      </form>
  </body>
</html>