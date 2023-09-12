<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza everywhere </title>
    <link rel="stylesheet" href="pizza.css">
</head>

<body>

    <div class="title">

        <h1 class="texttitle"> Pizza everywhere</h1>

    </div>
    <div class="warning">
        <?php
        if (isset($_GET['message'])) {
            echo '<h3>' . $_GET['message'] . '</h3>';
        }
        ?>

    </div>



    <div class="checkinranch_vegetarian">
        <img src="Images\checkin ranch.png" alt="">
        <div class="font1">
            <p> checkin ranch</p>

        </div>

        <img src="Images\vegetarian1.png" alt="">
        <div class="font2">
            <p> Vegetarian</p>

        </div>
    </div>
    <div class="checkin_BBQ_Pepperoni">
        <img src="Images\checkin BBQ.png" alt="">
        <div class="font3">
            <p>Checkin BBQ</p>
        </div>

        <img src="Images\Peproni1.png" alt="">
        <div class="font4">
            <p>Pepperoni</p>
        </div>



    </div>


    <div class="margherita_supersupreme">
        <img src="Images\margherita1.png" alt="">


        <div class="font5">
            <p>margherita</p>
        </div>

        <img src="Images\supersupreme.png" alt="">
        <div class="font6">
            <p>super supreme</p>
        </div>

    </div>
    <div class="meetlover_BBQcheckinranch">
        <img src="Images\meetlover1.png" alt="">
        <div class="font7">

            <p>meet lover</p>
        </div>

        <img src="Images\BBQ checkin1 ranch.png" alt="">
        <div class="font8">
            <p> BBQ checkin ranch</p>
        </div>
    </div>

    <div class="mixcheese_seafood">
        <img src="Images\mix cheese.png" alt="">

        <div class="font9">
            <p> mix cheese</p>
        </div>



        <img src="Images\sea food.png" alt="">
        <div class="font10">
            <p>sea food</p>
        </div>

    </div>
    <div class="vegeteriansupreme_spicycheckin">
        <img src="Images\vegeteriansupreme.png" alt="">
        <div class="font11">
            <p>vegeterian supreme</p>
        </div>


        <img src="Images\spicycheckin.png" alt="">
        <div class="font12">
            <p>spicy checkin ranch</p>
        </div>





    </div>











    <form action="login.php" method="post">
        <input type="number" name="number_checkinranch" id="" min="0" max="10" value="0">
        <select name="size_checkinranch" id="">
            <option value="large">large 130 L.E</option>
            <option value="medium">medium 100 L.E</option>
            <option value="small">small 80 L.E</option>
        </select>
        <input type="number" name="number_vegetarian" id="" min="0" max="10" value="0">

        <select name="size_vegetarian" id="">
            <option value="large">large 120 L.E</option>
            <option value="medium">medium 90 L.E</option>
            <option value="small">small 75 L.E</option>
        </select>


        <input type="number" name="number_checkinBBQ" min="0" max="10" value="0">


        <select name="size_checkinBBQ" id="">
            <option value="large">large 130 L.E</option>
            <option value="medium">medium 100 L.E</option>
            <option value="small">small 80 L.E</option>
        </select>

        <input type="number" name="number_Pepperoni" min="0" max="10" value="0">


        <select name="size_Pepperoni" id="">
            <option value="large">large 125 L.E</option>
            <option value="medium">medium 105 L.E</option>
            <option value="small">small 90 L.E</option>
        </select>

        <input type="number" name="number_margherita" min="0" max="10" value="0">


        <select name="size_margherita" id="">
            <option value="large">large 110 L.E</option>
            <option value="medium">medium 90 L.E</option>
            <option value="small">small 70 L.E</option>
        </select>
        <input type="number" name="number_supersupreme" min="0" max="10" value="0">


        <select name="size_supersupreme" id="">
            <option value="large">large 140 L.E</option>
            <option value="medium">medium 120 L.E</option>
            <option value="small">small 100 L.E</option>
        </select>

        <input type="number" name="number_meetlover" min="0" max="10" value="0">


        <select name="size_meetlover" id="">
            <option value="large">large 150 L.E</option>
            <option value="medium">medium 130 L.E</option>
            <option value="small">small 110 L.E</option>
        </select>

        <input type="number" name="number_BBQcheckinranch" min="0" max="10" value="0">



        <select name="size_BBQcheckinranch" id="">
            <option value="large">large 150 L.E</option>
            <option value="medium">medium 125 L.E</option>
            <option value="small">small 105 L.E</option>
        </select>

        <input type="number" name="number_mixcheese" min="0" max="10" value="0">


        <select name="size_mixcheese" id="">
            <option value="large">large 110 L.E</option>
            <option value="medium">medium 80 L.E</option>
            <option value="small">small 70 L.E</option>
        </select>



        <input type="number" name="number_seafood" min="0" max="10" value="0">

        <select name="size_seafood" id="">
            <option value="large">large 160 L.E</option>
            <option value="medium">medium 135 L.E</option>
            <option value="small">small 110 L.E</option>
        </select>

        <input type="number" name="number_vegeteriansupreme" min="0" max="10" value="0">

        <select name="size_vegeteriansupreme" id="">
            <option value="large">large 140 L.E</option>
            <option value="medium">medium 110 L.E</option>
            <option value="small">small 100 L.E</option>
        </select>


        <input type="number" name="number_spicycheckin" min="0" max="10" value="0">



        <select name="size_spicycheckin" id="">
            <option value="large">large 150 L.E</option>
            <option value="medium">medium 125 L.E</option>
            <option value="small">small 100 L.E</option>
        </select>








        <input type="submit" name="order" value="continue" id="oder">



    </form>



</body>

</html>