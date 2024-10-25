import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { CountUp } from 'countup.js';
import autoAnimate from '@formkit/auto-animate'
import MiniSearch from 'minisearch'
import { gsap } from 'gsap'

// Instances to be available globally
window.Swiper = Swiper;
window.CountUp = CountUp;
window.autoAnimate = autoAnimate;
window.MiniSearch = MiniSearch;
window.reducedMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)',
).matches;
window.gsap = gsap;
