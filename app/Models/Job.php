<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Job
{
    public static function all()
    {
        return [
            [
                'title' => 'Software Engineer',
                'company' => 'Tech Corp',
                'location' => 'Remote',
                'salary' => 120000
            ],
            [
                'title' => 'Frontend Developer',
                'company' => 'Web Solutions',
                'location' => 'New York',
                'salary' => 95000
            ],
            [
                'title' => 'Data Analyst',
                'company' => 'Analytics Ltd',
                'location' => 'San Francisco',
                'salary' => 105000
            ]
        ];
    }
}
