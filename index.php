<?php
session_start();
if(!empty($_SESSION) && !empty($_SESSION['failed'])){
    foreach ($_SESSION['failed'] as $error){
        echo $error;
    }
}



 if(!empty($_GET['p'])){
     $directory = "upload/".$_GET['p'];
     unlink($directory);
 }
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body class="container">
<div class="row">
    <h1>Laisse pas trainer ton file</h1>
</div>
    <form action="checkFile.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input type="file" name="fichier[]" multiple="multiple"/>
            <input type="submit" value="Send" />
        </div>
    </form>

    <div class="container">
        <div class="row">
    <?php $pathImg = scandir('./upload/');?>
    <?php for($i=2;$i<=count($pathImg)-1;$i++){ ?>
        <div class="card" style="width: 18rem;">
            <img src="<?='./upload/'.$pathImg[$i]?>" class="card-img-top" alt="...">
            <p>Le nom du fichier est : <br/> <?=$pathImg[$i]?></p>
            <div class="card-body">
                <a href="?p=<?=$pathImg[$i]?>" class="btn btn-primary">Delete</a>
            </div>
        </div>
    <?php }?>
        </div
    </div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




