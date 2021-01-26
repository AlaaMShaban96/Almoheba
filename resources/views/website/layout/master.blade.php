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
      <img src="{{asset('website/img/loader.svg')}}" alt="Loader" />
    </div>

   

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
              src="{{asset('website/img/logo/facebook-circle.svg')}}"
              alt=""
              class="social-media__icon"
            />
          </a>
          <a href="#" class="social-media__link">
            <img src="{{asset('website/img/logo/linkedin-circle.svg')}}"alt=""class="social-media__icon"/>
          </a>
        </div>
      </div>
    </footer>
    @include('website.layout.include.script.script')
    @yield('script')
  </body>
</html>
    