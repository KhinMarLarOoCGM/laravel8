@extends('company.layout')
@section('content')
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>企業情報追加</h2>
            </div>
        </div>
</div>
@foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
@endforeach
<form method="post" action="/store">
    @csrf
<div class="form-group row">
    <label for="name" class="col-md-2 col-form-label text-md-right">企業名 <span style="color: red">※</span></label>
    <div class="col-md-3">
        <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($name) ? $name : old('name') }}" placeholder="" autofocus>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="postalcode" class="col-md-2 col-form-label text-md-right">郵便番号<span style="color: red">※</span></label>
    <div class="col-md-3">
        <input id="postalcode" name="postalcode" type="text" class="form-control @error('postalcode') is-invalid @enderror" postalcode="postalcode" value="{{ isset($postalcode) ? $postalcode : old('postalcode') }}" placeholder="" autofocus>
        <span style="color: red;">※半角数字 ハイフン(-)なしで登録してください！ （例：1234567）</span>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="address" class="col-md-2 col-form-label text-md-right">住所<span style="color: red">※</span></label>
    <div class="col-md-3">
        <select class="form-select" aria-label="Default select example" name="address">
              <option selected>住所</option>
              <option value="Aichi">Aichi</option>
              <option value="Akita">Akita</option>
              <option value="Aomori">Aomori</option>
              <option value="Chiba">Chiba</option>
              <option value="Ehime">Ehime</option>
              <option value="Fukuoka">Fukuoka</option>
              <option value="Fukushima">Fukushima</option>
              <option value="AoFukuimori">Fukui</option>
              <option value="Gifu">Gifu</option>
              <option value="Gunma">Gunma</option>
        </select>
        <br>
        <input id="address1"  name="address1" type="text" class="form-control @error('address1') is-invalid @enderror" address1="address1" value="{{ isset($address1) ? $address1 : old('address1') }}" placeholder="" autofocus>
        <br>
        <input id="address2"  name="address2" type="text" class="form-control @error('address2') is-invalid @enderror" address2="address2" value="{{ isset($address2) ? $address2 : old('address2') }}" placeholder="" autofocus>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="tel" class="col-md-2 col-form-label text-md-right">電話番号<span style="color: red">※</span></label>
    <div class="col-md-3">
        <input id="tel"  name="tel" type="text" class="form-control @error('tel') is-invalid @enderror" tel="tel" value="{{ isset($tel) ? $tel : old('tel') }}" placeholder="" autofocus>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="repname" class="col-md-2 col-form-label text-md-right">代表者名<span style="color: red">※</span></label>
    <div class="col-md-3">
        <input id="repname"  name="repname" type="text" class="form-control @error('repname') is-invalid @enderror" repname="repname" value="{{ isset($repname) ? $repname : old('repname') }}" placeholder="" autofocus>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="industry" class="col-md-2 col-form-label text-md-right">業種<span style="color: red">※</span></label>
        <div class="col-md-3">
        <select class="form-select" aria-label="Default select example"  name="industry">
              <option selected>業種</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
        </select>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="billname" class="col-md-2 col-form-label text-md-right">請求先名<span style="color: red">※</span></label>
    <div class="col-md-3">
        <input id="billname"  name="billname" type="text" class="form-control @error('billname') is-invalid @enderror" billname="billname" value="{{ isset($billname) ? $billname : old('billname') }}" placeholder="" autofocus>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="billpostal" class="col-md-2 col-form-label text-md-right">請求先郵便番号<span style="color: red">※</span></label>
    <div class="col-md-3">
        <input id="billpostal"  name="billpostal" type="text" class="form-control @error('billpostal') is-invalid @enderror" billpostal="billpostal" value="{{ isset($billpostal) ? $billpostal : old('billpostal') }}" placeholder="" autofocus>
        <span style="color: red;">※半角数字 ハイフン(-)なしで登録してください！ （例：1234567）</span>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="billaddress" class="col-md-2 col-form-label text-md-right">請求先住所<span style="color: red">※</span></label>
       <div class="col-md-3">
        <select class="form-select" aria-label="Default select example"  name="billaddress">
              <option selected>住所</option>
              <option value="1">Owner</option>
              <option value="2">Admin</option>
              <option value="3">General</option>
        </select>
        <br>
        <input id="billaddress1"  name="billaddress1" type="text" class="form-control @error('billaddress1') is-invalid @enderror" billaddress1="billaddress1" value="{{ isset($billaddress1) ? $billaddress1 : old('billaddress1') }}" placeholder="" autofocus>
        <br>
        <input id="billaddress2"  name="billaddress2" type="text" class="form-control @error('billaddress2') is-invalid @enderror" billaddress2="billaddress2" value="{{ isset($billaddress2) ? $billaddress2 : old('billaddress2') }}" placeholder="" autofocus>
    </div>
</div>
<br>
<div class="form-group row">
    <label for="billtel" class="col-md-2 col-form-label text-md-right">請求先電話番号</label>
    <div class="col-md-3">
        <input id="billtel"  name="billtel" type="text" class="form-control @error('billtel') is-invalid @enderror" billtel="billtel" value="{{ isset($billtel) ? $billtel : old('billtel') }}" placeholder="" autofocus>
    </div>
</div>
<br>
<div class="form-group row mb-0">
    <div class="col-md-16 offset-md-4">
        <a class="btn btn-success" href="{{ url()->previous() }}"> キャンセル</a>
        <button type="submit" class="btn btn-primary">登録</button>
    </div>
</div>
@endsection