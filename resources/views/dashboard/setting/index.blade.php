@extends('dashboard.layout.master')

@section('style')
    <style>
        .post-content-text {
            white-space: nowrap; 
            width: 100%; 
            overflow: hidden;
            text-overflow: ellipsis; 
           
        }
        .image-card-content{
            width: 77%;
            height: 245px;
        }
    </style>

@endsection
@section('content')
<div class="content">
  @if(Session::has('message'))
  
     <p class="alert alert-success">{{ Session::get('message') }}</p>
  @endif
  <div class="container-fluid">

    <div class="row" style="text-align: right;">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">: اعدادات الموقع </span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#boos" data-toggle="tab">
                      <i class="material-icons">bug_report</i>صور الخلفية 
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="#employ" data-toggle="tab">
                      <i class="material-icons">cloud</i> موظف
                      <div class="ripple-container"></div>
                    </a>
                  </li> --}}
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body" style="text-align: right;">
            <div class="tab-content">
              <form action="{{url('/Dashboard/setting')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="tab-pane active" id="boos">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <label for="">صورة رقم 1 : </label>
                        </td>
                        <td>
                          <input type="file" name="photos[]" id="" required>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label for="">صورة رقم 2 : </label>
                        </td>
                        <td>
                          <input type="file" name="photos[]" id=""required>
                        </td>
                      </tr>
                      <tr>
                        @if (count($covers)==0)
                        <td>
                            <button type="submit" class="btn  btn-success"> حفظ</button>
                        </td>
                        @endif
                      </form>
                      @if (count($covers)!=0)
                        <td>
                          <a href="#" onclick="deletee()" rel="tooltip"  class="btn  btn-warning" >
                            اعادة تحميل
                          </a>
                        </td>
                      @endif
                      
                      </tr>
                    </tbody>
                  </table>
                </div>
              

              {{-- <div class="tab-pane" id="employ">
                <table class="table">
                  <tbody>
                 
                  </tbody>
                </table>
         
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card card-profile">
          <div class="card-avatare" style="width: 30%;margin-right: 35%;">
            <a href="javascript:;">
              <img src="{{asset('website/img/logo-black.png')}}" alt="Circle Image" class="img-raised rounded img-fluid">
              {{-- <img class="img" src="{{asset('website/img/logo-black.png')}}"> --}}
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">شركة الموهيبة </h6>
            <h4 class="card-title">اسم المستخدم : admin1@nano-tech.ly</h4>
            <form id="" action='{{url("Dashboard/restpassword")}}' method="POST" enctype="multipart/form-data">
              @csrf  
              @method('POST')
                <p class="card-description">
                  <div class="form-group form-file-upload form-file-multiple bmd-form-group">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-fab btn-round btn-danger check">
                          <i class="material-icons">vpn_key</i>
                        </button>
                      </span>
                    
                      <input type="text" name="password" id="password" class="form-control inputFileVisible" placeholder="كلمة السر الجديدة ">

                    </div>
                  </div>
                </p>
                <input type="submit" class="btn btn-danger btn-round"value="تغير كلمة السر ">
            </form>
          </div>
        </div>\
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span>{{ $error }}</span>
              </div>
            @endforeach
        @endif
      </div>
      <form style="display: none" id="delete" action="{{url('/Dashboard/setting/')}}" method="post">
        @method('delete')
        @csrf
      {{-- <button  type="submit"></button> --}}
    
    </form>
    </div>
  </div>
</div>
@if ($errors->any())
@foreach ($errors->all() as $error)
 <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
      <i class="feather icon-info mr-1 align-middle"></i>
      <span>{{ $error }}</span>
  </div>
@endforeach
@endif

<script src="{{asset('dashboard/team/index.js')}}"></script>


@endsection
@section('script')

<script>
  function deletee() {
              
    document.getElementById("delete").submit();
  }
</script>
    
@endsection