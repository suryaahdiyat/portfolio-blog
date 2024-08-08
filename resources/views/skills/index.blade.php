@extends('layouts.main')

@section('content')
<div class="">
	<a href="/"
		class="text-slate-900 block bg-gradient-to-l from-green-300 via-blue-500 to-purple-600 rounded-md px-6 py-4 text-2xl text-center font-bold tracking-widest">My
		Portfolio</a>
	<div class="grid grid-cols-1 sm:grid-cols-2 gap-3 py-5 mt-24">
		<div class="border-r-8 flex justify-center items-center">
			<img src="https://avatars.githubusercontent.com/u/68853271?v=4" alt="Profile Pic"
				class=" w-80 h-80 border-b-8 border-r-8">
		</div>
		<p
			class="rounded-md bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 px-6 py-4 text-justify text-lg font-bold text-slate-900">
			Saya Surya Ahdiyat, sedang berkuliah di Politeknik Hasnur sebagai mahasiswa Teknik Informatika.
			Memiliki antusias yang tinggi dalam bidang pengembangan web. Saya memiliki kemampuan dasar
			dalam HTML, CSS, JavaScript, serta pengetahuan tentang PHP dan framework seperti Laravel. Saya
			juga sedang memperluas pengetahuan saya tentang React untuk pengembangan frontend yang
			lebih dinamis. Selain itu, saya mulai mempelajari backend development dengan Node.js dan
			mengelola database menggunakan MySQL. Walaupun pengalaman profesional saya masih
			terbatas, saya memiliki semangat tinggi untuk belajar dan berkontribusi dalam tim untuk
			menciptakan solusi web yang inovatif dan ramah pengguna.</p>
	</div>
	<div class="p-4">
		<div class="my-10 bg-gradient-to-t from-green-400 via-blue-500 to-purple-800 rounded-md px-6 py-4 flex justify-between items-center">
			<h1 class="text-2xl font-bold text-slate-900">My Skills</h1>
			<a href="/know-me-more/skill/add" class="px-3 py-2 bg-slate-900 text-slate-200 rounded-lg hover:bg-slate-700 hover:text-slate-300 duration-100">Add New Skill</a>
		</div>
		@if(isset($message))
			<p class="relative w-full p-3 my-4 text-white border-4 bg-lime-600 border-lime-800">
				{{ $message }}
				<a href="/know-me-more"
					class="absolute flex items-center justify-center w-6 h-6 text-xs rounded-full -top-3 -right-3 bg-rose-700">X</a>
			</p>
		@endif
		<div class="grid grid-col-1 md:grid-cols-3 gap-6">
			@foreach ($skills as $skill)			
				<article class="group">
					<img alt="Gambar {{ $skill->title }}"
						src="{{ $skill->link_img }}"
						class="h-56 w-full rounded-xl object-contain shadow-xl transition group-hover:grayscale-[50%] dark:shadow-gray-700/25 p-2" />
		
					<div class="p-4">
						<a href="#">
							<h3 class="text-lg font-medium text-gray-900 dark:text-white">
								{{ $skill->title }}
							</h3>
						</a>
		
						<p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
							{{ $skill->description }}
						</p>
					</div>
					<div class="flex flex-row gap-2">
						<a href="/know-me-more/skill/edit/{{ $skill->id }}" class="bg-teal-700 px-4 py-2 text-slate-200">Ubah</a>
						<form action="/know-me-more/skill/{{ $skill->id }}" method="POST">
							@csrf
							@method('DELETE')
							<button onclick="return handleDelete()"
								class="px-4 py-2 text-white duration-100 bg-rose-700 hover:bg-rose-900 hover:scale-105">delete</button>
						</form>
					</div>
				</article>
			@endforeach
		</div>
	</div>
</div>
<script>
	const handleDelete = () => {
        return confirm('Are you want to delete this skill?')
    }
</script>
@endsection