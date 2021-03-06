@extends('Frontend/App/layout')
@section('user_layout')

	<!-- Hero -->
    <section class="hero hero--tutor">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <div class="hero--inner">
                        <h2>Join the fastest growing
                            Community of tutors 
                            in Ghana</h2>
                        <button class="btn btn-green" data-toggle="modal" data-target="#loginmodel">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it work -->
    <section class="how_works how_works--bg-gray how_works--padding">
        <span class="shape-1"><img src="public/assets/frontend/images/how-works/line.svg" alt="line.svg"></span>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section__head text-center">
                        <h3>How Our App Works  </h3>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="public/assets/frontend/images/how-works/wallet.svg" alt="wallet">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Sign up and create a free tutor profile</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="public/assets/frontend/images/how-works/clock.svg" alt="clock">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Answer enquiries from student to 
                                arrange lessons</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="public/assets/frontend/images/how-works/monitor.svg" alt="monitor">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Teach, according to agreed format 
                                and schedule with student</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="public/assets/frontend/images/how-works/sand-clock.svg" alt="sand-clock">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Eureka! Get paid instantly into your 
                                preferred account.</p>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="photGallery">
        <img class="img-big" src="public/assets/frontend/images/photo-gallery-desk.png" alt="photo-gallery-desk.png">
        <img class="img-sm" src="public/assets/frontend/images/photo-gallery-sm.png" alt="photo-gallery-smg">
        <div class="signup_btn">
            <button class="btn btn-yellow" data-toggle="modal" data-target="#signupmodel">Join for free</button>
        </div>
    </section>

    <!-- Box section-->
    <section class="box_section box_section--tutor">
        <span class="shape shape--5"> <img src="public/assets/frontend/images/box-icons/shape-l-1.svg" alt=""> </span>
        <span class="shape shape--6"> <img src="public/assets/frontend/images/box-icons/shape-l-2.svg" alt=""> </span>
        <span class="shape shape--7"> <img src="public/assets/frontend/images/box-icons/shape-l-3.svg" alt=""> </span>
        <span class="shape shape--8"> <img src="public/assets/frontend/images/box-icons/shape-l-4.svg" alt=""> </span>
        <span class="shape shape--9"> <img src="public/assets/frontend/images/box-icons/shape-l-5.svg" alt=""> </span>
        <span class="shape shape--10"> <img src="public/assets/frontend/images/box-icons/shape-l-6.svg" alt=""> </span>
        <span class="shape shape--11"> <img src="public/assets/frontend/images/box-icons/shape-l-7.svg" alt=""> </span>
        <span class="shape shape--12"> <img src="public/assets/frontend/images/box-icons/shape-l-10.svg" alt=""> </span>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section__head text-center">
                        <h3>Be Your Own Boss - Discover Your Potential</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="public/assets/frontend/images/doller.svg" alt="doller">
                        </div>
                        <div class="box_section--card__title">
                            <h3>Work Anywhere</h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p>Thousands of students are looking for great instructors like you on Findatutor360. Work from the comfort of your home or an agreed location, whenever you want, wherever you are.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="public/assets/frontend/images/credit card.svg" alt="doller">
                        </div>
                        <div class="box_section--card__title">
                            <h3>Flexible Schedule  </h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p>Set your work schedule and fees for each subject. Add information that matters ??? qualification, fees, experience etc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="public/assets/frontend/images/security.svg" alt="doller">
                        </div>
                        <div class="box_section--card__title">
                            <h3>Earn Money  </h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p>Earn money while living your passion. 
                                Get paid according to your set duration per course. 
                                You also earn when you post new and 
                                used books.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="public/assets/frontend/images/inspire-student.svg" alt="inspire-student">
                        </div>
                        <div class="box_section--card__title">
                            <h3>Inspire Students</h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p> Help people learn new skills, advance their 
                                careers, and explore their hobbies by 
                                sharing your knowledge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Box section-->
    <section class="small_box_section">
        <span class="shape-2"> <img src="public/assets/frontend/images/box-icons/shape-l-8.svg" alt=""> </span>
        <span class="shape-3"> <img src="public/assets/frontend/images/box-icons/shape-l-9.svg" alt=""> </span>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="section__head text-center">
                        <h3>Why We Know FindATutor360 Is The Best?</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="public/assets/frontend/images/box-icons/profile.svg" alt="profile">
                        </div>
                        
                        <div class="small_box_section--card__desc">
                            <p>It???s completely free to have a profile and gain access to thousands of students who are actively seeking tuition. Our commission system means that we only earn when you do.</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green" data-toggle="modal" data-target="#signupmodel">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="public/assets/frontend/images/box-icons/teaching.svg" alt="teaching">
                        </div>
                        
                        <div class="small_box_section--card__desc">
                            <p>Teach with complete peace of mind, knowing your money is secured and will be paid instantly after completion of tutoring.</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green" data-toggle="modal" data-target="#signupmodel">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="public/assets/frontend/images/box-icons/elearning.svg" alt="elearning">
                        </div>
                       
                        <div class="small_box_section--card__desc">
                            <p>Tools to make your transaction smooth, from teaching online , reviewing students, screen sharing, files & assignment exchanges & video calls.  </p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green" data-toggle="modal" data-target="#signupmodel">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="public/assets/frontend/images/box-icons/sell.svg" alt="sell">
                        </div>
                       
                        <div class="small_box_section--card__desc">
                            <p>You can sell published books, new and used books and make more money in addition to earning from tutoring students via on platform.</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green" data-toggle="modal" data-target="#signupmodel">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="public/assets/frontend/images/box-icons/custom-live.svg" alt="custom-live.svg">
                        </div>
                       
                        <div class="small_box_section--card__desc">
                            <p>Our customer service team is on standby to help you make your time on our platform stress free & a lovely experience .</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green" data-toggle="modal" data-target="#signupmodel">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sign Up -->
    <section class="signUP">
        <span class="shape-1"> <img src="public/assets/frontend/images/circle-big.svg" alt=""> </span>
        <div class="signUP--inner signUP--inner--width">
            <h2>WE ARE HERE TO HELP</h2>
            <h3>Our instructor support staff are on standby whenever you need help. Take advantage of all available channels from our direct lines, WhatsApp, email and resource centre to get in touch. We are too eager to help.</h3>
            <button class="btn btn-green text-uppercase" data-toggle="modal" data-target="#signupmodel">JOIN FOR FREE</button>
        </div>
    </section>

@endsection