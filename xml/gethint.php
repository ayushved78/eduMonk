<?php
// Array with names
$a[] = "Clean Code";
$a[] = "Midnight Rain";
$a[] = "The Pragmatic Programmer: Your Journey to Mastery";
$a[] = "Oberon's Legacy";
$a[] = "Introduction to Algorithms";
$a[] = "Lover Birds";
$a[] = "Randall";
$a[] = "Cynthia";
$a[] = "Corets";
$a[] = "Eva";
$a[] = "Kim";
$a[] = "Ralls";
$a[] = "Thomas H. Cormen";
$a[] = "Charles E. Leiserson";
$a[] = "Ronald L. Rivest";
$a[] = "Clifford Stein";
$a[] = "David Thomas";
$a[] = "Andrew Hunt";
$a[] = "Ralls";
$a[] = "Robert C. Martin";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>