@extends('layouts.css.navbarcss')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="py-2 superNav border-bottom bg-light">
     
    <nav class="p-3 bg-white shadow-sm navbar navbar-expand-lg sticky-top navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>GANTSILYO PH</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
          <div class="input-group">
            <span class="text-white border-warning input-group-text bg-warning"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
            <button class="text-white btn btn-warning">Search</button>
          </div>
        </div>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
         
          <ul class="navbar-nav ms-auto ">
           
           
            <li class="nav-item">
              <a class="mx-2 nav-link text-uppercase" href="/userindex">Catalog</a>
            </li>
            <li class="nav-item">
            <a class="mx-2 nav-link text-uppercase active" aria-current="page" href="/home">Product</a>
            </li>
            <li class="nav-item">
              <a class="mx-2 nav-link text-uppercase" href="/about">About</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="mx-2 nav-link text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Logout</a>
            </li>
            <li class="nav-item">
              <a class="mx-2 nav-link text-uppercase" href="/account"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>