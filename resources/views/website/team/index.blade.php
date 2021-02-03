@extends("website.layout.master")



@section('content')
@include('website.layout.component.nav')
if
    <main style="margin-top: 0px;padding-top: 5%;">
      <section class="team u-margin-top-medium container--row u-margin-bottom-medium">
        <h2 class="secondary-heading u-center-text">فريقنا</h2>

            <div class="u-margin-top-big  team__content">
                @foreach ($teams as $team)
                <div class="team-member card-info">
                    <div class="team-member__image card-info__img">
                        <img src='{{ asset($team->image)}}'/>
                    </div>
                    <div class="card-info__text">
                        <h2 class="team-member__name card-info__name">{{ $team->name}}</h2>

                        <span class="team-member__title card-info__title">{{ $team->titel }}</span>
                    
                    <!--./card-info__social-media-->
                    </div>
                    <!--./card-info__text-->
                </div>
                @endforeach
            
              <!--./team-member-->   
          <!--./our-team__content-->
            </div>
          </section>
          
      </section>
    </main>
@endsection