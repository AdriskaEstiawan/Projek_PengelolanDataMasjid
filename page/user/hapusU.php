<?php 
$id = $_GET['kode'];
$query = $conn->query("SELECT foto FROM user WHERE id_user='$id'");
$foto = mysqli_fetch_assoc($query);
$hapus = 'img/'.$foto['foto'];
unlink($hapus);


$result = $conn->query("DELETE FROM user WHERE id_user = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=user';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>