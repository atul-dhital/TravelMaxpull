<?php
get_header();
the_post();
?>
<main class="page__home">
<section class="hero">
        <div class="container">
            <div class="hero__content">
                <div class="hero__offer">
                    <p class="hero__offerTitle">
                        <svg class="icon icon-surface931-2">
                            <use xlink:href="#icon-surface931-2"></use>
                        </svg>
                        offering <span> 20% discount</span>on selected trip
                        <svg class="icon icon-Vector-6">
                            <use xlink:href="#icon-Vector-6"></use>
                        </svg>
                    </p>
                </div>
                <div class="hero__title">
                    <span>exploare beyound the</span>
                    <h1 class="hero__heading">himalayas</h1>
                </div>
                <div class="hero__search">
                    <svg class="icon icon-finderIcon">
                        <use xlink:href="#icon-finderIcon"></use>
                    </svg>
                    <input type="text" class="hero__searchPlace" placeholder="Your Next Trip">
                    </input>
                </div>
            </div>
        </div>
        <div class="hero__slider">
            <div class="hero__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/video1.jpeg')">
                <span class="hero__mask"></span>
                <div class="hero__innertext">
                    <p>Play Video <br><strong>2:53</strong></p>
                    <h3 class="hero__innertitle">List of easy trek for the first timers</h3>
                </div>
            </div>
            <div class="hero__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/video1.jpeg')">
                <span class="hero__mask"></span>
                <div class="hero__innertext">
                    <p>Play Video <br><strong>2:53</strong></p>
                    <h3 class="hero__innertitle">List of easy trek for the first timers’</h3>
                </div>
            </div>
            <div class="hero__slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/video1.jpeg')">
                <span class="hero__mask"></span>
                <div class="hero__innertext">
                    <p>Play Video <br><strong>2:53</strong></p>
                    <h3 class="hero__innertitle">List of easy trek for the first timers’</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="value">
        <div class="container">
            <h2 class="value__heading">Our values above everything</h2>
            <div class="value__info">
                <div class="value__item">
                    <p class="value__discription1">We are not a regular travel agency; We’re here to understand your
                        needs, consult you a better travel experience and create a lifetime relation with you.</p>
                    <p class="value__discription2">We proudly say that we are one of those few, who love to put
                        ourselves under the list of “Different People do Things Differently”, just like you try to
                        create a lasting impression upon your clients, who will remember how much hard you have worked
                        work for them to give a satisfying service in the remotest regions of Nepal.</p>
                    <div class="value__navigation">
                        <ul>
                            <li>More About Us</li>
                            <li>Why TMG?</li>
                            <li>Meet Our Team</li>
                            <li>FAQs</li>
                        </ul>
                    </div>
                </div>
                <div class="value__item value__background">
                    <p class="value__review ">We aspire to be the world’s most trustable and progressive travel
                        management
                        company.</p>
                    <span>— John shrestha, Founder</span>
                </div>
            </div>
        </div>
    </section>
    <section class="package-section">
        <div class="container">
            <div class="package__text">
                <h2 class="package__heading">Explore <span>Nepal With us</span></h2>
                <p class="package__discription">Nepal is as old as the hills, and so are its Himalayas that were formed
                    billions
                    of years ago, and this is where the trekking trails lie.</p>
            </div>
            <div class="package">
                <div class="package__slider slide1">
                    <div class="slider__content">
                        <span>usd 1500</span>
                        <h3>Everest Basecamp Trek</h3>
                        <strong>12 Days, Setrenuous</strong>
                    </div>
                </div>
                <div class="package__slider slide2">
                    <div class="slider__content">
                        <span>usd 1500</span>
                        <h3>Annapurna Base Camp Trek</h3>
                        <strong>12 Days, Setrenuous</strong>
                    </div>
                </div>
                <div class="package__slider slide3">
                    <div class="slider__content">
                        <span>usd 1500</span>
                        <h3>Everest Basecamp</h3>
                        <strong>12 Days, Setrenuous</strong>
                    </div>
                </div>
                <div class="package__slider slide4">
                    <div class="slider__content">
                        <span>usd 1500</span>
                        <h3>Everest Basecamp trek</h3>
                        <strong>12 Days, Setrenuous</strong>
                    </div>
                </div>
                <div class="package__slider slide5">
                    <div class="slider__content">
                        <span>usd 1500</span>
                        <h3>Everest Basecamp trek</h3>
                        <strong>12 Days, Setrenuous</strong>
                    </div>
                </div>
            </div>
            <div class="package__content">
                <div class="package__item">
                    <h3>Over values<br> Venenatis magna <strong>everything</strong></h3>
                </div>
                <div class="package__item">
                    <p class="package__data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo at justo tempus semper</p>
                    <div class="package__button">
                        <span>View all trips</span>
                        <button><svg class="icon icon-Vector-5">
                                <use xlink:href="#icon-Vector-5"></use>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/gallery.jpeg')">
        <span class="gallery__top-left"></span>
        <span class="gallery__top-right"></span>
        <span class="gallery__bottom-left"></span>
        <span class="gallery__bottom-right"></span>
        <div class="container">
            <h2 class="gallery__head">STORIES FROM THE HIMALAYA</h2>
            <div class="gallery__body">
                <div class="gallery__text">
                    <h3 class="gallery__title">TRAVEL <strong>PHOTOGRAPHY</strong> at it’s <strong>best</strong></h3>
                    <p>Nepal is as old as the hills, and so are its Himalayas that were formed billions of years ago, and this is where the trekking trails lie.</p>
                </div>
                <div class="gallery__img">
                    <div class="gallery__image gallery__image--first" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/gallery1.jpeg')">
                        <h4 class="gallery__imgTitle">Nepal Adventure</h4>
                    </div>
                    <div class="gallery__image gallery__image--first" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/gallery2.jpeg')">
                        <h4 class="gallery__imgTitle">Lower Dolpo Trek</h4>
                    </div>
                    <div class="gallery__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/uploads/gallery3.jpeg')">
                        <h4 class="gallery__imgTitle">Sightseeing Kathmandu</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="service">
        <div class="container">
            <h2 class="service__heading">we serve experience that last long...</h2>
            <div class="service__navigation">
                <div class="service__slideContent">
                    <button class="slideScroll__logo">
                        <svg class="icon icon-Vector">
                            <use xlink:href="#icon-Vector"></use>
                        </svg>
                    </button>
                    <p>Trekking</p>
                </div>
                <div class="service__slideContent">
                    <button class="slideScroll__logo">
                        <svg class="icon icon-surface190">
                            <use xlink:href="#icon-surface190"></use>
                        </svg>
                    </button>
                    <p>Day Trips</p>
                </div>
                <div class="service__slideContent">
                    <button class="slideScroll__logo">
                        <svg class="icon icon-Vector-1">
                            <use xlink:href="#icon-Vector-1"></use>
                        </svg>
                    </button>
                    <p>Heli Tours</p>
                </div>
                <div class="service__slideContent service__slideContent--active">
                    <button class="slideScroll__logo">
                        <svg class="icon icon-surface9891 mount">
                            <use xlink:href="#icon-surface9891"></use>
                        </svg>
                    </button>
                    <p>Mountaineering</p>
                </div>
                <div class="service__slideContent">
                    <button class="slideScroll__logo">
                        <svg class="icon">
                            <use xlink:href="#icon-Vector-2"></use>
                        </svg>
                    </button>
                    <p>Biking</p>
                </div>
                <div class="service__slideContent">
                    <button class="slideScroll__logo">
                        <svg class="icon">
                            <use xlink:href="#icon-Vector-3"></use>
                        </svg>
                    </button>
                    <p>Adventure</p>
                </div>
                <div class="service__slideContent">
                    <button class="slideScroll__logo">
                        <svg class="icon">
                            <use xlink:href="#icon-Vector-4"></use>
                        </svg>
                    </button>
                    <p>Volunteering</p>
                </div>
                <div class="service__slideContent">
                    <button class="slideScroll__logo">
                        <svg class="icon">
                            <use xlink:href="#icon-Group-37"></use>
                        </svg>
                    </button>
                    <p>Wildlife Safari</p>
                </div>
            </div>
            <div class="service__package">
                <div class="service__item">
                    <figure class="service__image">
                        <img class="header__image" src="<?php echo get_template_directory_uri() ?>/uploads/service.jpeg" alt="Logo of Website" />
                    </figure>
                    <div class="service__content">
                        <div class="service__price">
                            <a href="#" class="service-box">usd 1,500</a>
                            <a href="#" class="service-box trip">New Trip</a>
                        </div>
                        <h3>Everest Base Camp Trek via Gokyo Lakes</h3>
                        <ul class="service__package-navigation">
                            <li>12days</li>
                            <li>Setrenuous</li>
                            <li>Trekking</li>
                        </ul>
                        <p class="service__info">Annapurna Circuit Trekking is a whole trek; it is your trek; it is the trek that the National
                            Geographic has enlisted as the world’s best. Annapurna Circuit Trekking is not ...</p>
                        <div class="service__button">
                            <button>view details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dream">
        <div class="container">
            <h2>unleash <strong>your DREAM</strong></h2>
            <span>through Travel Max Guide</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo at justo tempus semper Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet justo at justo tempus semper</p>
            <div class="dream__button">
                <div class="dream__button--border">
                    <svg class="icon icon-Vector-10">
                        <use xlink:href="#icon-Vector-10"></use>
                    </svg> <button>your custim trip</button>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <div class="testimonial__heading">
                <div class="star">
                    <svg class="icon icon-Vector-7">
                        <use xlink:href="#icon-Vector-7"></use>
                    </svg>
                    <svg class="icon icon-Vector-7">
                        <use xlink:href="#icon-Vector-7"></use>
                    </svg>
                    <svg class="icon icon-Vector-7">
                        <use xlink:href="#icon-Vector-7"></use>
                    </svg>
                    <svg class="icon icon-Vector-7">
                        <use xlink:href="#icon-Vector-7"></use>
                    </svg>
                    <svg class="icon icon-Vector-7">
                        <use xlink:href="#icon-Vector-7"></use>
                    </svg>
                </div>
                <h2>All-Star adventure experince!</h2>
            </div>
            <div class="testimonial__website">
                <ul>
                    <li> <img class="header__image" src="<?php echo get_template_directory_uri() ?>/uploads/truspilot.svg" alt="trustpilot" />
                    </li>
                    <li> <img class="header__image" src="<?php echo get_template_directory_uri() ?>/uploads/google.svg" alt="google" /></li>
                    <li> <img class="header__image" src="<?php echo get_template_directory_uri() ?>/uploads/tripadvisor.svg" alt="tripadvisor" /></li>
                    <li> <img class="header__image" src="<?php echo get_template_directory_uri() ?>/uploads/tourradar.svg" alt="tourradar" />
                    </li>
                </ul>
            </div>
            <div class="testimonial_content">
                <div class="testimonial__item">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error necessitatibus fugit id itaque,
                        sint in aut incidunt optio eos voluptatibus saepe repellat temporibus beatae suscipit facere
                        porro quo possimus esse?</p>
                    <div class="star">
                        <svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg>
                        <svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg>
                        <svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg><svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg>
                    </div>
                    <span>John Shrestha</span><br>
                    <strong>Everest Basecamp,terk</strong>
                </div>
                <div class="testimonial__item">
                    <p>We aspire to be the world’s most trustable and progressive travel management company.</p>
                    <div class="star"><svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg><svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg><svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg><svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg><svg class="icon icon-Vector-7">
                            <use xlink:href="#icon-Vector-7"></use>
                        </svg></div>
                    <span>John Shrestha</span><br>
                    <strong>Everest Basecamp,terk</strong>
                </div>
                <div class="testimonial__item">
                    <img class="header__image" src="<?php echo get_template_directory_uri() ?>/uploads/review.jpeg" alt="tourradar" />
                </div>
            </div>
    </section>
    <?php include('modules/flex-content/flex-content.php')?>
</main>
<?php get_footer(); ?>