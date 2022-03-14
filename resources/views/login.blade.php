@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row" style="margin-left:300px";>
        <div class="col-sm-8 col-sm-offset-4">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" style="width:100%" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" style="width:100%" name="password">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection