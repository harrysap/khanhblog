<div x-data="contactPage()" x-init="open = window.innerWidth < 768 ? false : open;
const mediaQuery = window.matchMedia('(min-width: 768px)');
mediaQuery.addEventListener('change', (e) => {
    if (e.matches) {
        open = false;
    }
});

document.addEventListener('DOMContentLoaded', () => {
    scrolled = window.scrollY > 30;
});

window.addEventListener('scroll', () => {
    scrolled = window.scrollY > 30;
});

(async () => {
    const response = await fetch('{{ route('contact.reasons') }}');
    const data = await response.json();
    this.contactReasons = data;
})();

$nextTick(() => {
    document.getElementById('sidebar').classList.remove('hidden');
    document.getElementById('search-section').classList.remove('hidden');
});">

    <nav class="relative z-20">
        <div :class="scrolled ? 'max-w-full px-4 lg:px-6 py-2.5 default:py-4 translate-y-0 w-full rounded-none !top-0' :
            'max-w-default mx-auto py-2.5 default:py-5 px-6 lg:px-8 sm:rounded-full w-auto md:translate-y-[20px]'"
            class="fixed top-0 sm:top-2 left-1/2 transform -translate-x-1/2 w-full z-50 bg-white shadow-md transition-all duration-300 ease-in-out border border-border-main flex justify-between items-center font-manrope">
            <div class="max-w-default mx-auto flex justify-between items-center w-full">
                <!-- Tìm kiếm -->
                <a class="flex gap-4 items-center cursor-pointer" @click="searchShow = true; closing = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                        <path fill="black" fill-rule="evenodd"
                            d="m16.31 15.561l4.114 4.115l-.848.848l-4.123-4.123a7 7 0 1 1 .857-.84M16.8 11a5.8 5.8 0 1 0-11.6 0a5.8 5.8 0 0 0 11.6 0" />
                    </svg>
                    <p class="hidden md:block">
                        Tìm kiếm...
                    </p>
                </a>

                <!-- Logo -->
                <a href="/">
                    <img class="w-36 sm:w-40 transition-all duration-500" :class="scrolled ? 'w-32' : 'w-40'"
                        src="{{ asset('storage/assets/site_logo.png') }}" alt="khanh-nguyen-blog-logo">
                </a>

                <div class="flex gap-6 items-center">
                    <button @click="showModal = true; document.body.classList.add('overflow-hidden');"
                        class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark hidden lg:block">Tư
                        vấn</button>
                    <button class="hover:scale-105 ease-linear duration-300" @click="open = true">
                        <svg width="25px" height="25px" viewBox="0 -0.5 21 21" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>menu_navigation_grid [#1529]</title>
                            <desc>Created with Sketch.</desc>
                            <defs>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -200.000000)"
                                    fill="#000000">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path
                                            d="M60.85,51 L57.7,51 C55.96015,51 54.55,52.343 54.55,54 L54.55,57 C54.55,58.657 55.96015,60 57.7,60 L60.85,60 C62.58985,60 64,58.657 64,57 L64,54 C64,52.343 62.58985,51 60.85,51 M49.3,51 L46.15,51 C44.41015,51 43,52.343 43,54 L43,57 C43,58.657 44.41015,60 46.15,60 L49.3,60 C51.03985,60 52.45,58.657 52.45,57 L52.45,54 C52.45,52.343 51.03985,51 49.3,51 M60.85,40 L57.7,40 C55.96015,40 54.55,41.343 54.55,43 L54.55,46 C54.55,47.657 55.96015,49 57.7,49 L60.85,49 C62.58985,49 64,47.657 64,46 L64,43 C64,41.343 62.58985,40 60.85,40 M52.45,43 L52.45,46 C52.45,47.657 51.03985,49 49.3,49 L46.15,49 C44.41015,49 43,47.657 43,46 L43,43 C43,41.343 44.41015,40 46.15,40 L49.3,40 C51.03985,40 52.45,41.343 52.45,43"
                                            id="menu_navigation_grid-[#1529]">

                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
    </nav>

    <!-- Sidebar -->
    <div x-show="open" x-init="$watch('open', value => document.body.classList.toggle('overflow-hidden', value))" @click="open = false" @keydown.escape.window="open = false"
        class="fixed w-screen h-screen top-0 bottom-0 z-30 inset-0 flex items-end bg-bg-overlay bg-opacity-30 sm:items-center sm:justify-center hidden"
        id="sidebar" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <aside @click.stop
            class="fixed top-0 right-0 z-50 w-80 h-screen bg-white dark:bg-white transform transition-transform transition-full duration-500 ease-in-out"
            x-show="open" x-transition:enter="transform transition ease-in duration-500 transition-full"
            x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transform transition ease-out duration-500 transition-full"
            x-transition:leave-start="opacity-100" x-transition:leave-end="translate-x-full" aria-label="Sidebar">
            <div class="h-full px-6 py-4 overflow-y-auto mt-6 relative overflow-x-hidden">
                <div class="overflow-x-hidden">
                    <div class="w-24 h-10 absolute rounded-full bg-btn-bg flex items-center pl-3 text-white text-2xl font-bold ease-linear duration-200 -right-14 hover:-translate-x-2 cursor-pointer"
                        @click="open = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m7 7l10 10M7 17L17 7" />
                        </svg>
                    </div>
                </div>
                <div class="shrink-0 flex flex-col justify-center items-center pt-12 pb-8 gap-3">
                    <a href="/">
                        <div>
                            <img class="w-40" src="{{ asset('storage/assets/site_logo.png') }}"
                                alt="khanh-nguyen-blog-logo">
                        </div>
                    </a>
                    <p class="text-center text-xs">Suy nghĩ, ý tưởng và câu chuyện.</p>
                </div>
                <ul class="space-y-2">
                    <li>
                        <a href="/"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                            <span class="ms-3 text-text-primary">Trang Chủ</span>
                        </a>
                    </li>
                    {{-- <li>
                        <button @click="openService = !openService"
                            class="flex text-primary-500 focus:bg-primary-100 items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="ecommerce-menu">
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-text-primary">{{ __('Services') }}</span>
                            <svg class="w-3 h-3 text-text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="ecommerce-menu" x-show="openService" class="py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Business Process Solution') }}</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Technology Solutions Consulting') }}</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Advisory Services') }}</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Tax Services') }}</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Audit and Assurance') }}</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Korean and Japanese Desk') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button @click="openSolution = !openSolution"
                            class="flex text-primary-500 focus:bg-primary-100 items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="ecommerce-menu">
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-text-primary">{{ __('Solutions') }}</span>
                            <svg class="w-3 h-3 text-text-primary" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="ecommerce-menu" x-show="openSolution" class="py-2 space-y-2">
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('SAP Business One') }}</a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Oracle NetSuite') }}</a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Business Intelligence') }}</a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{ __('Travel & Expense Management') }}</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="/blog/category"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3 text-text-primary">Chủ Đề Mình Viết</span>
                        </a>
                    </li>
                    <li>
                        <a href="/blog"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3 text-text-primary">Tất Cả Bài Viết</span>
                        </a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="flex text-primary-500 focus:bg-primary-100 items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="ms-3 text-text-primary">Liên Hệ</span>
                        </a>
                    </li>
                </ul>
                <div class="flex justify-center gap-4 items-center sm:ms-6 mt-4 mb-8">
                    <button @click="showModal = true; document.body.classList.add('overflow-hidden');"
                        class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark">Đăng ký
                        tư
                        vấn</button>
                </div>
            </div>
        </aside>
    </div>

    <div x-init="$watch('searchShow', value => {
        if (value) {
            $nextTick(() => $refs.searchSectionInput.focus());
        }
        document.body.classList.toggle('overflow-hidden', value);
    })"
        @keydown.escape.window="closing = true; setTimeout(() => {searchShow = false; closing = false; console.log('Test: ', closing)}, 400)"
        x-show="searchShow" x-transition.opacity.duration.400ms
        class="fixed inset-0 bg-bg-overlay bg-opacity-70 flex justify-center items-center z-[1001] hidden"
        id="search-section"
        @click.self="closing = true; setTimeout(() => {searchShow = false; closing = false}, 400)">
        <!-- Container chính của overlay -->
        <div x-show="searchShow" :class="closing ? 'zoom-out' : 'zoom-in'"
            class="relative p-6 text-center max-w-lg w-full">
            <h2 class="text-lg font-semibold mb-8 text-white font-3xl cursor-default">Nhấn nút ESC để đóng</h2>
            <!-- Input search với hiệu ứng -->
            <div>
                <div
                    class="w-full flex justify-between px-3 py-1.5 pl-3.5 border rounded-md bg-white text-sm border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                    <input type="search-section-input" id="search-section-input" name="search-section"
                        x-ref="searchSectionInput" placeholder="Nhập tên bài viết tìm kiếm" x-model="searchText"
                        @keydown.enter="handleEnter"
                        class="focus:outline-none font-manrope w-full placeholder-[#707070]">
                    <div>
                        <button @click="handleEnter"
                            class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Tìm
                            kiếm</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="absolute top-3 right-2 text-white"
            @click="closing = true; setTimeout(() => {searchShow = false; closing = true}, 250)">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path
                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor"
                        d="m12 13.414l5.657 5.657a1 1 0 0 0 1.414-1.414L13.414 12l5.657-5.657a1 1 0 0 0-1.414-1.414L12 10.586L6.343 4.929A1 1 0 0 0 4.93 6.343L10.586 12l-5.657 5.657a1 1 0 1 0 1.414 1.414z" />
                </g>
            </svg>
        </button>
    </div>

    <div x-show="showModal" @keydown.escape.window="showModal = false" x-cloak
        class="fixed inset-0 flex items-center justify-center bg-bg-overlay bg-opacity-30 z-[10003]">
        <div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            @click.away="showModal = false; document.body.classList.remove('overflow-hidden');"
            class="bg-white p-2 sm:p-6 rounded shadow-lg w-screen h-dvh md:h-auto md:w-[50vw] default:w-[40vw] relative flex flex-col justify-between">
            <div
                class="flex flex-col md:flex-row gap-4 overflow-scroll pb-1.5 max-h-[95vh] overflow-scroll md:max-h-auto md:overflow-auto">
                <form action="{{ route('contact.storeWithReason') }}" method="POST" x-ref="contactForm"
                    @submit.prevent="submitForm(e)" id="request-form"
                    class="w-full px-1 pb-4 md:max-h-[85vh] md:overflow-scroll">
                    @csrf
                    <h2 class="text-xl font-bold pb-4  w-full">Nhận tư vấn nhiều hơn</h2>
                    <div class="flex flex-col gap-3 mb-4">
                        <label class="block font-semibold">Họ và tên <span class="text-red-500">*</span></label>
                        <input type="text" x-model="name"
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]"
                            required />
                    </div>
                    <div class="flex flex-col md:grid md:grid-cols-2 gap-3">

                        <div class="flex flex-col gap-3 mb-4">
                            <label class="block font-semibold">Email <span class="text-red-500">*</span></label>
                            <input type="email" x-model="email"
                                class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]"
                                required />
                        </div>
                        <div class="flex flex-col gap-3 mb-4">
                            <label class="block font-semibold">Số điện thoại</label>
                            <input type="text" x-model="phone"
                                class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 mb-4">
                        <label class="block font-semibold">Công ty</label>
                        <input type="text" x-model="company"
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]" />
                    </div>
                    <div class="flex flex-col gap-3 mb-4">
                        <label class="block font-semibold">Thông tin cần tư vấn</label>
                        <select x-model="option" id="contact-reasons"
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                            <option value="" disabled selected>Chọn lý do liên hệ</option>
                        </select>
                    </div>
                    <div class="mb-4 flex flex-col gap-3">
                        <label for="message-input" class="font-semibold">Tin nhắn <span
                                class="text-red-500">*</span></label>
                        <textarea id="message-input" rows="5" x-model="message" required
                            class="w-full px-3 py-2 border rounded-md focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]"></textarea>
                    </div>
                </form>
            </div>
            <div class="flex justify-end right-0 px-3 w-full bg-white rounded-lg">
                <button type="button" @click="showModal = false; document.body.classList.remove('overflow-hidden');"
                    class="px-4 py-2 bg-gray-300 rounded border border-btn-bg sm:border-none mr-2 sm:w-auto w-1/2">Hủy</button>
                <button type="button" @click="submitForm"
                    class="py-2 px-[22px] bg-btn-bg rounded sm:w-auto w-1/2 text-white ease duration-200 hover:bg-btn-dark lg:block"
                    x-bind:class="{ 'opacity-50 cursor-not-allowed': isLoading }" x-bind:disabled="isLoading">
                    <span x-show="!isLoading">Gửi</span>
                    <div x-show="isLoading" class="flex justify-center items-center">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        <span class="loader">Đang tải...</span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div x-show="showSuccessModal" x-cloak
        class="fixed inset-0 flex items-center justify-center bg-bg-overlay bg-opacity-30 z-[10004]">
        <div x-show="showSuccessModal" x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
            class="bg-white p-4 sm:p-6 rounded shadow-lg w-screen md:w-[30vw] max-w-md text-center">
            <div class="flex flex-col items-center space-y-4">
                <svg class="text-green-500" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                    <g fill="none" fill-rule="evenodd">
                        <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                        <path fill="currentColor" d="M19.495 3.133a1 1 0 0 1 1.352.309l.99 1.51a1 1 0 0 1-.155 1.279l-.003.004l-.014.013l-.057.053l-.225.215a84 84 0 0 0-3.62 3.736c-2.197 2.416-4.806 5.578-6.562 8.646c-.49.856-1.687 1.04-2.397.301l-6.485-6.738a1 1 0 0 1 .051-1.436l1.96-1.768A1 1 0 0 1 5.6 9.2l3.309 2.481c5.169-5.097 8.1-7.053 10.586-8.548m.21 2.216c-2.29 1.432-5.148 3.509-9.998 8.358A1 1 0 0 1 8.4 13.8l-3.342-2.506l-.581.524l5.317 5.526c1.846-3.07 4.387-6.126 6.49-8.438a86 86 0 0 1 3.425-3.552l-.003-.005Z" />
                    </g>
                </svg>
                <h2 class="text-lg font-semibold">Đã gửi yêu cầu thành công</h2>
                <p>Cảm ơn bạn đã liên hệ!</p>
                <button @click="showSuccessModal = false; show = false"
                    class="mt-4 py-2 px-[22px] bg-btn-bg rounded flex-1 sm:flex-auto sm:w-auto text-white ease duration-200 hover:bg-btn-dark lg:block transition">
                    Đóng
                </button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function contactPage() {
                return {
                    open: false,
                    openService: false,
                    openSolution: false,
                    showNotification: true,
                    navTop: '80px',
                    scrolled: false,
                    searchShow: false,
                    closing: false,
                    searchText: '',
                    showModal: false,
                    showSuccessModal: false,
                    name: '',
                    email: '',
                    phone: '',
                    company: '',
                    option: '1',
                    message: '',
                    isLoading: false,
                    contactReasons: [],
                    submitForm() {
                        const form = document.getElementById('request-form');
                        const formData = new FormData(form);

                        formData.append('full_name', this.name);
                        formData.append('email', this.email);
                        formData.append('phone_number', this.phone);
                        formData.append('company', this.company);
                        formData.append('contact_reason_id', this.option);
                        formData.append('message', this.message);;

                        if (this.name && this.email && this.message) {
                            this.isLoading = true;
                            fetch(form.action, {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'Accept': 'application/json'
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        form.reset();
                                        this.showModal = false;
                                        this.showSuccessModal = true;
                                    } else {
                                        alert('Đã có lỗi xảy ra! Vui lòng thử lại sau.');
                                    }
                                })
                                .catch(error => {
                                    alert('Đã có lỗi xảy ra! Vui lòng thử lại sau.');
                                    console.error('Error:', error);
                                })
                                .finally(() => {
                                    console.log("bị gì ta: ", this.isLoading)
                                    this.isLoading = false;
                                });
                        } else {
                            alert("Hãy điền vào những trường bắt buộc có dấu *");
                        }
                    }
                }
            }

            (async () => {
                try {
                    const response = await fetch('{{ route('contact.reasons') }}');
                    const data = await response.json();

                    const selectElement = document.getElementById('contact-reasons');

                    data.forEach(reason => {
                        const option = document.createElement('option');
                        option.value = reason.id;
                        option.textContent = reason.name;
                        selectElement.appendChild(option);
                    });
                } catch (error) {
                    console.error('Error fetching contact reasons:', error);
                }
            })();

            function handleEnter() {
                if (this.searchText.trim()) {
                    const searchSlug = this.searchText.trim().toLowerCase().replace(/\s+/g, '-');
                    window.location.href = `/blog/search?query=${searchSlug}`;
                }
            }

            function scrollAndFocus() {
                const targetId = window.location.pathname === '/' ? 'register-form-home' : 'register-form';
                const inputId = window.location.pathname === '/' ? 'email-subcribe-input-home' : 'email-subcribe-input';

                document.getElementById(targetId).scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });

                document.getElementById(inputId).focus();
            }
        </script>
    @endpush
</div>
