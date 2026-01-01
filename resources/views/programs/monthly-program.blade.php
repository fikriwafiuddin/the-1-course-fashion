@extends('layouts.user-layout')

@section('title', 'Monthly Program')

@section('content')

<section class="bg-linear-[180deg,#F8E8E8_0%,#FFFFFF_100%] py-12 px-4">
    <div class="text-center space-y-4">
        <h1 class="font-playfair-display text-5xl">
            Belajar Fleksibel dengan Biaya Bulanan
        </h1>
        <p class="text-muted text-xl">
            Sistem Private, Jadwal Sesuai Keinginanmu
        </p>
    </div>
</section>

<section class="py-20 px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <div class="ring-2 ring-secondary rounded-2xl p-8">
            <div class="space-y-6">
                <div class="p-4 w-max rounded-full bg-secondary/10">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2034_678)">
                        <path d="M12 9L10.1484 7.14844C10.3781 6.55781 10.5 5.92031 10.5 5.25C10.5 2.34844 8.15156 0 5.25 0C2.34844 0 0 2.34844 0 5.25C0 8.15156 2.34844 10.5 5.25 10.5C5.92031 10.5 6.55781 10.3734 7.14844 10.1484L9 12L7.14844 13.8516C6.55781 13.6219 5.92031 13.5 5.25 13.5C2.34844 13.5 0 15.8484 0 18.75C0 21.6516 2.34844 24 5.25 24C8.15156 24 10.5 21.6516 10.5 18.75C10.5 18.0797 10.3734 17.4422 10.1484 16.8516L23.4 3.6C23.7328 3.26719 23.7328 2.73281 23.4 2.4C22.0734 1.07344 19.9266 1.07344 18.6 2.4L12 9ZM13.0594 16.0594L18.6 21.6C19.9266 22.9266 22.0734 22.9266 23.4 21.6C23.7328 21.2672 23.7328 20.7328 23.4 20.4L16.0594 13.0594L13.0594 16.0594ZM3 5.25C3 4.95453 3.0582 4.66194 3.17127 4.38896C3.28434 4.11598 3.45008 3.86794 3.65901 3.65901C3.86794 3.45008 4.11598 3.28434 4.38896 3.17127C4.66194 3.0582 4.95453 3 5.25 3C5.54547 3 5.83806 3.0582 6.11104 3.17127C6.38402 3.28434 6.63206 3.45008 6.84099 3.65901C7.04992 3.86794 7.21566 4.11598 7.32873 4.38896C7.4418 4.66194 7.5 4.95453 7.5 5.25C7.5 5.54547 7.4418 5.83806 7.32873 6.11104C7.21566 6.38402 7.04992 6.63206 6.84099 6.84099C6.63206 7.04992 6.38402 7.21566 6.11104 7.32873C5.83806 7.4418 5.54547 7.5 5.25 7.5C4.95453 7.5 4.66194 7.4418 4.38896 7.32873C4.11598 7.21566 3.86794 7.04992 3.65901 6.84099C3.45008 6.63206 3.28434 6.38402 3.17127 6.11104C3.0582 5.83806 3 5.54547 3 5.25ZM5.25 16.5C5.54547 16.5 5.83806 16.5582 6.11104 16.6713C6.38402 16.7843 6.63206 16.9501 6.84099 17.159C7.04992 17.3679 7.21566 17.616 7.32873 17.889C7.4418 18.1619 7.5 18.4545 7.5 18.75C7.5 19.0455 7.4418 19.3381 7.32873 19.611C7.21566 19.884 7.04992 20.1321 6.84099 20.341C6.63206 20.5499 6.38402 20.7157 6.11104 20.8287C5.83806 20.9418 5.54547 21 5.25 21C4.95453 21 4.66194 20.9418 4.38896 20.8287C4.11598 20.7157 3.86794 20.5499 3.65901 20.341C3.45008 20.1321 3.28434 19.884 3.17127 19.611C3.0582 19.3381 3 19.0455 3 18.75C3 18.4545 3.0582 18.1619 3.17127 17.889C3.28434 17.616 3.45008 17.3679 3.65901 17.159C3.86794 16.9501 4.11598 16.7843 4.38896 16.6713C4.66194 16.5582 4.95453 16.5 5.25 16.5Z" fill="#B76E79"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2034_678">
                        <path d="M0 0H24V24H0V0Z" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>

                <div class="space-y-4">
                    <h2 class="text-3xl">Pattern Sewing</h2>
                    <p class="text-secondary text-4xl">Rp 880.000</p>
                    <p class="font-medium text-muted">
                        /bulan
                    </p>
                </div>

                <ul class="space-y-2">
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Sistem Private
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Online & Offline
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Jadwal Fleksibel
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Materi Lengkap
                    </li>
                </ul>

                <a
                    href=""
                    class="bg-secondary text-white block py-4 font-semibold text-center rounded-xl hover:shadow-lg transition-shadow"
                >
                    Daftar Sekarang
                </a>
            </div>
        </div>
        <div class="relative ring-2 ring-secondary rounded-2xl p-8 shadow-[0_20px_25px_rgba(0,0,0,0.1)]">
            <div class="absolute top-0 right-0 bg-secondary rounded-tr-2xl rounded-bl-2xl py-2 px-4">
                <p class="text-white font-bold text-xs">
                    POPULER
                </p>
            </div>

            <div class="space-y-6">
                <div class="p-4 w-max rounded-full bg-secondary">
                    <svg width="24" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 24H0V0H30V24Z"/>
                        <path d="M6 1.5C4.34531 1.5 3 2.84531 3 4.5V16.5H6V4.5H24V16.5H27V4.5C27 2.84531 25.6547 1.5 24 1.5H6ZM0.9 18C0.403125 18 0 18.4031 0 18.9C0 20.8875 1.6125 22.5 3.6 22.5H26.4C28.3875 22.5 30 20.8875 30 18.9C30 18.4031 29.5969 18 29.1 18H0.9Z" fill="white"/>
                    </svg>
                </div>

                <div class="space-y-4">
                    <h2 class="text-3xl">Online Class</h2>
                    <p class="text-muted font-semibold text-sm">Start</p>
                    <p class="text-secondary text-4xl">Rp 880.000</p>
                    <p class="font-medium text-muted">
                        - Rp 750.000/bulan
                    </p>
                </div>

                <ul class="space-y-2">
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Kids Program
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Teen Program
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Fashion Business
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Sistem Private
                    </li>
                </ul>

                <a
                    href=""
                    class="bg-secondary text-white block py-4 font-semibold text-center rounded-xl hover:shadow-lg transition-shadow"
                >
                    Daftar Sekarang
                </a>
            </div>
        </div>
        <div class="ring-2 ring-secondary rounded-2xl p-8">
            <div class="space-y-6">
                <div class="p-4 w-max rounded-full bg-secondary/10">
                    <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2034_768)">
                        <path d="M14.4844 4.96875C15.0188 4.64062 15.375 4.04531 15.375 3.375C15.375 2.33906 14.5359 1.5 13.5 1.5C12.4641 1.5 11.625 2.33906 11.625 3.375C11.625 4.05 11.9812 4.64062 12.5156 4.96875L9.82969 10.3406C9.40312 11.1938 8.29688 11.4375 7.55156 10.8422L3.375 7.5C3.60938 7.18594 3.75 6.79688 3.75 6.375C3.75 5.33906 2.91094 4.5 1.875 4.5C0.839062 4.5 0 5.33906 0 6.375C0 7.41094 0.839062 8.25 1.875 8.25C1.88437 8.25 1.89844 8.25 1.90781 8.25L4.05 20.0344C4.30781 21.4594 5.55 22.5 7.00312 22.5H19.9969C21.4453 22.5 22.6875 21.4641 22.95 20.0344L25.0922 8.25C25.1016 8.25 25.1156 8.25 25.125 8.25C26.1609 8.25 27 7.41094 27 6.375C27 5.33906 26.1609 4.5 25.125 4.5C24.0891 4.5 23.25 5.33906 23.25 6.375C23.25 6.79688 23.3906 7.18594 23.625 7.5L19.4484 10.8422C18.7031 11.4375 17.5969 11.1938 17.1703 10.3406L14.4844 4.96875Z" fill="#B76E79"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2034_768">
                        <path d="M0 0H27V24H0V0Z" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>

                <div class="space-y-4">
                    <h2 class="text-3xl">Advance Monthly</h2>
                    <p class="text-muted font-semibold text-sm">Start</p>
                    <p class="text-secondary text-4xl">Rp 750.000</p>
                    <p class="font-medium text-muted">
                        /bulan
                    </p>
                </div>

                <ul class="space-y-2">
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Jas Pria
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Bridal
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Sistem Private
                    </li>
                    <li class="flex gap-2">
                        <div class="p-2 bg-secondary/10 rounded-full">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2034_690)">
                                <path d="M10.2814 2.46973C10.5744 2.7627 10.5744 3.23848 10.2814 3.53145L4.28145 9.53145C3.98848 9.82441 3.5127 9.82441 3.21973 9.53145L0.219727 6.53145C-0.0732422 6.23848 -0.0732422 5.7627 0.219727 5.46973C0.512695 5.17676 0.988477 5.17676 1.28145 5.46973L3.75176 7.9377L9.22207 2.46973C9.51504 2.17676 9.99082 2.17676 10.2838 2.46973H10.2814Z" fill="#B76E79"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2034_690">
                                <path d="M0 0H10.5V12H0V0Z" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>
                        Jadwal Fleksibel
                    </li>
                </ul>

                <a
                    href=""
                    class="bg-secondary text-white block py-4 font-semibold text-center rounded-xl hover:shadow-lg transition-shadow"
                >
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-24 px-4 bg-primary">
    <div class="flex justify-center">
        <div class="flex flex-col items-center gap-6">
            <div class="rounded-full p-4 bg-white shadow-[0_10px_15px_rgba(0,0,0,0.1)]">
                <svg width="30" height="30" viewBox="0 0 38 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_814)">
                    <path d="M8.4375 0C9.6807 0 10.873 0.49386 11.7521 1.37294C12.6311 2.25201 13.125 3.4443 13.125 4.6875C13.125 5.9307 12.6311 7.12299 11.7521 8.00206C10.873 8.88114 9.6807 9.375 8.4375 9.375C7.1943 9.375 6.00201 8.88114 5.12294 8.00206C4.24386 7.12299 3.75 5.9307 3.75 4.6875C3.75 3.4443 4.24386 2.25201 5.12294 1.37294C6.00201 0.49386 7.1943 0 8.4375 0ZM30 0C31.2432 0 32.4355 0.49386 33.3146 1.37294C34.1936 2.25201 34.6875 3.4443 34.6875 4.6875C34.6875 5.9307 34.1936 7.12299 33.3146 8.00206C32.4355 8.88114 31.2432 9.375 30 9.375C28.7568 9.375 27.5645 8.88114 26.6854 8.00206C25.8064 7.12299 25.3125 5.9307 25.3125 4.6875C25.3125 3.4443 25.8064 2.25201 26.6854 1.37294C27.5645 0.49386 28.7568 0 30 0ZM0 17.502C0 14.0508 2.80078 11.25 6.25195 11.25H8.75391C9.68555 11.25 10.5703 11.4551 11.3672 11.8184C11.291 12.2402 11.2559 12.6797 11.2559 13.125C11.2559 15.3633 12.2402 17.373 13.793 18.75C13.7812 18.75 13.7695 18.75 13.752 18.75H1.24805C0.5625 18.75 0 18.1875 0 17.502ZM23.748 18.75C23.7363 18.75 23.7246 18.75 23.707 18.75C25.2656 17.373 26.2441 15.3633 26.2441 13.125C26.2441 12.6797 26.2031 12.2461 26.1328 11.8184C26.9297 11.4492 27.8145 11.25 28.7461 11.25H31.248C34.6992 11.25 37.5 14.0508 37.5 17.502C37.5 18.1934 36.9375 18.75 36.252 18.75H23.748ZM13.125 13.125C13.125 11.6332 13.7176 10.2024 14.7725 9.14752C15.8274 8.09263 17.2582 7.5 18.75 7.5C20.2418 7.5 21.6726 8.09263 22.7275 9.14752C23.7824 10.2024 24.375 11.6332 24.375 13.125C24.375 14.6168 23.7824 16.0476 22.7275 17.1025C21.6726 18.1574 20.2418 18.75 18.75 18.75C17.2582 18.75 15.8274 18.1574 14.7725 17.1025C13.7176 16.0476 13.125 14.6168 13.125 13.125ZM7.5 28.4355C7.5 24.123 10.998 20.625 15.3105 20.625H22.1895C26.502 20.625 30 24.123 30 28.4355C30 29.2969 29.3027 30 28.4355 30H9.06445C8.20312 30 7.5 29.3027 7.5 28.4355Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_814">
                    <path d="M0 0H37.5V30H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
            <p class="text-5xl">
                Group Deal!
            </p>
            <div class="flex items-center gap-4">
                <div class="w-24 h-px bg-secondary"></div>
                <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2034_821)">
                    <path d="M12.3772 0.703125C12.1702 0.273438 11.7327 0 11.2522 0C10.7717 0 10.3381 0.273438 10.1272 0.703125L7.61549 5.87109L2.00611 6.69922C1.53736 6.76953 1.14674 7.09766 1.0022 7.54688C0.857674 7.99609 0.974861 8.49219 1.3108 8.82422L5.38111 12.8516L4.42017 18.543C4.34205 19.0117 4.53736 19.4883 4.92408 19.7656C5.3108 20.043 5.82252 20.0781 6.24439 19.8555L11.2561 17.1797L16.2678 19.8555C16.6897 20.0781 17.2014 20.0469 17.5881 19.7656C17.9749 19.4844 18.1702 19.0117 18.092 18.543L17.1272 12.8516L21.1975 8.82422C21.5335 8.49219 21.6545 7.99609 21.5061 7.54688C21.3577 7.09766 20.971 6.76953 20.5022 6.69922L14.8889 5.87109L12.3772 0.703125Z" fill="#B76E79"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2034_821">
                    <path d="M0 0H22.5V20H0V0Z" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <div class="w-24 h-px bg-secondary"></div>
            </div>
            <div class="max-w-sm text-center">
                <p class="text-2xl">
                    Dapatkan Diskon Khusus untuk Pendaftaran Kolektif
                </p>
            </div>
            <a
                href=""
                class="mt-4 bg-secondary shadow-[0_10px_15px_rgba(0,0,0,0.1)] py-3 px-10 text-white rounded-xl font-semibold text-lg hover:shadow-lg transition-shadow"
            >
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<section class="py-24 px-4">
    <div class="flex justify-center">
        <div class="flex flex-col items-center gap-8">
            <div class="space-y-4 text-center">
                <h1 class="text-4xl">
                    Siap Memulai Perjalananmu?
                </h1>
                <div class="max-w-xl">
                    <p class="text-muted text-lg">
                        Bergabunglah dengan ratusan siswa yang telah mewujudkan impian mereka di dunia fashion
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full max-w-sm text-center">
                <a
                    href=""
                    class="text-center bg-secondary shadow-[0_10px_15px_rgba(0,0,0,0.1)] py-3 text-white rounded-xl font-semibold hover:shadow-lg transition-shadow"
                >
                    Konsultasi Gratis
                </a>
                <a
                    href=""
                    class="text-center ring-2 ring-secondary text-secondary py-3 rounded-lg hover:bg-secondary hover:text-white transition-colors"    
                >
                    Lihat Portfolio
                </a>
            </div>
        </div>
    </div>
</section>

@endsection