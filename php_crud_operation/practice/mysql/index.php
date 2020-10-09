<?php

include 'connection.php';

$siswa=$db->query("select * from siswa");

$data_siswa=$siswa->fetchAll();
// var_dump($data_siswa);

foreach($data_siswa as $value){
    // echo $value['nama']." ".$value['job'].PHP_EOL;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compotible">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
<table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">Nama</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($data_siswa as $value) : ?>
    <tr>
      <td><?php echo $value['nama']; ?></td>
      <td><?php echo $value['job']; ?></td>
      <td><a href="delete.php?id_siswa=<?php echo $value['id_siswa']; ?>">Hapus</a> | <a href="edit.php?id_siswa=<?php echo $value['id_siswa']; ?>">edit</a></td>
    </tr>
    <?php endforeach ; ?>
  </tbody>
</table>

<div class="container">
    <div class="row">
        <div class="col">
            
            <form action="input.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Your Job</label>
                    <input type="text" name="job" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>