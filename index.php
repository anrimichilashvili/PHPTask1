<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function getInfo()
    {
        return response()->json([
            'first_name' => 'anri',
            'last_name' => 'michilashvili',
            'age' => '20',
            'hobbies' => 'football',
        ]);
    }

    public function getHobbies()
    {
        return response()->json(['hobbies' => 'football']);
    }


    public function updateInfo()
    {
        return response()->json(['message' => 'Updated successfully']);
    }

    public function addInfo()
    {
        return response()->json(['message' => 'Added successfully']);
    }

    public function deleteInfo()
    {
        return response()->json(['message' => 'Deleted successfully']);
    }
}
