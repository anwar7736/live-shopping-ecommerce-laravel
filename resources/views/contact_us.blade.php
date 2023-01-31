@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
@endsection
@section('content')
<section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d69456.48179628646!2d90.41662481736132!3d23.80591314983786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1666681733843!5m2!1sen!2sbd" class="col-12" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="container-fluid mt-3 ">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 faq text-muted">
                        <h6>INFORMATION QUESTIONS</h6>
                        <h3>FREQUENTLY ASKED QUESTIONS</h3>
                            
                        <div class="dec-acc mt-5">
                            <div class="accordion discription m-auto">
                                            
                                        
                                <a href="#acmtab1" class="ac-btn d-flex justify-content-between text-start active align-items-start">
                                    <p>Where Are Your Outlets?</p>
                                    <span class=""><i class="fas fa-angle-down"></i></span>
                                </a>
                                <div id="acmtab1" class="tab-content2 text-start ps-3 text-muted">
                                    <p>Currently, we are operating two outlets as follows:</p>
                                    <ul>
                                        <li>
                                            <p><b>Banglamotor Outlet:</b></p>
                                            <p>15th Floor, Rupayan Trade Center, Banglamotor 1000 (Roundabout Banglamotor Signal)</p>
                                        </li>
                                        <li>
                                            <p><b>Basundhara City Outlet:</b></p>
                                            <p>Level-2, Block-C, Shop-57, 68 <br>
                                                Basundhara City Shopping Mall Panthapath Dhaka-1205</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion discription m-auto">
                                    
                                
                                <a href="#acmtab2" class="ac-btn d-flex justify-content-between text-start align-items-start">
                                    <p>How to order?</p>
                                    <span class=""><i class="fas fa-angle-down"></i></span>
                                </a>
                                <div id="acmtab2" class="tab-content2 text-start ps-3 text-muted">
                                    <p>To place an order, visit our shop section to choose products. If you like any, just click on it to see more details or click on the Buy Now button to place the order.</p>
                                    <p>After clicking on the button, you have to input the following three fields: your name, delivery address, and phone number that’s it.</p>
                                    <p>We will call you for confirm the order.</p>
                                </div>
                            </div>
                            <div class="accordion discription m-auto">
                                
                                
                                <a href="#acmtab3" class="ac-btn d-flex justify-content-between align-items-start">
                                    <p>How to return an Item, If you don't like it?</p>
                                    <span class=""><i class="fas fa-angle-down"></i></span>
                                </a>
                                <div id="acmtab3" class="tab-content2 text-start ps-3 text-muted">
                                    <p>Don’t worry! You can return the goods! However, please note that if you buy online, you can change it in both online and in person,</p>
                                    <p>but if you buy offline, you must go to the exact branch to change your goods with purchased receipts.</p>
                                </div>
                                
                            </div>
                            <div class="accordion discription m-auto">
                                
                            
                                <a href="#acmtab4" class="ac-btn d-flex justify-content-between align-items-start">
                                    <p>What is your return policy</p>
                                    <span class=""><i class="fas fa-angle-down"></i></span>
                                </a>
                                <div id="acmtab4" class="tab-content2 text-start ps-3 text-muted">
                                    
                                    <p>We have a friendly buyer protection policy! So please don't worry in case of any wrong delivery. We are ready and bound to take back the goods you purchased only if we send any wrong size, color, selection, or manufacturing defects.</p>
                                </div>
                            </div>
                            <div class="accordion discription m-auto">
                                
                            
                                <a href="#acmtab5" class="ac-btn d-flex justify-content-between align-items-start">
                                    <p>What is your refund policy</p>
                                    <span class=""><i class="fas fa-angle-down"></i></span>
                                </a>
                                <div id="acmtab5" class="tab-content2 text-start ps-3 text-muted">
                                    
                                    <p>Sorry, currently we are not offering any refund, but in case of any out-of-stock of your issued goods, we refund only when the purchased goods are back within seven days to the same store in person as it was with hang-tag and poly packaging at the delivery time.</p>
                                    <p>Please note that we give the refund money as a voucher by which you can pay us for your next purchase.</p>
                                </div>
                            </div>
                            <div class="accordion discription m-auto">
                                
                            
                                <a href="#acmtab6" class="ac-btn d-flex justify-content-between align-items-start">
                                    <p>What is your delivery system?</p>
                                    <span class=""><i class="fas fa-angle-down"></i></span>
                                </a>
                                <div id="acmtab6" class="tab-content2 text-start ps-3 text-muted">
                                    
                                    <p>We are doing 100% cash on delivery. You pay only when you get goods in your hands. If you are inside Dhaka, then the delivery charge is only 70Tk. and nationwide it is 150Tk. only. Delivery lead times are 2 days and 5 days, respectively for inside Dhaka and nationwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 contact-form">
                        <h6>INFORMATION ABOUT US</h6>
                        <h3>CONTACT US FOR ANY QUESTIONS</h3>
                        <form class="mt-5" onsubmit="return false">
                          <div class="row">
                            <div class="mb-3 col-lg-6 col-md-6 col-12 text-muted">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-12 text-muted">
                                <label for="email">Your Name</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-12 text-muted">
                                <label for="phone">Your Phone</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-12 text-muted">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                            
                          </div>
                          <div class="mb-3 col-12 text-muted">
                            <label for="message">Your Message</label>
                            <textarea name="" id="message" rows="5" class="form-control col-12"></textarea>
                            </div>
                          <button type="submit" class="btn btn-secondary">Send Your Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection