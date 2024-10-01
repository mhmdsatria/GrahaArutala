@extends('layouts.front')
@section('head')
<style type="text/tailwindcss">

	@layer utilities {
				body {
					overflow-x: hidden;
				}

				.countext {
					color: transparent;
					-webkit-text-stroke-width: 3px;
				-webkit-text-stroke-color: white;
				}

				.submenu {
					@apply absolute m-0 py-1 bg-primary invisible opacity-0 transition-all ease-in-out;
				}

				.submenu a {
					@apply text-white min-w-[135px] w-full block py-1 px-4 hover:bg-secondary hover:text-white;
				}

				.has-child:hover .submenu {
					@apply visible opacity-100;
				}

				.has-child {
					@apply relative cursor-pointer;
				}
				.has-child > span.caret {
					@apply absolute h-[26px] w-[12px] -right-0 top-1/2 transform -translate-y-1/2;
					content: url('data:image/svg+xml;charset=UTF-8, <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.666992 0.666748L4.33366 4.66675L8.00033 0.666748" stroke="white"/></svg>');
				}
				.bgc {
					background: linear-gradient(
						90.33deg,
						#1746f9 -0.22%,
						#1a3ab3 82.88%,
						#1e2748 113.74%
					);
				}

				.slides .slide {
					display: none;
				}

				.slides .slide img {
					width: 100%;
					animation-name: fade;
					animation-duration: 1.5s;
				}

				.slides .navigation {
					transform: translate(-50%, -50%);
				}

				.slides .navigation .prev,
				.slides .navigation .next {
					cursor: pointer;
					padding: 16px;
					font-weight: bold;
					font-size: 20px;
					color: white;
					background: rgba(0, 0, 0, 0.2);
					user-select: none;
					transition: 0.6s ease;
				}

				.slides .navigation .prev:hover,
				.slides .navigation .next:hover {
					background: rgba(0, 0, 0, 1);
				}

				@keyframes fade {
					from {
						opacity: 0.3;
					}
					to {
						opacity: 1;
					}
				}

				@media screen and (max-width: 1024px) {
					nav {
						left: -100%;
						transition: all 0.3s ease-in-out;
						z-index: 0;
					}
					nav > ul {
						@apply pt-10;
					}
					nav > ul > li {
						@apply w-full p-0;
					}
					.has-child {
						@apply overflow-hidden;
					}
					.has-child > span.caret {
						@apply invert-0 top-4;
					}
					.has-child.active .submenu {
						@apply visible opacity-100 max-h-[1000px];
					}
					nav .submenu {
						@apply visible opacity-100 relative w-full max-h-0;
					}
					nav.active {
						left: 0;
					}
					footer {
						z-index: -1;
					}
					.slides .navigation .prev,
					.slides .navigation .next {
						font-size: 18px;
						padding: 13px;
					}
				}

				@media screen and (max-width: 750px) {
					nav {
						left: -100%;
						transition: all 0.3s ease-in-out;
					}
					nav > ul {
						@apply pt-10;
					}
					nav > ul > li {
						@apply w-full p-0;
					}
					.has-child {
						@apply overflow-hidden;
					}
					.has-child > span.caret {
						@apply invert-0 top-4;
					}
					.has-child.active .submenu {
						@apply visible opacity-100 max-h-[1000px];
					}
					nav .submenu {
						@apply visible opacity-100 relative w-full max-h-0;
					}
					nav.active {
						left: 0;
					}
					.slides .navigation .prev,
					.slides .navigation .next {
						font-size: 15px;
						padding: 10px;
					}
				}
			}
		</style>
