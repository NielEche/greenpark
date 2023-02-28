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
            <div class="col-lg-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-jet-dropdown-link class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>
                <!-- Authentication -->
            </div>
        </div>

    </div>

    {{-- @include('navigation-dropdown')--}}



    <div class="container">
        <div class="row">
            @if ($appointment->count() > 0)
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contact_form text-right py-1">
                    <a href="{{ route('ourdashboard.index') }}"><input type="submit" value="Book Now"
                            class=" btn-gold"></a>
                </div>
            </div>
            @else
            <p></p>
            @endif

            @if ($appointment->count() > 0)
            @foreach($appointment as $index => $appoint)
            @if ($appoint->user_id == auth()->user()->id)
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="accordion py-2" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="card-header text-white btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapse{{ $appoint->id }}" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    You have an Appointment on {{ date('d M Y', strtotime($appoint->date)) }} by
                                    {{ $appoint->time }}
                                </button>
                            </h2>
                        </div>

                        <div id="collapse{{ $appoint->id }}" class="collapse {{ $loop->first ? 'show' : '' }}"
                            aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            @if ($appoint->status == 'Approved')
                                            <button class=" btn btn-success">{{ $appoint->status }}</button>
                                            @endif
                                            @if ($appoint->status == 'Pending')
                                            <button class=" btn btn-primary">{{ $appoint->status }}</button>
                                            @endif
                                            @if ($appoint->status == 'Declined')
                                            <button class=" btn btn-danger">{{ $appoint->status }}</button>
                                            @endif
                                            <p><br>{{ $appoint->eventTxt }}</p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <h2 class="m-0" style="font-size:20px;">Location</h2>
                                            <p>{{ $appoint->location }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <div class="col-12 text-center">
                <h1>
                    <a href="{{ route('ourdashboard.index') }}" class="btn blue-btn text-black" id="add_appointment">
                        No Appointment. Book now
                    </a>
                </h1>
            </div>
            @endif


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
                    date: "Please enter a valid email address",
                    time: "Please enter a valid email address",
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
                        error: function (error) {
                            $('#Submit').val('Submit')
                            swal("Oops", "Something went wrong!", "error")
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
