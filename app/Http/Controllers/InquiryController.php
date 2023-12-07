<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Allwebenquiry;
use App\Models\ContactInquiry;

class InquiryController   extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function enquiry()
    {
        $webenquiry = Allwebenquiry::get();
        return view('admin.lms.index', compact('webenquiry'));
    }
    public function manual()
    {
        $datas = ContactInquiry::get();
        return view('admin.lms.manual', compact('datas'));
    }

    public function show($enquiry_id)
    {
        $data  = Allwebenquiry::where('enquiry_id', $enquiry_id)->first();
        return view('admin.allwebenquiry.view', compact('data'));
    }
}
