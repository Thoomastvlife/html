<?php

$name="e04";
$age=20000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;

echo "我家的" . $name;
echo "<br>";
echo $age + 3;

?>
<h1>判斷式</h1>
<?php
$score=50;
echo "你的成績為".$score."<br>";
if($score>=60){
    echo "及格!";
}else {
    echo "不及格";
}
?>
<h1>迴圈(loop)</h1>
<?php
for($i=1;$i<11;$i=$i+1){
    echo "第".($i*1000000000000)."號";
    echo "<br>";
}

$level='c';
echo'你的等級是';
?>


<h2>foreach</h2>

<?php
$array=[3,14,15,9,26, 53,58,97];
foreach($array as $key => $item) {
echo "the ". $key." value in array is " . $item; echo "‹br>";
}

$level = "A";
echo "your level is ". $level; 
echo "‹br>";
switch($level){
    case "A":
    echo "good job!";
    break;
    case "B":
    echo "keep working!" ;
    break;
    case "C":
    echo "work harder!";
    break;
}
?>












?>