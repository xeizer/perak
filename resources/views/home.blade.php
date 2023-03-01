@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header text-white" style="background-color: rgba(0, 42, 255, 0.993)">
                        {{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2 class="text-center ">selamat datang</h2>
                        <center>
                            <img src="{{ asset('chenel.png') }}" width="100" />
                        </center>

                        @if (Auth::user()->level == 'masyarakat')
                            <a href="{{ url('/lapor') }}" class="btn btn-outline-dark w-100 mt-2 btn-lg">
                                LAPOR PAK
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
