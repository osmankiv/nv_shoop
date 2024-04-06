<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
   
   
    

</head>
<body >
    
<?php 
session_start();
//--------contion ------------
    $usernamedb ="root";
    $passwoerddb="";
     $database = new PDO("mysql:host=localhost;dbname=shoop items;charset=utf8;", $usernamedb,$passwoerddb);
//--------End conetion--------
 if(isset($_POST['submit']))
 {


 
        $username=$_POST["username"];
        $password=$_POST["password"];
        $stmt = $database->prepare("SELECT * FROM `user` WHERE user_name = :username And passwerd = :passwerd ");
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':passwerd',$password);
        $stmt->execute();
        $user =$stmt->fetch();
        if($user){
            if(password_verify($password,$user['passwerd']))
            {
                $_SESSION['logged_in']= true;
                $_SESSION['username']= $user['username'];
                 header("location:index.html");
            }else{
                  echo '<script>alert("username or password is faild")</script>'; 
            }

        }else{
              echo '<p class="eroorMasseg">username or password is faild<p> '; 
        }
       
  
             
     
        //echo "username or password is faild";
    }
      
 ?>
    <div class="form-raper">
        <form action="" method="POST"  class="form">
            <div class="logo">
                <i class="fa-solid fa-right-to-bracket"></i>

                <h2>Log in </h2>
            </div>
            <div class="input-wrapper">
                <p> user name</p>
            </div>
            <input type="text"  name="username" class="input" placeholder="Enter your username" id="username" required>
            <div class="input-wrapper">
                <p>password</p>
            </div>
            <input type="password" name="password" class="input" placeholder="***************" id="Password" required>

            <button class="button"  class="Log" type="submit" name="submit" value="log in"><!--   --> Login</a> </button>
            
            </div>

        </form>

    </div>
</body>
</html>