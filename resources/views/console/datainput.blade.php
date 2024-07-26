@extends('layouts.app')

@section('content')
<br>

<section class="no-padding-top">
    <div class="container-fluid">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-12">
                <div class="block">
                    <div class="title"><strong>Polling Unit Data Input</strong></div>
                    <div class="block-body">
                        <form class="form-horizontal" action="{{ route('polling-unit.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Registered Voters</label>
                                <div class="col-sm-9">
                                    <input type="text" name="registered_voters" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Accredited Voters</label>
                                <div class="col-sm-9">
                                    <input type="text" name="accredited_voters" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Void Votes</label>
                                <div class="col-sm-9">
                                    <input type="text" name="void_votes" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Election Result</label>
                                <div class="col-sm-9">
                                    <input type="text" name="election_result" class="form-control" required>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-9 ml-auto">
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/js/front.js') }}"></script>
@endsection
