@extends('layouts.app')

@section('title','User Profile')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
             <h4>User Profile</h4>
             <div class="underline mb-4"></div>
            </div>
            
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-black">
                        <h4 class="mb-0 text-white">User Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('profile') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="md-3">
                                    <label>Username</label>
                                    <input type="text" name="username" value="{{ Auth::user()->name }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="md-3">
                                    <label>Email Address</label>
                                    <input type="text" readonly value="{{ Auth::user()->email }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="md-3">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" value="" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="md-3">
                                    <label>Zip/Pin Code</label>
                                    <input type="text" name="Zip_code" value="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-3">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" row="3"></textarea>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
          </div>
        </div>
    </div>
</div>

@endsection