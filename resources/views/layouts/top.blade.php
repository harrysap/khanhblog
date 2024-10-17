@push('scripts')
    <div
        class="progress-wrap fixed right-8 bottom-8 h-12 w-12 cursor-pointer rounded-full shadow-[inset_0_0_0_2px_rgba(0,0,0,0.1)] z-[10000] opacity-0 invisible translate-y-4 transition-all duration-200 ease-linear">
        <svg class="progress-circle w-full h-full" viewBox="-1 -1 102 102">
            <path fill="#fff" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" viewBox="0 0 24 24">
            <path fill="#d0a9f8" d="M12 4a1 1 0 0 1 .707.293l6 6a1 1 0 0 1-1.414 1.414L13 7.414V19a1 1 0 1 1-2 0V7.414l-4.293 4.293a1 1 0 0 1-1.414-1.414l6-6A1 1 0 0 1 12 4" />
        </svg>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            "use strict";

            var progressWrap = document.querySelector('.progress-wrap');
            var progressPath = document.querySelector('.progress-wrap path');
            var pathLength = progressPath.getTotalLength();

            // Initial settings for progress path
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

            // // Update progress on scroll
            // var updateProgress = function() {
            //     var scroll = window.scrollY;
            //     var height = document.documentElement.scrollHeight - window.innerHeight;
            //     var progress = pathLength - (scroll * pathLength / height);
            //     progressPath.style.strokeDashoffset = progress;
            // };

            // // Initialize progress
            // updateProgress();

            // Add scroll event listener
            window.addEventListener('scroll', function() {
                // updateProgress();

                if (window.scrollY > 50) {
                    progressWrap.classList.add('active-progress');
                } else {
                    progressWrap.classList.remove('active-progress');
                }
            });

            // Scroll back to top on click
            progressWrap.addEventListener('click', function(event) {
                event.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush
