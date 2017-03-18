<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('../include.php');
    ?>
    <link href="<?php echo $PROJECT_NAME;?>/css/taode.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid main-page">
        <?php
            $number_of_question = 0;
            require_once('../header.php');
        ?>
        <article>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $PROJECT_NAME;?>/index.php">BK Maker</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $PROJECT_NAME;?>/page/taode/create_test.php">Tạo đề thi</a></li>
                        <li class="breadcrumb-item">Chi tiết</li>
                    </ol>
                </div>
                <div class="panel panel-default panel-question">
                    <div class="panel-heading">
                        <h1>TOEIC 100</h1>
                    </div>
                    <div class="panel-body">
                        <p class="choice-question">
                            <a href="#" id="add-question"><span class="glyphicon glyphicon-plus-sign add-question"> </a>
                            <a href="#" id="done-question"><span class="glyphicon glyphicon-ok done-question"> </a>
                            <a href="#" id="remove-question"><span class="glyphicon glyphicon-remove remove-question"> </a>
                        <p>
                        <div id="content">
                            
                        </div>
                        
                    </p>
                </p>
            </div>
            </div>
    </div>
            <?php
                require_once('../footer.php');
            ?>   
    </article>
    <script src="<?php echo $PROJECT_NAME;?>/js/myscript.js"></script>
</body>

</html>