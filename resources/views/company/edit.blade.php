@extends('company.layout')
@section('content')
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>企業情報編集</h2>
            </div>
        </div>
</div>
@foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
@endforeach
<form action="{{ route('companies.update',$company->id) }}" method="POST">
 @csrf
 @method('PUT')
<div class="form-group row">
    <input type="hidden" class="form-control @error('id') is-invalid @enderror" id="id" name="id" placeholder="id" value="{{ isset($company->id) ? $company->id : '' }}">
    <label for="name" class="col-md-1 col-form-label text-md-right">企業名</label>
    <div class="col-md-3">
        <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" companyname="name" value="{{ isset($company->name) ? $company->name : old('company->name') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="postalcode" class="col-md-1 col-form-label text-md-right">郵便番号</label>
    <div class="col-md-3">
        <input id="postalcode" name="postalcode" type="text" class="form-control @error('postalcode') is-invalid @enderror" postalcode="postalcode" value="{{ isset($company->postcode) ? $company->postcode : old('$postcode') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="address" class="col-md-1 col-form-label text-md-right">住所</label>
    <div class="col-md-3">
        <select class="form-select" aria-label="Default select example" name="address">
              <option selected>住所</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
        </select>
        <br>
        <input id="address1"  name="address1" type="text" class="form-control @error('address1') is-invalid @enderror" address1="address1" value="{{ isset($company->address) ? $company->address : old('address1') }}" required placeholder="" autofocus>
        <br>
        <input id="address2"  name="address2" type="text" class="form-control @error('address2') is-invalid @enderror" address2="address2" value="{{ isset($address) ? $address : old('address2') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="tel" class="col-md-1 col-form-label text-md-right">電話番号</label>
    <div class="col-md-3">
        <input id="tel"  name="tel" type="text" class="form-control @error('tel') is-invalid @enderror" tel="tel" value="{{ isset($company->tel) ? $company->tel : old('tel') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="repname" class="col-md-1 col-form-label text-md-right">代表者名</label>
    <div class="col-md-3">
        <input id="repname"  name="repname" type="text" class="form-control @error('repname') is-invalid @enderror" repname="repname" value="{{ isset($company->representative_name) ? $company->representative_name : old('representative_name') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="industry" class="col-md-1 col-form-label text-md-right">業種</label>
        <div class="col-md-3">
        <select class="form-select" aria-label="Default select example"  name="industry">
              <option selected>業種</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="billname" class="col-md-1 col-form-label text-md-right">請求先名</label>
    <div class="col-md-3">
        <input id="billname"  name="billname" type="text" class="form-control @error('billname') is-invalid @enderror" billname="billname" value="{{ isset($company->bill_name) ? $company->bill_name : old('bill_name') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="billpostal" class="col-md-1 col-form-label text-md-right">請求先郵便番号</label>
    <div class="col-md-3">
        <input id="billpostal"  name="billpostal" type="text" class="form-control @error('billpostal') is-invalid @enderror" billpostal="billpostal" value="{{ isset($company->bill_postcode) ? $company->bill_postcode : old('bill_postcode') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="billaddress" class="col-md-1 col-form-label text-md-right">請求先住所</label>
       <div class="col-md-3">
        <select class="form-select" aria-label="Default select example"  name="billaddress">
              <option selected>住所</option>
              <option value="1">Owner</option>
              <option value="2">Admin</option>
              <option value="3">General</option>
        </select>
        <br>
        <input id="billaddress1"  name="billaddress1" type="text" class="form-control @error('billaddress1') is-invalid @enderror" billaddress1="billaddress1" value="{{ isset($bill_address) ? $bill_address : old('bill_address') }}" required placeholder="" autofocus>
        <br>
        <input id="billaddress2"  name="billaddress2" type="text" class="form-control @error('billaddress2') is-invalid @enderror" billaddress2="billaddress2" value="{{ isset($bill_address) ? $bill_address : old('bill_address') }}" required placeholder="" autofocus>
    </div>
</div>
<br><br>
<div class="form-group row">
    <label for="billtel" class="col-md-1 col-form-label text-md-right">請求先電話番号</label>
    <div class="col-md-3">
        <input id="billtel"  name="billtel" type="text" class="form-control @error('billtel') is-invalid @enderror" billtel="billtel" value="{{ isset($company->bill_tel) ? $company->bill_tel : old('bill_tel') }}" required placeholder="" autofocus>
    </div>
</div>

<div class="pull-right">
    <a class="btn btn-success" href=""> キャンセル</a>
    <button type="submit" class="btn btn-primary">更新</button>
</div>
@endsection