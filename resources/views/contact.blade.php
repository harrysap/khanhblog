<x-app-layout>
    <div class="mt-8">
        <div class="px-4 lg:px-6 default:px-0 max-w-default mx-auto flex justify-center">
            <div class="lg:w-2/3">
                <h1 class="font-bold text-4xl text-center mb-8">Liên hệ</h1>
                <p class="text-center my-4">Hãy thoải mái gửi tin nhắn, chỉ cần điền vào mẫu dưới đây và tôi sẽ trả lời
                    sớm
                    nhất!
                    👍</p>
                <form action="" class="flex flex-col gap-4">
                    <div class="flex flex-col gap-3">
                        <label for="fullname-input" class="font-semibold">Tên của bạn</label>
                        <input type="text" id="fullname-input" name="name" x-ref="name"
                            class="w-full px-3 py-2 border rounded-md text-sm border-border-gray focus:border-border-main focus:outline-none">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="email-input" class="font-semibold">Email</label>
                        <input type="email" id="email-input" name="email" x-ref="email"
                            class="w-full px-3 py-2 border rounded-md text-sm border-border-gray focus:border-border-main focus:outline-none">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="subject-input" class="font-semibold">Chủ đề</label>
                        <input type="subject" id="subject-input" name="subject" x-ref="subject"
                            class="w-full px-3 py-2 border rounded-md text-sm border-border-gray focus:border-border-main focus:outline-none">
                    </div>
                    <div class="mb-4 flex flex-col gap-2">
                        <label for="message-input" class="font-semibold">Tin nhắn:</label>
                        <textarea id="message-input" rows="5" name="message" x-ref="message"
                            class="w-full px-3 py-2 border rounded-md border-border-gray focus:border-border-main focus:outline-none"></textarea>
                    </div>
                    <div>
                        <button
                            class="block py-2 px-[22px] bg-btn-bg rounded text-white ease duration-200 hover:bg-btn-dark">Nộp tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
