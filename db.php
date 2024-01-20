
<h1>連線資料庫</h1>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=ticket";
$pdo=new PDO($dsn,'root','');

if(!empty($_POST)){
    $sql="insert into `records` (`firstname`,`lastname`,`ordertime`,`num`,`price`)
                          values('{$_POST['firstname']}',
                                 '{$_POST['lastname']}',
                                 '{$_POST['ordertime']}',
                                 '{$_POST['num']}',
                                 '{$_POST['price']}')";
    $pdo->exec($sql);
}
?>

<h1>新增資料</h1>
<form action="?" method="post" >
    <div>
        <label for="firstname">姓:</label>
        <input type="text" name="firstname" id="">
    </div>
    <div>
        <label for="lastname">名:</label>
        <input type="text" name="lastname" id="">
    </div>
    <div>
        <label for="ordertime">訂票時間:</label>
        <input type="text" name="ordertime" id="">
    </div>
    <div>
        <label for="num">張數:</label>
        <input type="text" name="num" id="">
    </div>
    <div>
        <label for="price">總價:</label>
        <input type="text" name="price" id="">
    </div>
        <input type="submit" value="確認送出">
        <input type="reset" value="清空重置 ">
    <div>

    </div>

</form>
<style>
    table{
        text-align: center;
        border-collapse:collapse;
    }
    td{
        padding:5px 10px;
        border:1px solid black;
    }
</style>
<h1>資料清單(select)</h1>
<?php
$sql="select * from `records` ";

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<!--SELECT * FROM `records`-->
<!-- table>tr*2>td*5 -->
<table>
    <tr>
        <td>姓</td>
        <td>名</td>
        <td>時間</td>
        <td>張數</td>
        <td>總價</td>

    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['firstname'];?></td>
        <td><?=$row['lastname'];?></td>
        <td><?=$row['ordertime'];?></td>
        <td><?=$row['num'];?></td>
        <td><?=$row['price'];?></td>

        
    </tr>
    
    <?php
    }
    
    ?>
</table>