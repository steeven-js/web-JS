@extends('layouts.default')
@section('content')
{{-- @dd($newbies); --}}
    <section class="py-8 bg-white dark:bg-gray-800" id="Projets">
        <div class="pt-8 mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Newbie</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic
                growth.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @forelse ($newbies as $newbie)
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                </div>
            @empty
                <h1>Aucun challenge Newbie</h1>
            @endforelse
        </div>
    </section>
@endsection
