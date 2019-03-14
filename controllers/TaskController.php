<?php

namespace Presenter\Controllers;
use Presenter\App\App;
use Presenter\Models\Task;

class TaskController
{
    public static function index()
    {
        $database = App::get('database');
        $tasks = $database->select('Tasks', ["id", "description", "completed"]);
        if (!$tasks) {
            $tasks = [];
        }
        $title = 'Tasks';

        return view('tasks.index', compact('tasks', 'title'));
    }

    public static function store()
    {  
        // Save the task.
        try {
            App::get('database')->insert('Tasks', ['description' => $_POST['description']]);
        }
        catch (Exception $e) {
            require "views/500.php";
        }

        // Redirect to tasks.
        return redirect('tasks');
    }
}