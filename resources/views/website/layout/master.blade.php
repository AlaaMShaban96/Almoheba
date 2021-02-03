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
          <section class="contact-us u-margin-bottom-special container--row" id="contact-us">
            <h2 class="secondary-heading u-center-text">تواصل معنا</h2>

        
            <form action="{{url('/send')}}" class="form" method="POST">
              @csrf
              <div>
                <input name="name" type="text" placeholder="أدخل إسمك" class="form__input">
                <input name="email" type="email" placeholder="أدخل البريد الالكتروني" class="form__input">
              </div>
              <textarea name="message" class="form__message" cols="30" rows="10" placeholder="أكتب رسالتك"></textarea>
              <button type="submit" class="btn btn--submit">أرسل رسالتك</button>
            </form>
          </section>
          <section class="call-us u-padding-top-bottom-50">
            <div class="call-us__content container--row">
              <p class="paragraph u-color-white">
                خذ بعض الوقت و أرسل لنا متطلباتك و سنقوم بالرد عليك
              </p>
              <a href=" https://wa.me/218919336161" class="btn btn-black">إتصل بنا</a>
            </div>
          </section>
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
    