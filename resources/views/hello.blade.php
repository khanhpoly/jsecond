@extends('layouts.master')
@section('script')
<!--AngularJS-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
<script src="js/app.js"></script>
@stop
@section('content')
<div class="container" ng-app="demoApp" ng-controller="PostsController">
    <h1>TodoApp index view</h1>
    <div class="row">
        <div class="col-md-4">
            <input type='text'>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-striped">
                <tr ng-repeat='post in posts'>
                    <td><% post.title %></td>
                </tr>
            </table>
        </div>
    </div>
</div>