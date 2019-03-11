@extends('layouts.app')
@section('title','church families')
@section('content')
<div class="alert">
<h3 class="text-info text-center">Families in {{$church->name}} </h3>
<div class="alert">
<a href="{{route('church.newFamily',$church)}}" class="btn btn-info text-center float-right">Add New Family</a>
</div>
</div>
@if (!$families->count())
<div class="alert">
    <h3 class="text-warning text-center"> No families to show </h3>
</div>
@else

@endif

@foreach ($families as $family)
   @include('families.templates.family_template')
@endforeach

@endsection
