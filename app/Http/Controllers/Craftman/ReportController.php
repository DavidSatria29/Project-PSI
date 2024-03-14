<?php

namespace App\Http\Controllers\Craftman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::where('user_id', auth()->user()->id)->get();
        return view('craftman.report.read', compact('reports'));
    }

    public function delete($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('craftman.report.show')->with('success', 'Data berhasil dihapus');
    }
}
