@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>Methenta thamai user kenek log unama Direct wenne. So uge dashboard eka hari mokak hari methana. :D<br> Oya PersoAd eka ebuwama aaye home page ekata yano. ethana aye login button eka thino. but dan user kenek log wela inne.<br> e login button eka ethanin ayin wela logout eka enna eno. but anith ewa hadanna danata me tika athi ne ;)
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
