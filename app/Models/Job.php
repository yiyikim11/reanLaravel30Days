<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
                [
                    'id' => 1,
                    'title' => 'director', 
                    'salary' => '$50,000',
                ],
                [
                    'id' => 2,
                    'title' => 'programmer',
                    'salary' => '$10,000'
                ],
                [
                    'id' => 3,
                    'title' => 'teacher',
                    'salary' => '$40,000'
                ]
                
        ];
    }

    public static function find(int $id): array {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        }
    }
}

