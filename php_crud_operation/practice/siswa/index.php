<?php

include 'connection.php';

$siswa=$db->query("select * from siswa");

$data_siswa=$siswa->fetchAll();
// var_dump($data_siswa);

foreach($data_siswa as $value){
    // echo $value['nama']." ".$value['job'].PHP_EOL;
}

if (isset($_POST['filter'])){
    $search=$_POST['filter'];

    $filter=$db->prepare("select * from siswa where nama=? or job=?");

    $filter->bindValue(1,$search,PDO::PARAM_STR);
    $filter->bindValue(2,$search,PDO::PARAM_STR);
    $filter->execute();
    $data=$filter->fetchAll();
    $row=$filter->rowCount();
    // var_dump($row);
}else{
    $data=$db->query("select * from siswa");
    $tampil_data=$data->fetchAll();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>siswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Daftar Siswa</h1>

                <!-- alert message -->
                <?php if (isset($row)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p class="lead"><?php echo $row; ?> data ditemukan !</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif ; ?>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data_siswa as $value) : ?>
                        <tr>
                            <td><?php echo $value['nama']; ?></td>
                            <td><?php echo $value['job']; ?></td>
                            <td><?php echo $value['nilai']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Cari Data siswa</h2>

                <form action="index.php" method="post">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="filter" id="filter" placeholder="Username">
                        </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-secondary mb-2">Cari</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>