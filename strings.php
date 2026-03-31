<?php
echo"Hello Folks";
echo"<br>____________________________________________<br>";



echo "Exemplo: <br>";
$x= "John Doe";
echo"hello $x";
echo"<br>____________________________________________<br>";

echo "str_word_count = " ;
echo"<br>____________________________________________<br>";

$txt="Is that all folks! ";
var_dump(str_contains($txt, "all"));
echo"<br>str_contains =" .str_contains($txt, "all");
echo'<br>____________________________________________<br>';


var_dump(str_contains($txt, "boy"));
echo"<br>____________________________________________<br>";

var_dump(str_contains($txt, "is"));
echo"<br>____________________________________________<br>";

echo strpos($txt,"word");
echo strpos($txt,"folks");

echo"<br>____________________________________________<br>";

var_dump(str_ends_with($txt, "is"));
echo"<br>____________________________________________<br>";

var_dump(str_ends_with($txt, "word"));
echo"<br>____________________________________________<br>";

var_dump(str_ends_with($txt, "folks"));
echo"<br>____________________________________________<br>";

var_dump(str_ends_with($txt, "the"));
echo"<br>____________________________________________<br>";

echo trim($txt);
echo"<br>____________________________________________<br>";

echo strrev($txt);
echo"<br>____________________________________________<br>";

echo explode(" ", $txt);