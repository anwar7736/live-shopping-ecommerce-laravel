@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
@endsection
@section('content')
<section>
            <link rel="stylesheet" href="assets/css/login.css">
            <div class="container mt-5 mb-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 signup-form pb-4" id="signup-form">
                        <h4 class="title">Register</h4>
                        <form class="mt-4">
                          <div class="mb-3">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username" aria-describedby="usernamehelp">
                            <div id="usernamehelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="email" aria-describedby="emailhelp">
                            <div id="emailhelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="password" aria-describedby="passwordhelp">
                            <div id="passwordhelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <p>
                            A link to set a new password will be sent to your email address.
                          </p>
                          <p>
                            Anti-spam
                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">
                                privacy policy
                            </a>.
                          </p>
                          <button type="submit" class="btn col-12">Register</button>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 signup-form login-form pb-4" id="login-form" style="display: none;">
                        <h4 class="title">Login</h4>
                        <form class="mt-4">
                          <div class="mb-3">
                            <label for="username2" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username2">
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="password">
                          </div>
                         <div class="d-flex justify-content-between pt-2 pb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                  Default checkbox
                                </label>
                              </div>
                              <a href="#">Forget Password</a>
                         </div>
                          <button type="submit" class="btn col-12">Login</button>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 tab-select">
                        <div class="text-center form-target">
                            <h4 class="title mb-3">Login</h4>
                            <p>
                                Registering for this site allows you to access your order status and history. Just fill in the fields below, and we'll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.
                            </p>
                            <input type="button" class="btn mt-4 btn-light border border-muted" id="form-target-l" value="Login">
                            <input type="button" class="btn mt-4 btn-light border border-muted" id="form-target-s" value="Register" style="display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection