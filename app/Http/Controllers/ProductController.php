<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function create()
    {
        return view('Product.create');
    }

    public function store(Request $request)
    {
        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        Session::flash('CourseAdded');

        return redirect()->route('courses.create');
    }

    public function edit(Course $course)
    {
        return view('Product.edit', compact('course'));
    }

    public function update(Course $course, Request $request)
    {
        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        Session::flash('CourseEdited');

        return redirect()->route('courses.create');
    }
}
