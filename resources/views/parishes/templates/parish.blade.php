 <div class="card col-md-4 " >
        <img class="card-img-top" src="{{asset('assets/parish.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-truncate font-weight-bold">{{ $parish->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$parish->bishop}}</h6>
                <p class="card-text text-truncate">{{$parish->about}}</p>
                <div class="">

                <a href="{{route('parish.regions',$parish->id)}}" class="btn btn-info btn-md-3 float-right">View Regions  </a>
                <a href="{{ route('parish.churches',$parish->id)}}" class="btn btn-info btn-md-3 float-left">View Churches  </a>
            </div>
        </div>
</div>
