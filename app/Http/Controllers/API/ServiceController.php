<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Service;
use PHPUnit\Util\Exception;

class ServiceController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    public function get_service($id)
    {
        try {
            $service = $this->service->active()->findOrFail($id);
            $images = $this->service->files()->where('type', '!=', 'cover')->get();
            return successResponse(
                collect(["data" => $service, 'images' => $images]),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {
            return failureResponse([], trans("message.something_wrong"), 400);

        }
    }
}
