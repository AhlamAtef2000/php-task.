
<?php 
$phones = [
    [ 
    'name' => 'Samsung Galaxy Note 20 Ultra',
    'img_url' =>'https://th.bing.com/th/id/OIP.0H_GXDBmj8t95s1KzMU5GAHaL5?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
    ],
    [ 
    'name' => 'INFINIX Zero 8',
    'img_url' =>'https://th.bing.com/th/id/OIP.SGl0HgSAZNI19GrdqxJtpwHaHs?w=183&h=189&c=7&r=0&o=5&dpr=1.3&pid=1.7',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
    ],
    [ 
    'name' => 'Apple iPhone 12 Pro',
    'img_url' =>'https://th.bing.com/th/id/OIP.0H_GXDBmj8t95s1KzMU5GAHaL5?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

    ],
    [ 
    'name' => 'ITEL A48',
    'img_url' =>'https://th.bing.com/th?id=OIP.BgY4s09P-5gJj7LzuHsB4QHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00'
    ],
    [ 
    'name' => 'Samsung Galaxy S21 Ultra',
    'img_url' =>'https://th.bing.com/th/id/OIP.gUMxPvET4HZmNyspLLWxHwHaE8?w=261&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',

    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00'
    ],
    
    [ 
    'name' => 'Galaxy A52',
    'img_url' =>'https://th.bing.com/th/id/OIP.5-qqUfTEdppxPL2tRGsRjQHaEP?w=327&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
        </li>
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
    </div>
</div>
</nav>
</div>


<div class="card-body">
<?php
foreach($phones as $phone){
    echo  "<h5 class='card-title'>". $phone['name']."</h5>"."<br>";
    echo   "<img src='". $phone['img_url'] ."'>"."<br>"; 
    echo $phone['rate']."<br>";
    echo$phone['brand']."<br>";
    echo$phone['price']."<br>";
    echo "<a href='' class='btn btn-primary'>"."view details"."</a>";
}

?>
</div>
<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>
