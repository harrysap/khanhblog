<x-layouts.appclient>
    <div class="">
        <section
            class="max-w-default mx-auto px-4 sm:px-6 default:px-0 flex flex-col justify-between gap-10 md:gap-14 pt-4 md:pt-8">
            <div class="relative px-4 md:p-6 text-center w-full flex flex-col gap-6">
                <h1 class="text-3xl font-bold leading-relaxed">Danh sách bài đăng cho từ khoá #{{ $tag->name }}</h1>
            </div>

            <div class="space-y-8 mt-4">
                @if ($articles && count($articles) > 0)
                    @foreach ($articles as $index => $post)
                        <article
                            class="bg-white md:p-4 rounded-xl shadow hover:shadow-lg transition duration-300 relative overflow-x-hidden cursor-default">
                            <div class="justify-between gap-6 h-full hidden md:flex">
                                <div class="relative overflow-hidden">
                                    <div class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer"
                                        style="background-color: {{ $post['categories'][0]['background'] }}">
                                        <a href="/blog/category/{{ $post['categories'][0]['slug'] }}">
                                            <span>{{ $post['categories'][0]['name'] }}</span>
                                        </a>
                                    </div>
                                    <a href="/blog/{{ $post['slug'] }}">
                                        <img class="aspect-1 h-[250px] rounded-xl opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear object-cover"
                                            src="/storage/{{ $post->cover_photo_path }}"
                                            alt="{{ $post['photo_alt_text'] }}">
                                    </a>
                                </div>
                                <div class="flex flex-col justify-between flex-1 gap-4">
                                    <div class="flex gap-4">
                                        <div class="flex gap-2 items-center">
                                            <div class="flex">
                                                <div>
                                                    @if ($post['user']['profile_photo_path'])
                                                        <img class="w-5 aspect-1 rounded-full !object-cover"
                                                            style="aspect-ratio: 1/1"
                                                            src="{{ $post['user']['profile_photo_path'] }}"
                                                            alt="{{ $post['user']['name'] }}">
                                                    @else
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
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <p class="text-xs text-[#4D6385]">{{ $post['user']['name'] }}</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-2 items-center">
                                            <div class="flex w-5 justify-center">
                                                <div class="text-sm font-light text-btn-bg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                        height="1.2em" viewBox="0 0 24 24">
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
                                                <p class="text-xs text-[#4D6385]">
                                                    {{ $post['published_at']->format('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative group/title">
                                        <a href="/blog/{{ $post['slug'] }}"
                                            class="relative cursor-pointer font-manrope font-semibold text-xl leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200 h-[65px]"
                                            title={{ $post['title'] }}>{{ $post['title'] }}
                                        </a>
                                    </div>
                                    <div class="relative">
                                        <span
                                            class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3 h-[78px]"
                                            title="{{ $post['sub_title'] }}">
                                            {{ $post['sub_title'] }}
                                        </span>
                                    </div>
                                    <div class="flex gap-4">
                                        @if ($post['tags'] && count($post['tags']) > 0)
                                            @foreach ($post['tags'] as $index => $tag)
                                                <a href="/blog/tag/{{ $tag->slug }}"
                                                    class="py-1 px-3 rounded ease duration-200 text-[#4D6385] text-xs shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                                    {{ $tag->name }}
                                                </a>
                                            @endforeach
                                        @else
                                            <div class="h-[24px]">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 p-4 sm:p-0 md:hidden">
                                <div class="relative overflow-hidden md:hidden">
                                    <div class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer"
                                        style="background-color: {{ $post['categories'][0]['background'] }}">
                                        <a href="/blog/category/{{ $post['categories'][0]['slug'] }}">
                                            <span>{{ $post['categories'][0]['name'] }}</span>
                                        </a>
                                    </div>
                                    <a href="/blog/{{ $post['slug'] }}">
                                        <img class="w-full h-[250px] object-cover rounded-xl sm:rounded-t-xl sm:rounded-b-none opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear"
                                            src="/storage/{{ $post->cover_photo_path }}"
                                            alt="{{ $post['photo_alt_text'] }}">
                                    </a>
                                </div>
                                <div class="flex flex-col gap-2 sm:gap-4 px-4">
                                    <div class="relative group/title">
                                        <a href="#"
                                            class="relative cursor-pointer font-manrope font-semibold text-xl text-center leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200"
                                            title="{{ $post['title'] }}">{{ $post['title'] }}</a>
                                    </div>
                                    <span
                                        class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3 text-center"
                                        title="{{ $post['sub_title'] }}">{{ $post['sub_title'] }}</span>

                                </div>
                                <div class="flex gap-4 justify-center px-4 sm:pb-4">
                                    <div class="flex gap-4">
                                        <div class="flex gap-2 items-center">
                                            <div class="flex">
                                                <div>
                                                    @if ($post['user']['profile_photo_path'])
                                                        <img class="w-5 aspect-1 rounded-full !object-cover"
                                                            style="aspect-ratio: 1/1"
                                                            src="{{ $post['user']['profile_photo_path'] }}"
                                                            alt="{{ $post['user']['name'] }}">
                                                    @else
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
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <p class="text-xs text-[#4D6385]">{{ $post['user']['name'] }}</p>
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
                                                <p class="text-xs text-[#4D6385]">
                                                    {{ $post['published_at']->format('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @else
                    <div class="text-center py-4">
                        <h2 class="text-lg font-bold">Không có bài viết nào.</h2>
                        <p class="text-gray-600">Xin vui lòng kiểm tra lại sau.</p>
                    </div>
                @endif
            </div>

            <section class="flex md:hidden pt-12 max-w-default mx-auto px-4 sm:px-6 default:px-0 justify-center">
                <a href="https://www.udemy.com/course/sap-s4hana-for-beginners/?fbclid=IwY2xjawGNjGhleHRuA2FlbQIxMAABHdJ10B8tcRmASOKwpeHBynpmMdxJUuwKm-ZExlwog9KnaGgGp0aOLOjI-Q_aem_1oMlMK52oIbNxp1zqBvhHw&couponCode=80D2208CC4FCA5197F87" target="_blank">
                    <img class="w-full h-full object-cover rounded-sm shadow-md"
                    src="{{ asset('storage/assets/advertisement-course.gif') }}" alt="ads-banner-1">
                </a>
            </section>
        </section>
    </div>
    @push('scripts')
        <script type="module"></script>
    @endpush
</x-layouts.appclient>
