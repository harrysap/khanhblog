{{-- <x-app-layout> --}}
<x-layouts.appclient>
    <div class="mt-8" x-data="{ isLoading: false }">
        <div class="px-4 lg:px-6 default:px-0 max-w-default mx-auto flex justify-center md:pt-8">
            <div class="lg:w-2/3">
                <h1 class="font-bold text-4xl text-center mb-8">Liên hệ</h1>
                <p class="text-center my-4">Hãy thoải mái gửi tin nhắn, chỉ cần điền vào mẫu dưới đây và tôi sẽ trả lời
                    sớm nhất! 👍</p>
                <form action="{{ route('contact.store') }}" method="POST" id="contact-form" onsubmit="handleSubmit(event)"
                    class="flex flex-col gap-4">
                    @csrf <!-- Token để bảo vệ chống CSRF -->
                    <div class="flex flex-col gap-3">
                        <label for="fullname-input" class="font-semibold">Tên của bạn <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="fullname-input" name="full_name" x-ref="full_name" required
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="email-input" class="font-semibold">Email <span class="text-red-500">*</span></label>
                        <input type="email" id="email-input" name="email" x-ref="email" required
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="phone-input" class="font-semibold">Số điện thoại</label>
                        <input type="tel" id="phone-input" name="phone_number" x-ref="phone_number"
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="subject-input" class="font-semibold">Chủ đề</label>
                        <input type="text" id="subject-input" name="topic" x-ref="topic"
                            class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]">
                    </div>
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="message-input" class="font-semibold">Tin nhắn <span
                                class="text-red-500">*</span></label>
                        <textarea id="message-input" rows="5" name="message" x-ref="message" required
                            class="w-full px-3 py-2 border rounded-md focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)]"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="block py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark"
                            x-bind:class="{ 'opacity-50 cursor-not-allowed': isLoading }" x-bind:disabled="isLoading">
                            <span x-show="!isLoading">Nộp tin</span>
                            <span x-show="isLoading" class="loader">Đang tải...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <section class="mt-14">
            <div class="relative bg-white shadow-[0px_2px_5px_0px_rgba(0,0,0,0.03)] overflow-hidden">
                <div
                    class="py-8 md:py-12 max-w-default flex w-auto mx-auto px-4 sm:px=12 md:px-24 default:px-0 relative z-10">
                    <div class="flex flex-col mx-auto md:flex-row justify-between items-center">
                        <div class="flex flex-col gap-4 md:gap-8">
                            <h3 class="font-bold text-xl text-center md:text-left md:text-2xl default:text-4xl">Đăng ký
                                nhận bảng tin 🙌</h3>
                            <p class="text-base default:text-lg text-center md:text-left md:w-9/12 leading-loose">
                                Luôn được cập nhật với những bài viết chia sẻ mới nhất từ tôi qua email.</p>
                        </div>
                        <div class="flex flex-col items-center justify-center gap-4 md:gap-8">
                            <p class="text-center md:text-left">Đăng ký ngay bây giờ, huỷ bất cứ khi nào.</p>
                            <div>
                                <button
                                    onclick="document.getElementById('register-form').scrollIntoView({ behavior: 'smooth', block: 'start' }); document.getElementById('email-subcribe-input').focus();"
                                    class="py-2 px-[22px] bg-black rounded text-white ease duration-200 text-nowrap">Đăng
                                    ký</button>
                            </div>
                        </div>
                    </div>
                </div>
                <svg class="absolute left-[-200px] -top-[170px] z-0 md:left-[-120px] md:-top-2 z-1 scale-75"
                    width="284" height="453" viewBox="0 0 284 453" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="text-btn-bg"
                        d="M100.795 7.49467C105.015 -1.99852 118.025 -2.47329 123.123 6.07068L123.86 7.49467L136.88 36.7886C148.263 62.3995 167.185 83.8837 191.069 98.4068L195.095 100.762L218.221 113.77C226.323 118.328 226.773 129.596 219.571 134.898L218.221 135.769L195.095 148.778C170.668 162.518 151.059 183.378 138.846 208.521L136.88 212.751L123.86 242.045C119.641 251.538 106.63 252.013 101.531 243.469L100.795 242.045L87.7754 212.751C76.3928 187.141 57.4695 165.656 33.5855 151.133L29.5593 148.778L6.43298 135.769C-1.66775 131.213 -2.1179 119.945 5.08284 114.641L6.43298 113.77L29.5593 100.762C53.9866 87.0215 73.5964 66.162 85.8089 41.0183L87.7754 36.7886L100.795 7.49467Z"
                        fill="currentColor"></path>
                    <path class="text-icon-main"
                        d="M159.795 210.495C164.015 201.001 177.025 200.527 182.123 209.071L182.86 210.495L195.88 239.789C207.263 265.399 226.185 286.884 250.069 301.407L254.095 303.762L277.221 316.77C285.323 321.328 285.773 332.596 278.571 337.898L277.221 338.769L254.095 351.778C229.668 365.518 210.059 386.378 197.846 411.521L195.88 415.751L182.86 445.045C178.641 454.538 165.63 455.013 160.531 446.469L159.795 445.045L146.775 415.751C135.393 390.141 116.47 368.656 92.5855 354.133L88.5593 351.778L65.433 338.769C57.3322 334.213 56.8821 322.945 64.0828 317.641L65.433 316.77L88.5593 303.762C112.987 290.022 132.596 269.162 144.809 244.018L146.775 239.789L159.795 210.495Z"
                        fill="currentColor"></path>
                </svg>
                <svg class="absolute right-[-200px] -top-[170px] z-0 md:right-[-120px] md:-top-2 z-1 scale-75"
                    width="284" height="453" viewBox="0 0 284 453" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="text-btn-bg"
                        d="M100.795 445.045C105.015 454.538 118.025 455.013 123.123 446.469L123.86 445.045L136.88 415.751C148.263 390.14 167.185 368.656 191.069 354.133L195.095 351.777L218.221 338.77C226.323 334.212 226.773 322.944 219.571 317.642L218.221 316.77L195.095 303.762C170.668 290.022 151.059 269.162 138.846 244.018L136.88 239.788L123.86 210.494C119.641 201.002 106.63 200.527 101.531 209.071L100.795 210.494L87.7754 239.788C76.3928 265.399 57.4695 286.884 33.5855 301.406L29.5593 303.762L6.43298 316.77C-1.66775 321.327 -2.1179 332.595 5.08284 337.898L6.43298 338.77L29.5593 351.777C53.9866 365.518 73.5964 386.378 85.8089 411.521L87.7754 415.751L100.795 445.045Z"
                        fill="currentColor"></path>
                    <path class="text-icon-main"
                        d="M159.795 242.045C164.015 251.538 177.025 252.013 182.123 243.469L182.86 242.045L195.88 212.751C207.263 187.14 226.185 165.656 250.069 151.133L254.095 148.777L277.221 135.77C285.323 131.212 285.773 119.944 278.571 114.642L277.221 113.77L254.095 100.762C229.668 87.0217 210.059 66.1616 197.846 41.0181L195.88 36.7884L182.86 7.49449C178.641 -1.99834 165.63 -2.473 160.531 6.07056L159.795 7.49449L146.775 36.7884C135.393 62.399 116.47 83.8839 92.5855 98.4062L88.5593 100.762L65.433 113.77C57.3322 118.327 56.8821 129.595 64.0828 134.898L65.433 135.77L88.5593 148.777C112.987 162.518 132.596 183.378 144.809 208.521L146.775 212.751L159.795 242.045Z"
                        fill="currentColor"></path>
                </svg>
            </div>
        </section>
    </div>

    @push('scripts')
        <script>
            function handleSubmit(event) {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của form

                const form = document.getElementById('contact-form');
                const formData = new FormData(form);

                this.isLoading = true;

                fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ trả lời bạn sớm nhất có thể.');
                            form.reset(); // Reset form nếu cần
                        } else {
                            alert('Đã có lỗi xảy ra! Vui lòng thử lại sau.');
                        }
                    })
                    .catch(error => {
                        alert('Đã có lỗi xảy ra! Vui lòng thử lại sau.');
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        // Reset trạng thái loading
                        this.isLoading = false;
                    });
            }
        </script>
    @endpush
</x-layouts.appclient>
{{-- </x-app-layout> --}}
