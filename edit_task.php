<?php 
include 'database.php';

$id = $_GET['id'];

if(isset($_POST['submit'])){

    $nama_tugas = $_POST['nama_tugas'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_tenggat = $_POST['tanggal_tenggat'];

    $sql = "UPDATE tugas SET nama_tugas = '$nama_tugas', deskripsi = '$deskripsi', tanggal_tenggat = '$tanggal_tenggat' WHERE id_tugas = $id";
    
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header('Location: index.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Edit Task</title>
    </head>
    <center><h1>Edit Tugas</h1></center>
        <body>
            <?php
            $sql = "SELECT * FROM tugas WHERE id_tugas = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="container d-flex justify-content-center">

                

                <form action="" method="post" style="width:50vw; min-width:300px;">

                    <div class="row mb-3">
                        <label class="form-label">Nama Tugas</label>
                        <input type="text" class="form-control" name="nama_tugas" value="<?php echo $row['nama_tugas'] ?>">
                    </div>

                    <div class="row mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px"><?php echo $row['deskripsi'] ?></textarea>
                    </div>

                    <div class="row mb-3">
                        <label class="form-label">Tanggal Tenggat</label>
                        <input type="date" class="form-control" name="tanggal_tenggat" value="<?php echo $row['tanggal_tenggat'] ?>">
                    </div>

                    <div>
                    <button type="submit" class="btn btn-primary" name="submit">Ganti</button>
                    <a href="index.php" class="btn btn-danger">Batal</a>
                    </div>

                    </div>

 
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                </form>
            </div>
        </body>
</html>

