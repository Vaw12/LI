@extends('layouts.app')

@section('content')
<div class="container">
<div class="well"><h1 style="text-align: center">Registered Clients</h1><hr></div>
    <div class="container-fluid">
        @if (count ($clients) > 0)
                <div class="well">
                    <table>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Index</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Client Type</th>
                                    <th>ID No</th>
                                    <th>Email</th>
                                    <th>Organisation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)  
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->first_name}}</td>
                                    <td>{{$client->last_name}}</td>
                                    <td>{{$client->gender}}</td>
                                    <td>{{$client->client_type}}</td>
                                    <td>{{$client->national_id}}</td>
                                    <td>{{$client->email_address}}</td>
                                    @if ($client->org_number == NULL)
                                        <td>{{$client->org_number}}</td>
                                    @else
                                        <td>Not Available</td>
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