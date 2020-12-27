<!DOCTYPE html>
<html>
<head>

  <style>
    p{
      background-color: #7fffd4;
      width:200px;
      /* height: 200px; */
      color: magenta;
    }

    h1 {
      color: blueviolet;

    }

  </style>

</head>
<body>

<?php
/* start php coding */
  $characterName = "Zad Abad";
  $characterAge= 70;
  $N1 = 27.78;
  $N2 = 30.7;
  $Sum= $N1+$N2;

  echo ("<Style>");
  echo ("body { background-color: #faebd7;}");
  echo ("</Style>");
  echo ("<h1> My 1st PHP Web App </h1> <br>");
  echo("<hr>");
  echo("<p> Hello World I am $characterName and my age is $characterAge</p>");
  echo str_replace ("A", "Panda", $characterName);
  echo "<br>";

  echo substr($characterName, 4);

  echo("<p> Hello World I am $characterName and my age is $characterAge</p>");
  echo("<p> Hello World I am $characterName and my age is $characterAge</p>");
  echo "<p> Sum of $N1 and $N2 is $Sum </p>";

  $characterName = "Ziad";
  $characterAge= 56;

  echo("<p> Hello World I am $characterName and my age is $characterAge</p>");
  $characterName[0]="M";
  echo strtolower("<p> Hello World I am $characterName[0] and my age is $characterAge</p>");

  echo "<p>";

    echo 40;

    echo "<br>";

    echo -56.23456;
    echo "<br>";

    echo ((40 + -56.23456 - 10)/2)*5;

    for ($i = 0; $i<=33; $i++){
      echo ("My name is $i");
      echo "<br>";
    }

  echo "<br>";
  echo abs(-100);

  echo "<br>";
  echo "<br>";

  echo "<br>";
   echo sqrt(25);
  echo "<br>";

  echo "<br>"; echo pow(5,2); echo "<br>";
  echo "<br>"; echo pow(2,3); echo "<br>";

  echo "<br>"; echo pow(8,1/3); echo "<br>";

  echo "<br>"; echo max(5,2,11); echo "<br>";
  echo "<br>"; echo min(5,2,7,11,6,1); echo "<br>";
  echo "<br> Hello Ahmed <br>";
  echo "<br>"; echo round(4.2); echo "<br>";
  echo "<br>"; echo round(4.5); echo "<br>";
  echo "<br>"; echo ceil(4.2); echo "<br>";
  echo "<br>"; echo ceil(4.5); echo "<br>";
  echo "<br>"; echo floor(4.2); echo "<br>";
  echo "<br>"; echo floor(4.5); echo "<br>";


  echo "</p>";

/* end
   php
  coding (multiple line comments, need closing tag)
*/

// end php coding (single line comment, no closing tag)
# end php coding (single line comment, no closing tag)
 ?>

 <!-- form in html-->

 <form action="site.php" method="get">
   Name: <input type="text" name="username">
   <br>
   Age:   <input type="number" name="age">
   <br>
   Period: <input type="number" name="period">
   </br>
   <input type="submit">
 </form>
 <br>
<!-- Start another php code -->

<?php

echo "Your name is: ";
echo $_GET["username"];   // be careful because GET here is case sensetive, this way also gives an error first time to run the site before the form is submitted for the first time and if I refresh it gives the previous values filled by the user before refresh -->
echo "<br> Your age is: ";
echo $_GET["age"];      //... need another way that dont cause these two problems... -->
echo "<br>You will be ";
echo $_GET["age"] + $_GET["period"];
echo " years old after the period of ";
echo $_GET["period"];
echo " years";

// again but useing variables
$username = $_GET["username"];
$age = $_GET["age"];
$period = $_GET["period"];

echo "<br><br>Your name is: ";
echo $username;   // be careful because GET here is case sensetive, this way also gives an error first time to run the site before the form is submitted for the first time and if I refresh it gives the previous values filled by the user before refresh -->
echo "<br> Your age is: ";
echo $age;      //... need another way that dont cause these two problems... -->
echo "<br>You will be ";
echo $age + $period;
echo " years old after the period of ";
echo $period;
echo " years";

?>

</body>

</html>
