@extends('company.layout')
@section('content')
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>企業情報詳細</h2>
            </div>
            <a class="btn btn-success" href="/edit/{{$company->id}}"> 編集</a> 
        </div>
</div>
<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">企業名</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->name }}</label>
    </div>
</div>
<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">郵便番号</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->postcode }}</label>
    </div>
</div>
<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">住所</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->address }}</label>
    </div>
</div>
<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">電話番号</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->tel }}</label>
    </div>
</div>
<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">代表者名</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->representative_name }}</label>
    </div>
</div>

<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">業種</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->industry }}</label>
    </div>
</div>

<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">請求先名</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->bill_name }}</label>
    </div>
</div>

<div class="form-group row">
    <label for="companyname" class="col-md-1 col-form-label text-md-right">請求先住所</label>
    <div class="col-md-3">
        <label for="companyname" class="col-md-1 col-form-label text-md-right">{{ $company->bill_address }}</label>
    </div>
</div>

@endsection