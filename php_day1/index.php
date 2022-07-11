<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php
$name = "Maria";
echo "<h1>$name</h1>";
?>

<?php
$name = "Maria";
$age = 25;
$title = "manager";
echo "hi, my name is $name, and i am $age, and i work as a $title<br>";
$names = array("Mark", "John", "Georg", "Lisa");
echo "the third player in the team is $names[2]<br><br>";?>

<div class="cartoon">
<?php
$cartoons = array(
"horse"=>array(
    "name"=>"BoJack",
    "age"=>40,
    "gender"=>"he"),
"cat"=>array(
    "name"=>"Princess Caroline",
    "age"=>30,
    "gender"=>"she"),
   
"human" =>array(
    "name"=>"Jedah",
    "age"=>30,
    "gender"=>"he")
    );
        
echo "<h2>The main character is {$cartoons['horse']['name']}</h2>";
echo "<h3> {$cartoons['horse']['gender']}  is  {$cartoons['horse']['age']} years old <br></h3>";
echo "<h2>His manager is ".$cartoons['cat']['name']. "</h2>";
echo $cartoons['cat']['gender']. " is " .$cartoons['cat']['age']. " years old <br>";
echo "<h2>Her assistant is ".$cartoons['human']['name']. "</h2>";
echo $cartoons['human']['gender']. " is " .$cartoons['human']['age']. " years old <br>";

echo "<h2>The main character is {$cartoons['horse']['name']}</h2>"."<h3> {$cartoons['horse']['gender']}  is  {$cartoons['horse']['age']} years old <br></h3>"."<h2>His manager is ".$cartoons['cat']['name']."</h2>".$cartoons['cat']['gender']. " is " .$cartoons['cat']['age']. " years old <br>"."<h2>Her assistant is ".$cartoons['human']['name']. "</h2>". $cartoons['human']['gender']. " is " .$cartoons['human']['age']. " years old <br>";
?>
</div>
</body>
</html>


