@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Success</div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            Password reset successful.
                        </div>

                    You can now login from the application!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