@endsection
@section('main')
<!-- CAROUSEL -->
<section class="py-7 md:py-[70px]">
	<div id="controls-carousel" class="relative" data-carousel="static">
		<div class="relative h-56 overflow-hidden md:h-[550px]">
			<!-- Item 1 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item="active">
				<img src="/assets/img-slide-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="..." />

				<!-- CALL TO ACTION -->
				<div class="absolute text-center top-1/4 right-1/2 translate-x-1/2 text-white font-raleway w-[800px]">
					<h1 class="font-bold md:text-[40px]">
						Selamat Datang di Website HMTI
					</h1>
					<h3 class="text-2xs md:text-xl">Himpunan Mahasiswa Teknik Informatika <br>Universitas Nusa Putra</h3>
					<a href="/about" class="absolute right-1/2 translate-x-1/2 flex items-center text-center gap-2 md:py-2 md:px-6 px-3 py-1 bg-secondary rounded-full md:text-[15px] text-xs font-raleway font-medium text-gray-600 mt-10 hover:bg-blue-700 hover:text-white focus:bg-blue-700 focus:text-white duration-500">
						Selengkapnya<i class="fa-solid fa-chevron-right"></i>
					</a>
				</div>
			</div>
			<!-- Item 2 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img src="/assets/img-slide-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
			</div>
			<!-- Item 3 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img src="/assets/img-slide-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
			</div>
			<!-- Item 4 -->
			<div class="hidden duration-700 ease-in-out" data-carousel-item>
				<img src="/assets/img-slide-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
			</div>
		</div>

		<!-- CAROUSEL CONTROL -->
		<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
			<span class="inline-flex items-center justify-center">
				<svg aria-hidden="true" class="w-5 h-5 text-white md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
					</path>
				</svg>
				<span class="sr-only">Previous</span>
			</span>
		</button>
		<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-next>
			<span class="inline-flex items-center justify-center">
				<svg aria-hidden="true" class="w-5 h-5 text-white md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
				</svg>
				<span class="sr-only">Next</span>
			</span>
		</button>
	</div>
</section>

