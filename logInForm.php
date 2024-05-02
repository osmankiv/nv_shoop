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
        <link rel="stylesheet" href="css/stylelog in.css">
   
   
    

    </head>
<body >
    
    <?php 
        session_start();
        //--------contion ------------
         include 'conationDB.php';

        if(isset($_POST['submit']))
        {


 
            $username=$_POST["username"];
            $passwerd=$_POST["passwerd"];
            $stmt = $database->prepare("SELECT * FROM `user` WHERE user_name = :username And passwerd = :passwerd ");
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':passwerd',$passwerd);
            $stmt->execute();
            $user =$stmt->fetch();
        
            if($user){

                if(password_verify($passwerd,$user['passwerd']))
                    {
                       $_SESSION['logged_in']= true;
                       $_SESSION['username']= $user['username'];
                         header("location:index.php");
                    }
                    else
                    {
                       $_SESSION['logged_in']= true;
                       $_SESSION['username']=  $username;
                        header("location:index.php?".SID."");
                       
                    
                    }
                    

            }
             else
            {
              echo '
                  <span>
                        <div class="outside outside-warning">
                            <div class="inside inside-warning">
                                <div id="head">&#128683; data filed : </div>
                                username or passwerd is faild
                            </div>
                        </div> 
                    </span>
              
                '; 
            }
    
       
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
                <p>passwerd</p>
            </div>
            <input type="passwerd" name="passwerd" class="input" placeholder="***************" id="Password" required>
            <button class="button"  class="Log" type="submit" name="submit" value="log in"><!--   --> Login</a> </button>
            <button class="button"  class="Log" value="sin up"><!--   --> <a href="account.php">sin up</a> </button>
          


  
        </form>

    </div>
</body>
</html>