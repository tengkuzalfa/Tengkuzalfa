<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Tekno Blog</title>
    <link rel="shortcut icon" href="images/th1.jpg">
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style type="text/css">
      
    </style>
</head>
<body style="background: url(images/th4.jpg);">
  <nav class="navbar navbar-custom">
      <div class="container fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Teknologi Informasi</a>
        </div>

        <!-- Membuat Search Bar -->
<div class="nav navbar-nav form-inline navbar-right" style="padding: 10px;">
          <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-default">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div></div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="profil.html">Profil</a></li>
          <li><a href="hubungi.html">Contact</a></li>
          
          <li><a href="logout.php">logout</a></li>
        </ul>
      </div>
    </nav>
    <header style="background: url(images/th2.jpg)">
      <div class="text-center">
          <h1>Tekno Blog</h1>
          <div class="lead">Informasi Tentang Teknologi Informasi</div>
      </div>
    </header>
    <!-- Membuat Postingan -->
<div class="row">
    <div >
      <div id="post">
      <form action="" method="POST">
          <table align="center">
            <tr>
              <td>
                <button type="submit" name="daftarakun" class="btn btn-primary">Daftar Akun</button>
              
              
              
                <button type="submit" name="daftarposting" class="btn btn-primary">Daftar Posting</button>
              </td>
            </tr>
          </table>
        </form>
  </div>
</div>
</div>
<?php
        if(isset($_POST['daftarakun'])){
          $query = $db->prepare("SELECT * FROM akun");
          $query->execute();
          $result = $query;

          echo "<table class='table table-border'>";
          echo "<tr><th>Username</th><th>Password</th><th>Nama</th><th>Email</th>";
  foreach($result as $data)
          {
            echo "<tr><td>".$data['username']."</td><td>".$data['password']."</td><td>".$data['nama']."</td><td>".$data['email']."</td></tr>";
  
  //disini akan dibuat tombol Edit dan Hapus          
          
          }
          echo "</table>";
        }
         ?>
<?php
         if(isset($_POST['daftarposting'])){
           
  //disini akan ditampilkan judul posting, tombol Edit dan Hapus

         }
          ?>
               
</body>
</html>