<!------------------------------- DIVISI KEPENGURUSAN -------------------------->
<section>
	<div class=" py-10 w-full h-full">
		<div class="container mx-auto">
			<div class="flex flex-col md:flex-row md:justify-between items-center">
				<h1 class="w-96 font-bold font-raleway text-xl text-center md:text-start lg:text-[36px] text-three">
					Divisi Kepengurusan
				</h1>
				<div class="">
					<a href="/divisi"><button class="flex items-center gap-2 py-2 px-6 bg-secondary rounded-full text-[15px] font-raleway font-medium max-sm:hidden text-gray-600 hover:bg-blue-700 hover:text-white duration-500">
							Selengkapnya<i class="fa-solid fa-chevron-right"></i>
						</button></a>
				</div>
			</div>

			<div class="py-10">
				<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 lg:gap-8 gap-10 auto-cols-auto items-center justify-center">

					<!-- CARD 1 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img src="/assets/bph.svg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							Badan Pengurus Harian
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							BPH bertugas untuk bekerja sama mengarahkan kebijakan dan kegiatan himpunan guna menciptakan lingkungan yang inspiratif bagi mahasiswa.<br />
							<br>
							- Ketua <br />
							- Wakil Ketua<br />
							- Sekretaris<br />
							- Bendahara
						</p>
					</div>

					<!-- CARD 2 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img src="/assets/danus.svg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							Dana Usaha
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							Danus merupakan divisi yang terjun secara langsung dalam pencarian dana dan memasarkan produk yang telah dibuat untuk ditawarkan kepada konsumen.<br />
							<br>
							- Inovasi dan Pengembangan<br />
							- Administrasi dan Pengelolaan<br />
							- Usaha dan Pemasaran <br />
						</p>
					</div>

					<!-- CARD 3 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img class="" src="/assets/kader.svg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							Kaderisasi
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							Meningkatkan produktifitas kegiatan dalam menciptakan kader sebagai upaya menciptakan sifat percaya diri serta mampu memimpin secara finansial dalam organisasi. <br />
							<br>
							- Edukasi Fundamental<br />
							- Edukasi Lanjutan<br />
							- Manajemen dan Pemantauan<br />
						</p>

					</div>
					<!-- CARD 4 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img class="" src="https://1.bp.blogspot.com/-EWunZfhvWZU/YF7kBH6VM1I/AAAAAAAABp8/QfiulQbiCzwDmCvM1xW6DxPuAPaylRPOgCLcBGAsYHQ/s1800/download-logo-partai-pdi-perjuangan-vector-jpg-logoawal1.jpg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							PSDM
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							Bertanggung jawab atas pelaksanaan kegiatan pengembangan sumber daya manusia melalui kegiatan seminar, dan forum diskusi. <br />
							<br>
							- Planning<br />
							- Implementation<br />
							- Training and Development<br />
							- Content<br />
						</p>

					</div>
					<!-- CARD 5 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img class="" src="/assets/kader.svg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							Minat Dan Bakat
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							Minat dan bakat merupakan divisi yang berfokus untuk mengembangkan potensi bakat dari anggota himpunan mahasiswa Teknik informatika dalam bidang yang sesuai dengan minat yang di miliki.

							<br />
							<br>
							- Olahraga dan IT<br />
							- Penyaluran Lomba<br />
							- Penyaluran Kegiatan<br />
						</p>

					</div>
					<!-- CARD 6 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img class="" src="/assets/kader.svg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							Kominfo
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							Divisi Kominfo merupakan divisi yang bertugas menyajikan konten-konten menarik,kreatif dan sebagai media penyalur informasi, yang membidangi segala macam informasi di bidang desain ,editing foto & video untuk keperluan HMTI<br />
							<br>
							- Publikasi dan Informasi<br />
							- Dokumentasi dan Arsip<br />
							- Perencanaan dan Desain<br />
							- Konten Media Sosial<br />
						</p>

					</div>

				</div>
			</div>
			<div class="py-10">
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 lg:gap-8 gap-10 auto-cols-auto ">
					<!-- CARD 7 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img class="" src="/assets/kader.svg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							Hukam
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							Divisi hukum dan keamanan merupakan divisi yang bertugas untuk menangani masalah masalah hukum dan keamanan di Himpunan Mahasiswa Teknik Informatika, Adapun Sub Divisinya yaitu Riset dan Pencatatan, Pengawasan dan Evaluasi, Regulasi dan ketertiban.
							<br />
							<br>
							- Riset dan Pecatatan<br />
							- Pengawasan dan evaluasi<br />
							-
							Regulasi dan Ketertiban<br />
						</p>

					</div>
					<!-- CARD 8 -->
					<div class="shadow-md w-full bg-white h-auto rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
						<div class=""><img class="" src="/assets/kader.svg" alt="" /></div>
						<h2 class="font-bold text-[20px] font-raleway py-6">
							Humas
						</h2>
						<p class="font-medium font-raleway text-sm text-gray-500 opacity-70">
							Mengkomunikasikan segala informasi organisasi baik itu internal maupun eksternal
							dan Memberikan dan menerima informasi baik ke internal maupun external
							<br />
							<br>
							- Internal<br />
							- Ekternal<br />
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ---------------TENTANG KAMI---------------- -->
<section>
	<div class="w-full h-full py-14">
		<div class="container mx-auto">
			<div class="flex flex-col md:flex-row justify-center md:gap-[100px] items-center">
				<div class="order-last md:order-first flex justify-center items-center rounded-full shadow-2xl">
					<img class="w-[200px] md:w-[300px] bg-white p-2 rounded-full" src="/assets/Logo-HMTI.png" alt="" />
				</div>
				<div class="md:w-[650px] text-center md:text-start font-raleway">
					<div class="flex flex-col items-center justify-center md:flex-row">
						<div class="font-raleway md:w-[510px]">
							<h1 class="font-bold text-2xl text-[#1E2748]">Tentang Kami</h1>
							<p class="text-[14px] py-6 text-[#1E2748] opacity-70">
								<span class="font-semibold">Himpunan Mahasiswa Teknik Informatika</span> merupakan suatu organisasi serta wadah bagi Mahasiswa Teknik Informatika Universitas Nusa Putra.
								<br>
								<br>
								Organisasi ini bertujuan untuk meningkatkan kualitas Mahasiswa Teknik Informatika agar terciptanya pengurus untuk menampung aspirasi anggota dan mengimplementasikan program-program yang mengakomodasi kebutuhan mahasiswa.
							</p>
							<a href="/filosofi" target="_blank" rel="noopener noreferrer">
								<button class="flex items-center gap-2 Kontak py-2 px-6 bg-secondary rounded-full text-[15px] font-raleway font-medium max-sm:hidden text-gray-600 hover:bg-blue-700 hover:text-white duration-500">
									Selengkapnya<i class="fa-solid fa-chevron-right"></i>
								</button></a>
						</div>
					</div>
				</div>
			</div>
</section>


<!-- ------------COUNT------------ -->
<div class="w-full h-full py-14">
	<div class="container mx-auto">
		<div class="bg-gradient-to-b from-primary to-five mt-6 md:px-36 py-[60px] rounded-3xl">
			<div class="flex justify-center md:justify-between gap-10  text-white text-center">
				<div>
					<h4 class="md:text-3xl font-raleway font-bold uppercase">Anggota</h4>
					<h6 class="countext text-6xl  md:text-[150px] font-black value" akhi="71">0</h6>
				</div>
				<div>
					<h4 class="md:text-3xl font-raleway font-bold uppercase">Divisi</h4>
					<h6 class="text-6xl md:text-[150px] font-black value" akhi="7">0</h6>
				</div>
				<div>
					<h4 class="md:text-3xl font-raleway font-bold uppercase">Proker</h4>
					<h6 class="countext text-6xl  md:text-[150px] font-black value" akhi="6">0</h6>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- -------------BADAN PENGURUS HARIAN------------- -->
<div class="w-full h-full py-14">
	<div class="container mx-auto">
		<div class="flex flex-col md:gap-6 items-center justify-center md:flex-row">
			<!-- CARD BPH 1 -->
			<div class="items-center hover:-translate-y-5 duration-500 order-1 group">
				<div class="border rounded-[20px] md:w-[380px] md:h-[380px] md:order-1 group-hover:shadow-xl duration-300">
					<img class="object-contain rounded-[20px]" src="/assets/wahim.webp" alt="">
				</div>
				<div class="relative -top-8 bg-four w-[300px] rounded-[20px] text-center text-white text-[#E8E8E8] py-3 font-raleway mx-auto group-hover:bg-gradient-to-r from-primary to-five group-hover:shadow-xl duration-300">
					<h2 class="font-bold">AHMAD IBRAHIM M</h2>
					<h3 class="text-sm">Wakil Ketua Himpunan</h3>
				</div>
			</div>
			<!-- CARD BPH 2 -->
			<div class="order-first md:order-2 items-center hover:-translate-y-5 duration-500 order-2 mt-0 lg:mt-[-40px] group">
				<div class="border rounded-[20px] md:w-[380px] group-hover:shadow-xl duration-300">
					<img class="object-contain rounded-[20px]" src="/assets/kahim.webp" alt="">
				</div>
				<div class="relative -top-8 bg-four w-[300px] rounded-[20px] text-center text-white text-[#E8E8E8] py-3 font-raleway mx-auto group-hover:bg-gradient-to-r from-primary to-five group-hover:shadow-xl duration-300">
					<h2 class="font-bold">M FADIL AMIN</h2>
					<h3 class="text-sm">Ketua Himpunan</h3>
				</div>
			</div>
			<!-- CARD BPH 3 -->
			<div class="items-center hover:-translate-y-5 duration-500 order-2 group">
				<div class="border rounded-[20px] md:w-[380px] md:h-[380px] group-hover:shadow-xl duration-300">
					<img class="object-contain rounded-[20px]" src="/assets/sekretaris1.webp" alt="">
				</div>
				<div class="relative -top-8 bg-four w-[300px] rounded-[20px] text-center text-white text-[#E8E8E8] py-3 font-raleway mx-auto group-hover:bg-gradient-to-r from-primary to-five group-hover:shadow-xl duration-300">
					<h2 class="font-bold">TIRAWATI S</h2>
					<h3 class="text-sm">Sekretaris Himpunan</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	const counters = document.querySelectorAll('.value');
	const speed = 200;

	counters.forEach(counter => {
		const animate = () => {
			const value = +counter.getAttribute('akhi');
			const data = +counter.innerText;

			const time = value / speed;
			if (data < value) {
				counter.innerText = Math.ceil(data + time);
				setTimeout(animate, 30);
			} else {
				counter.innerText = value;
			}

		}

		animate();
	});
</script>
@endsection