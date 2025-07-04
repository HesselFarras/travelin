@extends('components.layout')

@section('content')
    <!-- Search Section -->
<body class="bg-gradient-to-b from-pink-500 to-orange-500 font-sans text-white base-class sm:sm-class md:md-class lg:lg-class xl:xl-class">
    <section class="py-8 ">
        <div class="container mx-auto text-center">
            <div class="flex flex-col items-center">
                <div class="flex space-x-4 bg-white p-4 rounded-lg shadow-lg w-full max-w-4xl">
                    <input type="text" placeholder="Apa yang ingin kamu lakukan di liburanmu?" class="flex-grow p-2 text-black border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
                    <button class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Cari</button>
                </div>
                <div class="flex flex-wrap justify-center mt-4 space-x-4">
                    <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Atraksi</button>
                    <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Arena Bermain</button>
                    <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Event</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Search Section -->
    <!-- Promo Banner -->
    <section class="py-8">
        <div class="container mx-auto text-center flex justify-center pt-8">
            <a href="https://www.traveloka.com/id-id/promotion/sale?funnel_source=Merchandising.mainAppHomePage.mainAppHomePage-V2-SSR-web-ID-LandingPage&funnel_id=M_0_2804d6f29cbd8391d10d943e1f8ddee28e1b93da_0_90a6e2f6affd2e4408e34a457f71c0c2b4d3e1f7&internal_source=true" target="_blank"><img src="/images/image1.webp" class="rounded-md" alt="banner"></a>
        </div>
        <div class="container mx-auto text-center flex justify-center pt-8">
            <a href="" target="_blank"><img src="/images/image2.jpg" class="rounded-md" alt="banner"></a>
        </div>
    </section>
    <!-- End Promo Banner -->

    <!-- Popular Destinations -->
    <section class="mb-8">
        <h2 class="text-xl font-semibold mb-4 flex justify-center">Temukan yang kamu suka di Asia hingga dunia</h2>
        <div class="flex justify-center">
            <div class="bg-transparent p-4 rounded">
            <a href="" target="_blank"><img src="/images/image3.png" alt="Singapura" class="rounded-md"></a>
            </div>
            <div class="bg-transparent p-4 rounded">
            <a href="" target="_blank"><img src="/images/image4.png" alt="Malaysia" class="rounded-md"></a>
            </div>
            <div class="bg-transparent p-4 rounded">
            <a href="" target="_blank"><img src="/images/image5.png" alt="Korea Selatan" class="rounded-md"></a>
            </div>
            <!-- Tambahkan destinasi lainnya -->
        </div>
    </section>
    <!-- End Popular Destinations -->
</body>


@endsection