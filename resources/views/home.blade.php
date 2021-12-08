@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Admin {{Auth::user()->prenom }}  {{Auth::user()->nom }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Great to have you back !') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection