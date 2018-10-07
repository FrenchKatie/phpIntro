<?php
  //This is a comment in PHP
  #This is another way to write a comment in PHP
  /*
  	This is how to write multi line comments
  	Can use as many lines as you like
  */

  $hello = "Hello";
  $_hello = "Hello with an underscore";
  $number = 10;
  $boolean = "false";

  $array = array(10, 20, 30, 40);

  echo hello;
  echo ("hello with brackets");
  // echo $_hello;
  print ("hello from print");
  // print hello with no brackets;

  var_dump("This is from a var dump");
  var_dump($array);

  // die("This is a die");

  $list = array("apples", "bananas", "pears");


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1 class="heading1 <?php echo "classname"; ?>">This is running from a PHP file</h1>
  <?php
    echo "<h2>This is from an echo</h2>";
   ?>
   <h2> <?php echo $hello; ?> </h2>
   <h3> <?= "Thid is from the shortcode tags"; ?> </h3>



   <!-- Want to spit out items in a list -->

   <ul>
       <?php
            foreach ($list as $listItem) {
              echo "<li>".$listItem."</li>"; //concatinate using a full stop
            }
       ?>
   </ul>
   <ul>
       <?php foreach ($list as $listItem): //everything after this colon is a for each ?>
         <li><?= $listItem?></li>
       <?php endforeach;//ends the for each ?>
   </ul>






   <!-- Want to calculate everyones scores - was it a pass or a fail and what is the average? -->

   <?php
      $scores = array(0, 58, 15, 89, 100, 45, 54);

   ?>
   <h2>The total number of people are <?= count($scores) //count is a predefined PHP function that counts how many items in the array ?></h2>
   <ul>
     <?php foreach ($scores as $score):  ?>
       <li><?= $score  ?></li>
     <?php endforeach; ?>
   </ul>

   <?php
      $totalScore = 0;
      foreach ($scores as $score) {
        $totalScore += $score;
      }
      $averageScore = $totalScore / count($scores);
   ?>

   <h3>The average score is <?= $averageScore; ?> </h3>
   <?php if($averageScore > 50): ?>
     <p>The class has passed</p>
   <?php else: ?>
     <p>The class has failed</p>
   <?php endif; ?>




</body>
</html>
