@extends('layouts.user-layout')

@section('title', 'Home')

@section('content')

{{-- Home Section --}}
<section
    id="home"
    class="bg-linear-to-b from-[#f9f0f0] via-[#fffbf7] to-[#f4e8d8] px-6 py-10 md:px-10 lg:px-14 lg:py-10 scroll-mt-24"
>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-4 place-items-center max-w-7xl mx-auto">
        {{-- Text --}}
        <div class="order-2 lg:order-1 text-center lg:text-left">
            <div class="space-y-3 md:space-y-4 mb-8 md:mb-12 lg:mb-16">
                <h1 class="font-playfair-display text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-medium leading-tight">
                    Belajar Fashion Dari NOL Hingga Siap Kerja
                </h1>
                <p class="text-sm md:text-base text-muted">
                    Kursus fashion terbaik dengan kurikulum standar industri, siap menjadikanmu desainer profesional.
                </p>
            </div>
            
            <div class="flex gap-3 md:gap-4 mb-8 md:mb-10 justify-center lg:justify-start">
                <a
                    href=""
                    class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] text-white px-6 md:px-8 py-2.5 md:py-3 rounded-full text-sm md:text-base font-medium hover:shadow-lg transition-shadow"
                >
                    Start Your Journey
                </a>
                <a
                    href=""
                    class="bg-white ring-2 ring-secondary px-6 md:px-8 py-2.5 md:py-3 text-secondary rounded-full text-sm md:text-base font-medium hover:bg-secondary hover:text-white transition-colors"
                >
                    View Courses
                </a>
            </div>
            
            <div class="flex gap-6 md:gap-8 justify-center lg:justify-start">
                <div class="flex flex-col">
                    <span class="text-3xl md:text-4xl font-bold font-playfair-display">100+</span>
                    <span class="text-xs md:text-sm text-muted">Graduates</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-3xl md:text-4xl font-bold font-playfair-display">98%</span>
                    <span class="text-xs md:text-sm text-muted">Success Rate</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-3xl md:text-4xl font-bold font-playfair-display">10+</span>
                    <span class="text-xs md:text-sm text-muted">Expert Mentors</span>
                </div>
            </div>
        </div>
        
        {{-- Image --}}
        <div class="order-1 lg:order-2 w-full flex justify-center">
            <img
                src="/hero.png"
                alt="hero image"
                class="w-full max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl h-auto object-contain"
            >
        </div>
    </div>
</section>

{{-- About Section --}}
<section
    id="about"
    class="bg-white py-12 md:py-16 lg:py-20 px-6 md:px-8 lg:px-12 scroll-mt-10 sm:scroll-mt-18"
