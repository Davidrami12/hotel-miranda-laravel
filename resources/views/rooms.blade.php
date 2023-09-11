@extends('layout')
@section('title','Rooms')
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
                <p class="subheaderSection__navigation__page--active">Rooms</p>
            </div>
        </section>



        <div class="swiperRoomsList roomSlider__slides">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    @foreach($rooms as $room)
                    <div style="position: relative">
                        <img class="roomSlider__slides--extras" src="src/assets/imgs/room-info.svg"
                            alt="Room extras" />
                        <img class="roomSlider__slides--roomImg" src="{{ $room->images->first()->url_image }}"
                            alt="Hotel room" />
                        <h1 class="roomSlider__slides--title">{{ $room->name ?? 'Double Superior' }}</h1>
                        <p class="roomSlider__slides--description">
                            {{ $room->description }}
                        </p>
                        <div class="roomSlider__slides__container">
                            <p class="roomSlider__slides__container--price">
                                ${{ $room->price ?? '$245' }}<span class="roomSlider__slides__container--price--perNight">/Night</span>
                            </p>
                            <a href="{{ route('room.details', ['id' => $room->room_id]) }}" class="roomSlider__slides__container--bookNow">Book now</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiperRoomsList-pagination"></div>
        </div>


    </main>

@endsection