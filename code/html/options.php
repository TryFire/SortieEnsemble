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
        <!--<form action="display.php" method="post">-->


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
            <li><input type="radio" name="type_plat" data-labelauty="italien" value="italien" checked></li>
            <li><input type="radio" name="type_plat" data-labelauty="japonais" value="japonais"></li>
            <li><input type="radio" name="type_plat" data-labelauty="allemand" value="allemand"></li>
            <li><input type="radio" name="type_plat" data-labelauty="français" value="français"></li>
            <li><input type="radio" name="type_plat" data-labelauty="chinois" value="chinois"></li>
            <li><input type="radio" name="type_plat" data-labelauty="indien" value="indien"></li>
            <li><input type="radio" name="type_plat" data-labelauty="coréen" value="coréen"></li>
            <li><input type="radio" name="type_plat" data-labelauty="vietnamien" value="vietnamien"></li>
            <li><input type="radio" name="type_plat" data-labelauty="espagnol" value="espagnol"></li>
            <li><input type="radio" name="type_plat" data-labelauty="fast-food" value="fast-food"></li>
            <li><input type="radio" name="type_plat" data-labelauty="mexicain" value="mexicain"></li>
            <li><input type="radio" name="type_plat" data-labelauty="Pizzeria" value="Pizzeria"></li>
            <li><input type="radio" name="type_plat" data-labelauty="libanais" value="libanais"></li>
            <li><input type="radio" name="type_plat" data-labelauty="belge" value="belge"></li>
            <li><input type="radio" name="type_plat" data-labelauty="fruits de mer" value="fruits-de-mer"></li>
            <li><input type="radio" name="type_plat" data-labelauty="barbecue" value="barbecue"></li>
        </ul>
        <hr>

        <ul class="dowebok4">
            <p class="par">le local vous préférez :</p>
            <li><input type="radio" name="city" data-labelauty="Antony" value="Antony" checked></li>
            <li><input type="radio" name="city" data-labelauty="Saint-Denis" value="Saint-Denis"></li>
            <li><input type="radio" name="city" data-labelauty="Versailles" value="Versailles"></li>
            <li><input type="radio" name="city" data-labelauty="Créteil" value="Créteil"></li>
            <li><input type="radio" name="city" data-labelauty="Orsay" value="Orsay"></li>
            <li><input type="radio" name="city" data-labelauty="Évry" value="Évry"></li>
            <li><input type="radio" name="city" data-labelauty="Massy" value="Massy"></li>
            <li><input type="radio" name="city" data-labelauty="Palaiseau" value="Palaiseau"></li>
            <li><input type="radio" name="city" data-labelauty="Orly" value="Orly"></li>
            <li><input type="radio" name="city" data-labelauty="Montlhéry" value="Montlhéry"></li>
            <li><input type="radio" name="city" data-labelauty="Longjumeau" value="Longjumeau"></li>
            <li><input type="radio" name="city" data-labelauty="Paray-Vieille-Poste" value="Paray-Vieille-Poste"></li>
            <li><input type="radio" name="city" data-labelauty="Clamart" value="Clamart"></li>
            <li><input type="radio" name="city" data-labelauty="Vitry-sur-Seine" value="Vitry-sur-Seine"></li>
            <li><input type="radio" name="city" data-labelauty="Neuilly-sur-Seine" value="Neuilly-sur-Seine"></li>
            <li><input type="radio" name="city" data-labelauty="Bobigny" value="Bobigny"></li>
            <li><input type="radio" name="city" data-labelauty="Montreuil" value="Montreuil"></li>
            <li><input type="radio" name="city" data-labelauty="13E+Paris" value="13E+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="7E+Paris" value="7E+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="15E+Paris" value="15E+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="1ER+Paris" value="1ER+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="11E+Paris" value="11E+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="10E+Paris" value="10E+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="8E+Paris" value="8E+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="9E+Paris" value="9E+Paris"></li>
            <li><input type="radio" name="city" data-labelauty="17E+Paris" value="17E+Paris"></li>
        </ul>

        <hr>
        <ul class="dowebok5">
            <p class="par">Vous voulez boire un verre ou café:</p>
            <li><input type="radio" name="drink" data-labelauty="vin" value="vin" checked></li>
            <li><input type="radio" name="drink" data-labelauty="café" value="café"></li>
        </ul>
        <hr>
        <div style="text-align: center;margin-top: 20px;margin-bottom: 50px;">
            <button class="btn" onclick="display()">Submit</button>
        </div>
        <!--</form>-->
    </div>
</center>

<script>
    function display() {
        //alert("start");
        setCookie("number", valide("number"), 100);
        setCookie("distance", valide("distance"), 100);
        //alert(valide("city"));
        setCookie("city", valide("city"), 100);
        setCookie("drink", valide("drink"), 100);
        setCookie("type_plat", valide("type_plat"), 100);
        //window.location.href="display.html";
        window.open("display.html", "_blank");
    }
    function valide(name) {
        var radio = document.getElementsByName(name);
        for (var i = radio.length - 1; i >= 0; i--) {
            if (radio[i].checked) {
                return (radio[i].value);
            }
        }
    }

    function setCookie(c_name,value,expiredays)
    {
        var exdate=new Date();
        exdate.setDate(exdate.getDate()+expiredays);
        document.cookie=c_name+ "=" +escape(value)+
            ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
    }
</script>

<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-labelauty.js"></script>
<script type="text/javascript">
    $(function () {
        $(':input').labelauty();
    });
</script>

</body>
</html>