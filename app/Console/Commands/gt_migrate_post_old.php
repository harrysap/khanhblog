<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\blogs as Post;
class gt_migrate_post_old  extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gt:migrate-post-old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Đồng bộ post cũ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Kiểm tra file data");
        $path = database_path('data_gt_old.json'); // Đường dẫn file
        $this->info('Path to JSON file: ' . $path);

        // Kiểm tra xem file có tồn tại hay không
        if (file_exists($path)) {
            // Đọc file JSON
            $json = file_get_contents($path);

            // Giải mã JSON thành array
            $data = json_decode($json, true);

            // Kiểm tra xem dữ liệu có được giải mã thành công không
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                $this->error('Invalid JSON format');
                return;
            }

            // In ra dữ liệu
            $this->info('bắt đầu import dữ liệu');
            foreach ($data as $item) {
                $this->info('Import bài viết: ' . $item['title']);
                // Xử lý dữ liệu ở đây
                //  lưu vào database
                 $post = new Post();
                 $post->title = $item['title'];
                 $post->slug = $item['post_name'];
                 $post->body = $item['post_content'];
                 $post->status = 'published';
                 $post->published_at = date('Y-m-d H:i:s');
                 $post->is_published = 1;
                 $post->user_id = 1;
                 $post->created_at = date('Y-m-d H:i:s');
                 $post->cover_photo_path = "missing";
                 $post->photo_alt_text = "missing";
                 $post->save();
            }


        } else {
            // In ra lỗi nếu file không tồn tại
            $this->error('File not found.');
        }

        $this->info('Done');
    }
}
