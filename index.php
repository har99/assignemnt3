<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  <title>Assignment 3</title>
</head>

<body style="background-color:Aquamarine;">
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
        <a <?php if($url=='https://30032854.2020.labnet.nz/3/index.php'){ ?>class="active" <?php }?> href="index.php"><i class="fa fa-fw fa-globe"></i>Home page</a>
        <?php foreach($result as $page): ?>
        <?php $test = $page['item']; ?>
        <a <?php if($pagename==$test){ ?>class="active" <?php } ?> href="index.php?page='<?php echo $page['item']; ?>'"><?php echo $test?></a>
        <?php endforeach; ?>
        <a <?php if($url=='https://30032854.2020.labnet.nz/3/form.php'){ ?>class="active" <?php }?> href="form.php" style="float: right">Enter new Entry</a>
        <a href="javascript:void(0);" class="icon" onclick="navFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

  <div class="Container">
  <br>

  <div class="row">

    <div class="col">

    <?php
      if(isset($_GET['page']))
      {
        $pg = trim($_GET['page'], "'");

        $record = $connection->query("select * from pages where item='$pg'") or die($connection->error());

                
                $row = $record->fetch_assoc();
                $item = $row['item'];
                $class = $row['class'];
                $containment = $row['containment'];
                $containment = nl2br($containment);
                $description = $row['description'];
                $description = nl2br($description);
                $image = $row['image'];
                $extra = $row['extra'];
                $extra = nl2br($extra);
                $id = $row['id'];
                $update = "update.php?update=" . $id;
                $delete = "app/connection.php?delete=" . $id;
                echo"
                
                <h1>Item #: {$item}</h1>
                <h2>Object Class: {$class}</h2>

                <br>=
                <br>

                <div class='click-zoom'>
                <label>
                <input type='checkbox'>
                <img class='imageContain' src='{$image}' alt='Picture of {$item}}'>
                </label>
                </div>

                <br>
                
                <br>
                
                <h3>Special Containment Procedures:</h3>
                
                <p id='readMe'>{$containment}</p>
                <br>
                
                <br>

                <h3>Description:</h3>
                <p>{$description}</p>

                <br>
                
                <br>

                
        
                ";

            
                echo "
                <p>
                <br>
                <hr style='border: 2px solid rgb(75,175,75); width: 75%; margin: auto;'>
                <br>
                <div class='db-container'>
                 <div class='db'>
                 <a href='{$update}'><img src='images/update.png' alt='Play Button' style='border-style: none; height: auto; width: 15em; padding-top:15px;'></a>
                </div>
                </div>
                <br>

                <div class='db-container'>
                <div class='db'>
                <a href='{$delete}'><img src='images/delete.jpg' alt='Play Button' style='border-style: none; height: auto; width: 12em;'></a>
                </div>
                </div>
                
                </p>
                ";
        


      }

    
      else
      {
        
        echo "
        <br>

        <div class='db-container'>
        <div class='db'>
        <a href='index.php'><img src='images/scp.jpg' style='width: 8em; margin:6px 0 6px 0; padding-bottom: 5px;' /></a>
        </div>
        </div>
        <br>
        <h1 class='greenText'> Different Type of Database  </h1>
        <br>
        
        <br>
        <div class='db-container'>
        <div class='db'>
          <a href='form.php'><img src='images/submit.png' alt='Submit' style='border-style: none; height: auto; width: 15em; padding-top:25px; padding-bottom:15px'></a>
        </div>
        </div>
        <br>
        <br>
        <hr style='border: 5px solid rgb(75,175,75)'>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        

        
        ";
      
      }

    ?>

    </div>

  </div>
  <br>
  <footer>
        <a href="index.php"> </a>
        <h6>© Harmanpreet Singh
        </h6>
  </footer>


<script src="js/functions.js">
</script>
</body>

</html>