@extends('user_layout/layout')
@section('user_layout')

<!-- Hero -->
    <section class="hero hero--home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero--inner">
                        <h2>Akwaaba</h2>
                        <p>This platform is to help you find tutors, tuition institutions,
                            students and books for all subjects, skills and hobbies</p>

                        <div class="search-box">
                            <input type="text" placeholder="what do you want to learn?">
                            <input type="text" placeholder="location">
                            <input type="text" placeholder="learning mode">
                            <button class="btn"> <span>Search</span> <img src="user_layout/images/search-icon.png"
                                    alt="search-icon"> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Home Services -->
    <section class="home_service">
        <div class="row no-gutters yellow-bg">
            <span class="shapes"><img src="user_layout/images/yellow-shape.svg" alt="yellow-shape"></span>
            <div class="col-md-5 order-md-2">
                <div class="home_service--cover">
                    <img src="user_layout/images/student-yard.png" alt="student-yard">
                </div>
            </div>
            <div class="col-md-7">
                <div class="home_service--yellow">
                    <h3>Student’s Yard</h3>
                    <span class="line"></span>
                    <h4>Everything is learnable</h4>
                    <p>Explore new hobbies, advance your career by
                        learning that new skill or subject taught by the largest
                        tutor community. It's just a click away.</p>
                    <button class="btn btn-green">Learn how</button>
                </div>
            </div>

        </div>
        <div class="row no-gutters green-bg">
            <span class="shapes"><img src="user_layout/images/calculator.svg" alt="calculator.png"></span>
            <div class="col-md-5">
                <div class="home_service--cover">
                    <img src="user_layout/images/tutor's-conrner.png" alt="conrner">
                </div>
            </div>
            <div class="col-md-7">
                <div class="home_service--green">
                    <h3>Tutors’ Corner</h3>
                    <span class="line"></span>
                    <h4>Let that skill work for you</h4>
                    <p>If you have a skill or subject to teach, then we have a
                        community of learners at your disposal. Get
                        paid doing what you enjoy</p>
                    <button class="btn btn-yellow">Find out how</button>
                </div>
            </div>
        </div>
        <div class="row no-gutters gray-bg">
            <span class="shapes"><img src="user_layout/images/laptop-shape.svg" alt="laptop-shape"></span>
            <div class="col-md-5 order-md-2">
                <div class="home_service--cover">
                    <img src="user_layout/images/spot-inst.png" alt="spot-inst.png">
                </div>
            </div>
            <div class="col-md-7">
                <div class="home_service--gray">
                    <h3>Institution's Spot</h3>
                    <span class="line"></span>
                    <h4>Make the most impact</h4>
                    <p>The possibilities are endless. Be accessible by reaching
                        more people and make the most impact</p>
                    <button class="btn btn-green">Get started</button>
                </div>
            </div>

        </div>
        <div class="row no-gutters blue-bg">
            <span class="shapes"><img src="user_layout/images/bookstore-shapes.svg" alt="bookstore-shape"></span>
            <div class="col-md-5">
                <div class="home_service--cover">
                    <img src="user_layout/images/bookstore.png" alt="bookstore">
                </div>
            </div>
            <div class="col-md-7">
                <div class="home_service--blue">
                    <h3>Our Bookstore</h3>
                    <span class="line"></span>
                    <h4>It's raining books and cash</h4>
                    <p>Learn how you can sell your old books or buy new and
                        used books from bookstores and individuals
                        nationwide.</p>
                    <button class="btn btn-yellow">Learn more</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->
    <section class="testimonial">
        <span class="shape-1"> <img src="user_layout/images/test-shape-1.svg" alt="test-shape-1"> </span>
        <span class="shape-2"> <img src="user_layout/images/test-shape-2.svg" alt="test-shape-1"> </span>
        <span class="shape-3"> <img src="user_layout/images/circle-sm.svg" alt="test-shape-3"> </span>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial--inner">
                        <h3>" i envision an educational system which is accountable to all stakeholders and strive to be
                            responsive to the needs of the generation...''</h3>
                        <span>Samuel Tutu</span>
                        <span>Findatutor360 -Co Founder</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Box section-->
    <section class="box_section">
        <span class="shape shape--1"><img src="user_layout/images/dot-circle.svg" alt=""></span>
        <span class="shape shape--2"><img src="user_layout/images/dot-square.svg" alt=""></span>
        <span class="shape shape--3"><img src="user_layout/images/dot-square.svg" alt=""></span>
        <span class="shape shape--4"><img src="user_layout/images/circle-big.svg" alt=""></span>
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="user_layout/images/credit card.svg" alt="doller">
                        </div>
                        <div class="box_section--card__title">
                            <h3>Safe Payments </h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p>Pay for services and products with the
                                most popular and secure payment
                                methods.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="user_layout/images/doller.svg" alt="doller">
                        </div>
                        <div class="box_section--card__title">
                            <h3>Great Value </h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p>You have a choice of students,
                                tutors, institutions, bookstores covering all
                                educational areas at your finger tip.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="user_layout/images/security.svg" alt="doller">
                        </div>
                        <div class="box_section--card__title">
                            <h3>Escrow Payments </h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p>We protect both parties through our
                                escrow system from payment to
                                solution delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box_section--card">
                        <div class="box_section--card__icon">
                            <img src="user_layout/images/customer-support.svg" alt="doller">
                        </div>
                        <div class="box_section--card__title">
                            <h3>24/7 Support</h3>
                        </div>
                        <div class="box_section--card__desc">
                            <p> Round the clock assistance for a
                                smooth experience through all
                                our channels</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection