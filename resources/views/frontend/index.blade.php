<!DOCTYPE html>
<html lang="en">
@php
$subname = ' Wellcome';
@endphp
@include('frontend.common.header')


<body>
    <div class="wrapper" id="wrap">
        <div class="home_page">
            @include('frontend.common.nabbar')
            <!-- banner -->
            <div class="banner">
                <div class="overlay"></div>
                <div class="banner_content">
                    <div class="content_left" id="banner_left">
                        <h1>Trusted by more than 50,000 company worlwide</h1>
                        <h3>Send & Receive Money</h3>
                        <div class="banner_btns">
                            <a href="#" onclick="appear()">Get started for free</a>
                            <a href="#">Open a Free Account</a>
                        </div>
                    </div>
                    <div class="content_right" id="banner_right">
                        <div class="transfer_form">
                            <div class="form_close" onclick="disappear()">Close<i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="type_indicator">
                                <div class="send_indicate active" id="indicator_1" onclick="appear1()"><a>Send Money</a>
                                </div>
                                <div class="request_indicate" id="indicator_2" onclick="appear2()"><a>Request Money</a>
                                </div>
                            </div>
                            <div class="tranfer_slide_section">
                                <div class="send_form_box active" id="send_form">
                                    <div class="box_content">
                                        <div class="input_box">
                                            <h5>You Send</h5>
                                            <div class="input_box_item">
                                                <div class="input_icon"><i
                                                        class="fa-solid fa-hand-holding-dollar"></i>
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
                                                <div class="input_icon"><i
                                                        class="fa-solid fa-filter-circle-dollar"></i>
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
                                <div class="request_form_box" id="request_form">
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
                                                <div class="input_icon"><i
                                                        class="fa-solid fa-hand-holding-dollar"></i>
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
            </div>
            <!-- choise section -->
            <div class="choise">
                <div class="choise_content">
                    <h1>Why should you choose us?</h1>
                    <p>Here's Top 4 reasons why using cashapp account for manage your money.</p>
                    <div class="choisebox_section">
                        <div class="choise_box">
                            <div class="box_item">
                                <div class="item_icon"><i class="fa-solid fa-handshake"></i></div>
                                <h3>Easy to use</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequuntur
                                    consectetur autem explicabo accusantium similique, </p>
                                <a href="#">Learn more<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="choise_box">
                            <div class="box_item">
                                <div class="item_icon"><i class="fa-solid fa-credit-card"></i></div>
                                <h3>Faster Payments</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequuntur
                                    consectetur autem explicabo accusantium similique, </p>
                                <a href="#">Learn more<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="choise_box">
                            <div class="box_item">
                                <div class="item_icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                                <h3>Lower Fees</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequuntur
                                    consectetur autem explicabo accusantium similique, </p>
                                <a href="#">Learn more<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="choise_box">
                            <div class="box_item">
                                <div class="item_icon"><i class="fa-solid fa-lock"></i></div>
                                <h3>100% secure</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequuntur
                                    consectetur autem explicabo accusantium similique, </p>
                                <a href="#">Learn more<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- payment solution -->
            <div class="payment_solution">
                <div class="solution_content">
                    <div class="left_side">
                        <h1>Payment Solution for everyone</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus iusto corrupti, ea, porro iste
                            est, repellendus blanditiis quis magnam voluptate aut laboriosam voluptates reprehenderit
                            quae? Voluptate quo, inventore deleniti ipsum praesentium </p>
                        <a href="#">Find more solution<i class="fa-solid fa-angles-right"></i></a>
                    </div>
                    <div class="right_side">
                        <div class="image_box_section">
                            <div class="demo_box_1">
                                <div class="box_inside"></div>
                            </div>
                            <div class="demo_box_2">
                                <div class="box_inside"></div>
                            </div>
                            <div class="demo_box_3">
                                <div class="box_inside"></div>
                            </div>
                            <div class="image_box"><img src="{{asset('frontend/img/payment.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- funtion -->
            <div class="funtion">
                <div class="funtion_content">
                    <h1>What can you do with Syndit?</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus atque rem </p>
                    <div class="function_box_section">
                        <div class="funtion_box">
                            <div class="box_item">
                                <div class="box_icon"><img src="{{asset('frontend/img/send.svg')}}" alt=""></div>
                                <div class="box_bottom"><a href="#">Send Money</a></div>
                            </div>
                        </div>
                        <div class="funtion_box">
                            <div class="box_item">
                                <div class="box_icon"><img src="{{asset('frontend/img/receive.svg')}}" alt=""></div>
                                <div class="box_bottom"><a href="#">Receive Money</a></div>
                            </div>
                        </div>
                        <div class="funtion_box">
                            <div class="box_item">
                                <div class="box_icon"><img src="{{asset('frontend/img/transfer.svg')}}" alt=""></div>
                                <div class="box_bottom"><a href="#">Pay a Friend</a></div>
                            </div>
                        </div>
                        <div class="funtion_box">
                            <div class="box_item">
                                <div class="box_icon"><img src="{{asset('frontend/img/shopping.svg')}}" alt=""></div>
                                <div class="box_bottom"><a href="#">Online Shopping</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="see_more"><a href="#">See more<i class="fa-solid fa-angles-right"></i></a></div>
                </div>
            </div>
            <!-- work function -->
            <div class="work">
                <div class="overlay"></div>
                <div class="work_content">
                    <h1>How does it work?</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur exercitationem excepturi
                        pariatur blanditiis odit, ducimus, labore molestias asperiores similique sapiente animi, eveniet
                        ipsa voluptate ipsum?</p>
                    <div class="work_box_section">
                        <div class="work_box">
                            <div class="box_item">
                                <div class="box_icon"><i class="fa-solid fa-door-open"></i></div>
                                <h3>Register / Login To Our Platform</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet omnis accusamus
                                    architecto, minima eaque et perferendis </p>
                            </div>
                        </div>
                        <div class="work_box">
                            <div class="box_item">
                                <div class="box_icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                                <h3>Manage Your Payments</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet omnis accusamus
                                    architecto, minima eaque et perferendis </p>
                            </div>
                        </div>
                        <div class="work_box">
                            <div class="box_item">
                                <div class="box_icon"><i class="fa-solid fa-comments-dollar"></i></div>
                                <h3>Transfer to Local Bank Account</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet omnis accusamus
                                    architecto, minima eaque et perferendis </p>
                            </div>
                        </div>
                    </div>
                    <div class="open_btn"><a href="#">Open a Free Account</a></div>
                </div>
            </div>

            <!-- customer review -->

            <div class="review">
                <div class="review_content">
                    <h1>What people are saying about Syndit</h1>
                    <p>A payments experience people love to talk about</p>
                    <div class="review_section">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="review_box">
                                        <div class="icon"><i class="fa-solid fa-quote-right"></i></div>
                                        <div class="reviewer_img"><img src="{{asset('frontend/img/profile 1.jpg')}}" alt=""></div>
                                        <div class="review_feedback">
                                            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis,
                                                dignissimos animi ab voluptatum a molestias ipsam tempora saepe facilis
                                                perspiciatis et ex fugiat asperiores officiis eaque veritatis maiores,
                                                cumque adipisci."</p>
                                        </div>
                                        <div class="reviewer_details">
                                            <h3>Herry Poter</h3>
                                            <a>Freelancer from USA</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="review_box">
                                        <div class="icon"><i class="fa-solid fa-quote-right"></i></div>
                                        <div class="reviewer_img"><img src="{{asset('frontend/img/profile 2.jpg')}}" alt=""></div>
                                        <div class="review_feedback">
                                            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis,
                                                dignissimos animi ab voluptatum a molestias ipsam tempora saepe facilis
                                                perspiciatis et ex fugiat asperiores officiis eaque veritatis maiores,
                                                cumque adipisci."</p>
                                        </div>
                                        <div class="reviewer_details">
                                            <h3>Jully Sc</h3>
                                            <a>User from Australia</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="review_box">
                                        <div class="icon"><i class="fa-solid fa-quote-right"></i></div>
                                        <div class="reviewer_img"><img src="{{asset('frontend/img/profile 3.jpg')}}" alt=""></div>
                                        <div class="review_feedback">
                                            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis,
                                                dignissimos animi ab voluptatum a molestias ipsam tempora saepe facilis
                                                perspiciatis et ex fugiat asperiores officiis eaque veritatis maiores,
                                                cumque adipisci."</p>
                                        </div>
                                        <div class="reviewer_details">
                                            <h3>Paul Walker</h3>
                                            <a>Freelancer from Canada</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="review_box">
                                        <div class="icon"><i class="fa-solid fa-quote-right"></i></div>
                                        <div class="reviewer_img"><img src="{{asset('frontend/img/profile 1.jpg')}}" alt=""></div>
                                        <div class="review_feedback">
                                            <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis,
                                                dignissimos animi ab voluptatum a molestias ipsam tempora saepe facilis
                                                perspiciatis et ex fugiat asperiores officiis eaque veritatis maiores,
                                                cumque adipisci."</p>
                                        </div>
                                        <div class="reviewer_details">
                                            <h3>Herry Poter</h3>
                                            <a>Freelancer from USA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination" style="margin-top: 30px; position: relative; "></div>
                        </div>
                        <div class="swiper-button-next" style="width: 45px; height: 45px;"><i
                                class="fa-solid fa-chevron-right"></i></div>
                        <div class="swiper-button-prev" style="width: 45px; height: 45px;"><i
                                class="fa-solid fa-chevron-left"></i></div>
                    </div>
                    <div class="review_more"><a href="#">See more people review<i
                                class="fa-solid fa-angles-right"></i></a></div>
                </div>
            </div>

            <!-- customer support -->

            <div class="support">
                <div class="overlay"></div>
                <div class="support_content">
                    <h1>Awesome Customer Support</h1>
                    <p>Have you any query? Don't worry. We have great people ready to help you whenever you need it.</p>
                    <div class="find_button"><a href="#">Find out more</a></div>
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
                            <a href="{{route('about')}}">About Us</a>
                            <a href="{{route('account')}}">Support</a>
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

        <div class="bottom_to_top_button"><a href="#"><i class="fa-solid fa-arrow-up"></i></a></div>

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
<script src="{{ asset('frontend/js/nav.js') }}"></script>
<script src="{{ asset('frontend/js/active.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://kit.fontawesome.com/42fd393a18.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('white');
        } else {
            $('nav').removeClass('white');
        }
    })
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,
        grabCursor: true,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

</html>
