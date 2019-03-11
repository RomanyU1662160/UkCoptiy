@extends('layouts.app')
@section('title', 'Church| dashboard')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection


@section('content')
<div class="alert">
<h3 class="text-info text-center">{{$church->name}}</h3>
</div>
<div class="row">
@include('churches.layouts.sideNav')
</div>
<div class="col-md-8">
    @yield('church.content')
</div>

</div>

@endsection

@section('scripts')
    @yield('church.scripts')
@endsection

