@extends("admin.adminlayout")
@section('content')
<form action="{{url('treg')}}" method="post">
@csrf
    <fieldset>
    <h1> Team Member Registration Form Forms</h1>
                        <div class="form-floating mb-3">
                        <input class="form-control"  name="fname"="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Name</label>
                    </div>
                    <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="role" id="inputPassword" type="text" placeholder="Create a password" />
                        <label for="inputPassword">Role </label>
                    </div>
                </div>
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
@endsection