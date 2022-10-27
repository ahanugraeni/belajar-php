<?php
$nama ="Nanda";

//BELAJAR PERULANGAN

/*
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>";
echo $nama; 
echo "<br/>"; 
*/

//PERULANGAN FOR
/* $no=10;
for($i=0; $i<$no; $i++){
$n =$i+1;
echo $n. " ".$nama."<br/>";
} 
*/


//PERULANGAN WHILE
/* $no=10;
$i=0;

while ($i<$no){
    $n =$i+1;
    echo $n. " ".$nama."<br/>";
    $i++;
}
*/

//PERULANGAN DO WHILE
/*
$no=10;
$i=0;

do{
    $n=$i+1;
    echo $n. " ".$nama."<br/>";
    $i++;
} while ($i<$no)
*/


//MENGGUNAKAN ARRAY

//$buah =array('Semangka', 'Melon', 'Mangga', 'Pepaya', 'Pisang', 'Salak', 'Apel', 'Srikaya');
//echo $buah[2];

/*
$i=0;
while ($i<count($buah)) {
    echo $buah [$i]. "<br>";
    $i++;
}
*/


/*
for ($i=0; $i<count($buah); $i++){
    echo $buah[$i]. "<br/>" ;
}
*/

//PERULANGAN FOREACH
/*foreach ($buah as $data){
 echo $data. "<br/>";
}*/


// BELAJAR PERCABANGAN

//PERCABANGAN IF 
/*
if($nama == "Karin"){
    echo "halo nama saya ".$nama ;
}else if ($nama == "Farah"){
    echo $nama." sedang mengikuti MSIB SEAL" ;
}else{
    echo $nama. " sedang mengikuti kegiatan apa?";
}
*/

//PERCABANGAN SWITCH
/*
switch($nama) {
    case "Eca";
    $pesan = $nama." sedang mengikuti organisasi seni";
    break;
    case "Nanda";
    $pesan=$nama." mengikuti organisasi politik";
    break;
    default;
    $pesan = $nama." mengikuti organisasi apa?";
}
echo $pesan;
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Perulangan dan Percabangan</title>
</head>
<body>
<body>
    <h1>Input Nama yang Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Masukkan nama yang diulang</label>
        <input type="text" name="nama"> <br>
        <label>Masukkan jumlah pengulangan</label>
        <input type="text" name="jumlah"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Eca":
                    $pesan = $_POST['nama']." ingin kuliah jurusan Administrasi Publik";
                break;
                case "Nanda":
                    $pesan = $_POST['nama']." ingin kuliah jurusan Akuntansi";
                break;
                default:
                    $pesan = $_POST['nama']." ingin kuliah jurusan apa?";
            
            }

            for ($i=0;$i<$_POST['jumlah'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>
