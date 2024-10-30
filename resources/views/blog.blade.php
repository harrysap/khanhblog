<x-layouts.appclient>
    <div class="mt-[-24px] md:mt-0">
        <section class="flex md:hidden md:pb-8 max-w-default mx-auto px-4 sm:px-6 justify-center">
            <a href="https://www.udemy.com/course/sap-s4hana-for-beginners/?fbclid=IwY2xjawGNjGhleHRuA2FlbQIxMAABHdJ10B8tcRmASOKwpeHBynpmMdxJUuwKm-ZExlwog9KnaGgGp0aOLOjI-Q_aem_1oMlMK52oIbNxp1zqBvhHw&couponCode=80D2208CC4FCA5197F87"
                target="_blank">
                <img class="w-full h-full object-cover rounded-sm shadow-md"
                    src="{{ asset('storage/assets/advertisement-course.gif') }}" alt="ads-banner-1">
            </a>
        </section>
        <section class="max-w-default mx-auto flex px-4 md:px-2 flex-col justify-between gap-6">
            <div class="flex justify-center flex-col default:flex-row gap-8">
                <!-- Cột trái -->
                <div
                    class="w-full md:w-[96%] md:mx-auto default:mx-0 default:-mr-[15px] default:w-3/4 mr-2 z-10 overflow-visible">
                    <div
                        class="h-fit rounded-xl mt-8 bg-white shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] px-4 py-6 md:p-6">
                        <div id="blog-title" class="flex flex-col gap-4 items-center">
                            <h1
                                class="font-bold text-xl md:text-3xl default:text-4xl text-center leading-relaxed default:!leading-normal">
                                {{ App::getLocale() === 'vi' ? $article->title : $article->title_en ?? $article->title }}
                            </h1>
                            <div class="flex gap-2 text-sm font-light text-btn-bg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path d="M8 2v4m8-4v4" />
                                        <rect width="18" height="18" x="3" y="4" rx="2" />
                                        <path d="M3 10h18M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                    </g>
                                </svg>
                                <p class="text-xs text-[#4D6385] font-semibold">Ngày đăng:</p>
                                <span class="text-xs text-[#4D6385]">{{ $article->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>

                        <div class="rounded-xl w-full h-auto overflow-hidden my-4">
                            <img class="object-cover w-full h-auto" src="{{ $article->featurePhoto }}"
                                alt="{{ $article->photo_alt_text }}">
                        </div>

                        <div
                            class="font-manrope sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl mx-auto
                                prose-a:break-words
                                prose-blockquote:not-italic
                                prose-code:break-words
                                prose-code:bg-black-100
                                p-code:bg-merino
                                prose-code:font-normal prose-code:before:hidden
                                prose-code:after:hidden [&_p]:before:hidden [&_p]:after:hidden blog-container">
                            <style>
                                .blog-container * {
                                    max-width: 100%;
                                    height: auto;
                                    box-sizing: border-box;
                                }

                                .blog-container {
                                    line-height: 1.6;
                                }

                                .blog-container h2,
                                .blog-container h3 {
                                    color: #333;
                                    font-size: 20px;
                                    font-weight: 500;
                                }

                                .blog-container h1 {
                                    font-weight: 700;
                                    font-size: 22px;
                                    margin-bottom: 15px;
                                }

                                .blog-container p {
                                    margin-bottom: 20px;
                                }

                                .blog-container img {
                                    width: 100%;
                                    height: auto;
                                    border-radius: 5px;
                                    margin: 20px 0;
                                }

                                .blog-container blockquote {
                                    border-left: 5px solid #007bff;
                                    padding-left: 20px;
                                    color: #555;
                                    margin: 20px 0;
                                }

                                .blog-container ul {
                                    list-style-type: disc;
                                    padding-left: 20px;
                                }

                                .blog-container a {
                                    color: #007bff;
                                    text-decoration: none;
                                }

                                .blog-container a:hover {
                                    text-decoration: underline;
                                }
                            </style>
                            {!! App::getLocale() === 'vi' ? $article->body : $article->body_en ?? $article->body !!}
                        </div>

                        <div class="mt-14">
                            <div class="flex gap-2">
                                @if ($article->tags && $article->tags->isNotEmpty())
                                    <p class="font-semibold text-nowrap">Thẻ được gắn:</p>
                                    <div class="flex flex-wrap gap-4">
                                        @foreach ($article->tags as $tag)
                                            <a href="/blog/tag/{{ $tag->slug }}"
                                                class="py-1 px-3 rounded ease duration-200 text-[#4D6385] text-xs shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                                {{ $tag->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="flex flex-col items-center py-8 my-8 border-t-[1px] border-border-main">
                                <div class="flex gap-3 items-center">
                                    <p class="font-semibold">Chia sẻ bài viết</p>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                        target="_blank" class="text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 256 256">
                                            <path fill="#1877f2"
                                                d="M256 128C256 57.308 198.692 0 128 0S0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
                                            <path fill="#fff"
                                                d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A129 129 0 0 0 128 256a129 129 0 0 0 20-1.555V165z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}"
                                        target="_blank" class="text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 256 256">
                                            <g fill="none">
                                                <rect width="256" height="256" fill="#fff" rx="60" />
                                                <rect width="256" height="256" fill="#0a66c2" rx="60" />
                                                <path fill="#fff"
                                                    d="M184.715 217.685h29.27a4 4 0 0 0 4-3.999l.015-61.842c0-32.323-6.965-57.168-44.738-57.168c-14.359-.534-27.9 6.868-35.207 19.228a.32.32 0 0 1-.595-.161V101.66a4 4 0 0 0-4-4h-27.777a4 4 0 0 0-4 4v112.02a4 4 0 0 0 4 4h29.268a4 4 0 0 0 4-4v-55.373c0-15.657 2.97-30.82 22.381-30.82c19.135 0 19.383 17.916 19.383 31.834v54.364a4 4 0 0 0 4 4M38 59.628c0 11.864 9.767 21.626 21.632 21.626c11.862-.001 21.623-9.769 21.623-21.631C81.253 47.761 71.491 38 59.628 38C47.762 38 38 47.763 38 59.627m6.959 158.058h29.307a4 4 0 0 0 4-4V101.66a4 4 0 0 0-4-4H44.959a4 4 0 0 0-4 4v112.025a4 4 0 0 0 4 4" />
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="mailto:?subject={{ urlencode($article->title) }}&body={{ urlencode($article->sub_title) }}%0A%0ARead more: {{ urlencode(url()->current()) }}"
                                        target="_blank" class="text-lg text-icon-main">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="m20 8l-8 5l-8-5V6l8 5l8-5m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2" />
                                        </svg>
                                    </a>
                                    <a href="https://wa.me/?text={{ urlencode($article->title) }}%0A{{ urlencode(url()->current()) }}"
                                        target="_blank" class="text-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 256 258">
                                            <defs>
                                                <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%"
                                                    y1="100%" y2="0%">
                                                    <stop offset="0%" stop-color="#1faf38" />
                                                    <stop offset="100%" stop-color="#60d669" />
                                                </linearGradient>
                                                <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%"
                                                    y1="100%" y2="0%">
                                                    <stop offset="0%" stop-color="#f9f9f9" />
                                                    <stop offset="100%" stop-color="#fff" />
                                                </linearGradient>
                                            </defs>
                                            <path fill="url(#logosWhatsappIcon0)"
                                                d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                                            <path fill="url(#logosWhatsappIcon1)"
                                                d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
                                            <path fill="#fff"
                                                d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                                        </svg>
                                    </a>
                                </div>
                                <div x-data="{ currentLink: window.location.href }"
                                    class="flex flex-col gap-2 font-medium w-full sm:w-8/12 mt-4">
                                    <div
                                        class="w-full flex justify-between px-3 py-1.5 pl-3.5 gap-3 border rounded-md bg-white text-sm border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                                        <input readonly type="blog-link-input" id="blog-link-input" name="blog-link"
                                            placeholder="Nhập địa chỉ email" x-model="currentLink"
                                            class="focus:outline-none font-manrope w-full placeholder-[#707070]">
                                        <div x-data="{ copied: false }">
                                            <button
                                                @click="navigator.clipboard.writeText(currentLink).then(() => { 
                                                        copied = true; 
                                                        setTimeout(() => copied = false, 4000); 
                                                    })"
                                                :disabled="copied"
                                                :class="copied ? 'bg-black cursor-not-allowed' :
                                                    'bg-btn-bg hover:bg-btn-dark cursor-pointer'"
                                                class="py-2 px-[22px] text-nowrap rounded text-white ease duration-200 transition-all">
                                                <span x-text="copied ? 'Đã lưu!' : 'Sao chép link'"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Navigation --}}
                    <div class="flex flex-col md:flex-row items-center justify-between w-full mx-auto my-8 gap-10">
                        <!-- Previous Article -->
                        @if ($previous_blog)
                            <a href="/blog/{{ $previous_blog->category_slug }}/{{ $previous_blog->slug }}"
                                title="{{ App::getLocale() === 'vi' ? $previous_blog->title : $previous_blog->title_en ?? $previous_blog->title }}"
                                class="flex items-center justify-between bg-btn-lg text-white p-6 pl-0 rounded-lg w-full md:w-1/2 overflow-hidden cursor-pointer group/previousBtn"
                                style="background-color: {{ $previous_blog->background }}">
                                <div class="grid grid-cols-7 items-center gap-4">
                                    <div
                                        class="col-span-1 bg-white text-btn-lg rounded-full w-20 h-8 flex items-center justify-end pr-3 -translate-x-12 ease-linear duration-200 group-hover/previousBtn:-translate-x-10">
                                        <!-- Icon left arrow -->
                                        <span class="font-semibold text-text-primary">&larr;</span>
                                    </div>
                                    <div class="w-full col-span-6">
                                        <p class="text-sm font-manrope">Bài Viết Trước Đó</p>
                                        <p class="font-semibold line-clamp-2 h-[48px]">
                                            {{ App::getLocale() === 'vi' ? $previous_blog->title : $previous_blog->title_en ?? $previous_blog->title }}
                                            {{-- Displaying Images in HTML: The img tag a masterclass dài thêm nha dài thêm nha dài thêm nha dài thêm --}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endif

                        <div
                            class="hidden md:block w-[2px] h-14 rounded-full bg-border-main {{ !$previous_blog || !$next_blog ? 'opacity-0' : '' }}">
                        </div>

                        <!-- Next Article -->
                        @if ($next_blog)
                            <a href="/blog/{{ $next_blog->category_slug }}/{{ $next_blog->slug }}"
                                title="{{ App::getLocale() === 'vi' ? $next_blog->title : $next_blog->title_en ?? $next_blog->title }}"
                                class="flex items-center justify-between bg-btn-lg text-white p-6 pr-0 rounded-lg w-full md:w-1/2 overflow-hidden cursor-pointer group/nextBtn"
                                style="background-color: {{ $next_blog->background }}">
                                <div class="grid grid-cols-7 items-center gap-4">
                                    <div class="text-right col-span-6">
                                        <p class="text-sm font-manrope">Bài Viết Tiếp Theo</p>
                                        <p class="font-semibold line-clamp-2 h-[48px]">
                                            {{ App::getLocale() === 'vi' ? $next_blog->title : $next_blog->title_en ?? $next_blog->title }}
                                            {{-- Displaying Images in HTML: The img tag a masterclass dài thêm nha dài thêm nha dài thêm nha dài thêm nha --}}
                                        </p>
                                    </div>
                                    <div
                                        class="col-span-1 bg-white text-btn-lg rounded-full w-20 h-8 flex items-center justify-start pl-3 sm:translate-x-5 md:translate-x-1 default:translate-x-2 ease-linear duration-200 md:group-hover/nextBtn:translate-x-0">
                                        <!-- Icon right arrow -->
                                        <span class="font-semibold text-text-primary">&rarr;</span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>

                    {{-- Categories --}}
                    <div
                        class="bg-white rounded-lg shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] p-4 sm:p-8 py-6 sm:py-10 mx-auto my-8">
                        <!-- Header Section -->
                        <div class="flex flex-col gap-4 sm:gap-0 sm:flex-row items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="flex gap-4 items-center cursor-pointer group">
                                    <a href="/blog/category/{{ $article->categories->first()->slug }}">
                                        <div
                                            class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full text-white text-4xl flex justify-center items-center">
                                            {{-- style="background-color: #F95353"> --}}
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M0 6.064v11.872h12.13L24 6.064zm3.264 2.208h.005c.863.001 1.915.245 2.676.633l-.82 1.43c-.835-.404-1.255-.442-1.73-.467c-.708-.038-1.064.215-1.069.488c-.007.332.669.633 1.305.838c.964.306 2.19.715 2.377 1.9L7.77 8.437h2.046l2.064 5.576l-.007-5.575h2.37c2.257 0 3.318.764 3.318 2.519c0 1.575-1.09 2.514-2.936 2.514h-.763l-.01 2.094l-3.588-.003l-.25-.908c-.37.122-.787.189-1.23.189c-.456 0-.885-.071-1.263-.2l-.358.919l-2 .006l.09-.462q-.043.038-.087.074c-.535.43-1.208.629-2.037.644l-.213.002a5.1 5.1 0 0 1-2.581-.675l.73-1.448c.79.467 1.286.572 1.956.558c.347-.007.598-.07.761-.239a.56.56 0 0 0 .156-.369c.007-.376-.53-.553-1.185-.756c-.531-.164-1.135-.389-1.606-.735c-.559-.41-.825-.924-.812-1.65a2 2 0 0 1 .566-1.377c.519-.537 1.357-.863 2.363-.863m10.597 1.67v1.904h.521c.694 0 1.247-.23 1.248-.964c0-.709-.554-.94-1.248-.94zm-5.087.767l-.748 2.362c.223.085.481.133.757.133c.268 0 .52-.047.742-.126l-.736-2.37z" />
                                        </svg> --}}
                                            <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                                                src="{{ asset('storage/' . $article->categories->first()->svg) }}"
                                                alt="post-img-small-5">
                                            {{-- <div class="absolute z-0 inset-0 rounded-full ring-4 opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100"
                                            style="--tw-ring-color: {{ $$article->categories->first()['secondaryColor'] }};">
                                        </div> --}}
                                        </div>
                                    </a>
                                </div>
                                <div class="ml-4 flex flex-col gap-1.5">
                                    <p class="text-sm text-gray-600 font-manrope">Những bài viết gần đây cùng <span
                                            class="font-semibold">chủ đề</span></p>
                                    @if ($article->categories->isNotEmpty())
                                        <a href="/blog/category/{{ $article->categories->first()->slug }}">
                                            <h2
                                                class="text-2xl font-bold text-gray-800 hover:underline hover:decoration-black ease-in duration-200">
                                                {{ $article->categories->first()->name }}</h2>
                                        </a>
                                    @else
                                        <h2 class="text-2xl font-bold text-gray-800">{{ $article->user->name }}</h>
                                    @endif
                                </div>
                            </div>
                            @if ($article->categories->isNotEmpty())
                                <a href="/blog/category/{{ $article->categories->first()->slug }}"
                                    class="bg-btn-bg text-white px-4 py-2 rounded hover:bg-black transition duration-200"
                                    style="background-color: {{ $article->categories->first()->background }}">
                                    Bài Viết Cùng Chủ Đề
                                </a>
                            @else
                                <a href="/blog"
                                    class="bg-btn-bg text-white px-4 py-2 rounded hover:bg-black transition duration-200">
                                    Xem Toàn Bộ Bài Viết
                                </a>
                            @endif

                        </div>

                        <!-- Articles List -->
                        {{-- <ul class="flex flex-col gap-1 mt-8" x-ref="article_cards_wrapper" x-init="() => {
                            autoAnimate($refs.article_cards_wrapper)
                        }"> --}}
                        <ul class="flex flex-col gap-1 mt-8">
                            @foreach ($category_blogs as $index => $blog)
                                <!-- Article -->
                                <li class="flex gap-3 items-center pl-4">
                                    <div class="font-semibold">
                                        <span
                                            class="w-6 h-[28px] px-4 flex bg-black rounded justify-center items-center text-white ease duration-200 text-sm aspect-1">
                                            {{ $index + 1 }}
                                        </span>
                                    </div>
                                    <a href="/blog/{{ $blog->category_slug }}/{{ $blog->slug }}"
                                        class="font-semibold text-start hover:underline line-clamp-1">
                                        {{ $blog->title ?? $blog->title_en }}
                                    </a>
                                </li>

                                @if ($index < count($category_blogs) - 1)
                                    <li class="flex gap-3 items-center pl-4">
                                        <div class="font-semibold invisible">
                                            <span
                                                class="w-6 h-[28px] px-4 flex bg-black rounded justify-center items-center text-white ease duration-200 text-sm aspect-1">1</span>
                                        </div>
                                        <span class="h-[1px] w-full bg-border-main"></span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>

                    </div>

                    <!-- Comment Form Component -->
                    <div class="">
                        <h3 class="text-lg font-bold mb-4">Để lại Lời nhắn</h3>
                        {{-- <div class="mb-4">
                            <textarea x-model="comment" placeholder="Bình luận" rows="6"
                                class="w-full p-4 border rounded-sm font-manrope resize-none text-text-primary text-xs focus:outline-none focus:ring-1 focus:ring-[rgba(106,78,233,.4)] border-border-main shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] peer outline-none ring ring-gray-200 duration-500 focus:border-transparent relative focus:shadow-[0px_0px_10px_-3px_rgba(106,78,233,.4)]"></textarea>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <input x-model="name" type="text" placeholder="Tên"
                                class="w-full p-2 px-3 border rounded-sm font-manrope text-text-primary text-xs focus:outline-none focus:ring-1 focus:ring-[rgba(106,78,233,.4)] border-border-main shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] peer outline-none ring ring-gray-200 duration-500 focus:border-transparent relative focus:shadow-[0px_0px_10px_-3px_rgba(106,78,233,.4)]">
                            <input x-model="email" type="email" placeholder="Email"
                                class="w-full p-2 px-3 border rounded-sm font-manrope text-text-primary text-xs focus:outline-none focus:ring-1 focus:ring-[rgba(106,78,233,.4)] border-border-main shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] peer outline-none ring ring-gray-200 duration-500 focus:border-transparent relative focus:shadow-[0px_0px_10px_-3px_rgba(106,78,233,.4)]">
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <input x-model="phone" type="text" placeholder="Số điện thoại"
                                class="w-full p-2 px-3 border rounded-sm font-manrope text-text-primary text-xs focus:outline-none focus:ring-1 focus:ring-[rgba(106,78,233,.4)] border-border-main shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] peer outline-none ring ring-gray-200 duration-500 focus:border-transparent relative focus:shadow-[0px_0px_10px_-3px_rgba(106,78,233,.4)]">
                            <select x-model="gender"
                                class="w-full p-2 px-3 border rounded-sm font-manrope text-text-primary text-xs focus:outline-none focus:ring-1 focus:ring-[rgba(106,78,233,.4)] border-border-main shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] peer outline-none ring ring-gray-200 duration-500 focus:border-transparent relative focus:shadow-[0px_0px_10px_-3px_rgba(106,78,233,.4)]">
                                <option value="">Chọn giới tính</option>
                                <option value="male">Nam</option>
                                <option value="female">Nữ</option>
                                <option value="other">Khác</option>
                            </select>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="saveInfo" x-model="saveInfo" type="checkbox" value=""
                                class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="saveInfo" class="ms-2 text-sm">Lưu thông tin trên website này cho lần bình
                                luận
                                tiếp theo.</label>
                        </div>
                        <button @click="submitComment()"
                            class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">
                            Đăng bài
                        </button> --}}
                        {{-- <div class="fb-comments w-full" data-href="{{ url()->current() }}" data-width=""
                            data-numposts="5"></div> --}}
                        <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%"
                            data-numposts="5">
                        </div>
                    </div>

                </div>

                <!-- Cột phải -->
                <div x-data="{ openSections: { 1: true, 2: false, 3: false } }" class="hidden default:block default:w-1/4 sticky top-16 h-fit pt-8">
                    <!-- Title -->
                    <div class="flex gap-4 items-center">
                        <span class="text-[#FF2AAC]"><svg width="20" height="20" viewBox="0 0 207 230"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M177.985 2.65187C178.905 0.559514 181.743 0.454872 182.855 2.33801L183.015 2.65187L185.855 9.10842C188.338 14.7532 192.465 19.4885 197.675 22.6894L198.553 23.2085L203.597 26.0756C205.364 27.0802 205.462 29.5637 203.891 30.7323L203.597 30.9243L198.553 33.7915C193.225 36.8199 188.948 41.4176 186.284 46.9593L185.855 47.8916L183.015 54.3481C182.095 56.4405 179.257 56.5451 178.145 54.662L177.985 54.3481L175.145 47.8916C172.662 42.247 168.535 37.5116 163.325 34.3106L162.447 33.7915L157.403 30.9243C155.636 29.9201 155.538 27.4366 157.109 26.2676L157.403 26.0756L162.447 23.2085C167.775 20.1801 172.052 15.5825 174.716 10.0407L175.145 9.10842L177.985 2.65187Z"
                                    fill="#010afe" />
                                <path
                                    d="M175.985 1.65187C176.905 -0.440486 179.743 -0.545128 180.855 1.33801L181.015 1.65187L183.855 8.10842C186.338 13.7532 190.465 18.4885 195.675 21.6894L196.553 22.2085L201.597 25.0756C203.364 26.0802 203.462 28.5637 201.891 29.7323L201.597 29.9243L196.553 32.7915C191.225 35.8199 186.948 40.4176 184.284 45.9593L183.855 46.8916L181.015 53.3481C180.095 55.4405 177.257 55.5451 176.145 53.662L175.985 53.3481L173.145 46.8916C170.662 41.247 166.535 36.5116 161.325 33.3106L160.447 32.7915L155.403 29.9243C153.636 28.9201 153.538 26.4366 155.109 25.2676L155.403 25.0756L160.447 22.2085C165.775 19.1801 170.052 14.5825 172.716 9.04067L173.145 8.10842L175.985 1.65187Z"
                                    fill="#FF2AAC" />
                                <path
                                    d="M95.0792 11.7576C98.8924 3.19801 110.648 2.76993 115.255 10.4737L115.921 11.7576L127.686 38.1708C137.972 61.2632 155.07 80.6346 176.652 93.7295L180.289 95.8531L201.186 107.582C208.507 111.692 208.914 121.852 202.406 126.632L201.186 127.418L180.289 139.147C158.217 151.536 140.498 170.345 129.462 193.015L127.686 196.829L115.921 223.242C112.109 231.802 100.352 232.23 95.7443 224.526L95.0792 223.242L83.3146 196.829C73.0292 173.738 55.9299 154.365 34.3481 141.271L30.71 139.147L9.81289 127.418C2.49301 123.31 2.08625 113.15 8.5929 108.367L9.81289 107.582L30.71 95.8531C52.7827 83.4638 70.5023 64.6557 81.5376 41.9846L83.3146 38.1708L95.0792 11.7576Z"
                                    fill="#010afe" />
                                <path
                                    d="M91.0792 8.75792C94.8924 0.197554 106.648 -0.229829 111.255 7.47396L111.921 8.75792L123.686 35.1712C133.972 58.2627 151.07 77.6349 172.652 90.7297L176.289 92.8531L197.186 104.582C204.507 108.692 204.914 118.852 198.406 123.632L197.186 124.418L176.289 136.147C154.217 148.536 136.498 167.345 125.462 190.015L123.686 193.829L111.921 220.242C108.109 228.802 96.3518 229.23 91.7443 221.526L91.0792 220.242L79.3142 193.829C69.0294 170.738 51.9304 151.365 30.3482 138.271L26.71 136.147L5.81293 124.418C-1.50702 120.31 -1.91373 110.15 4.59288 105.367L5.81293 104.582L26.71 92.8531C48.7831 80.4643 66.502 61.6556 77.5377 38.9843L79.3142 35.1712L91.0792 8.75792Z"
                                    fill="#FF2AAC" />
                            </svg></span>

                        <h2 class="font-semibold text-lg">Thông Tin Bài Viết</h2>
                    </div>

                    <!-- Section 1 -->
                    <div class="mt-4 rounded-xl bg-white border border-border-main shadow-sm p-4 flex flex-col gap-4">
                        <div class="flex gap-1">
                            <div class="flex gap-2">
                                <div class="text-sm font-light text-btn-bg w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path
                                                d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z" />
                                            <circle cx="7.5" cy="7.5" r=".5" fill="currentColor" />
                                        </g>
                                    </svg>
                                </div>
                                <p class="text-sm text-[#4D6385] font-semibold">Chủ đề:</p>
                            </div>
                            @if ($article->categories->isNotEmpty())
                                <span class="text-sm text-[#4D6385]">{{ $article->categories->first()->name }}</span>
                            @else
                                <span class="text-sm text-[#4D6385]"><i>Không xác định</i></span>
                            @endif
                            </span>
                        </div>
                        <div class="flex gap-1">
                            <div class="flex gap-2">
                                <div class="text-sm font-light text-btn-bg w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <circle cx="12" cy="8" r="5" />
                                            <path d="M20 21a8 8 0 0 0-16 0" />
                                        </g>
                                    </svg>
                                </div>
                                <p class="text-sm text-[#4D6385] font-semibold">Tác giả:</p>
                            </div>
                            <span class="text-sm text-[#4D6385]">{{ $article->user->name }}</span>
                        </div>
                        {{-- <div class="flex gap-1">
                            <div class="flex gap-2">
                                <div class="text-sm font-light text-btn-bg w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path d="M10 2h4m-2 12l3-3" />
                                            <circle cx="12" cy="14" r="8" />
                                        </g>
                                    </svg>
                                </div>
                                <p class="text-sm text-[#4D6385] font-semibold">Thời lượng đọc:</p>
                            </div>
                            <span class="text-sm text-[#4D6385]">{{ $reading_time }}</span>
                        </div> --}}
                        {{-- <div class="flex gap-1">
                            <div class="flex gap-2">
                                <div class="text-sm font-light text-btn-bg w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M12 6v6H7.5" />
                                        </g>
                                    </svg>
                                </div>
                                <p class="text-sm text-[#4D6385] font-semibold">Ngày cập nhật:</p>
                            </div>
                            <span class="text-sm text-[#4D6385]">
                                @if ($article->updated_at->diffInDays(now()) > 30)
                                    {{ $article->updated_at->format('d/m/Y') }}
                                @else
                                    {{ $article->updated_at->diffForHumans() }}
                                @endif
                            </span>
                        </div> --}}

                    </div>

                    <!-- Title -->
                    @if ($article->tags && $article->tags->isNotEmpty())
                        <div class="flex gap-4 items-center mt-8">
                            <span class="text-[#FF2AAC]"><svg width="20" height="20" viewBox="0 0 207 230"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M177.985 2.65187C178.905 0.559514 181.743 0.454872 182.855 2.33801L183.015 2.65187L185.855 9.10842C188.338 14.7532 192.465 19.4885 197.675 22.6894L198.553 23.2085L203.597 26.0756C205.364 27.0802 205.462 29.5637 203.891 30.7323L203.597 30.9243L198.553 33.7915C193.225 36.8199 188.948 41.4176 186.284 46.9593L185.855 47.8916L183.015 54.3481C182.095 56.4405 179.257 56.5451 178.145 54.662L177.985 54.3481L175.145 47.8916C172.662 42.247 168.535 37.5116 163.325 34.3106L162.447 33.7915L157.403 30.9243C155.636 29.9201 155.538 27.4366 157.109 26.2676L157.403 26.0756L162.447 23.2085C167.775 20.1801 172.052 15.5825 174.716 10.0407L175.145 9.10842L177.985 2.65187Z"
                                        fill="#010afe" />
                                    <path
                                        d="M175.985 1.65187C176.905 -0.440486 179.743 -0.545128 180.855 1.33801L181.015 1.65187L183.855 8.10842C186.338 13.7532 190.465 18.4885 195.675 21.6894L196.553 22.2085L201.597 25.0756C203.364 26.0802 203.462 28.5637 201.891 29.7323L201.597 29.9243L196.553 32.7915C191.225 35.8199 186.948 40.4176 184.284 45.9593L183.855 46.8916L181.015 53.3481C180.095 55.4405 177.257 55.5451 176.145 53.662L175.985 53.3481L173.145 46.8916C170.662 41.247 166.535 36.5116 161.325 33.3106L160.447 32.7915L155.403 29.9243C153.636 28.9201 153.538 26.4366 155.109 25.2676L155.403 25.0756L160.447 22.2085C165.775 19.1801 170.052 14.5825 172.716 9.04067L173.145 8.10842L175.985 1.65187Z"
                                        fill="#FF2AAC" />
                                    <path
                                        d="M95.0792 11.7576C98.8924 3.19801 110.648 2.76993 115.255 10.4737L115.921 11.7576L127.686 38.1708C137.972 61.2632 155.07 80.6346 176.652 93.7295L180.289 95.8531L201.186 107.582C208.507 111.692 208.914 121.852 202.406 126.632L201.186 127.418L180.289 139.147C158.217 151.536 140.498 170.345 129.462 193.015L127.686 196.829L115.921 223.242C112.109 231.802 100.352 232.23 95.7443 224.526L95.0792 223.242L83.3146 196.829C73.0292 173.738 55.9299 154.365 34.3481 141.271L30.71 139.147L9.81289 127.418C2.49301 123.31 2.08625 113.15 8.5929 108.367L9.81289 107.582L30.71 95.8531C52.7827 83.4638 70.5023 64.6557 81.5376 41.9846L83.3146 38.1708L95.0792 11.7576Z"
                                        fill="#010afe" />
                                    <path
                                        d="M91.0792 8.75792C94.8924 0.197554 106.648 -0.229829 111.255 7.47396L111.921 8.75792L123.686 35.1712C133.972 58.2627 151.07 77.6349 172.652 90.7297L176.289 92.8531L197.186 104.582C204.507 108.692 204.914 118.852 198.406 123.632L197.186 124.418L176.289 136.147C154.217 148.536 136.498 167.345 125.462 190.015L123.686 193.829L111.921 220.242C108.109 228.802 96.3518 229.23 91.7443 221.526L91.0792 220.242L79.3142 193.829C69.0294 170.738 51.9304 151.365 30.3482 138.271L26.71 136.147L5.81293 124.418C-1.50702 120.31 -1.91373 110.15 4.59288 105.367L5.81293 104.582L26.71 92.8531C48.7831 80.4643 66.502 61.6556 77.5377 38.9843L79.3142 35.1712L91.0792 8.75792Z"
                                        fill="#FF2AAC" />
                                </svg></span>

                            <h2 class="font-semibold text-lg">Tag Cloud</h2>
                        </div>

                        <div
                            class="mt-4 rounded-xl bg-white border border-border-main shadow-sm p-4 flex flex-wrap gap-4">
                            @foreach ($article->tags as $tag)
                                <a href="/blog/tag/{{ $tag->slug }}" class="flex items-center gap-2 h-4">
                                    <span class="align-middle">•</span>
                                    <span class="text-[#4D6385] text-xs">
                                        {{ $tag->name }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    @endif

                    <div class="flex gap-4 items-center mt-8">
                        <span class="text-[#FF2AAC]"><svg width="20" height="20" viewBox="0 0 207 230"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M177.985 2.65187C178.905 0.559514 181.743 0.454872 182.855 2.33801L183.015 2.65187L185.855 9.10842C188.338 14.7532 192.465 19.4885 197.675 22.6894L198.553 23.2085L203.597 26.0756C205.364 27.0802 205.462 29.5637 203.891 30.7323L203.597 30.9243L198.553 33.7915C193.225 36.8199 188.948 41.4176 186.284 46.9593L185.855 47.8916L183.015 54.3481C182.095 56.4405 179.257 56.5451 178.145 54.662L177.985 54.3481L175.145 47.8916C172.662 42.247 168.535 37.5116 163.325 34.3106L162.447 33.7915L157.403 30.9243C155.636 29.9201 155.538 27.4366 157.109 26.2676L157.403 26.0756L162.447 23.2085C167.775 20.1801 172.052 15.5825 174.716 10.0407L175.145 9.10842L177.985 2.65187Z"
                                    fill="#010afe" />
                                <path
                                    d="M175.985 1.65187C176.905 -0.440486 179.743 -0.545128 180.855 1.33801L181.015 1.65187L183.855 8.10842C186.338 13.7532 190.465 18.4885 195.675 21.6894L196.553 22.2085L201.597 25.0756C203.364 26.0802 203.462 28.5637 201.891 29.7323L201.597 29.9243L196.553 32.7915C191.225 35.8199 186.948 40.4176 184.284 45.9593L183.855 46.8916L181.015 53.3481C180.095 55.4405 177.257 55.5451 176.145 53.662L175.985 53.3481L173.145 46.8916C170.662 41.247 166.535 36.5116 161.325 33.3106L160.447 32.7915L155.403 29.9243C153.636 28.9201 153.538 26.4366 155.109 25.2676L155.403 25.0756L160.447 22.2085C165.775 19.1801 170.052 14.5825 172.716 9.04067L173.145 8.10842L175.985 1.65187Z"
                                    fill="#FF2AAC" />
                                <path
                                    d="M95.0792 11.7576C98.8924 3.19801 110.648 2.76993 115.255 10.4737L115.921 11.7576L127.686 38.1708C137.972 61.2632 155.07 80.6346 176.652 93.7295L180.289 95.8531L201.186 107.582C208.507 111.692 208.914 121.852 202.406 126.632L201.186 127.418L180.289 139.147C158.217 151.536 140.498 170.345 129.462 193.015L127.686 196.829L115.921 223.242C112.109 231.802 100.352 232.23 95.7443 224.526L95.0792 223.242L83.3146 196.829C73.0292 173.738 55.9299 154.365 34.3481 141.271L30.71 139.147L9.81289 127.418C2.49301 123.31 2.08625 113.15 8.5929 108.367L9.81289 107.582L30.71 95.8531C52.7827 83.4638 70.5023 64.6557 81.5376 41.9846L83.3146 38.1708L95.0792 11.7576Z"
                                    fill="#010afe" />
                                <path
                                    d="M91.0792 8.75792C94.8924 0.197554 106.648 -0.229829 111.255 7.47396L111.921 8.75792L123.686 35.1712C133.972 58.2627 151.07 77.6349 172.652 90.7297L176.289 92.8531L197.186 104.582C204.507 108.692 204.914 118.852 198.406 123.632L197.186 124.418L176.289 136.147C154.217 148.536 136.498 167.345 125.462 190.015L123.686 193.829L111.921 220.242C108.109 228.802 96.3518 229.23 91.7443 221.526L91.0792 220.242L79.3142 193.829C69.0294 170.738 51.9304 151.365 30.3482 138.271L26.71 136.147L5.81293 124.418C-1.50702 120.31 -1.91373 110.15 4.59288 105.367L5.81293 104.582L26.71 92.8531C48.7831 80.4643 66.502 61.6556 77.5377 38.9843L79.3142 35.1712L91.0792 8.75792Z"
                                    fill="#FF2AAC" />
                            </svg></span>

                        <h2 class="font-semibold text-lg">Bài Viết Gần Đây</h2>
                    </div>

                    {{-- <div id="toc-container" class="mt-4 pl-2 w-full text-sm max-h-[300px] overflow-y-scroll">
                        <div class="relative">
                            <div id="toc-highlight" class="toc-highlight absolute left-0 h-6 top-0 rounded-full">
                            </div>
                            <ul id="toc-list" class="space-y-4 pl-2">
                            </ul>
                        </div>
                    </div> --}}
                    <div class="flex flex-col gap-6 mt-4">
                        @foreach ($recent_category_blogs as $index => $recentBlog)
                            {{-- {{ $recentBlog->categories[0]->slug}} --}}
                            <div
                                class="flex gap-3 p-2 bg-white rounded-lg shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] group/recommend">
                                <img class="w-24 aspect-1 rounded-lg object-cover hover:transform hover:translate-y-[-5px] transition ease duration-300 cursor-pointer"
                                    src="/storage/{{ $recentBlog->cover_photo_path }}"
                                    alt="{{ $recentBlog->photo_alt_text }}"
                                    onclick="window.location.href = '/blog/{{ $recentBlog->category_slug }}/{{ $recentBlog->slug }}'">
                                <div class="flex flex-col gap-2 py-2.5">
                                    <a href="/blog/{{ $recentBlog->category_slug }}/{{ $recentBlog->slug }}"
                                        class="relative cursor-pointer font-manrope font-semibold text-sm leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200 h-[48px]"
                                        title="{{ $recentBlog->title }}">{{ $recentBlog->title }}</a>
                                    <div class="flex gap-2 items-center">
                                        <div class="flex w-5 justify-center">
                                            <div class="text-sm font-light text-btn-bg">
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
                                            <p class="text-xs text-[#4D6385]">
                                                {{ \Carbon\Carbon::parse($recentBlog['created_at'])->format('d/m/Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="pt-12 max-w-default mx-auto px-4 sm:px-6 default:px-0 flex justify-center">
            <img class="w-full h-full object-cover rounded-sm shadow-md"
               src="{{ asset('storage/assets/advertisement-course.gif') }}" alt="ads-banner-1">
        </section> --}}
        <section>
            <div class="relative bg-white shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] overflow-hidden my-8 md:my-14">
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
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=553287087063901&autoLogAppEvents=1">
        </script>

        <script>
            function handleNavigateBlogCategory(categoryTitle) {
                if (categoryTitle.trim()) {
                    const slug = categoryTitle.trim().toLowerCase().replace(/\s+/g, '-');
                    window.location.href = `/blog/category/${slug}`;
                }
            }

            document.addEventListener('DOMContentLoaded', () => {
                document.addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                });

                document.addEventListener('selectstart', function(e) {
                    e.preventDefault();
                });

                document.addEventListener('copy', function(e) {
                    e.preventDefault();
                });
                // const blogContainer = document.querySelector('.blog-container');
                // const tocList = document.getElementById('toc-list');
                // const tocHighlight = document.getElementById('toc-highlight');

                // const headers = blogContainer.querySelectorAll('h1, h2, h3, h4, h5, h6');
                // if (headers.length == 0) {
                //     document.querySelector("#toc-container").innerHTML = "<span>Bài viết không đánh chỉ mục</span>";
                //     return;
                // }
                // headers.forEach(_ => console.log(_.innerText))
                // const tocItems = [];
                // let lowestLevel = Infinity;


                // headers.forEach((header) => {
                //     const level = parseInt(header.tagName.replace('H', ''), 10);
                //     if (level < lowestLevel) {
                //         lowestLevel = level;
                //     }
                // });


                // headers.forEach((header, index) => {
                //     const id = `header-${index}`;
                //     header.setAttribute('id', id);

                //     const level = parseInt(header.tagName.replace('H', ''), 10);

                //     let displayedLevel = level - (lowestLevel -
                //         1);

                //     const paddingLeft = displayedLevel * 7;

                //     const li = document.createElement('li');
                //     const a = document.createElement('a');
                //     a.className = 'toc-item text-sm block';
                //     a.textContent = header.innerText;
                //     a.setAttribute('data-id', id);
                //     a.style.paddingLeft = `${paddingLeft}px`;
                //     li.appendChild(a);
                //     tocList.appendChild(li);

                //     tocItems.push({
                //         id,
                //         offsetTop: header.offsetTop,
                //         level,
                //         element: a,
                //     });
                // });


                // tocItems.forEach(item => {
                //     if (item.level === lowestLevel) {
                //         item.element.style.display = 'block';
                //     } else {
                //         item.element.style.display = 'none';
                //     }
                // });

                // tocList.addEventListener('click', (e) => {
                //     const item = e.target.closest('.toc-item');
                //     if (item) {
                //         const id = item.getAttribute('data-id');
                //         const targetElement = document.getElementById(id);

                //         targetElement.scrollIntoView({
                //             behavior: 'smooth',
                //             block: 'start'
                //         });

                //         const headerOffset = 80;
                //         const elementPosition = targetElement.getBoundingClientRect().top + window
                //             .pageYOffset; // Get the target element's position
                //         const offsetPosition = elementPosition - headerOffset;

                //         window.scrollTo({
                //             top: offsetPosition,
                //             behavior: 'smooth'
                //         });
                //     }
                // });

                // window.addEventListener('scroll', () => {
                //     const scrollPosition = window.scrollY;

                //     let currentVisibleLevel = lowestLevel;

                //     tocItems.forEach((item, index) => {
                //         if (scrollPosition >= item.offsetTop - 10) {
                //             if (item.level > currentVisibleLevel) {
                //                 let leftIndex = -1;
                //                 let rightIndex = -1;

                //                 for (let i = index - 1; i >= 0; i--) {
                //                     if (tocItems[i].level === currentVisibleLevel) {
                //                         leftIndex = i;
                //                         break;
                //                     }
                //                 }

                //                 for (let i = index + 1; i < tocItems.length; i++) {
                //                     if (tocItems[i].level === currentVisibleLevel) {
                //                         rightIndex = i;
                //                         break;
                //                     }
                //                 }

                //                 tocItems.forEach((innerItem, idx) => {
                //                     if ((idx >= leftIndex && idx <= rightIndex) || innerItem
                //                         .level === currentVisibleLevel) {
                //                         innerItem.element.style.display = 'block';
                //                     } else {
                //                         innerItem.element.style.display = 'none';
                //                     }
                //                 });
                //             } else {
                //                 tocItems.forEach(innerItem => {
                //                     if (innerItem.level === currentVisibleLevel) {
                //                         innerItem.element.style.display = 'block';
                //                     } else {
                //                         innerItem.element.style.display = 'none';
                //                     }
                //                 });
                //             }

                //             document.querySelectorAll('.toc-item').forEach(el => el.classList.remove(
                //                 'toc-active'));
                //             item.element.classList.add('toc-active');

                //             tocHighlight.style.top = `${item.element.offsetTop}px`;
                //             tocHighlight.style.height = `${item.element.offsetHeight}px`;

                //             const tocContainer = document.getElementById('toc-container');
                //             const tocItemPosition = item.element.offsetTop - tocContainer.offsetTop +
                //                 tocContainer.scrollTop;
                //             const tocContainerHeight = tocContainer.clientHeight;

                //             // Adjust scroll position if the item is out of view
                //             if (tocItemPosition < tocContainer.scrollTop || tocItemPosition >=
                //                 tocContainer.scrollTop + tocContainerHeight) {
                //                 tocContainer.scrollTop = tocItemPosition - tocContainerHeight / 2;
                //             }
                //         }
                //     });
                // });
            });
        </script>
    @endpush
</x-layouts.appclient>
