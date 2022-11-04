<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Halaman Tambah User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="fs" accept="image/*">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="user" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" name="saveU">Tambah User</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<?php 
if(isset($_POST['saveU'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $foto = $_FILES['fs']['name'];

    $dir = "img/";
    $tmp_file = $_FILES['fs']['tmp_name'];
    move_uploaded_file($tmp_file, $dir.$foto);
    
    $result = $conn->query("INSERT INTO user(foto,username,password) VALUES ('$foto','$user','$pass')")or die(mysqli_connect_error($conn));

    if($result > 0) {
        echo "<script>
                document.location.href= '?page=user';  
              </script>";
    } else {
        echo "Gagal Menambahkan data";
    }


}



?>