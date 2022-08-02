@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        @if(Auth::guest())
        <div class="jumbotron text-center">
            <h1>Welcome To KWS Licensing System!</h1>
            <p>This is the official KWS License Issuance System Application</p>
            <p><a class="btn btn-primary btn-lg" href="{{route('login')}}" role="button">Login</a></p>
        </div>
        @else
        <div class="jumbotron text-center">
            <h1>Welcome To KWS Licensing System!</h1>
            <h3> Karibu {{Auth::user()->name}}</h3>
        </div>
        @endif
        @if(!Auth::guest() && !Auth::user()->is_admin)
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <div class="card rounded-0 shadow-lg">
                        <div class="card-header">
                            <h3 class="text-center">Select Service</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush text-center">
                                @if(Auth::user()->client_id == NULL)
                                <li class="list-group-item"><a href="/client" class="btn btn-success btn-lg btn-block" style="width: 70%">REGISTER FOR A LICENSE</a></li>
                                @else
                                <li class="list-group-item"><a href="/license" class="btn btn-success btn-lg btn-block" style="width: 70%">REGISTER FOR A LICENSE</a></li>    
                                @endif
                                <li class="list-group-item"><a href="/license" class="btn btn-success btn-lg btn-block" style="width: 70%">RENEW LICENSE</a></li>
                                <li class="list-group-item"><a href="/check" class="btn btn-success btn-lg btn-block" style="width: 70%">CHECK VALIDITY</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(Auth::user()->is_admin)
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <div class="card rounded-0 shadow-lg">
                        <div class="card-header">
                            <h3 class="text-center">Control Panel</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush text-center">
                                
                                <li class="list-group-item"><a href="/admin/clients" class="btn btn-success btn-lg btn-block" style="width: 70%">CLIENTS</a></li>
                                
                                <li class="list-group-item"><a href="/admin/licenses" class="btn btn-success btn-lg btn-block" style="width: 70%">LICENSES</a></li>    
                                
                                <li class="list-group-item"><a href="/admin/pending" class="btn btn-success btn-lg btn-block" style="width: 70%">PENDING LICENSES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</body>
@endsection
