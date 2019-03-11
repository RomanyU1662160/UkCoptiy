@extends('layouts.app')
@section('title', 'Family|Dashboard')
@section('content')
<div class="alert">
<h3 class="text-info text-center">{{$family->name}}</h3>
</div>
<div class="row">
@include('families.layouts.sideNav')
</div>
<div class="col-md-8">
    @yield('family.content')
</div>

</div>

@endsection
