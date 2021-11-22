<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::get();
        return view('admin.pages.staff.staff_table' ,  [
            'staffs' => $staffs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.staff.add_staff');
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
            'staff' => 'required|min:20|max:9000|string',            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
           
        ]);
        
        $published = staff::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }
        $staffs = new staff();
        $staffs->staff = $request->post('staff');
        $staffs->save();
        
        return redirect()->route('staff.index')->with('success' , 'تم اضافة الهيكلية بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staf = staff::findOrFail($id);
        $published = staff::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }

        $staf->is_publish = !$staf->is_publish;
        $staf->save();

        return redirect(route('staff.index'))->with('staff',$staf);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staf = staff::findOrFail($id);
        return view('admin.pages.staff.edit_staff' , [
            'staf' => $staf ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        $request->validate([
            'staff' => 'required|min:20|max:9000|string',            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
           
        ]);
        $st = Staff::findOrFail($staff->id);
        
        $published = staff::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }
        $st['is_publish'] = 1;
      
        $st->update($request->all());
        
        return redirect()->route('staff.index')->with('success' , 'تم تعديل الهيكلية بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $st = Staff::findOrFail($id);
        $st->delete();
        
        return redirect()->route('staff.index')->with('success' , 'تم تعديل الهيكلية بنجاح');
    }
}
