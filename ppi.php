<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   
    
   .cover {
    width: 75px;
    border: 1px solid black;
    margin-left: right;
    margin-right: auto;
    padding: 5px;
    color: red;
    float:left;
    

}
.cover1 {
    width: 75px;
    border: 1px solid black ;
    margin-left: auto;
    margin-right: auto;
    padding: 5px;
    color: blue;
    float:left;
    
}

 
</style>
</head>
<body>

    <?php
   
    echo"<div class='cover'>";
    echo"<table>";
    $num=1;
    $row=1;
    while($row<=5){
    echo"<tr>";
    $column=1;
    while($column<=5){
        echo"<td>";
  
    if($num>=1 && $num<=5){
    echo"*";
    }elseif($num>=12 && $num<=15){
        echo"*";
    }elseif($num==6 || $num==10 || $num==11 || $num==16 || $num==21){
        echo"*";
    }else{
        echo"";
    }echo"</td>";
$column++;
$num++;
    }
    echo"</tr>";
    $row++;
}
echo"</table>";
echo"</div>";

echo"<div class='cover'>";
echo"<table>";
    $num=1;
    $row=1;
    while($row<=5){
    echo"<tr>";
    $column=1;
    while($column<=5){
        echo"<td>";
  
    if($num>=1 && $num<=5){
    echo"*";
    }elseif($num>=12 && $num<=15){
        echo"*";
    }elseif($num==6 || $num==10 || $num==11 || $num==16 || $num==21){
        echo"*";
    }else{
        echo"";
    }echo"</td>";
$column++;
$num++;
    }
    echo"</tr>";
    $row++;
}
echo"</table>";
echo"</div>";


echo"<div class='cover1'>";
echo"<table>";
    $num=1;
    $row=1;
    while($row<=5){
    echo"<tr>";
    $column=1;
    while($column<=5){
        echo"<td>";
  
    if($num>=1 && $num<=5){
    echo"*";
    }elseif($num>=21 && $num<=25){
        echo"*";
    }elseif($num==8 || $num==13 || $num==18){
        echo"*";
    }else{
        echo"";
    }echo"</td>";
$column++;
$num++;
    }
    echo"</tr>";
    $row++;
}
echo"</table>";
echo"</div>";
    ?>
</body>
</html>