>
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-center">
            <h1
                class="text-center text-xs md:text-sm rounded-full text-secondary ring-2 ring-secondary px-6 md:px-8 py-2 shadow-[0_4px_24px_rgba(212,165,116,0.12)]"
            >
                About Us
            </h1>
        </div>

        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mt-6 md:mt-8 space-y-3 md:space-y-4">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-playfair-display font-bold">
                Tentang Studio Kami
            </h2>
            <p class="text-base md:text-lg lg:text-xl text-muted">
                Studio fashion terdepan dengan pengalaman lebih dari 5 tahun dalam menghasilkan profesional fashion berkualitas tinggi
            </p>
        </div>

        {{-- Content Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-8 lg:gap-12 mt-10 md:mt-12 lg:mt-16">
            {{-- Image Grid --}}
            <div class="order-2 lg:order-1">
                <div class="grid grid-cols-2 gap-3 md:gap-4 max-w-lg mx-auto lg:mx-0">
                    <div class="row-span-2 flex items-center justify-end">
                        <img 
                            src="/assets/about1.png" 
                            alt="about" 
                            class="w-full h-auto rounded-lg shadow-md object-cover hover:shadow-xl transition-shadow"
                        >
                    </div>
                    <div class="flex items-end">
                        <img 
                            src="/assets/about2.png" 
                            alt="about" 
                            class="w-full h-auto rounded-lg shadow-md object-cover hover:shadow-xl transition-shadow"
                        >
                    </div>
                    <div class="flex items-start">
                        <img 
                            src="/assets/about3.png" 
                            alt="about" 
                            class="w-full h-auto rounded-lg shadow-md object-cover hover:shadow-xl transition-shadow"
                        >
                    </div>
                </div>
            </div>

            {{-- Text Content --}}
            <div class="order-1 lg:order-2 text-center lg:text-left">
                <div class="space-y-3 md:space-y-4 mb-6 md:mb-8">
                    <h2 class="font-semibold text-2xl md:text-3xl lg:text-3xl font-playfair-display">
                        Mengapa Memilih Kami?
                    </h2>
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        Kami berkomitmen untuk memberikan pendidikan fashion terbaik dengan fasilitas modern, kurikulum terupdate, dan instruktur berpengalaman industri yang siap membimbing Anda menuju kesuksesan karir di dunia fashion.
                    </p>
                </div>

                {{-- Stats --}}
                <div class="flex flex-wrap justify-center lg:justify-start gap-6 md:gap-8 mb-8 md:mb-10 lg:mb-14">
                    <div class="flex flex-col min-w-20">
                        <span class="text-3xl md:text-4xl font-bold font-playfair-display">100+</span>
                        <span class="text-xs md:text-sm text-muted">Graduates</span>
                    </div>
                    <div class="flex flex-col min-w-20">
                        <span class="text-3xl md:text-4xl font-bold font-playfair-display">98%</span>
                        <span class="text-xs md:text-sm text-muted">Success Rate</span>
                    </div>
                    <div class="flex flex-col min-w-20">
                        <span class="text-3xl md:text-4xl font-bold font-playfair-display">10+</span>
                        <span class="text-xs md:text-sm text-muted">Expert Mentors</span>
                    </div>
                </div>

                {{-- CTA Button --}}
                <div class="flex justify-center lg:justify-start">
                    <a
                        href=""
                        class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] text-white px-6 md:px-8 py-2.5 md:py-3 rounded-full text-sm md:text-base font-medium hover:shadow-lg transition-shadow inline-block"
                    >
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Programs Section --}}
<section
    id="programs"
    class="bg-linear-[90deg,#fffbf7_0%,#f9f0f0_100%] pb-8 pt-14 px-4 sm:px-8"
