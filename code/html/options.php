<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>sortir ensemble</title>

    <!--必要样式-->
    <link rel="stylesheet" href="../css/jquery-labelauty.css"/>
    <link rel="stylesheet" href="../css/btn_style.css"/>
    <style type="text/css">
        ul {
            list-style-type: none;
        }

        li {
            display: inline-block;
        }

        li {
            margin: 10px 0;
        }

        input.labelauty + label {
            font: 12px "Microsoft Yahei";
        }

        .tete {
            background-color: #ffe082;
            color: black;
            font-weight: bold;
            text-align: center;
            margin-left: 150px;
            margin-right: 150px;
            size: 50px;
            margin-top: 30px;
            padding: 30px;
        }

        .par {
            font-family: arial;
            color: black;
            font-size: 20px;
        }

        .img {
            margin-left: auto;
            margin-right: auto;
            margin-top: -120px;
            margin-bottom: -90px;
            display: block;
            width: 300px;
            height: 300px;
            padding: -50px;
        }

    </style>
</head>
<body bgcolor="#F5FFFA">
<body>

<?php
$cinema = $_GET['cinema'];
if ($cinema == "oui") {
    echo "vous avez choisi le cinema";
} else {
    echo "vous avez choisi le triplet";
}
?>

<center>
    <h1 class="tete"><img class="img" src="../img/logo.png"></h1>
    <div style="margin-left: 150px;margin-right: 150px;text-align: left;">
        <h2 class="par">choisissez votre préférence:</h2>
        <hr>
        <form action="display.php" method="post">


        <ul class="dowebok1">
            <p class="par">Nombre Participants :</p>
            <li><input type="radio" name="number" data-labelauty="0-5" value="5" checked></li>
            <li><input type="radio" name="number" data-labelauty="5-10" value="10"></li>
            <li><input type="radio" name="number" data-labelauty="10-15" value="15"></li>
            <li><input type="radio" name="number" data-labelauty="15-20" value="20"></li>
            <li><input type="radio" name="number" data-labelauty="20-30" value="30"></li>
            <li><input type="radio" name="number" data-labelauty="30+" value="50"></li>
        </ul>

        <hr>
        <ul class="dowebok2">
            <p class="par">Distance maximale entre les trois lieux :</p>
            <li><input type="radio" name="distance" data-labelauty="500m" value="500" checked></li>
            <li><input type="radio" name="distance" data-labelauty="1km" value="1000"></li>
            <li><input type="radio" name="distance" data-labelauty="2km" value="2000"></li>
            <li><input type="radio" name="distance" data-labelauty="3km" value="3000"></li>
            <li><input type="radio" name="distance" data-labelauty="5km" value="5000"></li>
            <li><input type="radio" name="distance" data-labelauty="10km" value="100000"></li>
        </ul>
        <hr>
        <ul class="dowebok3">
            <p class="par">le type de cuisine pour un restaurant:</p>
            <li><input type="radio" name="type_plat" data-labelauty="italienne" value="italienne" checked></li>
            <li><input type="radio" name="type_plat" data-labelauty="japonaise" value="japonaise"></li>
            <li><input type="radio" name="type_plat" data-labelauty="allemande" value="allemande"></li>
            <li><input type="radio" name="type_plat" data-labelauty="française" value="française"></li>
            <li><input type="radio" name="type_plat" data-labelauty="chinoise" value="chinoise"></li>
            <li><input type="radio" name="type_plat" data-labelauty="indien" value="indien"></li>
            <li><input type="radio" name="type_plat" data-labelauty="coréenne" value="coréenne"></li>
            <li><input type="radio" name="type_plat" data-labelauty="vietnamienne" value="vietnamienne"></li>
            <li><input type="radio" name="type_plat" data-labelauty="espagnole" value="espagnole"></li>
            <li><input type="radio" name="type_plat" data-labelauty="fast-food" value="fast-food"></li>
            <li><input type="radio" name="type_plat" data-labelauty="mexicaine" value="mexicaine"></li>
            <li><input type="radio" name="type_plat" data-labelauty="Pizzeria" value="Pizzeria"></li>
            <li><input type="radio" name="type_plat" data-labelauty="libanaise" value="libanaise"></li>
            <li><input type="radio" name="type_plat" data-labelauty="belge" value="belge"></li>
            <li><input type="radio" name="type_plat" data-labelauty="fruits de mer" value="fruits-de-mer"></li>
            <li><input type="radio" name="type_plat" data-labelauty="barbecue" value="barbecue"></li>
        </ul>
        <hr>

        <ul class="dowebok4">
            <p class="par">le local vous préférez :</p>
            <li><input type="radio" name="city" data-labelauty="Paris" value="Paris" checked></li>
            <li><input type="radio" name="city" data-labelauty="Saint-Denis" value="Saint-Denis"></li>
            <li><input type="radio" name="city" data-labelauty="Versailles" value="Versailles"></li>
            <li><input type="radio" name="city" data-labelauty="Créteil" value="Créteil"></li>
            <li><input type="radio" name="city" data-labelauty="Orsay" value="Orsay"></li>
            <li><input type="radio" name="city" data-labelauty="Évry" value="Évry"></li>
            <li><input type="radio" name="city" data-labelauty="Antony" value="Antony"></li>
            <li><input type="radio" name="city" data-labelauty="Palaiseau" value="Palaiseau"></li>
        </ul>

        <hr>
        <ul class="dowebok5">
            <p class="par">Vous voulez boire un verre ou café:</p>
            <li><input type="radio" name="drink" data-labelauty="vin" value="vin" checked></li>
            <li><input type="radio" name="drink" data-labelauty="café" value="café"></li>
        </ul>
        <hr>
        <div style="text-align: center;margin-top: 20px;margin-bottom: 50px;">
            <button class="btn" ">Submit</button>
        </div>
        </form>
    </div>
</center>

<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-labelauty.js"></script>
<script type="text/javascript">
    $(function () {
        $(':input').labelauty();
    });
</script>

</body>
</html>