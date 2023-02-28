<!-- Modal -->
@php( $news = \App\Models\News::all() )
<div class="modal fade" id="news{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="news" aria-hidden="true">
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
                                <div class="col-lg-12">
                                    <div class="single-team-img">
                                        <img src="{{ asset('uploads/news') }}/{{ $data->file_path }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card border-0">
                                            <div class="card-header bg-transparent" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link bg-none" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <h2 class="content-title--01 content-title--02">{{ $data->title }}
                                                        </h2>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>{!! $data->about !!}</p>
                                                   
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
