
<div class="card col-md-4 ">
    <img class="card-img-top" src="{{asset('assets/parish.jpg')}}" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title text-truncate font-weight-bold">{{ $church->name}}</h5>
     <h6 class="card-subtitle mb-2 text-muted">{{$church->bishop}}</h6>
        <p class="card-text text-truncate">{{$church->about}}</p>
    <a href="{{route('church.dashboard',$church)}}" class="btn btn-info float-right">More Information ❯ </a>
    <a href="{{route('church.families',$church)}}" class="btn btn-info float-left">View families ❯ </a>

    </div>

</div>
