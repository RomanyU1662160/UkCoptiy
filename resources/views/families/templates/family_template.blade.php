
<div class="card text-center">
<div class="card-header">
<h5 class="text-info">{{$family->name}}</h5>

</div>

<div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item  ">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#members" role="tab" aria-controls="members" aria-selected="true">Members</a>
                </li>
                <li class="nav-item  ">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#birthdays" role="tab" aria-controls="birthdays" aria-selected="false">Upcomming birthdays</a>
                </li>
                <li class="nav-item  ">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
              </ul>
<div class="tab-content  " id="myTabContent">
  <div class="tab-pane fade show active  " id="members" role="tabpanel" aria-labelledby="home-tab">
      Family members </div>
  <div class="tab-pane fade  " id="birthdays" role="tabpanel" aria-labelledby="profile-tab">
      Birthdays</div>
  <div class="tab-pane fade  " id="contact" role="tabpanel" aria-labelledby="contact-tab">
      Contact Details
  </div>
</div>
</div>
</div>
