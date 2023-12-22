<?php

include 'database.php';



if(isset($_POST['submit'])){

    $nama_tugas = $_POST['nama_tugas'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_tenggat = $_POST['tanggal_tenggat'];

    $sql="insert into tugas(nama_tugas, deskripsi, tanggal_tenggat) values ('$nama_tugas', '$deskripsi', '$tanggal_tenggat')";

    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: index.php');
    }else{
        die(mysqli_error($conn));
    }

}

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>

    <!-- Modal -->
    <div class="modal fade" id="AddTask" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AddTaskLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="AddTaskLabel">Tambahkan Tugas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form method="post">

                    <div class="mb-3">
                        <label class="form-label">Nama Tugas</label>
                        <input type="text" class="form-control" name="nama_tugas" id="nama_tugas">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Tenggat</label>
                        <input type="date" class="form-control" name="tanggal_tenggat" id="tanggal_tenggat">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                    </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>

