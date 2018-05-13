@extends('layouts.app')

@section('content')
  <div class="container py-3">
      <div class="row">
          <div class="col-md-10 mx-auto">
              <div class="card">

                  <div class="card-header text-center"><strong>Your Customer ID : {{Auth::user()->id_customer}} </strong></div>

                  <div class="card-body ">
                    <!-- alert message -->
                    <div class="alert alert-info alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Upload <strong> .JPG</strong> or <strong>.PDF</strong> files only
                    </div>

                      <form class="form-horizontal" action="/store"  enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label class=" control-label" for="file1">
                            1. Consent Letters and Proof of Relationship  : <br>
                            <small>This includes: Sponsor Letter From Parents, Custody/Courts Letters, Birth Certificate, Household Register</small>
                          </label>
                          <div>
                                <input class="form-control" type="file" name="user_upload">
                          </div>
                        </div>

                       <div class="form-group">
                          <label class=" control-label" >2. Employment Evidence  :</label>
                          <div>
                                <input class="form-control" type="file"  >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" >
                            3. Financial Evidence :<br>
                              <small>This includes: Bank Book, Bank Reference Letter, Financial Report, Marketing Documents.</small>
                          </label>
                          <div>
                                <input class="form-control" type="file" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" >
                            4. Educational Evidence :<br>
                              <small>This includes: High School & University Certificate Transcripts, School Reports, Letter From Educational Institute. </small>

                          </label>
                          <div>
                                <input class="form-control" type="file"   >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" >
                            5. Sponsor Evidence :<br>
                            <small>This includes: Sponsor Passport, Invitation Letter, Support Letter, Sponsor Proof of Accomodation.</small>

                          </label>
                          <div>
                                <input class="form-control" type="file"   >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" >6. Accomodation - Permanent / Temporary :</label>
                          <div>
                                <input class="form-control" type="file"   >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" >7. Tuberculosis (TB) Certificate  :</label>
                          <div>
                                <input class="form-control" type="file" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" >
                            8. Additional Documents / Others  :<br>
                            <small>e.g Death Certificate / Other Document etc</small>
                          </label>
                          <div>
                                <input class="form-control" type="file" >
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" >9. Appendix II  :</label>
                          <div>
                                <input class="form-control" type="file"  >
                          </div>
                        </div>
                      </div>
                        <div class="card-footer">
                          <a href="/home" class="btn btn-primary float-left"><i class="fa fa-caret-left" aria-hidden="true"></i>  Back</a>
                          <input class="btn btn-success float-right" type="submit" name="" value="Save & Continue">
                        </div>
                      </form>

              </div>
          </div>
      </div>
  </div>

@endsection
