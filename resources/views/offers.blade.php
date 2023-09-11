@extends('layout')
@section('title','Offers')
@section('content')

    <main>

        <section class="subheaderSection">
            <p class="tourSection__container--subtitleDesktop">
                We Make You Feel Comfortable
            </p>
            <p class="subheaderSection__subtitle">THE ULTIMATE LUXURY</p>
            <h1 class="subheaderSection__title">Our Offers</h1>
            <div class="subheaderSection__navigation">
                <p class="subheaderSection__navigation__page">Home</p>
                <p class="subheaderSection__navigation__page--active">Offers</p>
            </div>
        </section>


        <section class="offerRoomSection">
            @foreach($rooms as $room)
                <div class="offerRoomSection__room">
                    <div class="offerRoomSection__room__priceContainer">
                        <p class="offerRoomSection__room__priceContainer--gold">${{ $room->price }}</p>
                        <p class="offerRoomSection__room__priceContainer--perNightGold">/Night</p>
                        <p class="offerRoomSection__room__priceContainer--red">${{ $room->price * (1 - ($room->discount / 100)) }}</p>
                        <p class="offerRoomSection__room__priceContainer--perNightRed">/Night</p>
                    </div>
                    <img class="offerRoomSection__room__img" src="{{ $room->images->first()->url_image }}" alt="Room image" />
                    <div class="offerRoomSection__room__bigContainer">
                        <p class="offerRoomSection__room__bigContainer__subtitle">{{ strtoupper($room->bed_type) }}</p>
                        <h1 class="offerRoomSection__room__bigContainer__title">{{ $room->description }}</h1>
                        <div class="offerRoomSection__room__bigContainer__separation"></div>
                        <div class="offerRoomSection__room__bigContainer__smallContainer">
                            <p class="offerRoomSection__room__bigContainer__smallContainer__description">{{ $room->cancellation }}</p>
                            <button class="btn">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>


        <section class="popularRoomsSection relatedRoomsSection singleRoomAvailabilitySection">
            <p class="popularRoomsSection__subtitle">POPULAR LIST</p>
            <h1 class="popularRoomsSection__title">Popular Rooms</h1>
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
                                <a href="offers.html" class="roomSlider__slides__container--bookNow">Book now</a>
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
                                <a href="offers.html" class="roomSlider__slides__container--bookNow">Book now</a>
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
                                <a href="offers.html" class="roomSlider__slides__container--bookNow">Book now</a>
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
                                <a href="offers.html" class="roomSlider__slides__container--bookNow">Book now</a>
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
                                <a href="offers.html" class="roomSlider__slides__container--bookNow">Book now</a>
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