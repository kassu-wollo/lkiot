@extends('admin.adminlayout')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 Add Maker Space
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Maker Space</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{url('mreg')}}" method="post">
@csrf
    <fieldset>
                        <div class="form-floating mb-3">
                        <input class="form-control"  name="name"="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Maker Space Name</label>
                    </div>
      
            <div class="form-floating mb-3">
                <input class="form-control" name="email" id="inputEmail" type="Text" placeholder="The aime of  the project " />
                <label for="inputEmail">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="phone" id="inputEmail" type="text" placeholder="name@example.com" />
                <label for="inputEmail">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="status" id="inputEmail" type="number" placeholder="name@example.com" />
                <label for="inputEmail">Phone</label>
            </div>
            
                    <div class="form-floating mb-3 ">
                        <input class="form-control" name="descrbition" id="inputPassword" type="text" placeholder="Create a password" />
                        <label for="inputPassword">Status </label>
                    </div>
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-2 mb-md-0">
                        <button type ="Submit" class="btn btn-primary btn-block form-control">Register</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                     <button type="reset" class=" btn btn-primary btn-block form-control">Clear</button>
                    </div>
                </div>
            </div>
    </fieldset>
</form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4 align="center" >Makerspace Report List</h4> 
                </div>
                <div class="row mb-1">

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            
                            <tr>
                            <th><input type="checkbox" name="Achbox" value="regular" /></th>
                                <th>Maker Space Name</th>
                                <th>Descrbition</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th><a href="{{url('admin.edit')}}">Edit</a></th>
                                <th><a href="{{url('admin.edit')}}">Delete</a></th>
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