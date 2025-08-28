<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectModel;

class SubjectController extends Controller
{
    public function index(SubjectModel $subjectModel) {
        return view('modules.subject.index', compact('subjectModel'));
    }

    public function create() {
        return view('modules.subject.create');
    }

    public function show() {
        return view('modules.subject.show');
    }

    public function store(Request $request, SubjectModel $subjectModel) {
        $validate = $request->validate([
            'code' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'lab_unit' => 'required|string',
            'lec_unit' => 'required|string',
            'total_units' => 'required|string',
        ]);

        $subjectModel->create([
            'subject_code' => $validate['code'],
            'subject_title' => $validate['title'],
            'subject_description' => $validate['description'],
            'subject_lab_unit' => $validate['lab_unit'],
            'subject_lec_unit' => $validate['lec_unit'],
            'subject_total_unit' => $validate['total_units'],
        ]);

        return redirect()->route('subjects.create')->with('success', 'Subject Created Successfully!');

    }
}
