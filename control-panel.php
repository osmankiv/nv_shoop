<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>control-panel</title>
        <link rel="stylesheet" href="css/style-control-panel.css" type="text/css">
        

    </head>

    <body>
        <nav>
            <ul class="headinglist">
                <Li class="hlinks"> <a href="#" class="hlinks">ALL</a> </Li>
                <Li class="hlinks"> <a href="index.php" class="hlinks">Home</a> </Li>
                <Li class="hlinks"> <a href="#" class="hlinks">Smart</a> </Li>
                <Li class="hlinks"> <a href="#" class="hlinks">Food</a> </Li>
                <Li class="hlinks"> <a href="#" class="hlinks">Cofee</a> </Li>
                <Li class="hlinks"> <a href="control-panel.html" class="hlinks">Control-panel</a> </Li>
            </ul>

        </nav>
        <header>
            <h1>add - items 📃</h1>
        </header>
        <form action="php/controlPnelBack.php" method="post" class="foem">
            <input type="num"  name="id" hidden value="<?php $ID  ?>" class="todo-input" heading></input>
            <h2 class="heading" >heading</h2>
            <input type="text"   name="heading" class="todo-input heading1">
            <h2 class="heading">details</h2>
            <input type="text"  name="details" class="todo-input details1 ">
            <h2 class="heading">price</h2>
            <input type="text" name="price" class="todo-input price1">
            <h2 class="heading">image0 link</h2>
            <input type="file"  name="image0"class="todo-input image01">
            <br>
              <button  type="submit"  name="submit" > ➕ add - items</button>
        </form>
        <div class="todo-container">
            <ul class="todo-list">
                <!-- <div class="todo">
                <li>Item No 1</li>
                <button class="complete-btn">✔️</button>
                <button class="trash-btn">❌</button>
            </div> -->
            </ul>
        </div>
        <script src="js/app.js" type="text/javascript"></script>
    </body>

</html>
