<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huỷ nhận bảng tin | Khanh Blog</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div x-data="{ reason: '', isUnsubscribed: false, isLoading: false }" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <template x-if="!isUnsubscribed">
            <div>
                <h2 class="text-2xl font-bold mb-4">Huỷ đăng ký nhận bảng tin</h2>
                <form @submit.prevent="unsubscribe">
                    <label for="reason" class="block mb-2 text-sm font-medium text-gray-600">Nếu có thể, bạn vui lòng cho mình biết lý do huỷ đăng ký nhé:</label>
                    <textarea x-model="reason" id="reason" class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none border-border-gray focus:border-border-main focus-within:border-[rgba(106,_78,_233,_.4)] transition-colors duration-300 ease-in-out focus-within:shadow-[0px_0px_10px_-3px_rgba(106,78,233,0.4)] mb-4" rows="3"></textarea>
                    <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-md hover:bg-red-600 flex items-center justify-center"  x-bind:class="{ 'opacity-50 cursor-not-allowed': isLoading }" :disabled="isLoading">
                        <template x-if="isLoading">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </template>
                        <span x-text="isLoading ? 'Đang tải...' : 'Xác nhận'"></span>
                    </button>
                </form>
            </div>
        </template>

        <template x-if="isUnsubscribed">
            <div>
                <h2 class="text-2xl font-bold mb-4 text-center">Bạn đã huỷ đăng ký thành công!</h2>
                <a href="/" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 text-center block">Đi đến trang chủ</a>
            </div>
        </template>
    </div>

    <script>
        function unsubscribe() {
            const email = '{{ $email ?? '' }}'; // Make sure to pass the email variable to the Blade view
            this.isLoading = true;
            axios.post(`/unsubscribe-newsletter`, { email: email, reason: this.reason })
                .then(response => {
                    if (response.status === 200) {
                        this.isUnsubscribed = true;
                    }
                })
                .catch(error => {
                    console.error('Error unsubscribing:', error);
                })
                .finally(() => {
                    this.isLoading = false;
                });
        }
    </script>
</body>
</html>
