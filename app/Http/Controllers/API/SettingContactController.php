<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;
use PHPUnit\Util\Exception;


class SettingContactController extends Controller
{
    public function index()
    {
        try {
            $contacts = Contact::active()->get();
            return successResponse(
                [
                    // SettingContactResource::collection($contacts),
                    "contacts" => [
                        "mobiles" => SettingContactResource::collection(
                            $contacts->where("type", "mobile")
                        ),
                        "telephones" => SettingContactResource::collection(
                            $contacts->where("type", "telephone")
                        ),
                        "emails" => SettingContactResource::collection(
                            $contacts->where("type", "email")
                        ),
                        "socials" => SettingContactResource::collection(
                            $contacts->where("type", "social")
                        ),
                    ],
                ],
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }
}
