@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        MOBIL
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="col-lg-12">  
    <p align="left"><a href="{{route('rental.create')}}"><button type="submit" class="btn btn-primary">
                     {{ __('Tambah Data') }}
                </button></span></a></p> 
                 <!-- search form -->
                 <form action="#" method="get" class="sidebar-form">
                      <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search...">
                          <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                          </span>
                     </div>
                 </form>
                 <!-- /.search form -->
                <table class="table table-bordered">
                    <thead>
                        <tr><th>NO</th><th>MOBIL</th><th>PLAT</th><th>WARNA</th><th>TAHUN</th><th>OPSI</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($mobil as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->merk_mobil}}</td><td>{{$val->plat_mobil}}</td><td>{{$val->warna_mobil}}</td><td>{{$val->tahun_mobil}}</td>
                        <td>
                        <a href="{{route('rental.edit',$val->id_mobil)}}"><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="{{route('rental.destroy', $val->id_mobil)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" ><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{$mobil->links()}}
    </div>
</div>
@endsection