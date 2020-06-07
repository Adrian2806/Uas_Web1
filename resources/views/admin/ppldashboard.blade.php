@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        BERANDA
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
@csrf
<div class="panel panel-flat border-top-lg border-top-primary">
    <div class="panel-body">
        <div class="col-lg-12">
        <div class="user-panel">
        <div class="pull-left image">
          <div class="image">
          <img src="/adminlte/img/cakra.jpg" width="1000px" height="500px">
          </div>
        </div>
      </div>
        </div>
    </div>
</div>
@endsection