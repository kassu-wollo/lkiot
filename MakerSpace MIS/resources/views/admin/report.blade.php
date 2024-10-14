@extends("admin.adminlayout")
@section('content')
<form action="#" method="post">
    <fieldset>
    <h1> New Progress Report Forms</h1>
                        <div class="form-floating mb-3">
                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Acompleshiments</label>
                    </div>
                    <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPassword" type="date" placeholder="Create a password" />
                        <label for="inputPassword">Report Date </label>
                    </div>
                </div>
                
            </div>
            
            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                <label for="inputEmail">Challenges</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                <label for="inputEmail">Opprotunities</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                <label for="inputEmail">Next Step</label>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPassword" type="date" placeholder="Create a password" />
                        <label for="inputPassword">Ende Dat </label>
                    </div>
                </div>
                
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