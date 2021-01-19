<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل الدخول</title>
    <link
      rel="stylesheet"
      href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="website/css/main.css" />
  </head>
  <body>
    <!-- <div class="preloader">
      <img src="img/loader.svg" alt="Loader" />
    </div> -->
    <section class="section-login">
      <form action="{{url('/login')}}" method="POST" class="form-login" data-aos="fade-up">
        @csrf
        <img src="website/img/logo-black.png" alt="" class="form-login__img" />
        <input type="email" name="email" placeholder="إسم المستخدم"
        class="form-login__input">
        <input
        name="password"
          type="password"
          placeholder="كلمة المرور"
          class="form-login__input"
        />
        <button type="submit" class="form-login__input btn btn--primary">
          تسجيل الدخول
        </button>
      </form>
    </section>
    <script src="website/js/loader.js"></script>
  </body>
</html>
