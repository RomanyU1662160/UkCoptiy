
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

