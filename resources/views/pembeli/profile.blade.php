@extends('pembeli/indexProfile')

@section('breadcrumb')
Data User
@endsection

@section('content')
<div class="col-lg-8">
  <div class="card mb-4">
    <div class="card-body">
      <h5>Data Profile</h5><br>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Full Name</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">   {{ Auth::user()->name }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Email</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">No Handphone</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0">{{ Auth::user()->no_hp }}</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Address</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"> {{ Auth::user()->kelurahan }}, {{ Auth::user()->detail_alamat }}, {{ Auth::user()->kecamatan }}, {{ Auth::user()->kabupaten }}, {{ Auth::user()->provinsi }}, ,{{ Auth::user()->kodepos }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4 mb-md-0">
        <div class="card-body">
          <h5>Produk yang anda jual</h5><br>
          
          <div class="card">
            <img src="{{asset('img_ktp/' .$user->img_ktp)}}" style="height: 60px; width:40px">
            <img src="{{asset('img_ktp_selfi/' .$user->img_ktp_selfi)}}" style="height: 60px; width:40px">
            
          </div>
      </div>
    </div>
  </div>
  <a href="{{ route('formPenjual',$user->id)}}" type="button" class="btn btn-outline-primary ms-1">Jual Produk</button>
</div>

@endsection
