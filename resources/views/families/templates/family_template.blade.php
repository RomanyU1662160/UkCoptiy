
<div class="card text-center">
<div class="card-header bg-secondary">
<h5 class="text-warning"><a href="{{route('family.members',$family)}}" class="text-warning"> {{$family->name}}</a></h5>

</div>

<div class="card-body ">
        <ul class="nav nav-tabs p-2 flex-fill bd-highlight " id="myTab" role="tablist">
                <li class="nav-item p-2 flex-fill bd-highlight">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#members{{$family->id}}" role="tab" aria-controls="members" aria-selected="true">Members</a>
                </li>
                <li class="nav-item p-2 flex-fill bd-highlight  ">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#birthdays{{$family->id}}" role="tab" aria-controls="birthdays" aria-selected="false">Upcomming birthdays</a>
                </li>
                <li class="nav-item p-2 flex-fill bd-highlight">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact{{$family->id}}" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
                       <!-- Button trigger modal -->

                <li class="nav-item p-2 flex-fill bd-highlight">
                    <a class="nav-link" id="newmember-tab" data-toggle="modal" data-target="#newmeberform{{$family->id}}" role="tab" aria-controls="newmember" aria-selected="false">Add New Member</a>
                  </li>


              </ul>

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
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active  " id="members{{$family->id}}" role="tabpanel" aria-labelledby="home-tab">

@foreach ($family->members as $member)
@include('members.templates.member_template')
@endforeach

</div>
  <div class="tab-pane fade  " id="birthdays{{$family->id}}" role="tabpanel" aria-labelledby="profile-tab">
      Birthdays</div>
  <div class="tab-pane fade  " id="contact{{$family->id}}" role="tabpanel" aria-labelledby="contact-tab">
      Contact Details
  </div>
  <div class="tab-pane fade " id="newmember{{$family->id}}" role="tabpanel" aria-labelledby="contact-tab">
 <form action="" method="post">
<div class="form-group">
    <label for="">First Name </label>
    <input type="text" class="from-control" id="fname" name="fname">
</div>
<div class="form-group">
    <label for="">Last Name </label>
    <input type="text" class="from-control" id="lname" name="lname">
</div>

 </form>
</div>
</div>
</div>
</div>
