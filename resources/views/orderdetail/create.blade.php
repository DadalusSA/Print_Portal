@extends('layouts.app')


@section('content')
<div class="row">
                <div class="col-md-12 col-lg-12 well">
                    <hr>
                    <h2 class="intro-text text-center">
                        Order Details
                    </h2>
                    <hr>
                </div>
            </div>
        </div>
        @if (count($errors))
        <div class="form-group">
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        </div>
        @endif
                   <form method="post" action="{{ route('orderdetails.store') }}"> 
                        {{ csrf_field() }}

                    <div class="container">
                        <div class="row">
                    <div class="form-group col-md-6 col-sm-12 input-group">
                        <div class="input-group-append">
                  <span class="input-group-text">Name</span>
                  </div>
                  <input type="text" class="form-control" name="name" placeholder="Username" aria-describedby="basic-addon1">
                
            </div>

                <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">GPN Number</span>
                  </div>
                  <input type="text" 
                         class="form-control" placeholder="Enter GPN no..." aria-describedby="basic-addon1"
                         id="user-gpn"
                         name="gpn_no">
                
            </div>
             <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Email</span>
                  </div>
                  <input type="text"
                         class="form-control" placeholder="Enter Email Address..." aria-describedby="basic-addon2"
                         id="user-email"
                         name="email">
                
            </div>
             <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Phone</span>
                  </div>
                  <input type="text" 
                         class="form-control" placeholder="Enter phone number..." aria-describedby="basic-addon1"
                         id="phone-number"
                         name="phone_no">
                
            </div>
             <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Mobile Phone</span>
                  </div>
                  <input type="text" 
                         class="form-control" placeholder="Enter Mobile Phone Number..." aria-describedby="basic-addon1"
                         id="mobilephone-number"
                         name="mobilephone_no" 
                         >
                
            </div>
            </div> </div>
            <br>
            <h3 class="text-center">Delivery details</h3>
            <br>
            <div class="container">
                        <div class="row">
            

              <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Engagement Code</span>
                  </div>
                  <input type="text" 
                         class="form-control"
                         placeholder="Engagement Code" 
                         aria-describedby="basic-addon1"
                         id="engagement-code"
                         name="engagement_code">
                
            </div>



             <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Engagement Name</span>
                  </div>
                  <input type="text" 
                         class="form-control" 
                         placeholder="Engagement Name" 
                         aria-describedby="basic-addon1"
                         id="engagement-name"
                         name="engagement_name">
                
            </div>

            <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Client Name</span>
                  </div>
                  <input type="text" 
                         class="form-control" 
                         placeholder="Desk" 
                         aria-describedby="basic-addon1"
                         id="client-name"
                         name="client_name">
               
            </div>
            <div class="input-group form-group col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Job Description</label>
              </div>
              <select title="jobdescription" class="custom-select" id="job-description" name="job_description">
                <option value="">Choose...</option>
                <option value="1st RD">1st RD</option>
                <option value="2nd RD">2nd RD</option>
                <option value="Amendments">Amendments</option>
                <option value="Others">Others</option>
              </select>
            </div>
            
             <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text">EP/EM Initial</span>
                  </div>
                  <input type="text" 
                         class="form-control" placeholder="EP/EM"
                         id="epem"
                         name="epem_initial">
               
            </div>

             

            <div class="form-group col-md-6 col-sm-12">
                     <div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy - HH p" data-link-field="delivery_date" data-link-format="dd MM yyyy - HH p">
                  <span class="input-group-text">Delivery Date</span>
                  
                  <input title="fake" type="text" class="form-control" size="16" value="" readonly="">
                  <div  class="input-group-append"  >
                                <span class="input-group-text"><i class="fa fa-times" aria-hidden="true"></i></span>

                             </div>  
                             <div id="datetimepicker1" class="input-group-append"> 
                                <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                
                               </div> 
                            </div>
                            <input name="delivery_date" type="hidden" id="delivery_date" value="">
                            </div>
                
            </div>

            <br>
                    <div class="text-right">
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>   
                    </div> 

                    
        </div>
                </form> 
                @include('layouts.footer')
                @section('script')
                 <script type="text/javascript">
             $(function ()
        {
               dateTime();
    function dateTime() {
        var datepicker = $('.form_datetime');
        datepicker.datetimepicker({
            format: 'dd MM yyyy - HH p',
            weekStart: 0,
            todayBtn:  0,
            autoclose: 1,
            todayHighlight: 0,
            startView: 2,
            minView: 1,
            forceParse: 0,
            showMeridian: 1
        });

        datepicker.datetimepicker('setDaysOfWeekDisabled', [0,6]);
        datepicker.datetimepicker('setStartDate', new Date());
    }

        });

        </script>
@endsection
@endsection

