@extends('layouts.admin.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Connections</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="/images/logos/steam_512x512.png" alt="...">
                                    <div class="caption">
                                        <h3 style="text-align: center;">Steam</h3>
                                        @if (empty(Auth::user()->steamid))
                                            <p><a href="{{ route('auth.steam') }}" class="btn btn-success" style="width: 100%;" role="button">Connect to steam</a></p>
                                        @else
                                            <p><a href="#" class="btn btn-success disabled" style="width: 100%;" role="button">You are already connected</a></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin.footer')