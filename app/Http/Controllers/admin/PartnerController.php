<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::get();
        return view('admin.pages.partner.partner_table' , [
            'partners' => $partners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.partner.add_partner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|string',
            'image' => 'required|image',
            
            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('partner' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

        $partner = Partner::create($data);

    

        return redirect()
        ->route('partner.index')
        ->with('success', " تم اضافة الشريك بنجاح");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.pages.partner.edit_partner', [
            'partner' => $partner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|string',
            'image' => 'image',
            
            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        $partner = Partner::findOrFail($id);
        
        $image = $partner->image;
        
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('partner' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $partner->update($data);
            
        }
        
        $dat = array_merge($request->all() , ['image'=> $image]);
        $partner->update($dat);
        
        
       
        

        return redirect()
        ->route('partner.index')
        ->with('success', "تم تعديل الشريك بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return redirect()
        ->route('partner.index')
        ->with('delete', " تم حذف الشريك بنجاح");

    }
}
