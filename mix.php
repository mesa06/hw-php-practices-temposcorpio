<html>
<head>
<meta charset="UTF-8">
<title>排列組合</title>
<style>

</style>
</head>


</head>
<body>
<?php
    $n = 4;
    $r = 3;
    $ni = 1;
    $ri = 1;
    for ($i = 1 ; $i <= $n ; $i++) {
        $ni *= $i;
        for ($j = 1 ; $j <= ($n-$r) ; $j++) {
            $ri *= $j;
        }
    }
    echo "P(n,r)=n!/(n-r)!=".($ni/$ri);
?>

</body>
</html>





