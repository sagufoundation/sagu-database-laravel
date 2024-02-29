<?php

namespace App\Exports;

use App\Models\Program;
use App\Models\User;
use App\Models\Students;
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

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        if($this->id != 'other')
        {
            $datas = ProgramStudent::where('program_id', $this->id)
            ->leftJoin('students', 'student_program.students_id', '=', 'students.id')
            ->leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
            ->leftJoin('users', 'students.user_id', '=', 'users.id')
            ->orderBy('users.first_name','asc')
            ->get();
        }else{
            $datas = Students::leftJoin('student_program', 'student_program.students_id', '=', 'students.id')
            ->leftJoin('provinces', 'students.province_id', '=', 'provinces.id')
            ->leftJoin('users', 'students.user_id', '=', 'users.id')
            ->orderBy('users.first_name','asc')
            ->whereNull('student_program.students_id')
            ->get();
        }

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
