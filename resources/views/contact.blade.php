@extends('layout')
@section('title','Contact')
@section('content')

    <main>

        <section class="subheaderSection">
            <p class="tourSection__container--subtitleDesktop">
                We Make You Feel Comfortable
            </p>
            <p class="subheaderSection__subtitle">THE ULTIMATE LUXURY</p>
            <h1 class="subheaderSection__title">New Details</h1>
            <div class="subheaderSection__navigation">
                <p class="subheaderSection__navigation__page">Home</p>
                <p class="subheaderSection__navigation__page--active">Contact</p>
            </div>
        </section>



        <section class="contactDetailsSection">
            <div class="contactDetailsSection__container">
                <img class="contactDetailsSection__container__img" src="src/assets/icons/mail.svg" alt="Contact icon" />
                <div class="contactDetailsSection__container__subcontainer">
                    <p class="contactDetailsSection__container__subcontainer__header">
                        Hotel Address
                    </p>
                    <p class="contactDetailsSection__container__subcontainer__text">
                        OXYGEN Workspace, C/Princesa 31, planta 2, 28008 Madrid
                    </p>
                </div>
                <p class="contactDetailsSection__container__number">01</p>
            </div>
            <div class="contactDetailsSection__container">
                <img class="contactDetailsSection__container__img" src="src/assets/icons/phone.svg"
                    alt="Contact icon" />
                <div class="contactDetailsSection__container__subcontainer">
                    <p class="contactDetailsSection__container__subcontainer__header">
                        Phone Number
                    </p>
                    <p class="contactDetailsSection__container__subcontainer__text">
                        +987 876 765 76 577
                    </p>
                </div>
                <p class="contactDetailsSection__container__number">02</p>
            </div>
            <div class="contactDetailsSection__container">
                <img class="contactDetailsSection__container__img" src="src/assets/icons/location.svg"
                    alt="Contact icon" />
                <div class="contactDetailsSection__container__subcontainer">
                    <p class="contactDetailsSection__container__subcontainer__header">
                        Email
                    </p>
                    <p class="contactDetailsSection__container__subcontainer__text">
                        info@webmail.com
                    </p>
                </div>
                <p class="contactDetailsSection__container__number">03</p>
            </div>
        </section>


        

        <form class="contactFormSection" action="contact.php" method="POST">

        
            <div class="contactFormSection__firstContainer">
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field" type="text" name="name"
                        placeholder="Your full name" />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="src/assets/icons/form-person.svg" alt="Contact icon" />
                </div>
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field" type="text" name="phone"
                        placeholder="Add phone number" />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="src/assets/icons/form-phone.svg" alt="Contact icon" />
                </div>
            </div>
            <div class="contactFormSection__firstContainer">
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field" type="text" name="email"
                        placeholder="Enter email address" />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="src/assets/icons/form-mail.svg" alt="Contact icon" />
                </div>
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field" type="text" name="subject"
                        placeholder="Enter subject" />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="src/assets/icons/form-subject.svg" alt="Contact icon" />
                </div>
            </div>
            <div class="contactFormSection__firstContainer">
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field--big" type="text" name="message"
                        placeholder="Tell us what you need" />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="src/assets/icons/form-pencil.svg" alt="Contact icon" />
                </div>
            </div>
            <button type="submit" class="btn">SEND</button>

            @if($isSubmitted)
                @if(!empty($errors))
                    <ul>
                    @foreach($errors as $error)
                        <h1>{{ $error }}</h1>
                    @endforeach
                    </ul>
                @endif

                @if(!empty($message))
                    <h1>{{ $message }}</h1>
                @endif
            @endif
        </form>
    </main>

@endsection