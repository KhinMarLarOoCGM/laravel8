@extends('company.layout')
 
@section('content')
<div class="container">
    <div class="row g-3">
    <div class="col">
        <h2>企業情報一覧</h2>
    </div>
  <div class="col">
    <a class="btn btn-success" href="{{ route('companies.create') }}"> 新規作成</a>
  </div>
</div>
</div>


<div class="row">
    <div class=class="row" >
        <div class="pull-left">
            
            
        </div>
    </div>
</div>
@foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
@endforeach

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<form class="row" action="/search" method="get">
<div class="form-group row">
    <label for="name" class="col-md-1 col-form-label text-md-right">企業名</label>
    <div class="col-md-1">
        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($request->name) ? $request->name : old('name') }}" placeholder="" autofocus>
    </div>
    <label for="name" class="col-md-1 col-form-label text-md-right">電話番号</label>
    <div class="col-md-1">
        <input id="name" name="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="name" value="{{ isset($request->tel) ? $request->tel : old('tel') }}" placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="name" class="col-md-1 col-form-label text-md-right">代表者名</label>
    <div class="col-md-1">
        <input id="name" name="repname" type="text" class="form-control @error('repname') is-invalid @enderror" name="name" value="{{ isset($request->repname) ? $request->repname : old('repname') }}" placeholder="" autofocus>
    </div>
    <label for="name" class="col-md-1 col-form-label text-md-right">業種</label>
    <div class="col-md-1">
        <input id="name" name="industry" type="text" class="form-control @error('industry') is-invalid @enderror" name="name" value="{{ isset($request->industry) ? $request->industry : old('industry') }}" placeholder="" autofocus>
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-success">検索</button>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="name" class="col-md-1 col-form-label text-md-right">請求先名</label>
    <div class="col-md-1">
        <input id="name" name="bill_name" type="text" class="form-control @error('bill_name') is-invalid @enderror" name="name" value="{{ isset($request->bill_name) ? $request->bill_name : old('bill_name') }}" placeholder="" autofocus>
    </div>
    <label for="name" class="col-md-1 col-form-label text-md-right">請求先名</label>
    <div class="col-md-1">
        <input id="name" name="bill_tel" type="text" class="form-control @error('bill_tel') is-invalid @enderror" name="name" value="{{ isset($request->bill_tel) ? $request->bill_tel : old('bill_tel') }}" placeholder="" autofocus>
    </div>
</div>
</form>
<br><br>

<!-- small modal -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>
                    <!-- the result to be displayed apply here -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form id="userForm" action="">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Company Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this company?
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>企業名</th>
            <th>住所</th>
            <th>電話番号</th>
            <th>操作</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name}} </td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->tel }}</td>
            <td><a class="btn btn-success" href="/detail/{{$value->id}}"> 詳細</a> 
                <a class="btn btn-success" href="/edit/{{$value->id}}"> 編集</a>
                <button type="button"  class="btn btn-primary" data-id="{{ $value->id }}" data-toggle="modal" id="deleteModal" data-target="#exampleModal">
                    削除
                </button>
        </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}   
@endsection