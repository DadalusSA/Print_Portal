@extends('layouts.app')

@section('content')

 <div class="container">

                    <div class="row">
                            <div class="col-md-12 col-lg-12 well">
                                <hr>
                                <h2 class="intro-text text-center">
                                    Upload Files
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
                   <form action="{{route('uploaddetails.store')}}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="container">
                            <div class="row">
                            <div class="form-group col-md-12 col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-text"><strong>New File</strong></div>
                                    <input class="form-control file" type="file" id="content-file" name="content_file">
                                </div>
                            </div>

                <div class="input-group form-group col-md-5 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Media Source</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">CD</option>
                <option value="2">FlashCard</option>
                <option value="3">Hardcopy</option>
                <option value="4">Others</option>
              </select>
            </div>
            <div class="col-md-2 text-center">
              <label style="margin-top:5px">From:</label>
            </div>
             <div class="input-group form-group col-md-5 col-sm-12">
              <div class="input-group-prepend">
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">Internal Mail</option>
                <option value="2">Pick Up</option>
              </select>
            </div>

            <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Total number of pages</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Pages to print" name="number_page" aria-describedby="basic-addon1">
                
            </div>

        </div>
        </div>
        <br>
            <h3 class="text-center">Print details</h3>
            <br>
            <div class="container">
                        <div class="row">
                          <div class="form-group col-md-6 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">Quantity/Copies</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Pages to print" aria-describedby="basic-addon1">
                
            </div>
              <div class="input-group form-group col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Print Type</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">Color</option>
                <option value="2">Mono</option>
                <option value="3">N/A</option>
              </select>
            </div>
            <div class="input-group form-group col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Paper Weight</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">80 GSM</option>
                <option value="2">105 GSM</option>
                <option value="3">128 GSM</option>
              </select>
            </div>
            <div class="input-group form-group col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Finished Size</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">A3</option>
                <option value="2">A4</option>
                <option value="3">A5</option>
                <option value="2">A6</option>
                <option value="3">Other</option>
              </select>
            </div>
            <div class="input-group form-group col-md-4 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Orientation</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">Portrait</option>
                <option value="2">Landscape</option>
              </select>
            </div>
            
            <div class="input-group form-group col-md-4 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Side</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">Single Sided</option>
                <option value="2">Double Sided</option>
              </select>
            </div>
            
            <div class="input-group form-group col-md-4 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Collating</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">Collated</option>
                <option value="2">Uncollated</option>
              </select>
            </div>
             </div>
        </div>
        <br>
            <h3 class="text-center">Finishing details</h3>
            <br>
            <div class="container">
                        <div class="row">
                          <div class="input-group form-group col-md-4 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Stapling</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>None</option>
                <option value="1">Top left</option>
                <option value="2">Double on left</option>
                <option value="1">Saddle / Booklet</option>
                <option value="2">Corner Protection</option>
              </select>
            </div>
            <div class="input-group form-group col-md-4 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Binding and Covers</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>None</option>
                <option value="1">Wire</option>
              </select>
            </div>
            <div class="input-group form-group col-md-4 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Front Cover</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>None</option>
                <option value="1">Advisory</option>
                <option value="2">Solutions LLP</option>
                <option value="3">LLP</option>
              </select>
            </div>
            <div class="input-group form-group col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Back Cover</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>None</option>
                <option value="1">Advisory</option>
                <option value="2">Solutions LLP</option>
                <option value="3">LLP</option>
              </select>
            </div>
            <div class="input-group form-group col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Hole punching</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>None</option>
                <option value="1">2 Holes</option>
                <option value="2">4 Holes</option>
              </select>
            </div>
                          <div class="form-group col-md-12 input-group">
                     <div class="input-group-append" >
                  <span class="input-group-text" id="basic-addon2" style="font-size:25px; padding:36px">Remarks</span>
                  </div>
                   <textarea title="remarks" name="remarks" class="form-control" rows="4" style="resize: none;"></textarea>
                
            </div>

            <div class="form-group col-md-12 col-sm-12 input-group">
                     <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">File Name</span>
                  </div>
                  <input type="text" class="form-control" placeholder="File Name (To Represent on Pick Up Order)" aria-describedby="basic-addon1">
                
            </div>

            </div>

            <br>

            <br>  
            <div class="text-right">
                    <button type="submit" class="btn btn-lg btn-primary">Upload</button>   
                    </div>
                </div>




</form> 
@include('layouts.footer')

@endsection