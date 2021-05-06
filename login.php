<?php
session_start();
$host = "localhost";
$db = "nightpro";
$user = "root";
$pass = "";
$conn = mysqli_connect("$host", "$user", "$pass", "$db");
if (!$conn) {
    echo ("Connection error" . mysqli_error($conn));
}
if(isset($_POST['login']))
{
    if($_POST['user'] != "" and $_POST['pwd'] != "")
    {
         $sql = "SELECT * FROM night WHERE `user` = '".$_POST['user']."' and `pass` = '".$_POST['pwd']."' ";
         $res = mysqli_query($conn, $sql);
         $num = mysqli_num_rows($res);
         if ($num > 0) {
             $data = mysqli_fetch_array($res);
             $_SESSION['data'] = $data;
             echo "<script>window.location.href='student.php';</script>";
         }
         else{
            echo "<script>alert('Invalid credentials');</script>";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

    <style>
    body{
        background-image: url(bluewall.jpg);
        background-size: cover;
    }

    </style>

<body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="C:\Users\HP\node_modules\chart.js\dist\Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha256-nZaxPHA2uAaquixjSDX19TmIlbRNCOrf5HO1oHl5p70=" crossorigin="anonymous"></script>
    <div class="container bg-light pt-5">
    <form method="POST">
    <div class="container bg-primary border border-warning">
       <center><h1>Student dashboard login</h1>
        <div class="form-group row justify-content-center pt-3">
            <label for="user" class="col-sm-2">Username</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="user" placeholder="enter your username" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="pwd" class="col-sm-2">Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" name="pwd" placeholder="enter your password" >
            </div>
        </div>
        <div class="form-group row justify-content-center">
                 <button name="login" class="btn btn-warning">Login</button>
        </div>
       </center>
    </div>
    </form>
    </div>
</body>

</html>

