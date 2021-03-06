@extends('admin.layout.default')
@section('title')
    Send Emails
@stop
@section('main')
    <!-- Slider -->
    <div class="page-head">
        <h3>
            Send Emails
        </h3>
        <span class="sub-title">Send emails to users of Youpple</span>
    </div>

    <div class="wrapper">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                @include("inc/flash")
            </div>
        </div>

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">
                <section class="panel">
                    <header class="panel-heading">
                        Send Email
                    </header>
                    <div class="panel-body">
                        <form action="{{url('admin/sendemail')}}" method="post">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label class="control-label">Subject</label>
                                        <input type="text" name="subject" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">To</label>
                                        <select class="form-control" name="to">
                                            <option value="all">All Users</option>
                                            <option value="allsp">All Service Providers</option>
                                            <option value="allisp">All Individual Service Providers</option>
                                            <option value="allbsp">All Business Service Providers</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <textarea name="body" id="summernote" class="form-control" placeholder="Write your email" ></textarea>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" type="button" class="btn btn-info">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>


        </div>


    </div>
@stop

@section('styles')
    <link href="{{ url('') }}/assets/summernote/summernote.css" rel="stylesheet">
@stop
@section('scripts')
    <script src="{{ url('') }}/assets/summernote/summernote.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
        });
    });
    </script>
@stop
