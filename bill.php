<?php


if (isset($_POST["name"]) && isset($_POST["phonenumber"])) {

    if (strlen($_POST["name"]) <= 3) {

        header("Location: login.php?message=" . urlencode(" username is too short  *"));
    } elseif (strlen($_POST["phonenumber"]) != 11) {
        header("Location: login.php?messagenumber=" . urlencode(" this is not valid number *"));
        exit;
    }
}
?>


<?php


$dns = "mysql:host=localhost;dbname=test";
$username = "root";
$pass = '';
try {
    $mysql = new PDO($dns, $username, $pass);
    $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $st = $mysql->prepare("SELECT * from pizza   ");
    $st->execute();
    $st->setFetchMode(PDO::FETCH_ASSOC);

    while ($bill = $st->fetch()) {


        $id[] = $bill['id'];
        $name[] = $bill['pizza_name'];
        $size[] = $bill['size'];
        $price[] = $bill['price'];
        $sum[] = $bill['sum'];
        $amount[] = $bill['amount'];
    }
    $maxi = max($id);
} catch (Exception $e) {

    echo "unable to connect" . $e->getMessage();
}
$mysql = null;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bill</title>
    <link rel="stylesheet" href="bill.css">
</head>

<body>
    <table border="3" style="background-color: rgb(240, 187, 118);">
        <thead>
        <tbody>
            <tr>
                <th> order </th>
                <th>size</th>
                <th>price</th>
                <th> amount </th>
                <th> sum </th>
            </tr>
            <?php for ($i = 0; $i < $maxi; $i++) {
            ?>

                <tr>



                    <td> <?php

                            echo  $name[$i];

                            ?></td>
                    <td> <?php

                            echo  $size[$i];

                            ?></td>
                    <td> <?php

                            echo  $price[$i];
                            ?></td>
                    <td> <?php

                            echo  $amount[$i];

                            ?>
                    </td>
                    <td> <?php

                            echo  $sum[$i];

                            ?></td>


                </tr>
            <?php
            }
            ?>
        <tfoot>
            <td colspan="4">total + 10% service</td>
            <td><?php echo array_sum($sum) + (array_sum($sum) / 10); ?> </td>

        </tfoot>
        </tbody>
        </thead>
    </table>

    <form action="pay.html" method="post">







        <input type="submit" name="pay" value="Pay">
    </form>


    <?php
    $dsn = "mysql:host=localhost;dbname=test";
    $username = "root";
    $pass = '';

    try {
        $mysql = new PDO($dsn, $username, $pass);
        $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && strlen($_POST["name"]) >= 3 && strlen($_POST["phonenumber"]) == 11) {
            $username = $_POST['name'];
            $number = $_POST['phonenumber'];
            $gmail = filter_var($_POST["gmail"], FILTER_SANITIZE_EMAIL);
            $date = $_POST['date'];
            $time = $_POST['time'];
            $address = $_POST['address'];

            $info = "INSERT INTO userinfo (username, phonenumber, gmail, datee, timee, address) 
                 VALUES (:username, :number, :gmail, :date, :time, :address)";
            $stmt = $mysql->prepare($info);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':number', $number);
            $stmt->bindParam(':gmail', $gmail);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':time', $time);
            $stmt->bindParam(':address', $address);
            $stmt->execute();
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    $mysql = null;
    ?>
    <form action="login.php">
        <input type="submit" name="back1" value="back 1 step">
    </form>
    <form action="pizza.php">
        <input type="submit" name="back2" value="back 2 step">
    </form>


</body>

</html>