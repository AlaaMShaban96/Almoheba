@extends("website.layout.master")



@section('content')
@include('website.layout.component.nav')
    <main style="margin-top: 0px;padding-top: 5%;">
      <section class="about u-margin-top-bottom container--row">
        <div class="about__text">
          <h2 class="secondary-heading">{{ $aboutUs->titel }}</h2>
          <p class="paragraph">
            {!! $aboutUs->details !!}
          </p>
        
        </div>
        <div class="about__img">
          <img class="img" width="100%" src='{{asset("$aboutUs->image")}}' alt="" />
        </div>
      </section>
    </main>
@endsection

