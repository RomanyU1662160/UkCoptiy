@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-3">
<div class="nav flex-column nav-pills border">
<a href=" #" class="nav-link btn btn-outline-info "> My details</a>
<a href=" #" class="nav-link btn btn-outline-info mt-2 "> update password</a>
<a href=" #" class="nav-link btn btn-outline-info mt-2"> update details</a>

</div>
<div class="nav flex-column nav-pills border mt-3">
<a href=" #" class="nav-link btn btn-outline-info "> Add a new Family</a>
<a href=" #" class="nav-link btn btn-outline-info mt-2 "> Join a family</a>
<a href=" #" class="nav-link btn btn-outline-info mt-2"> Join a church </a>

</div>
</div>
<div class="col-md-8">
@yield('account.content')

</div>
 </div>


</div>
@endsection
