<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::get();
        return view('admin.pages.about.about_table', [
            'abouts' => $abouts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.about.add_about');
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
            'description' => 'required|min:20|max:9000|string',

        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);
        
        $published = About::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }

        $about = new About();
        $about->description = $request->post('description');
        $about->save();
        
        return redirect()->route('about.index')->with('success' , 'تم اضافة النبذة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $about = About::findOrFail($about->id);
        $published = About::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }

        $about->is_publish = !$about->is_publish;
        $about->save();

        return redirect(route('about.index'))->with('about',$about);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $about = About::findOrFail($id);
        return view('admin.pages.about.edit_about' , [
            'about' => $about ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|min:20|max:9000|string',
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
        ]);

        $about = About::findOrFail($id);
        $about['is_publish'] = 1;
        $about->update($request->all());

        return redirect(route('about.index'))->with('update' , 'تم تعديل النبذة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()
        ->route('about.index')
        ->with('delete', " تم حذف النبذة ");
    }
    
}
