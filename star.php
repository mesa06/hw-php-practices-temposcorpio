<html>
<head>
<meta charset="UTF-8">
<title>星星塔</title>
<style>

</style>
</head>


</head>
<body>
    
    
<?php

    for($i=0;$i<5;$i++){
        for($j=5;$j>$i;$j--){
            echo "&nbsp;";
        }
        for($j=0;$j<=$i;$j++){
            echo "*&nbsp;";
        }
        echo "<br>";
    }

?>

</body>
</html>