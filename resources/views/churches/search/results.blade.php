@extends('layouts.app')
@section('title','church families')
@section('content')
@foreach ($churches as $church)
    @include('churches.templates.church_template')
@endforeach

@endsection
