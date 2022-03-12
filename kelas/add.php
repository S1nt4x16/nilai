<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kelas</title>
</head>
<body>
    <h1>Tambah Data Kelas</h1>
    <form action="save.php" method="post">
        <div>
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" required autofocus>
        </div>
        <div>
            <label for="kelas">Kapasitas</label>
            <input type="number" name="kapasitas">
        </div>
        <div>
            <label for="kelas">Terisi</label>
            <input type="number" name="terisi">
        </div>
        <div>
             <input type="reset">
             <button type="submit" name="simpan">Submit</button>
        </div>
    </form> 
</body>
</html>
<!-- CREATED BY VALENTINUS MORENO -->