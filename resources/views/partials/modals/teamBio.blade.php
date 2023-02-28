<!-- Modal -->
<div class="modal fade" id="teambio{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="teambio" aria-hidden="true">
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
                                            <div class="card-header bg-transparent px-0" id="headingOne">
                                                <h2 class="mb-0 mt-1">
                                                    <button style="text-decoration: none !important;" class="btn btn-link bg-none" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="figure-member__content">
                                                            <h4 class="figure-member__heading mt-0">{{ $data->name }}</h4>
                                                            <div class="figure-member__position pl-4">{{ $data->position }}</div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <p>{!!$data['bio']!!}</p>
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
