<?php include_once('../authen.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>จัดการข้อมูลกิจกรรม</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="../../dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../../dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../../dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include_once('../includes/sidebar.php') ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อมูลกิจกรรม</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">หน้าแรก</a></li>
              <li class="breadcrumb-item"><a href="../articles">จัดการข้อมูลกิจกรรม</a></li>
              <li class="breadcrumb-item active">เพิ่มข้อมูลกิจกรรม</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">เพิ่มข้อมูลกิจกรรม</h3>
        </div>
        <form role="form" action="create.php" method="post" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group">
              <label for="topic">หัวข้อ</label>
              <input type="text" class="form-control" id="topic" name="topic" placeholder="เพิ่มหัวข้อกิจกรรม" required>
            </div>


            <div class="form-group">
              <label>อัปโหลดรูปภาพกิจกรรม</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" id="customFile" required>
                  <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
              </div>
              <figure class="figure text-center d-none mt-2">
                  <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
              </figure>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  เพิ่มข้อมูลรายละเอียดกิจกรรม
                </h3>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <textarea class="form-control" id="detail" name="detail" placeholder="รายละเอียด" required style="width: 100%; height: 20vh !important;"></textarea>
                </div>
              </div>
            </div>

          </div>
          <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
          </div>
        </form>
      </div>    
    </section>
  </div>

  <?php include_once('../includes/footer.php') ?>

</div>

<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../plugins/fastclick/fastclick.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/ckeditor/ckeditor.js"></script>
<script src="../../plugins/select2/select2.full.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  $(function () {
    $('.custom-file-input').on('change', function(){
      var size = this.files[0].size/1024/1024;
      if(size.toFixed(2)>2){
        alert('File too big, maximum is 2MB');
      }
      else{
        var fileName = $(this).val().split('\\').pop();
        $(this).siblings('.custom-file-label').html(fileName);
        if (this.files[0]) {
            var reader = new FileReader();
            $('.figure').addClass('d-block');
            reader.onload = function (e) {
                $('#imgUpload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
      }
    });

    $('.select2').select2();
  });
</script>

</body>
</html>
