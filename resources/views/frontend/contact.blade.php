<!DOCTYPE html>
<html lang="en">
@php
    $subname = " Support";
@endphp

@include('frontend.common.header')

<body>
    <div class="wrapper" id="wrap">
        <div class="contact_page">
            <!-- navbar -->
            @include('frontend.common.nabbar')
            <!-- contact banner -->

            <div class="contact_banner">
                <h1>Support</h1>
                <div class="input_search">
                    <input type="text" placeholder="Search for answer...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            <!-- contact option -->

            <div class="contact_options">
                <div class="options_content">
                    <div class="option_box">
                        <div class="box_item">
                            <div class="item_icon"><i class="fa-solid fa-location-dot"></i></div>
                            <h2>SyndIT.io </h2>
                            <p>4th Floor, Plot No.22, Above Public Park <br>145 Murphy Canyon Rd. <br>Suite 100-18
                                <br>San Diego CA 2028
                            </p>
                        </div>
                    </div>
                    <div class="option_box">
                        <div class="box_item">
                            <div class="item_icon"><i class="fa-solid fa-phone"></i></div>
                            <h2>Telephone </h2>
                            <p>(+91) 1234567894 <br> (+91) 7894561562</p>
                        </div>
                    </div>
                    <div class="option_box">
                        <div class="box_item">
                            <div class="item_icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                            <h2>Business Enquiries</h2>
                            <p>info@syndot.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- contact form -->

            <div class="contact_form">
                <div class="overlay"></div>
                <div class="form_content">
                    <h1>Get In Touch</h1>
                    <div class="form_box">
                        <form>
                            <div class="inputBox_1">
                                <input type="text" name=" " required="required">
                                <span>Name</span>
                            </div>
                            <div class="inputBox_1">
                                <input type="text" name=" " required="required">
                                <span>Email</span>
                            </div>
                            <div class="inputBox_2">
                                <input type="text" name=" " required="required">
                                <span>Subject</span>
                            </div>
                            <div class="inputBox_2">
                                <textarea required="required"></textarea>
                                <span>Message</span>
                            </div>
                            <button>Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- help type -->

            <div class="help_type">
                <div class="help_content">
                    <div class="type_box">
                        <div class="box_item">
                            <i class="fa-solid fa-circle-user"></i>
                            <h3>My Account</h3>
                            <a href="#">See articles<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="type_box">
                        <div class="box_item">
                            <i class="fa-solid fa-money-bill-wave"></i>
                            <h3>Payment</h3>
                            <a href="#">See articles<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="type_box">
                        <div class="box_item">
                            <i class="fa-solid fa-shield"></i>
                            <h3>Security</h3>
                            <a href="#">See articles<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="type_box">
                        <div class="box_item">
                            <i class="fa-solid fa-credit-card"></i>
                            <h3>Payment Methods</h3>
                            <a href="#">See articles<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- faq -->

            <div class="faq_section">
                <div class="faq_content">
                    <h1>What can you do with Syndit?</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit </p>
                    <div class="faq_box_section">
                        <div class="left_side">
                            <div class="faq_box" id="faq_1" onclick="faq1()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>I forgot the password for my account.</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_2" onclick="faq2()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_3" onclick="faq3()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_4" onclick="faq4()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_5" onclick="faq5()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right_side">
                            <div class="faq_box" id="faq_6" onclick="faq6()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_7" onclick="faq7()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_8" onclick="faq8()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_9" onclick="faq9()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq_box" id="faq_10" onclick="faq10()">
                                <div class="faq_item">
                                    <div class="faq_question">
                                        <h2>How can I view my payment history?</h2>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <div class="faq_answer">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, odit
                                            aliquid et quaerat sit perspiciatis unde molestiae beatae ab necessitatibus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- app download -->

            <div class="download">
                <div class="download_content">
                    <h1>Get the app</h1>
                    <p>Download our app for the fastest, most convenient way to send & get Payment.</p>
                    <div class="option_section">
                        <div class="apple_store">
                            <a href="#"><img src="{{asset('frontend/img/apple store.png')}}" alt=""></a>
                        </div>
                        <div class="google_store">
                            <a href="#"><img src="{{asset('frontend/img/google play.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer -->

            <div class="footer">
                <div class="footer_content">
                    <div class="footer_top">
                        <div class="page_navigator">
                            <a href="#">About Us</a>
                            <a href="#">Support</a>
                            <a href="#">Help</a>
                            <a href="#">Careers</a>
                            <a href="#">Fees</a>
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
<script src="{{ asset('js/nav.js') }}"></script>
<script src="{{ asset('js/active.js') }}"></script>
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
