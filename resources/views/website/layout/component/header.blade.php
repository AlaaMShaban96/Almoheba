@php
   $first= App\Models\Cover::all()->get(0);
   $second= App\Models\Cover::all()->get(1);
  //  $first= App\Models\Cover::first();
@endphp
<style>
  .background--1{
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("{{$first->image}}")
  }
  .background--2{
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("{{$second->image}}")
  }
</style>
<header class="header background--1" >
    <div class="borderline u-padding-top-bottom-small">
      <div class="container--row flex-it">
        <div class="nav_icons">
          <img src="{{asset('website/img/logo-black.png')}}"alt=""class="logo logo-black u-hidden"/>
          <!-- <i class="mdi mdi-menu nav_icon hamburger-menu"></i> -->
          <div class="hamburger-menu">
            <div class="hamburger-menu__icon icon--top"></div>
            <div class="hamburger-menu__icon icon--mid"></div>
            <div class="hamburger-menu__icon icon--bottom"></div>
          </div>
          <img src="{{asset('website/img/logo-white.png')}}" alt="" class="logo logo-white" />
        </div>
        <div class="flex-it">
          <nav class="navigation">
            <ul class="navigation__list">
              <li class="navigation__item">
                <a href="{{url('/')}}" class="navigation__link"
                  >الصفحة الرئيسية</a
                >
              </li>
              <li class="navigation__item">
                <a href="{{url('/about')}}" class="navigation__link">حولنا</a>
              </li>
              <li class="navigation__item">
                <a href="{{url('/teams')}}" class="navigation__link">فريقنا</a>
              </li>
              <li class="navigation__item">
                <a href="#" class="navigation__link">تواصل معنا</a>
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
      
      </div>
    </div>
  </header>