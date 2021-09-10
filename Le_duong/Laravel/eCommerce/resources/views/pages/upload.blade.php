@extends('layouts.home')
@section('name','Upload')
@section('content')

    <!--account-starts-->
    <div class="account">
        <div class="container">
            <div class="account-top heading">
                <h2>Upload image</h2>
            </div>
            <div class="account-main">
                <div class="col-md-12 account-left">
                    <div class="account-bottom">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Upload image</label>
                                <input type="file" class="form-control-file" name="photo">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--account-end-->

@endsection
