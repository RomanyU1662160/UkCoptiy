@extends('churches.layouts.default')
@section('title', 'Church | new family')
@section('church.content')
<div id="datatable"></div>
{{-- @include('families.templates.familiesDataTable') --}}

<table class="table table-hover  " id="datatable">
        <thead class="thead-info">
          <tr>
            <th scope="col"></th>
          <th scope="col">Family Name</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($families as $family)
            <tr>
                    <th scope="row">{{$x++}}</th>
                    <td>{{$family->name}}</td>
                  </tr>
            @endforeach



        </tbody>
      </table>


@endSection
@section('church.scripts')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection
