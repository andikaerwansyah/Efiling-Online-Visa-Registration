@extends('layouts.app')

@section('content')
  <div class="container py-3">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="card">
                  <div class="card-header text-center"><strong>Your Customer ID : {{Auth::user()->id_customer}} </strong></div>
                  <div class="card-body ">
                      <form class="form-horizontal" action="index.html" method="post">
                        <div class="form-group">
                          <label class=" control-label" for="relationship">What is this person relationship to you?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Mother</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Father</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Stepmother</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio"data-toggle="collapse" data-target="#show-me1">Stepfather</label>
                          </div>
                        </div>

                        {{-- =============================show on click====================== --}}

                        <div id="show-me1"  class="collapse">
                        <div class="form-group">
                          <label class="control-label" for="sel1">Marital Status:</label>
                          <div class="">
                            <select class="form-control" id="sel1">
                              <option>Single</option>
                              <option>Married</option>
                              <option>Divorced</option>
                              <option>Widowed</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Given Name</label>
                          <div >
                                <input class="form-control" type="text" name="given_name" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Last Name</label>
                          <div >
                                <input class="form-control" type="text" name="last_name" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Date of Birth</label>
                          <div >
                                <input class="form-control" type="date" name="date_of_birth" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Place of Birth</label>
                          <div >
                                <input class="form-control" type="text" name="place_of_birth" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Nationality</label>
                          <div >
                            <select class="form-control" id="sel1">
                                  <option>Indonesia</option>
                                  <option>Malaysia</option>
                                  <option>Singapore</option>
                                  <option>Thailand</option>
                                  </select>
                          </div>
                        </div>
                    </div>
          </form>
                    {{-- ======================end show=========================================== --}}

                      <form class="form-horizontal" action="index.html" method="post">
                        <div class="col-md-12 text-center">
                            <hr>
                          <h5>About your dependants.</h5>

                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">
                            Are there people who need you for financial support, including those  who
                            are travelling with you and those who are not?
                          </label>
                          <div class="">
                            <div class="radio">
                              <label><input type="radio" name="optradio" data-toggle="collapse" data-target="#show-me2">Children under 18</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" data-toggle="collapse" data-target="#show-me2">Childrem over 18 who live with you at home</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" data-toggle="collapse" data-target="#show-me2">Children who you look after all the time</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="optradio" data-toggle="collapse" data-target="#show-me2">Older relatives who need you for accomodation or other support</label>
                            </div>
                          </div>
                        </div>

                        <div id="show-me2" class="collapse">
                        <div class="form-group">
                          <label class="control-label" for="sel1">Marital Status:</label>
                          <div >
                            <select class="form-control" id="sel1">
                              <option>Single</option>
                              <option>Married</option>
                              <option>Divorced</option>
                              <option>Widowed</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Given Name</label>
                          <div >
                                <input class="form-control" type="text" name="given_name" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Last Name</label>
                          <div >
                                <input class="form-control" type="text" name="last_name" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Date of Birth</label>
                          <div >
                                <input class="form-control" type="date" name="date_of_birth" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Place of Birth</label>
                          <div >
                                <input class="form-control" type="text" name="place_of_birth" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="fullname">Nationality</label>
                          <div >
                                <input class="form-control" type="text" name="nationality" value="">
                          </div>
                        </div>
                    </div>


                        <div class="col-md-12 text-center">
                          <hr>

                          <a href="/home" class="btn btn-primary pull-left"><i class="fa fa-caret-left" aria-hidden="true"></i>  Back</a>
                          <a href="/employment" class="btn btn-primary pull-right">Save & Continue <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                      </form>
                  </div>
              </div>
          </div>
        </div>
  </div>

@endsection
