<?php

include "database.php";

include "add_task.php";


?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <h1 class="text-center mt-4">Task Manager</h1>

    <!-- Button trigger modal -->
    <div class="text-end m-5">
    <a href="add_task.php" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#AddTask">Tambah Tugas Baru</a>
    </div>



    <div class="container">
        <div class="row">
            <?php
                $sql = "SELECT * FROM tugas";
                $result = mysqli_query($conn, $sql);
                $count = 0;

                while ($row = mysqli_fetch_array($result)) {
                    if ($count % 4 == 0) {
                        // Start a new row after every 4 cards
                        echo '</div><div class="row">';
                    }
            ?>
                    <div class="col-md-3">
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body" >
                                <!-- Adjust the height value as needed -->
                                <h5 class="card-title"><?php echo $row['nama_tugas'] ?></h5>
                                <p class="card-text"><?php echo $row['deskripsi'] ?></p>
                                <p class="card-text"><?php echo $row['tanggal_tenggat'] ?></p>
                                <a class="btn btn-warning text-end" href="edit_task.php?id=<?php echo $row['id_tugas'] ?>"  >Edit</a>
                                <a class="btn btn-danger"  href="delete_task.php?id=<?php echo $row['id_tugas'] ?>">Hapus</a>
                            </div>
                        </div>
                    </div>
            <?php
            $count++;
            }
            ?>
         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>