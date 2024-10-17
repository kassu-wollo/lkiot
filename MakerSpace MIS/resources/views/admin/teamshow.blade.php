@extends("admin.adminlayout")
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   Add Team Members
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Team Member Registration Form </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
        <form action="{{url('treg')}}" method="post">
     @csrf
    <fieldset>
                        <div class="form-floating mb-3">
                        <input class="form-control"  name="fname"="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Name</label>
                    </div>
                 
               
                    <div class="form-floating mb-3 ">
                        <input class="form-control" name="role" id="inputPassword" type="text" placeholder="Create a password" />
                        <label for="inputPassword">Role </label>
                    </div>
              
            <div class="form-floating mb-3">
                <input class="form-control" name="location" id="inputEmail" type="text" placeholder="name@example.com" />
                <label for="inputEmail">Location</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="phone" id="inputEmail" type="number" placeholder="name@example.com" />
                <label for="inputEmail">Phone</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="email" id="inputEmail" type="Email" placeholder="name@example.com" />
                <label for="inputEmail">Email</label>
            </div>
                    <div class="form-floating mb-3 ">
                        <input class="form-control" name="task" id="inputPassword" type="text" placeholder="Create a password" />
                        <label for="inputPassword">Tasks </label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input class="form-control" name="project" id="inputPassword" type="text" placeholder="Create a password" />
                        <label for="inputPassword">Project </label>
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
                <h4 align="center" >Team Members</h4> 
                </div>
                <a href="{{route('team')}}">add</a>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            
                            <tr>
                            <th><input type="checkbox" name="Achbox" value="regular" /></th>
                                <th>Full Name</th>
                                <th>Role</th>
                                <th>Loacation </th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Task</th>
                                <th>Project</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team as $item)
                            <tr>      
                                <td><input type="checkbox" name="chbox" value="regular" /></td>
                                <td>{{ $item->fname }}</td>
                                <td>{{ $item->role }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->task }}</td>
                                <td>{{ $item->project }}</td>  
                                <td>                           
                     <form action="{{route('delete',$item->email) }}" method="POST">
                        {{method_field('DELETE')}}
                                   @csrf
                     <button type="submit" class="btn btn-outline-danger">Delete</button>
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