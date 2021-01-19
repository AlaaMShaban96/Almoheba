<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>شركة</title>
   @include('website.layout.include.style.style')
   @yield('style')
  </head>
  <body>
    <div class="preloader">
      <img src="website/img/loader.svg" alt="Loader" />
    </div>

    <header class="header background--1">
      <div class="borderline u-padding-top-bottom-small">
        <div class="container--row flex-it">
          <div class="nav_icons">
            <img src="website/img/logo-black.png"alt=""class="logo logo-black u-hidden"/>
            <!-- <i class="mdi mdi-menu nav_icon hamburger-menu"></i> -->
            <div class="hamburger-menu">
              <div class="hamburger-menu__icon icon--top"></div>
              <div class="hamburger-menu__icon icon--mid"></div>
              <div class="hamburger-menu__icon icon--bottom"></div>
            </div>
            <img src="website/img/logo-white.png" alt="" class="logo logo-white" />
          </div>
          <div class="flex-it">
            <nav class="navigation">
              <ul class="navigation__list">
                <li class="navigation__item">
                  <a href="index.html" class="navigation__link"
                    >الصفحة الرئيسية</a
                  >
                </li>
                <li class="navigation__item">
                  <a href="about.html" class="navigation__link">حولنا</a>
                </li>
                <li class="navigation__item">
                  <a href="team.html" class="navigation__link">فريقنا</a>
                </li>
                <li class="navigation__item">
                  <a href="#" class="navigation__link">تواصل معنا</a>
                </li>
                <li class="navigation__item">
                  <a href="#" class="navigation__link">مشاريعنا</a>
                </li>
                <li class="navigation__item">
                  <a href="#" class="navigation__btn">أحصل على حاجتك</a>
                </li>
              </ul>
            </nav>
          </div>
          <!--./header__content-->
        </div>
        <!--./container--row-->
      </div>
      <!--./borderline-->

      <div class="header__content container--row">
        <div class="header__content__icons">
          <i class="mdi mdi-arrow-right-bold arrow-right"></i>
          <i class="mdi mdi-arrow-left-bold arrow-left"></i>
          <div class="icons_circles">
            <div class="circle circle--1 active"></div>
            <div class="circle circle--2"></div>
          </div>
        </div>
        <div class="header__content-1">
          <h1 class="primary-heading">مرحبا بك في <br />شركة الموهيبة</h1>
         
          <div class="header__buttons">
            <a href="#" class="btn">تاريخنا</a>
            <a href="#" class="btn btn-white">مشاريعنا</a>
          </div>
        </div>
      </div>
    </header>

    <main>
          <!-- your content here -->
          @yield('content')
    </main>
    <footer class="footer">
      <div class="footer__content container--row">
        <p class="footer__paragraph">جميع حقوق النشر محفوظة &copy; لشركة</p>
        <div class="social-media">
          <a href="#" class="social-media__link">
            <img
              src="website/img/logo/facebook-circle.svg"
              alt=""
              class="social-media__icon"
            />
          </a>
          <a href="#" class="social-media__link">
            <img src="website/img/logo/linkedin-circle.svg"alt=""class="social-media__icon"/>
          </a>
        </div>
      </div>
    </footer>
    @include('website.layout.include.script.script')
    @yield('script')
  </body>
</html>
    