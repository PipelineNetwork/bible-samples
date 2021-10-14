<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use Illuminate\Http\Request;

class AuditLogController extends Controller
{
    public function index()
    {
        $audits = AuditLog::all();
        return view('audit', [
            'audits'=> $audits
        ]);
    }


    public function store(Request $request)
    {
        $audit = new AuditLog;
        $audit->item = $request->item;
        $audit->description = $request->description;
        $audit->who = $request->who;
        $audit->save();

        return view('audit_show', [
            'audit'=> $audit
        ]);
    }

    public function show(AuditLog $auditLog)
    {
        return view('audit_show', [
            'audit'=> $audit
        ]);
    }

    public function log($item, $description, $who) {
        $audit = new AuditLog;
        $audit->item = $item;
        $audit->description = $description;
        $audit->who = $who;
        $audit->save();        
    }

}
