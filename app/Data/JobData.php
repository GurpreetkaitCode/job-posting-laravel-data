<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class JobData extends Data
{

    public function __construct(
       public string $title,
       public string $description,
       public string $location,
       public string $url
    )
    {

    }
}
