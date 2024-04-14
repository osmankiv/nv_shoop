  <!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta lang="EN">
		<link rel="stylesheet" type="text/css" href="css/styel.css">
		<title>osman-shoop</title>
	</head>

	<body>
       
        <?php
    
        session_start();
//--------contion ------------
    $username ="root";
    $passwoerd="";
    $database = new PDO("mysql:host=localhost;dbname=shoop items;charset=utf8;", $username,$passwoerd);
//--------End conetion--------
//-------add data items--------

        

    if(isset($_POST['submit']))
    {
        $id=$_POST["id"];
        $heading=$_POST["heading"];
        $details=$_POST["details"]; 
        $price=$_POST["price"]; 
        $image0=$_POST["image0"];
        $addData =$database->prepare("INSERT INTO `items`(`id`,`heading`, `details`, `price`, `image0`) VALUES ('$id','$heading','$details','$price','$image0')");
        $addData->execute();
        $_SESSION['$addAdata']=true;
        
         
          header("location:\shoop/control-panel.php");
       ;
            
      
    }
    
        
 
    
        
        ?>
    </body>
</html>