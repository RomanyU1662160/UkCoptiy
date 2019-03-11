<h3 class="text-center text-info">{{$family->name}}</h3>
<div class="card-columns">
        <div class="card">
          <img class="card-img-top" src="{{asset('assets/familyavatar.jpg')}}" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title text-info text-center">{{$family->name}}</h5>
          <a class=" btn btn-outline-info float-right text-info" id="newmember-tab" data-toggle="modal" data-target="#newmeberform{{$family->id}}" role="tab" aria-controls="newmember" aria-selected="false">Add  Member</a>
          </div>

        </div>

         <div class="card">
                <div class=" bg-secondary"> <h5 class="card-header card-title text-warning text-center ">Members </h5></div>
                <div class="card-body bg-light">

                  @if (!$family->members->count())
                      <div class="row alert-secondary"> <p class="text-center"> No members to show</p> </div>
                  @else
                  @foreach ($family->members as $member)

                <div class="alert alert-secondary"> {{$member->fname .' '. $member->lname}} <a class=" btn-link text-info float-right" href="{{route('member.update',$member)}}"> Update</a>
                </div>
                  @endforeach
                    @endif
                </div>
                  <!-- Button trigger modal -->
                <div class="card-footer bg-light">
                        <a class=" btn btn-outline-info float-right text-info" id="newmember-tab" data-toggle="modal" data-target="#newmeberform{{$family->id}}" role="tab" aria-controls="newmember" aria-selected="false">Add  Member</a>
                </div>


         </div>

         <div class="card">
                <div class=" bg-secondary"> <h5 class="card-header card-title text-warning text-center ">Contact </h5></div>
                <div class="card-body bg-light">

                        @foreach ($family->members as $member)

                        <div class="alert alert-secondary">
                          <p class="text-info text-center">  {{$member->fname}}</p>

                            @if ($member->mobile && $member->email)

                            <div class="row ">
                            <div class="col"> <span class=" ">Email: {{$member->email}}</span></div>
                            <div class="col">
                            <span class=" ">Mobile:  {{$member->mobile}}</span>
                        </div>
                        </div>
                            @elseif($member->mobile)

                            <p class=" ">Mobile :{{$member->mobile}}</p>

                            @elseif($member->email)

                            <p class=" "> Email : {{$member->email}}</p>

                            @else
<div class="row">
                            <span class="col  text-warning">No contact information</span>
                             <a  href="{{route('member.update',$member)}}" class="btn-link text-info float-right"> Add contact</a>
                        </div>
                            @endif
                        </div>
                          @endforeach
                </div>
         </div>





        <div class="card">
            <div class="bg-secondary">
                    <h5 class="card-header card-title text-warning text-center ">Church </h5>
            </div>
                <div class="card-body bg-light">

                <p class="card-text"> This family is a member of  <a href="{{route('church.dashboard',$family->church)}}" class="text-info btn btn-outline-info"> {{$family->church->name}}</a></p>
                @foreach ($family->church->priests as $priest)

                <div class="alert alert-secondary">
                        <p class="text-info text-center">  {{$priest->getName()}}</p>

                          @if ($priest->mobile && $priest->email)

                          <div class="row ">
                          <div class="col"> <span class=" ">Email: {{$priest->email}}</span></div>
                          <div class="col">
                          <span class="">Mobile:  {{$priest->mobile}}</span>
                      </div>
                      </div>
                          @elseif($priest->mobile)

                          <p class=" ">Mobile :{{$priest->mobile}}</p>

                          @elseif($priest->email)

                          <p class=""> Email : {{$priest->email}}</p>

                          @else
<div class="row">
                          <span class="col  text-warning">No contact information</span>

                      </div>
                          @endif
                      </div>
                @endforeach

                </div>
         </div>

      <!-- Modal -->
      <div class="modal fade" id="newmeberform{{$family->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$family->id}}newmeberform" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title text-info" id="exampleModalCenterTitle"> New Member to <span class="text-warning">{{$family->name}}</span> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <form action="{{route('family.addNewMember',$family)}}" method="post">
                 <div class="modal-body">

                      @csrf
                     <div class="form-group">
                        <select name="title" id="title" class="form-control">
                            <option value="" class="btn disabled inactive"> Title </option>
                            <option value="Mrs"> Mr</option>
                            <option value="Miss"> Mrs</option>
                            <option value="Dr"> Miss</option>
                            <option value="Dr"> Dr</option>

                        </select>
                     </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="dob" id="dob">
                        </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-info">Add member</button>
                </div>
            </form>
              </div>
            </div>
          </div>
        {{-- end of Modal           --}}

      </div>
