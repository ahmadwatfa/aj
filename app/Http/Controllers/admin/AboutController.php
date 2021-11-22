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
            'image' => 'required|image',
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة',
        ]);
        
        $published = About::get();
        foreach($published as $publish){
            $publish->is_publish = 0 ;
            $publish->save();
        }

        // $about = new About();
        // $about->description = $request->post('description');
        // $about->save();

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('activity' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);
        
        $about = About::create($data);

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
        //validate 
        $request->validate([
            'description' => 'min:3|max:5000|string',
            'image' => 'image'
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        //Reset all
        foreach(About::get() as $publish){
            $publish->is_publish = 0 ;
            $publish->update();
        }
        //Get About
        $about = About::findOrFail($id);
        //Save Image
        if ($request->hasFile('image'))
        {
            $about->image = $request->file('image')->store('about' , 'public');
        }
        //Update Data
        $about->description = $request->description;
        $about->is_publish = 1;
        $about->save();
        
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
