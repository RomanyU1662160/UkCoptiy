@extends('layouts.app')

@section('content')


            <div >
                 <h1 class="text-info  text-center"> Welcome to Coptiy  </h1>

                <h3 class="text-secondary text-center"> The secure database network for coptics in the UK  </h3>
            </div>
            <div>
<form action="" method="post"></form>

<div class="row m-4">
<form class="col-md-12" action="{{route('church.search')}}" method="post">
    @csrf
  <div class="form-group ">
    <div class="input-group col-sm-12 ml-4 ">
      <input type="text" class="form-control form-control-lg " id="search" placeholder="Type church name" name="search">
      <div class="input-group-prepend">
         <button class="input-group-text btn btn-info" type="submit"> Search</button>
        </div>
    </div>
  </div>
 @csrf
</form>
 </div>


            </div>

            <div class="row ">

@foreach($parishes as $parish )
               @include('parishes.templates.parish')
@endforeach
 </div>





@endsection
