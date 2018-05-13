@extends('layouts.app')

@section('content')
  <div class="container py-3">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="card">
                  <div class="card-header text-center"><strong>Your Customer ID : {{Auth::user()->id_customer}} </strong></div>
                  <div class="card-body ">
                      <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label " for="relationship">Have you been issued any visa for the uk , UK overseas Territories or Commonwealth Country in the last 10 years?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>

                          <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label  " for="relationship">Have you ever travelled to the UK in the last 10 years ?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>

                        <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label  " for="relationship">Have you made an application to the Home Office to remain in the UK in the last 10 years?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>

                        <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label  " for="relationship">Have you been refused entry to the UK in the last 10 years  (e.g: at a UK airport or seaport)?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>

                      <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label  " for="relationship">Have you been refused a visa for any country including the UK in the last 10 years</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>

                        <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label  " for="relationship">Have you been deported, removed or otherwise required to leave any country including the UK in the last 10 years?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>

                      <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label  " for="relationship">Have you ever voluntarily elected to depart the UK?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>

                      <form class="form-horizontal"  action="index.html" method="post">
                        <div class="form-group">
                          <label class="col-md-10 control-label  " for="relationship">Are you, or have you been subject to, an exclusion order from the UK ?</label>
                          <div class="radio-inline">
                            <label><input id="show" type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">Yes</label>
                          </div>
                          <div class="radio-inline">
                            <label><input id="show"  type="radio" name="optradio" data-toggle="collapse" data-target="#show-me1">No</label>
                          </div>
                        </div>
                      </form>


                        <hr>
                        <a href="/home" class="btn btn-primary pull-left"><i class="fa fa-caret-left" aria-hidden="true"></i>  Back</a>
                        <a href="/upload" class="btn btn-primary pull-right">Save & Continue <i class="fa fa-caret-right" aria-hidden="true"></i> </a>


                  </div>
              </div>
          </div>
        </div>
  </div>

@endsection
