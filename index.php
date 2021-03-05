<?php
require('header.html');
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> Welcome to Rurally Connected</title>
    <!-- Google font API -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Search ison cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- More CSS Files-->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--<a href="#"><img src="images/index_img1.jpg" alt="Pot Painting" height='500px' width='1226px'></a>
   <div class="gallery">
            <div class='col-lg-6'>
            </div>
            <div class='col-lg-6'>
              
            </div>
        </div> -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <a href="#"><img src="images/index_img1.jpg" alt="Pot Painting"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="images/index_img3.jpg" alt="Madhubani"></a>
                </div>
                <div class="item">
                    <a href="#"><img src="images/index_img2.jpg" alt="Farming"></a>
                </div>
            </div>
        </div>
    <?php
    require('footer.html');
    ?>
</body>

</html>
