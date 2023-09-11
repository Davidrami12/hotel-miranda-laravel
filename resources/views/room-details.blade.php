@extends('layout')
@section('title','Room Details')
@section('content')

    <main>

        <section class="subheaderSection">
            <p class="tourSection__container--subtitleDesktop">
                We Make You Feel Comfortable
            </p>
            <p class="subheaderSection__subtitle">THE ULTIMATE LUXURY</p>
            <h1 class="subheaderSection__title">Ultimate Room</h1>
            <div class="subheaderSection__navigation">
                <p class="subheaderSection__navigation__page">Home</p>
                <p class="subheaderSection__navigation__page--active">Room Details</p>
            </div>
        </section>



        <section class="roomSection">
            <p class="roomSection__subtitle">{{ $room->bed_type }}</p>
            <h1 class="roomSection__title">{{ $room->description }}</h1>
            <p class="roomSection__price"> ${{ $room->price }}<span class="roomSection__price--perNight">/Night</span></p>
            <img class="roomSlider__slides--roomImg" src="{{ $room->images->first()->url_image }}" alt="Hotel room" />
        </section>

        <section class="roomSectionDesktop">
            <div class="roomSectionDesktop__container">
              <div class="roomSectionDesktop__container__subcontainer">
                <p class="roomSectionDesktop__container__subcontainer__subtitle">{{ $room->bed_type }}</p>
                <h1 class="roomSectionDesktop__container__subcontainer__title">{{ $room->description }}</h1>
              </div>
              <p class="roomSectionDesktop__container__price">${{ $room->price }}<span class="roomSectionDesktop__container__price--perNight">/Night</span>
              </p>
            </div>
    
            <img class="roomSectionDesktop__roomImg" src="{{ $room->images->first()->url_image }}" alt="Hotel room" />
            <p class="roomSectionDesktop__text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum. Sed ut
              perspiciatis unde omnis iste natus error sit voluptatem accusantium
              doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
              inventore veritatis et quasi architecto beatae vitae dicta sunt
              explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
              odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
              voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
              quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
              eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
              voluptatem.
            </p>
        </section>


        <section class="singleRoomAvailabilitySection">
            <p class="singleRoomAvailabilitySection__subtitle">
                Check Availability
            </p>
            <form class="singleRoomAvailabilitySection__form">
                <div class="singleRoomAvailabilitySection__form__block">
                    <label for="check-in-input">Check In</label>
                    <input id="check-in-input" type="date" />
                </div>
                <div class="singleRoomAvailabilitySection__form__block">
                    <label for="check-out-input">Check Out</label>
                    <input id="check-out-input" type="date" />
                </div>
                <button class="btn btn--light" type="submit">
                    CHECK AVAILABILITY
                </button>
            </form>
            <p class="singleRoomAvailabilitySection__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. Sed ut
                perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem.
            </p>
        </section>



        <section class="amenitiesSection">
            <h1 class="amenitiesSection__title">Amenities</h1>
            <div class="amenitiesSection__separation"></div>
            <div class="amenitiesSection__container">
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="src/assets/icons/air-conditioner.svg" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Air conditioner
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/wifi.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        High speed WiFi
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/lunch.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Breakfast
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/kitchen.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Kitchen
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/cleaning.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Cleaning
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/shower.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Shower
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/grocery.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Grocery
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/bed.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Single bed
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/shop.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Shop near
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/towel.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Towels
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="src/assets/icons/online-support.svg" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        24/7 Online Support
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/key.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Strong Locker
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/security.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Smart security
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="src/assets/icons/expert-team.svg"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Expert Team
                    </p>
                </div>
            </div>
        </section>



        <section class="employeeSection">
            <div class="employeeSection__container">
                <div class="employeeSection__container__imgContainer">
                    <img class="employeeSection__container__imgContainer__portrait" src="src/assets/imgs/founder.jpg"
                        alt="Employee image" />
                    <div class="employeeSection__container__imgContainer__checkContainer">
                        <img class="employeeSection__container__imgContainer__checkContainer__check"
                            src="src/assets/icons/check.svg" alt="Check mark image" />
                    </div>
                </div>
                <h1 class="employeeSection__container__name">Rosalina D. William</h1>
                <p class="employeeSection__container__position">FOUNDER, QUX CO.</p>
                <p class="employeeSection__container__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
        </section>



        <section class="cancellationSection amenitiesSection singleRoomAvailabilitySection">
            <h1 class="amenitiesSection__title">Cancellation</h1>
            <div class="amenitiesSection__separation"></div>
            <p class="cancellationSection__text singleRoomAvailabilitySection__text" style="padding-top: 0">
                Phasellus volutpat neque a tellus venenatis, a euismod augue
                facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
                Pellentesque orci quis hendrerit sed eu dolor.
            </p>
            <p class="cancellationSection__text singleRoomAvailabilitySection__text" style="padding-top: 0">
                Cancel up to 14 days to get a full refund.
            </p>
        </section>



        <section class="relatedRoomsSection amenitiesSection singleRoomAvailabilitySection">
            <h1 class="amenitiesSection__title">Related Rooms</h1>
            <div class="amenitiesSection__separation"></div>
            <!-- Related rooms for mobile view -->
            <div class="swiper roomSlider__slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div style="position: relative">
                            <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg"
                                alt="Room extras" />
                            <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img1.jpg"
                                alt="Hotel room" />
                            <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                            <p class="roomSlider__slides--description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <div class="roomSlider__slides__container">
                                <p class="roomSlider__slides__container--price">
                                    $345<span class="roomSlider__slides__container--price--perNight">/Night</span>
                                </p>
                                <a href="room-details.html" class="roomSlider__slides__container--bookNow">Book now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="position: relative">
                            <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg"
                                alt="Room extras" />
                            <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img2.jpg"
                                alt="Hotel room" />
                            <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                            <p class="roomSlider__slides--description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <div class="roomSlider__slides__container">
                                <p class="roomSlider__slides__container--price">
                                    $345<span class="roomSlider__slides__container--price--perNight">/Night</span>
                                </p>
                                <a href="room-details.html" class="roomSlider__slides__container--bookNow">Book now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="position: relative">
                            <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg"
                                alt="Room extras" />
                            <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img3.jpg"
                                alt="Hotel room" />
                            <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                            <p class="roomSlider__slides--description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <div class="roomSlider__slides__container">
                                <p class="roomSlider__slides__container--price">
                                    $345<span class="roomSlider__slides__container--price--perNight">/Night</span>
                                </p>
                                <a href="room-details.html" class="roomSlider__slides__container--bookNow">Book now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="position: relative">
                            <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg"
                                alt="Room extras" />
                            <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img4.jpg"
                                alt="Hotel room" />
                            <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                            <p class="roomSlider__slides--description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <div class="roomSlider__slides__container">
                                <p class="roomSlider__slides__container--price">
                                    $345<span class="roomSlider__slides__container--price--perNight">/Night</span>
                                </p>
                                <a href="room-details.html" class="roomSlider__slides__container--bookNow">Book now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div style="position: relative">
                            <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg"
                                alt="Room extras" />
                            <img class="roomSlider__slides--roomImg" src="src/assets/imgs/room-img5.jpg"
                                alt="Hotel room" />
                            <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                            <p class="roomSlider__slides--description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <div class="roomSlider__slides__container">
                                <p class="roomSlider__slides__container--price">
                                    $345<span class="roomSlider__slides__container--price--perNight">/Night</span>
                                </p>
                                <a href="room-details.html" class="roomSlider__slides__container--bookNow">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>


    </main>

@endsection