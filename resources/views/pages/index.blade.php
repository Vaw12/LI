@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="main"> 
            <div class="poster">
                <h1>Thank you for partnering with us.</br> We are Here to serve you. </br>
                    <?php echo "Karibu ". Auth::user()->name;?>
               </h1>
            </div>
            
            <div class="main-form">
                <h2>Select Service</h2>
    
                <a href="<?php echo BASE_URL . '/register_license.php' ?>" class= "btn btn-primary select">Register For a license</a>
                <a href="<?php echo BASE_URL . '/progress.php' ?>" class= "btn btn-primary select">Renew license</a>
                <a href="<?php echo BASE_URL . '/monitor.php' ?>" class= "btn btn-primary select">Check Validity</a>
            </div>
    </div>
@endsection