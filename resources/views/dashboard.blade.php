@extends('layouts.guest')

@section('title')
Appointment
@endsection

@section('style')
    <style>
        form .error {
  color: #ff0000;
}
    </style>
@endsection
@section('content')
<main class="content-row">
    <div class="page-header page-header-07">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Appointment</h2>
                </div>
            </div>
        </div>
    </div>

    @include('navigation-dropdown')

    <div class="container">
        <div class="row">
           
            {{-- @foreach($appointment as $index => $appoint)
            @if ($appoint->user_id == auth()->user()->id)
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="card-header text-white btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Appointment on 20 june 2020
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            --}}
     

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div id="app"></div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex ">
                <div class="card border-0 mt-5 flex-fill" id="event">
                    <div class="card-header py-3 text-center">
                        Book Appointment
                    
                    </div>
                    <div class="card-body px-1 py-3">
                        <form method="POST" action="{{ route('appointment.store') }}" class="apppointment" name="appointment" id="appointment">
                            @csrf
                            @method('POST')
                            <input class="d-none" type="text" value="{{ $userId = Auth::id() }}" name="user_id" id="user_id" readonly>
                            <div class="d-flex">
                                    <div class="form-group w-100 px-1">
                                        <label for="date">Date</label><br>
                                        <input type="text" class="form-control bg-white" name="date" id="appointment_date" value="" readonly>
                                        {{-- <span class="event-date form-control" id="date" name="date" >06 June 2020</span> --}}
                                    </div>
                                    <div class="form-group w-100 px-1" >
                                        <label for="time">Time</label><br>
                                        
                                        <input type="time" class="form-control" id="time" name="time">
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="details">Appointment Details</label>
                                <textarea name="eventTxt" class="form-control" id="eventTxt" cols="30" rows="6"></textarea>
                            </div>
                    
                            <div class="">
                                <div class="form-group pull-right">
                                    <input type="submit" value="Submit" class="btn btn-gold" id="Submit">
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>                            
            </div>

        </div>
    </div>

    <!--<div class="col-sm-12 col-12 d-flex pa-sm">
        <div class="card border-0 mt-5 flex-fill d-none" id="event">
            <div class="card-header py-3 text-center">
                Book Appointment
                <button type="button" class="close hide">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body px-1 py-3">
                <div class="text-center">
                    <span class="event-date">06 June 2020</span><br>
                    <span class="event-day">Monday</span>
                </div> 
                <div class="events-today my-3 px-3">
                   
                </div>

                
                <div class="input-group events-input mb-3 col-10 mx-auto mt-2">
                    <input type="text" class="form-control" placeholder="Add Appointment" id="eventTxt1">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button" id="createEvent">+</button>
                    </div>
                </div>                        
            </div>
        </div>                            
    </div>

    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast" style="position: absolute; top: 0; right: 15px;" data-delay="3000">
            <div class="toast-header">
            <strong class="mr-auto">Calendar</strong>
            <small>Just now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="toast-body">
                
            </div>
        </div>
    </div>-->


    <div class="indents-90"></div>
</main>
@endsection

@section('script')
 <script src="{{ asset('files/calender/js/script.js') }}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(function () {

            $('#appointment').validate({

                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    name: "required",
                    phone: "required",
                    date: "required",
                    time: "required",
                    eventTxt: "required",
                    email: {
                        required: true,
                        email: true
                    },
                },
                // Specify validation error messages
                messages: {
                    name: "Please enter your name",
                    phone: "Please enter your phone",
                    email: "Please enter a valid email address",
                    date: "Please select date from calender",
                    time: "Please enter a valid time",
                    eventTxt: "Please enter a valid descreiption"
                },


                submitHandler: function (form) {
                    $('#Submit').val('Submiting')
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function (response) {
                            swal({
                            title: "Good job!",
                            text: "You booked an appointment!",
                            icon: "success",
                            button: "Ok",
                            });
                            document.forms['appointment'].reset()
                            $('#Submit').val('Submit')
                            // $('#answers').html(response);
                        },
                        error: function(error){
                            $('#Submit').val('Submit')
                            swal ( "Oops" ,  "Something went wrong!" ,  "error" )
                        }
                    });
                }
            });
        });

    });

    

</script>

@endsection


