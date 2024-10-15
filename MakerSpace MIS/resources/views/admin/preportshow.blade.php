@extends("admin.adminlayout")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4 align="center" >Progress Report</h4> 
                </div>
                <a href="{{route('report'}}">add</a>
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

@endsection