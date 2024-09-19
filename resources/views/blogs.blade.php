<x-layouts.appclient>
{{--    <x-articles.hero--}}
{{--        :$articlesCount--}}
{{--        :$authorsCount--}}
{{--        :$starsCount--}}
{{--    />--}}
    <x-articles.hero
        :$articlesCount
    />
    <x-articles.list :articles="$articles" :categories="$categories" :types="$types" />
</x-layouts.appclient>
