@extends('layouts.app')

@section('content')


            <div >


                <h3 class="text-primary text-center"> All Parishes in the UK </h3>
            </div>

            <div class="row ">

@foreach($parishes as $parish )
               @include('parishes.templates.parish')
@endforeach
 </div>
@endsection
