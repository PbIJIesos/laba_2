<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./index.php");
    echo "Вы не авторизованы";
}
require_once('connect.php');
$user_query = $pdo->prepare("SELECT * FROM secr");
$user_query->execute();
$user = $user_query->fetchAll();
foreach ($user as $item){
    echo $item['ООО'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .outer1 {
        text-align: center;
        color: green;
    }
</style>
<body>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Предприятие</th>
            <th scope="col">Владелец</th>
            <th scope="col">Уплаченный налог</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($user as $key => $item){
            echo "<tr>";
            $company = $item["OOO"];
            $owner = $item["owner"];
            $tax = $item["tax"];
            echo "
            <td>$key </td>
            <td>$company </td>
            <td>$owner </td>
            <td>$tax</td>
            ";
echo "</tr>";
}
        ?>
        </tbody>
    </table>
    <div class="outer1"><a href="112.php" class="btn btn-lg btn-primary"> Выход на главную страницу</a></div>


</body>