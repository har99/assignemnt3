<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Assignment 3 </title>
</head>

<body>
<?php include "app/connection.php" ?>
    
     <div class="topnav" id="myTopnav">
    <?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
     
    $url.= $_SERVER['HTTP_HOST'];   
    $url.= $_SERVER['REQUEST_URI'];
    ?>         
        <?php $pagename = trim($_GET['page'], "'"); ?>
        <a <?php if($url=='https://30032854.2020.labnet.nz/3/index.php'){ ?>class="active" <?php }?> href="index.php"><i class="fa fa-fw fa-globe"></i>Home Page</a>
        <?php foreach($result as $page): ?>
        <?php $test = $page['item']; ?>
        <a <?php if($pagename==$test){ ?>class="active" <?php } ?> href="index.php?page='<?php echo $page['item']; ?>'"><?php echo $test?></a>
        <?php endforeach; ?>
        <a <?php if($url=='https://30032854.2020.labnet.nz/3/form.php'){ ?>class="active" <?php }?> href="form.php" style="float: right">Enter New Entry</a>
        <a href="javascript:void(0);" class="icon" onclick="navFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="Container">
    <br>
    <br>
    <div class="db-container">
    <div class="db">
    <a href="index.php"><img src="images/scp.jpg" style="width: 8em; margin:6px 0 6px 0; padding-bottom: 5px;" /></a>
    </div>
    </div>
    <form class="form-group" method="post" action="app/connection.php">
        <h1>Submit new <span class="greenText">SCP</span> entry below.</h1>
        <br>
        <hr style="border: 3px solid rgb(75,175,75)">
        <br>
        <h3>Item Name</h3>
        <input type="text" name="item" placeholder="Item Name. eg SCP-002" required>
        <br>
        <br>


        <h3>Class</h3>

        <input type="text" name="class" placeholder="Item Class. eg Euclid" required>
        <br>
        <br>


        <h3>Special Containment Procedures</h3>

        <textarea name="containment" rows="5" required placeholder="Specify containment procedures for the SCP Item"></textarea>
        <br>
        <br>


        <h3>Description</h3>

        <textarea name="description" rows="5" required placeholder="Describe the SCP item"></textarea>
        <br>
        <br>


        <h3>Image</h3>
        <input type="text" name="image" required placeholder="Database image, eg 'images/scp_002.jpg' - 'images/scp_011.jpg' - our database is currently limited, contact HQ to add more.">
        <br>
        <br>


        <h3>Extra</h3>
        <textarea name="extra" rows="5" placeholder="Add any extra details about the SCP Item"></textarea>
        <br>
        
        <input type="image" class="playButton" name="submit" src="images/submit.png" value="submit" alt="Submit Button" style="border-style: none; height: auto; width: 18em;">
        <br>

</form>



 <footer>
        <a href="index.php"> </a>
        <h6>© Harmanpreet Singh
        </h6>
  </footer>





<script src="js/functions.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"5ea404d3484cfe6c","version":"2020.9.1","si":10}'></script>

</body>

</html>