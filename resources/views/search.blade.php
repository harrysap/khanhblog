<x-app-layout>
    <div class="">
        <section class="max-w-default mx-auto px-4 sm:px-6 default:px-12 flex justify-between gap-14 pt-8">
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
                        class="w-full flex justify-between px-3 py-1.5 pl-3.5 border rounded-md bg-white text-sm border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
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
                <img class="w-11/12 animate-morph" src="{{ asset('assets/images/avatar-home.webp') }}"
                    alt="khanh-nguyen-blog-logo">
            </div>
        </section>
    </div>
    @push('scripts')
        <script type="module">
        </script>
    @endpush
</x-app-layout>
