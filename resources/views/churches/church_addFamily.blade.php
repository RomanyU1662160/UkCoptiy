@extends('churches.layouts.default')
@section('title', 'Church | new family')
@section('church.content')
<h3 class="text-info text-center"> New family </h3>


   @include('families.templates.newFamilyForm_template')


@endsection
