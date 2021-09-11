<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: violet;
      font-family: sans-serif;
    }
    .nav {
      margin: auto;
      width: 80%;
      height: 40px;
      background-color: brown;
      text-align: center;
      padding-top: 20px;
    }
    a {
      text-decoration: none;
      color: white;
    }
    a:hover {
      color: rgb(28, 245, 136);
      text-decoration-line: underline;
    }

    .perkenalan {
      margin: auto;
      width: 80%;
      height: 200px;
      background-color: coral;
      text-align: center;
      padding: 20px 0px;
    }
    .body {
      margin: auto;
      width: 80%;
      height: 300px;
      background-color:darkgreen;
    }

    .kanan {
      width: 30%;
      height: 300px;
      background-color: wheat;
      float: left;
    }
    .kanan .gambar{
      width: 100%;
      height: 300px;
      float: left;
    }
    .kiri {
      width: 70%;
      height: 300px;
      background-color:turquoise;
      float: left;
      text-align: center;
    }

    .footer {
      margin: auto;
      width: 80%;
      height: 50px;
      background-color:dodgerblue;
      text-align: center;
      padding-top: 27px;
    }
  </style>
</head>
<body>

  <div class="nav">
    <a href="index.php">Home</a> |&nbsp;
    <a href="profile.php">Profile</a> |&nbsp;
    <a href="contact.php">Contact</a>
  </div>

  <div class="perkenalan">

    <h1>HALLO SELAMAT DATANG DI PROFILE : )</h1>
  </div>

  <div class="body">
    <div class="kanan">
      <img src="/ppp.png" alt="" class="gambar">
    </div>
    <div class="kiri">
      <h3>MUHAMMAD ADRIAN REYESTA</h3>
      <h4 >UMUR 16 | PELAJAR | BOGOR <br><br> Histori Sekolah <br><br> SD : SDN MUARASARI 1 <br> SMP : SMPN 17 KOTA BOGOR <br> SMK : SMKN 4 KOTA BOGOR</h4>
    </div>
  </div>

  <div class="footer">
    <a href="index.php">Home</a> |&nbsp;
    <a href="profile.php">Profile</a> |&nbsp;
    <a href="contact.php">Contact</a>
  </div>
</body>
</html>