@extends('employees.layout')
@section('content')
<div class="card" style="margin: 20px;">
<div class="card-header">Create New Employee</div>
<div class="card-body">
    <form action="{{ url('employee')}}" method="post" enctype="multipart/form-data">
{!! csrf_field()!!}
<label>Name</label></br>
<input type="text" name="name" id="name" class="form-control"></br>

<label>Address</label></br>
<input type="text" name="address" id="address" class="form-control"></br>

<label>Mobile</label></br>
<input type="text" name="mobile" id="mobile" class="form-control"></br>

<input class="form-control" name="photo" type="file" id="photo"></br>
<input type="submit" value="save" class="btn btn-success"></br>
    </form>
</div>
</div>