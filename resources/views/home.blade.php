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
                        <p>
                            <b>Name : </b>{{ Auth::user()->name }}
                        </p>
                        <p>
                            <b>Id : </b>{{ Auth::user()->id }}
                        </p>
                        <p>
                            <b>Password : </b>{{ Auth::user()->password }}
                        </p>
                        <p>
                            <b>Created At : </b>{{ Auth::user()->created_at }}
                        </p>
                        <p>
                            <b>Updated At : </b>{{ Auth::user()->updated_at }}
                        </p>
                        <p>
                            <b>Guid : </b>{{ Auth::user()->guid }}
                        </p>
                        <p>
                            <b>Domain : </b>{{ Auth::user()->domain }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
