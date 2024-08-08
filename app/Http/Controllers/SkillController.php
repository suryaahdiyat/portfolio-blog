<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('skills.index', [
            "skills" => Skill::latest()->get()
        ]);
    }

    public function create(){
        return view('skills.create');
    }

    public function store(Request $request){
        $request->validate([
            'link_img' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        Skill::create([
            'link_img' => $request->link_img,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return view('skills.index', [
            'skills' => Skill::latest()->get(),
            'message' => 'Skill added succesfully'
        ]);
    }

    public function edit(Skill $skill){
        return view('skills.edit', [
            'skill' => $skill
        ]);
    }

    public function update(Request $request, Skill $skill){
        $request->validate([
            'link_img' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $skill->update([
            'link_img' => $request->link_img,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return view('skills.index', [
            'skills' => Skill::latest()->get(),
            'message' => 'Skill updated succesfully'
        ]);
    }

    public function destroy(Skill $skill){
        $skill->delete();

        return view('skills.index', [
            'skills' => Skill::latest()->get(),
            'message' => 'Skill deleted succesfully'
        ]);
    }
}
