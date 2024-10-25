{{-- <pre x-text="JSON.stringify(article, null, 2)"></pre> --}}
<article
    class="relative overflow-x-hidden rounded-xl bg-white md:p-4 shadow-hurricane/5 transition duration-300 will-change-transform shadow hover:shadow-lg cursor-default">
    {{-- <div x-bind:style="'background-image: url(' + article.thumbnail_url + ')'"
        class="aspect-[16/9] w-full rounded-xl bg-cover bg-center bg-no-repeat ring-1 ring-dawn-pink"></div> --}}

    <div class="relative overflow-hidden">
        <div
            class="w-fit h-8 absolute rounded-full z-10 bg-btn-bg text-white flex items-center pl-12 pr-6 text-xs font-normal ease-linear duration-200 -left-6 top-6 hover:translate-x-2 cursor-pointer">
            <a x-bind:href="'/blog/' + article.categories[0] + '/' + article.slug">
                <span x-text="categories[article.categories].name"></span>
            </a>
        </div>
        <a x-bind:href="'/blog/' + article.categories[0] + '/' + article.slug">
            <img class="w-full h-[250px] object-cover rounded-t-xl opacity-95 hover:opacity-85 transition-opacity duration-150 ease-linear"
                x-bind:src="article.thumbnail_url" x-bind:alt="article.thumbnail_alt">
        </a>
    </div>
    <div class="px-1.5 pt-4">
        <div class="flex flex-col gap-2 sm:gap-4">
            <a x-bind:href="'/blog/' + article.categories[0] + '/' + article.slug" x-text="article.title"
                class="relative cursor-pointer font-manrope font-semibold text-xl text-center leading-relaxed group/title line-clamp-2 hover:underline hover:decoration-black ease-in duration-200"></a>
            <p x-text="article.sub_title"
                class="relative font-manrope text-[#2b2b2b] leading-relaxed group/title line-clamp-3 text-center"></p>
        </div>

        <div class="flex gap-4 justify-center px-4 py-4">
            <div class="flex gap-4">
                <div class="flex gap-2 items-center">
                    <div class="flex">
                        <div>
                            <template x-if="article.author.avatar">
                                <img class="w-5 aspect-1 rounded-full !object-cover" style="aspect-ratio: 1/1"
                                    x-bind:src="article.author.avatar" x-alt="article.author.name">
                            </template>
                            <template x-if="! article.author.avatar">
                                <div
                                    class="grid aspect-1 w-full h-full rounded-full p-1 place-items-center bg-black text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24">
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
                        <p class="text-xs text-[#4D6385]" x-text="article.author.name"></p>
                    </div>
                </div>
                {{-- <div class="flex gap-2 items-center">
                    <div class="flex w-5 justify-center">
                        <div class="text-sm font-light text-btn-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M10 2h4m-2 12l3-3" />
                                    <circle cx="12" cy="14" r="8" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-xs text-[#4D6385]" x-text="article.reading_time"></p>
                    </div>
                </div> --}}
                <div class="flex gap-2 items-center">
                    <div class="flex w-5 justify-center">
                        <div class="text-sm font-light text-btn-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M8 2v4m8-4v4" />
                                    <rect width="18" height="18" x="3" y="4" rx="2" />
                                    <path d="M3 10h18M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01M16 18h.01" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-xs text-[#4D6385]" x-text="article.created_date"></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Categories --}}
        {{-- <div class="flex flex-wrap gap-x-2.5 gap-y-3 pt-4">
            <template x-for="category in article.categories" :key="category">
                <div class="rounded-full bg-slate-100 px-5 py-2.5 text-xs" x-text="categories[category].name"></div>
            </template>
        </div> --}}
    </div>
</article>
