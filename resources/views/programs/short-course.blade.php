@extends('layouts.user-layout')

@section('title', 'Short Course')

@section('content')

<div class="p-8 sm:p-12 space-y-8">
    <div class="text-center space-y-4">
        <h1 class="font-bold font-playfair-display text-4xl">MEC Digital E-Course</h1>
        <p class="sm:text-lg">Belajar fashion design secara online dengan fleksibilitas waktu dan materi yang komprehensif</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="rounded-xl ring-2 ring-secondary p-4 space-y-4 hover:shadow-xl transition-shadow">
            <div class="bg-linear-[135deg,#F7E7CE_0%,rgba(183,110,121,0.2)_70.71%] text-secondary w-full min-h-48 flex justify-center items-center rounded-xl">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_14)">
                    <path d="M18 13.5L15.2227 10.7227C15.5672 9.83672 15.75 8.88047 15.75 7.875C15.75 3.52266 12.2273 0 7.875 0C3.52266 0 0 3.52266 0 7.875C0 12.2273 3.52266 15.75 7.875 15.75C8.88047 15.75 9.83672 15.5602 10.7227 15.2227L13.5 18L10.7227 20.7773C9.83672 20.4328 8.88047 20.25 7.875 20.25C3.52266 20.25 0 23.7727 0 28.125C0 32.4773 3.52266 36 7.875 36C12.2273 36 15.75 32.4773 15.75 28.125C15.75 27.1195 15.5602 26.1633 15.2227 25.2773L35.1 5.4C35.5992 4.90078 35.5992 4.09922 35.1 3.6C33.1102 1.61016 29.8898 1.61016 27.9 3.6L18 13.5ZM19.5891 24.0891L27.9 32.4C29.8898 34.3898 33.1102 34.3898 35.1 32.4C35.5992 31.9008 35.5992 31.0992 35.1 30.6L24.0891 19.5891L19.5891 24.0891ZM4.5 7.875C4.5 7.43179 4.5873 6.99292 4.75691 6.58344C4.92652 6.17397 5.17512 5.80191 5.48851 5.48851C5.80191 5.17512 6.17397 4.92652 6.58344 4.75691C6.99292 4.5873 7.43179 4.5 7.875 4.5C8.31821 4.5 8.75708 4.5873 9.16656 4.75691C9.57603 4.92652 9.94809 5.17512 10.2615 5.48851C10.5749 5.80191 10.8235 6.17397 10.9931 6.58344C11.1627 6.99292 11.25 7.43179 11.25 7.875C11.25 8.31821 11.1627 8.75708 10.9931 9.16656C10.8235 9.57603 10.5749 9.94809 10.2615 10.2615C9.94809 10.5749 9.57603 10.8235 9.16656 10.9931C8.75708 11.1627 8.31821 11.25 7.875 11.25C7.43179 11.25 6.99292 11.1627 6.58344 10.9931C6.17397 10.8235 5.80191 10.5749 5.48851 10.2615C5.17512 9.94809 4.92652 9.57603 4.75691 9.16656C4.5873 8.75708 4.5 8.31821 4.5 7.875ZM7.875 24.75C8.31821 24.75 8.75708 24.8373 9.16656 25.0069C9.57603 25.1765 9.94809 25.4251 10.2615 25.7385C10.5749 26.0519 10.8235 26.424 10.9931 26.8334C11.1627 27.2429 11.25 27.6818 11.25 28.125C11.25 28.5682 11.1627 29.0071 10.9931 29.4166C10.8235 29.826 10.5749 30.1981 10.2615 30.5115C9.94809 30.8249 9.57603 31.0735 9.16656 31.2431C8.75708 31.4127 8.31821 31.5 7.875 31.5C7.43179 31.5 6.99292 31.4127 6.58344 31.2431C6.17397 31.0735 5.80191 30.8249 5.48851 30.5115C5.17512 30.1981 4.92652 29.826 4.75691 29.4166C4.5873 29.0071 4.5 28.5682 4.5 28.125C4.5 27.6818 4.5873 27.2429 4.75691 26.8334C4.92652 26.424 5.17512 26.0519 5.48851 25.7385C5.80191 25.4251 6.17397 25.1765 6.58344 25.0069C6.99292 24.8373 7.43179 24.75 7.875 24.75Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_14">
                    <path d="M0 0H36V36H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-bold font-playfair-display text-xl">Digital Pattern Making</h2>
                <p class="text-muted">Pelajari teknik pembuatan pola digital menggunakan software profesional</p>

                <div class="flex items-center gap-2">
                    <p class="text-muted text-lg line-through">Rp 1.999.000</p>
                    <p class="font-bold text-secondary text-2xl">Rp 299.000</p>
                </div>

                <div class="rounded-full w-max bg-destructive-forground text-destructive px-4 py-1">
                    Diskon 85%
                </div>
            </div>

            <a
                href=""
                class="block text-center py-2 text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium hover:shadow-lg transition-shadow"
            >
                Daftar Sekarang
            </a>
        </div>
        <div class="rounded-xl ring-2 ring-secondary p-4 space-y-4 hover:shadow-xl transition-shadow">
            <div class="bg-linear-[135deg,#F7E7CE_0%,rgba(183,110,121,0.2)_70.71%] text-secondary w-full min-h-48 flex justify-center items-center rounded-xl">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_33)">
                    <path d="M36 18C36 18.0633 36 18.1266 36 18.1898C35.9719 20.7563 33.6375 22.5 31.0711 22.5H24.1875C22.3242 22.5 20.8125 24.0117 20.8125 25.875C20.8125 26.1141 20.8406 26.3461 20.8828 26.5711C21.0305 27.2883 21.3398 27.9773 21.6422 28.6734C22.0711 29.6437 22.493 30.607 22.493 31.6266C22.493 33.8625 20.9742 35.8945 18.7383 35.9859C18.4922 35.993 18.2461 36 17.993 36C8.05781 36 0 27.9422 0 18C0 8.05781 8.05781 0 18 0C27.9422 0 36 8.05781 36 18ZM9 20.25C9 19.6533 8.76295 19.081 8.34099 18.659C7.91903 18.2371 7.34674 18 6.75 18C6.15326 18 5.58097 18.2371 5.15901 18.659C4.73705 19.081 4.5 19.6533 4.5 20.25C4.5 20.8467 4.73705 21.419 5.15901 21.841C5.58097 22.2629 6.15326 22.5 6.75 22.5C7.34674 22.5 7.91903 22.2629 8.34099 21.841C8.76295 21.419 9 20.8467 9 20.25ZM9 13.5C9.59674 13.5 10.169 13.2629 10.591 12.841C11.0129 12.419 11.25 11.8467 11.25 11.25C11.25 10.6533 11.0129 10.081 10.591 9.65901C10.169 9.23705 9.59674 9 9 9C8.40326 9 7.83097 9.23705 7.40901 9.65901C6.98705 10.081 6.75 10.6533 6.75 11.25C6.75 11.8467 6.98705 12.419 7.40901 12.841C7.83097 13.2629 8.40326 13.5 9 13.5ZM20.25 6.75C20.25 6.15326 20.0129 5.58097 19.591 5.15901C19.169 4.73705 18.5967 4.5 18 4.5C17.4033 4.5 16.831 4.73705 16.409 5.15901C15.9871 5.58097 15.75 6.15326 15.75 6.75C15.75 7.34674 15.9871 7.91903 16.409 8.34099C16.831 8.76295 17.4033 9 18 9C18.5967 9 19.169 8.76295 19.591 8.34099C20.0129 7.91903 20.25 7.34674 20.25 6.75ZM27 13.5C27.5967 13.5 28.169 13.2629 28.591 12.841C29.0129 12.419 29.25 11.8467 29.25 11.25C29.25 10.6533 29.0129 10.081 28.591 9.65901C28.169 9.23705 27.5967 9 27 9C26.4033 9 25.831 9.23705 25.409 9.65901C24.9871 10.081 24.75 10.6533 24.75 11.25C24.75 11.8467 24.9871 12.419 25.409 12.841C25.831 13.2629 26.4033 13.5 27 13.5Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_33">
                    <path d="M0 0H36V36H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-bold font-playfair-display text-xl">Digital Fashion Illustration</h2>
                <p class="text-muted">Kuasai teknik ilustrasi fashion digital dengan berbagai style dan teknik</p>

                <div class="flex items-center gap-2">
                    <p class="font-bold text-secondary text-2xl">Rp 249.000</p>
                </div>
            </div>

            <a
                href=""
                class="block text-center py-2 text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium hover:shadow-lg transition-shadow"
            >
                Daftar Sekarang
            </a>
        </div>
        <div class="rounded-xl ring-2 ring-secondary p-4 space-y-4 hover:shadow-xl transition-shadow">
            <div class="bg-linear-[135deg,#F7E7CE_0%,rgba(183,110,121,0.2)_70.71%] text-secondary w-full min-h-48 flex justify-center items-center rounded-xl">
                <svg width="45" height="36" viewBox="0 0 45 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_47)">
                    <path d="M22.5011 2.25C21.9316 2.25 21.369 2.34844 20.8347 2.53828L1.11202 9.66094C0.444051 9.90703 0.00108227 10.5398 0.00108227 11.25C0.00108227 11.9602 0.444051 12.593 1.11202 12.8391L5.18311 14.3086C4.02999 16.1227 3.37608 18.2672 3.37608 20.5242V22.5C3.37608 24.4969 2.61671 26.557 1.80811 28.1812C1.35108 29.0953 0.83077 29.9953 0.226082 30.825C0.00108227 31.1273 -0.062199 31.5211 0.0643635 31.8797C0.190926 32.2383 0.486239 32.5055 0.851864 32.5969L5.35186 33.7219C5.64718 33.7992 5.96358 33.743 6.22374 33.5813C6.48389 33.4195 6.66671 33.1523 6.72296 32.85C7.32764 29.8406 7.0253 27.1406 6.5753 25.207C6.3503 24.2086 6.04796 23.1891 5.62608 22.2539V20.5242C5.62608 18.4008 6.34327 16.3969 7.5878 14.7937C8.49483 13.7039 9.66905 12.825 11.0472 12.2836L22.0862 7.94531C22.6628 7.72031 23.3167 8.00156 23.5417 8.57812C23.7667 9.15469 23.4855 9.80859 22.9089 10.0336L11.8698 14.3719C10.998 14.7164 10.2316 15.2437 9.60577 15.8906L20.8276 19.9406C21.362 20.1305 21.9245 20.2289 22.494 20.2289C23.0636 20.2289 23.6261 20.1305 24.1605 19.9406L43.8901 12.8391C44.5581 12.6 45.0011 11.9602 45.0011 11.25C45.0011 10.5398 44.5581 9.90703 43.8901 9.66094L24.1675 2.53828C23.6331 2.34844 23.0706 2.25 22.5011 2.25ZM9.00108 28.6875C9.00108 31.1695 15.048 33.75 22.5011 33.75C29.9542 33.75 36.0011 31.1695 36.0011 28.6875L34.9253 18.4641L24.9269 22.0781C24.1464 22.3594 23.3237 22.5 22.5011 22.5C21.6784 22.5 20.8487 22.3594 20.0753 22.0781L10.0769 18.4641L9.00108 28.6875Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_47">
                    <path d="M0 0H45V36H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-bold font-playfair-display text-xl">Fashion Design Basic</h2>
                <p class="text-muted">Dasar-dasar fashion design untuk pemula yang ingin memulai karir di fashion</p>

                <div class="flex items-center gap-2">
                    <p class="font-bold text-secondary text-2xl">Rp 149.000</p>
                </div>
            </div>

            <a
                href=""
                class="block text-center py-2 text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium hover:shadow-lg transition-shadow"
            >
                Daftar Sekarang
            </a>
        </div>
        <div class="rounded-xl ring-2 ring-secondary p-4 space-y-4 hover:shadow-xl transition-shadow">
            <div class="bg-linear-[135deg,#F7E7CE_0%,rgba(183,110,121,0.2)_70.71%] text-secondary w-full min-h-48 flex justify-center items-center rounded-xl">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_62)">
                    <path d="M4.5 4.5C4.5 3.25547 3.49453 2.25 2.25 2.25C1.00547 2.25 0 3.25547 0 4.5V28.125C0 31.2328 2.51719 33.75 5.625 33.75H33.75C34.9945 33.75 36 32.7445 36 31.5C36 30.2555 34.9945 29.25 33.75 29.25H5.625C5.00625 29.25 4.5 28.7437 4.5 28.125V4.5ZM33.0891 10.5891C33.968 9.71016 33.968 8.28281 33.0891 7.40391C32.2102 6.525 30.7828 6.525 29.9039 7.40391L22.5 14.8148L18.4641 10.7789C17.5852 9.9 16.1578 9.9 15.2789 10.7789L7.40391 18.6539C6.525 19.5328 6.525 20.9602 7.40391 21.8391C8.28281 22.718 9.71016 22.718 10.5891 21.8391L16.875 15.5602L20.9109 19.5961C21.7898 20.475 23.2172 20.475 24.0961 19.5961L33.0961 10.5961L33.0891 10.5891Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_62">
                    <path d="M0 0H36V36H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-bold font-playfair-display text-xl">Fashion Business</h2>
                <p class="text-muted">Pelajari strategi bisnis fashion dari konsep hingga eksekusi</p>

                <div class="flex items-center gap-2">
                    <p class="font-bold text-secondary text-2xl">Rp 199.000</p>
                </div>
            </div>

            <a
                href=""
                class="block text-center py-2 text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium hover:shadow-lg transition-shadow"
            >
                Daftar Sekarang
            </a>
        </div>
        <div class="rounded-xl ring-2 ring-secondary p-4 space-y-4 hover:shadow-xl transition-shadow">
            <div class="bg-linear-[135deg,#F7E7CE_0%,rgba(183,110,121,0.2)_70.71%] text-secondary w-full min-h-48 flex justify-center items-center rounded-xl">
                <svg width="23" height="36" viewBox="0 0 23 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_77)">
                    <path d="M11.2483 0C12.1434 0 13.0019 0.355579 13.6348 0.988515C14.2677 1.62145 14.6233 2.47989 14.6233 3.375C14.6233 4.27011 14.2677 5.12855 13.6348 5.76149C13.0019 6.39442 12.1434 6.75 11.2483 6.75C10.3532 6.75 9.49477 6.39442 8.86184 5.76149C8.2289 5.12855 7.87333 4.27011 7.87333 3.375C7.87333 2.47989 8.2289 1.62145 8.86184 0.988515C9.49477 0.355579 10.3532 0 11.2483 0ZM6.18583 27H4.93426C4.16786 27 3.62645 26.2477 3.86551 25.5164L6.55848 17.4445L4.17489 21.4102C3.53504 22.4719 2.14989 22.8164 1.08817 22.1766C0.0264499 21.5367 -0.318081 20.1516 0.321763 19.0898L4.09051 12.818C5.51786 10.4484 8.07723 9 10.8405 9H11.6561C14.4194 9 16.9788 10.4484 18.4061 12.818L22.1749 19.0898C22.8147 20.1516 22.4702 21.5367 21.4085 22.1766C20.3468 22.8164 18.9616 22.4719 18.3218 21.4102L15.9382 17.4516L18.6311 25.5164C18.8772 26.2477 18.3288 27 17.5624 27H16.3108V33.75C16.3108 34.9945 15.3054 36 14.0608 36C12.8163 36 11.8108 34.9945 11.8108 33.75V27H10.6858V33.75C10.6858 34.9945 9.68036 36 8.43583 36C7.19129 36 6.18583 34.9945 6.18583 33.75V27Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_77">
                    <path d="M0 0H22.5V36H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-bold font-playfair-display text-xl">Making Series: Kebaya</h2>
                <p class="text-muted">Tutorial lengkap pembuatan kebaya modern dan tradisional</p>

                <div class="flex items-center gap-2">
                    <p class="font-bold text-secondary text-2xl">Rp 199.000</p>
                </div>
            </div>

            <a
                href=""
                class="block text-center py-2 text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium hover:shadow-lg transition-shadow"
            >
                Daftar Sekarang
            </a>
        </div>
        <div class="rounded-xl ring-2 ring-secondary p-4 space-y-4 hover:shadow-xl transition-shadow">
            <div class="bg-linear-[135deg,#F7E7CE_0%,rgba(183,110,121,0.2)_70.71%] text-secondary w-full min-h-48 flex justify-center items-center rounded-xl">
                <svg width="45" height="36" viewBox="0 0 45 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_92)">
                    <path d="M14.8926 0C15.441 0 15.8981 0.400781 16.0668 0.928125C16.9316 3.64922 19.484 5.625 22.5004 5.625C25.5168 5.625 28.0691 3.64922 28.934 0.928125C29.1027 0.400781 29.5598 0 30.1082 0H30.9941C32.5762 0 34.102 0.555469 35.3184 1.56797L44.1918 8.95781C44.6559 9.34453 44.9441 9.90703 44.9934 10.5117C45.0426 11.1164 44.8457 11.7141 44.4449 12.1711L40.5074 16.6711C39.7059 17.5922 38.3137 17.6977 37.3715 16.9172L33.7504 13.9008V31.5C33.7504 33.982 31.7324 36 29.2504 36H15.7504C13.2684 36 11.2504 33.982 11.2504 31.5V13.9008L7.6293 16.9172C6.69414 17.6977 5.30196 17.5922 4.49336 16.6711L0.555863 12.1711C0.155082 11.7141 -0.0417932 11.1164 0.00742555 10.5117C0.0566443 9.90703 0.344926 9.34453 0.808988 8.95781L9.68243 1.56797C10.8988 0.555469 12.4246 0 14.0066 0H14.8926Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_92">
                    <path d="M0 0H45V36H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="space-y-2">
                <h2 class="font-bold font-playfair-display text-xl">Making Series: Dress & Bustier</h2>
                <p class="text-muted">Pelajari teknik pembuatan dress dan bustier dengan detail finishing</p>

                <div class="flex items-center gap-2">
                    <p class="font-bold text-secondary text-2xl">Rp 199.000</p>
                </div>
            </div>

            <a
                href=""
                class="block text-center py-2 text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium hover:shadow-lg transition-shadow"
            >
                Daftar Sekarang
            </a>
        </div>
    </div>
