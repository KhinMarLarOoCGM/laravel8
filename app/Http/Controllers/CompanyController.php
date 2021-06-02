<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::latest()->whereNull('deleted_at')->paginate(5);
    
        return view('company.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
             'name' => 'required|unique:companies',
             'postalcode' => 'required|min:7',
             'address' => 'required',
             'tel' => 'required',
             'industry' => 'required',
             'billname' => 'required',
             'billpostal' => 'required',
             'billaddress' => 'required',
             'billtel' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $company = new Company();
            $company->name =   $request->name;
            $company->postcode = $request->postalcode;
            $company->address = $request->address;
            $company->tel = $request->tel;
            $company->representative_name = $request->repname;
            $company->industry = $request->industry;
            $company->bill_name = $request->billname;
            $company->bill_postcode = $request->billpostal;
            $company->bill_address = $request->billaddress;
            $company->bill_tel = $request->billtel;
            $company->created_user_id = 1;
            $company->updated_user_id = 1;
            $company->deleted_user_id = 1;
            $company->created_at = Carbon::now();
            $company->updated_at = Carbon::now();
            $company->save();
            return redirect('companies')->with('success','Company created successfully.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company  = Company::find($id);
        return view('company.detail',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company  = Company::find($id);
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {   
        $validator = Validator::make($request->all(), [
             'name' => 'required|unique:companies',
             'postalcode' => 'required|min:7',
             'address' => 'required',
             'tel' => 'required',
             'industry' => 'required',
             'billname' => 'required',
             'billpostal' => 'required',
             'billaddress' => 'required',
             'billtel' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $company = Company::find($request->id);
            $company->name =   $request->companyname;
            $company->postcode = $request->postalcode;
            $company->address = $request->address;
            $company->tel = $request->tel;
            $company->representative_name = $request->repname;
            $company->industry = $request->industry;
            $company->bill_name = $request->billname;
            $company->bill_postcode = $request->billpostal;
            $company->bill_address = $request->billaddress;
            $company->bill_tel = $request->billtel;
            $company->created_user_id = 1;
            $company->updated_user_id = 1;
            $company->deleted_user_id = 1;
            $company->updated_at = Carbon::now();
            $company->save();
            return redirect('companies')->with('success','Company updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company  = Company::find($id);  
        $company->deleted_at =  Carbon::now();
        $company->deleted_user_id = 1;
        $company->save();

        return redirect('companies')->with('success','Company Deleted Successfully !');
    }

    /**
     * Show the form for correspondence company.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = Company::orderBy('id', 'desc')
                    ->whereNull('deleted_at')
                    ->where('name', 'like', "%{$request->name}%")
                    ->when($request->tel, function ($query) use ($request) {
                        $query->where('tel', 'like', "%{$request->tel}%");
                    })
                    ->when($request->tel, function ($query) use ($request) {
                        $query->where('tel', 'like', "%{$request->tel}%");
                    })
                    ->when($request->repname, function ($query) use ($request) {
                        $query->where('repname', 'like', "%{$request->repname}%");
                    })
                    ->when($request->bill_name, function ($query) use ($request) {
                        $query->where('bill_name', 'like', "%{$request->bill_name}%");
                    })
                    ->when($request->bill_tel, function ($query) use ($request) {
                        $query->where('bill_tel', 'like', "%{$request->bill_tel}%");
                    })->paginate(5);

        if (count($data) == 0) {
             return view('company.index',compact('data'))->withErrors(['該当情報が存在しません。']);
        }else{
            return view('company.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 25);
        }
    }
}
