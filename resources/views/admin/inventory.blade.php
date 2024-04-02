@extends('admin.css.inventorycss')
@extends('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap User Management Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<header class="dashboard-header"><p>Products Dashboard</p></header>


    
    <div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Product <b>Management</b></h2>
                    </div>
                    <div class="col-xs-7">
                        <a href="#" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New Prodcut</span></a>
                       			
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>						
                        <th>Description</th>
                        <th>Type</th>
                        <th>Price</th>
                        <td>Stock</td>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#"> Fairy Corset Top</a></td>
                        <td>An amazin outfit with cool green pastel color</td>
                        <td>Tops</td>
                        <td>300</td>   
                        <td>5</td>       
                        <td><img src="products/15.jpg" class="avatar" alt="Avatar"> </td>
                        <td>
                            <a href="#" class="settings" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>

                        </td>
                        <td>
                             <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                      
                    </tr>
                    
                </tbody>
            </table>
            
        </div>
    </div>        
</div>    
 
<div class="frame">

</div>  
    
 
</body>
</html>