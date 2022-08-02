@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card text-center shadow-lg rounded-0">
                <form action="/license/new" method="post" enctype="multipart/form-data">
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
                                </br>
                                <input class="form-control border-0" type="number" name="fee_paid" required>
                            </div>
            
                            <div class="form-group">
                                <label>CV</label>
                                </br>
                                <input class="form-control border-0" type="file" name="cv" required>
                            </div>
            
                            <div class="form-group">
                                <label>Permits</label>
                                </br>
                                <input class="form-control border-0" type="file" name="permit" required>
                            </div>
            
                            <div class="form-group">
                                <label>Application Letter</label>
                                </br>
                                <input class="form-control border-0" type="file" name="application_letter" required>
                            </div>
            
                            <div class="form-group">
                                <label>Instituitional Profile</label>
                                </br>
                                <input class="form-control border-0" type="file" name="profile" required>
                            </div>
            
                            <div class="form-group">
                                <label>Business Plan/Synopsis</label>
                                </br>
                                <input class="form-control border-0" type="file" name="synopsis" required>
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