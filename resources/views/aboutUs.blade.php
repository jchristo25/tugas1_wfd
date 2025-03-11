@extends('base.mainLayout')
@section('content')

<div class="flex flex-col items-center text-white p-4 space-y-6">
    <!-- Peta -->
    <div class="w-full max-w-lg">
        <iframe 
            width="100%" 
            height="300" 
            style="border:0; border-radius: 10px;" 
            loading="lazy" 
            allowfullscreen 
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7157271135707!2d112.77596227440948!3d-7.27315357146847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa2361946913%3A0x2d799abcdd6941c0!2sJl.%20Dharmahusada%20Indah%20Timur%20VI%2C%20Mulyorejo%2C%20Kec.%20Mulyorejo%2C%20Surabaya%2C%20Jawa%20Timur%2060115!5e0!3m2!1sid!2sid!4v1741592469933!5m2!1sid!2sid">
        </iframe>
    </div>

    <!-- Informasi Alamat -->
    <div class="bg-gray-900 p-6 rounded-lg shadow-md w-full max-w-lg">
        <p class="text-lg font-semibold">Alamat</p>
        <p class="text-gray-300">Jalan Dharmahusada Indah Timur VI, Mulyorejo, Kec. Mulyorejo, Kota Surabaya, Jawa Timur, Indonesia</p>

        <p class="text-lg font-semibold mt-4">Kode Pos</p>
        <p class="text-gray-300">60115</p>

        <p class="text-lg font-semibold mt-4">Telepon</p>
        <p class="text-gray-300">0821 4339 2878</p>
    </div>
</div>

@endsection
