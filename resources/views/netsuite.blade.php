<x-app-layout>
    @section('title', 'Grant Thornton | Oracle NetSuite')
    <section class="h-max bg-gradient-to-b from-[#f2f0f4] to-[#E9DDF4]">
        <div class="relative max-w-7xl mx-auto">
            <div class="relative flex flex-col gap-6 sm:gap-8 justify-cener items-center pt-6 sm:pt-12">
                <div>
                    <img class="w-12 h-full" src="{{ asset('assets/images/banner-item-chat.webp') }}" alt="chat-with-us">
                </div>
                <div class="flex my-auto md:mx-[10%]">
                    <h1 data-aos="zoom-in"
                        class="text-5xl w-full sm:w-fit leading-snug md:!leading-tight text-center font-bold relative">
                        Uniqe Software Landing Page</h1>
                </div>
                <span data-aos="fade-up" class="text-xl font-medium text-center">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco.</span>
                <div class="flex gap-8">
                    <button data-aos="fade-right"
                        class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">{{ __('Get Started') }}</button>
                    <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                        class="rounded-full font-semibold px-6 py-4">{{ __('Demo') }} ›</button>
                </div>
                <div class="flex flex-col sm:flex-row justify-between w-full sm:py-10 relative h-[300px] sm:h-[450px]">
                    <div class="relative sm:static w-full flex justify-center">
                        <img data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            class="absolute sm:11/12 md:w-3/4 lg:w-7/12 mt-4 sm:mt-0 md:-bottom-5 left-1/2 -translate-x-1/2"
                            style="transform: translateX(-50%)" src="{{ asset('assets/images/laptop-mockup.png') }}"
                            alt="laptop-sap-b1">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div
            class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 py-12 sm:py-16 flex flex-col sm:flex-row gap-4 sm:gap-6 md:gap-8 lg:gap-16">
            <div
                class="relative flex-1 flex flex-col gap-8 before:absolute before:top-0 before:right-0 before:w-[60px] before:h-[61px] before:bg-contain before:bg-[url('../assets/images/feature-item-sun.webp')]">
                <h3 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                    Revier Suitable For Anytype Landingpage</h3>
                <p data-aos="fade-up" class="text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat uis
                    aute irure.</p>
                <ul class="list-disc list-inside space-y-4">
                    <li data-aos="fade-up" data-aos-delay="100" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Time-saving, immediate application</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Comprehensive management information</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="500" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Process optimization</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="700" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">For executives and chief accountants</span>
                    </li>
                </ul>
                <div data-aos="fade-up" class="w-fit">
                    <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Demo</button>
                </div>
            </div>

            <div id="slide-up-animation" class="w-full md:w-1/2 relative">
                <img class="h-full rounded-3xl object-cover md:absolute md:-bottom-[110px]"
                    style="height: -webkit-fill-available" src="{{ asset('assets/images/sap-dashboard.png') }}"
                    alt="erp-solution">
            </div>
        </div>
    </section>

    <div class="bg-bg-main w-full h-24" style="clip-path: polygon(0 40%, 50% 0, 100% 40%, 100% 100%, 0% 100%);">
    </div>
    <section class="bg-bg-main w-full">
        <div
            class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 flex flex-col sm:flex-row gap-4 sm:gap-6 md:gap-8 lg:gap-16">
            <div class="flex flex-col md:flex-row gap-8 md:gap-0 content-around justify-around w-full">
                <div class="flex flex-col gap-4 items-center">
                    <img class="w-16" src="{{ asset('assets/images/sap-client.png') }}" alt="client">
                    <span class="text-xl font-semibold text-white">20+</span>
                    <p class="text-white">Happy Clients</p>
                </div>
                <div class="flex flex-col gap-4 items-center">
                    <img class="w-12" src="{{ asset('assets/images/sap-project.png') }}" alt="project">
                    <span class="text-xl font-semibold text-white">10+</span>
                    <p class="text-white">Completed Projects</p>
                </div>
                <div class="flex flex-col gap-4 items-center">
                    <img class="w-12" src="{{ asset('assets/images/sap-award.png') }}" alt="award">
                    <span class="text-xl font-semibold text-white">5+</span>
                    <p class="text-white">Awards</p>
                </div>
                <div class="flex flex-col gap-4 items-center">
                    <img class="w-12" src="{{ asset('assets/images/sap-feedback.png') }}" alt="feedback">
                    <span class="text-xl font-semibold text-white">50+</span>
                    <p class="text-white">Feedbacks</p>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-bg-main w-full h-24 rotate-180"
        style="clip-path: polygon(0 40%, 50% 0, 100% 40%, 100% 100%, 0% 100%);">
    </div>

    <section>
        <div
            class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 flex flex-col sm:flex-row gap-4 sm:gap-6 md:gap-8 lg:gap-16 py-24">
            <div class="flex flex-col md:flex-row justify-center gap-8 md:gap-4 w-full">
                <div class="w-full md:w-1/2">
                    <img class="h-full rounded-3xl object-cover"
                        src="{{ asset('assets/images/sap-feature-illustration.png') }}" alt="erp-solution">
                </div>
                <div class="flex flex-col w-full md:w-1/2 gap-8">
                    <div class="flex gap-4">
                        <div class="w-28">
                            <img class="w-28 object-cover" src="{{ asset('assets/images/icon-code-bulb.png') }}"
                                alt="lightning-fast">
                        </div>
                        <div class="flex flex-col gap-3">
                            <h4 class="font-semibold text-lg">Lightning Fast</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-28">
                            <img class="w-10 object-cover" src="{{ asset('assets/images/icon-layout.png') }}"
                                alt="lightning-fast">
                        </div>
                        <div class="flex flex-col gap-3">
                            <h4 class="font-semibold text-lg">Easy To Use</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-28">
                            <img class="w-24 object-cover" src="{{ asset('assets/images/icon-info-bulb.png') }}"
                                alt="lightning-fast">
                        </div>
                        <div class="flex flex-col gap-3">
                            <h4 class="font-semibold text-lg">Light Weight</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section
        class="bg-bg-gray relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-bg-gray before:opacity-60 z-10 bg-no-repeat bg-center bg-[length:60%_auto] bg-[url('../assets/images/service-pattern.webp')]">
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                    Why Choose Us?
                </h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <div>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                            class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">{{ __('Demo') }}
                            ›</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-row flex-wrap  gap-8 mt-12 items-end rounded-full bg-">
                <div data-aos="zoom-in-right" data-aos-delay="0"
                    class="hover:scale-115 flex flex-col gap-8 justify-end cursor-default duration-300 ease-linear lg:h-[440px] sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)] bg-white rounded px-6 py-10">
                    <div class="w-16 h-16">
                        <img class="w-16" src="{{ asset('assets/images/icon-config.png') }}" alt="sap-b1-pattern">
                    </div>
                    <div class="flex flex-col gap-4">
                        <h6 class="font-semibold text-2xl h-16 text-ellipsis overflow-hidden">Proven Technology</h6>
                        <p class="w-11/12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="block">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
                <div data-aos="zoom-in-down" data-aos-delay="200"
                    class="hover:scale-115 flex flex-col gap-8 justify-end cursor-default duration-300 ease-linear lg:h-[440px] sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)] bg-white rounded px-6 py-10">
                    <div class="w-16 h-16">
                        <img class="w-12" src="{{ asset('assets/images/icon-chess.png') }}" alt="sap-b1-pattern">
                    </div>
                    <div class="flex flex-col gap-4">
                        <h6 class="font-semibold text-2xl h-16 text-ellipsis overflow-hidden">Getting Started adsad
                            asda sa ad ad Getting Started adsad asda sa ad ad Getting Started adsad asda sa ad ad</h6>
                        <p class="w-11/12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="block">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
                <div data-aos="zoom-in-left" data-aos-delay="400"
                    class="hover:scale-115 flex flex-col gap-8 justify-end cursor-default duration-300 ease-linear lg:h-[440px] sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)] bg-white rounded px-6 py-10">
                    <div class="w-16 h-16">
                        <img class="w-16" src="{{ asset('assets/images/icon-explore.png') }}"
                            alt="sap-b1-pattern">
                    </div>

                    <div class="flex flex-col gap-4">
                        <h6 class="font-semibold text-2xl h-16 text-ellipsis overflow-hidden">Cloud Upload</h6>
                        <p class="w-11/12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="block">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
                <div data-aos="zoom-in-right" data-aos-delay="0"
                    class="hover:scale-115 flex flex-col gap-8 justify-end cursor-default duration-300 ease-linear lg:h-[440px] sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)] bg-white rounded px-6 py-10">
                    <div class="w-16 h-16">
                        <img class="w-16" src="{{ asset('assets/images/icon-split.png') }}" alt="sap-b1-pattern">
                    </div>
                    <div class="flex flex-col gap-4">
                        <h6 class="font-semibold text-2xl h-16 text-ellipsis overflow-hidden">Super Fast</h6>
                        <p class="w-11/12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="block">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
                <div data-aos="zoom-in-down" data-aos-delay="200"
                    class="hover:scale-115 flex flex-col gap-8 justify-end cursor-default duration-300 ease-linear lg:h-[440px] sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)] bg-white rounded px-6 py-10">
                    <div class="w-16 h-16">
                        <img class="w-16" src="{{ asset('assets/images/icon-statistics.png') }}"
                            alt="sap-b1-pattern">
                    </div>
                    <div class="flex flex-col gap-4">
                        <h6 class="font-semibold text-2xl h-16 text-ellipsis overflow-hidden">Save Money</h6>
                        <p class="w-11/12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="block">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
                <div data-aos="zoom-in-left" data-aos-delay="400"
                    class="hover:scale-115 flex flex-col gap-8 justify-end cursor-default duration-300 ease-linear lg:h-[440px] sm:basis-[calc(50%-2rem)] md:basis-[calc(33.33%-2rem)] bg-white rounded px-6 py-10">
                    <div class="w-16 h-16">
                        <img class="w-16" src="{{ asset('assets/images/icon-document.png') }}"
                            alt="sap-b1-pattern">
                    </div>

                    <div class="flex flex-col gap-4">
                        <h6 class="font-semibold text-2xl h-16 text-ellipsis overflow-hidden">Online Support</h6>
                        <p class="w-11/12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="block">
                        <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Learn
                            More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="bg-white relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-40 z-10 bg-no-repeat bg-center bg-[length:70%_auto] bg-[url('../assets/images/map.webp')]">
        <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                    App Screenshots</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <div>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                            class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">{{ __('Demo') }}
                            ›</button>
                    </div>
                </div>
            </div>
            {{-- <div class="flex flex-row flex-wrap justify-between gap-8 mt-12 items-end rounded-full bg-"> --}}
            <div class="screenshot-swiper-container w-full overflow-hidden">
                <div class="swiper-wrapper">
                    @php
                        $screenshots = [
                            [
                                'img' => 'assets/images/screenshot-1.png',
                            ],
                            [
                                'img' => 'assets/images/screenshot-2.png',
                            ],
                            [
                                'img' => 'assets/images/screenshot-3.png',
                            ],
                            [
                                'img' => 'assets/images/screenshot-4.png',
                            ],
                            [
                                'img' => 'assets/images/screenshot-1.png',
                            ],
                            [
                                'img' => 'assets/images/screenshot-2.png',
                            ],
                            [
                                'img' => 'assets/images/screenshot-3.png',
                            ],
                            [
                                'img' => 'assets/images/screenshot-4.png',
                            ],
                        ];
                    @endphp

                    @foreach ($screenshots as $index => $screenshot)
                        @php
                            $backgrounds = ['bg-bg-secondary', 'bg-border-main', 'bg-bg-gray'];
                            $backgroundClass = $backgrounds[$index % 3];
                        @endphp
                        <div class="swiper-slide flex-shrink-0 w-full !h-auto">
                            <div
                                class="group w-full aspect-[4/3] bg-{{ $index % 3 == 0 ? 'bg-secondary' : ($index % 3 == 1 ? 'border-main' : 'bg-gray') }} rounded-3xl p-1 flex cursor-default duration-300 ease-in overflow-hidden">
                                <img class="w-full h-full rounnded-3xl" src="{{ asset($screenshot['img']) }}"
                                    alt="laptop-sap-b1">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section
        class="bg-[#f8faf8] relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-[#f8faf8] before:opacity-60 z-10 bg-no-repeat bg-center">
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex flex-col items-center sm:flex-row gap-8 md:gap-4">
                <div class="basis-1/2 flex flex-col flex-start justify-evenly gap-4">
                    <h1 data-aos="fade-up"
                        class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                        Revier Is Mobile
                        Layout Ready
                    </h1>
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat uis aute irure.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat uis aute irure.</span>
                </div>
                <div class="basis-1/2" data-aos="fade-up">
                    <img src="{{ asset('assets/images/sap-mobile-adaption.png') }}" alt="mobile-adaption">
                </div>
            </div>
        </div>
    </section>

    <section
        class="relative bg-white bg-no-repeat bg-bottom bg-[length:60%_auto] before:bg-white before:opacity-95 before:absolute before:w-full before:h-full">
        <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-6 md:py-24 ">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                    Providing Services</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <div>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                            class="rounded-full bg-white text-text-primary border border-border-main font-semibold px-6 py-4">{{ __('Demo') }}
                            ›</button>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-6xl mx-auto px-0 md:px-6 md:py-12">
                <div x-data="{ activeTab: 1 }">
                    <!-- Buttons -->
                    <div class="flex justify-center">
                        <div role="tablist"
                            class="max-[480px]:max-w-[180px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 mb-8 min-[480px]:mb-12"
                            @keydown.right.prevent.stop="$focus.wrap().next()"
                            @keydown.left.prevent.stop="$focus.wrap().prev()"
                            @keydown.home.prevent.stop="$focus.first()" @keydown.end.prevent.stop="$focus.last()">
                            <!-- Button #1 -->
                            <button id="tab-1"
                                class="flex-1 text-lg font-medium h-10 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                                :class="activeTab === 1 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                                :tabindex="activeTab === 1 ? 0 : -1" :aria-selected="activeTab === 1"
                                aria-controls="tabpanel-1" @click="activeTab = 1"
                                @focus="activeTab = 1">Dark</button>
                            <!-- Button #2 -->
                            <button id="tab-2"
                                class="flex-1 text-lg font-medium h-10 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                                :class="activeTab === 2 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                                :tabindex="activeTab === 2 ? 0 : -1" :aria-selected="activeTab === 2"
                                aria-controls="tabpanel-2" @click="activeTab = 2"
                                @focus="activeTab = 2">Light</button>
                        </div>
                    </div>

                    <!-- Tab panels -->
                    <div class="w-full md:w-[640px] lg:w-[1024px] mx-auto">
                        <div class="relative flex flex-col">

                            <!-- Panel #1 -->
                            <article id="tabpanel-1"
                                class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                                role="tabpanel" tabindex="0" aria-labelledby="tab-1" x-show="activeTab === 1"
                                x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                                x-transition:enter-start="opacity-0 -translate-y-8"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-12">
                                <figure class="min-[480px]:w-1/2 p-2">
                                    <img class="w-full h-[280px] min-[480px]:h-full object-cover rounded-lg"
                                        {{-- width="304" height="214" --}}
                                        {{-- src="https://cruip-tutorials.vercel.app/unconventional-tabs/tabs-image-01.jpg" --}}
                                        src="{{ asset('assets/images/sap-tab-1.png') }}"
                                        alt="Tab 01" />
                                </figure>
                                <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3 gap-4">
                                    <div class="flex justify-between items-center mb-1">
                                        <header>
                                            <div class="text-xl font-bold text-text-main">Title</div>
                                            <h1 class="text-xl font-medium text-text-primary">Subtitle</h1>
                                        </header>
                                    </div>
                                    <div class="text-slate-500 text-sm line-clamp-4 mb-2">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                    </div>
                                </div>
                            </article>

                            <!-- Panel #2 -->
                            <article id="tabpanel-2"
                                class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                                role="tabpanel" tabindex="0" aria-labelledby="tab-2" x-show="activeTab === 2"
                                x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                                x-transition:enter-start="opacity-0 -translate-y-8"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-12">
                                <figure class="min-[480px]:w-1/2 p-2">
                                    <img class="w-full h-[280px] min-[480px]:h-full object-cover rounded-lg"
                                        {{-- width="304" height="214" --}}
                                        {{-- src="https://cruip-tutorials.vercel.app/unconventional-tabs/tabs-image-02.jpg" --}}
                                        src="{{ asset('assets/images/sap-tab-2.png') }}"
                                        alt="Tab 02" />
                                </figure>
                                <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3 gap-4">
                                    <div class="flex justify-between items-center mb-1">
                                        <header>
                                            <div class="text-xl font-bold text-text-main">Title</div>
                                            <h1 class="text-xl font-medium text-text-primary">Subtitle</h1>
                                        </header>
                                    </div>
                                    <div class="text-slate-500 text-sm line-clamp-4 mb-2">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0">
            <div class="relative flex flex-col items-center pb-12 sm:pb-24">
                <img data-aos="fade-down" class="w-12 absolute top-8 left-1 sm:top-24 sm:left-4"
                    src="{{ asset('assets/images/banner-item-chat.webp') }}" alt="chat-with-us">
                <img data-aos="fade-down" class="w-8 sm:w-10 absolute top-16 right-1 sm:top-24 sm:right-4"
                    src="{{ asset('assets/images/banner-item-lightning.webp') }}" alt="fast-erp">
                <h1 data-aos="fade-down" class="text-4xl md:text-5xl font-bold mt-4 sm:mt-0">{{__('Best Pricing')}}</h1>
                <p data-aos="fade-down" class="max-w-1/2 text-center text-wrap mt-8 font-medium">{{__('Dashboard BI Report works for businesses of all sizes, for the lowest price')}}.</p>
                <div class="flex flex-row flex-wrap w-full justify-center gap-8 mt-8 sm:mt-12">
                    <article data-aos="fade-up" data-aos-delay="200" class="md:basis-[calc(33.33%-2rem)]">
                        <div
                            class="group flex flex-col gap-8 items-center p-8 bg-border-main rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5">
                                        <path
                                            d="M17.252 12.49c-.284 2.365-1.833 3.31-2.502 3.996c-.67.688-.55.825-.505 1.834a.916.916 0 0 1-.916.971h-2.658a.92.92 0 0 1-.917-.971c0-.99.092-1.22-.504-1.834c-.76-.76-2.548-1.833-2.548-4.784a5.307 5.307 0 1 1 10.55.788" />
                                        <path
                                            d="M10.46 19.236v1.512c0 .413.23.752.513.752h2.053c.285 0 .514-.34.514-.752v-1.512m-2.32-10.54a2.227 2.227 0 0 0-2.226 2.227m10.338.981h1.834m-3.68-6.012l1.301-1.301M18.486 17l1.301 1.3M12 2.377V3.86m-6.76.73l1.292 1.302M4.24 18.3L5.532 17m-.864-5.096H2.835" />
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-8">
                                <h2 class="text-3xl font-bold text-center">{{__('Basic')}}</h2>
                                <p class="text-lg font-semibol text-center">{{__('You can try for free before you commit. Contact us to get a demo')}}.</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold">USD</span>
                                <span class="font-bold text-5xl">8.0</span>
                                <span class="font-bold">/month</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Fully Dashboard and Reporting')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Connect with more information system')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M8 8L16 16"></path>
                                            <path d="M16 8L8 16"></path>
                                        </g>
                                    </svg>

                                    <span class="text-sm font-medium">{{__('Customizations')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M8 8L16 16"></path>
                                            <path d="M16 8L8 16"></path>
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Best Offer Additional Services')}}</span>
                                </div>
                            </div>
                            <div class="block mx-auto">
                                <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Choose
                                    Plan</button>
                            </div>
                        </div>
                    </article>
                    <article data-aos="fade-up" data-aos-delay="400" class="md:basis-[calc(33.33%-2rem)]">
                        <div
                            class="group flex flex-col gap-8 items-center p-8 text-white bg-text-primary rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                            <div class="w-auto h-16 flex items-center text-text-main">
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    viewBox="0 0 1024 1024">
                                    <path fill="currentColor"
                                        d="M1018.72 295.472L878.848 28.03C870.688 12.43 849.584-.322 832-.322H510.064c-.351-.015-.703-.11-1.054-.127c-.288 0-.56.113-.849.128h-316.16c-17.6 0-38.752 12.72-47.024 28.256L5.473 290.223c-8.289 15.536-6.624 39.937 3.631 54.257l480.016 669.152c5.153 7.184 12 10.815 18.832 10.815c6.785 0 13.584-3.536 18.768-10.591L1014.624 349.6c10.384-14.193 12.256-38.544 4.096-54.128m-76.353-7.843H770.911l68.656-196.608zM575.343 63.677h205.968l-63.888 182.928zm92.895 223.952H370.591L511.263 85.533zm-354.351-30.544L249.71 63.677h198.816zm366.863 94.544L508.718 844.173L345.262 351.629zM436.926 831.085L92.99 351.629h184.832zm311.616-479.456H933.71l-352.976 480.56zM188.478 82.413l68.096 205.216H79.326z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-8">
                                <h2 class="text-3xl font-bold text-center">{{__('Professional')}}</h2>
                                <p class="text-lg font-semibol text-center">{{__('You can try for free before you commit. Contact us to get a demo.')}}.</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold">USD</span>
                                <span class="font-bold text-5xl">166.0</span>
                                <span class="font-bold">/{{__('month')}}</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Fully Dashboard and Reporting')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Connect with more information system')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                         viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Customizations')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <path d="M8 8L16 16"></path>
                                            <path d="M16 8L8 16"></path>
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Best Offer Additional Services')}}</span>
                                </div>
                            </div>
                            <div class="block mx-auto">
                                <button class="rounded-full bg-white text-text-primary font-semibold px-6 py-4">Choose
                                    Plan</button>
                            </div>
                        </div>
                    </article>
                    <article data-aos="fade-up" data-aos-delay="600" class="md:basis-[calc(33.33%-2rem)]">
                        <div
                            class="group flex flex-col gap-8 items-center p-8 bg-border-main rounded-3xl cursor-default duration-200 hover:scale-95 ease-linear">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m12 11.925l-1.7 1.3q-.15.125-.3.013t-.1-.288l.65-2.1l-1.75-1.4q-.125-.125-.075-.287T8.95 9h2.15l.65-2.05q.05-.175.25-.175t.25.175L12.9 9h2.125q.175 0 .238.163t-.063.287l-1.775 1.4l.65 2.1q.05.175-.1.288t-.3-.013zM12 21l-4.675 1.55q-.5.175-.913-.125t-.412-.8v-6.35q-.95-1.05-1.475-2.4T4 10q0-3.35 2.325-5.675T12 2t5.675 2.325T20 10q0 1.525-.525 2.875T18 15.275v6.35q0 .5-.413.8t-.912.125zm0-5q2.5 0 4.25-1.75T18 10t-1.75-4.25T12 4T7.75 5.75T6 10t1.75 4.25T12 16m-4 4.025L12 19l4 1.025v-3.1q-.875.5-1.888.788T12 18t-2.113-.288T8 16.926zm4-1.55" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-8">
                                <h2 class="text-3xl font-bold text-center">{{__('Premium')}}</h2>
                                <p class="text-lg font-semibol text-center">{{__('You can try for free before you commit. Contact us to get a demo.')}}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-bold">USD</span>
                                <span class="font-bold text-5xl">416.0</span>
                                <span class="font-bold">/{{__('month')}}}</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Fully Dashboard and Reporting')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Connect with more information system')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Customizations')}}</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                         viewBox="0 0 24 24" class="text-icon-main">
                                        <g fill="#000" stroke="#fff" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12l3 3l5-6" />
                                        </g>
                                    </svg>
                                    <span class="text-sm font-medium">{{__('Best Offer Additional Services')}}</span>
                                </div>
                            </div>
                            <div class="block mx-auto">
                                <button class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Choose
                                    Plan</button>
                            </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section
        class="relative bg-bg-dark bg-no-repeat bg-bottom bg-[length:60%_auto] before:bg-bg-dark before:opacity-95 before:absolute before:w-full before:h-full">
        <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed text-white">
                    How It Works</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg text-white">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <div>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                            class="rounded-full bg-white text-text-primary font-semibold px-6 py-4">{{ __('Demo') }}
                            ›</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                {{-- <div class="flex flex-col md:flex-row justify-between items-center md:items-start md:space-x-4 p-4">
                    <!-- Left Column -->
                    <div class="flex flex-col content-between items-center md:items-start space-y-4 text-center md:text-left">
                        <div>
                            <h2 class="text-lg font-semibold text-white">Invest in ELSS</h2>
                            <p class="text-white">These are tax-saving mutual funds that you can use to save income tax of up to ₹1.5 lakh under Section 80C.</p>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-white">Lowest lock-in of 3 years</h2>
                            <p class="text-white">ELSS offer the lowest lock-in period among other tax saving options.</p>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold tetxt-white">Higher interest rate</h2>
                            <p class="text-white">ELSS give 2% higher interest rates (14-16%) than FD (6-8%).</p>
                        </div>
                    </div>

                    <!-- Image (Hidden on small screens) -->
                    <div class="my-4 md:my-0 hidden md:block">
                        <img class="" src="{{ asset('assets/images/erp-step-illustration.webp') }}" alt="erp-illustration">
                    </div>

                    <!-- Right Column -->
                    <div class="flex flex-col items-center md:items-start space-y-4 text-center md:text-left">
                        <div>
                            <h2 class="text-lg font-semibold">When is tax applicable</h2>
                            <p>Returns are taxable (10%) if gains are greater than ₹1 lakh in the ELSS mutual funds.</p>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold">Begin from ₹1000</h2>
                            <p>Invest as low as ₹1000 per month, no maximum investment limit.</p>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold">Other benefits</h2>
                            <p>Will give inflation-beating returns. Best option for long-term wealth.</p>
                        </div>
                    </div>
                </div> --}}

                <div class="rounded-2xl cursor-default flex flex-col gap-6 hover:bg-[#3D1473] px-4 py-6 duration-100 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            1</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">Start Trial</h6>
                    <p class="text-white text-center md:text-left">Praesent dapibus, neque id cursus fau cibus, tortorom neque egestas augueu
                        vulputate magna eund magna eros eu erat.</p>
                </div>
                <div class="rounded-2xl cursor-default flex flex-col gap-6 hover:bg-[#3D1473] px-4 py-6 duration-100 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            2</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">Start Trial</h6>
                    <p class="text-white text-center md:text-left">Praesent dapibus, neque id cursus fau cibus, tortorom neque egestas augueu
                        vulputate magna eund magna eros eu erat.</p>
                </div>
                <div class="rounded-2xl cursor-default flex flex-col gap-6 hover:bg-[#3D1473] px-4 py-6 duration-100 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            3</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">Start Trial</h6>
                    <p class="text-white text-center md:text-left">Praesent dapibus, neque id cursus fau cibus, tortorom neque egestas augueu
                        vulputate magna eund magna eros eu erat.</p>
                </div>
                <div class="rounded-2xl cursor-default flex flex-col gap-6 hover:bg-[#3D1473] px-4 py-6 duration-100 ease-linear">
                    <div class="flex justify-center md:block">
                        <div
                            class="font-bold text-xl aspect-1 rounded-full w-12 h-12 p-3 bg-white flex items-center justify-center text-center">
                            4</div>
                    </div>
                    <h6 class="text-white font-semibold text-lg text-center md:text-left">Start Trial</h6>
                    <p class="text-white text-center md:text-left">Praesent dapibus, neque id cursus fau cibus, tortorom neque egestas augueu
                        vulputate magna eund magna eros eu erat.</p>
                </div>
            </div>

        </div>
    </section>

    <section
        class="bg-white relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-40 z-10 bg-no-repeat bg-center bg-[length:70%_auto] bg-[url('../assets/images/sap-faq-bg.webp')]">
        <div class="relative max-w-7xl mx-auto flex flex-col gap-8 px-4 sm:px-2 xl:px-0 py-6 pt-8 md:py-12 lg:py-24">
            <div class="flex flex-col sm:flex-row gap-4">
                <h1 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed basis-1/4">
                    FAQ</h1>
                <div class="flex flex-col flex-start justify-evenly gap-4">
                    <span data-aos="fade-up" class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus,
                        luctus
                        nec
                        ullamcorper mattis, pulvinar dapibus leo.</span>
                    <div>
                        <button x-data @click="$dispatch('open-modal', 'contact-modal')" data-aos="fade-left"
                            class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">{{ __('Demo') }}
                            ›</button>
                    </div>
                </div>
            </div>

            <div class="container mx-auto">
                <div class="grid md:grid-cols-1 gap-8" x-data="{ selected: 1 }">
                    <div class="bg-white max-w-full mx-auto shadow">
                        <ul class="shadow-box">
                            <li class="relative border-b border-bg-gray">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between"> <span class="font-semibold"> Is
                                            there a refund policy?
                                        </span>
                                        <svg :class="{ 'transform rotate-180': selected == 1 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>DreamSeat Enterprise Xperience Partners shall issue a full refund to any
                                            member who wishes to cancel their enrolment within 45 days prior to the
                                            start of the season. Stadium seat memberships are not refundable after the
                                            first home event of the football season. If a patron's seat is damaged or
                                            removed, DreamSeat EXP shall replace the item at no cost to the customer.
                                            Please contact the customer service hotline (864-626-9676) with any
                                            questions regarding the return policy. All sales are final. Refunds and
                                            adjustments will be considered on an individual basis.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between"> <span class="font-semibold"> Why
                                            Can't I log in? </span>
                                        <svg :class="{ 'transform rotate-180': selected == 2 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>If you are unable to log in, please make sure you have created a new account
                                            first. This ordering portal is different than the one where you purchase
                                            your Texas A&M game tickets.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between"> <span class="font-semibold"> Why
                                            Can't I log in? </span>
                                        <svg :class="{ 'transform rotate-180': selected == 3 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 3 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>If you are unable to log in, please make sure you have created a new account
                                            first. This ordering portal is different than the one where you purchase
                                            your Texas A&M game tickets.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 4 ? selected = 4 : selected = null">
                                    <div class="flex items-center justify-between"> <span class="font-semibold"> Why
                                            Can't I log in? </span>
                                        <svg :class="{ 'transform rotate-180': selected == 4 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 4 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>If you are unable to log in, please make sure you have created a new account
                                            first. This ordering portal is different than the one where you purchase
                                            your Texas A&M game tickets.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 5 ? selected = 5 : selected = null">
                                    <div class="flex items-center justify-between"> <span class="font-semibold"> Why
                                            Can't I log in? </span>
                                        <svg :class="{ 'transform rotate-180': selected == 5 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 5 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>If you are unable to log in, please make sure you have created a new account
                                            first. This ordering portal is different than the one where you purchase
                                            your Texas A&M game tickets.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button" class="w-full px-6 py-6 text-left"
                                    @click="selected !== 6 ? selected = 6 : selected = null">
                                    <div class="flex items-center justify-between"> <span class="font-semibold"> Why
                                            Can't I log in? </span>
                                        <svg :class="{ 'transform rotate-180': selected == 6 }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container2"
                                    x-bind:style="selected == 6 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="px-6 pb-6">
                                        <p>If you are unable to log in, please make sure you have created a new account
                                            first. This ordering portal is different than the one where you purchase
                                            your Texas A&M game tickets.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 pt-8 sm:pt-12 flex flex-col gap-4 sm:flex-row md:gap-0">
            <div
                class="relative flex-1 flex flex-col justify-center gap-8 before:absolute before:top-0 before:right-0 before:w-[60px] before:h-[61px] before:bg-contain pr-4 sm:pr-6 md:pr-8 lg:pr-16">
                <h3 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                    Free & Easy Customizable System & Layout</h3>
                <p data-aos="fade-up" class="text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat uis
                    aute irure.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat uis aute irure.</p>
                <ul class="list-disc list-inside space-y-4">
                    <li data-aos="fade-up" data-aos-delay="100" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Time-saving, immediate application</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Comprehensive management information</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="500" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Process optimization</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="700" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">For executives and chief accountants</span>
                    </li>
                </ul>
                <div data-aos="fade-up" class="w-fit">
                    <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Demo</button>
                </div>
            </div>

            <div id="slide-up-animation" class="w-full md:w-1/2 relative flex">
                <img class="object-cover" style="height: -webkit-fill-available; width: -webkit-fill-available"
                    src="{{ asset('assets/images/sap-customization-1.png') }}" alt="erp-solution">
            </div>
        </div>
    </section>

    <section>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-2 xl:px-0 pb-12 sm:pb-16 flex flex-col gap-4 md:flex-row-reverse md:gap-0 mt-8 md:mt-0">
            <div
                class="relative flex-1 flex flex-col justify-center gap-8 before:absolute before:top-0 before:right-0 before:w-[60px] before:h-[61px] before:bg-contain pl-0 md:pl-8 lg:pl-16">
                <h3 data-aos="fade-up"
                    class="text-4xl md:text-5xl font-bold leading-snug md:leading-normal lg:leading-relaxed">
                    Revier Is Very Good of Anytype App Landingpage</h3>
                <p data-aos="fade-up" class="text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat uis
                    aute irure.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat uis aute irure.</p>
                <ul class="list-disc list-inside space-y-4">
                    <li data-aos="fade-up" data-aos-delay="100" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Time-saving, immediate application</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Comprehensive management information</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="500" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">Process optimization</span>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="700" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"
                            class="text-icon-main">
                            <g fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path d="m8 12l3 3l5-6" />
                            </g>
                        </svg>
                        <span class="text-lg font-semibold">For executives and chief accountants</span>
                    </li>
                </ul>
                <div data-aos="fade-up" class="w-fit">
                    <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                        class="rounded-full text-white bg-text-primary font-semibold px-6 py-4">Demo</button>
                </div>
            </div>
            <div id="slide-up-animation" class="w-full md:w-1/2 relative flex">
                <img class="object-cover" style="height: -webkit-fill-available; width: -webkit-fill-available"
                    src="{{ asset('assets/images/sap-customization-2.png') }}" alt="erp-solution">
            </div>
        </div>
    </section>

    <section>
        <div class="relative max-w-7xl mx-auto flex flex-col px-4 sm:px-2 xl:px-0 py-12 sm:py-24">
            <div
                class="relative flex px-10 py-16 sm:px-16 sm:py-24 rounded-3xl bg-no-repeat bg-cover bg-[url('../assets/images/banner-bg.webp')] before:absolute before:w-full before:h-full before:rounded-3xl before:top-0 before:left-0 before:bg-bg-main before:opacity-70">
                <div class="flex flex-col gap-4 sm:gap-0 sm:flex-row justify-between sm:items-center z-10">
                    <h1 data-aos="fade-up"
                        class="text-3xl sm:text-5xl text-white font-bold cursour-default leading-snug md:leading-normal lg:leading-relaxed">
                        Are You
                        Ready to Boost Your
                        Business Performance?</h1>
                    <div>
                        <button data-aos="fade-up" x-data @click="$dispatch('open-modal', 'contact-modal')"
                            class="rounded-full text-nowrap bg-icon-main font-semibold px-6 py-4">Register
                            Demo</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <!-- Import Swiper and initialize -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
        <script type="module">
            const Swipes = new Swiper('.partner-swiper-container', {
                loop: true,
                // slidesPerView: 2,
                watchOverflow: false,
                breakpoints: {
                    1024: {},
                    768: {
                        slidesPerView: 2,
                    },
                    480: {
                        slidesPerView: 1,
                    },
                },
            });

            const swiper = new Swiper('.screenshot-swiper-container', {
                slidesPerView: 2,
                spaceBetween: 20,
                autoplay: {
                    delay: 2500,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    0: {
                        slidesPerView: 1,
                    },
                },
            });

            AOS.init({
                once: true,
                duration: 500,
                easing: 'ease-in-out',
                delay: 100,
            });

            document.addEventListener('DOMContentLoaded', function() {
                var options = {
                    useEasing: true,
                    useGrouping: true,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    enableScrollSpy: true,
                    scrollSpyOnce: true
                };
                var countUp = new CountUp("project-quantity", 10, options);
                var countUp2 = new CountUp("country-quantity", 3, options);
                var countUp3 = new CountUp("expert-quantity", 16, options);
            });
        </script>
        <script>
            gsap.registerPlugin(ScrollTrigger);

            gsap.from("#slide-up-animation", {
                y: 300,
                opacity: 0,
                duration: 0.5,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: "#slide-up-animation",
                    start: "top 90%",
                    end: "bottom 5%",
                    // scrub: true         // Đồng bộ hóa hiệu ứng với vị trí cuộn
                }
            });
        </script>
    @endpush
</x-app-layout>
