<x-layouts.appclient>
    <x-articles.list-header :articleCount="$articlesCount" :randomArticles="$randomArticles" />
    <x-articles.list :articles="$articles" :categories="$categories" :types="$types" />
</x-layouts.appclient>
