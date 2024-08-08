@extends('layouts.main')

@section('content')
<section class="bg-gray-900 text-white">
	<div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
		<div class="mx-auto max-w-3xl text-center">
			<h1
				class="pb-1 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
				My Portfolio

				<span class="mt-2 tracking-widest sm:block text-3xl"> Surya Ahdiyat </span>
			</h1>

			<p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
				Saya seorang mahasiswa Politeknik Hasnur yang memiliki minat yang tinggi dalam dunia Web Developmet dan Photography
			</p>

			<div class="mt-8 flex flex-wrap justify-center gap-4">
				<a class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto"
					href="/know-me-more">
					Know me more
				</a>

				<a class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
					href="https://github.com/suryaahdiyat">
					My Github
				</a>
				<a class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
					href="https://www.instagram.com/s_achdiyy_/">
					My Instagram
				</a>
			</div>
		</div>
	</div>
</section>
@endsection