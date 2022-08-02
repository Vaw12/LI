@extends('layouts.app')

@section('content')
<div class="container">
<div class="well"><h1 style="text-align: center">Applied Licenses</h1><hr></div>
    <div class="container-fluid">
        @if (count ($licenses) > 0)
                <div class="well">
                    <table>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID Number</th>
                                    <th>Applicant</th>
                                    <th>License Name</th>
                                    <th>Fee Paid</th>
                                    <th>Applied</th>
                                    <th>Approval</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($licenses as $license)  
                                <tr>
                                    <td>{{$license->id}}</td>
                                    <td>{{$license->client->first_name.' '.$license->client->last_name}}</td>
                                    <td>{{$license->license_name}}</td>
                                    <td>{{$license->fee_paid ? "Yes": "No"}}</td>
                                    <td>{{($license->created_at->format('d-m-Y'))}}</td>
                                    @if ($license->approval == 1)
                                        <td><button type="button" class="btn btn-success">Approved</button></td>
                                    @elseif($license->approval == 2)
                                        <td><button type="button" class="btn btn-danger">Rejected</button></td>
                                    @else
                                        <td><button type="button" class="btn btn-secondary">Pending</button></td>
                                    @endif
                                     
                                </tr>
                                @endforeach
                            
                            </tbody>
                        </table>
                    </table>
                </div>    

        @else 
            <p>No Licenses Applied</p>   
        @endif
    </div>
</div>
@endsection