<!-- Modal -->
@php( $attorneys = \App\Models\Attorneys::all() )
<div class="modal fade" id="attorneys{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="attorneybio" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="single-team-img">
                                        <img src="{{ asset('uploads/attorneys') }}/{{ $data->file_path }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card border-0">
                                            <div class="card-header bg-transparent" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link bg-none" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <h2 class="content-title--01 content-title--02">{{ $data->name }}
                                                        </h2>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <p>{!! $data->bio !!}
                                                </p>
                                                    <ul class="single-team-soclist mb-0">
                                                        <li>
                                                            <a href="{{ $data->twitter }}">
                                                                <i class="fa fa-twitter gold-c" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ $data->facebook }}">
                                                                <i class="fa fa-facebook gold-c" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ $data->linkedin }}">
                                                                <i class="fa fa-linkedin gold-c" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ $data->instagram }}">
                                                                <i class="fa fa-instagram gold-c"
                                                                    aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
