<?php

// 54

/*
String
- Access Elements
--- String Is Array Of Characters
--- Access Elements By Index "Zero Based Indexing"
--- Negative Index Are Allowed
- Update Elements
--- Update Current Elements
--- Add New Elements

Search
- Single-Byte and Multi-Byte
*/

  $str = "Elzero";

  echo "First Letter Is $str[0]<br>";
  echo "4th Letter Is $str[3]<br>";
  echo "Number Of Letters " . strlen($str) . "<br>";
  echo "Last Letter Is $str[-1]<br>";
  echo "Last Letter Is {$str[strlen($str) - 1]}<br>";

  echo $str . "<br>";
  $str[0] = "A";
  echo $str . "<br>";
  $str[6] = "A";
  echo $str . "<br>";
  ?>
  <?php
// 54
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
/*
  String Functions
  - lcfirst(String[Required])
  - ucfirst(String[Required])
  - strtolower(String[Required])
  - strtoupper(String[Required])
  - ucwords(String[Required], Delimiters[Optional])
  - str_repeat(String[Required], Count[Required])
*/

echo lcfirst("Elzero Web School") . "<br>";
echo ucfirst("elzero web school") . "<br>";
echo strtolower("ELZERO WEB SCHOOL") . "<br>";
echo strtoupper("elzero web school") . "<br>";
echo ucwords("elzero web school") . "<br>";
echo ucwords("elzero web|school", "|") . "<br>";
echo str_repeat("Elzero", 3);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>

<?php

// 55

  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

  $friends = ["Ahmed", "Osama", "Ali", "Salem"];

  echo implode(" ", $friends) . "<br>";
  echo implode(", ", $friends) . "<br>";
  echo implode("@@", $friends) . "<br>";
  echo implode($friends) . "<br>";

  $str = "Elzero Web School Is Cool";

  echo "<pre>";
  print_r(explode(" ", $str));
  echo "</pre>";

  echo "<pre>";
  print_r(explode("I", $str));
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, 3));
  echo "</pre>";

  echo "<pre>";
  print_r(explode(" ", $str, -2));
  echo "</pre>";

  echo str_shuffle("Elzero") . "<br>";
  echo strrev("Elzero") . "<br>";

  echo strlen("   Elzero  ") . "<br>";
  echo strlen(trim("   Elzero  ")) . "<br>";

  echo trim("#@@Elzero@@@###", "@") . "<br>";

  echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  echo ltrim("#@@Elzero@@@###", "#@") . "<br>";
  
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
  ?>
<?php

//56

/*
  String Functions
  - chunk_split(String[Required], Length[Optional], End[Optional])
  - strlen(String[Required])
  - str_split(String[Required], Length[Optional])
  - strip_tags(String[Required], Allowed[Optional])
  - nl2br(String[Required], XHTML[Optional])
*/

echo chunk_split("Elzero Web School", 3, "@");
echo '<br>';

echo '<pre>';
print_r(str_split("Elzero"));
echo '</pre>';

echo '<pre>';
print_r(str_split("Elzero", 2));
echo '</pre>';

echo "<h3>Hello <b>Elzero</b></h3>";
echo '<br>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>");
echo '<br>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>");
echo '<br>';

echo nl2br("Elzero\nWeb\nSchool", false);

?>