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
            width: 45%
            
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
                <h1>Tambah Data Mahasiswa</h1>
            </div>          
                <form action="add.php" method="post" name="form1">
                <table cellpadding="10">
                    <tr>
                        <td>NPM : </td>
                        <td><input class="form-control" type="text" name="NPM"></td>
                    </tr>
                    <tr> 
                        <td>Nama</td>
                        <td><input class="form-control" type="text" name="Nama"></td>
                    </tr>
                    <tr> 
                        <td>Email</td>
                        <td><input class="form-control" type="text" name="Email"></td>
                    </tr>                    
                    </table>
                    <hr>
                    <div class="btn-group p-2" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="submit" name="Submit" value="Add" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1"><u>Submit</u></label>

                    <input  type="button" value="Batal" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2"><a href="index.php">Home</a></label>
                    </div>
                </form>
        </div>
    </div>
    
	<?php
	if(isset($_POST['Submit'])) {
		$NPM = $_POST['NPM'];
		$Nama = $_POST['Nama'];
		$Email = $_POST['Email'];
		
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(NPM,Nama,Email) VALUES('$NPM','$Nama','$Email')");
		
		// Show message when user added
        echo "<script> alert('User added successfully. <a href='index.php'>View Users</a>');window.location='index.php'</script>";
		//echo "<div class="mx-auto"> User added successfully. <a href='index.php'>View Users</a></div>";
        
	}
	?>
</body>
</html>