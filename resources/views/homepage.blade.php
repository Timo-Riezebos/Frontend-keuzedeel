@extends('layout')
@section('title', 'Jungletuinen')
@section('meta_description', 'Jungletuinen: inspiratie, tips en informatie over tropische tuinen in Nederland. Ontdek de mooiste jungletuinen, sfeerbeelden en praktische adviezen voor jouw eigen groene paradijs.')
@section('content')
    <h1 class="flex justify-center p-6 md:p-10 text-3xl md:text-5xl font-bold">Jungletuinen</h1>
    <img src="/images/header.webp" alt="" class="w-full h-48 md:h-96 object-cover rounded-none" />
    <div class="text-center p-6 md:p-18">
    <p class="max-w-2xl mx-auto text-base md:text-lg">
        Een jungletuin is een groene oase vol tropische sfeer, grote bladeren en kleurrijke bloemen. 
        Het voelt avontuurlijk en rustgevend tegelijk – een geweldige manier om je tuin om te toveren tot een exotisch paradijs.
      </p>
    </div>
    <div class="w-full max-w-6xl mx-auto px-4">
    <div class="swiper" id="jungletuin-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/jungletuin-afbeelding-2.webp" alt="" class="rounded-xl shadow-lg w-full h-40 md:h-64 object-cover" />
                </div>
                <div class="swiper-slide">
                    <img src="images/jungletuin-afbeelding-4.webp" alt="" class="rounded-xl shadow-lg w-full h-40 md:h-64 object-cover" />
                </div>
                <div class="swiper-slide">
                    <img src="images/jungletuin-afbeelding-2.webp" alt="" class="rounded-xl shadow-lg w-full h-40 md:h-64 object-cover" />
                </div>
                <div class="swiper-slide">
                    <img src="images/jungletuin-afbeelding-4.webp" alt="" class="rounded-xl shadow-lg w-full h-40 md:h-64 object-cover" />
                </div>
                <div class="swiper-slide">
                    <img src="images/jungletuin-afbeelding-2.webp" alt="" class="rounded-xl shadow-lg w-full h-40 md:h-64 object-cover" />
                </div>
                <div class="swiper-slide">
                    <img src="images/jungletuin-afbeelding-4.webp" alt="" class="rounded-xl shadow-lg w-full h-40 md:h-64 object-cover" />
                </div>
            </div>

            <!-- Navigatie pijlen -->
            <div class="swiper-button-next text-yellow-300"></div>
            <div class="swiper-button-prev text-yellow-700"></div>

            <!-- Paginatie bolletjes -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="w-full p-6 md:p-18 bg-green-500 mt-6 md:mt-18">
    <p class="max-w-xl mx-auto text-base md:text-lg text-black"> "Benieuwd hoe een jungletuin er in het echt uitziet? <a href="/eigenjungletuin" class="underline text-blue-00">Klik hier</a> en ontdek hoe je je eigen groene paradijs vol tropische planten, sfeer en inspiratie."</p>
    </div>
    <div class="text-center p-6 md:p-18">
    <p class="max-w-2xl mx-auto text-base md:text-lg">
       "Ontdek de mooiste jungletuinen: exotische plekken vol groen en inspiratie, perfect om te bezoeken en te beleven. Kijk hieronder welke tuinen je zeker niet mag missen."
      </p>
    </div>
    <div class="w-full max-w-6xl mx-auto md:px-0">
    <div id="map" class="h-64 md:h-96d shadow-lg"></div>
    </div>

    <script>
        // Init map
        const map = L.map('map').setView([52.370216, 4.895168], 10); // Amsterdam als voorbeeld

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Array van markers (kan uit je Laravel-controller komen)
        const markers = [
            { lat: 52.370216, lng: 4.895168, title: 'Amsterdam' },
            { lat: 52.090737, lng: 5.121420, title: 'Utrecht' },
            { lat: 51.924420, lng: 4.477733, title: 'Rotterdam' }
        ];

        // Voeg markers toe
        markers.forEach(marker => {
            L.marker([marker.lat, marker.lng])
             .addTo(map)
             .bindPopup(marker.title);
        });
    </script>
    <script>
        // Swiper responsive instellen
        if (window.Swiper) {
            new Swiper('#jungletuin-swiper', {
                slidesPerView: 1,
                breakpoints: {
                    1024: {
                        slidesPerView: 3
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
    </script>
@endsection