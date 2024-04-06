<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New account</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/SinUp.css">
    </head>

    <body>
        <?php
         
?>

        <div class="container">
            <div class="title">Sing Up</div>
            <form action="php/index.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full name</span>
                        <input type="text" name="user_name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="gmail" placeholder="someone@gmail" required>
                    </div>
                    <div class="input-box">
                        <span class="details">password</span>
                        <input type="password"  name="passwerd"placeholder="Not less than 8 characters" required>
                    </div>
                    <div class="input-box">
                        <span class="details">phone_number </span>
                        <input type="text"  name="phone_number"placeholder="Enter your University ID" required>
                    </div>

                </div>
                <div class="gender-details">
                    <input type="radio" name="Gender" id="dot-1">
                    <input type="radio" name="Gender" id="dot-2">
                    <span class="gender-title">Gender</span>
                    <div class="categoty">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot tow"></span>
                            <span class="gender">Fmale</span>
                        </label>
                    </div>
                </div>
                <button class="button" type="submit" name="submit">SIN UPS</button>
            </form>
        </div>
        <script src="js/sin up.js"></script>
    </body>

</html>
