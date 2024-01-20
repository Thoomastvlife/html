<?php

$name="e04";
$age=1;

echo "我家的" . $name;
echo "<br>";
echo $age + 5;

?>
<h1>判斷式</h1>
<?php
$score=50;
echo "你的成績為".$score."<br>";
if($score>=60){
    echo "你及格ㄌ!";
}else {
    echo "你不及格";
}
?>
<h1>迴圈(loop)</h1>
<?php
for($i=1;$i<11;$i=$i+1){
    echo "我是第".($i*1)."號的學生";
    echo "<br>";
}

?>
<h1>switch...case</h1>
<?php
$level="C";
echo "你的等級是".$level;
echo "<br>";
switch($level){
    case "A":
        echo "你很棒";
    break;
    case "B";
        echo "表現不錯，繼續加油";
    break;
    case "C";
        echo "需要更努力";
    break;
}
?>