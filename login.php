<?php if (
    $_SERVER['REQUEST_METHOD'] == 'POST'
    && $_POST["number_checkinranch"] == 0

    && $_POST["number_vegetarian"] == 0

    && $_POST["number_checkinBBQ"] == 0

    && $_POST["number_Pepperoni"] == 0

    && $_POST["number_margherita"] == 0

    && $_POST["number_supersupreme"] == 0

    && $_POST["number_meetlover"] == 0

    && $_POST["number_BBQcheckinranch"] == 0

    && $_POST["number_seafood"] == 0

    && $_POST["number_mixcheese"] == 0

    && $_POST["number_vegeteriansupreme"] == 0

    && $_POST["number_spicycheckin"] == 0

) {
    header("Location: pizza.php?message=" . urlencode("please set your order *"));
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="title">

        <h1 class="texttitle">Pizza everywhere</h1>

    </div>


    <form action="bill.php" method="post">
        <div class="name">
            <label for="name">Username</label>

            <input type="text" name="name" placeholder="type your name " id="name" required>
            <?php
            if (isset($_GET['message'])) {
                echo $_GET['message'];
            }


            ?>

        </div>

        <div class="number">
            <label for="number">phone number</label>
            <input type="text" name="phonenumber" placeholder="type your phone number" id="number" required>
            <?php
            if (isset($_GET['messagenumber'])) {
                echo $_GET['messagenumber'];
            }
            ?>
        </div>


        <div class="gmail"><label for="gmail">Gmail</label>
            <input type="text" name="gmail" placeholder="type your Gmail" id="gmail">


        </div>


        <div class="date">
            <label for="datee">Date</label>
            <input list="date" name="date" id="datee" placeholder="Date" required>
            <datalist id="date">
                <option value="today"></option>
                <option value="tomorrow"></option>
                <option value="after tomorrow"></option>
            </datalist>
        </div>

        <div class="time">
            <label for="time">Time</label>
            <input type="time" name="time" id="time" required>


        </div>
        <div class="address">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Type your address in details your city and the area in english" required>

        </div>
        <input type="submit" name="send" value="send">


    </form>


    <?php

    $dns = "mysql:host=localhost;dbname=test";
    $username = "root";
    $pass = '';
    if (isset($_POST['order'])) {

        try {
            $mysql = new PDO($dns, $username, $pass);
            $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $updating = "delete from pizza where amount!=0";
            $mysql->exec($updating);
            $starting = "alter table pizza auto_increment =1";
            $mysql->exec($starting);




            $st = $mysql->prepare("insert into pizza(pizza_name,size,price,amount,sum)
values( :pizza_name,:size, :price, :amount, :sum)");
            $st->bindParam(":pizza_name", $pizza_name);
            $st->bindParam(":size", $size);
            $st->bindParam(":price", $price);
            $st->bindParam(":amount", $amount);
            $st->bindParam(":sum", $sum);

            if ($_POST["number_checkinranch"] != 0) {
                $pizza_name = "checkin ranch";
                if ($_POST["size_checkinranch"] == "large") {
                    $size = "large";
                    $price = 130;
                } elseif ($_POST["size_checkinranch"] == "medium") {
                    $size = "medium";
                    $price = 100;
                } elseif ($_POST["size_checkinranch"] == "small") {
                    $size = "small";
                    $price = 80;
                }
                $amount = $_POST["number_checkinranch"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_vegetarian"] != 0) {
                $pizza_name = "vegetarian";
                if ($_POST["size_vegetarian"] == "large") {
                    $size = "large";
                    $price = 125;
                } elseif ($_POST["size_vegetarian"] == "medium") {
                    $size = "medium";
                    $price = 105;
                } elseif ($_POST["size_vegetarian"] == "small") {
                    $size = "small";
                    $price = 90;
                }
                $amount = $_POST["number_vegetarian"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_checkinBBQ"] != 0) {
                $pizza_name = "checkin BBQ";
                if ($_POST["size_checkinBBQ"] == "large") {
                    $size = "large";
                    $price = 125;
                } elseif ($_POST["size_checkinBBQ"] == "medium") {
                    $size = "meduim";
                    $price = 105;
                } elseif ($_POST["size_checkinBBQ"] == "small") {
                    $size = "small";
                    $price = 90;
                }
                $amount = $_POST["number_checkinBBQ"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_Pepperoni"] != 0) {
                $pizza_name = "Pepperoni";
                if ($_POST["size_Pepperoni"] == "large") {
                    $size = "large";
                    $price = 125;
                } elseif ($_POST["size_Pepperoni"] == "medium") {
                    $size = "medium";
                    $price = 105;
                } elseif ($_POST["size_Pepperoni"] == "small") {
                    $size = "small";
                    $price = 90;
                }
                $amount = $_POST["number_Pepperoni"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_margherita"] != 0) {
                $pizza_name = "margherita";
                if ($_POST["size_margherita"] == "large") {
                    $size = "large";
                    $price = 110;
                } elseif ($_POST["size_margherita"] == "medium") {
                    $size = "medium";
                    $price = 90;
                } elseif ($_POST["size_margherita"] == "small") {
                    $size = "small";
                    $price = 70;
                }
                $amount = $_POST["number_margherita"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_supersupreme"] != 0) {
                $pizza_name = "supersupreme";
                if ($_POST["size_supersupreme"] == "large") {
                    $size = "large";
                    $price = 140;
                } elseif ($_POST["size_supersupreme"] == "medium") {
                    $size = "medium";
                    $price = 120;
                } elseif ($_POST["size_supersupreme"] == "small") {
                    $size = "small";
                    $price = 100;
                }
                $amount = $_POST["number_supersupreme"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_meetlover"] != 0) {
                $pizza_name = "meetlover";
                if ($_POST["size_meetlover"] == "large") {
                    $size = "large";
                    $price = 150;
                } elseif ($_POST["size_meetlover"] == "medium") {
                    $size = "medium";
                    $price = 130;
                } elseif ($_POST["size_meetlover"] == "small") {
                    $size = "small";
                    $price = 110;
                }
                $amount = $_POST["number_meetlover"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_BBQcheckinranch"] != 0) {
                $pizza_name = "BBQcheckinranch";
                if ($_POST["size_BBQcheckinranch"] == "large") {
                    $size = "large";
                    $price = 150;
                } elseif ($_POST["size_BBQcheckinranch"] == "medium") {
                    $size = "medium";
                    $price = 125;
                } elseif ($_POST["size_BBQcheckinranch"] == "small") {
                    $size = "small";
                    $price = 105;
                }
                $amount = $_POST["number_BBQcheckinranch"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_seafood"] != 0) {
                $pizza_name = "seafood";
                if ($_POST["size_seafood"] == "large") {
                    $size = "large";
                    $price = 160;
                } elseif ($_POST["size_seafood"] == "medium") {
                    $size = "medium";
                    $price = 135;
                } elseif ($_POST["size_seafood"] == "small") {
                    $size = "small";
                    $price = 110;
                }
                $amount = $_POST["number_seafood"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_mixcheese"] != 0) {
                $pizza_name = "mixcheese";
                if ($_POST["size_mixcheese"] == "large") {
                    $size = "large";
                    $price = 160;
                } elseif ($_POST["size_mixcheese"] == "medium") {
                    $size = "medium";
                    $price = 135;
                } elseif ($_POST["size_mixcheese"] == "small") {
                    $size = "small";
                    $price = 110;
                }
                $amount = $_POST["number_mixcheese"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_mixcheese"] != 0) {
                $pizza_name = "mixcheese";
                if ($_POST["size_mixcheese"] == "large") {
                    $size = "large";
                    $price = 110;
                } elseif ($_POST["size_mixcheese"] == "medium") {
                    $size = "medium";
                    $price = 80;
                } elseif ($_POST["size_mixcheese"] == "small") {
                    $size = "small";
                    $price = 70;
                }
                $amount = $_POST["number_mixcheese"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_vegeteriansupreme"] != 0) {
                $pizza_name = "vegeteriansupreme";
                if ($_POST["size_vegeteriansupreme"] == "large") {
                    $size = "large";
                    $price = 140;
                } elseif ($_POST["size_vegeteriansupreme"] == "medium") {
                    $size = "medium";
                    $price = 110;
                } elseif ($_POST["size_vegeteriansupreme"] == "small") {
                    $size = "small";
                    $price = 80;
                }
                $amount = $_POST["number_vegeteriansupreme"];
                $sum = $amount * $price;

                $st->execute();
            }
            if ($_POST["number_spicycheckin"] != 0) {
                $pizza_name = "spicycheckin";
                if ($_POST["size_spicycheckin"] == "large") {
                    $size = "large";
                    $price = 150;
                } elseif ($_POST["size_spicycheckin"] == "medium") {
                    $size = "medium";
                    $price = 125;
                } elseif ($_POST["size_spicycheckin"] == "small") {
                    $size = "small";
                    $price = 100;
                }
                $amount = $_POST["number_spicycheckin"];
                $sum = $amount * $price;

                $st->execute();
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        $mysql = null;
    }



    ?>
    <form action="pizza.php">
        <input type="submit" name="back" value="back ">
    </form>



</body>

</html>