<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<?php
$cars = array(
"car1"=>array(
    "img"=>"https://cdn.pixabay.com/photo/2016/11/19/17/14/automobile-1840414_1280.jpg",
    "brand"=>"Mazda",
    "model"=>"CX-3",
    "price"=> 100
    ),
"car2"=>array(
    "img"=>"https://cdn.pixabay.com/photo/2017/03/27/14/56/auto-2179220_1280.jpg",
    "brand"=>"Mercedes",
    "model"=>"Q100",
    "price"=> 200
),
   
"car3" =>array(
    "img"=>"https://cdn.pixabay.com/photo/2019/11/02/19/24/car-4597207_1280.jpg",
    "brand"=>"Infiniti",
    "model"=>"Q70",
    "price"=> 300 
    )
);


foreach($cars as $x)
{
     echo
   ' <div class="card" style="width: 18rem;">
    <img src="'.$x['img'].'" class="card-img-top" alt="...">
    <div class="card-body">
     <h5 class="card-title">'.$x['brand'].'</h5>
     <p class="card-text">'.$x['model'].'</p>
     <a href="#" class="btn btn-primary">'.$x['price'].'</a>
    </div>
</div>';
}
?>
<div class="container">
    <div class="row gap-5">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo "{$cars['car1']['img']}"?>" class="card-img-top" alt="...">
            <div class="card-body">
             <h5 class="card-title"><?php echo "{$cars['car1']['brand']}"?></h5>
             <p class="card-text"><?php echo "{$cars['car1']['model']}"?></p>
             <a href="#" class="btn btn-primary"><?php echo "{$cars['car1']['price']}"?>€</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo "{$cars['car2']['img']}"?>" class="card-img-top" alt="...">
            <div class="card-body">
             <h5 class="card-title"><?php echo "{$cars['car2']['brand']}"?></h5>
             <p class="card-text"><?php echo "{$cars['car2']['model']}"?></p>
             <a href="#" class="btn btn-primary"><?php echo "{$cars['car2']['price']}"?>€</a>
            </div>      
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo "{$cars['car3']['img']}"?>" class="card-img-top" alt="...">
            <div class="card-body">
             <h5 class="card-title"><?php echo "{$cars['car3']['brand']}"?></h5>
             <p class="card-text"><?php echo "{$cars['car3']['model']}"?></p>
             <a href="#" class="btn btn-primary"><?php echo "{$cars['car3']['price']}"?>€</a>
            </div>      
        </div>
    </div>
</div>
    



   






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>