<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class ReportController extends BaseController
{
    public function index()
    {
        $role = Session::get('role');

        // =========================
        // ADMIN REPORT
        // =========================

        if ($role == 'admin') {

            $systemReports = [

                [
                    'title' => 'Total Login',
                    'value' => 145,
                ],

                [
                    'title' => 'Server Latency',
                    'value' => '120ms',
                ],

                [
                    'title' => 'User Online',
                    'value' => 18,
                ],

            ];

            return view(
                'admin.reports.index',
                compact('systemReports')
            );
        }

        // =========================
        // PUSTAKAWAN REPORT
        // =========================

        $reports = [

            [
                'month' => 'Mei 2026',
                'total_loans' => 120,
                'total_returns' => 95,
                'late_returns' => 7,
                'total_fines' => 85000,
            ],

        ];

        return view(
            'pustakawan.reports.index',
            compact('reports')
        );
    }

    public function exportPdf()
    {
        return redirect()
            ->route('reports.index')
            ->with(
                'success',
                'Laporan PDF berhasil diexport.'
            );
    }

    public function exportExcel()
    {
        return redirect()
            ->route('reports.index')
            ->with(
                'success',
                'Laporan Excel berhasil diexport.'
            );
    }
}