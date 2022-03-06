   const ind1 = document.getElementById('indicator_1');
   const ind2 = document.getElementById('indicator_2');
   const s1 = document.getElementById('send_form');
   const s2 = document.getElementById('request_form');

   function appear1() {
       ind1.classList.add('active');
       ind2.classList.remove('active');
       s1.classList.add('active');
       s2.classList.remove('active');
   }

   function appear2() {
       ind1.classList.remove('active');
       ind2.classList.add('active');
       s1.classList.remove('active');
       s2.classList.add('active');
   }



   const part1 = document.getElementById('banner_left');
   const part2 = document.getElementById('banner_right');

   function appear() {
       part1.classList.add('active');
       part2.classList.add('active');
   }

   function disappear() {
       part1.classList.remove('active');
       part2.classList.remove('active');
   }




  function signupregister() 
  {
      const signup = document.querySelector('.login_register');
      signup.classList.toggle('active');
  }


// =========== FAQ ============

    const f1 =  document.getElementById('faq_1');
    const f2 =  document.getElementById('faq_2');
    const f3 =  document.getElementById('faq_3');
    const f4 =  document.getElementById('faq_4');
    const f5 =  document.getElementById('faq_5');
    const f6 =  document.getElementById('faq_6');
    const f7 =  document.getElementById('faq_7');
    const f8 =  document.getElementById('faq_8');
    const f9 =  document.getElementById('faq_9');
    const f10 =  document.getElementById('faq_10');


    function faq1() {
        f1.classList.toggle('active');
    }
    function faq2() {
        f2.classList.toggle('active');
    }
    function faq3() {
        f3.classList.toggle('active');
    }
    function faq4() {
        f4.classList.toggle('active');
    }
    function faq5() {
        f5.classList.toggle('active');
    }
    function faq6() {
        f6.classList.toggle('active');
    }
    function faq7() {
        f7.classList.toggle('active');
    }
    function faq8() {
        f8.classList.toggle('active');
    }
    function faq9() {
        f9.classList.toggle('active');
    }
    function faq10() {
        f10.classList.toggle('active');
    }



    // dashboard

    const act1 =  document.getElementById('mobile_add');
    const act2 =  document.getElementById('email_add');

    function mobactive()
    {
        act1.classList.toggle('active');
    }
    function emailactive()
    {
        act2.classList.toggle('active');
    }


    // account

    const aslide = document.getElementById('profile_slide');
    const sslide = document.getElementById('security_slide');
    const dslide = document.getElementById('dashboard_slide');
    const aind = document.getElementById('acc_ind');
    const sind = document.getElementById('secure_ind');
    const dind = document.getElementById('dash_ind');

    function accountact() {
        aslide.classList.add('active');
        aind.classList.add('active');
        sslide.classList.remove('active');
        sind.classList.remove('active');
        dslide.classList.remove('active');
        dind.classList.remove('active');
    }
    
    function securityact() {
        aslide.classList.remove('active');
        aind.classList.remove('active');
        sslide.classList.add('active');
        sind.classList.add('active');
        dslide.classList.remove('active');
        dind.classList.remove('active');
    }

    function dashboardact() {
        aslide.classList.remove('active');
        aind.classList.remove('active');
        sslide.classList.remove('active');
        sind.classList.remove('active');
        dslide.classList.add('active');
        dind.classList.add('active');
    }


    // side profile 

    const sideprof = document.querySelector('.side_profile');
    const over = document.querySelector('.overlay_wrap');

    function active_side_profile()
    {
        sideprof.classList.toggle('active');
        over.classList.toggle('active');
    }


    
    const sec_nav = document.querySelector('.page_nav');

    function active_sec_nav() 
    {
        sec_nav.classList.toggle('active');
    }


    // send receive form 

    const send_form = document.getElementById('send_popup');
    const blur = document.getElementById('wrap');

    function appear_send_form()
    {
        blur.classList.toggle('active');
        send_form.classList.toggle('active');
    }

    const request_form = document.getElementById('receive_popup');

    function appear_request_form()
    {
        blur.classList.toggle('active');
        request_form.classList.toggle('active');
    }



    // account popups

    var blur1 = document.getElementById('wrap');
    var personal_form = document.getElementById('personal');
    var account_form = document.getElementById('account_pop');
    var mail_form = document.getElementById('email_pop');
    var mobile_form = document.getElementById('mobile_pop');
    var password_form = document.getElementById('password_pop');

    function togglepersonal() 
    {
        blur1.classList.toggle('active');
        personal_form.classList.toggle('active');
    }

    function toggleaccount() 
    {
        blur1.classList.toggle('active');
        account_form.classList.toggle('active');
    }

    function togglemail() 
    {
        blur1.classList.toggle('active');
        mail_form.classList.toggle('active');
    }

    function togglemobile() 
    {
        blur1.classList.toggle('active');
        mobile_form.classList.toggle('active');
    }

    function togglepassword() 
    {
        blur1.classList.toggle('active');
        password_form.classList.toggle('active');
    }