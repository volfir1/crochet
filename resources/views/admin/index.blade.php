@extends('layouts.sidebar')
@extends('admin.css.indexcss')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<header class="dashboard-header"><p>Admin Dashboard</p></header>

<div class="container emp-profile">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                                    <div class="file btn btn-lg btn-primary">
                                        Change Photo
                                        <input type="file" name="file"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-head">
                                            <h5>
                                                Kshiti Ghelani
                                            </h5>
                                            <h6>
                                               Admin/Seller
                                            </h6>
                                           <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p>-->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                               
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content profile-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Kshiti Ghelani</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Kshiti123</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>dikoalam</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>kshitighelani@gmail.com</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Phone</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>123 456 7890</p>
                                                    </div>
                                                </div>
                                               
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </form>           
                </div>
</body>
</html>