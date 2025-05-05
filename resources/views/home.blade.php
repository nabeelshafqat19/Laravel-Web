@extends('layouts.app')

@section('content')
<br><br><br><br>
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><img src="{{Url('/admin/images/tick.png')}}" width="200px">
                    <br><br><br><br>
                    <h4>Account Registered Successfully</h4>
                    <h4>Go to Home</4> <a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
