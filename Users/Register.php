<?php
    include('../Model/Db.php');
    $DB = new Db();
    if(isset($_POST['submit']) && $_POST['submit']=='Register')
    {
        $name       = htmlspecialchars($_POST['name']) ;
        $email      = $_POST['email'] ;
        $phone      = $_POST['phone'];
        $password   = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        
        if($password !== $confirm_password)
        {
            echo "your Passowrd not matching !";
        }
        else
        {
            $check_email = "SELECT * FROM Users WHERE email = '$email'";
            $result = $DB->execute($check_email);
            if(mysqli_num_rows($result)>0)
            {
                echo "Email is alrady exsist !";
            }
            else
            {
                $Query = "INSERT INTO Users(name , email , phone , password) ";
                $Query .= " VALUES('$name','$email','$phone','$password')";

                $connection = $DB->execute($Query);
                if(!$connection)
                {
                    echo "Data is not inserted !";
                }
                else
                {
                    echo "Data is inserted";
                    header("Location:Login.php");
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
           <h2>Currency Converter <br><br> Register Page</h2>
           <br>
           <p>Login or register from here to access.</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-4 col-sm-16">
          <?php echo $Query ;?>
           <div class="login-form">
              <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST" enctype="multipart/form-data">
                 <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="name" placeholder="User Name" require>
                 </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" require>
                 </div>
                 <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" class="form-control" placeholder="Enter Phone number" name="phone" require>
                 </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                 </div>
                 <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Password">
                 </div>
                 <div class="form-group">
                    <input type="submit" name="submit" value="Register" style="background-color:rgb(31, 226, 210);color: whitesmoke; width: 120px; height: 50px; font-weight: bolder;">
                 </div>
              </form>
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