<?php 
    @$panjang = $_GET['panjang'];
    @$lebar = $_GET['lebar'];
    @$luas = $panjang * $lebar;
    @$keliling = 2 * ($panjang + $lebar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Anjar's Math Formula</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="." id="up">Anjar's</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#who">WHO</a></li>
        <li><a href="#what">WHAT</a></li>
        <li><a href="#where">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center" id="where">    
  <h3 class="margin">Rumus Persegi Panjang</h3><br>
  <div class="row">
    
        <form class="form-horizontal" method="GET">
            <div class="form-group">
                <label class="control-label col-sm-4" for="panjang">P (panjang) cm:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-group" name="panjang" value="<?php echo $panjang; ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="lebar">P (lebar) cm:</label>
                <div class="col-sm-6">
                    <input type="text" name="lebar" value="<?php echo $lebar; ?>"/>
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>
            </div>
        </form>
        <h3>Hasil Perhitungan>
        <div class="table-responsive">          
          <table class="table">
            <thead>
              <tr>
                <th class=" text-center">Luas</th>
                <th class=" text-center">Keliling</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <?php echo "Luas Persegi Panjang = ".$luas." cm^2<br/>";?>
                </td>
                <td>
                    <?php echo "Keliling Persegi Panjang = ".$keliling," cm"; ?>
                </td>
              </tr>
            </tbody>
          </table>

</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>

</body>
</html>