@extends("admin.adminlayout")
@section('content')
<form action="{{url('mreg')}}" method="post">
@csrf
    <fieldset>
    <h1> Maker Space </h1>
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
@endsection