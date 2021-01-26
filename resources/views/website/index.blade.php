@extends("website.layout.master")
@section('style')
    
@endsection
@section('content')
@include('website.layout.component.header')
<main>

  <section class="who-we-are container--row u-margin-top-special u-margin-bottom-special">
    <div class="who-we-are__img">
      <img src="website/img/about-construction.png" alt="">
    </div>
    <!--./who-we-are__img -->
    <div class="who-we-are__text">
      <h2 class="secondary-heading">{{$aboutUs->titel }}</h2>
      
      <p class="paragraph">
      {{$aboutUs->description}}
      </p>
     
      <a href="#" class="btn">إقرا المزيد</a>
    </div>
  </section>

  <section class="offers u-margin-bottom-special container--row">
    <h2 class="secondary-heading u-center-text">خدماتنا</h2>
    
    <div class="offers__content">
      <div class="box">
        <div class="box__icon">
          <i class="mdi mdi-format-paint"></i>
        </div>
        <h5 class="box__title">نص هنا</h5>
        <p class="paragraph u-center-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
          libero aut repellat beatae ratione quam expedita quisquam maxime
          odit.
        </p>
      </div>

      <div class="box">
        <div class="box__icon">
          <i class="fa fa-flash"></i>
        </div>
        <h5 class="box__title">نص هنا</h5>
        <p class="paragraph u-center-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
          libero aut repellat beatae ratione quam expedita quisquam maxime
          odit.
        </p>
      </div>

      <div class="box">
        <div class="box__icon">
          <i class="fa fa-leaf"></i>
        </div>
        <h5 class="box__title">نص هنا</h5>
        <p class="paragraph u-center-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
          libero aut repellat beatae ratione quam expedita quisquam maxime
          odit.
        </p>
      </div>

      <div class="box">
        <div class="box__icon">
          <i class="fa fa-gavel"></i>
        </div>
        <h5 class="box__title">نص هنا</h5>
        <p class="paragraph u-center-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
          libero aut repellat beatae ratione quam expedita quisquam maxime
          odit.
        </p>
      </div>

      <div class="box">
        <div class="box__icon">
          <i class="mdi mdi-truck"></i>
        </div>
        <h5 class="box__title">نص هنا</h5>
        <p class="paragraph u-center-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
          libero aut repellat beatae ratione quam expedita quisquam maxime
          odit.
        </p>
      </div>

      <div class="box">
        <div class="box__icon">
          <i class="mdi mdi-city"></i>
        </div>
        <h5 class="box__title">نص هنا</h5>
        <p class="paragraph u-center-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
          libero aut repellat beatae ratione quam expedita quisquam maxime
          odit.
        </p>
      </div>
    </div>
  </section>

  <section class="our-team u-margin-bottom-special container--row">
    <h2 class="secondary-heading u-center-text">فريقنا</h2>
    
    <div class="our-team__content">
      @foreach ($teams as $person)
      <div class="team-member flex-it">
        <img src="{{$person->image}}" alt="Team " class="team-member__img">
        <h4 class="team-member__name">{{$person->name}}</h4>
        <span class="team-member__title">{{$person->description}}</span>
      </div>
      @endforeach
     
      {{-- <!--./team-member-->
      <div class="team-member flex-it">
        <img src="website/img/team-11.jpg" alt="Team " class="team-member__img">
        <h4 class="team-member__name">اصيل خالد</h4>
        <span class="team-member__title">مهندسة ديكور</span>
      </div>
      <!--./team-member-->
      <div class="team-member flex-it">
        <img src="website/img/team-12.jpg" alt="Team " class="team-member__img">
        <h4 class="team-member__name">علي علي</h4>
        <span class="team-member__title">إسطى شامنت</span>
      </div>
      <!--./team-member-->
      <div class="team-member flex-it">
        <img src="website/img/team-13.jpg" alt="Team " class="team-member__img">
        <h4 class="team-member__name">محمد احمد</h4>
        <span class="team-member__title">مشرف</span>
      </div>
      <!--./team-member--> --}}
    </div>
  </section>

  <section class="u-margin-bottom-special container--row our-projects u-responsive-margin-top">
    <h2 class="secondary-heading u-center-text">مشارعنا</h2>
   
    <div class="our-projects__content">
      @foreach ($projects as $project)
        <div class="project">
          <a href='{{url("/project/$project->id")}}' target="_blank" rel="noopener noreferrer">
          <img src="{{$project->image}}" alt="" class="project__img">
           <i > عرض </i>
          </a>
          <div class="overlay"></div>
        </div>
      @endforeach
     
      <!--./project-->
      {{-- <div class="project">
        <img src="website/img/img-20.jpg" alt="" class="project__img">
        <i class="mdi mdi-image-plus"></i>
        <div class="overlay"></div>
      </div>
      <!--./project-->
      <div class="project">
        <img src="website/img/img-21.jpg" alt="" class="project__img">
        <i class="mdi mdi-image-plus"></i>
        <div class="overlay"></div>
      </div>
      <!--./project-->
      <div class="project">
        <img src="website/img/img-22.jpg" alt="" class="project__img">
        <i class="mdi mdi-image-plus"></i>
        <div class="overlay"></div>
      </div>
      <!--./project-->
      <div class="project">
        <img src="website/img/img-23.jpg" alt="" class="project__img">
        <i class="mdi mdi-image-plus"></i>
        <div class="overlay"></div>
      </div>
      <!--./project-->
      <div class="project">
        <img src="website/img/img-24.jpg" alt="" class="project__img">
        <i class="mdi mdi-image-plus"></i>
        <div class="overlay"></div>
      </div>
      <!--./project-->
      <div class="project">
        <img src="website/img/img-25.jpg" alt="" class="project__img">
        <i class="mdi mdi-image-plus"></i>
        <div class="overlay"></div>
      </div>
      <!--./project-->
      <div class="project">
        <img src="website/img/img-26.jpg" alt="" class="project__img">
        <i class="mdi mdi-image-plus"></i>
        <div class="overlay"></div>
      </div>
      <!--./project--> --}}
    </div>
    <!--./our-projects__content-->
  </section>
  <section class="contact-us u-margin-bottom-special container--row" id="contact-us">
    <h2 class="secondary-heading u-center-text">يوجد نص هنا</h2>
    <h3 class="territiary-heading u-center-text u-margin-bottom-big">
      يوجد نص هنا
    </h3>

    <form action="#" class="form">
      <div>
        <input type="text" placeholder="أدخل إسمك" class="form__input">
        <input type="email" placeholder="أدخل إسمك" class="form__input">
      </div>
      <textarea class="form__message" cols="30" rows="10" placeholder="أكتب رسالتك"></textarea>
      <button type="submit" class="btn btn--submit">أرسل رسالتك</button>
    </form>
  </section>
  <section class="call-us u-padding-top-bottom-50">
    <div class="call-us__content container--row">
      <p class="paragraph u-color-white">
        خذ بعض الوقت و أرسل لنا متطلباتك و سنقوم بالرد عليك
      </p>
      <a href="#" class="btn btn-black">إتصل بنا</a>
    </div>
  </section>
</main>
@endsection
   
   