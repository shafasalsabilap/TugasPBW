<?php

include_once("config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY NPM DESC");
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background-color:#F9EBEA;
        }
        .mx-auto{ 
            width: 80%
        }
        .card{ 
            margin-top: 10px; 
        }
        
    </style>
  <title>Shafa Salsabila 4519210070</title>
</head>
<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                <h1>DATA MAHASISWA</h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <?php  
                    while($user_data = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$user_data['NPM']."</td>";
                    echo "<td>".$user_data['Nama']."</td>";
                    echo "<td>".$user_data['Email']."</td>";    
                    echo "<td><a href='delete.php?NPM=$user_data[NPM]'>Hapus</a></td></tr>";        
                    }
                    ?>
                </table>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1"><a href="add.php">Tambah Data</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>