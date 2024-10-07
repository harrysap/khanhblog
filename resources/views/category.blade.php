@php
    $category = (object) [
        'title' => 'Title dài ơi là dài nè Title dài ơi là dài nè Title dài ơi là dài nè Title dài ơi là dài nè',
        'quantity' => 10,
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                viewBox="0 0 32 32">
                <path fill="currentColor"
                    d="M31.518 11.688c.026 0 .064 0 .077-.039c.013-.013.013-.025.013-.038a.07.07 0 0 0-.038-.064c-.026-.013-.052-.013-.09-.013h-.026v.14h.064m-.038-.204c.064 0 .102 0 .128.013c.09.025.09.115.09.14v.039c0 .026-.013.064-.065.09c0 0-.012.012-.025.012l.115.205h-.115l-.09-.192h-.064v.192h-.102v-.499zm.038.703a.445.445 0 0 0 .448-.447a.437.437 0 0 0-.448-.448a.453.453 0 0 0-.447.448c0 .243.204.447.447.447m-.345-.447c0-.192.153-.345.358-.345c.192 0 .345.153.345.345a.344.344 0 0 1-.345.345a.34.34 0 0 1-.358-.345m-3.107 2.851a1.29 1.29 0 0 1-1.24-.933h3.26l.448-.703h-3.708a1.29 1.29 0 0 1 1.24-.934h2.238l.447-.703h-2.736c-1.1 0-1.982.895-1.982 1.982c0 1.1.895 1.982 1.982 1.982h2.353l.447-.704h-2.749m-9.334.704h2.365l.448-.704h-2.749a1.285 1.285 0 0 1-1.292-1.278c0-.716.576-1.279 1.292-1.279h2.238l.447-.703h-2.736c-1.1 0-1.995.895-1.995 1.982c0 1.1.895 1.982 1.982 1.982m-14.487-.69H2.033a1.28 1.28 0 0 1-1.279-1.28c0-.715.576-1.278 1.279-1.278h2.2c.715 0 1.29.575 1.29 1.279c0 .703-.575 1.278-1.278 1.278m-2.263.69h2.301c1.1 0 1.982-.882 1.982-1.981s-.882-1.982-1.982-1.982H1.982A1.99 1.99 0 0 0 0 13.286c0 1.1.895 1.982 1.982 1.982m8.042-1.279a1.342 1.342 0 1 0 0-2.685H6.687v3.964h.767v-3.26h2.52c.357 0 .639.28.639.638c0 .359-.282.64-.64.64H7.825l2.276 1.982h1.113l-1.535-1.292h.345m12.62.601v-3.273h-.767v3.593q0 .154.115.268a.4.4 0 0 0 .282.115h3.478l.447-.703zm-9.334-.703h2.033l-1.074-1.739l-1.982 3.133h-.908l2.404-3.76a.56.56 0 0 1 .473-.242c.192 0 .358.089.46.242l2.417 3.772h-.895l-.422-.703h-2.059zM.371 17.659h1.01l1.227 2.57v-2.57h.653v3.273h-.96l-1.265-2.724v2.711H.371zm3.631 0h2.187v.537H4.705v.78h1.394v.537H4.705v.882H6.24v.537H4.002zm3.593.537h-.972v-.537h2.66v.537h-.972v2.736h-.703v-2.736zm2.532 1.777c.013.23.038.652.792.652c.678 0 .768-.422.768-.588c0-.37-.294-.435-.755-.55c-.498-.128-.716-.179-.882-.294a.73.73 0 0 1-.345-.64c0-.664.626-.958 1.24-.958c.217 0 .652.038.92.32c.18.204.192.421.205.562h-.473c-.025-.41-.37-.499-.69-.499c-.448 0-.73.205-.73.525c0 .294.193.383.59.486c.779.204.869.217 1.06.345c.307.204.32.511.32.652c0 .575-.448 1.023-1.291 1.023c-.243 0-.755-.039-1.01-.371c-.192-.243-.192-.499-.192-.665zm3.196-2.314v2.02c0 .345.077.499.14.588c.206.269.525.32.743.32c.882 0 .882-.69.882-.934V17.66h.435v2.02c0 .179 0 .537-.269.87c-.32.409-.818.447-1.061.447c-.307 0-.857-.09-1.15-.524c-.103-.141-.193-.333-.193-.819V17.66zm3.146 3.273h.447v-3.273h-.447zm2.212 0v-2.89h-1.1v-.383h2.634v.383h-1.099v2.89zm2.084-3.273h2.046v.383h-1.598v1.023h1.521v.384h-1.521v1.087h1.636v.396h-2.084z" />
            </svg>',
        'primaryColor' => '#E32525',
        'secondaryColor' => '#E3252533',
    ];