</div>

<div class="bg-primary p-8 sm:p-12 space-y-8">
    <div class="text-center max-w-xl mx-auto space-y-4">
        <h1 class="font-bold text-4xl font-playfair-display">Semi-Private Offline Course</h1>
        <p class="text-muted text-lg">Pembelajaran intensif dengan bimbingan langsung dari instruktur berpengalaman</p>
    </div>

    <div class="grid grid-cols-1 gap-4">
        <div class="rounded-2xl overflow-hidden ring-2 ring-secondary flex gap-4 flex-col lg:flex-row bg-white shadow-[0_10px_15px_rgba(0,0,0,0.1)]">
            <div class="mx-auto pt-2 lg:pt-0">
                <img src="/assets/basic_sewing.png" alt="basic sewing" class="rounded-lg">
            </div>
            <div class="flex-1 p-4 space-y-4">
                <h2 class="font-bold font-playfair-display text-2xl">Basic Sewing</h2>
                <p class="text-muted">Pelajari dasar-dasar menjahit untuk berbagai kategori pakaian dengan teknik profesional</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-primary/30 rounded-lg flex justify-center items-center py-4">
                        <div class="flex flex-col items-center">
                            <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_118)">
                                <path d="M7.12377 4.125C7.12377 3.68179 7.21107 3.24292 7.38068 2.83344C7.55029 2.42397 7.79889 2.05191 8.11228 1.73851C8.42568 1.42512 8.79774 1.17652 9.20721 1.00691C9.61669 0.837297 10.0556 0.75 10.4988 0.75C10.942 0.75 11.3809 0.837297 11.7903 1.00691C12.1998 1.17652 12.5719 1.42512 12.8853 1.73851C13.1987 2.05191 13.4473 2.42397 13.6169 2.83344C13.7865 3.24292 13.8738 3.68179 13.8738 4.125C13.8738 4.56821 13.7865 5.00708 13.6169 5.41656C13.4473 5.82603 13.1987 6.19809 12.8853 6.51149C12.5719 6.82488 12.1998 7.07348 11.7903 7.24309C11.3809 7.4127 10.942 7.5 10.4988 7.5C10.0556 7.5 9.61669 7.4127 9.20721 7.24309C8.79774 7.07348 8.42568 6.82488 8.11228 6.51149C7.79889 6.19809 7.55029 5.82603 7.38068 5.41656C7.21107 5.00708 7.12377 4.56821 7.12377 4.125ZM1.85971 6.77344C2.46908 5.93438 3.64096 5.75156 4.48002 6.36094L6.17689 7.59375C7.43314 8.50781 8.94721 9 10.4988 9C12.0503 9 13.5644 8.50781 14.8206 7.59375L16.5175 6.35625C17.3566 5.74688 18.5285 5.93438 19.1378 6.76875C19.7472 7.60313 19.5597 8.77969 18.7253 9.38906L17.0285 10.6266C16.391 11.0906 15.7113 11.4797 14.9988 11.7984V13.5H5.99877V11.7984C5.28627 11.4844 4.60658 11.0906 3.96908 10.6266L2.27221 9.38906C1.43314 8.77969 1.25033 7.60781 1.85971 6.76875V6.77344ZM6.06908 15.4359L8.90971 17.9203L7.69096 19.6641L8.83002 20.8031C9.56127 21.5344 9.56127 22.7203 8.83002 23.4563C8.09877 24.1922 6.91283 24.1875 6.17689 23.4563L3.92689 21.2063C3.28002 20.5594 3.19096 19.5469 3.71127 18.8016L6.06439 15.4359H6.06908ZM12.0925 17.9203L14.9331 15.4359L17.2863 18.8016C17.8066 19.5469 17.7175 20.5594 17.0753 21.2016L14.8253 23.4516C14.0941 24.1828 12.9081 24.1828 12.1722 23.4516C11.4363 22.7203 11.441 21.5344 12.1722 20.7984L13.3113 19.6594L12.0925 17.9156V17.9203Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_118">
                                <path d="M0 0H21V24H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <p class="font-medium">Kidswear</p>
                        </div>
                    </div>
                    <div class="bg-primary/30 rounded-lg flex justify-center items-center py-4">
                        <div class="flex flex-col items-center">
                            <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_125)">
                                <path d="M5.24888 2.25C5.24888 1.65326 5.48594 1.08097 5.90789 0.65901C6.32985 0.237053 6.90215 0 7.49888 0C8.09562 0 8.66792 0.237053 9.08987 0.65901C9.51183 1.08097 9.74888 1.65326 9.74888 2.25C9.74888 2.84674 9.51183 3.41903 9.08987 3.84099C8.66792 4.26295 8.09562 4.5 7.49888 4.5C6.90215 4.5 6.32985 4.26295 5.90789 3.84099C5.48594 3.41903 5.24888 2.84674 5.24888 2.25ZM7.12388 16.5V22.5C7.12388 23.3297 6.45357 24 5.62388 24C4.7942 24 4.12388 23.3297 4.12388 22.5V12.0422L2.78326 14.2734C2.3567 14.9812 1.43326 15.2109 0.725446 14.7844C0.0176333 14.3578 -0.212054 13.4344 0.214508 12.7266L2.94732 8.17969C3.76295 6.825 5.22545 5.99531 6.80513 5.99531H8.19732C9.77701 5.99531 11.2395 6.825 12.0551 8.17969L14.7879 12.7266C15.2145 13.4344 14.9848 14.3578 14.277 14.7844C13.5692 15.2109 12.6458 14.9812 12.2192 14.2734L10.8739 12.0422V22.5C10.8739 23.3297 10.2036 24 9.37388 24C8.5442 24 7.87388 23.3297 7.87388 22.5V16.5H7.12388Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_125">
                                <path d="M0 0H15V24H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <p class="font-medium">Menswear</p>
                        </div>
                    </div>
                    <div class="bg-primary/30 rounded-lg flex justify-center items-center py-4">
                        <div class="flex flex-col items-center">
                            <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_132)">
                                <path d="M7.49888 0C8.09562 0 8.66792 0.237053 9.08987 0.65901C9.51183 1.08097 9.74888 1.65326 9.74888 2.25C9.74888 2.84674 9.51183 3.41903 9.08987 3.84099C8.66792 4.26295 8.09562 4.5 7.49888 4.5C6.90215 4.5 6.32985 4.26295 5.90789 3.84099C5.48594 3.41903 5.24888 2.84674 5.24888 2.25C5.24888 1.65326 5.48594 1.08097 5.90789 0.65901C6.32985 0.237053 6.90215 0 7.49888 0ZM4.12388 18H3.28951C2.77857 18 2.41763 17.4984 2.57701 17.0109L4.37232 11.6297L2.78326 14.2734C2.3567 14.9812 1.43326 15.2109 0.725446 14.7844C0.0176333 14.3578 -0.212054 13.4344 0.214508 12.7266L2.72701 8.54531C3.67857 6.96563 5.38482 6 7.22701 6H7.77076C9.61295 6 11.3192 6.96563 12.2708 8.54531L14.7833 12.7266C15.2098 13.4344 14.9801 14.3578 14.2723 14.7844C13.5645 15.2109 12.6411 14.9812 12.2145 14.2734L10.6254 11.6344L12.4208 17.0109C12.5848 17.4984 12.2192 18 11.7083 18H10.8739V22.5C10.8739 23.3297 10.2036 24 9.37388 24C8.5442 24 7.87388 23.3297 7.87388 22.5V18H7.12388V22.5C7.12388 23.3297 6.45357 24 5.62388 24C4.7942 24 4.12388 23.3297 4.12388 22.5V18Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_132">
                                <path d="M0 0H15V24H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <p class="font-medium">Womanswear</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-2 sm:gap-0">
                    <div class="flex flex-col">
                        <p class="text-sm text-muted">12x Pertemuan</p>
                        <p class="text-3xl text-secondary font-bold">Rp 2.999.000</p>
                    </div>
                    <a
                        href=""
                        class="block text-center py-2 px-6 hover:shadow-lg transition-shadow text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium"
                    >
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class="rounded-2xl overflow-hidden ring-2 ring-secondary flex gap-4 flex-col lg:flex-row bg-white shadow-[0_10px_15px_rgba(0,0,0,0.1)]">
            <div class="mx-auto pt-2 lg:pt-0">
                <img src="/assets/intermediet_level.png" alt="intermediet level 1 & 2" class="rounded-lg">
            </div>
            <div class="flex-1 p-4 space-y-4">
                <h2 class="font-bold font-playfair-display text-2xl">Intermediate Level 1 & 2</h2>
                <p class="text-muted">Tingkatkan kemampuan dengan teknik-teknik lanjutan dalam fashion design dan construction</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-primary/30 rounded-lg py-4">
                        <div class="px-4 space-y-2">
                            <h3 class="font-medium">Level 1</h3>
                            <ul class="text-sm text-muted">
                                <li>• Advanced Pattern Making</li>
                                <li>• Draping Techniques</li>
                                <li>• Professional Finishing</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-primary/30 rounded-lg py-4">
                        <div class="px-4 space-y-2">
                            <h3 class="font-medium">Level 2</h3>
                            <ul class="text-sm text-muted">
                                <li>• Complex Construction</li>
                                <li>• Couture Techniques</li>
                                <li>• Design Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-2 sm:gap-0">
                    <div class="flex flex-col">
                        <p class="text-sm text-muted">Per Level</p>
                        <p class="text-3xl text-secondary font-bold">Rp 2.999.000</p>
                    </div>
                    <a
                        href=""
                        class="block text-center py-2 px-6 hover:shadow-lg transition-shadow text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium"
                    >
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class="rounded-2xl overflow-hidden ring-2 ring-secondary flex gap-4 flex-col lg:flex-row bg-white shadow-[0_10px_15px_rgba(0,0,0,0.1)]">
            <div class="mx-auto pt-2 lg:pt-0">
                <img src="/assets/advanced_level.png" alt="advanced level" class="rounded-lg">
            </div>
            <div class="flex-1 p-4 space-y-4">
                <h2 class="font-bold font-playfair-display text-2xl">Advanced Level</h2>
                <p class="text-muted">Master class untuk menciptakan karya haute couture dengan teknik profesional tingkat tinggi</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-primary/30 rounded-lg flex justify-center items-center py-4">
                        <div class="flex flex-col items-center">
                            <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_193)">
                                <path d="M14.4844 4.96875C15.0188 4.64062 15.375 4.04531 15.375 3.375C15.375 2.33906 14.5359 1.5 13.5 1.5C12.4641 1.5 11.625 2.33906 11.625 3.375C11.625 4.05 11.9812 4.64062 12.5156 4.96875L9.82969 10.3406C9.40312 11.1938 8.29688 11.4375 7.55156 10.8422L3.375 7.5C3.60938 7.18594 3.75 6.79688 3.75 6.375C3.75 5.33906 2.91094 4.5 1.875 4.5C0.839062 4.5 0 5.33906 0 6.375C0 7.41094 0.839062 8.25 1.875 8.25C1.88437 8.25 1.89844 8.25 1.90781 8.25L4.05 20.0344C4.30781 21.4594 5.55 22.5 7.00312 22.5H19.9969C21.4453 22.5 22.6875 21.4641 22.95 20.0344L25.0922 8.25C25.1016 8.25 25.1156 8.25 25.125 8.25C26.1609 8.25 27 7.41094 27 6.375C27 5.33906 26.1609 4.5 25.125 4.5C24.0891 4.5 23.25 5.33906 23.25 6.375C23.25 6.79688 23.3906 7.18594 23.625 7.5L19.4484 10.8422C18.7031 11.4375 17.5969 11.1938 17.1703 10.3406L14.4844 4.96875Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_193">
                                <path d="M0 0H27V24H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <h3 class="font-medium">Evening Gown</h3>
                            <p class="text-muted text-sm">Haute couture techniques</p>
                        </div>
                    </div>
                    <div class="bg-primary/30 rounded-lg flex justify-center items-center py-4">
                        <div class="flex flex-col items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_202)">
                                <path d="M5.47106 1.58437C5.682 1.29844 6.0195 1.125 6.37575 1.125H17.6257C17.982 1.125 18.3195 1.29375 18.5304 1.58437L23.7804 8.70938C24.0992 9.14062 24.0664 9.73594 23.7101 10.1344L12.8351 22.1344C12.6242 22.3688 12.3195 22.5047 12.0007 22.5047C11.682 22.5047 11.382 22.3688 11.1664 22.1344L0.291375 10.1344C-0.0695626 9.73594 -0.0976876 9.14062 0.221062 8.70938L5.47106 1.58437ZM7.27575 3.45C7.12106 3.56719 7.07888 3.77812 7.17731 3.94219L9.86794 8.42344L2.96794 9C2.77575 9.01406 2.62575 9.17813 2.62575 9.375C2.62575 9.57187 2.77575 9.73125 2.96794 9.75L11.9679 10.5C11.9867 10.5 12.0101 10.5 12.0289 10.5L21.0289 9.75C21.2211 9.73594 21.3711 9.57187 21.3711 9.375C21.3711 9.17813 21.2211 9.01875 21.0289 9L14.1336 8.42813L16.8242 3.94687C16.9226 3.78281 16.8804 3.56719 16.7257 3.45469C16.5711 3.34219 16.3554 3.36094 16.2242 3.50156L12.0007 8.07187L7.77731 3.49687C7.64606 3.35625 7.43044 3.3375 7.27575 3.45Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_202">
                                <path d="M0 0H24V24H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <h3 class="font-medium">Kebaya Couture</h3>
                            <p class="text-muted text-sm">Traditional meets modern</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-2 sm:gap-0">
                    <div class="flex flex-col">
                        <p class="text-sm text-muted">Premium Course</p>
                        <p class="text-3xl text-secondary font-bold">Rp 4.999.000</p>
                    </div>
                    <a
                        href=""
                        class="block text-center py-2 px-6 hover:shadow-lg transition-shadow text-white bg-linear-[90deg,#B76E79_0%,#F472B6_100%] rounded-full font-medium"
                    >
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection