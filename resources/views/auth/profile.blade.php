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
                <div class="card">
                    <div class="card-header d-flex justify-content-between p-2 pb-0">
                    <h5 class="title">Profile Information</h5>
                    <a href="#update_profile"><i class="fas fa-edit"></i> Edit Profile</a>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-item-center">
                                <div class="profile-image me-3">
                                    <img src="assets/images/products/1.jpg" alt="profile image">
                                </div>
                                <div class="profile-primary-details">
                                    <h5 class="text-muted"><b>Sontos Sharma</b></h5>
                                    <div class="varified text-primary">[<span>Verifed</span>]</div>
                                    <p>Joined liveshopping.com on 21 jun 2022</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="contact-info">
                                        <h4><b>Contact Information</b></h4>
                                        <div class="">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-muted">E-mail</th>
                                                        <td>:</td>
                                                        <td scope="col">sontosroy78@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="text-muted">Alternative E-mail</th>
                                                        <td>:</td>
                                                        <td scope="col">None</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="text-muted">Phone Number</th>
                                                        <td>:</td>
                                                        <td scope="col">01310000000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="text-muted">Telephone Number</th>
                                                        <td>:</td>
                                                        <td scope="col">+880-2-6-2651256</td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    <hr>
                                    <div class="address-info">
                                        <h4><b>Address Information</b></h4>
                                        <div class="border-0">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-muted">Street/Village</th>
                                                        <td>:</td>
                                                        <td scope="col">Road#6, House#72, Shekhertek</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="text-muted">Thana/Upzilla</th>
                                                        <td>:</td>
                                                        <td scope="col">Mohammadpur</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="text-muted">District</th>
                                                        <td>:</td>
                                                        <td scope="col">Dhaka</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="text-muted">Country</th>
                                                        <td>:</td>
                                                        <td scope="col">Bangladesh</td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 border-lg-start" id="update_profile">
                                    <h4 class="text-muted">
                                        Update Your Information
                                    </h4>
                                    <form action="">
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="Sontos">
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="Sharma">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" disabled class="form-control" name="email" placeholder="E-mail" value="sontosroy78@gmail.com">
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="alternative_email" placeholder="Alternative Email" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="0131000000">
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="tel_number" placeholder="Telephone Number" value="+8802254542">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="village" placeholder="Street/Village" value="Road#6, House#72, Shekhertek">
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="upzilla" placeholder="Thana/Upzilla" value="Mohammadpur">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="village" placeholder="District/State" value="Dhaka">
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="country" placeholder="Country" value="Bangladesh">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="" class="form-label">Choose A Profile Pic</label>
                                            <input type="file" name="profile_pic" class="mb-3 form-control col-md-4 col-12" >
                                        </div>
                                        
                                        <button class="btn btn-success">Update Information</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection