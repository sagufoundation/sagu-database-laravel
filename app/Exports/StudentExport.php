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
        $datas = User::whereHas('roles', function ($q) { $q->where('name', 'student');
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
            'F' => 24,
            'G' => 24,
            'H' => 24,
            'I' => 24,
            'J' => 24,
            'K' => 24,
            'L' => 24,
            'M' => 24,
            'N' => 24,
            'O' => 24,
            'P' => 24,
            'Q' => 24,
            'R' => 24,
            'S' => 24,
            'T' => 24,
            'U' => 24,
            'V' => 24,
            'W' => 24,
            'X' => 24,
            'Y' => 24,
            'Z' => 24,
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
            'F2'  => ['font' => ['bold' => true]],
            'G2'  => ['font' => ['bold' => true]],
            'H2'  => ['font' => ['bold' => true]],
            'I2'  => ['font' => ['bold' => true]],
            'J2'  => ['font' => ['bold' => true]],
            'K2'  => ['font' => ['bold' => true]],
            'L2'  => ['font' => ['bold' => true]],
            'M2'  => ['font' => ['bold' => true]],
            'N2'  => ['font' => ['bold' => true]],
            'O2'  => ['font' => ['bold' => true]],
            'P2'  => ['font' => ['bold' => true]],
            'Q2'  => ['font' => ['bold' => true]],
            'R2'  => ['font' => ['bold' => true]],
            'S2'  => ['font' => ['bold' => true]],
            'T2'  => ['font' => ['bold' => true]],
            'U2'  => ['font' => ['bold' => true]],
            'V2'  => ['font' => ['bold' => true]],
            'W2'  => ['font' => ['bold' => true]],
            'X2'  => ['font' => ['bold' => true]],
            'Y2'  => ['font' => ['bold' => true]],
            'Z2'  => ['font' => ['bold' => true]],
        ];
    }
}
