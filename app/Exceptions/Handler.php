<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        $rendered = parent::render($request, $exception);
     /**   if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'status' => "error",
                'code' => $rendered->getStatusCode(),
                'message' => "Error de modelo",

            ]);
        } elseif ($exception instanceof QueryException) {
            return response()->json([
                'status' => "error",
                'code' => $rendered->getStatusCode(),
                'message' => "Error de consulta de Base de Datos",

            ]);
        } elseif ($exception instanceof HttpException) {
            return response()->json([
                'status' => "error",
                'code' => $rendered->getStatusCode(),
                'message' => "Error de ruta",

            ]);
        }
*/
        return parent::render($request, $exception);
    }
}