>
    <div class="flex justify-center">
        <h1
            class="text-center text-sm rounded-full text-secondary ring ring-secondary px-8 py-2 shadow-[0_4px_24px_rgba(212,165,116,0.12)]"
        >
            Programs
        </h1>
    </div>

    <div class="text-center space-y-4 mt-6">
        <h2 class="font-bold text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-playfair-display">Our Programs : The #1 Course Fashion</h2>
        <div class="max-w-2xl mx-auto">
            <p class="text-lg">Program unggulan yang kami sediakan untuk membantu Anda menguasai dunia fashion secara profesional.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
        <div class="bg-white rounded-2xl p-8 space-y-4 shadow-[0_4px_4px_rgba(212,165,166,0.12)] hover:shadow-lg transition-shadow">
            <div class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] size-16 flex justify-center items-center rounded-2xl">
                <svg
                    width="30"
                    height="21"
                    viewBox="0 0 30 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M15.0007 0C14.621 0 14.246 0.0656249 13.8898 0.192187L0.741347 4.94062C0.296034 5.10469 0.000721513 5.52656 0.000721513 6C0.000721513 6.47344 0.296034 6.89531 0.741347 7.05938L3.45541 8.03906C2.68666 9.24844 2.25072 10.6781 2.25072 12.1828V13.5C2.25072 14.8313 1.74447 16.2047 1.20541 17.2875C0.900722 17.8969 0.553847 18.4969 0.150722 19.05C0.000721514 19.2516 -0.041466 19.5141 0.042909 19.7531C0.127284 19.9922 0.324159 20.1703 0.567909 20.2313L3.56791 20.9813C3.76478 21.0328 3.97572 20.9953 4.14916 20.8875C4.3226 20.7797 4.44447 20.6016 4.48197 20.4C4.8851 18.3938 4.68353 16.5938 4.38353 15.3047C4.23353 14.6391 4.03197 13.9594 3.75072 13.3359V12.1828C3.75072 10.7672 4.22885 9.43125 5.05853 8.3625C5.66322 7.63594 6.44603 7.05 7.36478 6.68906L14.7242 3.79688C15.1085 3.64687 15.5445 3.83437 15.6945 4.21875C15.8445 4.60313 15.657 5.03906 15.2726 5.18906L7.91322 8.08125C7.33197 8.31094 6.82103 8.6625 6.40385 9.09375L13.8851 11.7938C14.2413 11.9203 14.6163 11.9859 14.996 11.9859C15.3757 11.9859 15.7507 11.9203 16.107 11.7938L29.2601 7.05938C29.7054 6.9 30.0007 6.47344 30.0007 6C30.0007 5.52656 29.7054 5.10469 29.2601 4.94062L16.1117 0.192187C15.7554 0.0656249 15.3804 0 15.0007 0ZM6.00072 17.625C6.00072 19.2797 10.032 21 15.0007 21C19.9695 21 24.0007 19.2797 24.0007 17.625L23.2835 10.8094L16.6179 13.2188C16.0976 13.4062 15.5492 13.5 15.0007 13.5C14.4523 13.5 13.8992 13.4062 13.3835 13.2188L6.71791 10.8094L6.00072 17.625Z"
                        fill="white"
                    />
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-semibold font-playfair-display text-2xl">Basic Production</h2>
                <p class="">Program dasar untuk memahami alur kerja pembuatan pakaian secara fisik.</p>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-8 space-y-4 shadow-[0_4px_4px_rgba(212,165,166,0.12)] hover:shadow-lg transition-shadow">
            <div class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] size-16 flex justify-center items-center rounded-2xl">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M24 12C24 12.0422 24 12.0844 24 12.1266C23.9813 13.8375 22.425 15 20.7141 15H16.125C14.8828 15 13.875 16.0078 13.875 17.25C13.875 17.4094 13.8938 17.5641 13.9219 17.7141C14.0203 18.1922 14.2266 18.6516 14.4281 19.1156C14.7141 19.7625 14.9953 20.4047 14.9953 21.0844C14.9953 22.575 13.9828 23.9297 12.4922 23.9906C12.3281 23.9953 12.1641 24 11.9953 24C5.37187 24 0 18.6281 0 12C0 5.37188 5.37188 0 12 0C18.6281 0 24 5.37188 24 12ZM6 13.5C6 13.1022 5.84196 12.7206 5.56066 12.4393C5.27936 12.158 4.89782 12 4.5 12C4.10218 12 3.72064 12.158 3.43934 12.4393C3.15804 12.7206 3 13.1022 3 13.5C3 13.8978 3.15804 14.2794 3.43934 14.5607C3.72064 14.842 4.10218 15 4.5 15C4.89782 15 5.27936 14.842 5.56066 14.5607C5.84196 14.2794 6 13.8978 6 13.5ZM6 9C6.39782 9 6.77936 8.84196 7.06066 8.56066C7.34196 8.27936 7.5 7.89782 7.5 7.5C7.5 7.10218 7.34196 6.72064 7.06066 6.43934C6.77936 6.15804 6.39782 6 6 6C5.60218 6 5.22064 6.15804 4.93934 6.43934C4.65804 6.72064 4.5 7.10218 4.5 7.5C4.5 7.89782 4.65804 8.27936 4.93934 8.56066C5.22064 8.84196 5.60218 9 6 9ZM13.5 4.5C13.5 4.10218 13.342 3.72064 13.0607 3.43934C12.7794 3.15804 12.3978 3 12 3C11.6022 3 11.2206 3.15804 10.9393 3.43934C10.658 3.72064 10.5 4.10218 10.5 4.5C10.5 4.89782 10.658 5.27936 10.9393 5.56066C11.2206 5.84196 11.6022 6 12 6C12.3978 6 12.7794 5.84196 13.0607 5.56066C13.342 5.27936 13.5 4.89782 13.5 4.5ZM18 9C18.3978 9 18.7794 8.84196 19.0607 8.56066C19.342 8.27936 19.5 7.89782 19.5 7.5C19.5 7.10218 19.342 6.72064 19.0607 6.43934C18.7794 6.15804 18.3978 6 18 6C17.6022 6 17.2206 6.15804 16.9393 6.43934C16.658 6.72064 16.5 7.10218 16.5 7.5C16.5 7.89782 16.658 8.27936 16.9393 8.56066C17.2206 8.84196 17.6022 9 18 9Z" fill="white"/>
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-semibold font-playfair-display text-2xl">Basic Design Ilustration</h2>
                <p class="">Program dasar untuk menggambar dan mewarnai desain fesyen, baik manual maupun digital.</p>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-8 space-y-4 shadow-[0_4px_4px_rgba(212,165,166,0.12)] hover:shadow-lg transition-shadow">
            <div class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] size-16 flex justify-center items-center rounded-2xl">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M24 24H0V0H24V24Z"
                        stroke="#E5E7EB"
                    />
                    <path
                        d="M8.625 2.25H15.375C15.5813 2.25 15.75 2.41875 15.75 2.625V4.5H8.25V2.625C8.25 2.41875 8.41875 2.25 8.625 2.25ZM6 2.625V4.5H3C1.34531 4.5 0 5.84531 0 7.5V12H9H15H24V7.5C24 5.84531 22.6547 4.5 21 4.5H18V2.625C18 1.17656 16.8234 0 15.375 0H8.625C7.17656 0 6 1.17656 6 2.625ZM24 13.5H15V15C15 15.8297 14.3297 16.5 13.5 16.5H10.5C9.67031 16.5 9 15.8297 9 15V13.5H0V19.5C0 21.1547 1.34531 22.5 3 22.5H21C22.6547 22.5 24 21.1547 24 19.5V13.5Z"
                        fill="white"
                    />
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-semibold font-playfair-display text-2xl">MENSWEAR</h2>
                <p>Program yang fokus pada pembuatan pakaian pria seperti jas, kemeja, dan celana.</p>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-8 space-y-4 shadow-[0_4px_4px_rgba(212,165,166,0.12)] hover:shadow-lg transition-shadow">
            <div class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] size-16 flex justify-center items-center rounded-2xl">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M9.89254 0.344103C9.61129 0.0487902 9.18942 -0.0637098 8.79567 0.0394152C8.40192 0.14254 8.09723 0.456603 7.9941 0.850353L7.25348 3.78004L4.34723 2.95973C3.95348 2.84723 3.5316 2.95973 3.24567 3.24567C2.95973 3.5316 2.84723 3.95348 2.95973 4.34723L3.78004 7.25348L0.850353 7.99879C0.456603 8.09723 0.147228 8.4066 0.0394152 8.80035C-0.0683973 9.1941 0.0487902 9.61129 0.344103 9.89254L2.50973 12.0019L0.344103 14.1113C0.0487902 14.3925 -0.0637098 14.8144 0.0394152 15.2082C0.14254 15.6019 0.456603 15.9066 0.850353 16.0097L3.78004 16.7504L2.95973 19.6566C2.84723 20.0504 2.95973 20.4722 3.24567 20.7582C3.5316 21.0441 3.95348 21.1566 4.34723 21.0441L7.25348 20.2238L7.9941 23.1535C8.09254 23.5472 8.40192 23.8566 8.79567 23.9644C9.18942 24.0722 9.6066 23.955 9.89254 23.6644L12.0019 21.4988L14.1113 23.6644C14.3972 23.955 14.8144 24.0722 15.2082 23.9644C15.6019 23.8566 15.9066 23.5472 16.0097 23.1535L16.7504 20.2238L19.6566 21.0441C20.0504 21.1566 20.4722 21.0441 20.7582 20.7582C21.0441 20.4722 21.1566 20.0504 21.0441 19.6566L20.2238 16.7504L23.1535 16.0097C23.5472 15.9113 23.8566 15.6019 23.9644 15.2082C24.0722 14.8144 23.955 14.3972 23.6644 14.1113L21.4988 12.0019L23.6644 9.89254C23.955 9.6066 24.0722 9.18942 23.9644 8.79567C23.8566 8.40192 23.5472 8.09723 23.1535 7.9941L20.2238 7.25348L21.0441 4.34723C21.1566 3.95348 21.0441 3.5316 20.7582 3.24567C20.4722 2.95973 20.0504 2.84723 19.6566 2.95973L16.7504 3.78004L16.005 0.850353C15.9066 0.456603 15.5972 0.147228 15.2035 0.0394152C14.8097 -0.0683973 14.3925 0.0487902 14.1113 0.344103L12.0019 2.50973L9.89254 0.344103Z"
                        fill="white"
                    />
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-semibold font-playfair-display text-2xl">Bridal Program</h2>
                <p>Program yang fokus pada pembuatan busana pengantin yang detail dan kompleks.</p>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-8 space-y-4 shadow-[0_4px_4px_rgba(212,165,166,0.12)] hover:shadow-lg transition-shadow">
            <div class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] size-16 flex justify-center items-center rounded-2xl">
                <svg
                    width="30"
                    height="24"
                    viewBox="0 0 30 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"
                        fill="white"
                    />
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-semibold font-playfair-display text-2xl">MONTHLY Program</h2>
                <p>Program langganan tahunan dengan jadwal fleksibel yang mencakup tiga tingkatan (Basic, Intermediate, Expert).</p>
            </div>
        </div>
        <div class="bg-white rounded-2xl p-8 space-y-4 shadow-[0_4px_4px_rgba(212,165,166,0.12)] hover:shadow-lg transition-shadow">
            <div class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] size-16 flex justify-center items-center rounded-2xl">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M12 0C15.1826 0 18.2348 1.26428 20.4853 3.51472C22.7357 5.76516 24 8.8174 24 12C24 15.1826 22.7357 18.2348 20.4853 20.4853C18.2348 22.7357 15.1826 24 12 24C8.8174 24 5.76516 22.7357 3.51472 20.4853C1.26428 18.2348 0 15.1826 0 12C0 8.8174 1.26428 5.76516 3.51472 3.51472C5.76516 1.26428 8.8174 0 12 0ZM10.875 5.625V12C10.875 12.375 11.0625 12.7266 11.3766 12.9375L15.8766 15.9375C16.3922 16.2844 17.0906 16.1437 17.4375 15.6234C17.7844 15.1031 17.6437 14.4094 17.1234 14.0625L13.125 11.4V5.625C13.125 5.00156 12.6234 4.5 12 4.5C11.3766 4.5 10.875 5.00156 10.875 5.625Z"
                        fill="white"
                    />
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-semibold font-playfair-display text-2xl">Diploma 1 Year</h2>
                <p>Program belajar membantu mempersiapkan kemampuan atau skill selama 1 tahun.</p>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-4">
        <a
            href=""
            class="font-semibold font-playfair-display text-xl inline-flex items-baseline gap-2"
        >
            <span>Selengkapnya</span>
            <svg
                class="size-4"
                viewBox="0 0 10 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M1.25 1.25L8.75 8.75L1.25 16.25" stroke="#111827" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</section>

{{-- Gallery Section --}}
<section
    id="gallery"
    class="bg-[#fffbf7] pb-8 pt-14 px-8 scroll-mt-10 sm:scroll-mt-18"
>
    <div class="flex justify-center">
        <h1
            class="text-center text-sm rounded-full text-secondary ring ring-secondary px-8 py-2 shadow-[0_4px_24px_rgba(212,165,116,0.12)]"
        >
            Gallery
        </h1>
    </div>

    <div class="text-center mt-6 space-y-2">
        <h2 class="font-bold text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-playfair-display">Suasana Kegiatan</h2>
        <div class="text-muted max-w-2xl mx-auto">
            <p class="text-lg">
                Suasana kegiatan belajar yang tenang dan menyenangkan, tidak menegangkan namun tetap profesional.
            </p>
        </div>
    </div>

    <div class="relative mt-20 overflow-hidden">
        <div class="flex animate-scroll hover:pause-animation">
            <!-- Set pertama -->
            <div class="shrink-0 ml-4 min-h-64 min-w-96 rounded-4xl bg-primary/60 overflow-hidden flex justify-center items-center">
                <img
                    src="/assets/gallery1.png"
                    alt="gallery 1"
                    class="max-h-64"
                >
            </div>
            <div class="shrink-0 ml-4 min-h-64 min-w-96 rounded-4xl bg-primary/60 overflow-hidden flex justify-center items-center">
                <img
                    src="/assets/gallery2.png"
                    alt="gallery 2"
                    class="max-h-64"
                >
            </div>
            <div class="shrink-0 ml-4 min-h-64 min-w-96 rounded-4xl bg-primary/60 overflow-hidden flex justify-center items-center">
                <img
                    src="/assets/gallery3.png"
                    alt="gallery 3"
                    class="max-h-64"
                >
            </div>
            
            <!-- Set kedua (duplikat untuk infinite loop) -->
            <div class="shrink-0 ml-4 min-h-64 min-w-96 rounded-4xl bg-primary/60 overflow-hidden flex justify-center items-center">
                <img
                    src="/assets/gallery1.png"
                    alt="gallery 1"
                    class="max-h-64"
                >
            </div>
            <div class="shrink-0 ml-4 min-h-64 min-w-96 rounded-4xl bg-primary/60 overflow-hidden flex justify-center items-center">
                <img
                    src="/assets/gallery2.png"
                    alt="gallery 2"
                    class="max-h-64"
                >
            </div>
            <div class="shrink-0 ml-4 min-h-64 min-w-96 rounded-4xl bg-primary/60 overflow-hidden flex justify-center items-center">
                <img
                    src="/assets/gallery3.png"
                    alt="gallery 3"
                    class="max-h-64"
                >
            </div>
        </div>
    </div>
