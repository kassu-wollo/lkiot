@extends('admin.adminlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4 align="center" >Makerspace Report List</h4> 
                </div>
                <div class="row mb-1">
                <div class="col-md-3">
                    <div class="form-floating mb-2 mb-md-0">
                        <a href="{{url('admin.mregister')}}">Add Makerspace</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            
                            <tr>
                            <th><input type="checkbox" name="Achbox" value="regular" /></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Descrbition</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($maker as $item)
                            <tr>      
                                <td><input type="checkbox" name="chbox" value="regular" /></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->descrbition }}</td>
                                <td>
                        
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

@endsection