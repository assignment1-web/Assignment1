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
            <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus-sign add_test"></a>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content create-modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thông tin đề thi</h4>
                        </div>
                        <form action="#">
                            <div class="modal-body">
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
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="note">Ghi chú</label>
                                    <textarea class="form-control" id="note" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Hoàn thành</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">BK Maker</a></li>
                        <li class="breadcrumb-item">Tạo đề thi</li>
                    </ol>
                </div>
            <section>
                <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <div class="logo">
                            <p>Tiếng Anh
                                <p>
                        </div>
                        <div class="caption">
                            <h3>TOEIC 100</h3>
                            <p>Đề thi toeic cho người mới bắt đầu</p>
                            <p align="center"><a href="<?php echo $PROJECT_NAME;?>/page/taode/create_test.php?de=1" class="btn btn-primary btn-block">Chỉnh sửa</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <div class="logo">
                            <p>Tiếng Anh
                                <p>
                        </div>
                        <div class="caption">
                            <h3>TOEIC 100</h3>
                            <p>Đề thi toeic cho người mới bắt đầu</p>
                            <p align="center"><a href="<?php echo $PROJECT_NAME;?>/page/taode/create_test.php?de=1" class="btn btn-primary btn-block">Chỉnh sửa</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <div class="logo">
                            <p>Tiếng Anh
                                <p>
                        </div>
                        <div class="caption">
                            <h3>TOEIC 100</h3>
                            <p>Đề thi toeic cho người mới bắt đầu</p>
                            <p align="center"><a href="<?php echo $PROJECT_NAME;?>/page/taode/create_test.php?de=1" class="btn btn-primary btn-block">Chỉnh sửa</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <div class="logo">
                            <p>Tiếng Anh
                                <p>
                        </div>
                        <div class="caption">
                            <h3>TOEIC 100</h3>
                            <p>Đề thi toeic cho người mới bắt đầu</p>
                            <p align="center"><a href="<?php echo $PROJECT_NAME;?>/page/taode/create_test.php?de=1" class="btn btn-primary btn-block">Chỉnh sửa</a></p>
                        </div>
                    </div>
                </div>

            </div>
            </section>
            
        </article>
        <?php
            require_once('../footer.php');
        ?>
    </div>
    
</body>

</html>