@endphp
<x-app-layout>
    <div class="">
        <section class="max-w-default mx-auto flex px-4 flex-col justify-between gap-6 md:pt-6">
            <div class="flex flex-col default:flex-row gap-4 default:gap-8 lg:w-9/12 items-center mx-auto">
                <div
                    class="flex gap-4 items-center group cursor-default w-full default:w-6/12 justify-center default:justify-normal">
                    <div class="relative w-14 lg:w-16 aspect-1 rounded-full text-white text-4xl flex justify-center items-center p-3"
                        style="background-color: {{ $category->primaryColor }}">
                        {!! $category->icon !!}
                        {{-- <div class="absolute z-10 -top-2 -right-0.5 rounded-full w-6 aspect-1 bg-text-main text-xs text-white font-bold flex justify-center items-center">
                            {{ $category->quantity }}
                        </div> --}}
                    </div>
                    <div class="flex flex-col gap-2 w-[150px]">
                        <p
                            class="mt-2 font-bold w-full line-clamp-2 leading-relaxed text-wrap truncate font-manrope sm:mt-0">
                            {{ $category->title }}
                        </p>
                        <span class="text-nowrap">{{ $category->quantity }} Bài Viết</span>

                    </div>
                </div>
                <p class="text-center default:text-left my-4 default:pl-10 py-2 default:border-l ">Code is the set of
                    instructions written in a programming language to
                    instruct computers. In software development, it serves as the backbone, defining the logic and
                    behavior of applications. Skilled coding produces efficient, functional, and innovative software
                    solutions..</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 default:grid-cols-3 gap-x-6 gap-y-8">
                @php
                    $posts = [
                        [
                            'category' => 'Test nè',
                            'duration' => 4,
                            'title' => 'Test dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè',
                            'name' => 'John D.',
                            'content' => 'In the realm of technology blogging, captivating your audience goes beyond just
                                        the written word. Incorporating eye-catching CSS animations can elevate your
                                        content and provide…',
                            'date' => '19/05/2023',
                            'color' => '#E32525',
                            'img' =>
                                'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                        ],
                        [
                            'category' => 'Test nè',
                            'duration' => 4,
                            'title' => 'Test dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè',
                            'name' => 'John D.',
                            'content' => 'In the realm of technology blogging, captivating your audience goes beyond just
                                        the written word. Incorporating eye-catching CSS animations can elevate your
                                        content and provide…',
                            'date' => '19/05/2023',
                            'color' => '#E32525',
                            'img' =>
                                'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                        ],
                        [
                            'category' => 'Test nè',
                            'duration' => 4,
                            'title' => 'Test dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè',
                            'name' => 'John D.',
                            'content' => 'In the realm of technology blogging, captivating your audience goes beyond just
                                        the written word. Incorporating eye-catching CSS animations can elevate your
                                        content and provide…',
                            'date' => '19/05/2023',
                            'color' => '#E32525',
                            'img' =>
                                'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                        ],
                        [
                            'category' => 'Test nè',
                            'duration' => 4,
                            'title' => 'Test dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè',
                            'name' => 'John D.',
                            'content' => 'In the realm of technology blogging, captivating your audience goes beyond just
                                        the written word. Incorporating eye-catching CSS animations can elevate your
                                        content and provide…',
                            'date' => '19/05/2023',
                            'color' => '#E32525',
                            'img' =>
                                'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                        ],
                        [
                            'category' => 'Test nè',
                            'duration' => 4,
                            'title' => 'Test dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè',
                            'name' => 'John D.',
                            'content' => 'In the realm of technology blogging, captivating your audience goes beyond just
                                        the written word. Incorporating eye-catching CSS animations can elevate your
                                        content and provide…',
                            'date' => '19/05/2023',
                            'color' => '#E32525',
                            'img' =>
                                'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                        ],
                        [
                            'category' => 'Test nè',
                            'duration' => 4,
                            'title' => 'Test dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè i ơi là dài nè dài ơi là dài nè
                                        dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè',
                            'name' => 'John D.',
                            'content' => 'In the realm of technology blogging, captivating your audience goes beyond just
                                        the written word. Incorporating eye-catching CSS animations can elevate your
                                        content and provide…',
                            'date' => '19/05/2023',
                            'color' => '#E32525',
                            'img' =>
                                'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                        ],
                    ];
                @endphp
                @foreach ($posts as $post)
                    <article
                        class="bg-white p-6 rounded-md shadow hover:shadow-lg transition duration-300 relative overflow-x-hidden cursor-default">
                        <div class="flex flex-col gap-4">
                            <div class="flex w-full justify-end">
                                <div class="w-fit h-8">
                                    <div
                                        class="w-fit h-8 absolute rounded-full bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 hover:translate-x-2 cursor-pointer">
                                        <span>{{ $post['category'] }}</span>
                                    </div>
                                </div>
                                <div class="flex gap-4 items-center">
                                    <div class="flex w-5 justify-center">
                                        <div class="text-xl font-light text-btn-bg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <rect width="18" height="15" x="3" y="6"
                                                        stroke="currentColor" rx="2" />
                                                    <path fill="currentColor"
                                                        d="M3 10c0-1.886 0-2.828.586-3.414S5.114 6 7 6h10c1.886 0 2.828 0 3.414.586S21 8.114 21 10z" />
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        d="M7 3v3m10-3v3" />
                                                    <rect width="4" height="2" x="7" y="12" fill="currentColor"
                                                        rx=".5" />
                                                    <rect width="4" height="2" x="7" y="16" fill="currentColor"
                                                        rx=".5" />
                                                    <rect width="4" height="2" x="13" y="12"
                                                        fill="currentColor" rx=".5" />
                                                    <rect width="4" height="2" x="13" y="16"
                                                        fill="currentColor" rx=".5" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-xs text-[#4D6385]">{{ $post['date'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 sm:gap-4">
                                <div class="relative group/title">
                                    <a href="#"
                                        class="relative cursor-pointer font-manrope font-semibold text-xl text-center leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200"
                                        title="{{ $post['title'] }}">{{ $post['title'] }}
                                    </a>
                                    {{-- <div
                                    class="absolute -bottom-14 flex flex-col items-center hidden mb-5 group-hover/title:flex">
                                    <div class="w-3 h-3 -mt-2 rotate-135 bg-black"></div>
                                    <span
                                        class="relative rounded-md z-10 p-2 leading-normal text-white whitespace-no-wrap bg-black shadow-lg"
                                        style="font-size: 10px">Test
                                        dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài ơi là dài nè dài
                                        ơi là dài nè dài ơi là dài nè dài ơi là dài nè</span>
                                </div> --}}
                                </div>
                                <span
                                    class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3 text-center"
                                    title="{{ $post['content'] }}">{{ $post['content'] }}</span>

                            </div>
                            <div class="flex gap-4 justify-center">
                                <div class="flex flex-col gap-3">
                                    <div class="flex gap-4 items-center">
                                        <div class="flex">
                                            <div>
                                                <img class="w-5 aspect-1 rounded-full !object-cover"
                                                    style="aspect-ratio: 1/1" src="{{ $post['img'] }}"
                                                    alt="{{ $post['name'] }}">
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <p class="text-xs text-[#4D6385]">{{ $post['name'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-4 items-center">
                                    <div class="flex w-5 justify-center">
                                        <div class="text-sm font-light text-btn-bg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 1000 1000">
                                                <path fill="currentColor"
                                                    d="M1000 501q0 136-67 251T751 934t-251 67t-251-67T67 752T0 501t67-251T249 68T500 1t251 67t182 182t67 251m-117 0q0-158-112.5-270.5T500 118q-126 0-226 74l2 2q-48 35-83 83l-2-2q-74 100-74 226q0 158 112.5 270.5T500 884q126 0 226-74l-2-2q48-35 83-83l2 2q74-100 74-226M680 701q0 25-17.5 42.5T620 761q-26 0-42-18L458 623q-18-18-18-62V241q0-25 17.5-42.5T500 181t42.5 17.5T560 241v315l102 103q18 16 18 42" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-xs text-[#4D6385]">{{ $post['duration'] }} phút đọc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="flex justify-center mt-14">
                <div class="flex items-center gap-6">
                    <div>
                        <button
                            class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Trang
                            trước</button>
                    </div>
                    <span>Trang 2 trên 10</span>
                    <div>
                        <button
                            class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Trang
                            sau</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script>
            function handleNavigateBlogCategory(categoryTitle) {
                if (categoryTitle.trim()) {
                    const slug = categoryTitle.trim().toLowerCase().replace(/\s+/g, '-');
                    window.location.href = `/blog/category/${slug}`;
                }
            }
        </script>
    @endpush
</x-app-layout>
