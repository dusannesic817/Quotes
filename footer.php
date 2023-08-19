
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set('Europe/Belgrade');

$datum=date("M");
$dan=date("j");
$h=date("H");
$m=date("i");


$stampajVreme=($datum." ".$dan.", ".$h.":".$m."pm");

?>

<footer class=" border-top pt-md-3 mt-5 fixed-bottom">
    <div class="container">
            <div class="col-lg-12">
                <h5 class="text-center"><?php print($stampajVreme)?></h5>
                <div class="d-flex justify-content-evenly ">
                    <a hreff=##><i class="fa fa-facebook-square" style="font-size:24px"></i></a>
                    <a hreff=##><i class="fa fa-github" style="font-size:24px"></i></a>
                    <a hreff=##><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
                    <a hreff=##><i class="fa fa-twitter-square" style="font-size:24px"></i></a>
                </div>
            </div>
    </div>
</footer>




</body>

</html>
