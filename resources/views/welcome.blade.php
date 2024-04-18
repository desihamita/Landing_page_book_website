<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- flaticon -->
        <link rel="stylesheet" href="">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Swiper -->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>Landing Page</title>

    </head>
    <body>
        <header class='header'>
            <div class="header__top">
                <div class="header__container container">
                    <div class="header__contact">
                        <span>(+62) 857 5789 7878</span>
                        <span>Our Location</span>
                    </div>
                    <a href="" class="header__top-action"><i class="fa-solid fa-circle-question"></i> Bantuan</a>
                </div>
            </div>
            <div class="header__nav">
                <nav class="nav container">
                    <a href="" class="nav__logo">
                        <img src="{{ asset('logo.png') }}" alt="" class="nav__logo-img">
                    </a>
                    <div class="nav__menu" id="nav-menu">
                        <div class="nav__menu-top">
                            <a href="" class="nav__menu-logo">
                                <img src="{{ asset('logo.png') }}" alt="" >
                            </a>
                            <div class="nav__close" id="nav-close">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                        </div>
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#home" class="nav__link active-link">Home</a>
                            </li>
                            <li class="nav__item">
                                <a href="#about" class="nav__link">About</a>
                            </li>
                            <li class="nav__item">
                                <a href="#books" class="nav__link">Books</a>
                            </li>
                            <li class="nav__item">
                                <a href="#contact" class="nav__link">Contact</a>
                            </li>
                        </ul>
                        <div class="header__search">
                            <input type="text" class="form__input" placeholder='Search For Items'>
                            <button class="search__btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>

                    <div class="header__user-actions">
                        <div class="header__action-btn nav__toggle" id="nav-toggle">
                            <img src="{{ asset('img/menu-burger.svg') }}" alt="">
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main class='main'>
            <section class="home section--lg" id="home">
                <div class="home__container container grid">
                    <div class="home__images">
                        <div class="banners__container swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('img/home-book-1.png') }}" alt="" class="home__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('img/home-book-2.png') }}" alt="" class="home__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('img/home-book-3.png') }}" alt="" class="home__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('img/home-book-4.png') }}" alt="" class="home__img">
                                </div>
                            </div>
                            
                            <div class="swiper-button-prev banners">
                                <i class="fa-solid fa-angle-left"></i>
                            </div>
                            <div class="swiper-button-next banners">
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="home__data">
                        <a href="">
                            <img src="{{ asset('img/home-book-4.png') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('img/home-book-3.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </section>

            <section class="about section--lg " id="about">
                <div class="about__container container grid">
                    <div class="about__content">
                        <span class="home_subtitle">Hot Promotions</span>
                        <h1 class="about__title">Book Trending <span>Great Collections</span></h1>
                        <p class="about__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dignissimos impedit saepe ullam molestias sit asperiores facilis sint cumque placeat, excepturi ipsum voluptatum quasi minima commodi molestiae sunt provident temporibus?
                        </p>
                        <a href="" class="btn">Shop Now</a>
                    </div>
                    <div class="about__image">
                        <img src="{{ asset('img/book-5.png')}}" alt="image" class="about__img-1">
                        <img src="{{ asset('img/book-6.png')}}" alt="image" class="about__img-2">
                    </div>
                </div>
            </section>

            <section class="categories container section">
                <h3 class="section__title"><span>Populer</span> Books </h3><hr>
                <div class="categories__container swiper">
                    <div class="swiper-wrapper">
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-1.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Anatomi dan Fisiologi</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-2.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Patologi</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-3.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Farmakologi</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-4.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Pembedahan</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-5.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Pediatri</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-6.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Ginekologi dan Obstetri</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-7.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Psikiatri</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-8.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Ilmu Penyakit Dalam</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-9.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Radiologi</h3>
                        </a>
                        <a href=""  class="category__item swiper-slide">
                            <img src="{{ asset('img/book-10.png') }}" alt="" class="category__img">
                            <h3 class="category_title">Ilmu Kesehatan Masyarakat</h3>
                        </a>
                    </div>
                    
                    <div class="swiper-button-prev category left">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next category right">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </section>

            <section class="products container section" id="books">
                <div class="tab__btns">
                    <span class="tab__btn active-tab" data-target="#featured">Featured</span>
                    <span class="tab__btn" data-target="#recomended">Recomended</span>
                    <span class="tab__btn" data-target="#newAdded">New Added</span>
                </div> <hr>
                <div class="tab__items">
                    <div class="tab__item active-tab" content id="featured">
                        <div class="products__container grid">
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-1.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-3.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-2.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-4.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-3.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-1.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-orange">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-4.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-2.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-6.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-4.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-9.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-6.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-9.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-7.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab__item" content id="recomended">
                        <div class="products__container grid">
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-9.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-2.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-8.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-6.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-6.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-4.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-7.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-9.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-10.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-6.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-9.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-5.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-7.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">50%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab__item" content id="newAdded">
                        <div class="products__container grid">
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-1.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-3.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-2.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-4.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-3.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-1.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-orange">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="" class="product__images">
                                        <img src="{{ asset('img/book-4.png')}}" alt="" class="product__img default">

                                        <img src="{{ asset('img/book-2.png')}}" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="" aria-label="Quick view" class="action__btn">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                        <a href="" aria-label="Add to Wishlist" class="action__btn">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                        <a href="" aria-label="Compare" class="action__btn">
                                            <i class="fa-solid fa-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">
                                        Anatomi dan Fisiologi
                                    </span>
                                    <a href="">
                                        <h3 class="product__title">
                                            Atlas Anatomi
                                        </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                        <i class="fa-solid fa-star icon-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">Rp.123.123</span>
                                        <span class="old__price">Rp.345.345</span>
                                    </div>
                                    <a href="" aria-label="Add To Cart" class="action__btn cart__btn">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="discount section" >
                <div class="discount__container container grid">
                    <div class="discount__images">
                        <img src="{{ asset('img/discount-book-1.png')}}" alt="image" class="discount__img-1">
                        <img src="{{ asset('img/discount-book-2.png')}}" alt="image" class="discount__img-2">
                    </div>
                    <div class="discount__data">
                        <h2 class="discount__title section section_title"> Up To 50% Discount</h2>
                        <p class="discount__description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro repudiandae quis vel quos, sunt reiciendis quas eius maxime ducimus delectus id ea quidem temporibus omnis ex iusto .
                        </p>
                        <a href="" class="btn">Shope Now</a>
                    </div>
                </div>
            </section>

            <section class="newsletter section home__newsletter" id="contact">
                <div class="newsletter__container container grid">
                    <h3 class="newsletter__tittle flex">
                        <img src="{{ asset('img/icon-email.svg')}}" alt="" class="newsletter__icon" />
                        Sign up to Newsletter
                    </h3>
                    <p class="newsletter__description">
                        explore hundreds of books 
                    </p>
                    <form action="" class="newsletter__form">
                        <input type="text" 
                        placeholder="Enter your email" class="newsletter__input">
                        <button class="newsletter__btn">Subscribe</button>
                    </form>
                </div>
            </section>
        </main>

        <footer class="footer container">
            <div class="footer__container grid">
                <div class="footer__content">
                    <a href="" class="footer__logo">
                        <img src="{{ asset('logo.png') }}" alt="" class="footer__logo-img">
                    </a>
                    
                    <p class="footer__description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam possimus dicta nam, natus sint alias dignissimos similique praesentium ipsum laborum suscipit itaque fugit qui dolorum!
                    </p>

                    <div class="footer__social">
                        <h4 class="footer__subtitle">Follow Me</h4>
                        <div class="footer__social-links flex">
                            <a href=""><i class="fa-brands fa-facebook footer__social-icon"></i></a>

                            <a href=""><i class="fa-brands fa-square-instagram footer__social-icon"></i></a>

                            <a href=""><i class="fa-brands fa-twitter footer__social-icon"></i></a>
                        </div>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">About</h3>
                    <ul class="footer__links">
                        <li>
                            <a href="" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">FAQs</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Privacy policy</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Term & Conditions</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Company</h3>
                    <ul class="footer__links">
                        <li>
                            <a href="" class="footer__link">Blogs</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Comunity</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Our Team</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Help Center</a>
                        </li>
                        <li>
                            <a href="" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Details</h3>
                    <p class="footer__description">
                        <span><i class="fa-solid fa-location-dot"></i></span> Lorem ipsum dolor sit amet.
                    </p>
                    
                    <p class="footer__description">
                        <span><i class="fa-solid fa-envelope"></i></span> example@gmail.com
                    </p>
                    
                    <p class="footer__description">
                        <span><i class="fa-solid fa-phone"></i></span> (+62) 857 5789 7878
                    </p>
                </div>
            </div>

            <div class="footer__bottom">
                <p class="copyright">Copyright &copy 2023. All rights reserved</p>
                <span class="designer">Designed by </span>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>
