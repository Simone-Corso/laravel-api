<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::all();

        return response()->json(
            [
                "success" => true,
                "result" => $projects
            ]);
    }

    public function show() {

        $projects = Project::all();

        return response()->json(
            [
                "success" => true,
                "result" => $projects
            ]);
    }

    public function search (Request $request ) {
        $data = $request->all();
        if ( isset ($data ['name'])){
            $stringa = $data ['name'];
           

            $project = Project::where('title', 'like', "%{$stringa}%")->get();
            
            return response()->json(
                [
                    "success" => true,
                    "result" => $project,
                    "matches" => count($project)
                ]);
        } else {
            abort(404);
        }
    }
}
