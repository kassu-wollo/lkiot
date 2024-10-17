@extends("admin.adminlayout")
@section('content')

<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open Form
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Progress Report Forms</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{url('reg')}}" method="post">
                  @csrf
    <fieldset>
                        <div class="form-floating mb-3">
                        <input class="form-control"  name="acomp"="inputFirstName" type="text" placeholder="Enter your first name" />
                        <label for="inputFirstName">Acompleshiments</label>
                    </div>
                    <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="rdate" id="inputPassword" type="date" placeholder="Create a password" />
                        <label for="inputPassword">Report Date </label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="challenge" id="inputEmail" type="text" placeholder="name@example.com" />
                <label for="inputEmail">Challenges</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="oppo" id="inputEmail" type="text" placeholder="name@example.com" />
                <label for="inputEmail">Opprotunities</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="nstep" id="inputEmail" type="text" placeholder="name@example.com" />
                <label for="inputEmail">Next Step</label>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" name="edate" id="inputPassword" type="date" placeholder="Create a password" />
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
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4 align="center" >Progress Report</h4> 
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            
                            <tr>
                            <th><input type="checkbox" name="Achbox" value="regular" /></th>
                                <th>Accompleshment</th>
                                <th>report date</th>
                                <th>Challenge</th>
                                <th>opportunities</th>
                                <th>next step</th>
                                <th>ende date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>      
                                <td><input type="checkbox" name="chbox" value="regular" /></td>
                                <td>{{ $item->acomp }}</td>
                                <td>{{ $item->rdate }}</td>
                                <td>{{ $item->challenge }}</td>
                                <td>{{ $item->oppo }}</td>
                                <td>{{ $item->nstep }}</td>
                                <td>{{ $item->edate }}</td>
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

</body>
@endsection