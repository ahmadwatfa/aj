<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plane = Plan::get();
        return view('admin.pages.plane.plane_table', [
            'plane' => $plane,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.plane.add_plane');
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
            'plane' => 'required|min:20|max:9000|string',
      
            
            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
           
        ]);
        
        $published = Plan::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }
        $palnes = new Plan();
        $palnes->plane = $request->post('plane');
        $palnes->save();
        
        return redirect()->route('plane.index')->with('success' , 'تم اضافة الخطة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plane = Plan::findOrFail($id);
        $published = Plan::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }

        $plane->is_publish = !$plane->is_publish;
        $plane->save();

        return redirect(route('plane.index'))->with('plane',$plane);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Plan::findOrFail($id);
        return view('admin.pages.plane.edit_plane' , [
            'plan' => $plan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'plane' => 'required|min:20|max:9000|string',            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
           
        ]);

        $plan = Plan::findOrFail($id);
        $plan->update($request->all());
        
        return redirect()->route('plane.index')->with('success' , 'تم تعديل الخطة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $plane = Plan::findOrFail($id);
        $plane->delete();

        return redirect()
        ->route('plane.index')
        ->with('delete', "تم حذف الخطة بنجاح");
            
        
    }
}
