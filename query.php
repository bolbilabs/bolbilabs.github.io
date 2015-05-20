<?php
$input = $_POST["textarea"];

echo $input;
echo "<br />";

if(strcmp($input,'a')==0){
    echo "You wrote a";
    }else{
    echo "You did not write a";
    }


?>