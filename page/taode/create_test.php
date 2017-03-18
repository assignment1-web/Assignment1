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
         
            require_once('../header.php');
        ?>
        <article>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $PROJECT_NAME;?>/index.php">BK Maker</a></li>
                        <li class="breadcrumb-item">Tạo đề thi</li>
                    </ol>
                </div>
                <div class="panel panel-default panel-question">
                    <div class="panel-heading">
                        <h1>Thông tin đề thi</h1>
                    </div>
                    <form action="<?php echo $PROJECT_NAME;?>/page/taode/create_detail_test.php" method="POST">
                    <div class="panel-body">
                        <div class="form-group">
                                    <label for="name">Tên đề <sup style="color: red;"> (*) </sup></label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelper" placeholder="Nhập vào tên đề thi">
                                    <small id="nameHelper" class="form-text text-muted">Tên đề thi có thể giống nhau</small>
                                </div>
                                <div class="form-group">
                                    <label for="type-test">Thể loại đề <sup style="color: red;"> (*) </sup></label>
                                    <select class="form-control" id="type-test">
                                    <option>Toán học</option>
                                    <option>Vật Lý</option>
                                    <option>Anh Văn</option>
                                    <option>Hóa Học</option>
                                    <option>Sinh Học</option>
                                    <option>Khác ...</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="note">Ghi chú</label>
                                    <textarea class="form-control" id="note" rows="3"></textarea>
                                </div>
                    
                    </div>
                    <div class="panel-footer">
                        <button type="submit" id="submit" class="btn btn-primary" >Hoàn thành</button>
                    </div>
                    </form>
            </div>
    </div>
            <?php
                require_once('../footer.php');
            ?>   
    </article>
    <script >
        CKEDITOR.replace("note");
    </script>
</body>

</html>