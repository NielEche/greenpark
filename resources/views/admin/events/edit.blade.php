@extends('layouts.admin')

@section('title')
Admin Dashboard | Edit Events
@endsection

@section('content')

<div  id="editevent" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left pt-5">
                <h5>Edit <span class="semi-bold">Event Details</span></h5>
            </div>
            <div class="modal-body">
                <form action="/editevent" method="POST" enctype="multipart/form-data">
                    
                {{-- </form> --}}
                {{-- <form action="{{ route('events.update')}}" method="POST" enctype="multipart/form-data" name="events" id="events"> --}}
                    @csrf

                    <input type="hidden" name="id" value="{{$events['id']}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Image</label>
                                <input type="file" id="file_path" value="{{$events['file_path']}}" name="file_path" accept="image/*"
                                    class="form-control" >
                            </div>
                        </div>
                    </div> 

                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Image 2</label>
                                <input type="file" id="file_path1" value="{{$events['file_path1']}}" name="file_path1" accept="image/*"
                                    class="form-control" >
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Name</label>
                                <input type="text" value="{{$events['event_name']}}" name="event_name" placeholder="event name"
                                    class="form-control" >
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Theme</label>
                                <input type="text" value="{{$events['event_theme']}}" name="event_theme" placeholder=""
                                    class="form-control" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Date</label>
                                <input type="date" value="{{$events['date']}}" name="date" placeholder="" class="form-control"
                                    >
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Time</label>
                                <input type="time" value="{{$events['time']}}" name="time" placeholder="" class="form-control"
                                    >
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Event Venue</label>
                                <input type="text" value="{{$events['venue']}}" name="venue" placeholder="" class="form-control"
                                    >
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>About</label>
                                <textarea rows="10" type="text" value="" name="about" placeholder="About Event"
                                class="form-control">{{$events['about']}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 m-t-10">
                            <button value="submit"
                                class="btn btn-primary btn-block m-t-5"> <a class="text-white" href="{{ route('events.index') }}">Cancel</a></button>
                        </div>
                        <div class="col-md-4 m-t-10 sm-m-t-10">
                            <button type="submit" name="submit" id="submit" value="submit"
                                class="btn btn-success  btn-block m-t-5">Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    // $(document).ready(function () {

    //     $(function () {

    //         $('form[name=events]').validate({

    //             rules: {
    //                 // The key name on the left side is the name attribute
    //                 // of an input field. Validation rules are defined
    //                 // on the right side
    //                 event_name: "required",
    //                 event_theme: "required",
    //                 date: "required",
    //                 about: "required"
    //             },
    //             // Specify validation error messages
    //             messages: {
    //                 event_name: "Please enter your event name",
    //                 event_theme: "Please enter your event theme",
    //                 date: "Please select a date",
    //                 about: "Please write a description"
    //             },


    //             submitHandler: function (form) {
    //                 $('#submit').val('Submiting')
    //                 $.ajax({
    //                     url: form.action,
    //                     type: form.method,
    //                     data: $(form).serialize(),
    //                     success: function (response) {
    //                         if (response.success != true) {
    //                             swal({
    //                                 title: "OOPS!",
    //                                 text: resoponse.message,
    //                                 icon: "error",
    //                                 button: "Ok",
    //                             });
    //                             document.forms['events'].reset()
    //                             $('#submit').val('submit')
    //                         } else {
    //                             swal({
    //                                 title: "GOOD JOB!",
    //                                 text: response.message,
    //                                 icon: "success",
    //                                 button: "Ok",
    //                             });
    //                             document.forms['events'].reset()
    //                             $('#submit').val('submit')
    //                         }
    //                     },
    //                     error: function (xhr) {
    //                         $('#submit').val('submit')
    //                         swal({
    //                             title: "OOPS!",
    //                             text: "Something went wrong",
    //                             icon: "error",
    //                             button: "Ok",
    //                         });
    //                         document.forms['events'].reset()
    //                         $('#submit').val('submit')
    //                     }
    //                 });
    //             }
    //         });
    //     });

    // });

</script>
@endsection
