<x-layouts.appclient>
    <section class="" x-ref="section" x-init="() => {
        // Reset the page number on search input change
        $watch('search', (newValue, oldValue) => {
            if (newValue !== oldValue) {
                currentPage = 1
            }
        })
    
        // Reset the page number on category, type or version change
        $watch('[selectedCategories.size, selectedType, selectedVersion]', () => {
            currentPage = 1
        })
    
        // Initialize the minisearch instance
        searchEngine = new MiniSearch({
            fields: ['title', 'author.name'],
            searchOptions: {
                fuzzy: 0.1,
                prefix: true,
            },
            extractField: (document, fieldName) => {
                // Enabled access to nested fields
                return fieldName
                    .split('.')
                    .reduce((doc, key) => doc && doc[key], document)
            },
        })
    
        // Index the blogs
        searchEngine.addAll(blogs)
    
        if (reducedMotion) return
        gsap.fromTo(
            $refs.section, {
                autoAlpha: 0,
                y: 50,
            }, {
                autoAlpha: 1,
                y: 0,
                duration: 0.7,
                ease: 'circ.out',
            },
        )
    }" x-data="{
        searchEngine: null,
        search: $queryString('').usePush().as('search'),
        selectedCategories: new Set(),
        selectedType: $queryString('all').usePush().as('type'),
        selectedVersion: $queryString('3').usePush().as('version'),
    
        blogs: @js($blogs),
        {{-- categories: @js($categories), --}}
        {{-- types: @js($types), --}}
    
        _currentPage: $queryString(1).usePush().as('page'),
        get currentPage() {
            return +this._currentPage
        },
        set currentPage(value) {
            this._currentPage = value
        },
    
        perPage: 1,
        totalItems: 0,
        get totalPages() {
            return Math.ceil(this.totalItems / this.perPage)
        },
    
        get filteredArticles() {
            let filterResult = this.blogs
    
            // Show blogs that are in the selected categories
            if (this.selectedCategories.size > 0) {
                filterResult = filterResult.filter((article) =>
                    article.categories.some((articleCategory) =>
                        this.selectedCategories.has(articleCategory),
                    ),
                )
            }
    
            // Show blogs that are in the selected version, or no version at all
            filterResult = filterResult.filter(
                (article) =>
                article.versions?.includes(+this.selectedVersion) ||
                !article.versions?.length,
            )
    
            // If the selectedType is 'all', show all records, else show only the records that match the selected type
            filterResult = filterResult.filter(
                (record) =>
                this.selectedType === 'all' ||
                this.selectedType === record.type,
            )
    
            // If the search is not empty, show blogs that match the search
            if (this.search) {
                const searchResult = this.searchEngine.search(this.search)
    
                filterResult = filterResult.filter((article) =>
                    searchResult.some((result) => result.id === article.id),
                )
    
                // Order the results by the search score
                filterResult = filterResult.sort((a, b) =>
                    searchResult.find((result) => result.id === a.id).score <
                    searchResult.find((result) => result.id === b.id).score ?
                    1 :
                    -1,
                )
            }
    
            // Update the total items
            this.totalItems = filterResult.length
    
            // Paginate the results
            filterResult = filterResult.slice(
                (this.currentPage - 1) * this.perPage,
                this.currentPage * this.perPage,
            )
    
            return filterResult
        },
    }">
        <div class="max-w-default mx-auto flex px-4 flex-col justify-between gap-6 md:pt-6">
            <div class="flex flex-col default:flex-row gap-4 default:gap-8 lg:w-9/12 items-center mx-auto">
                <div
                    class="flex gap-4 items-center group cursor-default w-full default:w-6/12 justify-center default:justify-normal">
                    <div
                        class="relative w-14 h-14 lg:w-16 lg:h-16 aspect-1 rounded-full text-white text-4xl flex justify-center items-center">
                        {{-- style="background-color: {{ $category1->primaryColor }}"> --}}
                        {{-- {!! $category1->icon !!} --}}
                        <img class="rounded-full w-14 h-14 lg:w-16 lg:h-16 aspect-1"
                            src="{{ asset('storage/' . $category->svg) }}" alt="post-img-small-5">
                    </div>
                    <div class="flex flex-col gap-2 w-[150px]">
                        <p
                            class="mt-2 font-bold w-full line-clamp-2 leading-relaxed text-wrap truncate font-manrope sm:mt-0">
                            {{ $category->name }}
                        </p>
                        <span class="text-nowrap">{{ $category->posts_count }} Bài Viết</span>

                    </div>
                </div>
                <p class="text-center default:text-left my-4 default:pl-10 py-2 default:border-l">
                    {{ $category->description }}</p>
            </div>
            <div x-ref="article_cards_wrapper" x-init="() => {
                autoAnimate($refs.article_cards_wrapper)
            }"
                class="grid w-full grid-cols-[repeat(auto-fill,minmax(20rem,1fr))] items-start justify-center gap-6">
                <template x-for="article in filteredArticles" :key="article.id">
                    <article @click="window.location.href = `/blog/${article.slug}`"
                        class="bg-white md:p-4 rounded-xl shadow hover:shadow-lg transition duration-300 relative overflow-x-hidden cursor-default">
                            <div class="flex flex-col gap-4">
                                <div class="relative overflow-hidden">
                                    <div
                                        class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer">
                                        <a href="/blog/category/{{ $category->slug }}">
                                            <span>{{ $category->name }}</span>
                                        </a>
                                    </div>
                                    <a :href="`/blog/${article.slug}`">
                                        <img class="w-full h-[250px] object-cover rounded-t-xl opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear"
                                            x-bind:src="`/storage/${article.cover_photo_path}`"
                                            :alt="article.photo_alt_text">
                                    </a>
                                </div>
                                <div class="flex flex-col gap-2 sm:gap-4 px-4">
                                    <div class="relative group/title">
                                        <a x-bind:href="'/blog/' + article.slug" x-text="article.title"
                                            class="relative cursor-pointer font-manrope font-semibold text-xl text-center leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200"></a>
                                    </div>
                                    <span
                                        class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3 text-center"
                                        x-text="article.sub_title"></span>
                                </div>
                                <div class="flex gap-4 justify-center px-4 pb-4">
                                    <div class="flex flex-col gap-4 items-center">
                                        <div class="flex gap-4">
                                            <div class="flex gap-2 items-center">
                                                <div class="flex">
                                                    <div>
                                                        <template x-if="article.user.profile_photo_path">
                                                            <img class="w-5 aspect-1 rounded-full !object-cover"
                                                                style="aspect-ratio: 1/1"
                                                                x-bind:src="`/storage/${article.user.profile_photo_path}`"
                                                                x-alt="article.author.name">
                                                        </template>
                                                        <template x-if="! article.user.profile_photo_path">
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
                                                    <p class="text-xs text-[#4D6385]" x-text="article.user.name"></p>
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
                                                        x-text="`${article.reading_time} đọc`"></p>
                                                </div>
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
                                                <p class="text-xs text-[#4D6385]"
                                                    x-text="new Date(article.created_at).toLocaleDateString('en-GB')">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </article>
                </template>
            </div>
            {{-- <div class="flex justify-center mt-14">
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
            </div> --}}
            <div class="flex items-center justify-between px-1 py-3">
                <div class="flex flex-1 items-center justify-between">
                    <div x-show="filteredArticles.length" class="text-sm text-gray-700">
                        Hiển thị
                        <span class="font-extrabold" x-text="(currentPage - 1) * perPage + 1"></span>
                        đến
                        <span class="font-extrabold" x-text="Math.min(currentPage * perPage, totalItems)"></span>
                        trên tổng cộng
                        <span class="font-extrabold" x-text="totalItems"></span>
                        kết quả
                    </div>
                    <div x-show="!filteredArticles.length">
                        <div class="text-sm text-gray-700">
                            Không tìm thấy bài đăng
                        </div>
                    </div>
                    <x-ui.pagination />
                </div>
            </div>
        </div>
    </section>
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
</x-layouts.appclient>
