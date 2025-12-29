<header class="sticky bg-white top-0 z-50 w-full shadow-[0_4px_4px_rgba(0,0,0,0.25)] font-poppins">
    <div class="flex justify-between items-center px-6 sm:px-8 py-2">
        <div class="rounded-full bg-primary p-1 sm:p-2">
            <img
                src="/logo.png"
                alt="logo"
                class="w-8 sm:w-10 2xl:w-16"
            >
        </div>

        <div class="hidden sm:flex w-full max-w-2xl gap-8 justify-end lg:justify-between">
            <nav>
                <ul class="flex gap-8">
                    <li>
                        <a
                            href="#home"
                            class="nav-link hover:underline hover:text-secondary duration-300"
                        >
                            Home
                        </a>
                    </li>
                    <li>
                        <a
                            href="#about"
                            class="nav-link hover:underline hover:text-secondary duration-300"
                        >
                            About
                        </a>
                    </li>
                    <li>
                        <div class="relative">
                            <button
                                id="toggleDropdownPrograms"
                                type="button"
                                class="flex gap-1 items-center hover:underline hover:text-secondary duration-300"
                            >
                                <span>Program</span>
                                <div id="iconTogleDropdownPrograms">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                            {{-- Dropdown Programs --}}
                            <div
                                id="dropdownPrograms"
                                class="hidden sm:block absolute w-max bg-white rounded-sm max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out"
                            >
                                <ul class="p-4 space-y-2">
                                    <li class="hover:underline hover:text-secondary duration-300">
                                        <a href="">Short course</a>
                                    </li>
                                    <li class="hover:underline hover:text-secondary duration-300">
                                        <a href="">Regular program private</a>
                                    </li>
                                    <li class="hover:underline hover:text-secondary duration-300">
                                        <a href="">Diploma 1 year</a>
                                    </li>
                                    <li class="hover:underline hover:text-secondary duration-300">
                                        <a href="">Monthly program</a>
                                    </li>
                                    <li class="hover:underline hover:text-secondary duration-300">
                                        <a href="">About program</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a
                            href="#gallery"
                            class="nav-link hover:underline hover:text-secondary duration-300"
                        >
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a
                            href="#testimony"
                            class="nav-link hover:underline hover:text-secondary duration-300"
                        >
                            Testimoni
                        </a>
                    </li>
                </ul>
            </nav>

            <a
                href=""
                class="rounded-full ring ring-secondary text-secondary hover:bg-secondary hover:text-white px-4 shadow-[0_4px_24px_rgba(212,165,116,0.12)]"
            >
                Login
            </a>
        </div>

        <button 
            id="hamburger"
            class="sm:hidden"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>

    {{-- Mobile Navigation --}}
    <div 
        id="mobileMenu"
        class="sm:hidden border-t-2 border-primary text-sm max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out"
    >
        <div class="px-4 pt-2 pb-6">
            <nav class="border-b-2 border-primary py-2 mb-4">
                <ul class="space-y-2">
                    <li>
                        <a
                            href="#home"
                            class="hover:underline hover:text-secondary duration-300"
                        >
                            Home
                        </a>
                    </li>
                    <li>
                        <a
                            href="#about"
                            class="hover:underline hover:text-secondary duration-300"
                        >
                            About
                        </a>
                    </li>
                    <li>
                        <button
                            id="toggleDropdownProgramsMobile"
                            type="button"
                            class="flex gap-1 items-center hover:underline hover:text-secondary duration-300"
                        >
                            <span>Program</span>
                            <div id="iconTogleDropdownProgramsMobile">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>

                        <div
                            id="dropdownProgramsMobile"
                            class="sm:hidden max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out"
                        >
                            <ul class="pl-4 py-2 space-y-2 text-sm">
                                <li class="hover:underline hover:text-secondary duration-300">
                                    <a href="">Short course</a>
                                </li>
                                <li class="hover:underline hover:text-secondary duration-300">
                                    <a href="">Regular program private</a>
                                </li>
                                <li class="hover:underline hover:text-secondary duration-300">
                                    <a href="">Diploma 1 year</a>
                                </li>
                                <li class="hover:underline hover:text-secondary duration-300">
                                    <a href="">Monthly program</a>
                                </li>
                                <li class="hover:underline hover:text-secondary duration-300">
                                    <a href="">About program</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a
                            href="#gallery"
                            class="hover:underline hover:text-secondary duration-300"
                        >
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a
                            href="#testimony"
                            class="hover:underline hover:text-secondary duration-300"
                        >
                            Testimoni
                        </a>
                    </li>
                </ul>
            </nav>

            <a
                href=""
                class="rounded-full ring ring-secondary text-secondary hover:bg-secondary hover:text-white px-4 shadow-[0_4px_24px_rgba(212,165,116,0.12)]"
            >
                Login
            </a>
        </div>
    </div>
</header>