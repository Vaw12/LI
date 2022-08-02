@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card text-center shadow-lg rounded-0">
                <form action="/client/new" method="post">
                    @csrf
                    <div class="card-header">
                        <h3 class="text-center">Contact Person Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Firstname</label>
                            </br>
                            <input class="form-control border-0" type="text" name="first_name" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Last Name</label>
                            </br>
                            <input class="form-control border-0" type="text" name="last_name" required>
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            </br>
                            <input class="form-control border-0" type="text" name="gender" required>
                        </div>

                        <div class="form-group">
                            <label>For Organisation/Individual</label>
                            </br>
                            <input class="form-control border-0" type="text" name="client_type" required>
                        </div>

                        <div class="form-group">
                            <label>National ID</label>
                            </br>
                            <input class="form-control border-0" type="number" name="national_id" required>
                        </div>

                        <div class="form-group">
                            <label>Physical Address</label>
                            </br>
                            <input class="form-control border-0" type="text" name="physical_address" required>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            </br>
                            <input class="form-control border-0" type="email" name="email_address" required>
                        </div>

                        <div class="form-group">
                            <label>Registeration Date</label>
                            </br>
                            <input class="form-control border-0" type="date" name="registeration_date" required>
                        </div>

                        <div class="form-group">
                            <label>Company Registeration Number</label>
                            </br>
                            <input class="form-control border-0" type="number" name="org_number">
                        </div>
                    </br>
                        <div class="form-group">
                            <button type="submit" name="register_license" class="btn btn-success" style="width: 70%">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection