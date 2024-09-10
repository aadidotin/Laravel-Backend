<?php

namespace App\Services;

class constant
{
    // Generate Random String
    public function generateRandomString(int $length = 10): string
    {
        return \Illuminate\Support\Str::random($length);
    }
}