</section>

{{-- Testimony Section --}}
<section
    id="testimony"
    class="bg-linear-[90deg,#f9f0f0_0%,#fffbf7_100%] pb-8 pt-14 px-4 sm:px-8 scroll-mt-10 sm:scroll-mt-18"
>
    <div class="flex justify-center">
        <h1
            class="text-center text-sm rounded-full text-secondary ring ring-secondary px-8 py-2 shadow-[0_4px_24px_rgba(212,165,116,0.12)]"
        >
            Testimoni
        </h1>
    </div>

    <div class="text-center mt-6 space-y-2">
        <h2 class="font-bold text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-playfair-display">What Our Students Say</h2>
        <div class="text-muted max-w-2xl mx-auto">
            <p class="text-lg">
                Simaklah kisah para lulusan yang berhasil mengubah minat mereka menjadi karier yang sukses di bidang fashion.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-10 sm:px-8">
        <div class="bg-white rounded-3xl shadow-[0_4px_24px_rgba(212,165,166,0.12)] p-8 hover:shadow-lg transition-shadow">
            <div class="flex gap-1 text-primary">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="text-muted mt-6 text-sm sm:text-base">
                <p>Kurikulumnya sangat aplikatif. Setelah 3 bulan bergabung di program Basic Production, saya merasa jauh lebih percaya diri karena teknik yang diajarkan sangat mudah dipraktikkan langsung ke kain.</p>
            </div>

            <div class="flex gap-4 items-center mt-6">
                <div class="size-14 rounded-full bg-primary"></div>
                <div>
                    <p class="font-semibold">Sinta raneka</p>
                    <p class="text-muted text-sm">Fashion Designer</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-[0_4px_24px_rgba(212,165,166,0.12)] p-8 hover:shadow-lg transition-shadow">
            <div class="flex gap-1 text-primary">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="text-muted mt-6 text-sm sm:text-base">
                <p>Kurikulumnya sangat aplikatif. Setelah 3 bulan bergabung di program Basic Production, saya merasa jauh lebih percaya diri karena teknik yang diajarkan sangat mudah dipraktikkan langsung ke kain.</p>
            </div>

            <div class="flex gap-4 items-center mt-6">
                <div class="size-14 rounded-full bg-primary"></div>
                <div>
                    <p class="font-semibold">Sinta raneka</p>
                    <p class="text-muted text-sm">Fashion Designer</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-[0_4px_24px_rgba(212,165,166,0.12)] p-8 hover:shadow-lg transition-shadow">
            <div class="flex gap-1 text-primary">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_567)">
                        <path d="M9.90254 0.5625C9.73692 0.21875 9.38692 0 9.00255 0C8.61817 0 8.27129 0.21875 8.10254 0.5625L6.09317 4.69688L1.60567 5.35938C1.23067 5.41563 0.91817 5.67812 0.802545 6.0375C0.68692 6.39687 0.78067 6.79375 1.04942 7.05937L4.30567 10.2812L3.53692 14.8344C3.47442 15.2094 3.63067 15.5906 3.94005 15.8125C4.24942 16.0344 4.65879 16.0625 4.99629 15.8844L9.00567 13.7437L13.015 15.8844C13.3525 16.0625 13.7619 16.0375 14.0713 15.8125C14.3807 15.5875 14.5369 15.2094 14.4744 14.8344L13.7025 10.2812L16.9588 7.05937C17.2275 6.79375 17.3244 6.39687 17.2057 6.0375C17.0869 5.67812 16.7775 5.41563 16.4025 5.35938L11.9119 4.69688L9.90254 0.5625Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_567">
                            <path d="M0 0H18V16H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="text-muted mt-6 text-sm sm:text-base">
                <p>Kurikulumnya sangat aplikatif. Setelah 3 bulan bergabung di program Basic Production, saya merasa jauh lebih percaya diri karena teknik yang diajarkan sangat mudah dipraktikkan langsung ke kain.</p>
            </div>

            <div class="flex gap-4 items-center mt-6">
                <div class="size-14 rounded-full bg-primary"></div>
                <div>
                    <p class="font-semibold">Sinta raneka</p>
                    <p class="text-muted text-sm">Fashion Designer</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTAS Section --}}
