<section class="max-w-default mx-auto px-4 sm:px-6 flex flex-col justify-between gap-6 md:pt-" x-cloak x-ref="section"
    x-init="() => {
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
    
        // Index the articles
        searchEngine.addAll(articles)
    
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
        console.log('Tests', articles);
    }" x-data="{
        searchEngine: null,
        search: $queryString('').usePush().as('search'),
        selectedCategories: new Set(),
        selectedType: $queryString('all').usePush().as('type'),
        selectedVersion: $queryString('3').usePush().as('version'),
    
        articles: @js($articles),
        categories: @js($categories),
        types: @js($types),
    
        _currentPage: $queryString(1).usePush().as('page'),
        get currentPage() {
            return +this._currentPage
        },
        set currentPage(value) {
            this._currentPage = value
        },
    
        perPage: 12,
        totalItems: 0,
        get totalPages() {
            return Math.ceil(this.totalItems / this.perPage)
        },
    
        get filteredArticles() {
            let filterResult = this.articles
    
            // Show articles that are in the selected categories
            if (this.selectedCategories.size > 0) {
                filterResult = filterResult.filter((article) =>
                    article.categories.some((articleCategory) =>
                        this.selectedCategories.has(articleCategory),
                    ),
                )
            }
    
            // Show articles that are in the selected version, or no version at all
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
    
            // If the search is not empty, show articles that match the search
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
    <div class="flex flex-col gap-3 min-[900px]:flex-row min-[900px]:items-center">
        <div
            class="flex w-full flex-1 flex-wrap items-center gap-3 min-[900px]:w-auto min-[900px]:flex-nowrap min-[900px]:justify-end">
        </div>

        <div
            class="flex w-full flex-wrap items-center gap-3 min-[900px]:w-auto min-[900px]:flex-nowrap min-[900px]:justify-end">
            {{-- Search Bar --}}
            <div
                class="group/search-bar relative w-full overflow-hidden rounded-lg bg-white text-sm border border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)] sm:max-w-xs">
                {{-- Magnify Icon --}}
                <div class="absolute left-1.5 top-1.5 grid h-8 w-8 place-items-center rounded-full bg-btn-bg text-white">
                    <svg class="transition duration-200 will-change-transform" xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m20 20l-4.05-4.05m0 0a7 7 0 1 0-9.9-9.9a7 7 0 0 0 9.9 9.9z" />
                    </svg>
                </div>
                <!-- X icon -->
                <div class="absolute right-0 top-0 grid h-full w-14 place-items-center bg-transparent">
                    <svg class="cursor-pointer text-hurricane transition duration-200 will-change-transform hover:scale-125 hover:text-salmon"
                        x-show="search" x-on:click="search = ''" x-transition:enter="delay-75 ease-out"
                        x-transition:enter-start="translate-x-1 rotate-45 opacity-0"
                        x-transition:enter-end="translate-x-0 rotate-0 opacity-100"
                        x-transition:leave="delay-75 ease-in"
                        x-transition:leave-start="translate-x-0 rotate-0 opacity-100"
                        x-transition:leave-end="translate-x-1 rotate-45 opacity-0" xmlns="http://www.w3.org/2000/svg"
                        width="17" height="17" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M205.66 194.34a8 8 0 0 1-11.32 11.32L128 139.31l-66.34 66.35a8 8 0 0 1-11.32-11.32L116.69 128L50.34 61.66a8 8 0 0 1 11.32-11.32L128 116.69l66.34-66.35a8 8 0 0 1 11.32 11.32L139.31 128Z" />
                    </svg>
                </div>
                {{-- Search Input --}}
                <input type="text" x-model="search" placeholder="Tìm kiếm ..."
                    class="w-full appearance-none border-none bg-transparent py-3 pl-12 pr-10 text-sm outline-none placeholder:transition placeholder:duration-200 focus:ring-0 group-focus-within/search-bar:placeholder:translate-x-1 group-focus-within/search-bar:placeholder:opacity-0" />
            </div>
        </div>
    </div>

    {{-- Categories --}}
    <div class="">
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

            <h2 class="font-semibold text-lg">Chủ Đề</h2>
        </div>

        {{-- List Of Categories --}}
        <div class="flex flex-wrap gap-x-2.5 gap-y-3 pt-5">
            <template x-for="(category, index) in categories" :key="index">
                <div class="cursor-pointer select-none py-2.5 text-sm transition duration-200 px-4 rounded ease text-[#4D6385] shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]"
                    x-text="category.name"
                    :class="{
                        'bg-btn-bg text-white': selectedCategories.has(category.slug),
                        'bg-white hover:bg-stone-200/70': !selectedCategories.has(category.slug),
                    }"
                    x-on:click="
                        selectedCategories.has(category.slug)
                            ? selectedCategories.delete(category.slug)
                            : selectedCategories.add(category.slug)
                    ">
                </div>
            </template>
        </div>
    </div>

    <div class="flex items-start gap-5 pt-5">
        <div class="w-full">
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
    
                <h2 class="font-semibold text-lg">Bài Viết</h2>
            </div>
            
            <div class="relative min-h-[16rem] mt-6">
                {{-- Articles --}}
                <div x-ref="article_cards_wrapper" x-init="() => {
                    autoAnimate($refs.article_cards_wrapper);
                    console.log('Hmmm: ', articles)
                }"
                    class="grid w-full grid-cols-[repeat(auto-fill,minmax(20rem,1fr))] items-start justify-center gap-6">
                    <template x-for="article in filteredArticles" :key="article.id">
                        <x-articles.card />
                    </template>
                </div>

                {{-- No Results Message --}}
                <div x-show="! filteredArticles.length" x-transition:enter="ease-out"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute right-1/2 top-0 grid w-full translate-x-1/2 place-items-center pt-10 transition duration-200">
                    <svg class="text-evening/40" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="m228.24 219.76l-51.38-51.38a86.15 86.15 0 1 0-8.48 8.48l51.38 51.38a6 6 0 0 0 8.48-8.48ZM38 112a74 74 0 1 1 74 74a74.09 74.09 0 0 1-74-74Z" />
                    </svg>
                    <div class="pt-2 font-semibold text-evening/70">
                        Không tìm thấy bài viết phù hợp với tìm kiếm của bạn.
                    </div>
                    <div class="pt-0.5 text-sm text-evening/50">
                        xin lỗi, chúng tôi không thể tìm thấy bài viết phù hợp với tìm kiếm của bạn.
                    </div>
                </div>
            </div>

            {{-- Pagination --}}
            <div class="flex items-center justify-between px-1 py-3 mt-6">
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
    </div>
</section>
