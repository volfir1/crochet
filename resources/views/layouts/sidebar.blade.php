@extends('layouts.css.sidecss')
@extends('layouts.js.sidejs')

<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" rel="stylesheet">
  </head>
  <body>
   
    <div class="sidebar">
      <header>Admin</header>
      <a href="/admin" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="/suppliers">
        <i class="fas fa-user"></i>
        <span>Suppliers</span>
      </a>
      <a href="/product">
        <i class="fas fa-stream"></i>
        <span>products</span>
      </a>
     
      <a href="#">
        <i class="far fa-window-maximize"></i>
        <span>Order</span>
      </a>

      <a href="/">
        <i class="far fa-solid fa-right-from-bracket"></i>
        <span>Logout</span>
      </a>
      
    </div>
</body>
    


