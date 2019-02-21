@extends('layouts.app')

@section('content')


            <div >


                <h2 class="text-primary text-center">{{$parish->name}} </h2>
            </div>

            <div class="row ">

@foreach($regions as $region )
                <div class="card col-md-4 " >
                    <img class="card-img-top" src="{{asset('assets/parish.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title text-truncate font-weight-bold">{{ $region->name}}</h5>
                     <h6 class="card-subtitle mb-2 text-muted">{{$region->bishop}}</h6>
                        <p class="card-text text-truncate">{{$region->about}}</p>
                         <a href="#" class="btn btn-info float-right">More Information ❯ </a>
                    </div>
                </div>

@endforeach
 </div>
@endsection
