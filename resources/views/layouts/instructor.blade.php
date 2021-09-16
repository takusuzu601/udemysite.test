<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Tailwind CSS -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5 gap-4">

                <aside>
                    <h1 class="font-bold text-lg mb-4">コースの編集画面</h1>
                    <ul class="text-sm text-gray-600 mb-6">
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.edit',$course) border-indigo-400 @else border-transparent @endif  pl-2">
                            <a href="{{route('instructor.courses.edit',$course)}}">コース情報</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.curriculum',$course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.curriculum',$course)}}">コースレッスン</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.goals',$course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.goals',$course)}}">コースの目標</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.students',$course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.students',$course)}}">学生</a>
                        </li>

                        @if ($course->observation)
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.observation',$course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{route('instructor.courses.observation',$course)}}">Observaciones</a>
                        </li>
                        @endif

                    </ul>

                    @switch($course->status)
                        @case(1)
                                <form action="{{route('instructor.courses.status',$course)}}" method="POST">
                                    @csrf

                                    <button class="btn btn-danger" type="submit">コース公開をリクエストする</button>
                                </form>
                            @break
                        @case(2)
                            <div class="card text-gray-500">
                                <div class="card-body">
                                    現在このコースは審査中です
                                </div>
                            </div>
                            @break
                        @case(3)
                        <div class="card text-gray-500">
                            <div class="card-body">
                                現在このコースは公開中です
                            </div>
                        </div>

                        @break
                        @default

                    @endswitch
                </aside>

                <div class="col-span-4 card">
                    <main class="card-body text-gray-600">
                            {{$slot}}
                    </main>
                </div>
            </div>

        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
           {{$js}}
        @endisset

    </body>
</html>
