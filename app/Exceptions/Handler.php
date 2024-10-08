<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // Đăng ký callback cho các ngoại lệ
        $this->reportable(function (Throwable $e) {
            //
        });

        // Xử lý lỗi 404 và trả về view tùy chỉnh
        $this->renderable(function (NotFoundHttpException $e, $request) {
            return response()->view('errors.notfound', [], 404);
        });
    }
}
