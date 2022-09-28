<?php
$filename = "cadastrado.txt";
if(!file_exists("cadastrado.txt")){
    $handle = fopen("cadastrado.txt", "w");
} else {
    $handle = fopen("cadastrado.txt", "a");
}

fwrite($handle, ($_POST['nomeproduto']) ."\n");
fwrite($handle, ($_POST['codigo']) ."\n");
fwrite($handle, ($_POST['quantidade']) ."\n");
fflush($handle);
fclose($handle);

$handle = fopen("cadastrado.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
}
fclose($handle);

header("location: cadastrar.php");
?>