@extends('layouts.app')

@section('content')


            <div >


                <h2 class="text-info text-center">Churches in  {{$parish->name}} </h2>
            </div>
<div class="row">
{{$churches->links()}}
</div>
            <div class="row ">

@foreach($churches as $church )
           @include('churches.templates.church_template')

@endforeach
 </div>
@endsection
