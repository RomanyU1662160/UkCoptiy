@extends('layouts.app')
@section('title','All churches')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section('content')

<table class="table table-hover  " id="datatable">
        <thead class="thead-info">
          <tr>
            <th scope="col"></th>
          <th scope="col">Church Name</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($churches as $church)
            <tr>
                    <th scope="row">{{$x++}}</th>
                    <td>{{$church->name}}</td>
                  </tr>
            @endforeach



        </tbody>
      </table>


@endsection

@section('scripts')

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection
