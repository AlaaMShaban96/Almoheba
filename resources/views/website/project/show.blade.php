@extends("website.layout.master")
@section('style')
<style>
  div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}



</style>
    
@endsection

@section('content')
@include('website.layout.component.nav')

<main style="margin-top: 0px;padding-top: 5%;" >
    <section class="about u-margin-top-bottom container--row project">
        <div class="about__text project__text">
            <h2 class="secondary-heading">{{$project->name}}</h2>
            <p class="paragraph">
                {!!$project->details!!}
            </p>

        </div>
        <div class="about__img project__img">
            <img src='{{asset("$project->image")}}' style="width: 100%;" alt="">
        </div>
          
    </section>
    <section class="about u-margin-top-bottom container--row project">
        @foreach ($project->images as $image)
      
                {{-- <img src="{{asset("$image->image")}}" class="img-thumbnail" alt="Cinque Terre">  --}}
                <div class="about__img project__img">
                  <img src='{{asset("$image->image")}}' style="width: 100%;" alt="">
              </div>
        @endforeach
    </section>

</main>
@endsection