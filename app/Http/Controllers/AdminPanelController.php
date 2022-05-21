<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Message;

class AdminPanelController
{
    public function getContactMessage()
    {
        $messages = Message::latest()->get();

        return view('Message.index', compact('messages'));
    }

    public function getUsers()
    {
        $users = User::latest()->get();

        return view('Users.index', compact('users'));
    }

    public function getCourses()
    {
        $courses = Course::latest()->get();

        return view('Course.index', compact('courses'));
    }
}
