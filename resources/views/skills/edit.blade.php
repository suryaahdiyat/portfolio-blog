@extends('layouts.main')

@section('content')
<form action="/know-me-more/{{ $skill->id }}" method="POST"
    class="w-1/2 p-4 mx-2 rounded-md bg-gradient-to-r from-green-400 via-blue-500 to-purple-800 text-slate-900">
    @csrf
    @method('PUT')
    <h1 class="mb-4 text-2xl font-bold">Add New Skill Here</h1>
    @csrf
    <div class="grid h-10 grid-cols-1 mb-2 md:grid-cols-2 ">
        <label for="link_img">Link Image</label>
        <input type="text" name="link_img" id="link_img" class="p-2 bg-transparent border-b-2 border-slate-900" value="{{ $skill->link_img }}">
    </div>
    <div class="grid h-10 grid-cols-1 mb-2 md:grid-cols-2">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="p-2 bg-transparent border-b-2 border-slate-900" value="{{ $skill->title }}">
    </div>
    <div class="grid h-10 grid-cols-1 mb-2 md:grid-cols-2">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="p-2 bg-transparent border-b-2 border-slate-900" value="{{ $skill->description }}">
    </div>
    <div class="grid grid-cols-1 gap-2 my-2 md:grid-cols-2">
        <a href="/know-me-more"
            class="block py-2 text-center text-white duration-100 rounded bg-rose-700 hover:bg-rose-900 hover:scale-95">back</a>
        <button type="submit"
            class="block py-2 text-center text-white duration-100 rounded bg-cyan-700 hover:bg-cyan-900 hover:scale-95">save</button>
    </div>
</form>
@endsection