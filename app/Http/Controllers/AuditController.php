<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function index()
    {
        $audits = Audit::all();
        return view('pages.audit', compact('audits'));
    }

    public function pessoa($id){
        $audit = Audit::find($id)->pessoa;
        $audit = json_decode($audit);
        return view('pages.pessoa-audit',compact('audit'));
    }
}
