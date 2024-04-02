@extends('users.css.menucss')
@extends('layouts.sidecart')
@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>


<div class="container">
    <div class="sticky menu-card">
        <strong><p>Products</p></strong>
        <!-- Search bar -->
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"> <box-icon name="search"></box-icon></i></button>
        </div>
        <!-- Crochet type title and list item -->
        <div class="crochet-list">
            <h5>Crochet Type</h5>
            <ul>
                <li>Milk Cotton</li>
                
            </ul>
        </div>
    </div>
</div>


        <div class="mb-4 col md-3 col-6" id="product-cards">
        @foreach($products as $product)
            <!-- Content of your product cards goes here -->
            <div class="wrapper">
                <div class="product-img">
                    <img src="{{ $product->img }}" height="400" width="400">
                </div>
                <div class="product-info">
                    <div class="product-text">
                        <h1>{{ $product->prod_name ?? 'Product Name not Available' }}</h1>
                       
                        <p>{{ $product->prod_desc }}</p>
                    </div>
                    <div class="product-price-btn">
                        <p><span>{{ $product->price }}</span>₱</p>
                        <button type="button">Buy Now</button>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Add more product cards as needed -->

        
          
            

        </div>
    </div>
        
     

        

        


        
    </div>
</body>
</html>
