@extends('layouts.app')
 
@section('content')

{{--  Header  --}}
<div class="jumbotron bg-primary text-light" style="margin-top:-24px;">
  <div class="container py-5 text-center">
    <h1 class="display-5 font-weight-bold">Hopecoding</h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla odio ipsa</p>
    <i class="fa fa-caret-down" aria-hidden="true"></i>
  </div>
</div>

{{--  Content  --}}
<div class="container">
  <h2 class="text-center font-weight-bold">Our Team</h2>
  <div class="row justify-content-center">
    @foreach ($siswa as $data)
    <div class="col-sm-3 mt-4">
        <div class="card shadow-small">
            <div class="card-body text-center">                
                <img src="{{ asset('storage/img/') }}{{ '/' . $data->img }}" class="img-card rounded-circle" alt="...">
                <h5 class="font-weight-bold mt-3">{{$data->nama}}</h5>
                <h6 class="text-muted">{{$data->location}}</h6>
                <h5 class="font-weight-bold mt-3">Expertise</h5>
                <h6 class="text-muted mb-3">{{$data->expertise}}</h6>
                <span class="mt-5 social-media">
                    <a href="{{$data->portofolio}}"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                    <a href="{{$data->github}}"><i class="fab fa-github" aria-hidden="true"></i></a>
                    <a href="{{$data->website}}"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                </span>
            </div>        
        </div>
    </div>
    @endforeach            
  </div>
</div>

@endsection