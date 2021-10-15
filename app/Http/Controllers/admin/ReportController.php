<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::get();
        return view('admin.pages.report.report_table', [
            'reports' => $reports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.report.add_report');
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
            'file' => 'required|file',
            
            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'file' => 'الرجاء ارفاق ملف'
        ]);

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
        
            $files = $file->storeAs('report/' , $fileName  , 'public');
        }
        // if ($request->hasFile('file'))
        // {
        //     $file = $request->file('file')->store('report' , 'public');
        // }
        $data = array_merge($request->all() , ['file'=> $files]);
        
        $files = Report::create($data);

    

        return redirect()
        ->route('report.index')
        ->with('success', " تم اضافة التقرير ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $report = Report::findOrFail($report->id);
        return view('admin.pages.report.edit_report' , [
            'report' => $report,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|string',
          
            
            
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'file' => 'الرجاء ارفاق ملف'
        ]);

        $report = Report::findOrFail($report->id);
        
        $file = $report->file;
        
        // $description = strip_tags($product->description);
        
        if ($request->hasFile('image'))
        {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
        
            $files = $file->storeAs('public/report' , $fileName );
            $report->update($files);

            return redirect()
        ->route('report.index')
        ->with('success', "تم تعديل التقرير بنجاح");
            
        }
        
        $data = array_merge($request->all() , ['file'=> $file]);
        $report->update($data);
        
        
       
        

        return redirect()
        ->route('report.index')
        ->with('success', "تم تعديل التقرير بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()
        ->route('report.index')
        ->with('delete', "تم حذف التقرير بنجاح");
    }
}
