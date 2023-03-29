@extends('layouts.admin')

@section('title', 'Admin Setting')

@section('content')

<div class="row">
     <div class="col-md-12 grid-margin">
        <form action="{{ url('/admin/settings')}}" method="POST">
            @csrf

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-6 mb-3">
                            <label>Website Name</label>
                            <input type="text" name="website_name" class="form-control" />
                       </div>
                       <div class="col-md-6 mb-3">
                            <label>Website URL</label>
                            <input type="text" name="website_url" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Page Title</label>
                            <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Keywords</label>
                            <textarea name="meta_keywords" class="form-control" row="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_descrip[tion" class="form-control" row="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-6 mb-3">
                            <label>Address</label>
                            <textarea name="address" class="form-control" rows="3"></textarea>
                       </div>
                       <div class="col-md-6 mb-3">
                            <label>Phone 1 *</label>
                            <input type="text" name="phone1" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone No. 2</label>
                            <input type="text" name="phone2" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Id 1*</label>
                            <input type="text" name="email1" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Id 2</label>
                            <input type="text" name="email2" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-6 mb-3">
                            <label>Address</label>
                            <textarea name="address" class="form-control" rows="3"></textarea>
                       </div>
                       <div class="col-md-6 mb-3">
                            <label>Phone 1 *</label>
                            <input type="text" name="phone1" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone No. 2</label>
                            <input type="text" name="phone2" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Id 1*</label>
                            <input type="text" name="email1" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Id 2</label>
                            <input type="text" name="email2" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website - Social Media</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-6 mb-3">
                            <label>Facebook (Optinal)</label>
                            <textarea type="text" name="facebook" class="form-control" rows="3"></textarea>
                       </div>
                       <div class="col-md-6 mb-3">
                            <label>Twitter (Optinal)</label>
                            <input type="text" name="twitter" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Instagram (Optional)</label>
                            <input type="text" name="instagram" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>YouTube (Optional)</label>
                            <input type="text" name="youtube" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary text-white">Save Settings</button>
            </div>

        </form>
     </div>
</div>

@endsection