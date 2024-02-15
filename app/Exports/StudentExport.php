<?php

namespace App\Exports;

use App\Models\Students;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StudentExport implements FromView, WithColumnWidths, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $datas = User::whereHas('roles', function ($q) {
            $q->where('name', 'student');
        })->where('status', 'Publish')->orderBy('first_name', 'asc')->get();
        return view('exports.students', [
            'datas' =>  $datas
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 3,
            'B' => 24,
            'C' => 24,
            'D' => 24,
            'E' => 24,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            // 1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            // 'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            'A2'  => ['font' => ['bold' => true]],
            'B2'  => ['font' => ['bold' => true]],
            'C2'  => ['font' => ['bold' => true]],
            'D2'  => ['font' => ['bold' => true]],
            'E2'  => ['font' => ['bold' => true]],
        ];
    }
}
