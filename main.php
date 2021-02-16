<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>thong bao chi so</legend>
        nhap so can kiem tra: <br>
        <input type="number" name="index"><br>
        <button type="submit">check</button>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $index=$_POST['index'];

    function showIndex($y){
        $newArr=[];
        for ($i=0;$i<100;$i++){
            $newArr[$i]=round(rand(0,100));
        }
        if ($y<100&&$y>=0){
            echo 'value of index '.$y.' is '.$newArr[$y];
        }else{
            throw new Exception('chi so khong nam trong gioi han cua mang');
        }
    }
}

try {
    showIndex($index);
}catch (Exception $e){
    echo  $e->getMessage();
}