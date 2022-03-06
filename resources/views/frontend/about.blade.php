<!DOCTYPE html>
<html lang="en">

@php
    $subname = " About";
@endphp

@include('frontend.common.header')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/transfer_form_popup.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    </style>
    <script src="https://kit.fontawesome.com/42fd393a18.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper" id="wrap">
        <div class="about_page">
            <!-- navbar -->
            @include('frontend.common.nabbar')
            <!-- banner -->

            <div class="about_banner">
                <div class="overlay"></div>
                <div class="banner_content">
                    <div class="content_left" id="banner_left">
                        <h1>About SyndIT</h1>
                        <p>Our mission is to help you save on transfer fees and exchange rates!</p>
                        <div class="banner_btns">
                            <a href="#">Open a Free Account</a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- our about -->

            <div class="about_us">
                <div class="about_left">
                    <div class="left_content">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="about_right">
                    <div class="overlay"></div>
                    <div class="right_content">
                        <div class="who_we">
                            <h1>Who we are</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque velit deserunt ab
                                magni nam obcaecati, numquam eum recusandae. A, culpa pariatur. Porro aspernatur
                                eligendi impedit odit unde quasi, quae recusandae consequuntur quo possimus aliquam
                                perferendis? Fugiat in praesentium, dolore obcaecati unde et ex! Nisi non reiciendis
                                impedit repellat perspiciatis corrupti in, tempore dolore accusamus nesciunt maxime
                                voluptates ex quod odit.</p>
                        </div>
                        <div class="values">
                            <h1>Our Values</h1>
                            <div class="value_box">
                                <h2>Our Mission</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error corporis quod facere
                                    architecto iste, ab et rerum non incidunt fugit velit explicabo quam cupiditate
                                    quasi consectetur unde ut fuga amet. Aut eveniet earum reiciendis corporis quia
                                    dolor assumenda veniam nostrum!</p>
                            </div>
                            <div class="value_box">
                                <h2>Our Vision</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error corporis quod facere
                                    architecto iste, ab et rerum non incidunt fugit velit explicabo quam cupiditate
                                    quasi consectetur unde ut fuga amet. Aut eveniet earum reiciendis corporis quia
                                    dolor assumenda veniam nostrum!</p>
                            </div>
                            <div class="value_box">
                                <h2>Our Goal</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error corporis quod facere
                                    architecto iste, ab et rerum non incidunt fugit velit explicabo quam cupiditate
                                    quasi consectetur unde ut fuga amet. Aut eveniet earum reiciendis corporis quia
                                    dolor assumenda veniam nostrum!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- status section -->

            <div class="status">
                <div class="status_content">
                    <div class="content_box">
                        <i class="fa-solid fa-globe"></i>
                        <h1>180+</h1>
                        <p>Countries</p>
                    </div>
                    <div class="content_box">
                        <i class="fa-solid fa-circle-dollar-to-slot"></i>
                        <h1>120</h1>
                        <p>currencies</p>
                    </div>
                    <div class="content_box">
                        <i class="fa-solid fa-users"></i>
                        <h1>2.5M</h1>
                        <p>Users</p>
                    </div>
                    <div class="content_box">
                        <i class="fa-solid fa-handshake-angle"></i>
                        <h1>24 X 7</h1>
                        <p>Support</p>
                    </div>
                </div>
            </div>

            <!-- footer -->

            <div class="footer">
                <div class="footer_content">
                    <div class="footer_top">
                        <div class="page_navigator">
                            <a href="{{route('about')}}">About Us</a>
                            <a href="{{route('contact')}}">Support</a>
                            <a href="{{route('contact')}}">Help</a>
                        </div>
                        <div class="social_media">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-google"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <p>Copyright &copy; 2022 <span>Syndit</span> &vert; All Rights Reserved.</p>
                        <div class="page_navigator">
                            <a href="#">Security</a>
                            <a href="#">Terms</a>
                            <a href="#">Privacy</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>

    <!-- send money form popup -->

    <div class="send_money_form" id="send_popup">
        <div class="popup_content">
            <div class="transfer_form">
                <div class="type_indicator">
                    <div class="send_indicate active" id="indicator_1" onclick="appear1()"><a>Send Money</a>
                    </div>
                    <div class="close_indicate" onclick="appear_send_form()"><a><i class="fa-solid fa-xmark"></i></a>
                    </div>
                </div>
                <div class="tranfer_form_section">
                    <div class="send_form_box-1">
                        <div class="box_content">
                            <div class="input_box">
                                <h5>You Send</h5>
                                <div class="input_box_item">
                                    <div class="input_icon"><i class="fa-solid fa-hand-holding-dollar"></i>
                                    </div>
                                    <input type="text" placeholder="1000">
                                    <div class="currency_type">
                                        <select id="currency">
                                            <option value="1"><a>INR</a></option>
                                            <option value="2"><a>BDT</a></option>
                                            <option value="3"><a>USD</a></option>
                                            <option value="4"><a>AUD</a></option>
                                            <option value="5"><a>GBP</a></option>
                                            <option value="6"><a>NPR</a></option>
                                            <option value="7"><a>NZD</a></option>
                                            <option value="8"><a>PKR</a></option>
                                            <option value="9"><a>TRY</a></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input_box">
                                <h5>Recipient Gets</h5>
                                <div class="input_box_item">
                                    <div class="input_icon"><i class="fa-solid fa-filter-circle-dollar"></i>
                                    </div>
                                    <input type="text" placeholder="1000">
                                    <div class="currency_type">
                                        <select id="currency">
                                            <option value="1"><a>INR</a></option>
                                            <option value="2"><a>BDT</a></option>
                                            <option value="3"><a>USD</a></option>
                                            <option value="4"><a>AUD</a></option>
                                            <option value="5"><a>GBP</a></option>
                                            <option value="6"><a>NPR</a></option>
                                            <option value="7"><a>NZD</a></option>
                                            <option value="8"><a>PKR</a></option>
                                            <option value="9"><a>TRY</a></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input_box_1">
                                <h5>Sending To</h5>
                                <div class="input_box_item">
                                    <input type="text" placeholder="Email ID / Mobile No. / Username">
                                </div>
                            </div>
                            <div class="fee">
                                <p>Total fees - <span>7.22 USD</span></p>
                            </div>
                            <div class="exchange_value">
                                <p>The current exchange rate is <span>1 USD = 1.42030 AUD</span></p>
                            </div>
                            <div class="continue_btn">
                                <button>Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- receive form popup -->

    <div class="receive_money_form" id="receive_popup">
        <div class="popup_content">
            <div class="transfer_form">
                <div class="type_indicator">
                    <div class="close_indicate" onclick="appear_request_form()"><a><i
                                class="fa-solid fa-xmark"></i></a>
                    </div>
                    <div class="receive_indicate" id="indicator_1" onclick="appear1()"><a>Request Money</a>
                    </div>
                </div>
                <div class="tranfer_form_section">
                    <div class="request_form_box-1">
                        <div class="box_content">
                            <div class="reciever_location">
                                <h5>I am in</h5>
                                <div class="location">
                                    <select id="rcountry">
                                        <option value="1"><a>India</a></option>
                                        <option value="2"><a>United States</a></option>
                                        <option value="3"><a>Australia</a></option>
                                        <option value="4"><a>Japan</a></option>
                                        <option value="5"><a>Jerman</a></option>
                                        <option value="6"><a>China</a></option>
                                        <option value="7"><a>Pakistan</a></option>
                                        <option value="8"><a>Africa</a></option>
                                        <option value="9"><a>Bangladesh</a></option>
                                    </select>
                                </div>
                            </div>
                            <div class="sender_location">
                                <h5>My payer is in</h5>
                                <div class="location">
                                    <select id="scountry">
                                        <option value="1"><a>India</a></option>
                                        <option value="2"><a>United States</a></option>
                                        <option value="3"><a>Australia</a></option>
                                        <option value="4"><a>Japan</a></option>
                                        <option value="5"><a>Jerman</a></option>
                                        <option value="6"><a>China</a></option>
                                        <option value="7"><a>Pakistan</a></option>
                                        <option value="8"><a>Africa</a></option>
                                        <option value="9"><a>Bangladesh</a></option>
                                    </select>
                                </div>
                            </div>
                            <div class="input_box">
                                <h5>You Send</h5>
                                <div class="input_box_item">
                                    <div class="input_icon"><i class="fa-solid fa-hand-holding-dollar"></i>
                                    </div>
                                    <input type="text" placeholder="1000">
                                    <div class="currency_type">
                                        <select id="currency">
                                            <option value="1"><a>INR</a></option>
                                            <option value="2"><a>BDT</a></option>
                                            <option value="3"><a>USD</a></option>
                                            <option value="4"><a>AUD</a></option>
                                            <option value="5"><a>GBP</a></option>
                                            <option value="6"><a>NPR</a></option>
                                            <option value="7"><a>NZD</a></option>
                                            <option value="8"><a>PKR</a></option>
                                            <option value="9"><a>TRY</a></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input_box_1">
                                <h5>Request From</h5>
                                <div class="input_box_item">
                                    <input type="text" placeholder="Email ID / Mobile No. / Username">
                                </div>
                            </div>
                            <div class="continue_btn">
                                <button>Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="js/nav.js"></script>
<script src="js/active.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script>
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('white');
        } else {
            $('nav').removeClass('white');
        }
    })
</script>




</html>
