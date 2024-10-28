<x-layouts.appclient>
    <div class="" x-data="home()">
        <section
            class="max-w-default mx-auto px-4 sm:px-6 default:px-12 flex flex-col-reverse md:flex-row justify-between gap-14 md:pt-6">
            <div class="self-center">
                <h3 class="font-semibold font-manrope text-4xl mb-6 leading-snug">Hi, mình là <span
                        class="text-btn-bg">Khanh Nguyen</span> 👋</h3>
                <p class="font-manrope leading-relaxed text-base mb-8">
                    Mình hiện làm việc trong ngành SAP ở Việt Nam với vị trí <b>Tư vấn triển khai SAP</b> cho ngành sản
                    xuất, bán lẻ và thương mại.
                    Blog này mình chia sẻ các thông tin xung quanh hệ thống SAP mà mình tìm hiểu được. Đôi khi bài viết
                    dài dòng, lan man và khó hiểu nhưng hi vọng cũng cung cấp thông tin có ích cho mọi người.
                    Cám ơn mọi người!!!
                </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" id="register-form-home"
                    @submit="handleSubmitRegisterHome(event)" class="flex flex-col gap-2 font-medium">
                    @csrf
                    <label for="email-subcribe-input-home" class="font-manrope text-sm">Đăng ký nhận thông tin bài viết
                        mới của mình qua email nhé </label>
                    <div
                        class="w-full flex justify-between px-3 py-1.5 pl-3.5 gap-3 border rounded-md bg-white text-sm border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                        <input type="email-subcribe-input" id="email-subcribe-input-home" name="email" x-ref="email"
                            placeholder="Nhập địa chỉ email"
                            class="focus:outline-none font-manrope w-full placeholder-[#707070]">
                        <div>
                            <button type="submit"
                                class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap"
                                x-bind:class="{ 'opacity-50 cursor-not-allowed': isLoading }"
                                x-bind:disabled="isLoading">
                                <span x-show="!isLoading">Đăng ký</span>
                                <div x-show="isLoading" class="flex">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    <span class="loader">Đang tải...</span>
                                </div>
                            </button>
                        </div>
                </form>
            </div>
    </div>
    <div>
        <img class="mx-auto md:w-11/12 w-3/4 animate-morph" src="{{ asset('/storage/assets/image_home.png') }}"
            alt="khanh-nguyen-blog-logo">
    </div>
    </section>
    <section class="pt-8 max-w-default mx-auto px-4 sm:px-6 default:px-0">
        <div class="flex gap-4 justify-center items-center">
            <div class="text-[#FF2AAC]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#1F1B1B"
                        d="m6.67 7.914 3.062-4.143C11.71 1.093 12.7-.246 13.624.037c.923.283.923 1.925.923 5.21v.31c0 1.185 0 1.777.379 2.148l.02.02c.387.363 1.003.363 2.236.363 2.22 0 3.329 0 3.704.673l.018.034c.354.683-.289 1.553-1.574 3.29l-3.062 4.144c-1.98 2.678-2.969 4.017-3.892 3.734-.923-.283-.923-1.925-.923-5.21v-.31c0-1.184 0-1.777-.379-2.148l-.02-.02c-.387-.363-1.003-.363-2.236-.363-2.22 0-3.329 0-3.704-.673a1.084 1.084 0 0 1-.018-.034c-.354-.683.289-1.552 1.574-3.29Z" />
                    <path fill="currentColor"
                        d="m5.67 7.914 3.062-4.143C10.71 1.093 11.7-.246 12.624.037c.923.283.923 1.925.923 5.21v.31c0 1.185 0 1.777.379 2.148l.02.02c.387.363 1.003.363 2.236.363 2.22 0 3.329 0 3.704.673l.018.034c.354.683-.289 1.553-1.574 3.29l-3.062 4.144c-1.98 2.678-2.969 4.017-3.892 3.734-.923-.283-.923-1.925-.923-5.21v-.31c0-1.184 0-1.777-.379-2.148l-.02-.02c-.387-.363-1.003-.363-2.236-.363-2.22 0-3.329 0-3.704-.673a1.084 1.084 0 0 1-.018-.034c-.354-.683.289-1.552 1.574-3.29Z" />
                </svg>
            </div>
            <h2 class="font-bold text-lg">Các Chủ Đề Mình Viết</h2>
        </div>
        @php
            $categoryList = getCategory(6);
        @endphp
        <div class="mx-auto w-full lg:w-11/12 mt-6">
            <div
                class="lg:rounded-full py-8 px-6 md:px-12 flex flex-col lg:flex-row md:flex-wrap justify-between bg-white gap-10">
                <div class="grid grid-cols-3 gap-x-10 gap-y-8 md:grid-cols-6 md:justify-between flex-1">
                    @foreach ($categoryList as $index => $category)
                        <a href="/blog/category/{{ $category->slug }}">
                            <div class="w-fit flex flex-col mx-auto md:mx-0 items-center cursor-pointer group">
                                <div class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full text-white text-4xl flex justify-center items-center"
                                    style="background-color: {{ $category->background }}">
                                    <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                                        src="{{ asset('storage/' . $category->svg) }}"
                                        alt="post-img-small-{{ $index }}">
                                    <div
                                        class="absolute z-10 -top-2 -right-0.5 rounded-full w-6 aspect-1 bg-text-main text-xs text-white font-bold flex justify-center items-center">
                                        {{ $category->blogs_count }}
                                    </div>
                                    {{-- <div
                                        class="absolute z-0 inset-0 rounded-full ring-4 ring-bg-category-3-secondary opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100">
                                    </div> --}}
                                    <div class="absolute inset-0 rounded-full transition-shadow duration-500 opacity-0 ease-in-out group-hover:shadow-[0_0_0_4px_rgba(0,0,0,0)] group-hover:opacity-100"
                                        style="box-shadow: 0 0 0 4px {{ $category->background . '33' }}">
                                    </div>
                                </div>
                                <p class="mt-2 text-sm w-full truncate font-manrope text-center"
                                    style="max-width: 12ch;" title="{{ $category->name }}">{{ $category->name }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="hidden sm:flex items-center justify-center gap-6">
                    <span class="font-semibold text-nowrap">hoặc ...</span>
                    <a href="/blog/category">
                        <button
                            class="py-2 px-[22px] bg-btn-bg rounded text-white ease text-nowrap duration-200 hover:bg-btn-dark">Xem
                            Tất Cả</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 max-w-default default:max-w-laptop w-full mx-auto px-4 sm:px-6 default:px-0 relative">
        <div class="flex gap-4 justify-center items-center">
            <div class="text-[#FF2AAC]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#1F1B1B"
                        d="m6.67 7.914 3.062-4.143C11.71 1.093 12.7-.246 13.624.037c.923.283.923 1.925.923 5.21v.31c0 1.185 0 1.777.379 2.148l.02.02c.387.363 1.003.363 2.236.363 2.22 0 3.329 0 3.704.673l.018.034c.354.683-.289 1.553-1.574 3.29l-3.062 4.144c-1.98 2.678-2.969 4.017-3.892 3.734-.923-.283-.923-1.925-.923-5.21v-.31c0-1.184 0-1.777-.379-2.148l-.02-.02c-.387-.363-1.003-.363-2.236-.363-2.22 0-3.329 0-3.704-.673a1.084 1.084 0 0 1-.018-.034c-.354-.683.289-1.552 1.574-3.29Z" />
                    <path fill="currentColor"
                        d="m5.67 7.914 3.062-4.143C10.71 1.093 11.7-.246 12.624.037c.923.283.923 1.925.923 5.21v.31c0 1.185 0 1.777.379 2.148l.02.02c.387.363 1.003.363 2.236.363 2.22 0 3.329 0 3.704.673l.018.034c.354.683-.289 1.553-1.574 3.29l-3.062 4.144c-1.98 2.678-2.969 4.017-3.892 3.734-.923-.283-.923-1.925-.923-5.21v-.31c0-1.184 0-1.777-.379-2.148l-.02-.02c-.387-.363-1.003-.363-2.236-.363-2.22 0-3.329 0-3.704-.673a1.084 1.084 0 0 1-.018-.034c-.354-.683.289-1.552 1.574-3.29Z" />
                </svg>
            </div>
            <h2 class="font-bold text-lg">Bài Viết Nổi Bật</h2>
        </div>
        <div class="testimonial-swiper-container mx-auto w-full mt-6 overflow-hidden">
            <div class="swiper-wrapper">
                @foreach ($blogs as $index => $featurePost)
                    @php
                        $backgrounds = ['bg-bg-secondary', 'bg-border-main', 'bg-bg-gray'];
                        $backgroundClass = $backgrounds[$index % 3];
                    @endphp
                    <div class="swiper-slide flex-shrink-0 w-full !h-auto overflow-x-hidden">
                        <div {{-- class="group w-full h-full rounded-3xl p-4 flex flex-col gap-4 justify-end cursor-default duration-300 ease-in" style="background-color: {{$featurePost['color']}}"> --}}
                            class="group w-full h-full rounded-xl p-4 flex flex-col gap-4 justify-end cursor-default duration-300 ease-in border-[0.5px] text-white border-border-main"
                            style="background-color: {{ $featurePost['categories'][0]['background'] }}">
                            <div class="flex justify-between gap-6 h-full">
                                <div class="flex flex-col gap-4">
                                    <div class="w-fit h-8">
                                        <a href="/blog/category/{{ $featurePost['categories'][0]['slug'] }}"
                                            class="w-fit h-8 absolute rounded-full bg-[#ffffff24] text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 hover:translate-x-2 cursor-pointer">
                                            <span>{{ $featurePost['categories'][0]['name'] }}</span>
                                        </a>
                                    </div>
                                    <div class="flex flex-col gap-3">
                                        <div class="flex gap-4 items-center">
                                            <div class="flex">
                                                <div>
                                                    @if ($featurePost['user']['profile_photo_path'])
                                                        <img class="w-5 aspect-1 rounded-full !object-cover"
                                                            style="aspect-ratio: 1/1"
                                                            src="{{ asset('storage/' . $featurePost['user']['profile_photo_path']) }}"
                                                            alt="{{ $featurePost['user']['name'] }}">
                                                    @else
                                                        <div
                                                            class="grid aspect-1 w-full h-full rounded-full p-1 place-items-center bg-white text-black">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 24 24">
                                                                <g fill="currentColor">
                                                                    <circle cx="12" cy="6" r="4" />
                                                                    <path
                                                                        d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <p class="text-xs">{{ $featurePost['user']['name'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="flex gap-4 items-center">
                                        <div class="flex w-5 justify-center -mt-1.5">
                                            <div class="text-lg font-light text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                                    viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2">
                                                        <path d="M10 2h4m-2 12l3-3" />
                                                        <circle cx="12" cy="14" r="8" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <p class="text-xs">{{ $featurePost['reading_time'] }} đọc</p>
                                        </div>
                                    </div> --}}
                                    <div class="flex gap-4 items-center">
                                        <div class="flex w-5 justify-center">
                                            <div class="text-base font-light text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                                    viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2">
                                                        <path d="M8 2v4m8-4v4" />
                                                        <rect width="18" height="18" x="3" y="4"
                                                            rx="2" />
                                                        <path
                                                            d="M3 10h18M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <p class="text-xs">
                                                {{ \Carbon\Carbon::parse($featurePost['created_at'])->format('d/m/Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-1 pt-10">
                                    <div class="relative group/title">
                                        <a href="/blog/{{ $featurePost['category_slug'] }}/{{ $featurePost['slug'] }}"
                                            class="relative font-medium font-manrope leading-relaxed group/title line-clamp-3">
                                            {{ $featurePost['title'] }}
                                        </a>
                                        <div
                                            class="absolute -top-12 flex flex-col items-center hidden mb-5 group-hover/title:flex">
                                            <span
                                                class="relative rounded-md z-10 p-2 leading-normal text-white whitespace-no-wrap bg-black shadow-lg"
                                                style="font-size: 10px">{{ $featurePost['title'] }}</span>
                                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/blog/{{ $featurePost['category_slug'] }}/{{ $featurePost['slug'] }}">
                                <button
                                    class="py-2 px-[22px] bg-black rounded text-white ease duration-200 float-end text-sm">Xem
                                    Tiếp</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination !bottom-[-15px]"></div>
        </div>
    </section>
    <section class="pt-12 max-w-default mx-auto px-4 sm:px-6 default:px-0 flex justify-center">
        <img class="w-full min-h-32 h-full object-cover rounded-sm shadow-md"
            src="{{ asset('assets/images/banner-ads-home.png') }}" alt="ads-banner-1">
    </section>
    <section
        x-data='{
                openSections: { 0: true, 1: false, 2: false },
                categories: @json($categories)
            }'
        class="pb-12 max-w-default mx-auto px-4 sm:px-6 default:px-0 flex justify-center flex-col default:flex-row gap-6">
        <!-- Cột trái -->
        <div class="w-full default:w-[30%] sticky top-16 h-fit pt-16">
            <div>
                <!-- Title -->
                <div class="flex gap-4 items-center">
                    <span class="text-[#FF2AAC]"><svg width="20" height="20" viewBox="0 0 207 230"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M177.985 2.65187C178.905 0.559514 181.743 0.454872 182.855 2.33801L183.015 2.65187L185.855 9.10842C188.338 14.7532 192.465 19.4885 197.675 22.6894L198.553 23.2085L203.597 26.0756C205.364 27.0802 205.462 29.5637 203.891 30.7323L203.597 30.9243L198.553 33.7915C193.225 36.8199 188.948 41.4176 186.284 46.9593L185.855 47.8916L183.015 54.3481C182.095 56.4405 179.257 56.5451 178.145 54.662L177.985 54.3481L175.145 47.8916C172.662 42.247 168.535 37.5116 163.325 34.3106L162.447 33.7915L157.403 30.9243C155.636 29.9201 155.538 27.4366 157.109 26.2676L157.403 26.0756L162.447 23.2085C167.775 20.1801 172.052 15.5825 174.716 10.0407L175.145 9.10842L177.985 2.65187Z"
                                fill="#6A4EE9" />
                            <path
                                d="M175.985 1.65187C176.905 -0.440486 179.743 -0.545128 180.855 1.33801L181.015 1.65187L183.855 8.10842C186.338 13.7532 190.465 18.4885 195.675 21.6894L196.553 22.2085L201.597 25.0756C203.364 26.0802 203.462 28.5637 201.891 29.7323L201.597 29.9243L196.553 32.7915C191.225 35.8199 186.948 40.4176 184.284 45.9593L183.855 46.8916L181.015 53.3481C180.095 55.4405 177.257 55.5451 176.145 53.662L175.985 53.3481L173.145 46.8916C170.662 41.247 166.535 36.5116 161.325 33.3106L160.447 32.7915L155.403 29.9243C153.636 28.9201 153.538 26.4366 155.109 25.2676L155.403 25.0756L160.447 22.2085C165.775 19.1801 170.052 14.5825 172.716 9.04067L173.145 8.10842L175.985 1.65187Z"
                                fill="#FF2AAC" />
                            <path
                                d="M95.0792 11.7576C98.8924 3.19801 110.648 2.76993 115.255 10.4737L115.921 11.7576L127.686 38.1708C137.972 61.2632 155.07 80.6346 176.652 93.7295L180.289 95.8531L201.186 107.582C208.507 111.692 208.914 121.852 202.406 126.632L201.186 127.418L180.289 139.147C158.217 151.536 140.498 170.345 129.462 193.015L127.686 196.829L115.921 223.242C112.109 231.802 100.352 232.23 95.7443 224.526L95.0792 223.242L83.3146 196.829C73.0292 173.738 55.9299 154.365 34.3481 141.271L30.71 139.147L9.81289 127.418C2.49301 123.31 2.08625 113.15 8.5929 108.367L9.81289 107.582L30.71 95.8531C52.7827 83.4638 70.5023 64.6557 81.5376 41.9846L83.3146 38.1708L95.0792 11.7576Z"
                                fill="#6A4EE9" />
                            <path
                                d="M91.0792 8.75792C94.8924 0.197554 106.648 -0.229829 111.255 7.47396L111.921 8.75792L123.686 35.1712C133.972 58.2627 151.07 77.6349 172.652 90.7297L176.289 92.8531L197.186 104.582C204.507 108.692 204.914 118.852 198.406 123.632L197.186 124.418L176.289 136.147C154.217 148.536 136.498 167.345 125.462 190.015L123.686 193.829L111.921 220.242C108.109 228.802 96.3518 229.23 91.7443 221.526L91.0792 220.242L79.3142 193.829C69.0294 170.738 51.9304 151.365 30.3482 138.271L26.71 136.147L5.81293 124.418C-1.50702 120.31 -1.91373 110.15 4.59288 105.367L5.81293 104.582L26.71 92.8531C48.7831 80.4643 66.502 61.6556 77.5377 38.9843L79.3142 35.1712L91.0792 8.75792Z"
                                fill="#FF2AAC" />
                        </svg></span>

                    <h2 class="font-semibold text-lg">Chủ Đề Trending</h2>
                </div>

                <div
                    class="bg-white default:bg-transparent rounded-xl default:rounded-none p-4 default:p-0 mt-4 default:mt-0">
                    @if ($categories && count($categories) > 0)
                        @foreach ($categories as $index => $category)
                            <div class="default:mt-2">
                                <button
                                    @click="Object.keys(openSections).forEach(key => openSections[key] = false); openSections[{{ $index }}] = true;"
                                    class="flex items-center justify-between w-full p-3 pl-0">
                                    <div class="flex gap-3 items-center">
                                        <div class="font-semibold">
                                            <span
                                                class="w-6 h-[28px] px-4 flex bg-black rounded justify-center items-center text-white ease duration-200 text-sm aspect-1">{{ $index + 1 }}</span>
                                        </div>
                                        <span class="font-semibold text-start">{{ $category['name'] }}</span>
                                    </div>
                                    <span x-text="openSections[{{ $index }}] ? '−' : '+'"></span>
                                </button>
                                <ul x-show="openSections[{{ $index }}]"
                                    class="ml-4 mt-3 space-y-3 text-sm leading-normal border-l border-l-[#E9E8FF] pl-4"
                                    x-transition>
                                    @foreach ($category['blogs'] as $index => $post)
                                        <li class="leading-loose cursor-default"><span
                                                class="font-semibold mr-1">{{ $index + 1 }}.
                                            </span>{{ $post['title'] }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <h2 class="text-lg font-bold">Không có chủ đề nào.</h2>
                            <p class="text-gray-600">Xin vui lòng kiểm tra lại sau.</p>
                        </div>
                    @endif
                </div>

            </div>
        </div>

        <!-- Cột phải -->
        <div class="w-full default:w-3/4 pt-6 default:pt-16 bg-bg-main z-10">
            <!-- Title -->
            <div class="flex gap-4 items-center">
                <span class="text-[#FF2AAC]"><svg width="20" height="20" viewBox="0 0 207 230"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M177.985 2.65187C178.905 0.559514 181.743 0.454872 182.855 2.33801L183.015 2.65187L185.855 9.10842C188.338 14.7532 192.465 19.4885 197.675 22.6894L198.553 23.2085L203.597 26.0756C205.364 27.0802 205.462 29.5637 203.891 30.7323L203.597 30.9243L198.553 33.7915C193.225 36.8199 188.948 41.4176 186.284 46.9593L185.855 47.8916L183.015 54.3481C182.095 56.4405 179.257 56.5451 178.145 54.662L177.985 54.3481L175.145 47.8916C172.662 42.247 168.535 37.5116 163.325 34.3106L162.447 33.7915L157.403 30.9243C155.636 29.9201 155.538 27.4366 157.109 26.2676L157.403 26.0756L162.447 23.2085C167.775 20.1801 172.052 15.5825 174.716 10.0407L175.145 9.10842L177.985 2.65187Z"
                            fill="#6A4EE9" />
                        <path
                            d="M175.985 1.65187C176.905 -0.440486 179.743 -0.545128 180.855 1.33801L181.015 1.65187L183.855 8.10842C186.338 13.7532 190.465 18.4885 195.675 21.6894L196.553 22.2085L201.597 25.0756C203.364 26.0802 203.462 28.5637 201.891 29.7323L201.597 29.9243L196.553 32.7915C191.225 35.8199 186.948 40.4176 184.284 45.9593L183.855 46.8916L181.015 53.3481C180.095 55.4405 177.257 55.5451 176.145 53.662L175.985 53.3481L173.145 46.8916C170.662 41.247 166.535 36.5116 161.325 33.3106L160.447 32.7915L155.403 29.9243C153.636 28.9201 153.538 26.4366 155.109 25.2676L155.403 25.0756L160.447 22.2085C165.775 19.1801 170.052 14.5825 172.716 9.04067L173.145 8.10842L175.985 1.65187Z"
                            fill="#FF2AAC" />
                        <path
                            d="M95.0792 11.7576C98.8924 3.19801 110.648 2.76993 115.255 10.4737L115.921 11.7576L127.686 38.1708C137.972 61.2632 155.07 80.6346 176.652 93.7295L180.289 95.8531L201.186 107.582C208.507 111.692 208.914 121.852 202.406 126.632L201.186 127.418L180.289 139.147C158.217 151.536 140.498 170.345 129.462 193.015L127.686 196.829L115.921 223.242C112.109 231.802 100.352 232.23 95.7443 224.526L95.0792 223.242L83.3146 196.829C73.0292 173.738 55.9299 154.365 34.3481 141.271L30.71 139.147L9.81289 127.418C2.49301 123.31 2.08625 113.15 8.5929 108.367L9.81289 107.582L30.71 95.8531C52.7827 83.4638 70.5023 64.6557 81.5376 41.9846L83.3146 38.1708L95.0792 11.7576Z"
                            fill="#6A4EE9" />
                        <path
                            d="M91.0792 8.75792C94.8924 0.197554 106.648 -0.229829 111.255 7.47396L111.921 8.75792L123.686 35.1712C133.972 58.2627 151.07 77.6349 172.652 90.7297L176.289 92.8531L197.186 104.582C204.507 108.692 204.914 118.852 198.406 123.632L197.186 124.418L176.289 136.147C154.217 148.536 136.498 167.345 125.462 190.015L123.686 193.829L111.921 220.242C108.109 228.802 96.3518 229.23 91.7443 221.526L91.0792 220.242L79.3142 193.829C69.0294 170.738 51.9304 151.365 30.3482 138.271L26.71 136.147L5.81293 124.418C-1.50702 120.31 -1.91373 110.15 4.59288 105.367L5.81293 104.582L26.71 92.8531C48.7831 80.4643 66.502 61.6556 77.5377 38.9843L79.3142 35.1712L91.0792 8.75792Z"
                            fill="#FF2AAC" />
                    </svg></span>

                <h2 class="font-semibold text-lg">Danh Sách Bài Viết</h2>
            </div>

            <div>
                <template x-for="(category, index) in categories" :key="category.id">
                    <div x-show="openSections[index]" class="space-y-8 mt-4">
                        <template x-for="post in category.blogs" :key="post.id">
                            <article
                                class="bg-white md:p-4 rounded-xl shadow hover:shadow-lg transition duration-300 relative overflow-x-hidden cursor-default">
                                <div class="justify-between gap-6 h-full hidden md:flex">
                                    <div class="relative overflow-hidden">
                                        <div class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer"
                                            style="background-color: {{ $category['background'] }}">
                                            <a href="/blog/category/{{ $category['slug'] }}">
                                                <span>{{ $category['name'] }}</span>
                                            </a>
                                        </div>
                                        <a href="/blog/{{ $post['category_slug'] }}/{{ $post['slug'] }}">
                                            <img class="aspect-1 h-[250px] rounded-xl opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear object-cover"
                                                :src="`/storage/${post.cover_photo_path}`" :alt="post.photo_alt_text">
                                        </a>
                                    </div>
                                    <div class="flex flex-col justify-between flex-1 gap-4">
                                        <div class="flex gap-4">
                                            <div class="flex gap-2 items-center">
                                                <div class="flex">
                                                    <div>
                                                        <template x-if="post.user.profile_photo_path">
                                                            <img class="w-5 aspect-1 rounded-full !object-cover"
                                                                style="aspect-ratio: 1/1"
                                                                x-bind:src="`/storage/${post.user.profile_photo_path}`"
                                                                x-alt="post.user.photo_alt_text">
                                                        </template>
                                                        <template x-if="! post.user.profile_photo_path">
                                                            <div
                                                                class="grid aspect-1 w-full h-full rounded-full p-1 place-items-center bg-black text-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24">
                                                                    <g fill="currentColor">
                                                                        <circle cx="12" cy="6" r="4" />
                                                                        <path
                                                                            d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-xs text-[#4D6385]" x-text="post.user.name"></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 items-center">
                                                <div class="flex w-5 justify-center">
                                                    <div class="text-sm font-light text-btn-bg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                            height="1.2em" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M10 2h4m-2 12l3-3" />
                                                                <circle cx="12" cy="14" r="8" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-xs text-[#4D6385]"
                                                        x-text="`${post.reading_time} đọc`"></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 items-center">
                                                <div class="flex w-5 justify-center">
                                                    <div class="text-sm font-light text-btn-bg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                            height="1.2em" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M8 2v4m8-4v4" />
                                                                <rect width="18" height="18" x="3" y="4"
                                                                    rx="2" />
                                                                <path
                                                                    d="M3 10h18M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-xs text-[#4D6385]"
                                                        x-text="new Date(post.created_at).toLocaleDateString('en-GB')">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative group/title">
                                            <a x-bind:href="'/blog/' + post.category_slug + '/' + post.slug"
                                                class="relative cursor-pointer font-manrope font-semibold text-xl leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200 h-[65px]"
                                                x-text="post.title" x-title="post.title">
                                            </a>

                                        </div>
                                        <div class="relative">
                                            <span
                                                class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3 h-[78px]"
                                                x-text="post.sub_title"></span>
                                        </div>
                                        <div class="flex gap-4">
                                            <template x-if="post.tags && post.tags.length > 0">
                                                <template x-for="(tag, index) in post.tags" :key="index">
                                                    <div
                                                        class="py-1 px-3 rounded ease duration-200 text-[#4D6385] text-xs shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                                        <span x-text="tag.name"></span>
                                                    </div>
                                                </template>
                                            </template>
                                            <template x-if="!(post.tags && post.tags.length > 0)">
                                                <div class="h-[24px]"></div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-4 p-4 sm:p-0 md:hidden">
                                    <div class="relative overflow-hidden md:hidden">
                                        <div
                                            class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer">
                                            <a href="/blog/category/{{ $category['slug'] }}">
                                                <span>{{ $category['name'] }}</span>
                                            </a>
                                        </div>
                                        <a x-bind:href="'/blog/' + post.slug">
                                            <img class="w-full h-[250px] object-cover rounded-t-xl opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear"
                                                :src="`/storage/${post.cover_photo_path}`" :alt="post.photo_alt_text">
                                        </a>
                                    </div>
                                    <div class="flex flex-col gap-2 sm:gap-4 px-4">
                                        <div class="relative group/title">
                                            <a x-bind:href="'/blog/' + post.category_slug + '/' + post.slug"
                                                class="relative cursor-pointer font-manrope font-semibold text-xl text-center leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200"
                                                x-text="post.title" x-title="post.title"></a>
                                        </div>
                                        <span
                                            class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3 text-center"
                                            x-title="post.sub_title" x-text="post.sub_title"></span>

                                    </div>
                                    <div class="flex gap-4 justify-center px-4 sm:pb-4">
                                        <div class="flex gap-4">
                                            <div class="flex gap-2 items-center">
                                                <div class="flex">
                                                    <div>
                                                        <template x-if="post.user.profile_photo_path">
                                                            <img class="w-5 aspect-1 rounded-full !object-cover"
                                                                style="aspect-ratio: 1/1"
                                                                x-bind:src="`/storage/${post.user.profile_photo_path}`"
                                                                x-alt="post.author.name">
                                                        </template>
                                                        <template x-if="! post.user.profile_photo_path">
                                                            <div
                                                                class="grid aspect-1 w-full h-full rounded-full p-1 place-items-center bg-black text-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24">
                                                                    <g fill="currentColor">
                                                                        <circle cx="12" cy="6" r="4" />
                                                                        <path
                                                                            d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-xs text-[#4D6385]" x-text="post.user.name"></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 items-center">
                                                <div class="flex w-5 justify-center">
                                                    <div class="text-sm font-light text-btn-bg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                            height="1.2em" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M10 2h4m-2 12l3-3" />
                                                                <circle cx="12" cy="14" r="8" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-xs text-[#4D6385]"
                                                        x-text="`${post.reading_time} đọc`"></p>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 items-center">
                                                <div class="flex w-5 justify-center">
                                                    <div class="text-sm font-light text-btn-bg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                            height="1.2em" viewBox="0 0 24 24">
                                                            <g fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2">
                                                                <path d="M8 2v4m8-4v4" />
                                                                <rect width="18" height="18" x="3" y="4"
                                                                    rx="2" />
                                                                <path
                                                                    d="M3 10h18M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-xs text-[#4D6385]"
                                                        x-text="new Date(post.created_at).toLocaleDateString('en-GB')">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </template>
                    </div>
                </template>


            </div>

            {{-- <div class="flex justify-center mt-14">
                    <div class="flex items-center gap-6">
                        <div>
                            <button
                                class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Tải
                                thêm</button>
                        </div>
                        <span>Trang 2 trên 10</span>
                        <div>
                            <button
                                class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Trang
                                sau</button>
                        </div>
                    </div>
                </div> --}}
        </div>

    </section>
    <section>
        <div class="relative bg-white shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] overflow-hidden">
            <div
                class="py-8 md:py-12 max-w-default flex w-auto mx-auto px-4 sm:px=12 md:px-24 default:px-0 relative z-10">
                <div class="flex flex-col mx-auto md:flex-row justify-between items-center">
                    <div class="flex flex-col gap-4 md:gap-8">
                        <h3 class="font-bold text-xl text-center md:text-left md:text-2xl default:text-4xl">Đăng ký
                            nhận bảng tin 🙌</h3>
                        <p class="text-base default:text-lg text-center md:text-left md:w-9/12 leading-loose">
                            Luôn được cập nhật với những bài viết chia sẻ mới nhất từ mình qua email.</p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-4 md:gap-8">
                        <p class="text-center md:text-left">Đăng ký ngay bây giờ, huỷ bất cứ khi nào.</p>
                        <div>
                            <button
                                onclick="document.getElementById('register-form').scrollIntoView({ behavior: 'smooth', block: 'start' }); document.getElementById('email-subcribe-input').focus();"
                                class="py-2 px-[22px] bg-black rounded text-white ease duration-200 text-nowrap">Đăng
                                ký</button>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="absolute left-[-200px] -top-[170px] z-0 md:left-[-120px] md:-top-2 z-1 scale-75"
                width="284" height="453" viewBox="0 0 284 453" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="text-btn-bg"
                    d="M100.795 7.49467C105.015 -1.99852 118.025 -2.47329 123.123 6.07068L123.86 7.49467L136.88 36.7886C148.263 62.3995 167.185 83.8837 191.069 98.4068L195.095 100.762L218.221 113.77C226.323 118.328 226.773 129.596 219.571 134.898L218.221 135.769L195.095 148.778C170.668 162.518 151.059 183.378 138.846 208.521L136.88 212.751L123.86 242.045C119.641 251.538 106.63 252.013 101.531 243.469L100.795 242.045L87.7754 212.751C76.3928 187.141 57.4695 165.656 33.5855 151.133L29.5593 148.778L6.43298 135.769C-1.66775 131.213 -2.1179 119.945 5.08284 114.641L6.43298 113.77L29.5593 100.762C53.9866 87.0215 73.5964 66.162 85.8089 41.0183L87.7754 36.7886L100.795 7.49467Z"
                    fill="currentColor"></path>
                <path class="text-icon-main"
                    d="M159.795 210.495C164.015 201.001 177.025 200.527 182.123 209.071L182.86 210.495L195.88 239.789C207.263 265.399 226.185 286.884 250.069 301.407L254.095 303.762L277.221 316.77C285.323 321.328 285.773 332.596 278.571 337.898L277.221 338.769L254.095 351.778C229.668 365.518 210.059 386.378 197.846 411.521L195.88 415.751L182.86 445.045C178.641 454.538 165.63 455.013 160.531 446.469L159.795 445.045L146.775 415.751C135.393 390.141 116.47 368.656 92.5855 354.133L88.5593 351.778L65.433 338.769C57.3322 334.213 56.8821 322.945 64.0828 317.641L65.433 316.77L88.5593 303.762C112.987 290.022 132.596 269.162 144.809 244.018L146.775 239.789L159.795 210.495Z"
                    fill="currentColor"></path>
            </svg>
            <svg class="absolute right-[-200px] -top-[170px] z-0 md:right-[-120px] md:-top-2 z-1 scale-75"
                width="284" height="453" viewBox="0 0 284 453" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="text-btn-bg"
                    d="M100.795 445.045C105.015 454.538 118.025 455.013 123.123 446.469L123.86 445.045L136.88 415.751C148.263 390.14 167.185 368.656 191.069 354.133L195.095 351.777L218.221 338.77C226.323 334.212 226.773 322.944 219.571 317.642L218.221 316.77L195.095 303.762C170.668 290.022 151.059 269.162 138.846 244.018L136.88 239.788L123.86 210.494C119.641 201.002 106.63 200.527 101.531 209.071L100.795 210.494L87.7754 239.788C76.3928 265.399 57.4695 286.884 33.5855 301.406L29.5593 303.762L6.43298 316.77C-1.66775 321.327 -2.1179 332.595 5.08284 337.898L6.43298 338.77L29.5593 351.777C53.9866 365.518 73.5964 386.378 85.8089 411.521L87.7754 415.751L100.795 445.045Z"
                    fill="currentColor"></path>
                <path class="text-icon-main"
                    d="M159.795 242.045C164.015 251.538 177.025 252.013 182.123 243.469L182.86 242.045L195.88 212.751C207.263 187.14 226.185 165.656 250.069 151.133L254.095 148.777L277.221 135.77C285.323 131.212 285.773 119.944 278.571 114.642L277.221 113.77L254.095 100.762C229.668 87.0217 210.059 66.1616 197.846 41.0181L195.88 36.7884L182.86 7.49449C178.641 -1.99834 165.63 -2.473 160.531 6.07056L159.795 7.49449L146.775 36.7884C135.393 62.399 116.47 83.8839 92.5855 98.4062L88.5593 100.762L65.433 113.77C57.3322 118.327 56.8821 129.595 64.0828 134.898L65.433 135.77L88.5593 148.777C112.987 162.518 132.596 183.378 144.809 208.521L146.775 212.751L159.795 242.045Z"
                    fill="currentColor"></path>
            </svg>
        </div>
    </section>
    </div>
    @push('scripts')
        <script>
            function home() {
                return {
                    isLoading: false,
                    handleSubmitRegisterHome(event) {
                        event.preventDefault();

                        const form = document.getElementById('register-form-home');
                        const formData = new FormData(form);

                        this.isLoading = true;

                        fetch(form.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'Accept': 'application/json',
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message);
                                form.reset();
                            })
                            .catch(error => {
                                alert('Đã có lỗi xảy ra! Vui lòng thử lại sau.');
                                console.error('Error:', error);
                            })
                            .finally(() => {
                                this.isLoading = false;
                            });
                    }
                }
            }
        </script>
        <!-- Import Swiper and initialize -->
        <script type="module">
            const swiper = new Swiper('.testimonial-swiper-container', {
                slidesPerView: 3,
                spaceBetween: 20,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '"></span>';
                    },
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                    },
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
                duration: 700,
                easing: 'ease-in-out',
                delay: 100,
            });

            function handleNavigateBlog(blogTitle) {
                if (blogTitle.trim()) {
                    const slug = blogTitle.trim().toLowerCase().replace(/\s+/g, '-');
                    window.location.href = `/blog/${slug}`;
                }
            }

            function handleSubmitRegister(event) {
                event.preventDefault();

                const form = document.getElementById('register-form-home');
                const formData = new FormData(form);

                this.isLoading = true;

                fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        form.reset();
                    })
                    .catch(error => {
                        alert('Đã có lỗi xảy ra! Vui lòng thử lại sau.');
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        this.isLoading = false;
                    });
            }
        </script>
    @endpush
</x-layouts.appclient>
