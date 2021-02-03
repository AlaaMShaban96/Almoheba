@extends("website.layout.master")
@section('style')
    
@endsection
@section('content')
@include('website.layout.component.header')
<main>

  @if (isset($aboutUs))
  <section class="who-we-are container--row u-margin-top-special u-margin-bottom-special">
    <div class="who-we-are__img">
      <img src='{{asset("$aboutUs->image") }}' alt="">
    </div>
    <!--./who-we-are__img -->
    <div class="who-we-are__text">
      <h2 class="secondary-heading">{{$aboutUs->titel }}</h2>
      
      <p class="paragraph">
      {{$aboutUs->description}}
      </p>
     
      <a href="{{url('/about')}}" class="btn">إقرا المزيد</a>
    </div>
  </section>  
  @endif
  

  <section class="offers u-margin-bottom-special container--row">
    <h2 class="secondary-heading u-center-text">خدماتنا</h2>
    
    <div class="offers__content">
      <div class="box">
        <div class="box__icon">
          {{-- <i class="mdi mdi-format-paint"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13.783 15.172l2.121-2.121l5.996 5.996l-2.121 2.121zM17.5 10c1.93 0 3.5-1.57 3.5-3.5c0-.58-.16-1.12-.41-1.6l-2.7 2.7l-1.49-1.49l2.7-2.7c-.48-.25-1.02-.41-1.6-.41C15.57 3 14 4.57 14 6.5c0 .41.08.8.21 1.16l-1.85 1.85l-1.78-1.78l.71-.71l-1.41-1.41L12 3.49a3 3 0 0 0-4.24 0L4.22 7.03l1.41 1.41H2.81l-.71.71l3.54 3.54l.71-.71V9.15l1.41 1.41l.71-.71l1.78 1.78l-7.41 7.41l2.12 2.12L16.34 9.79c.36.13.75.21 1.16.21z" fill="white"/></svg>
        </div>
        <h5 class="box__title">مقاولات عامة</h5>
      </div>

      <div class="box">
        <div class="box__icon">
          {{-- <i class="fa fa-flash"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path d="M6 4H5a1 1 0 1 1 0-2h11V1a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1h-7v8l-2-2l-2 2V4z" fill="white"/></svg>
        </div>
        <h5 class="box__title">استشارة هنداسية</h5>
      </div>

      <div class="box">
        <div class="box__icon">
          {{-- <i class="fa fa-leaf"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="0.88em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 896 1024"><path d="M864 1024H544q-13 0-22.5-9.5T512 992v-32H384v32q0 13-9.5 22.5T352 1024H32q-13 0-22.5-9.5T0 992L192 32q0-13 9.5-22.5T224 0h128q13 0 22.5 9.5T384 32v32h128V32q0-13 9.5-22.5T544 0h128q13 0 22.5 9.5T704 32l192 960q0 13-9.5 22.5T864 1024zM512 192H384v256h128V192zM384 576v256h128V576H384z" fill="white"/></svg>
        </div>
        <h5 class="box__title"> رصف و صيانة الطرق</h5>
      </div>

      <div class="box">
        <div class="box__icon">
          {{-- <i class="fa fa-gavel"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 26 26"><path d="M8.813 0A1 1 0 0 0 8 1v1H4.406C3.606 2 3 2.606 3 3.406V24.5c0 .9.606 1.5 1.406 1.5H21.5c.8 0 1.406-.606 1.406-1.406V3.406c.1-.8-.512-1.406-1.312-1.406H18V1a1 1 0 0 0-1-1H9a1 1 0 0 0-.094 0a1 1 0 0 0-.094 0zM10 2h6v2h-6V2zM5 4h3v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4h3v20H5V4zm2 5v4h4V9H7zm1 1h2v2H8v-2zm5 0v2h6v-2h-6zm-6 5v4h4v-4H7zm6 1v2h6v-2h-6z" fill="white"/></svg>
        </div>
        <h5 class="box__title">الرفع المساحي  </h5>
      </div>

      <div class="box">
        <div class="box__icon">
          {{-- <i class="mdi mdi-truck"></i> --}}
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path d="M55.909 2L40.938 9.75l-13.875-6L8.091 5L2 58.25l19.615-1.667L43.386 62L62 55.25L55.909 2m-1.657 3.109l5.582 48.799l-16.064 5.825l-.089-1.874l14.171-5.35L53.01 7.916l-11.445 5.428l-.078-1.626l.371-.191l12.394-6.418m-11.637 30.34c.222-.472.44-1.135.544-2.065c0 0 1.102.054 2.458 3.009c0 0 .592-.059.297-1.988c0 0 2.117-.853.975-4.604c0 0 1.776 2.446 1.186-.734c0 0 1.948-2.388-.379-3.976c0 0 .08-1.761 1.479-1.535c0 0 1.398-3.636.724.681c0 0 .04.854.929 1.817c0 0 .383-1.419-.296-2.949c0 0 1.399-2.618 1.271-4.887c0 0-4.532 1.681-9.575 1.179c0 0 .246-.938-.443-1.465l-.141-2.965l.12-.057l9.984-4.734l4.488 41.341l-12.629 4.769l-.992-20.837m-1.838-17.594c-.521.743-1.967 3.028-1.088 4.396c0 0-.426 2.963-1.02-1.359c0 0-.971 2.551-2.285 1.982c0 0-.361 2.582-1.188.852c0 0 .677.285.826-.51c0 0-1.909-2.045-3.05 1.047c0 0-.932.371-.571 1.821c0 0 .654-1.196.994.625c0 0 .361-.284.512-2.615c0 0 .906-.452.206 1.39c0 0 2.076.033-1.141 1.874c0 0-.178-.03-.318-.736c0 0-.487 1.7-1.485 2.303c0 0 .234.679-.506.991c0 0-.401 1.052.553 1.052c0 0 .825-2.528 2.393-.539c0 0 .299-.113-.168-1.108c0 0 .824.316 1.143 1.619c0 0 .509-.088.59-1.221c0 0 .639-1.448 1.678.257c0 0-1.379-.399-1.737.992c0 0 .652-.285 1.058.114c0 0 .041.649-.375.9c.18.338.375.662.647.936a.449.449 0 0 1 .077.563c.734 1.256 2.09 2.928 3.039.259c0 0-1.27.721-1.695-1.268c0 0 2.563.326 3.745 2.897l.995 20.948l-19.932-5.59l.299-2.957c.414 1.061.899 1.492.899 1.492c-.563-4.615 2.767-7.572 2.767-7.572c.647-3.168-.998-4.59-2.523-5.23l.783-7.748c.314-.391.499-.652.499-.652c-.113-.389-.223-.73-.328-1.042l.759-7.518c.638.777.711 1.483.532 2.125c-.821 2.953.235 3.858.235 3.858c.641-2.494 2.841-2.892 2.841-2.892c-.126-2.332 1.228-4.983 1.228-4.983c-1.473-2.531-3.58-.824-4.684.384l.086-.849c.226-.291.462-.608.717-.97c0 0-.211-.145-.594-.251l.672-6.655l13.684 5.672l.096.04l.135 2.876M25.195 15.82c-.682.032-1.555.267-2.582.977c0 0-.488 4.482 2.314 1.673l-.313 3.101c-.366-1.224-1.234-1.65-1.234-1.65c-.85.514-.765 1.194-.765 1.194c.771.116 1.242 1.044 1.519 1.914c-.156.239-.423.512-.884.557c0 0 .537.807 1.057 1.033l-.057.556c-1.21-1.813-1.734 1.83-1.734 1.83c-2.991-3.333.794-5.001.794-5.001c-2.317-.979-3.39-3.785-3.39-3.785c-.113 1.743-.792 1.666-.792 1.666c-5.31-3.104-6.266 1.895-6.266 1.895c.843 2.648-.964 2.951-.964 2.951c1.75.302 2.653-2.121 2.653-2.121c3.618 1.818 1.697 8.331 1.697 8.331c1.411.83 1.807 3.559 1.807 3.559c.983.298 1.99.9 2.696 1.377c.137-.123.278-.24.426-.349c-1.65-1.166-1.653-3.054-1.653-3.054c1.497 0 3.089-1.29 4.238-2.476l-.62 6.143a7.688 7.688 0 0 0-.847-.163a3.727 3.727 0 0 0-.746.474l.122.095c-1.664 3.197.586 4.479.959 4.664l-.955 9.45l-13.236 1.035l4.415-41.814l13.018-.766l-.677 6.704m-2.674 36.423l20.159 5.654l.09 1.889l-20.496-5.1l.247-2.443m17.965-40.509l.076 1.59L27.02 7.711l.174-1.726l12.95 5.601l.342.148M9.889 6.886l16.317-1.075l-.181 1.794l-14.529.854l-4.737 44.874l14.765-1.157l-.246 2.428l-17.013 1.447L9.889 6.886" fill="white"/><path d="M32.062 36.617s2.122.397 1.273 4.486c0 0 .339 3.187 2.2 2.896c0 0 .508-4.599 2.881-8.122c0 0-.962.958-2.053-2.219c-.165.12-.389.148-.576-.038c-.47-.469-.754-1.06-1.06-1.654a.496.496 0 0 1-.051-.277c-1.544-.576-4.671-1.154-5.114 3.393c.001 0 .592 3.13 2.5 1.535" fill="white"/><path d="M31.09 25.995c.146 2.048.42 2.67.779 1.819c.361-.844-.779-1.819-.779-1.819" fill="white"/><path d="M30.449 27.928s.597-.088.426-.839c0 0-.426.044-.426.839" fill="white"/><path d="M30.219 23.811s-1.505 0-.973.769c.529.767.973-.769.973-.769" fill="white"/><path d="M37.74 42.468s.46-.938.445-2.384c.001 0-1.463 1.672-.445 2.384" fill="white"/><path d="M47.226 36.59s-1.06.967-.866 1.848c.191.884 1.121-.174.866-1.848" fill="white"/><path d="M51.465 39.717c.465-.814-2.547-1.822-2.547-1.822c.595.882 2.125 2.548 2.547 1.822" fill="white"/><path d="M48.096 39.891c.707-1.21-2.14-.631-2.14-.631s1.865 1.109 2.14.631" fill="white"/><path d="M49.215 40.143s-.57 1.275-2.688 1.812c0 0 .447 1.025 0 2.958c0 0 2.138-2.728 3.37 1.218c0 0 1.057.574 1.798-2.999c0 0-.889-1.287-1.185-3.117c.001-.001-.293 2.344-1.295.128" fill="white"/><path d="M49.633 28.51c.135-.113.24-.154.24-.154c-1.037-1.677-.658.74-.658.74c.067-.159.146-.281.227-.384c.055.716-.117 1.783-1.235 2.797c-.001 0 2.397-.904 1.426-2.999" fill="white"/><path d="M31.332 15.955c.523-1.226-1.121-2.622-1.121-2.622c.211 2.947.602 3.847 1.121 2.622" fill="white"/><path d="M29.288 16.116s.851-.126.61-1.204c0 0-.61.061-.61 1.204" fill="white"/></svg>

        </div>
        <h5 class="box__title"> تصميم الخرائط كاملة</h5>
      </div>

      <div class="box">
        <div class="box__icon">
          <i class="mdi mdi-city"></i>
        </div>
        <h5 class="box__title"> التصميم الداخلي</h5>
      </div>
    </div>
  </section>

  @if (isset($teams))
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
  @endif
 
@if (isset($projects))
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
@endif
  

</main>
@endsection
   
   