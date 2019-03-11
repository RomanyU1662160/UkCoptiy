@extends('layouts.app')
@section('title', 'Edit Member')
@section('content')

<h3 class="text-info text-center"> Update Member </h3>
<form action="{{route('member.update',$member)}}" method="post">
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
                       <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" value="{{$member->fname ? : old('fname')}}">
                       </div>
                       <div class="form-group">
                           <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" value="{{$member->lname ? : old('lname')}}">
                       </div>
                       <div class="form-group">
                           <input type="date" class="form-control" name="dob" id="dob" value="{{$member->dob ? : old('dob')}}">
                       </div>
                       <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{$member->email ? : old('email')}}">
                        </div>
                          <div class="form-group">
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile number (optional)" value="{{$member->mobile ? : old('mobile')}}">
                          </div>
                          <div class="form-group">
                                <input type="text" class="form-control col" name="house" id="house" placeholder="house (optional)" value="{{$member->house ? : old('house')}}">
                                <input type="text" class="form-control col" name="adress" id="adress" placeholder="Adress (optional)" value="{{$member->adress ? : old('adress')}}">
                                <input type="text" class="form-control col" name="postcode" id="postcode" placeholder="postcode (optional)" value="{{$member->postcode ? : old('postcode')}}">
                      </div>

               </div>
               <div class="modal-footer">
               <a href="{{URL::previous()}}" class="btn btn-secondary">Cancel</a>
                 <button type="submit" class="btn btn-info">Update Details</button>
               </div>
           </form>

@endsection
