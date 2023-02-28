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

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div id="app"></div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex ">
                <div class="card border-0 mt-5 flex-fill" id="event">
                    <div class="card-header py-3 text-center">
                        Book Appointment

                    </div>
                    <div class="card-body px-1 py-3">
                        <form method="POST" action="{{ route('ourdashboard.store') }}" class="apppointment"
                            name="appointment" id="appointment">
                            @csrf
                            @method('POST')

                            <div class="d-flex">
                                <div class="form-group w-100 px-1">
                                    <label for="date">Date</label><br>
                                    <input type="text" class="form-control bg-white" name="date" id="appointment_date"
                                        value="" readonly>
                                    {{-- <span class="event-date form-control" id="date" name="date" >06 June 2020</span> --}}
                                </div>
                                <div class="form-group w-100 px-1">
                                    <label for="time">Time</label><br>

                                    <input type="time" class="form-control" id="time" name="time">
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="form-group w-100 px-1">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>

                                <div class="form-group  w-100 px-1">
                                    <label for="location">Location</label>
                                    <select class="form-control" id="location" name="location">
                                        <option value="in-house">In-House </option>
                                        <option value="virtual">Virtual</option>
                                    </select>
                                </div>
                            </div>


                            {{-- @if($user = auth()->user())
                            <div class="form-group d-none">
                                <label for="name">Name</label>
                                <input type="text" value="{{ ($user->name)}}" class="form-control" id="name"
                            name="name">
                            </div>

                            <div class="form-group d-none">
                                <label for="email">Email</label>
                                <input type="email" value="{{($user->email)}}" class="form-control " id="email" name="email">
                            </div>
                            @endif --}}

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


    <div class="indents-90"></div>
</main>
@endsection

@section('script')
<script src="{{ asset('files/calender/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(function () {

            $('form[name=appointment]').validate({

                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    phone: "required",
                    location: "required",
                    date: "required",
                    time: "required",
                    eventTxt: {
                        required: true,
                        minlength: 10
                    },
                },
                // Specify validation error messages
                messages: {
                    phone: "Please enter your phone",
                    location: "Please pick location type",
                    date: "Please select date from calender",
                    time: "Please enter a valid time",
                    eventTxt: {
                        required: "This field is required",
                        minlength: "Description must be 10 characters or more"
                    }
                },


                submitHandler: function (form) {
                    $('#Submit').val('Submiting')
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function (response) {
                            if (response.success != true) {
                                swal({
                                    title: "OOPS!",
                                    text: resoponse.message,
                                    icon: "error",
                                    button: "Ok",
                                });
                                document.forms['appointment'].reset()
                                $('#Submit').val('Submit')
                            } else {
                                swal({
                                    title: "GOOD JOB!",
                                    text: response.message,
                                    icon: "success",
                                    button: "Ok",
                                });
                                document.forms['appointment'].reset()
                                $('#Submit').val('Submit')
                            }
                        },
                        error: function (xhr) {
                            $('#Submit').val('Submit')
                            swal({
                                title: "OOPS!",
                                text: "Something went wrong",
                                icon: "error",
                                button: "Ok",
                            });
                            document.forms['appointment'].reset()
                            $('#Submit').val('Submit')
                        }
                    });
                }
            });
        });

    });

</script>

@endsection



@section('footer')
@include('partials.footer')
@endsection
