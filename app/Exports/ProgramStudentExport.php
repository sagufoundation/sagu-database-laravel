<?php

namespace App\Exports;

use App\Models\Program;
use App\Models\User;
use App\Models\ProgramStudent;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProgramStudentExport implements FromView, WithColumnWidths, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $datas = ProgramStudent::where('program_id', $this->id)
        ->leftJoin('students', 'student_program.students_id', '=', 'students.id')
        ->leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
        ->leftJoin('users', 'students.user_id', '=', 'users.id')
        ->orderBy('users.first_name','asc')
        ->get();

        $program = Program::where('id', $this->id)->first();

        return view('exports.students-program', [
            'datas' =>  $datas,
            'program' =>  $program,
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
