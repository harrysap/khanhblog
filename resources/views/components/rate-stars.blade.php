@props(['rate' => 0])

@php
    $rate = round($rate * 2) / 2;
    $fullStars = floor($rate);
    $halfStar = $rate - $fullStars > 0 ? true : false;
    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
@endphp

<div x-data="{ rate: {{ $rate }} }" class="flex items-center gap-1">
    @for ($i = 0; $i < $fullStars; $i++)
        <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 256 256" fill="#fec42d">
            <path
                d="M234.29 114.85l-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07l-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76l22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08l59 4.76a16.46 16.46 0 0 1 9.37 28.86Z" />
        </svg>
    @endfor

    @if ($halfStar)
        <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 256 256" fill="#fec42d">
            <path
                d="M239.18 97.26A16.38 16.38 0 0 0 224.92 86l-59-4.76l-22.78-55.09a16.36 16.36 0 0 0-30.27 0L90.11 81.23L31.08 86a16.46 16.46 0 0 0-9.37 28.86l45 38.83L53 211.75a16.4 16.4 0 0 0 24.5 17.82l50.5-31.08l50.53 31.08A16.4 16.4 0 0 0 203 211.75l-13.76-58.07l45-38.83a16.43 16.43 0 0 0 4.94-17.59m-15.34 5.47l-48.7 42a8 8 0 0 0-2.56 7.91l14.88 62.8a.37.37 0 0 1-.17.48c-.18.14-.23.11-.38 0l-54.72-33.65a8 8 0 0 0-4.19-1.17V32c.24 0 .27.08.35.26L153 91.86a8 8 0 0 0 6.75 4.92l63.91 5.16c.16 0 .25 0 .34.29s0 .4-.16.5" />
        </svg>
    @endif

    @for ($i = 0; $i < $emptyStars; $i++)
        <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 256 256" fill="none"
            stroke="#fec42d" stroke-width="16">
            <path
                d="M224.92 86l-59-4.76l-22.78-55.09a16.36 16.36 0 0 0-30.27 0L90.11 81.23L31.08 86a16.46 16.46 0 0 0-9.37 28.86l45 38.83L53 211.75a16.4 16.4 0 0 0 24.5 17.82l50.5-31.08l50.53 31.08A16.4 16.4 0 0 0 203 211.75l-13.76-58.07l45-38.83A16.43 16.43 0 0 0 224.92 86Z" />
        </svg>
    @endfor
</div>