<section
    id="ctas"
    class="relative z-10 bg-linear-[135deg,#e8b4b8_0%,#f4e8d8_35.36%,#f9f0f0_70.71%] pb-8 pt-14 px-4 sm:p-24"
>
    {{-- Cirlce 1 --}}
    <div class="absolute opacity-10 top-20 left-20 size-40 sm:size-96 bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] rounded-full"></div>
    {{-- Cirlce 2 --}}
    <div class="absolute opacity-10 bottom-5 right-10 size-40 sm:size-96 bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] rounded-full"></div>

    <div class="max-w-3xl mx-auto space-y-4 z-20">
        <h1 class="font-bold text-4xl sm:text-5xl lg:text-6xl text-center font-playfair-display">Mulai Perjalanan Karier Fashion Anda Hari Ini</h1>
        <p class="text-muted text-center text-xl">
            Bergabunglah bersama ratusan desainer sukses yang telah merintis karier mereka di The One Course Fashion. Terbatas untuk pendaftaran semester depan.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4 mt-10 mb-10">
            <a
                href=""
                class="bg-linear-[45deg,#e8b4b8_50%,#d4a574_85.36%,#f4d8cd_120.71%] shadow-[0_8px_32px_rgba(200,150,156,0.15)] text-white text-center px-8 py-4 rounded-full hover:shadow-lg transition-shadow"
            >
                Daftar Sekarang
            </a>
            <a
                href=""
                class="bg-white ring ring-secondary px-8 py-4 text-secondary text-center rounded-full hover:bg-secondary hover:text-white transition-colors"
            >
                Jadwalkan Kunjungan
            </a>
        </div>

        <div class="flex gap-2 sm:gap-4 justify-center text-xs sm:text-base">
            <div class="flex items-center gap-2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_656)">
                        <path d="M10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0C7.34784 0 4.8043 1.05357 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C4.8043 18.9464 7.34784 20 10 20ZM14.4141 8.16406L9.41406 13.1641C9.04688 13.5312 8.45312 13.5312 8.08984 13.1641L5.58984 10.6641C5.22266 10.2969 5.22266 9.70312 5.58984 9.33984C5.95703 8.97656 6.55078 8.97266 6.91406 9.33984L8.75 11.1758L13.0859 6.83594C13.4531 6.46875 14.0469 6.46875 14.4102 6.83594C14.7734 7.20312 14.7773 7.79687 14.4102 8.16016L14.4141 8.16406Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_656">
                    <path d="M0 0H20V20H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="text-muted font-medium">Tanpa Perlu Pengalaman</p>
            </div>
            <div class="flex items-center gap-2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_656)">
                        <path d="M10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0C7.34784 0 4.8043 1.05357 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C4.8043 18.9464 7.34784 20 10 20ZM14.4141 8.16406L9.41406 13.1641C9.04688 13.5312 8.45312 13.5312 8.08984 13.1641L5.58984 10.6641C5.22266 10.2969 5.22266 9.70312 5.58984 9.33984C5.95703 8.97656 6.55078 8.97266 6.91406 9.33984L8.75 11.1758L13.0859 6.83594C13.4531 6.46875 14.0469 6.46875 14.4102 6.83594C14.7734 7.20312 14.7773 7.79687 14.4102 8.16016L14.4141 8.16406Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_656">
                    <path d="M0 0H20V20H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="text-muted font-medium">Sistem Pembayaran Fleksibel</p>
            </div>
            <div class="flex items-center gap-2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2052_656)">
                        <path d="M10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 7.34784 18.9464 4.8043 17.0711 2.92893C15.1957 1.05357 12.6522 0 10 0C7.34784 0 4.8043 1.05357 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C4.8043 18.9464 7.34784 20 10 20ZM14.4141 8.16406L9.41406 13.1641C9.04688 13.5312 8.45312 13.5312 8.08984 13.1641L5.58984 10.6641C5.22266 10.2969 5.22266 9.70312 5.58984 9.33984C5.95703 8.97656 6.55078 8.97266 6.91406 9.33984L8.75 11.1758L13.0859 6.83594C13.4531 6.46875 14.0469 6.46875 14.4102 6.83594C14.7734 7.20312 14.7773 7.79687 14.4102 8.16016L14.4141 8.16406Z" fill="#C9969C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2052_656">
                    <path d="M0 0H20V20H0V0Z" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="text-muted font-medium">Akses Materi Mudah</p>
            </div>
        </div>
    </div>
</section>


@endsection