@extends('layout')
@section('title','Home')
@section('content')

    <main>
        <section class="tourSection">
            <div class="tourSection__container">
                <p class="tourSection__container--subtitleDesktop">
                    We Make You Feel Comfortable
                </p>
                <p class="tourSection__container--subtitle">
                    THE ULTIMATE LUXURY EXPERIENCE
                </p>
                <h1 class="tourSection__container--title">
                    The Perfect Base For You
                </h1>
                <div class="tourSection__container__buttons">
                    <button class="tourSection__container_buttons tourSection__container__buttons--tour btn">
                        TAKE A TOUR
                    </button>
                    <button class="tourSection__container_buttons tourSection__container__buttons--learn btn">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </section>

        <section class="availabilitySection">
            <form class="availabilitySection__container" action="{{ route('home.availabilityCheck') }}" action="GET">
                @csrf
                <div class="availabilitySection__container availabilitySection__container__arrival">
                    <p class="availabilitySection__container__arrival availabilitySection__container__arrival--text">
                        Arrival Date
                    </p>
                    <input
                        class="availabilitySection__container__arrival availabilitySection__container__arrival--input"
                        type="date" name="arrival" required/>
                </div>
                <div class="availabilitySection__container availabilitySection__container__departure">
                    <p
                        class="availabilitySection__container__departure availabilitySection__container__departure--text">
                        Departure Date
                    </p>
                    <input
                        class="availabilitySection__container__departure availabilitySection__container__departure--input"
                        type="date" name="departure" required/>
                </div>

                @if(!empty($availabilityMessage))
                    <h1 style="color: white;">{{ $availabilityMessage }}</h1>
                @endif

                <button type="submit" id="submit" class="availabilitySection__container availabilitySection__container__button btn">
                    CHECK AVAILABILITY
                </button>
            </form>
        </section>

        <section class="aboutSection">
            <div class="aboutSection__info">
                <p class="aboutSection__info--subtitle">ABOUT US</p>
                <h1 class="aboutSection__info--title">Discover Our Underground.</h1>
                <p class="aboutSection__info--paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <button class="aboutSection__info--button btn">BOOK NOW</button>
            </div>
            <div class="aboutSection__cards">
                <div class="aboutSection__cards__team">
                    <img class="aboutSection__cards__team--img" alt="" />
                    <div class="aboutSection__cards__team--container">
                        <div class="aboutSection__cards__team--container--icons">
                            <img class="aboutSection__cards__team--container--icons--small"
                                src="src/assets/icons/strong-team.svg" alt="" />
                            <img class="aboutSection__cards__team--container--icons--big"
                                src="src/assets/icons/strong-team-transparent.svg" alt="" />
                        </div>
                        <h2 class="aboutSection__cards__team--container--title">
                            Strong Team
                        </h2>
                        <p class="aboutSection__cards__team--container--paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="aboutSection__cards__room">
                    <img class="aboutSection__cards__room--img" alt="" />
                    <div class="aboutSection__cards__room--container">
                        <div class="aboutSection__cards__room--container--icons">
                            <img class="aboutSection__cards__room--container--icons--small"
                                src="src/assets/icons/calendar.svg" alt="" />
                        </div>
                        <h2 class="aboutSection__cards__room--container--title">
                            Luxury Room
                        </h2>
                        <p class="aboutSection__cards__room--container--paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section class="roomSlider">
            <p class="roomSlider__subtitle">ROOMS</p>
            <h1 class="roomSlider__title">Hand Picked Rooms</h1>
            <div class="swiper roomSlider__slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg" alt="" />
                        <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img1.jpg" alt="" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">
                            $345<span class="roomSlider__slides--price--perNight">/Night</span>
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg" alt="" />
                        <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img2.jpg" alt="" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">
                            $345<span class="roomSlider__slides--price--perNight">/Night</span>
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg" alt="" />
                        <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img3.jpg" alt="" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">
                            $345<span class="roomSlider__slides--price--perNight">/Night</span>
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg" alt="" />
                        <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img4.jpg" alt="" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">
                            $345<span class="roomSlider__slides--price--perNight">/Night</span>
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg" alt="" />
                        <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img5.jpg" alt="" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">
                            $345<span class="roomSlider__slides--price--perNight">/Night</span>
                        </p>
                    </div>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>


        <section class="videoSection">
            <p class="videoSection__subtitle">INTRO VIDEO</p>
            <h1 class="videoSection__title">Meet With Our Luxury Place.</h1>
            <p class="videoSection__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat you have to understand this.
            </p>

            <div class="videoSection__videoContainer">
                <video autoplay muted loop controls>
                    <source src="src/assets/video/hotel-miranda-video.mp4" type="video/mp4">
                </video>
            </div>            

            <button class="videoSection__button btn">BOOK NOW</button>
        </section>




        <section class="featuresSection">
            <p class="featuresSection__subtitle">FACILITIES</p>
            <h1 class="featuresSection__title">Core Features</h1>
            <div class="swiperFeatures featuresSection__slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/rating.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/01.jpg"
                                alt="Number one" />
                        </div>

                        <h1 class="featuresSection__slides--title">Have High Rating</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/hours.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/02.jpg"
                                alt="Number two" />
                        </div>

                        <h1 class="featuresSection__slides--title">Quiet Hours</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/locations.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/03.jpg"
                                alt="Number three" />
                        </div>

                        <h1 class="featuresSection__slides--title">Best Locations</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="src/assets/icons/cancellation.svg" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/04.jpg"
                                alt="Number four" />
                        </div>

                        <h1 class="featuresSection__slides--title">Free Cancellation</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/payment.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/05.jpg"
                                alt="Number five" />
                        </div>

                        <h1 class="featuresSection__slides--title">Payment Options</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/offers.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/06.jpg"
                                alt="Number six" />
                        </div>

                        <h1 class="featuresSection__slides--title">Special Offers</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>
                <div class="swiperFeatures-pagination"></div>
            </div>
        </section>



        <section class="menuSection">
            <div class="wrapper">
                <img class="menuSection__icon" src="src/assets/icons/donut.svg" alt="Food icon" />
                <p class="menuSection__subtitle">MENU</p>
                <h1 class="menuSection__title">Our Foods Menu</h1>
                <div class="swiperMenu menuSection__slides">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="src/assets/imgs/food.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Egg & Bacon
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow"
                                    src="./resources/assets/icons/goldenArrow.png" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="src/assets/imgs/food.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Tea or Coffee
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow"
                                    src="./resources/assets/icons/goldenArrow.png" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="src/assets/imgs/food.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow"
                                    src="./resources/assets/icons/goldenArrow.png" alt="Golden arrow" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="src/assets/imgs/food2.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Egg & Bacon
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow"
                                    src="./resources/assets/icons/goldenArrow.png" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="src/assets/imgs/food2.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Tea or Coffee
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow"
                                    src="./resources/assets/icons/goldenArrow.png" alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="src/assets/imgs/food2.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow"
                                    src="./resources/assets/icons/goldenArrow.png" alt="Golden arrow" />
                            </div>
                        </div>
                    </div>
                    <div class="swiperMenu-button-prev">&#60;</div>
                    <div class="swiperMenu-button-next">&#62;</div>
                </div>
                <div class="swiperMenuImages menuSection__images">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="src/assets/imgs/food.jpg" alt="Food image" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="src/assets/imgs/food.jpg" alt="Food image" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="src/assets/imgs/food.jpg" alt="Food image" />
                        </div>
                    </div>
                    <div class="swiperMenuImages-pagination"></div>
                </div>
                <!--<div class="menuSection__imagesDesktop">
                    <img class="swiperMenuImages__img" src="" alt="Food image" />
                    <img class="swiperMenuImages__img" src="" alt="Food image" />
                    <img class="swiperMenuImages__img" src="" alt="Food image" />
                </div>-->
            </div>
        </section>



        <section class="statsSection">
            <div class="statsSection__container">
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/rocket.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        84k<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Projects are completed
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/team.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        10M<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Active Backers Around World
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/economy.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        02k<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Categories Served
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/book.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        100M<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Idea Raised Funds
                    </p>
                </div>
            </div>
        </section>

    </main>

@endsection