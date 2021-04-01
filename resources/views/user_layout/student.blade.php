@extends('user_layout/layout')
@section('user_layout')

	
	 <!-- Hero -->
    <section class="hero hero--student">
        <div class="container-fluid">
            <div class="row justify-content-md-end">
                <div class="col-md-5">
                    <div class="hero--inner">
                        <h3>Ghana's Best Tuition Platform</h3>
                        <h4>Learning now made easy with the Best tutors and Institutes at your door step</h4>
                        <p>With FindaTutor360, which we love to call FAT360, we are here to
                            help you achieve your aspirations. We open a world full of top tutors,
                            institutions, bookstores etc and put the only key in your hands.</p>
                        <button class="btn btn-green">Sign In</button>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it work -->
    <section class="how_works how_works--bg-gray">
        <span class="shape-1"><img src="user_layout/images/how-works/line.svg" alt="line.svg"></span>
        <div class="search-box">
            <input type="text" placeholder="what do you want to learn?">
            <input type="text" placeholder="location">
            <input type="text" placeholder="learning mode">
            <button class="btn"><span>Search</span> <img src="user_layout/images/search-icon.png" alt="search-icon"> </button>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section__head text-center">
                        <h3>How Our App  Works </h3>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/wallet.svg" alt="wallet">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Browse to find tutors or institutions in subject & skill areas needed using the available filters.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/clock.svg" alt="clock">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Choose the tutor or institution
                                that is best for you. You can 
                                also message them directly.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/monitor.svg" alt="monitor">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Flexibly pay for the tuitions and
                                start studying according to
                                your agreed flexible schedule.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/sand-clock.svg" alt="sand-clock">
                        </div>
                        <div class="how_works--card__desc">
                            <p>If you are satisfied please
                                always remember to leave a positive review
                                & ratings.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/box-icons/books.svg" alt="online-learning">
                        </div>
                        <div class="how_works--card__desc">
                            <p>You can also post a
                                book for sale or buy books
                                at the bookstore & earn on the side .</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- motivation -->
    <section class="motivation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="motivation--card">
                        <div class="motivation--card__cover">
                            <img src="user_layout/images/motivations/img-1.png" alt="">
                        </div>
                        <div class="motivation--card__desc">
                            <p>You can enjoy your life better if you had this skill. Well,
                                what are you waiting for? </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="motivation--card">
                        <div class="motivation--card__cover">
                            <img src="user_layout/images/motivations/img-2.png" alt="">
                        </div>
                        <div class="motivation--card__desc">
                            <p>You have put off that hobby for too long.
                                Now you can learn it</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="motivation--card">
                        <div class="motivation--card__cover">
                            <img src="user_layout/images/motivations/img-3.png" alt="">
                        </div>
                        <div class="motivation--card__desc">
                            <p>Your career isn't going anywhere without that course.
                                Quick! connect with the tutor and learn it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Box section-->
    <section class="small_box_section">
        <span class="shape-1"><img src="user_layout/images/box-icons/bg-shape.svg" alt=""></span>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="section__head text-center">
                        <h3>Why  FindATutor360 Is The Best?</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="user_layout/images/box-icons/social-care.svg" alt="social">
                        </div>
                        
                        <div class="small_box_section--card__desc">
                            <p>We offer you the convenience of choosing from an ever growing community of tutors and institutions on everything tuition from skills to subjects to hobbies.</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="user_layout/images/box-icons/video-tutorials.svg" alt="video">
                        </div>
                        
                        <div class="small_box_section--card__desc">
                            <p>You choose your learning mode most convenient to you, from Online to Offline. One-on-one or one-on-many study format , exchange files & assignments or better still share screen with tutor.</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="user_layout/images/box-icons/review.svg" alt="review">
                        </div>
                       
                        <div class="small_box_section--card__desc">
                            <p>We are crazy about your tutor’s accountability & teaching methods, hence we have features such as reviewing your tutors or institutions. Please be candid and score their performance!</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="user_layout/images/box-icons/money.svg" alt="money">
                        </div>
                       
                        <div class="small_box_section--card__desc">
                            <p>We also hold your money intact in our escrow system and we only pay at the end of the session when you are satisfied with the tution received. Wooyaaaah!!! choose findatutor360 today.</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="small_box_section--card">
                        <div class="small_box_section--card__icon">
                            <img src="user_layout/images/box-icons/books.svg" alt="books">
                        </div>
                       
                        <div class="small_box_section--card__desc">
                            <p>While you study with us, you can also teach a skill or sell old unused books using our sell books option on your dashboard  and make some money on the side.</p>
                        </div>
                        <div class="small_box_section--card_btn">
                            <button class="btn btn-green">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sign Up -->
    <section class="signUP">
        <div class="signUP--inner">
            <h2>WE ARE HERE TO HELP</h2>
            <h3>Our student support staff are on standby whenever you need help. <br>Take advantage of all available channels from our direct lines, WhatsApp, email and resource centre to get in touch. We are too eager to help.</h3>
            <button class="btn btn-green">Sign Up</button>
        </div>
    </section>


@endsection