@extends('layouts.app')
@section('content')
<h1 class="text-center">Login Now</h1>
<form action="">
    <div class="m-auto bg-warning p-4" style="width:500px">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password">
        </div>
        <button type="button" class="btn btn-primary">Primary</button>
    </div>
</form>
@endsection