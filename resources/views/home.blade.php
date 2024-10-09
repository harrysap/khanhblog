<x-app-layout>
    <div class="">
        <section
            class="max-w-default mx-auto px-4 sm:px-6 default:px-12 flex flex-col-reverse md:flex-row justify-between gap-14 md:pt-6">
            <div class="self-center">
                <h3 class="font-semibold font-manrope text-4xl mb-6 leading-snug">Xin chào, tôi là <span
                        class="text-btn-bg">Khanh Nguyen</span> 👋</h3>
                <p class="font-manrope leading-relaxed text-base mb-8">Tôi là một <b>chuyên gia công nghệ thiết kế</b> ở
                    Atlanta. Tôi thích làm việc ở
                    front-end của web. Đây là trang web của tôi, <b>Zento</b>, nơi tôi viết blog, chia sẻ và viết hướng
                    dẫn…</p>
                <div class="flex flex-col gap-2 font-medium">
                    <label for="enter-email-subcribe-input" class="font-manrope text-sm">Kết nối với email của bạn</label>
                    <div
                        class="w-full flex justify-between px-3 py-1.5 pl-3.5 gap-3 border rounded-md bg-white text-sm border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                        <input type="email-subcribe-input" id="email-subcribe-input" name="email-subcribe"
                            x-ref="email-subcribe" placeholder="Nhập địa chỉ email"
                            class="focus:outline-none font-manrope w-full placeholder-[#707070]">
                        <div>
                            <button
                                class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Đăng
                                ký</button>
                        </div>
                    </div>
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
                <h2 class="font-bold text-lg">Chủ Đề Trending</h2>
            </div>
            <div class="mx-auto w-full lg:w-11/12 mt-6">
                <div class="lg:rounded-full py-8 px-12 flex flex-col lg:flex-row justify-between bg-white gap-10">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-x-3 gap-y-8 md:flex md:justify-between flex-1">
                        <a href="/blog/category/{{ \Illuminate\Support\Str::slug('Chủ đề 1 dài ơi dài nè') }}">
                            <div class="w-fit flex flex-col mx-auto md:mx-0 items-center cursor-pointer group">
                                <div
                                    class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full bg-bg-category-3 text-white text-4xl flex justify-center items-center">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M0 6.064v11.872h12.13L24 6.064zm3.264 2.208h.005c.863.001 1.915.245 2.676.633l-.82 1.43c-.835-.404-1.255-.442-1.73-.467c-.708-.038-1.064.215-1.069.488c-.007.332.669.633 1.305.838c.964.306 2.19.715 2.377 1.9L7.77 8.437h2.046l2.064 5.576l-.007-5.575h2.37c2.257 0 3.318.764 3.318 2.519c0 1.575-1.09 2.514-2.936 2.514h-.763l-.01 2.094l-3.588-.003l-.25-.908c-.37.122-.787.189-1.23.189c-.456 0-.885-.071-1.263-.2l-.358.919l-2 .006l.09-.462q-.043.038-.087.074c-.535.43-1.208.629-2.037.644l-.213.002a5.1 5.1 0 0 1-2.581-.675l.73-1.448c.79.467 1.286.572 1.956.558c.347-.007.598-.07.761-.239a.56.56 0 0 0 .156-.369c.007-.376-.53-.553-1.185-.756c-.531-.164-1.135-.389-1.606-.735c-.559-.41-.825-.924-.812-1.65a2 2 0 0 1 .566-1.377c.519-.537 1.357-.863 2.363-.863m10.597 1.67v1.904h.521c.694 0 1.247-.23 1.248-.964c0-.709-.554-.94-1.248-.94zm-5.087.767l-.748 2.362c.223.085.481.133.757.133c.268 0 .52-.047.742-.126l-.736-2.37z" />
                                </svg> --}}
                                    <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                                        src="https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2024/03/d61a6f81-1a45-429f-b69a-ac6b567cfd69-150x150.webp"
                                        alt="post-img-small">
                                    <div
                                        class="absolute z-10 -top-2 -right-0.5 rounded-full w-6 aspect-1 bg-text-main text-xs text-white font-bold flex justify-center items-center">
                                        40</div>
                                    <div
                                        class="absolute z-0 inset-0 rounded-full ring-4 ring-bg-category-3-secondary opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100">
                                    </div>
                                </div>
                                <p class="mt-2 text-sm w-full truncate font-manrope" style="max-width: 12ch;"
                                    title="Chủ đề 1 dài ơi dài nè">Chủ đề 1 dài ơi dài nè</p>
                            </div>
                        </a>
                        <a href="/blog/category/{{ \Illuminate\Support\Str::slug('Chủ đề 1 dài ơi dài nè') }}">
                            <div class="w-fit flex flex-col mx-auto md:mx-0 items-center cursor-pointer group">
                                <div
                                    class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full bg-bg-category-1 text-white text-4xl flex justify-center items-center">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M31.518 11.688c.026 0 .064 0 .077-.039c.013-.013.013-.025.013-.038a.07.07 0 0 0-.038-.064c-.026-.013-.052-.013-.09-.013h-.026v.14h.064m-.038-.204c.064 0 .102 0 .128.013c.09.025.09.115.09.14v.039c0 .026-.013.064-.065.09c0 0-.012.012-.025.012l.115.205h-.115l-.09-.192h-.064v.192h-.102v-.499zm.038.703a.445.445 0 0 0 .448-.447a.437.437 0 0 0-.448-.448a.453.453 0 0 0-.447.448c0 .243.204.447.447.447m-.345-.447c0-.192.153-.345.358-.345c.192 0 .345.153.345.345a.344.344 0 0 1-.345.345a.34.34 0 0 1-.358-.345m-3.107 2.851a1.29 1.29 0 0 1-1.24-.933h3.26l.448-.703h-3.708a1.29 1.29 0 0 1 1.24-.934h2.238l.447-.703h-2.736c-1.1 0-1.982.895-1.982 1.982c0 1.1.895 1.982 1.982 1.982h2.353l.447-.704h-2.749m-9.334.704h2.365l.448-.704h-2.749a1.285 1.285 0 0 1-1.292-1.278c0-.716.576-1.279 1.292-1.279h2.238l.447-.703h-2.736c-1.1 0-1.995.895-1.995 1.982c0 1.1.895 1.982 1.982 1.982m-14.487-.69H2.033a1.28 1.28 0 0 1-1.279-1.28c0-.715.576-1.278 1.279-1.278h2.2c.715 0 1.29.575 1.29 1.279c0 .703-.575 1.278-1.278 1.278m-2.263.69h2.301c1.1 0 1.982-.882 1.982-1.981s-.882-1.982-1.982-1.982H1.982A1.99 1.99 0 0 0 0 13.286c0 1.1.895 1.982 1.982 1.982m8.042-1.279a1.342 1.342 0 1 0 0-2.685H6.687v3.964h.767v-3.26h2.52c.357 0 .639.28.639.638c0 .359-.282.64-.64.64H7.825l2.276 1.982h1.113l-1.535-1.292h.345m12.62.601v-3.273h-.767v3.593q0 .154.115.268a.4.4 0 0 0 .282.115h3.478l.447-.703zm-9.334-.703h2.033l-1.074-1.739l-1.982 3.133h-.908l2.404-3.76a.56.56 0 0 1 .473-.242c.192 0 .358.089.46.242l2.417 3.772h-.895l-.422-.703h-2.059zM.371 17.659h1.01l1.227 2.57v-2.57h.653v3.273h-.96l-1.265-2.724v2.711H.371zm3.631 0h2.187v.537H4.705v.78h1.394v.537H4.705v.882H6.24v.537H4.002zm3.593.537h-.972v-.537h2.66v.537h-.972v2.736h-.703v-2.736zm2.532 1.777c.013.23.038.652.792.652c.678 0 .768-.422.768-.588c0-.37-.294-.435-.755-.55c-.498-.128-.716-.179-.882-.294a.73.73 0 0 1-.345-.64c0-.664.626-.958 1.24-.958c.217 0 .652.038.92.32c.18.204.192.421.205.562h-.473c-.025-.41-.37-.499-.69-.499c-.448 0-.73.205-.73.525c0 .294.193.383.59.486c.779.204.869.217 1.06.345c.307.204.32.511.32.652c0 .575-.448 1.023-1.291 1.023c-.243 0-.755-.039-1.01-.371c-.192-.243-.192-.499-.192-.665zm3.196-2.314v2.02c0 .345.077.499.14.588c.206.269.525.32.743.32c.882 0 .882-.69.882-.934V17.66h.435v2.02c0 .179 0 .537-.269.87c-.32.409-.818.447-1.061.447c-.307 0-.857-.09-1.15-.524c-.103-.141-.193-.333-.193-.819V17.66zm3.146 3.273h.447v-3.273h-.447zm2.212 0v-2.89h-1.1v-.383h2.634v.383h-1.099v2.89zm2.084-3.273h2.046v.383h-1.598v1.023h1.521v.384h-1.521v1.087h1.636v.396h-2.084z" />
                                </svg> --}}
                                    <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                                        src="https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2024/03/surfer-on-a-pink-background-in-the-style-of-minimalist-sets-vector-chrome-plated-subtle-color-variations-kinuko-y-craft-dan-matutina-realistic-forms-everyday-life-65c038a134d5d-150x150.webp"
                                        alt="post-img-small-1">
                                    <div
                                        class="absolute z-10 -top-2 -right-0.5 rounded-full w-6 aspect-1 bg-text-main text-xs text-white font-bold flex justify-center items-center">
                                        40</div>
                                    <div
                                        class="absolute z-0 inset-0 rounded-full ring-4 ring-bg-category-1-secondary opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100">
                                    </div>
                                </div>
                                <p class="mt-2 text-sm w-full truncate font-manrope" style="max-width: 12ch;"
                                    title="Chủ đề 1 dài ơi dài nè">Chủ đề 1 dài ơi dài nè</p>
                            </div>
                        </a>
                        <a href="/blog/category/{{ \Illuminate\Support\Str::slug('Chủ đề 1 dài ơi dài nè') }}">
                            <div class="w-fit flex flex-col mx-auto md:mx-0 items-center cursor-pointer group">
                                <div
                                    class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full bg-bg-category-2 text-white text-4xl flex justify-center items-center">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <circle cx="19" cy="5" r="2.5" />
                                        <path stroke-linecap="round"
                                            d="M21.25 10v5.25a6 6 0 0 1-6 6h-6.5a6 6 0 0 1-6-6v-6.5a6 6 0 0 1 6-6H14" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m7.27 15.045l2.205-2.934a.9.9 0 0 1 1.197-.225l2.151 1.359a.9.9 0 0 0 1.233-.261l2.214-3.34" />
                                    </g>
                                </svg> --}}
                                    <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                                        src="https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2024/03/fae9a49c-2b52-4e0e-93fe-e071feb02042-150x150.webp"
                                        alt="post-img-small-3">
                                    <div
                                        class="absolute z-10 -top-2 -right-0.5 rounded-full w-6 aspect-1 bg-text-main text-xs text-white font-bold flex justify-center items-center">
                                        40</div>
                                    <div
                                        class="absolute z-0 inset-0 rounded-full ring-4 ring-bg-category-2-secondary opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100">
                                    </div>
                                </div>
                                <p class="mt-2 text-sm w-full truncate font-manrope" style="max-width: 12ch;"
                                    title="Chủ đề 1 dài ơi dài nè">Chủ đề 1 dài ơi dài nè</p>
                            </div>
                        </a>
                        <a href="/blog/category/{{ \Illuminate\Support\Str::slug('Chủ đề 1 dài ơi dài nè') }}">
                            <div class="w-fit flex flex-col mx-auto md:mx-0 items-center cursor-pointer group">
                                <div
                                    class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full bg-bg-category-4 text-white text-4xl flex justify-center items-center">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4 21q-.825 0-1.412-.587T2 19v-4h7v2h6v-2h7v4q0 .825-.587 1.413T20 21zm7-6v-2h2v2zm-9-2V8q0-.825.588-1.412T4 6h4V4q0-.825.588-1.412T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v5h-7v-2H9v2zm8-7h4V4h-4z" />
                                </svg> --}}
                                    <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                                        src="https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2024/03/ebd97452-e5b5-4423-b362-a5f493f80bc1-150x150.webp"
                                        alt="post-img-small-4">
                                    <div
                                        class="absolute z-10 -top-2 -right-0.5 rounded-full w-6 aspect-1 bg-text-main text-xs text-white font-bold flex justify-center items-center">
                                        40</div>
                                    <div
                                        class="absolute z-0 inset-0 rounded-full ring-4 ring-bg-category-4-secondary opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100">
                                    </div>
                                </div>
                                <p class="mt-2 text-sm w-full truncate font-manrope" style="max-width: 12ch;"
                                    title="Chủ đề 1 dài ơi dài nè">Chủ đề 1 dài ơi dài nè</p>
                            </div>
                        </a>
                        <a href="/blog/category/{{ \Illuminate\Support\Str::slug('Chủ đề 1 dài ơi dài nè') }}">
                            <div class="w-fit flex flex-col mx-auto md:mx-0 items-center cursor-pointer group">
                                <div
                                    class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full bg-bg-category-5 text-white text-4xl flex justify-center items-center">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M17 16.9v-2.5c0-.7-.1-1.4-.5-2.1s-.9-1.3-1.6-1.7c-.7-.5-2.2-.6-2.9-.6l-1.6 1.7l.6 1.3v3l-1 1.1L9 16v-3l.7-1.3L8 10c-.8 0-2.3.1-3 .6c-.7.4-1.1 1-1.5 1.7S3 13.6 3 14.4v2.5S5.6 18 10 18s7-1.1 7-1.1M10 2.1c-1.9 0-3 1.8-2.7 3.8S8.6 9.3 10 9.3s2.4-1.4 2.7-3.4c.3-2.1-.8-3.8-2.7-3.8" />
                                </svg> --}}
                                    <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                                        src="https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2024/03/f524ef6f-944b-464d-ab70-19890cc29a97-150x150.webp"
                                        alt="post-img-small-5">
                                    <div
                                        class="absolute z-10 -top-2 -right-0.5 rounded-full w-6 aspect-1 bg-text-main text-xs text-white font-bold flex justify-center items-center">
                                        40</div>
                                    <div
                                        class="absolute z-0 inset-0 rounded-full ring-4 ring-bg-category-5-secondary opacity-0 transition-opacity duration-500 ease-in-out group-hover:opacity-100">
                                    </div>
                                </div>
                                <p class="mt-2 text-sm w-full truncate font-manrope" style="max-width: 12ch;"
                                    title="Chủ đề 1 dài ơi dài nè">Chủ đề 1 dài ơi dài nè</p>
                            </div>
                        </a>
                    </div>
                    <div class="flex items-center justify-center gap-6">
                        <span class="font-semibold">hoặc ...</span>
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
                    @php
                        $featurePosts = [
                            [
                                'rate' => 4.5,
                                'title' => 'Việt - Pháp nâng cấp quan hệ lên Đối tác Chiến lược Toàn diện',
                                'name' => 'John D.',
                                'platform' => 'LinkedIn',
                                'color' => '#E32525',
                                'img' =>
                                    'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
                            ],
                            [
                                'rate' => 4.2,
                                'title' => 'Great experience overall, will come back again.',
                                'name' => 'Alice W.',
                                'platform' => 'Facebook',
                                'color' => '#000000',
                                'img' =>
                                    'https://images.unsplash.com/photo-1527980965255-d3b416303d12?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YXZhdGFyfGVufDB8fDB8fHww',
                            ],
                            [
                                'rate' => 5.0,
                                'title' => 'Amazing! I am very satisfied with the quality.',
                                'name' => 'Michael S.',
                                'platform' => 'Twitter',
                                'color' => '#E9A500',
                                'img' =>
                                    'https://images.unsplash.com/photo-1544005313-94ddf0286df2?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.9,
                                'title' => 'Absolutely loved it, highly recommended!',
                                'name' => 'Jessica M.',
                                'platform' => 'Google',
                                'color' => '#6A4EE9',
                                'img' =>
                                    'https://images.unsplash.com/photo-1552058544-f2b08422138a?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.0,
                                'title' => 'Very satisfied, will recommend to others.',
                                'name' => 'David P.',
                                'platform' => 'YouTube',
                                'color' => '#5751ff',
                                'img' =>
                                    'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 3.5,
                                'title' =>
                                    'Good experience, but there is room for improvement. Good experience, but there is room for improvement. Good experience test tiếp nè ghasdd asd',
                                'name' => 'Emily R.',
                                'platform' => 'LinkedIn',
                                'color' => '#E9C310',
                                'img' =>
                                    'https://images.unsplash.com/photo-1517841905240-472988babdf9?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.7,
                                'title' => 'Excellent quality, I am impressed.',
                                'name' => 'Ethan T.',
                                'platform' => 'Twitter',
                                'color' => '#E32525',
                                'img' =>
                                    'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzd8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                            [
                                'rate' => 4.3,
                                'title' => 'Very good, just a few minor issues.',
                                'name' => 'Sophia L.',
                                'platform' => 'Facebook',
                                'color' => '#E9A500',
                                'img' =>
                                    'https://images.unsplash.com/photo-1527980965255-d3b416303d12?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzl8fGF2YXRhcnxlbnwwfHwwfHx8MA',
                            ],
                        ];
                    @endphp

                    @foreach ($featurePosts as $index => $featurePost)
                        @php
                            $backgrounds = ['bg-bg-secondary', 'bg-border-main', 'bg-bg-gray'];
                            $backgroundClass = $backgrounds[$index % 3];
                        @endphp
                        <div class="swiper-slide flex-shrink-0 w-full !h-auto overflow-x-hidden">
                            <div {{-- class="group w-full h-full rounded-3xl p-4 flex flex-col gap-4 justify-end cursor-default duration-300 ease-in" style="background-color: {{$featurePost['color']}}"> --}}
                                class="group w-full h-full rounded-xl p-4 flex flex-col gap-4 justify-end cursor-default duration-300 ease-in bg-white border-[0.5px] border-border-main">
                                {{-- <div class="flex justify-between gap-6 h-full text-white"> --}}
                                <div class="flex justify-between gap-6 h-full">
                                    <div class="flex flex-col gap-4">
                                        <div class="w-fit h-8">
                                            <div
                                                class="w-fit h-8 absolute rounded-full bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 hover:translate-x-2 cursor-pointer">
                                                <span>Test nè</span>
                                            </div>
                                            {{-- <div
                                                class="w-fit h-8 absolute rounded-full bg-[#ffffff22] text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 hover:translate-x-2 cursor-pointer">
                                                <span>Test nè</span>
                                            </div> --}}
                                        </div>
                                        <div class="flex flex-col gap-3">
                                            <div class="flex gap-4 items-center">
                                                <div class="flex">
                                                    <div>
                                                        <img class="w-5 aspect-1 rounded-full !object-cover"
                                                            style="aspect-ratio: 1/1" src="{{ $featurePost['img'] }}"
                                                            alt="{{ $featurePost['name'] }}">
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <p class="text-xs">{{ $featurePost['name'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <div class="flex w-5 justify-center">
                                                <div class="text-lg font-light text-btn-bg">
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
                                                <p class="text-xs">{{ $featurePost['name'] }} phút đọc</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-4 items-center">
                                            <div class="flex w-5 justify-center">
                                                <div class="text-base font-light text-btn-bg">
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
                                                <p class="text-xs">19/05/2023</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-1 pt-10">
                                        <div class="relative group/title">
                                            <a href="/blog/{{ \Illuminate\Support\Str::slug($featurePost['title']) }}"
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
                                <a href="/blog/{{ \Illuminate\Support\Str::slug($featurePost['title']) }}">
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
            class="pb-12 max-w-default mx-auto px-4 sm:px-6 default:px-0 flex justify-center  flex-col default:flex-row gap-6">
            <!-- Cột trái -->
            <div x-data="{ openSections: { 1: true, 2: false, 3: false } }" class="w-full default:w-[30%] sticky top-16 h-fit pt-16">
                {{-- <div>
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

                        <h2 class="font-semibold text-lg">Về Bản Thân</h2>
                    </div>

                    <!-- Section 1 -->
                    <div class="mt-4">
                        <div class="p-6 bg-white shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] rounded border border-border-main">
                            <div class="flex gap-3 items-center">
                                <!-- Profile Image -->
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('assets/images/avatar-home.webp') }}" alt="khanh-nguyen-blog-avatar"
                                        class="w-14 h-14 rounded-full border border-gray-300 shadow-sm">
                                </div>

                                <!-- Name and Role -->
                                <div class="flex flex-col">
                                    <h2 class="text-lg font-semibold text-gray-800">Khanh Nguyen</h2>
                                    <p class="text-sm text-gray-500 font-manrope">Founder & Editor</p>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mt-4">
                                <p class="text-sm font-manrope leading-relaxed">Hello! My name is Jonathan Doe! Actively writing articles for this
                                    website. I really like tutorials and illustrations, so stay alert for my next
                                    tutorials.</p>
                            </div>

                            <!-- Social Links -->
                            <div class="flex justify-center mt-4 space-x-4">
                                <!-- Twitter Icon -->
                                <a href="#"
                                    class="text-gray-400 hover:text-gray-700 transition duration-150 ease-in-out">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24 4.557a9.807 9.807 0 01-2.828.775 4.927 4.927 0 002.165-2.724c-.951.564-2.005.974-3.127 1.195a4.917 4.917 0 00-8.384 4.482A13.944 13.944 0 011.671 3.149 4.92 4.92 0 003.17 9.725a4.904 4.904 0 01-2.229-.616v.062a4.916 4.916 0 003.946 4.827 4.902 4.902 0 01-2.224.084 4.92 4.92 0 004.6 3.417 9.86 9.86 0 01-6.102 2.104c-.396 0-.79-.023-1.175-.069A13.907 13.907 0 007.548 21 13.903 13.903 0 0021 7.548c0-.213-.005-.425-.015-.636A9.926 9.926 0 0024 4.557z" />
                                    </svg>
                                </a>
                                <!-- Facebook Icon -->
                                <a href="#"
                                    class="text-gray-400 hover:text-gray-700 transition duration-150 ease-in-out">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.675 0H1.326C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24H12.82v-9.293H9.692V11.24h3.128V8.746c0-3.1 1.894-4.788 4.661-4.788 1.325 0 2.464.098 2.796.143v3.243l-1.919.001c-1.504 0-1.794.715-1.794 1.763v2.311h3.587l-.467 3.467h-3.12V24h6.116c.733 0 1.326-.593 1.326-1.326V1.326C24 .593 23.407 0 22.675 0z" />
                                    </svg>
                                </a>
                                <!-- Website Icon -->
                                <a href="#"
                                    class="text-gray-400 hover:text-gray-700 transition duration-150 ease-in-out">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75S6.624 21.75 12 21.75s9.75-4.374 9.75-9.75S17.376 2.25 12 2.25zM12 20.25c-4.556 0-8.25-3.694-8.25-8.25S7.444 3.75 12 3.75 20.25 7.444 20.25 12 16.556 20.25 12 20.25zM12 9a3 3 0 100 6 3 3 0 000-6z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="mt-6"> --}}
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

                        <h2 class="font-semibold text-lg">Chỉ Mục Chủ Đề</h2>
                    </div>

                    <div
                        class="bg-white default:bg-transparent rounded-xl default:rounded-none p-4 default:p-0 mt-4 default:mt-0">
                        <!-- Section 1 -->
                        <div class="default:mt-2">
                            <button @click="openSections[1] = !openSections[1]"
                                class="flex items-center justify-between w-full p-3 pl-0">
                                <div class="flex gap-3 items-center">
                                    <div class="font-semibold">
                                        <span
                                            class="w-6 h-[28px] px-4 flex bg-black rounded justify-center items-center text-white ease duration-200 text-sm aspect-1">1</span>
                                    </div>
                                    <span class="font-semibold text-start">Fundamentals</span>
                                </div>
                                <span x-text="openSections[1] ? '−' : '+'"></span>
                            </button>
                            <ul x-show="openSections[1]"
                                class="ml-4 mt-3 space-y-3 text-xs border-l border-l-[#E9E8FF] pl-4" x-transition>
                                <li class="leading-slug"><span class="font-semibold mr-1">1. </span>Understanding how
                                    Links
                                    and protocols work 🚀</li>
                                <li class="leading-slug"><span class="font-semibold mr-1">2. </span> HTTP, Web
                                    Browsers,
                                    and
                                    Web Servers</li>
                                <li class="leading-slug"><span class="font-semibold mr-1">3. </span> Unveiling the Web
                                    Browser
                                </li>
                                <li class="leading-slug"><span class="font-semibold mr-1">4. </span>Introduction to
                                    CSS 🚀
                                </li>
                            </ul>
                        </div>

                        <!-- Section 2 -->
                        <div>
                            <button @click="openSections[2] = !openSections[2]"
                                class="flex items-center justify-between w-full p-3 pl-0">
                                <div class="flex gap-3 items-center">
                                    <div class="font-semibold">
                                        <span
                                            class="w-6 h-[28px] px-4 flex bg-black rounded justify-center items-center text-white ease duration-200 text-sm aspect-1">2</span>
                                    </div>
                                    <span class="font-semibold text-start">HTML</span>
                                </div>
                                <span x-text="openSections[2] ? '−' : '+'"></span>
                            </button>
                            <ul x-show="openSections[2]"
                                class="ml-4 mt-3 space-y-3 text-xs border-l border-l-[#E9E8FF] pl-4" x-transition>
                                <li class="leading-slug"><span class="font-semibold mr-1">1. </span> HTML Basics</li>
                                <li class="leading-slug"><span class="font-semibold mr-1">2. </span> Semantic HTML
                                </li>
                                <li class="leading-slug"><span class="font-semibold mr-1">3. </span> Forms and Inputs
                                </li>
                            </ul>
                        </div>

                        <!-- Section 3 -->
                        <div>
                            <button @click="openSections[3] = !openSections[3]"
                                class="flex items-center justify-between w-full p-3 pl-0">
                                <div class="flex gap-3 items-center">
                                    <div class="font-semibold">
                                        <span
                                            class="w-6 h-[28px] px-4 flex bg-black rounded justify-center items-center text-white ease duration-200 text-sm aspect-1">3</span>
                                    </div>
                                    <span class="font-semibold text-start">CSS</span>
                                </div>
                                <span x-text="openSections[3] ? '−' : '+'"></span>
                            </button>
                            <ul x-show="openSections[3]"
                                class="ml-4 mt-3 space-y-3 text-xs border-l border-l-[#E9E8FF] pl-4" x-transition>
                                <li class="leading-slug"><span class="font-semibold mr-1">1. </span> CSS Selectors
                                </li>
                                <li class="leading-slug"><span class="font-semibold mr-1">2. </span> Layout with
                                    Flexbox
                                </li>
                                <li class="leading-slug"><span class="font-semibold mr-1">3. </span> Responsive Design
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Cột phải -->
            <div class="w-full default:w-3/4 pt-6 default:pt-16 bg-bg-main z-10">
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
                            'thumbnail' =>
                                'https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2019/09/66017f14-c1b4-4033-a177-8615bbfc184a-660x660.webp',
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
                            'thumbnail' =>
                                'https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2019/09/66017f14-c1b4-4033-a177-8615bbfc184a-660x660.webp',
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
                            'thumbnail' =>
                                'https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2019/09/66017f14-c1b4-4033-a177-8615bbfc184a-660x660.webp',
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
                            'thumbnail' =>
                                'https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2019/09/66017f14-c1b4-4033-a177-8615bbfc184a-660x660.webp',
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
                            'thumbnail' =>
                                'https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2019/09/66017f14-c1b4-4033-a177-8615bbfc184a-660x660.webp',
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
                            'thumbnail' =>
                                'https://themes.estudiopatagon.com/wordpress/zento-personal/wp-content/uploads/2019/09/66017f14-c1b4-4033-a177-8615bbfc184a-660x660.webp',
                        ],
                    ];
                @endphp
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

                    <h2 class="font-semibold text-lg">Danh Sách Bài Đăng</h2>
                </div>
                <div class="space-y-8 mt-4">
                    @foreach ($posts as $index => $post)
                        <article
                            class="bg-white md:p-4 rounded-xl shadow hover:shadow-lg transition duration-300 relative overflow-x-hidden cursor-default">
                            <div class="justify-between gap-6 h-full hidden md:flex">
                                <div class="relative overflow-hidden">
                                    {{-- <div class="w-fit h-8"> --}}
                                    <div
                                        class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer">
                                        <a
                                            href="/blog/category/{{ \Illuminate\Support\Str::slug($post['category']) }}">
                                            <span>{{ $post['category'] }}</span>
                                        </a>
                                    </div>
                                    {{-- </div> --}}
                                    {{-- <div class="flex flex-col gap-3">
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
                                                        <rect width="4" height="2" x="7" y="12"
                                                            fill="currentColor" rx=".5" />
                                                        <rect width="4" height="2" x="7" y="16"
                                                            fill="currentColor" rx=".5" />
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
                                    </div> --}}
                                    <a href="/blog/{{ \Illuminate\Support\Str::slug($post['title']) }}">
                                        <img class="aspect-1 h-[250px] rounded-xl opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear"
                                            src="{{ $post['thumbnail'] }}" alt="blog-thumbnail-{{ $index }}">
                                    </a>
                                </div>
                                <div class="flex flex-col justify-between flex-1 gap-4">
                                    <div class="flex gap-4">
                                        <div class="flex gap-2 items-center">
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
                                                <p class="text-xs text-[#4D6385]">{{ $post['duration'] }} phút đọc</p>
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
                                                <p class="text-xs text-[#4D6385]">{{ $post['date'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative group/title">
                                        <a href="/blog/{{ \Illuminate\Support\Str::slug($post['title']) }}"
                                            class="relative cursor-pointer font-manrope font-semibold text-xl leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200"
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
                                    <div class="relative">
                                        <span
                                            class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3"
                                            title="{{ $post['content'] }}">{{ $post['content'] }}</span>
                                    </div>
                                    <div class="flex gap-4">
                                        <div
                                            class="py-1 px-3 rounded ease duration-200 text-[#4D6385] text-xs shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                            Test nè
                                        </div>
                                        <div
                                            class="py-1 px-3 rounded ease duration-200 text-[#4D6385] text-xs shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                            Test nè
                                        </div>
                                        <div
                                            class="py-1 px-3 rounded ease duration-200 text-[#4D6385] text-xs shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                            Test nè
                                        </div>
                                        <div
                                            class="py-1 px-3 rounded ease duration-200 text-[#4D6385] text-xs shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                            Test nè
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 p-4 sm:p-0 md:hidden">
                                <div class="relative overflow-hidden md:hidden">
                                    <div
                                        class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer">
                                        <a
                                            href="/blog/category/{{ \Illuminate\Support\Str::slug($post['category']) }}">
                                            <span>{{ $post['category'] }}</span>
                                        </a>
                                    </div>
                                    <a href="/blog/{{ \Illuminate\Support\Str::slug($post['title']) }}">
                                        <img class="w-full h-[250px] object-cover rounded-xl sm:rounded-t-xl sm:rounded-b-none opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear"
                                            src="{{ $post['thumbnail'] }}" alt="blog-thumbnail-{{ $index }}">
                                    </a>
                                </div>
                                <div class="flex flex-col gap-2 sm:gap-4 px-4">
                                    <div class="relative group/title">
                                        <a href="#"
                                            class="relative cursor-pointer font-manrope font-semibold text-xl text-center leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200"
                                            title="{{ $post['title'] }}">{{ $post['title'] }}</a>
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
                                <div class="flex gap-4 justify-center px-4 sm:pb-4">
                                    <div class="flex gap-4">
                                        <div class="flex gap-2 items-center">
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
                                                <p class="text-xs text-[#4D6385]">{{ $post['duration'] }} phút đọc</p>
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
                                                <p class="text-xs text-[#4D6385]">{{ $post['date'] }}</p>
                                            </div>
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
                                class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Tải
                                thêm</button>
                        </div>
                        {{-- <span>Trang 2 trên 10</span>
                        <div>
                            <button
                                class="py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark text-nowrap">Trang
                                sau</button>
                        </div> --}}
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="relative bg-white shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] overflow-hidden">
                <div
                    class="py-8 md:py-12 max-w-default flex w-auto mx-auto px-4 sm:px=12 md:px-24 default:px-0 relative z-10">
                    <div class="flex flex-col mx-auto md:flex-row justify-between items-center">
                        <div class="flex flex-col gap-4 md:gap-8">
                            <h3 class="font-bold text-xl text-center md:text-left md:text-2xl default:text-4xl">Join to
                                our community 🙌</h3>
                            <p class="text-base default:text-lg text-center md:text-left md:w-9/12 leading-loose">
                                Unlock full access to Zento and see the entire
                                library of paid-members only posts.</p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-4 md:gap-8">
                            <p class="text-center md:text-left">Subscribe to our Newsletter, cancel at anytime.</p>
                            <div>
                                <button
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
        <!-- Import Swiper and initialize -->
        <script type="module">
            const swiper = new Swiper('.testimonial-swiper-container', {
                slidesPerView: 3,
                spaceBetween: 20,
                // autoplay: {
                //     delay: 3000,
                // },
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
        </script>
    @endpush
</x-app-layout>
