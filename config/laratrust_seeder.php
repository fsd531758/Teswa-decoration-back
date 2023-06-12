<?php
return [
    "roles" => [
        "roles" => ["read", "create", "update", "delete"],
        "admins" => ["read", "create", "update", "delete", "updateProfile"],
        "sliders" => ["read", "create", "update", "delete"],
        "categories" => ["read", "create", "update", "delete"],
        "sections" => ["read", "create", "update", "delete"],
        "products" => ["read", "create", "update", "delete"],
        "colors" => ["read", "create", "update", "delete"],
        "services" => ["read", "create", "update", "delete"],
        "experiences" => ["read", "update"],
        "partners" => ["read", "create", "update", "delete"],
        "pages" => ["read", "update"],
        "contacts" => ["read", "create", "update", "delete"],
        "settings" => ["read", "update"],
        "contact_requests" => ["read", "delete", "reply"],
        "quote_requests" => ["read", "delete", "reply"],
        // "news_letters" => ["read", "show_subscribed_users", "delete_subscribed_users", "create", "resend", "delete"]
    ],
];
