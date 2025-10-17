<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                "title" => "Director",
                "salary" => 23000,
            ],
            [
                "id" => 2,
                "title" => "Programmer",
                "salary" => 10000,
            ],
            [
                "id" => 3,
                "title" => "Teacher",
                "salary" => 40000,
            ]
        ];
    }

    public static function find(int $jobId): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $jobId);

        if (!$job) {
            abort(404, "Job not found");
        }

        return $job;
    }
}
