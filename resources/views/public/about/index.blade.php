@extends('layouts.front')
@section('main')
<section>
    <div class="pb-10 pt-10 w-full h-full">
        <div class="container mx-auto">
            <div class="text-center font-raleway md:py-20">
                <h1 class="font-bold text-3xl md:text-[40px] text-three">VISI</h1>
                <p class="max-w-[1200px] text-sm md:text-base mx-auto pt-5">
                    Menjadikan HMTI sebagai wadah utuh untuk berkembang dengan 
                    ekspresi dan kebersamaan
                </p>
                <h1 class="font-bold text-3xl md:text-[40px] text-three pt-10">MISI</h1>
                <p class="max-w-[1200px] text-sm md:text-base mx-auto pt-5">
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
            <div class="text-three font-raleway font-bold mx-auto text-center relative py-20">
                <h1 class="text-3xl md:text-[35px] uppercase">Struktural Kepengurusan</h1>
                <img class="w-full py-10 rounded-3xl bg-white" src="/assets/struktur.webp" alt="" />
            </div>
            <div class="relative">
            </div>
        </div>
    </div>
</section>

<!-- FILOSOFI LOGO -->
<section class="my-8 mx-5">
    <div
        class="container flex flex-col items-center justify-center gap-14 px-5 py-10 md:p-12 rounded-xl space-y-4 md:flex-row md:space-y-0 md:space-x-12"
        style="background: linear-gradient(129.61deg, #1746F9 7.95%, #17C3F9 72.64%);">
        <img class="w-48 md:w-[350px]" src="/assets/Logo-HMTI.png" alt="" />
        <div class="lg:w-[560px] w-[300px] text-center md:text-start font-raleway text-white">
            <h1 class="font-bold text-3xl md:text-[36px] pb-6">Filosofi Logo</h1>
            <p class="text-sm md:text-[16px]">
                Lambang dan logo himpunan mahasiswa teknik informatika merupakan hasil dari pemikiran, musyawarah,
                pertimbangan dan saran dari pembentuk awal serta para tokoh berpengaruh di indonesia yaitu :
            </p>
            <ul class="text-sm md:text-[16px] mt-2 space-y-1 font-semibold list-decimal list-inside ">
                <li>Alm. Prof. Dr.-ing. Ir. H. Bacharuddin jusuf habibie, freng</li>
                <li>Prof. Dr. H. Mohammad mahfud mahmodin, s.h., s.u., m.i.p</li>
                <li>Letnan jenderal tni (purn.) H. Prabowo subianto djojohadikusumo </li>
            </ul>
            <p class="text-sm md:text-[16px] pt-3">
                Dari beberapa tokoh tersebut terdapat banyak pesan yang dititipkan untuk Himpunan Mahasiswa Teknik
                Informatika yang secara garis besar HMTI harus mempunyai ikatan yang kuat baik sesama anggota maupun
                dengan yang lainnya dan dapat menjadi ruang yang luas untuk belajar dan berkembang serta dapat
                bermanfaat bagi lembaga, mahasiswa dan masyarakat dalam bidang teknologi.
            </p>
        </div>
    </div>
</section>
@endsection