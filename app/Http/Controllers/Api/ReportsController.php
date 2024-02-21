<?php

namespace App\Http\Controllers\Api;

//import Model "Event"
use App\Models\Program;
use App\Models\Library\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//import Resource "EventResource"
use App\Http\Resources\EventResource;

class ReportsController extends Controller
{
    /**
     * ......
     *
     */
    public function totalPrograms()
    {
        // students
        $totalStudents = [
            'trash' => null,
            'draft' => null,
            'publish' => null
        ];

        // programs
        $totalPrograms = [
            'trash' => Program::onlyTrashed()->count(),
            'draft' => Program::where('status', 'Draft')->count(),
            'publish' => Program::where('status', 'Publish')->count()
        ];

        // books
        $totalBooks = [
            'trash' => null,
            'draft' => null,
            'publish' => null
        ];

        // categories
        $totalCategories = [
            'trash' => null,
            'draft' => null,
            'publish' => null
        ];

        // authors
        $totalAuthors = [
            'trash' => Author::onlyTrashed()->count(),
            'draft' => Author::where('status', 'Draft')->count(),
            'publish' => Author::where('status', 'Publish')->count()
        ];

        // loan logs
        $totalLogs = [
            'trash' => null,
            'draft' => null,
            'publish' => null
        ];

        // all users
        $totalUsers = [
            'trash' => null,
            'draft' => null,
            'publish' => null
        ];

        // roles
        $totalRoles = [
            'trash' => null,
            'draft' => null,
            'publish' => null
        ];

        $status = 'success';
        $description = 'Reports';
        
        return compact(
            'status',
            'description', 
            'totalStudents',
            'totalPrograms',
            'totalBooks',
            'totalCategories',
            'totalAuthors',
            'totalLogs',
            'totalUsers',
            'totalRoles',
        );
        
    }


}
