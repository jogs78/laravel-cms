<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobach 35</title>
    {{--@vite('resources/css/app.css')--}}
      @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-[#1468a8] text-white flex items-center py-4 px-6">
        <img src="{{asset('assets/logo.webp')}}" width="218px" height="89px" class="mr-4" alt="logo">
        
        <div class="flex justify-center flex-grow">
            <nav class="flex space-x-4">
                @foreach (App\Http\Controllers\EstructuraController::principales() as $seccion)
                    <div class="relative group">
                        <a href="{{route('ver',$seccion->contenido_id)}}" class="bg-red-500 text-white rounded-full py-2 px-4 transition transform hover:scale-110">{{ $seccion->nombre }}</a>
                        
                        @if($seccion->subSecciones() && $seccion->subSecciones()->count() > 0)
                            <!-- Sub-menú, oculto por defecto y visible cuando el ratón está sobre el grupo -->
                            <ul class="absolute left-0 hidden group-hover:block bg-white text-black mt-2 rounded-md py-2 shadow-lg">
                                @foreach ($seccion->subSecciones() as $subSeccion)
                                    <li>
                                        <a href="{{route('ver',$subSeccion->contenido_id)}}" class="block px-4 py-2 hover:bg-gray-200">{{ $subSeccion->nombre }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            </nav>
        </div>
    </div>
    <div class="p-6">
        @yield('contenido')
    </div>
</body>
</html>
