<div x-cloak x-data="{
    randomArticles: @js($randomArticles),
    articleCount: @js($articleCount),

}" {{-- class="mx-auto w-full max-w-7xl px-4 sm:px-2 xl:px-0 pt-20 pb-5 border-b border-merino"> --}} class="">
    <section class="max-w-default mx-auto px-4 sm:px-6 flex flex-col justify-between gap-6 md:py-8">
        <div class="relative flex items-start gap-10 md:gap-20 min-[840px]:justify-between">
            <div class="flex flex-col gap-0 md:gap-4 lg:w-11/12 items-center mx-auto">
                <h1 class="font-bold text-3xl md:text-4xl text-center mb-4 md:mb-8">Danh sách bài đăng 📑</h1>
                <p class="text-center my-4">Danh sách toàn bộ bài đăng và tìm kiếm những bài đăng của tôi. Danh sách hiển
                    thị tất cả các bài viết hiện có, cùng thông tin cơ bản như tiêu đề, tác giả, ngày đăng và danh mục.
                    Người dùng có thể dễ dàng tìm kiếm hoặc lọc bài viết theo nhu cầu, với tính năng phân trang để quản
                    lý số lượng bài đăng lớn</p>
            </div>
        </div>
    </section>
    <div class="mb-6">
        {{-- <div> --}}
        <div class="relative mx-auto w-full mt-6 overflow-x-hidden">
            <div class="blog-swiper-container">
                <div class="swiper-wrapper">
                    <template x-for="(randomArticle, index) in randomArticles" :key="index">
                        <div class="swiper-slide select-none">
                            <div class="relative bg-cover bg-center h-[450px] w-full flex items-center justify-center overflow-hidden"
                            :style="`background-image: url('${randomArticle.thumbnail_url}')`">
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div class="relative text-center text-white p-4 sm:p-8">
                                    <div class="mb-2 flex justify-center items-center">
                                        <span class="text-red-400 text-sm mr-2">●</span>
                                        <span class="uppercase text-sm font-medium">Featured</span>
                                    </div>
                                    <a x-bind:href="'/blog/' + randomArticle.slug" x-text="randomArticle.title"
                                        class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-normal mb-4 font-reddit line-clamp-2 hover:underline ease-linear duration-400 transition-all cursor-pointer">
                                    </a>
                                    <div class="flex items-center justify-center mb-6">
                                        {{-- <img src="{{ $slide['avatar'] }}" class="rounded-full w-10 h-10 mr-2"
                                        alt="author-avatar"> --}}
                                        <span class="mr-2" x-text="randomArticle.author.name"></span>
                                        <span class="text-red-400">●</span>
                                        <span class="ml-2" x-text="randomArticle.created_date"><span>
                                    </div>
                                    <a x-bind:href="'/blog/' + randomArticle.slug"
                                        class="py-2 px-[22px] bg-black rounded text-white ease duration-200 text-sm cursor-pointer">Xem
                                        Tiếp</a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                {{-- <div class="swiper-slide select-none">
                        <div class="relative bg-cover bg-center h-[450px] w-full flex items-center justify-center overflow-hidden"
                            style="background-image: url('{{ $slide['image'] }}');">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <div class="relative text-center text-white p-4 sm:p-8">
                                <div class="mb-2 flex justify-center items-center">
                                    <span class="text-red-400 text-sm mr-2">●</span>
                                    <span class="uppercase text-sm font-medium">Featured</span>
                                </div>
                                <a href="{{ $slide['link'] }}"
                                    class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-normal mb-4 font-reddit line-clamp-2 hover:underline ease-linear duration-400 transition-all">
                                    {{ $slide['title'] }}
                                </a>
                                <div class="flex items-center justify-center mb-6">
                                    <img src="{{ $slide['avatar'] }}" class="rounded-full w-10 h-10 mr-2"
                                        alt="author-avatar">
                                    <span class="mr-2">{{ $slide['author'] }}</span>
                                    <span class="text-red-400">●</span>
                                    <span class="ml-2">{{ $slide['date'] }}</span>
                                </div>
                                <a href="{{ $slide['link'] }}"
                                    class="py-2 px-[22px] bg-black rounded text-white ease duration-200 text-sm">Xem
                                    Tiếp</a>
                            </div>
                        </div>
                    </div> --}}
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-blog-pagination text-center mt-4"></div>
        </div>
    </div>
</div>
@push('scripts')
    <!-- Import Swiper and initialize -->
    <script type="module">
        const swiper = new Swiper('.blog-swiper-container', {
            slidesPerView: 1,
            spaceBetween: 50,
            // centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            // pagination: {
            //     el: '.swiper-blog-pagination',
            //     clickable: true,
            //     renderBullet: function(index, className) {
            //         return '<span class="' + className + '"></span>';
            //     },
            // },
            pagination: {
                el: ".swiper-blog-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endpush
</div>
