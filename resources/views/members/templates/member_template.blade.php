
<div class="row ">
    <div class="col border-bottom bg-light"> {{$member->fname .' '. $member->lname}}</div>
    <div class="col border-bottom "><p class="text"> <strong> DoB :</strong>  {{$member->dob}} </p></div>
    <div class="col border-bottom bg-light"><p class="text"> <strong> Email :</strong>  {{$member->email}} </p>
    </div>

    <div class="col border-bottom " >
        <div class="row">
        <a href="{{route('member.update',$member)}}" class="btn btn-outline-info mr-2"> Edit Details </a>
        <a href="#" class="btn btn-outline-danger ml-2"> Remove </a>
    </div>
    </div>
</div>

{{-- <div class="card col-md-4">
    <div class="card-title bg-info">
        <h5 class= "text-warning">{{$member->fname . $member->lname}}</h5>
    </div>
    <div class="card-body">
        <p class="text"> <strong> DoB :</strong>  {{$member->dob}} </p>
    </div>
</div> --}}


