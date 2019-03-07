<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('front.layouts.inc.head')
  </head>
  <body>
    <!-- main content-->
    <!-- header-->
    @include('front.layouts.inc.header')
    <!-- banner-->
    <!-- banner section-->
    <section class="banner container-fluid">
      <div class="banner__slide">
        <div class="banner__slide--item">
          <div class="container">
            <div class="banner__slide--text logo">
              <h1 class="logo-text-top">DECOLINE</h1><span class="logo-text-bottom">Обои ламинанты краски</span>
            </div>
            <div class="banner__slide--subtext"><span>Сделай свою жизнь более выдающейся</span></div>
            <ul class="banner__slide--socials">
              <li class="banner__slide--social circle"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="banner__slide--social"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="banner__slide--social circle"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="banner__slide--item">
          <div class="container">
            <div class="banner__slide--text logo">
              <h1 class="logo-text-top">DECOLINE</h1><span class="logo-text-bottom">Обои ламинанты краски</span>
            </div>
            <div class="banner__slide--subtext"><span>Сделай свою жизнь более выдающейся</span></div>
            <ul class="banner__slide--socials">
              <li class="banner__slide--social circle"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="banner__slide--social"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="banner__slide--social circle"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="banner__slide--item">
          <div class="container">
            <div class="banner__slide--text logo">
              <h1 class="logo-text-top">DECOLINE</h1><span class="logo-text-bottom">Обои ламинанты краски</span>
            </div>
            <div class="banner__slide--subtext"><span>Сделай свою жизнь более выдающейся</span></div>
            <ul class="banner__slide--socials">
              <li class="banner__slide--social circle"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="banner__slide--social"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="banner__slide--social circle"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- banner section    -->
    <!-- catalog section-->
    <section class="catalog container-fluid">
      <div class="container">
        <div class="title-primary title-primary__light">
          <h1 class="text-center">Katalog </h1>
        </div>
        <div class="row catalog__row">
          <div class="col-lg-3 col-md-6 catalog__item"><a class="catalog__item--wrapper" href="#">
              <div class="catalog__item--image"></div>
              <div class="catalog__item--title">
                <h3 class="text-center">Обои</h3>
              </div></a></div>
          <div class="col-lg-3 col-md-6 catalog__item"><a class="catalog__item--wrapper" href="#">
              <div class="catalog__item--image"></div>
              <div class="catalog__item--title">
                <h3 class="text-center">Ламинант</h3>
              </div></a></div>
          <div class="col-lg-3 col-md-6 catalog__item"><a class="catalog__item--wrapper" href="#">
              <div class="catalog__item--image"></div>
              <div class="catalog__item--title">
                <h3 class="text-center">Ламинант</h3>
              </div></a></div>
          <div class="col-lg-3 col-md-6 catalog__item"><a class="catalog__item--wrapper" href="#">
              <div class="catalog__item--image"></div>
              <div class="catalog__item--title">
                <h3 class="text-center">Ламинант</h3>
              </div></a></div>
        </div>
      </div>
    </section>
    <!-- catalog section-->
    <!-- news section-->
    <section class="news container">
      <div class="container">
        <div class="title-primary title-primary__light">
          <h1 class="text-center">Новости</h1>
        </div>
        <div class="news__slider">
          <div class="news__slider__item">
            <div class="news__slider--wrapper">
              <div class="news__slider--item">
                <div class="news__slider--image"></div>
                <div class="news__slider--text">
                  <h4>breaking news</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In cumque totam pariatur labore itaque illum. At exercitationem culpa blanditiis. Sint reiciendis sunt cum excepturi adipisci, quas commodi nobis ad quos!</p><a class="news__slider--button btn btn__dark" href="#">Подробнее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="news__slider__item">
            <div class="news__slider--wrapper">
              <div class="news__slider--item">
                <div class="news__slider--image"></div>
                <div class="news__slider--text">
                  <h4>breaking news</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In cumque totam pariatur labore itaque illum. At exercitationem culpa blanditiis. Sint reiciendis sunt cum excepturi adipisci, quas commodi nobis ad quos!</p><a class="news__slider--button btn btn__dark" href="#">Подробнее</a>
                </div>
              </div>
            </div>
          </div>
          <div class="news__slider__item">
            <div class="news__slider--wrapper">
              <div class="news__slider--item">
                <div class="news__slider--image"></div>
                <div class="news__slider--text">
                  <h4>breaking news</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In cumque totam pariatur labore itaque illum. At exercitationem culpa blanditiis. Sint reiciendis sunt cum excepturi adipisci, quas commodi nobis ad quos!</p><a class="news__slider--button btn btn__dark" href="#">Подробнее</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- news section-->
    <!-- about section-->
    <section class="about container-fluid">
      <div class="container">
        <div class="title-primary title-primary__dark">
          <h1 class="text-center">О Компании</h1>
        </div>
        <div class="row">
          <div class="col-md-6 about__logo logo">
            <h1 class="logo-text-top">DECOLINE</h1><span class="logo-text-bottom">Обои ламинанты краски</span>
          </div>
          <div class="col-md-6 about__text">
            <p class="about__text--content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><a class="about__text--button btn btn__light" href="#">Подробнее</a>
          </div>
        </div>
      </div>
    </section>
    <!-- brands section-->
    <section class="brands container-fluid">
      <div class="container">
        <div class="title-primary title-primary__light">
          <h1 class="text-center">Бренды</h1>
        </div>
        <div class="row brands__row">
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/hyatt.png"/></a></div>
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/tikkurila.png"/></a></div>
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/elitedesign.png"/></a></div>
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/vsyo.png"/></a></div>
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/hyatt.png"/></a></div>
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/tikkurila.png"/></a></div>
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/elitedesign.png"/></a></div>
          <div class="col-md-3 brands__item"><a class="brands__item--link" href="#"><img src="/front/images/vsyo.png"/></a></div>
        </div><a class="brands__button btn btn__gradient" href="#">Ещё бренды</a>
      </div>
    </section>
    <!-- brands section -->
    <!-- footer-->
    <footer class="footer container-fluid">
      <div class="container">
        <div class="row footer__row">
          <div class="col-md-4 footer__column">
            <div class="footer__subtitle"> 
              <h3>All rights are reserved 2019</h3>
            </div>
            <ul class="list-unstyled footer__list">
              <li class="footer__list--item"><a href="#">О компании</a></li>
              <li class="footer__list--item"><a href="#">Новости</a></li>
              <li class="footer__list--item"><a href="#">Сотрудники</a></li>
              <li class="footer__list--item"><a href="#">вакансии</a></li>
            </ul>
          </div>
          <div class="col-md-4 footer__column">
            <div class="footer__subtitle"> 
              <h3>Будте всегда в курсе!</h3>
            </div>
            <div class="footer__form">
              <form>
                <input class="footer__input" type="email" name="" placeholder="E-mail"/>
              </form>
              <p>Оставайтесь на связи</p>
              <ul class="footer__list--inline list-inline">
                <li class="footer__list--item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                <li class="footer__list--item circle"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="footer__list--item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="footer__list--item circle"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 footer__column">
            <div class="footer__subtitle"> 
              <h3>Наш контакты</h3>
            </div>
            <div class="footer__info">
              <div class="footer__info--item">998 (71) 121 12 12</div>
              <div class="footer__info--item">info@decoline.uz</div>
              <div class="footer__info--item">г. Фергана </div>
              <div class="footer__info--item">у. Алишер Навои</div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer-->
    <!-- main content-->
    <!-- js files goes here-->
    @include('front.layouts.inc.scripts')
  </body>
</html>
