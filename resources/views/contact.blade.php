@extends('layout')
@section('title', 'Contact')
@section('content')
     <h1 class="flex justify-center p-10 text-5xl font-bold">Contact</h1>

    @if(session('success'))
        <div id="popup-success" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="relative bg-white rounded-lg shadow-lg p-8 text-green-700 text-xl font-bold border-2 border-green-700">
                {{ session('success') }}
                <button onclick="document.getElementById('popup-success').style.display='none'" class="block mt-6 mx-auto bg-green-700 text-white px-4 py-2 rounded">Sluiten</button>
            </div>
        </div>
    @endif
    <div class="text-center p-4 sm:p-8">
        <p class="max-w-3xl mx-auto text-lg">"Heb je vragen of wil je meer weten over jungletuinen? Vul hieronder het contactformulier in en ik neem zo snel mogelijk contact met je op. Wil je extra inspiratie en een kijkje achter de schermen van mijn eigen jungletuin? Check dan ook mijn socials voor foto’s, updates en ideeën."</p>
    </div>
        <div class="flex justify-center gap-6 sm:gap-20 lg:gap-40 my-4">
            <a href="tel:+31612345678" class="text-[64px] text-[#16a34a]">
                <i class="fas fa-phone"></i>
            </a>
            <a href="https://facebook.com" target="_blank" class="text-[64px] text-[#4267B2]">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="text-[64px] text-[#E1306C]">
                <i class="fab fa-instagram"></i>
            </a>
        </div>

    <form method="POST" action="{{ route('contact.send') }}" class="max-w-xl mx-4 sm:mx-auto rounded-lg shadow p-6 mt-8 text-black" style="background-color: #759069;">
            @csrf
            <div class="mb-4">
                <label for="email" class="block font-bold mb-2">E-mail</label>
                <input type="email" name="email" id="email" required class="w-full bg-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block font-bold mb-2">Bericht</label>
                <textarea name="message" id="message" rows="5" required class="w-full bg-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>
            <button type="submit" class="bg-gray-300 font-bold py-2 px-6 rounded transition">Verstuur</button>
        </form>
@endsection