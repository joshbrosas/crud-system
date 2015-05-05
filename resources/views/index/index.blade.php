<!DOCTYPE html>
<html ng-app="store">
<head lang="en">
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link href="{{ asset('css/app.css') }}"  rel="stylesheet" type="text/css"/>

</head>
<body >
<h1 class="text-primary">Hello World!</h1>
<div class="container">

<div ng-controller="TodoCtrl">
<div class="col-xs-3" >
<input type="text" ng-model="query" placeholder="search" class="form-control">
</div>
<br/>
<br/>
<table class="table table-bordered">
<tr>
<th>Firstname</th>
<th>Surname</th>
<th>Action</th>
</tr>
<tr ng-repeat="datas in data | filter: query">
<td>{[{datas.firstname}]}</td>
<td>{[{datas.surname}]}</td>
<td>


<a class="btn btn-sm btn-danger"  data-ng-click="deletedata(datas.id)"><i class="glyphicon glyphicon-remove-circle"></i> </a>



 </td>
</tr>
</table>

<div class="col-xs-6 col-xs-offset-2">
<div class="panel panel-body" style="background-color: #f0f0f0">
<ul>
F


</ul>
<img id="mySpinner" style="margin-left: 150px" src="{{ asset('images/spinner.gif') }}" ng-show="loading">

<form class="form-horizontal" ng-submit="SubmitForm()">

<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

<div class="form-group">
<label class="col-xs-3 control-label" for="firstname">Firstname</label>
<div class="col-xs-7">
<input type="text" name="firstname" ng-model="data.firstname" class="form-control"/>
</div>
</div>

<div class="form-group">
<label class="col-xs-3 control-label" for="surname">Surname</label>
<div class="col-xs-7">
<input type="text" name="surname" ng-model="data.surname"  class="form-control"/>
</div>
</div>
<button type="submit"  class="btn btn-success col-xs-3 col-xs-offset-4">Save</button>
</form>
</div>
</div>
</div>

</div>
<script type="text/javascript" src="{{ asset('js/angular.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>
</body>
</html>