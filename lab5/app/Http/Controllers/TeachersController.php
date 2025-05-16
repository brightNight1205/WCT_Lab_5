<?php
namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        return response()->json(teachers::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
        ]);
        $teacher = teachers::create($validated);
        return response()->json(['message' => 'Teacher added', 'teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = teachers::find($id);
        if (!$teacher) {
            return response()->json(['error' => 'Teacher not found'], 404);
        }
        $teacher->update($request->all());
        return response()->json(['message' => 'Teacher updated', 'teacher' => $teacher]);
    }

    public function destroy($id)
    {
        $teacher = teachers::find($id);
        if (!$teacher) {
            return response()->json(['error' => 'Teacher not found'], 404);
        }
        $teacher->delete();
        return response()->json(['message' => 'Teacher deleted']);
    }
}