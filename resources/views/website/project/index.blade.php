@extends("website.layout.master")


@section('content')
@include('website.layout.component.nav')
<main style="margin-top: 0px;padding-top: 5%;">
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

    </div>
  </section>
</main>
@endsection