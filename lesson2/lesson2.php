<?php
 $a = !empty($_GET['a'])?$_GET['a']:2;
 $b = !empty($_GET['b'])?$_GET['b']:1;
 $task2Var = !empty($_GET['task2'])?(int)$_GET['task2']:0;
 $task6 = !empty($_GET['task6'])?(int)$_GET['task6']:2;
 $oper = !empty($_GET['oper'])?$_GET['oper']:'+';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Урок2</title>
</head>
<body>
<form action="">

<?php
    if( $a>=0 && $b>=0 ){
        $first= "$a - $b = ".($a - $b)."<br>";
    }elseif( $a<=0 && $b<=0 ){
        $first= "($a) * ($b) = ".((int)$a * (int)$b)."<br>";
    }else{
        $first= "$a + $b = " . ($a + $b) . "<br>";
    }?>
    <input type="text" name="a" placeholder="значение а"><br>
    <input type="text" name="b" placeholder="значение b"><br>
    <?= $first?>
    <hr>

<!-- второе -->


<?php

function ff($a){
    $line='';
    if($a <= 0 || $a > 15) {
        $line="!!!Введите число от 0 до 15!!!";
        return $line;
    }
	switch ($a){

        case 1:{
            $line.='1 ';
        }
        case 2:{
            $line.='2 ';
        }
        case 3:{
            $line.='3 ';
        }
        case 4:{
            $line.='4 ';
        }
        case 5:{
            $line.='5 ';
        }
        case 6:{
            $line.='6 ';
        }
        case 7:{
            $line.='7 ';
        }
        case 8:{
            $line.='8 ';
        }
        case 9:{
            $line.='9 ';
        }
        case 10:{
            $line.='10 ';
        }
        case 11:{
            $line.='11 ';
        }
        case 12:{
            $line.='12 ';
        }
        case 13:{
            $line.='13 ';
        }
        case 14:{
            $line.='14 ';
        }
        case 15:{
            $line.='15';
        }

    }
	return $line;
}
?>

<?= ff($task2Var) ?>
<br><input type="text" name="task2" placeholder="число от 0 до 15" >
<hr>
<?php
//--3-------------

function sum($a,$b){
	return $a+$b;
}

function mult($a,$b){
	return $a*$b;
}

function sub($a,$b){
	return $a-$b;
}

function dif($a,$b){
	return $a/$b;
}
//----4--------

function mathOperation ($a,$b,$oper){

switch ($oper) {
	case '+':
		return sum($a,$b);
		break;
	case '*':
        return mult($a,$b);
		break;
	case '/':
        return dif($a,$b);
		break;
			
	case '-':
        return sub($a,$b);
		break;
	}
}



?>
<?php echo "$a $oper $b =".mathOperation($a,$b,$oper)?>
    <br>
<select name="oper">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
<hr>
    <input type="text" name="task6" placeholder='степень для числа "a" ' >
<?php
function power($val, $pow){
	if ($pow == 1){
		echo "<br>".$val."<br>";
		return ;
	}
	$val +=$val;
	power($val, $pow-1);
}
power($a,$task6);

//--7-------
?>
<input type="submit">
</form>
<hr>
<?php

function whatTime(){
$hour = date("g");
$hourEnd ='';
$min = date("i");
$minEnd ='';

 if ($hour == 1){
 	$hourEnd = " час ";
 }else if (($hour == 2)||($hour == 3)||($hour == 4)){
 	$hourEnd = " часа ";
 } else {
$hourEnd = " часов ";
}

if(($min == 01)||($min == 21)||($min == 31)||($min == 41)||($min == 51) ){
	$minEnd = " минута";
} elseif (($min == 02)||($min == 03)||($min == 04)||($min == 22)||($min == 23)||($min == 24) ){
	$minEnd = " минуты";
} else {

	$minEnd = " минут";
}
return $hour.$hourEnd.$min.$minEnd;
}

echo "Сейчас - ".whatTime();
?>

</body>
</html>