<?php
session_start();
require_once('connect.php');
include 'db.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Таблица выплат</title>
</head>
<style>
    table {
        width: 1000px;
        margin: auto;
    }
</style>
<body>
<div class="container">
    <form class="form-signin" id="form" action="#" method="POST" >
        <h2>Запись выплаты</h2>
        <input id="a" type="text" name="OOO" class="form-control" placeholder="Название предприятия" >
        <input id="b" type="text" name="type_of_tax" class="form-control" placeholder="Тип налога" >
        <input id="c" type="text" name="tax_amount" class="form-control" placeholder="Размер выплаченного налога" >
        <button class="btn btn-lg btn-primaty btn-block" type="submit">Отправить</button>
    </form>
</div>
<table style="border: 1px solid silver;">

    <tr>
        <td style="border: 1px solid silver;">ООО</td>
        <td style="border: 1px solid silver;">Тип налога</td>
        <td style="border: 1px solid silver;">Дата оплаты</td>
        <td style="border: 1px solid silver;">Крайний срок оплаты</td>
        <td style="border: 1px solid silver;">Сумма выплаты</td>
    </tr>
<?php

    $OOO = $_POST['OOO'];
    $type = $_POST['type_of_tax'];
    $tax = $_POST['tax_amount'];
    $date1 = date("Y-m-d");
    $date2 = date("Y-m-d");

    $user_query = $pdo->prepare("INSERT INTO nalogi SET OOO = ? , type_of_tax = ? , `payment_date` = ? , deadline = ? ,  tax_amount = ?   ");
    $user_query->execute([$OOO, $type, $date1 , $date2, $tax ]);
    $user = $user_query->fetchAll();

    $res = mysqli_query($db, "SELECT * FROM `nalogi`");

    // Формируем вывод строк таблицы в цикле
    while ($row = mysqli_fetch_assoc($res))
    {
        echo '<tr>
			     <td style="border: 1px solid silver;">' . $row['OOO'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['type_of_tax'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['payment_date'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['deadline'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['tax_amount'] . '</td>
			 </tr>';
    }
?>

</table>
</body>
<script  src="scrypt.js"> </script>
</html>