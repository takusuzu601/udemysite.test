<x-app-layout>
    <section class="bg-cover"  style="background-image:url({{asset( 'img/home/people-2557399_1920.jpg' )}})">
        <div class="container py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Domina la tecnología web con Coders Free</h1>
                <p class="text-white text-lg mt-2 mb-4">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web</p>
                <!-- component -->

                @livewire('search')

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">
            CONTENIDO
        </h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/cat-6463284_640.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">
                            Course y proyectos
                        </h1>
                        <p class="text-sm text-gray-500">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque necessitatibus vel qui pariatur 
                        </p>
                    </header>
            </article>
            <article>              <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/manarola-4840080_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        Manual de Laravel
                    </h1>
                    <p class="text-sm text-gray-500">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque necessitatibus vel qui pariatur 
                    </p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/tree-736885_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        Blog
                    </h1>
                    <p class="text-sm text-gray-500">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque necessitatibus vel qui pariatur 
                    </p>
                </header>
            </article>
            <article> 
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/zebra-2283914_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                       Desarrollo web
                    </h1>
                    <p class="text-sm text-gray-500">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque necessitatibus vel qui pariatur 
                    </p>
                </header>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes que curso laravel?</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ipsum suscipit </p>
        <div class="flex justify-center">
            <a href="{{route('courses.index')}}" class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                Catalago de cursos
               </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">
            ULTIMOS CURSOS
        </h1>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach($courses as $course)
            <!-- components course-card.blade.phpと連動 -->
              <x-course-card :course="$course" />
            @endforeach

        </div>
    </section>

</x-app-layout>
