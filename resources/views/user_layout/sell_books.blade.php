@extends('user_layout/layout')
@section('user_layout')

	
	 <!-- Hero -->
    <section class="hero hero--sell_book">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="hero--inner">
                        <h3>THE ONLY STRESS-FREE WAY TO
                            SELL BOOKS ONLINE
                        </h3>
                        <p>
                            Find established bookstores and individual sellers on one platform.
                        </p>
                        <button class="btn btn-green">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- How it work -->
    <section class="how_works how_works--bg-gray how_works--padding">
        <span class="shape-big"><img src="user_layout/images/shape.svg" alt="shape"></span>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section__head text-center">
                        <h3>How It Works </h3>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/to-do-list.svg" alt="to-do-list">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Fill out the information about the book including its category & present condition.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/clock.svg" alt="clock">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Upload pictures of the book using our recommended dimension.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/selling.svg" alt="monitor">
                        </div>
                        <div class="how_works--card__desc">
                            <p>When you receive order, you deliver to the nearest office of our courier partner.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="how_works--card">
                        <div class="how_works--card__icon">
                            <img src="user_layout/images/how-works/wallet.svg" alt="wallet">
                        </div>
                        <div class="how_works--card__desc">
                            <p>Get paid into your preferred
                                account while you are at it.
                                yipeeee!!!</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- post book now -->
    <div class="post_book">
        <button class="btn btn-yellow post_btn">post book now <i class="fal fa-angle-right"></i> </button>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post_book--form">
                        <div class="post_book--form-head">
                            <h3>post book now</h3>
                            <p>Fill all form field to go to next step</p>
                        </div>
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account">  <strong>Step 1</strong></li>
                                <li id="personal"><strong>Step 2</strong></li>
                                <li id="payment"><strong>Step 3</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Book Information</h2> 
                                    <input type="text" class="form-control" placeholder="TITLE OF BOOK">
                                    <input type="text" class="form-control" placeholder="AUTHOR">
                                    <input type="text" class="form-control" placeholder="ISBN (Optional)">
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />

                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Book Information</h2> 

                                    <input type="text" class="form-control" placeholder="YEAR PUBLISHED">
                                    <input type="text" class="form-control" placeholder="CATEGORY (KNOW)/ UNKNOWN">
                                    <input type="text" class="form-control"
                                        placeholder="CONDITION OF BOOK (PEN INDICATIONS/ TORN PAGE/ ">
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" /> 
                                <input type="button" name="next" class="next action-button"
                                    value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Book Information</h2>
                                    <input type="text" class="form-control"
                                    placeholder="COLOURATION DUE TO OIL, PAINT SPILLAGE ETC)">

                                    <div class="upload_file">
                                        <button class="btn">UPLOAD PICTURE</button>
                                        <input type="file" class="form-control" placeholder="UPLOAD PICTURE">
                                    </div>

                                    <input type="text" class="form-control">
                                </div> 
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" /> 
                                <input type="button" name="make_payment"
                                    class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> 
                                    <div class="row">
                                        <div class="col success_img"> 
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                class="fit-image"> 
                                        </div>
                                    </div> 
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully POST BOOK</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Blue Show case -->
    <section class="blueShowcase">
        <span class="shape-1"><img src="user_layout/images/blue-bg-shape.svg" alt="blue-bg-shape"></span>
        <span class="shape-2"><img src="user_layout/images/blue-bg-shape-2.svg" alt="blue-bg-shape"></span>

        <h4>WHAT ARE YOU WAITING FOR? </h4>
        <h3>GRAB A BOOK AND TRY US NOW</h3>

    </section>
    <!-- Sign Up -->
    <section class="signUP">
        <span class="shape-1"> <img src="user_layout/images/circle-big.svg" alt=""> </span>
        <div class="signUP--inner signUP--inner--width">
            <h2>WE ARE HERE TO HELP</h2>
            <h3>Our bookstore support staff are on standby whenever you need help. Take advantage of all available
                channels from our direct lines, WhatsApp, email and resource centre to get in touch. We are too eager to
                help.</h3>
            <button class="btn btn-green text-uppercase">JOIN FOR FREE</button>
        </div>
    </section>


@endsection