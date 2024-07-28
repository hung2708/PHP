<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a=$_GET['a'] ?? 0;
    $b=$_GET['b'] ?? 0;
    $operation=$_GET['operation'] ?? '';
    $result=0;
    if($operation==='+'){
        $result=$a+$b;
    }else if($operation==='-'){
        $result=$a-$b;
    }else if($operation==='*'){
        $result=$a*$b;
    }else{
        $result= $b!=0 ? $a/$b:'error';
    }
?>
<form action="" method="get">
    <input type="text" name="a" id="" value="<?=$a?>"><br>
    <input type="text" name="b" id="" value="<?=$b?>"><br>
    <select name="operation" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="Tinh">
    <input type="text" name="" id="" value="<?=$result?>">
</form>
</body>

</html>