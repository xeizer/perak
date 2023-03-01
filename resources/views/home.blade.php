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
                        <img src="{{ asset('chenel.png') }}" width="100" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
