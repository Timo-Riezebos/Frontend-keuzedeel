@extends('layout')
@section('title', 'Eigen Jungletuin')
@section('meta_description', 'Creëer jouw eigen jungletuin met tropische planten en sfeervolle elementen.')
@section('content')
    <h1 class="flex justify-center p-10 text-5xl font-bold">Eigen Jungletuin</h1>
    <div class="text-center p-6">
        <p class="max-w-3xl mx-auto text-lg mb-10">
            Droom jij van een tuin die voelt als een tropisch paradijs? Met een jungletuin haal je de sfeer van verre landen gewoon naar je eigen achtertuin. Grote bladeren, weelderig groen, kronkelende paadjes en misschien zelfs het geluid van kabbelend water – een jungletuin is avontuurlijk én rustgevend tegelijk. Het lijkt misschien ingewikkeld om zoiets te creëren, maar met een paar slimme keuzes kom je al een heel eind. Volg deze 4 stappen en tover jouw tuin om tot een echte jungle-oase.
        </p>
    </div>

    {{-- Stap 1 --}}
    <div class="flex justify-center mb-20">
        <div class="jungletuin-row flex flex-col md:flex-row md:h-96 px-6 md:px-10 max-w-6xl w-full">
            <div class="w-full md:w-1/2">
             <img src="/images/jungletuin-afbeelding-1.webp"
                 alt="Jungletuin tropische planten en sfeerbeeld"
                 class="rounded-lg w-full h-64 md:h-96 object-cover">
            </div>
            <div class="flex flex-col justify-center w-full md:w-1/2">
                <p class="text-center md:text-left text-lg p-6">
                    🌿 1. Kies de juiste planten<br>
                    Een jungletuin begint met groen, veel groen! Kies voor planten met grote, tropisch ogende bladeren zoals bananenplanten, hosta’s, varens of bamboe. Combineer dit met kleurrijke bloemen zoals lelies of hibiscus om een exotische sfeer te creëren. Hoe meer variatie in vorm en bladstructuur, hoe natuurlijker het oogt.
                </p>
            </div>
        </div>
    </div>

    {{-- Stap 2 --}}
    <div class="flex justify-center mb-20">
        <div class="jungletuin-row flex flex-col md:flex-row md:h-96 px-6 md:px-10 max-w-6xl w-full">
            <div class="w-full md:w-1/2 md:order-2">
             <img src="/images/jungletuin-afbeelding-4.webp"
                 alt="Jungletuin hoogteverschillen en lagen"
                 class="rounded-lg w-full h-64 md:h-96 object-cover">
            </div>
            <div class="flex flex-col justify-center w-full md:w-1/2 md:order-1">
                <p class="text-center md:text-left text-lg p-6">
                    🌿 2. Werk met lagen en hoogteverschillen<br>
                    Een echte jungle is weelderig en vol. Creëer dat effect door in lagen te werken: hoge bomen of struiken achterin, middelgrote planten in het midden en bodembedekkers of varens vooraan. Dit zorgt voor diepte en een avontuurlijke uitstraling, alsof je steeds iets nieuws ontdekt.
                </p>
            </div>
        </div>
    </div>

    {{-- Stap 3 --}}
    <div class="flex justify-center mb-20">
        <div class="jungletuin-row flex flex-col md:flex-row md:h-96 px-6 md:px-10 max-w-6xl w-full">
            <div class="w-full md:w-1/2">
             <img src="/images/jungletuin-afbeelding-1.webp"
                 alt="Jungletuin water en verlichting sfeerbeeld"
                 class="rounded-lg w-full h-64 md:h-96 object-cover">
            </div>
            <div class="flex flex-col justify-center w-full md:w-1/2">
                <p class="text-center md:text-left text-lg p-6">
                    🌿 3. Voeg water en sfeer toe<br>
                    Water is onmisbaar in een jungletuin. Een vijver, waterval of kleine fontein geeft niet alleen een tropische sfeer, maar trekt ook vogels en insecten aan. Combineer dit met sfeervolle verlichting, zoals spots tussen de planten of hangende lantaarns, voor een magische avondbeleving.
                </p>
            </div>
        </div>
    </div>

    {{-- Stap 4 --}}
    <div class="flex justify-center mb-20">
        <div class="jungletuin-row flex flex-col md:flex-row md:h-96 px-6 md:px-10 max-w-6xl w-full">
            <div class="w-full md:w-1/2 md:order-2">
             <img src="/images/jungletuin-afbeelding-4.webp"
                 alt="Jungletuin avontuurlijke paadjes en zitplekjes"
                 class="rounded-lg w-full h-64 md:h-96 object-cover">
            </div>
            <div class="flex flex-col justify-center w-full md:w-1/2 md:order-1">
                <p class="text-center md:text-left text-lg p-6">
                    🌿 4. Maak het avontuurlijk<br>
                    Een jungletuin is meer dan alleen planten; het is een belevenis. Leg kronkelende paadjes aan, verstop zitplekjes tussen het groen of hang een hangmat op. Gebruik natuurlijke materialen zoals hout of steen om het geheel af te maken. Zo wordt jouw tuin een plek waar je steeds opnieuw verrast wordt.
                </p>
            </div>
        </div>
    </div>
@endsection
