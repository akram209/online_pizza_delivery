<?php $dns = "mysql:host=localhost;dbname=test";
$username = "root";
$pass = '';
if (isset($_POST['pay'])) {
    try {
        $mysql2 = new PDO($dns, $username, $pass);
        $mysql2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




        $st = $mysql2->prepare("insert into userinfo(username,phonenumber,gmail,datee,timee,address)
values( :username,:phonenumber, :gmail, :datee, :timee,:address)");
        $st->bindParam(":username", $name);
        $st->bindParam(":phonenumber", $number);
        $st->bindParam(":gmail", $gmail);
        $st->bindParam(":datee", $date);
        $st->bindParam(":timee", $time);
        $st->bindParam(":address", $address);
        $st->execute();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    $mysql2 = null;
}
