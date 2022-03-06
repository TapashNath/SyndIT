<!DOCTYPE html>
<html lang="en">
    @php
$subname = ' Account';
@endphp
@include('frontend.common.header')


<body>
    <div class="wrapper" id="wrap">
        <div class="overlay_wrap"></div>
        <div class="account_page">
            <!-- navbar -->
            @include('frontend.common.nabbar')
            <!-- page nav -->
            <div class="page_nav">
                <div class="side_profile_indct" onclick="active_side_profile()">
                    <a href="#"><i class="fa-solid fa-table-list"></i></a>
                </div>

                <div class="account_body_indicator">
                    <a href="#" class="active" id="acc_ind" onclick="accountact()">Account</a>
                    <a href="#" id="secure_ind" onclick="securityact()">Security</a>
                    <a href="#" id="dash_ind" onclick="dashboardact()">Dashboard</a>
                </div>

                <div class="indicator_active" onclick="active_sec_nav()">
                    <a href="#">
                        <i class="fa-solid fa-angle-left"></i>
                    </a>
                </div>


            </div>

            <div class="account_body">


                <div class="body_left">
                    <div class="profile_img_section">
                        <div class="profile_image">
                            <div class="image"><img src="{{asset('frontend/img/profile5.jpg')}}" alt=""></div>
                            <a href="#"><i class="fa-solid fa-camera"></i></a>
                        </div>
                        <h3>Hello, Smith Rhodes</h3>
                        <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                    <div class="account_balance">
                        <div class="top">
                            <div class="icon"><i class="fa-solid fa-wallet"></i></div>
                            <h1>$2956.00</h1>
                            <p>Available Balance</p>
                        </div>
                        <div class="bottom">
                            <div class="withdraw"><a href="#">Withdraw</a></div>
                            <div class="Deposite"><a href="#">Deposite</a></div>
                        </div>

                    </div>
                    <div class="help_section">
                        <div class="icon"><i class="fa-solid fa-comments-dollar"></i></div>
                        <h2>Need Help?</h2>
                        <p>Have questions or concerns regarding your account?</p>
                        <button>Chat with Us</button>
                    </div>
                </div>
                <div class="body_right">
                    <div class="profile_page active" id="profile_slide">
                        <div class="page_content">
                            <div class="profile_details_box">
                                <div class="top">
                                    <h3>Personal Details</h3>
                                    <div class="edit" onclick="togglepersonal() "><a href="#"><i
                                                class="fa-solid fa-pen-to-square"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Name:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>Smith Rodes</p>
                                        </div>
                                    </div>
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Date of Birth:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>12-09-1982</p>
                                        </div>
                                    </div>
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Address:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>4th Floor, Plot No.22, Above Public Park, 145 Murphy Canyon Rd, Suite
                                                100-18, <br> San Ditego, <br> California - 22434, <br> United States.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile_details_box">
                                <div class="top">
                                    <h3>Account Settings</h3>
                                    <div class="edit" onclick="toggleaccount() "><a href="#"><i
                                                class="fa-solid fa-pen-to-square"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Language:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>English (United States)</p>
                                        </div>
                                    </div>
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Time Zone:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>(GMT-06:00) Central America</p>
                                        </div>
                                    </div>
                                    <div class="detail_box" style="align-items: center;">
                                        <div class="head">
                                            <h4>Account Status:</h4>
                                        </div>
                                        <div class="your_input">
                                            <a href="#"><i class="fa-solid fa-circle-check"></i>Active</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile_details_box">
                                <div class="top">
                                    <h3>Email Addresses</h3>
                                    <div class="edit" onclick="togglemail() "><a href="#"><i
                                                class="fa-solid fa-pen-to-square"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Email ID:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>demo1122345@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Alternate Email ID:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>demo2786538@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile_details_box">
                                <div class="top">
                                    <h3>Phone Numbers</h3>
                                    <div class="edit" onclick="togglemobile() "><a href="#"><i
                                                class="fa-solid fa-pen-to-square"></i>Edit</a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Mobile No:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>+91 1324657855</p>
                                        </div>
                                    </div>
                                    <div class="detail_box">
                                        <div class="head">
                                            <h4>Alternate Mobile No:</h4>
                                        </div>
                                        <div class="your_input">
                                            <p>+0 2581473694</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="security_page" id="security_slide">
                        <div class="page_content">
                            <div class="security_details_box">
                                <div class="top">
                                    <h3>Password</h3>
                                    <div class="change" onclick="togglepassword() "><a href="#"><i
                                                class="fa-solid fa-pen-to-square"></i>Change</a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <p>Create or update your password - <span>Last changed: 15 March, 2021</span></p>
                                </div>
                            </div>
                            <div class="security_details_box">
                                <div class="top">
                                    <h3>Security Questions</h3>
                                    <div class="change"><a href="#"><i
                                                class="fa-solid fa-pen-to-square"></i>Change</a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <p>For your protection, please choose 3 security questions. This way, we can verify
                                        it’s really you if there’s ever a doubt.</p>
                                </div>
                            </div>
                            <div class="security_details_box">
                                <div class="top">
                                    <h3>2-Step Verification</h3>
                                    <div class="change"><a href="#"><i
                                                class="fa-solid fa-screwdriver-wrench"></i>Setup</a></div>
                                </div>
                                <div class="bottom">
                                    <p>Add an extra layer of security to your account by using a one-time security code
                                        in addition to your password each time you log in.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard_page" id="dashboard_slide">
                        <div class="page_content">
                            <div class="dashboard_details_box">
                                <div class="top">
                                    <h3>Profile Completeness</h3>
                                    <a href="#">50%</a>
                                </div>
                                <div class="bottom">
                                    <div class="add_box_section">
                                        <div class="add_box" id="mobile_add" onclick="mobactive()">
                                            <div class="box_item">
                                                <div class="icon"><i
                                                        class="fa-solid fa-mobile-screen-button"></i></div>
                                                <div class="check"><i class="fa-solid fa-circle-check"></i>
                                                </div>
                                                <div class="add_status">
                                                    <a href="#">Add Mobile</a>
                                                    <a href="#">Mobile Added</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add_box" id="email_add" onclick="emailactive()">
                                            <div class="box_item">
                                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                                                <div class="check"><i class="fa-solid fa-circle-check"></i>
                                                </div>
                                                <div class="add_status">
                                                    <a href="#">Add Email</a>
                                                    <a href="#">Mobile Added</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add_box">
                                            <div class="box_item">
                                                <div class="icon"><i class="fa-solid fa-credit-card"></i>
                                                </div>
                                                <div class="check"><i class="fa-solid fa-circle-check"></i>
                                                </div>
                                                <div class="add_status_1">
                                                    <a href="#">Add Card</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add_box" id="mobile_add">
                                            <div class="box_item">
                                                <div class="icon"><i
                                                        class="fa-solid fa-building-columns"></i></div>
                                                <div class="check"><i class="fa-solid fa-circle-check"></i>
                                                </div>
                                                <div class="add_status_1">
                                                    <a href="#">Add Bank Account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard_details_box">
                                <div class="normal_view">
                                    <div class="top" style="border-bottom: none;">
                                        <h3>Recent Activity</h3>
                                    </div>
                                    <div class="heading_panel">
                                        <div class="date">
                                            <p>Date</p>
                                        </div>
                                        <div class="desp">
                                            <p>Description</p>
                                        </div>
                                        <div class="status">
                                            <p>Status</p>
                                        </div>
                                        <div class="amount">
                                            <p>Amount</p>
                                        </div>
                                    </div>
                                    <div class="transaction_box">
                                        <div class="date">
                                            <a>16</a>
                                            <p>APR</p>
                                        </div>
                                        <div class="desp">
                                            <a>HDFC Bank</a>
                                            <p>Withdraw to Bank account</p>
                                        </div>
                                        <div class="status">
                                            <i class="fa-solid fa-ellipsis" style="color: #ffc107;"></i>
                                        </div>
                                        <div class="amount">
                                            <h4>- $562<span>(USD)</span></h4>
                                        </div>
                                    </div>
                                    <div class="transaction_box">
                                        <div class="date">
                                            <a>16</a>
                                            <p>MAR</p>
                                        </div>
                                        <div class="desp">
                                            <a>Envato Pvt. Ltd.</a>
                                            <p>Payment Received</p>
                                        </div>
                                        <div class="status">
                                            <i class="fa-solid fa-circle-check" style="color: #28a745;"></i>
                                        </div>
                                        <div class="amount">
                                            <h4>+ $450<span>(USD)</span></h4>
                                        </div>
                                    </div>
                                    <div class="transaction_box">
                                        <div class="date">
                                            <a>24</a>
                                            <p>FEB</p>
                                        </div>
                                        <div class="desp">
                                            <a>HDFC Bank</a>
                                            <p>Refund</p>
                                        </div>
                                        <div class="status">
                                            <i class="fa-solid fa-circle-check" style="color: #28a745;"></i>
                                        </div>
                                        <div class="amount">
                                            <h4>+ $62<span>(USD)</span></h4>
                                        </div>
                                    </div>
                                    <div class="transaction_box">
                                        <div class="date">
                                            <a>16</a>
                                            <p>JAN</p>
                                        </div>
                                        <div class="desp">
                                            <a>Patrick Cary</a>
                                            <p>Payment Sent</p>
                                        </div>
                                        <div class="status">
                                            <i class="fa-solid fa-circle-xmark" style="color: #dc3545;"></i>
                                        </div>
                                        <div class="amount">
                                            <h4>- $62<span>(USD)</span></h4>
                                        </div>
                                    </div>
                                    <div class="view_btn">
                                        <a href="#">View all<i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="responsive_view">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="top" style="border-bottom: none;">
                                                    <h3>Recent Activity</h3>
                                                </div>
                                                <div class="heading_panel">
                                                    <div class="date">
                                                        <p>Date</p>
                                                    </div>
                                                    <div class="desp">
                                                        <p>Description</p>
                                                    </div>
                                                    <div class="status">
                                                        <p>Status</p>
                                                    </div>
                                                    <div class="amount">
                                                        <p>Amount</p>
                                                    </div>
                                                </div>
                                                <div class="transaction_box">
                                                    <div class="date">
                                                        <a>16</a>
                                                        <p>APR</p>
                                                    </div>
                                                    <div class="desp">
                                                        <a>HDFC Bank</a>
                                                        <p>Withdraw to Bank account</p>
                                                    </div>
                                                    <div class="status">
                                                        <i class="fa-solid fa-ellipsis" style="color: #ffc107;"></i>
                                                    </div>
                                                    <div class="amount">
                                                        <h4>- $562<span>(USD)</span></h4>
                                                    </div>
                                                </div>
                                                <div class="transaction_box">
                                                    <div class="date">
                                                        <a>16</a>
                                                        <p>MAR</p>
                                                    </div>
                                                    <div class="desp">
                                                        <a>Envato Pvt. Ltd.</a>
                                                        <p>Payment Received</p>
                                                    </div>
                                                    <div class="status">
                                                        <i class="fa-solid fa-circle-check"
                                                            style="color: #28a745;"></i>
                                                    </div>
                                                    <div class="amount">
                                                        <h4>+ $450<span>(USD)</span></h4>
                                                    </div>
                                                </div>
                                                <div class="transaction_box">
                                                    <div class="date">
                                                        <a>24</a>
                                                        <p>FEB</p>
                                                    </div>
                                                    <div class="desp">
                                                        <a>HDFC Bank</a>
                                                        <p>Refund</p>
                                                    </div>
                                                    <div class="status">
                                                        <i class="fa-solid fa-circle-check"
                                                            style="color: #28a745;"></i>
                                                    </div>
                                                    <div class="amount">
                                                        <h4>+ $62<span>(USD)</span></h4>
                                                    </div>
                                                </div>
                                                <div class="transaction_box">
                                                    <div class="date">
                                                        <a>16</a>
                                                        <p>JAN</p>
                                                    </div>
                                                    <div class="desp">
                                                        <a>Patrick Cary</a>
                                                        <p>Payment Sent</p>
                                                    </div>
                                                    <div class="status">
                                                        <i class="fa-solid fa-circle-xmark"
                                                            style="color: #dc3545;"></i>
                                                    </div>
                                                    <div class="amount">
                                                        <h4>- $62<span>(USD)</span></h4>
                                                    </div>
                                                </div>
                                                <div class="view_btn">
                                                    <a href="#">View all<i class="fa-solid fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>


        <div class="side_profile">
            <div class="side_content">
                <div class="profile_img_section">
                    <div class="profile_image">
                        <div class="image"><img src="{{asset('frontend/img/profile5.jpg')}}" alt=""></div>
                        <a href="#"><i class="fa-solid fa-camera"></i></a>
                    </div>
                    <h3>Hello, Smith Rhodes</h3>
                    <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
                <div class="account_balance">
                    <div class="top">
                        <div class="icon"><i class="fa-solid fa-wallet"></i></div>
                        <h1>$2956.00</h1>
                        <p>Available Balance</p>
                    </div>
                    <div class="bottom">
                        <!-- <div class="withdraw"><a href="#">Withdraw</a></div>
                        <div class="Deposite"><a href="#">Deposite</a></div> -->
                    </div>

                </div>
                <div class="help_section">
                    <div class="icon"><i class="fa-solid fa-comments-dollar"></i></div>
                    <h2>Need Help?</h2>
                    <p>Have questions or concerns regarding your account?</p>
                    <button>Chat with Us</button>
                </div>
                <div class="close_side" onclick="active_side_profile()">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
            </div>
        </div>

    </div>

    <!-- personal details popup  -->

    <div class="personal_details_popup" id="personal">
        <div class="details_content">
            <div class="top">
                <h3>Your Details</h3>
                <a href="#" onclick="togglepersonal() "><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="form_section">
                <div class="input_box">
                    <h5>Your Name</h5>
                    <input type="text" placeholder="Your Full Name">
                </div>
                <div class="input_box">
                    <h5>Date of Birth</h5>
                    <input type="text" placeholder="Your Full Name">
                </div>
                <div class="input_box">
                    <h5>Address</h5>
                    <textarea placeholder="Your Address"></textarea>
                </div>
                <button>Save</button>
            </div>
        </div>
    </div>


    <!-- account setting popup  -->

    <div class="account_setting_popup" id="account_pop">
        <div class="details_content">
            <div class="top">
                <h3>Your Account</h3>
                <a href="#" onclick="toggleaccount() "><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="form_section">
                <div class="input_box">
                    <h5>Your Name</h5>
                    <div class="language_type">
                        <select id="language">
                            <option value="1">English(USA)</option>
                            <option value="1">English(UK)</option>
                            <option value="1">English(India)</option>
                            <option value="1">Hindi</option>
                            <option value="1">Bengali</option>
                        </select>
                    </div>
                </div>
                <div class="input_box">
                    <h5>Date of Birth</h5>
                    <div class="time_type">
                        <select id="time">
                            <option value="1">GMT(+5.50hrs)</option>
                            <option value="1">GMT(+4.50hrs)</option>
                            <option value="1">GMT(+3.50hrs)</option>
                            <option value="1">GMT(+2.50hrs)</option>
                            <option value="1">GMT(-2.50hrs)</option>
                        </select>
                    </div>
                </div>
                <button>Save</button>
            </div>
        </div>
    </div>


    <!-- email address popup  -->

    <div class="email_form_popup" id="email_pop">
        <div class="details_content">
            <div class="top">
                <h3>Your Email ID</h3>
                <a href="#" onclick="togglemail() "><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="form_section">
                <div class="input_box">
                    <h5>Your Email ID</h5>
                    <input type="text" placeholder="Your Email ID">
                </div>
                <div class="input_box">
                    <h5>Alternate Email ID</h5>
                    <input type="text" placeholder="Alternate Mail ID">
                </div>
                <button>Save</button>
            </div>
        </div>
    </div>


    <!-- phone number popup  -->

    <div class="mobile_form_popup" id="mobile_pop">
        <div class="details_content">
            <div class="top">
                <h3>Your Mobile No.</h3>
                <a href="#" onclick="togglemobile() "><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="form_section">
                <div class="input_box">
                    <h5>Your Mobie No.</h5>
                    <input type="text" placeholder="Your Mobile No">
                </div>
                <div class="input_box">
                    <h5>Alternate Mobie No.</h5>
                    <input type="text" placeholder="Alternate Mobie No.">
                </div>
                <button>Save</button>
            </div>
        </div>
    </div>


    <!-- password popup  -->

    <div class="password_form_popup" id="password_pop">
        <div class="details_content">
            <div class="top">
                <h3>Change Your Password</h3>
                <a href="#" onclick="togglepassword() "><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="form_section">
                <div class="input_box">
                    <h5>Current Password</h5>
                    <input type="password" placeholder="Enter your current password">
                </div>
                <div class="input_box">
                    <h5>New Password</h5>
                    <input type="password" placeholder="Choose a Password">
                </div>
                <div class="input_box">
                    <h5>Confirm Password</h5>
                    <input type="password" placeholder="Confirm New Password">
                </div>
                <button>Save Changes</button>
            </div>
        </div>
    </div>





</body>
<script src="{{ asset('frontend/js/nav.js') }}"></script>
<script src="{{ asset('frontend/js/active.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        spaceBetween: 30,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

</html>
