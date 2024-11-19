<? include_once './Views/layout/header.php' ?>
<? include_once './Views/layout/navbar.php' ?>
<? include_once './Views/layout/sidebar.php' ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh Mục</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Danh Mục Mới</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= BASE_URL_ADMIN . '?act=edit-cate' ?>" method="POST">
                <input type="text" name="id" value="<?=$cate['id']?>" hidden>
    
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                    <input type="text" class="form-control" name="ten_danh_muc" value="<?=$cate['ten_danh_muc']?>"  placeholder="Tên Danh Mục">
                    <?if(isset($errors['ten_danh_muc'])){?>
                      <p class="text-danger"><?=$errors['ten_danh_muc']?></p>
                    <?}?>
                  </div>
                  <div class="form-group">
                    <label for="">Mô Tả</label>
                    <textarea name="mo_ta" id=""  class="form-control"    placeholder="Nhập Mô Tả"><?=$cate['mo_ta']?></textarea>
                  </div>
                  
                  
                      
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


       
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- <footer></footer> -->
<? include_once('./Views/layout/footer.php'); ?>
<!-- end footer -->

</body>

</html>