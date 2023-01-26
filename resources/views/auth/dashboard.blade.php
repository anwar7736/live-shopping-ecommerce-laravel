@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
@endsection
@section('content')
<section>
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-10 account-menu p-3 d-md-block d-lg-block" id="account-sidemenu">
                        <div class="col-12 dismiss-box">
                            <button class="dismiss btn btn-light d-md-none d-lg-none d-block" id="account-dismiss">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="menu-box-inner">
                            <div class="profile-details">
                                <div class="profile-image m-2">
                                    <img src="assets/images/products/1.jpg" alt="">
                                </div>
                                <p class="name mt-2 text-muted">
                                    <b>
                                        Sontos Sharma
                                    </b>
                                </p>
                            </div>
                        <div class="d-flex justify-content-between">
                            <h5 class="title">My Account</h5>
                            
                        </div>
                        <hr>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link"><b>Dashboard</b></a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><b>My Profile</b></a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><b>Orders</b></a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><b>Wishlist</b></a></li>
                            <li class="nav-item"><a href="#" class="nav-link"><b>Logout</b></a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12 p-3 text-muted menu-details">
                        <button class="d-block d-md-none d-lg-none btn btn-secondary sidebar" id="account-sidebar">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        <p>Hello <span>Sontos</span> (Not you? <a href="#" class="text-muted">Logout</a>)   </p>
                        <p>
                            From your account dashboard you can view your <a href="#" class="text-muted">recent orders</a>, manage your billing address, and edit your password and account details.
                        </p>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 text-decoration-none text-muted p-2">
                                <div class="dashboard-box account-box d-flex justify-content-center align-item-center">
                                    <h3>Total Buy</h3>
                                    <h5 class="text-primary"><b>20 Products</b></h5>
                                    <p class="text-muted">Lifetime <span class="text-info"><i class="fas fa-angle-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 text-decoration-none text-muted p-2">
                                <div class="dashboard-box account-box d-flex justify-content-center align-item-center">
                                    <h3>Total Spand</h3>
                                    <h5 class="text-primary"><b>230 $</b></h5>
                                    <p class="text-muted">Lifetime <span class="text-info"><i class="fas fa-angle-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 text-decoration-none text-muted p-2">
                                <div class="dashboard-box account-box d-flex justify-content-center align-item-center">
                                    <h3>Total Buy</h3>
                                    <h5 class="text-primary"><b>5 Products</b></h5>
                                    <p class="text-muted">This Month <span class="text-info"><i class="fas fa-angle-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 text-decoration-none text-muted p-2">
                                <div class="dashboard-box account-box d-flex justify-content-center align-item-center">
                                    <h3>Total Spand</h3>
                                    <h5 class="text-primary"><b>50 $</b></h5>
                                    <p class="text-muted">This Month <span class="text-info"><i class="fas fa-angle-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 text-decoration-none text-muted p-2">
                                <div class="dashboard-box account-box d-flex justify-content-center align-item-center">
                                    <h3>Wishlist</h3>
                                    <h5 class="text-primary"><b>0</b></h5>
                                    <p class="text-muted">Total Wishlist Products</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 text-decoration-none text-muted p-2">
                                <div class="dashboard-box account-box d-flex justify-content-center align-item-center">
                                    <h3>Coupons</h3>
                                    <h5 class="text-primary"><b>5</b></h5>
                                    <p class="text-muted">Discount Coupons</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection