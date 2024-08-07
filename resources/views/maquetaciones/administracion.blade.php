<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobach 35</title>
    {{--@vite('resources/css/app.css')--}}
</head>
<style>
            .cuerpo{
            grid-template-columns: 20% 80% ;
            display: grid;
            height: 2000px;
        }        

</style>
<body>
    <div class="bg-[#1468a8] text-white flex items-center py-4 px-6">
        <img src="{{asset('assets/logo.webp')}}" width="218px" height="89px" class="mr-4" alt="logo">
    </div>
    <div class="cuerpo">
        <div class="menu bg-red-500 text-white ">
            opciones
        </div>
        <div class="contenido">
            @yield('contenido')
        </div>
    </div>

    <!--
    <div class="p-6">
    </div>
    -->
</body>
</html>
