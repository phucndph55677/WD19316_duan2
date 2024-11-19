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



          <div class="card">
            <div class="card-header">
              <a href="<?=BASE_URL_ADMIN . '?act=form-add-cate'?>">
                <button class="btn btn-success">Thêm Danh Mục Mới</button>
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Thao tác</th>

                  </tr>
                </thead>
                <tbody>
                  <? foreach ($listCate as $key => $value) : ?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $value['ten_danh_muc'] ?></td>
                      <td><?= $value['mo_ta'] ?></td>
                      <td>
                        <a href="<?=BASE_URL_ADMIN . '?act=delete-cate&id=' . $value['id']?>" onclick="return confirm('Bạn có muốn xóa danh mục này không?')">
                          <button class="btn btn-danger">Xóa</button></a>
                        <a href="<?=BASE_URL_ADMIN . '?act=form-edit-cate&id=' . $value['id']?>">
                        <button class="btn btn-primary">Sửa</button>
                        </a>
                        
                      </td>
                    </tr>
                  <? endforeach ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Thao tác</th>

                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
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
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>