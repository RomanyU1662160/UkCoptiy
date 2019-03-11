<div id="familyform">
<form action="{{route('church.newFamily',$church)}}" method="post">
    @csrf
        <div class="form-group">
        <label for="husband" class=" col-form-label"> Family </label>


            </div>
       <div class="form-group">
           <label for="husband" class=" col-form-label"> Husband's name</label>
           <input class="form-control col " type="text" id="husband" name="husband" placeholder="Type husband's name" >

       </div>
       <div class="form-group">
            <label for="husband" class=" col-form-label"> Wife's name</label>

            <input class="form-control col" type="text" id="wife" name="wife" placeholder="Type wife's name" >

        </div>
       <div class="form-group">
            <button type="submit" class="btn btn-info float-right"> Add a new family</button>
       </div>
</form>
</div>

