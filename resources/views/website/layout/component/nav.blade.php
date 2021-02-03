<header class="header u-height">
    <div class="borderline u-padding-top-bottom-small u-dark">
      <div class="container--row flex-it">
        <div class="nav_icons">
          <img src="img/logo-black.png" alt="" class="logo logo-black u-hidden">
          <!-- <i class="mdi mdi-menu nav_icon hamburger-menu"></i> -->
          <div class="hamburger-menu">
            <div class="hamburger-menu__icon icon--top"></div>
            <div class="hamburger-menu__icon icon--mid"></div>
            <div class="hamburger-menu__icon icon--bottom"></div>
          </div>
          <img src="img/logo-white.png" alt="" class="logo logo-white">
        </div>
        <div class="flex-it">
          <nav class="navigation">
            <ul class="navigation__list">
              <li class="navigation__item">
                <a href="{{url('/')}}" class="navigation__link">الصفحة الرئيسية</a>
              </li>
              <li class="navigation__item">
                <a href="{{url('/about')}}" class="navigation__link">حولنا</a>
              </li>
              <li class="navigation__item">
                <a href="{{url('/teams')}}" class="navigation__link">فريقنا</a>
              </li>
              <li class="navigation__item">
                <a href="#contact-us" class="navigation__link">تواصل معنا</a>
              </li>
              <li class="navigation__item">
                <a href="{{url('/project')}}" class="navigation__link">مشاريعنا</a>
              </li>
              {{-- <li class="navigation__item">
                <a href="#" class="navigation__btn">أحصل على حاجتك</a>
              </li> --}}
            </ul>
          </nav>
        </div>
        <!--./header__content-->
      </div>
      <!--./container--row-->
    </div>
    <!--./borderline-->
  </header>