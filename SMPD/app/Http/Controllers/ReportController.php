<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends BaseController
{
    public function index()
    {
        $reports = [
            [
                'month' => 'Mei 2026',
                'total_loans' => 120,
                'total_returns' => 95,
                'late_returns' => 7,
                'total_fines' => 85000,
            ],
            [
                'month' => 'April 2026',
                'total_loans' => 105,
                'total_returns' => 100,
                'late_returns' => 5,
                'total_fines' => 50000,
            ],
        ];

        return view('reports.index', compact('reports'));
    }

    public function exportPdf()
    {
        return redirect()->route('reports.index')->with('success', 'Laporan PDF berhasil diexport.');
    }

    public function exportExcel()
    {
        return redirect()->route('reports.index')->with('success', 'Laporan Excel berhasil diexport.');
    }
}