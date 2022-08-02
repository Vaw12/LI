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
                                    <th>License Name</th>
                                    <th>Fee Paid</th>
                                    <th>Validity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($licenses as $license)  
                                <tr>
                                    <td>{{$license->id}}</td>
                                    <td>{{$license->license_name}}</td>
                                    <td>{{$license->fee_paid ? "Yes": "No"}}</td>
                                    <td>
                                        Expires on: 02-08-2023
                                        {{-- {{  $timestamp = $license->updated_at;}}
                                        {{    $start_date = date($timestamp);}}
                                        {{    $expires = (strtotime('+365 days') + strtotime($timestamp));}}
                                        {{  $date_diff=($expires-strtotime($timestamp));    }}
                                        {{  round($date_diff, 0);}} --}}
                                    </td>
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