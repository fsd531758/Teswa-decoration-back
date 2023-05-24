<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Http\Request;
use PHPUnit\Util\Exception;


class SettingController extends Controller
{
    public function index()
    {
        try {
            $settings = Setting::first();
            return successResponse(
                new SettingResource($settings),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }
}
