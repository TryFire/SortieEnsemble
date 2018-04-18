<!--<html>
<head>
    <script type="text/javascript">
        function validate_email(field,alerttxt)
        {
            with (field)
            {
                apos=value.indexOf("@")
                dotpos=value.lastIndexOf(".")
                if (apos<1||dotpos-apos<2)
                {alert(alerttxt);return false}
                else {return true}
            }
        }

        function validate_form(thisform)
        {
            with (thisform)
            {
                if (validate_email(pas,"Not a valid e-mail address!")==false)
                {pas.focus();return false}
            }
        }
    </script>
</head>

<body>
<form action="submitpage.htm"onsubmit="return validate_form(this);" method="post">
    Email: <input type="text" name="email" size="30">
    Pass: <input type="text" name="pas" size="30">
    <input type="submit" value="Submit">
</form>
</body>

</html>-->

<?php

echo urldecode("http://localhost:63342/code/html/test.php?resto=nihao&disco=ss%20s&bar=vbbb")."<br>";
$place = convertUrlQuery(urldecode($_SERVER['QUERY_STRING']));
foreach ($place as $value){
    echo $value;
}
function convertUrlQuery($query)
{
    $queryParts = explode('&', $query);
    $params = array();
    foreach ($queryParts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
    }
    return $params;
}

function getUrlQuery($array_query)
{
    $tmp = array();
    foreach($array_query as $k=>$param)
    {
        $tmp[] = $k.'='.$param;
    }
    $params = implode('&',$tmp);
    return $params;
}
?>
