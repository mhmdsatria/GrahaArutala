@extends('layouts.front')
@section('main')
<section>
    <div class="w-full h-full py-10">
        <div class="container mx-auto">
            <div class="py-20 text-center font-raleway">
                <h1 class="font-bold text-[40px] text-three">VISI</h1>
                <p class="max-w-[900px] mx-auto py-10">
                    Menjadikan HMTI sebagai wadah utuh untuk berkembang dengan
                    ekspresi dan kebersamaan
                </p>
                <h1 class="font-bold text-[40px] text-three">MISI</h1>
                <p class="max-w-[900px] mx-auto">
                <ul class="list-disc list-inside">
                    <li> Penataan & pengembangan sumber daya manusia menjadi fokus
                        utama yang dikelola</li>
                    <li>Pemanfa’atan sumber daya informasi sebagai dasar Langkah untuk
                        berkembang dan keterbukaan</li>
                    <li>Pengelolaan & pengembangan sumber daya finansial sebagai
                        penunjang dari geraknya organisasi</li>
                    <li>Menselaraskan semua potensi dan kekuatan para pemangku
                        kepentingan agar lebih bermanfa’at</li>
                    </p>
            </div>
            <div class="relative py-20 mx-auto font-bold text-center text-three font-raleway">
                <h1 class="text-[35px]">Struktural Kepengurusan</h1>
                <img class="w-full py-10" src="/assets/struktur.webp" alt="" />
            </div>
            <div class="relative">
                <a href="divisi" class="flex items-center gap-2 Kontak py-2 px-6 bg-secondary rounded-full text-[15px] font-raleway font-semibold max-sm:hidden text-white absolute right-0 -top-20">
                    Selengkapnya<img src="/assets/arrow.svg" alt="" />
                </a>
            </div>
        </div>
    </div>
</section>
@endsection