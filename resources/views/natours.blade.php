@extends('layout')

@section('title', 'Natours')

@section('content')
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp:</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>About Natous</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Your benefits</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>03</span>Popular tours</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>04</span>Stories</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>Book now</a></li>

            </ul>
        </nav>
    </div>
    <header class="header">
        <div class="header__logo-box">
            <i class="fas fa-feather white-text fa-5x"></i>
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Stoop</span>
                <span class="heading-primary--sub">A simple logbook for falconers</span>
            </h1>

            <a href="#" class="button button--white button--animated">Add your first bird</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exciting tours for adventurous people
                </h2>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eligendi, esse harum impedit magnam nam officiis quia. Commodi deserunt dignissimos dolore ea earum hic omnis provident quis soluta veniam! Labore!
                    </p>
                    <h3 class="heading-tertiary u-margin-bottom-small">Live adventures like you never have before</h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eligendi, esse harum impedit magnam nam officiis quia. Commodi deserunt dignissimos dolore ea earum hic omnis provident quis soluta veniam! Labore!
                    </p>

                    <a href="#" class="button-text">Learn more&nbsp;&rarr;</a>

                </div>
                <div class="col-1-of-2">
                    <div class="composition">

                        <img srcset="img/nat-1.jpg 300w, img/nat-1-large.jpg 1000w"
                             sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                             alt="Photo 1"
                             class="composition__photo composition__photo--p1"
                             src="img/nat-1-large.jpg">

                        <img srcset="img/nat-2.jpg 300w, img/nat-2-large.jpg 1000w"
                             sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                             alt="Photo 2"
                             class="composition__photo composition__photo--p2"
                             src="img/nat-2-large.jpg">

                        <img srcset="img/nat-3.jpg 300w, img/nat-3-large.jpg 1000w"
                             sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                             alt="Photo 3"
                             class="composition__photo composition__photo--p3"
                             src="img/nat-3-large.jpg">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-features">

            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-world"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque deleniti doloribus ducimus excepturi.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-compass"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque deleniti doloribus ducimus excepturi.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque deleniti doloribus ducimus excepturi.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque deleniti doloribus ducimus excepturi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-tours" id="section-tours">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Most popular tours
                </h2>
            </div>
            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">The sea explorer</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tour</li>
                                    <li>Up to 30 people</li>
                                    <li>2 tour guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$297</p>
                                </div>
                                <a href="#popup" class="button button--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">The Forest Hiker</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>7 day tour</li>
                                    <li>Up to 40 people</li>
                                    <li>6 tour guides</li>
                                    <li>Sleep in provided tents</li>
                                    <li>Difficulty: medium</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$497</p>
                                </div>
                                <a href="#popup" class="button button--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">The Snow Adventurer</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>5 day tour</li>
                                    <li>Up to 15 people</li>
                                    <li>3 tour guides</li>
                                    <li>Sleep in provided tents</li>
                                    <li>Difficulty: hard</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$897</p>
                                </div>
                                <a href="#popup" class="button button--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#section-tours" class="button button--green">Discover all tours</a>
            </div>

        </section>

        <section class="section-stories">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="img/video.mp4" type="video/mp4">
                    <source src="img/video.webm" type="video/webm">
                    Your browser is not supported!
                </video>
            </div>
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    We make people genuinely happy
                </h2>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img srcset="img/nat-8-small.jpg 500w, img/nat-8.jpg 2000w"
                             sizes="(max-width: 56.25em) 36.66666vw, (max-width: 37.5em) 75vw, 500px"
                             alt="Falcon"
                             class="story__image"
                             src="img/nat-8.jpg">

                        {{--                        <img src="https://images.unsplash.com/photo-1442155701645-79487c6fa95f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Falcon" class="story__image">--}}
                        <figcaption class="story__caption">Mary Smith</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad aliquam, blanditiis corporis dicta eaque earum eius hic incidunt, laborum nesciunt officiis quae quo ratione repudiandae sunt ullam velit vitae?
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img srcset="img/nat-9-small.jpg 500w, img/nat-9.jpg 2000w"
                             sizes="(max-width: 56.25em) 36.66666vw, (max-width: 37.5em) 75vw, 500px"
                             alt="Falcon"
                             class="story__image"
                             src="img/nat-9.jpg">
                        {{--                        <img src="https://images.unsplash.com/photo-1442155701645-79487c6fa95f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Falcon" class="story__image">--}}
                        <figcaption class="story__caption">Jack Wilson</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">Wow! My life is completely different now.</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad aliquam, blanditiis corporis dicta eaque earum eius hic incidunt, laborum nesciunt officiis quae quo ratione repudiandae sunt ullam velit vitae?
                        </p>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="button-text">Read all stories &nbsp;&rarr;</a>
            </div>
        </section>

        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="#" class="form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    Start booking now
                                </h2>
                            </div>
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full name" id="name" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>
                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Small tour group</label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Large tour group</label>
                                </div>
                            </div>

                            <div class="form__group">
                                <button class="button button--green">Next step&nbsp;&rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__logo-box">
            <picture class="footer__logo">
                <source srcset="img/logo-green-small-1x.png 1x, img/logo-green-small-2x.png 2x" media="(max-width: 37.5em)">
                <img srcset="img/logo-green-1x.png 1x, img/logo-green-2x.png 2x" src="img/logo-green-2x.png" alt="Full logo" class="footer__logo">
            </picture>
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Careers</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Built by <a href="#" class="footer__link">Jordan Gunther</a> for his online course <a href="#"
                                                                                                          class="footer__link">Advanced CSS and Sass</a>. Copyright &copy; by Jonas Schmedtmann. You are 100% allowed to use this webpage for both personal and commercial use, but NOT to claim it as your own design. A credit to the original author, Jonas Schmedtmann, is of course highly appreciated!
                </p>
            </div>
        </div>
    </footer>

    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <img srcset="img/nat-8-small.jpg 500w, img/nat-8.jpg 2000w"
                     sizes="(max-width: 56.25em) 36.66666vw, (max-width: 37.5em) 75vw, 500px"
                     alt="Tour photo"
                     class="popup__image"
                     src="img/nat-8.jpg">
                <img srcset="img/nat-9-small.jpg 500w, img/nat-9.jpg 2000w"
                     sizes="(max-width: 56.25em) 36.66666vw, (max-width: 37.5em) 75vw, 500px"
                     alt="Tour photo"
                     class="popup__image"
                     src="img/nat-9.jpg">
            </div>
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
                <h3 class="heading-tertiary u-margin-bottom-small">Important&nbsp;&ndash;&nbsp;Please read these terms before booking</h3>
                <p class="popup__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est expedita id perspiciatis quae soluta? Quaerat, reiciendis, repudiandae! Delectus deleniti dicta dolorum inventore maxime, nesciunt velit! Fugit illo labore obcaecati omnis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est expedita id perspiciatis quae soluta? Quaerat, reiciendis, repudiandae! Delectus deleniti dicta dolorum inventore maxime, nesciunt velit! Fugit illo labore obcaecati omnis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est expedita id perspiciatis quae soluta? Quaerat, reiciendis, repudiandae! Delectus deleniti dicta dolorum inventore maxime, nesciunt velit! Fugit illo labore obcaecati omnis?
                </p>
                <a href="#" class="button button--green">Book now</a>
            </div>
        </div>
    </div>
@endsection