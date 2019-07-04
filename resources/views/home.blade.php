@extends('layouts.app')
 
@section('content')

{{--  Header  --}}
<div class="jumbotron jumbotron-fluid bg-primary text-light" style="margin-top:-24px;">
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
                <h5 class="font-weight-bold mt-3"><a href="{{$data->website}}">{{$data->nama}}</a></h5>
                <h6 class="text-muted">{{$data->location}}</h6>
                <h5 class="font-weight-bold mt-3">Expertise</h5>
                <h6 class="text-muted mb-3">{{$data->expertise}}</h6>
                <span class="mt-5 social-media">
                    <a href="{{$data->portofolio}}"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                    <a href="{{$data->github}}"><i class="fab fa-github" aria-hidden="true"></i></a>
                    <a href="{{$data->website}}"><i class="fa fa-globe" aria-hidden="true"></i></a>
                </span>
            </div>        
        </div>
    </div>
    @endforeach            
  </div>

  {{-- Contact Us --}}  
  <div class="container w-75 mt-5">
      <h2 class="text-center font-weight-bold">Contact Us</h2>
      <form action="{{ route('message.store') }}" method="POST">
        <div class="row justify-content-center my-3">
          <div class="col-sm-6 col-md-6">
            <label for="name" class="font-weight-bold">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
          </div>
          <div class="col-sm-6 col-md-6">
              <label for="email" class="font-weight-bold">E-Mail</label>
              <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
        </div>
        <label for="message" class="font-weight-bold">Message</label>
        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Type your message here..."></textarea>        
        <input class="btn btn-info text-light my-3" type="submit" value="Send Message">
        @csrf
      </form>
  </div>
</div>
@endsection