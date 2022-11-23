<?php
// buat koneksi dengan mySQL
$con = mysqli_connect("localhost","root","","fakultas");

//cek koneksi database
if(mysqli_connect_errno()){
    echo "koneksi gagal".mysqli_connect_error();
}else{
    echo "koneksi berhasil";
}

//membaca data dari tabel mySQL
$query = "SELECT * FROM mahasiswa";

//menampilkan data, dengan menjalankan sql query
$result = mysqli_query($con,$query);
$mahasiswa=[];
if ($result){
    // tampilkan data satu per satu
    while($row = mysqli_fetch_assoc($result)){
        //echo "<br>".$row["nama"]." alamat : ".$row["alamat"];
        $mahasiswa[]=$row;
    }
    mysqli_free_result($result);
}

//close koneksi mySQL 
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1> Data Mahasiswa </h1>
    <table border="1" style="width:100%;">
        <tr>
            <th>Id Jurusan</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value["id_jurusan"]; ?></td>
            <td><?php echo $value["nim"]; ?></td>
            <td><?php echo $value["nama"]; ?></td>
            <td><?php echo $value["jenis_kelamin"]; ?></td>
            <td><?php echo $value["tempat_lahir"]; ?></td>
            <td><?php echo $value["tanggal_lahir"]; ?></td>
            <td><?php echo $value["alamat"]; ?></td>
            
        </tr>
        
        <?php endforeach; ?>
    </table>
</body>
</html>