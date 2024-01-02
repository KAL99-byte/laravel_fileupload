@extends('employees.layout')
@section('content')
<div class="container">
    <div class="row">
<div class="col-12" style="padding: 20px">
    <div class="card">
        <div class="card-header">
            Laravel 10 Image Upload and Display
        </div>
        <div class="card-body">
            <a href="{{ url('employee/create')}}" class="btn btn-success btn-sm" >
            Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Telephone</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                </thead>
<tbody>
    @foreach($employees as $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->mobile}}</td>
        <td>
            <img src="{{ asset($item->photo)}}" width='50' height='50'>
        </td>
    </tr>
    @endforeach
</tbody>




                </table>
            </div>
        </div>
    </div>

</div>
    </div>


</div>