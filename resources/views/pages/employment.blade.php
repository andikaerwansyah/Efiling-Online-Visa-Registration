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
                          <label class=" control-label" for="question1">How much of your total money income is given to your family members and othe dependants?</label>
                          <div class="">
                                <input class="form-control" type="text" name="total_money" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="question1">
                            What is the cost to you personally of your trip in GBP(&euro;)?
                          </label>
                          <div class="">
                                <input class="form-control" type="text" name="total_money" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="question1">
                            The total ammount of money you have for this trip.
                          </label>
                          <div class="">
                                <input class="form-control" type="text" name="total_money" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="question1">
                          The cost of the aeroplane, boat or train tickets.
                          </label>
                          <div class="">
                                <input class="form-control" type="text" name="total_money" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="question1">
                            The cost of your accomodation.
                          </label>
                          <div class="">
                                <input class="form-control" type="text" name="total_money" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="question1">
                            The cost of your living expenses.
                          </label>
                          <div class="">
                                <input class="form-control" type="text" name="total_money" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="question1">
                            Is someone other than you paying for all a part of your trip?
                          </label>
                          <div class="">
                            <div class="radio-inline">
                              <label><input type="radio" name="optradio">Yes</label>
                            </div>
                            <div class="radio-inline">
                              <label><input type="radio" name="optradio">No</label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="question1">
                            How much do you spend each month on living cost?
                          </label>
                          <div class="">
                                <input class="form-control" type="text" name="total_money" value="">
                          </div>
                        </div>


                        <div class="col-md-12 text-center">
                          <hr>

                          <a href="/home" class="btn btn-primary pull-left"><i class="fa fa-caret-left" aria-hidden="true"></i>  Back</a>
                          <a href="/travel" class="btn btn-primary pull-right">Save & Continue <i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
