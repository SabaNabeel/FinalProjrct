@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Display Data</div>
                <table>
                    <tr></tr>
                <table class="table">
                    <tr>
                      <td>name</td>
                      <td>email</td>
                    </tr>
                    <?php
                        foreach($user as $user){
                      ?>
                      <tr>
                        <td><?php echo $user => name ?></td>
                        <td><?php echo $user => email ?></td>
                      </tr>
                      <?php
                        }
                      ?>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
