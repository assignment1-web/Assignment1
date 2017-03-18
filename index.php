<!DOCTYPE html>
<html lang="en">

<head>
    <!--<title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link href="css/style.css" rel="stylesheet">-->
    <?php 
        require_once('page/include.php');
    ?>
</head>

<body>
    <div class="container-fluid main-page">
        <?php 
            require_once('page/header.php');
        ?>
        <div class="container-fluid content-page">
            <div class="col-md-8 content-left">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/slide1.jpg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="images/slide1.jpg" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="images/slide1.jpg" alt="Flower">
                            </div>

                            <div class="item">
                                <img src="images/slide1.jpg" alt="Flower">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <article>
                        Nulla magna aute officia mollit nulla culpa velit. Deserunt elit laborum ipsum consequat commodo exercitation cupidatat est culpa duis duis. Amet exercitation ut consequat pariatur duis commodo culpa nulla. Cillum aliqua incididunt exercitation ut labore aliquip fugiat Lorem in. Commodo in minim magna ipsum. Laborum ad deserunt quis irure et consectetur reprehenderit aute incididunt ipsum. Reprehenderit nisi cupidatat officia id consequat irure fugiat qui ut amet deserunt voluptate.
                    </article>
                </div>
            <div class="col-md-4 content-right">
                <div class="category">
                    <h1> Đề mới nhất </h1>
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Đề số 1</a></li>
                        <li><a href="#">Đề số  2</a></li>
                        <li><a href="#">Đề số  3</a></li>
                    </ul>
                </div>

                <div class="category">
                    <h1> Đề mới nhất </h1>
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    <?php 
            require_once('page/footer.php');
        ?>

</body>

</html>