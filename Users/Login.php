<?php 
    session_start();
    include('../Model/Db.php');
    $DB = new Db();
    if(isset($_POST['submit']) && $_POST['submit']=='login')
    {
        $email     = $_POST['email'];
        $password  = $_POST['password'];

        $Query = "SELECT * FROM Users WHERE email='$email' AND password ='$password' ";
        $result = $DB->fetch_result($Query);
        // var_dump($result);
        $count = sizeof($result);
        if($count == 1)
        {
            $_SESSION['status'] = 'ok';
            header("Location:../index.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstarp css link start  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- bootstarp css link stop  -->
<style>
     body {
    font-family: "Lato", sans-serif;
    }
    .main-head{
        height: 150px;
        background: #FFF;
    
    }
    .sidenav {
        height: 100%;
        background-color:rgb(27, 24, 24);
        overflow-x: hidden;
        padding-top: 20px;
    }
    .main {
        padding: 0px 30px;
        background-color: rgb(230, 230, 230);
    }
    img{
        width: 150px;
        height: auto;
        padding: 20px;
        border: 5px solid yellow;
        border-radius: 35%;
        margin-left: 100px;
    }
    button{
        margin-top: 20px;
    }
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
        .login-form{
            margin-top: 10%;
        }

        .register-form{
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px){
        .main{
            margin-left: 40%; 
        }

        .sidenav{
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form{
            margin-top: 80%;
        }

        .register-form{
            margin-top: 20%;
        }
    }

    .login-main-text{
        margin-top: 20%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2{
        font-weight: 300;
    }

    .btn-black{
        background-color: #000 !important;
        color: #fff;
    }

</style>
</head>
<body>    
    <div class="sidenav">
        <div class="login-main-text">
            <img src="img/convertcurrency.png" alt="">
           <h2>Currency Converter <br><br> Login Page</h2>
           <br>
           <p>Login or register from here to access.</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-16 pt-2">
           <div class="login-form">
              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" require>
                 </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" require>
                 </div>
                 <div class="form-group">
                    <input type="submit" name="submit" value="login" style="background-color:rgb(31, 138, 226);color: whitesmoke; width: 90px; height: 50px; font-weight: bolder;">
                 </div>
              </form>
              <button  class="btn btn-dark"> <a href="Login.php" style="text-decoration: none;">Login</a> </button>
              <button  class="btn btn-secondary"> <a href="Register.php" style="text-decoration: none; color:wheat">Register</a> </button>
           </div>
        </div>
     </div>





    <!-- boostrap js start  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- boostrap js stopt -->
</body>
</html>