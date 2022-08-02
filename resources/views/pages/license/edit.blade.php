@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card text-center shadow-lg rounded-0">
                <form action="/admin/update/{{$id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h3 class="text-center">License Registeration</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="license_name">License Type</label>
                                <select class="form-control border-0" name="license" id="license">
                                    <option value="Film License">Film License</option>
                                    <option value="Export License">Export License</option>
                                    <option value="Wildlife Utilization Permit">Wildlife Utilization Permit</option>
                                </select>
                        </div>
            
                            <div class="form-group">
                                <label>Amount Paid</label>
                                <select class="form-control border-0" name="fee_paid" id="fee_paid">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Approved</label>
                                <select class="form-control border-0" name="approval" id="approval">
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
            
                        </br></br>
                            <div class="form-group">
                                <button type="submit" name="upload" class="btn btn-success" style="width: 70%">Submit</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection