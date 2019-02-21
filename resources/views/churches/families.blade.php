@extends('layouts.app')
@section('title','church families')
@section('content')
<h1 class="text-info text-center"> families</h1>
@foreach ($families as $family)
   @include('families.templates.family_template')
@endforeach

@endsection
