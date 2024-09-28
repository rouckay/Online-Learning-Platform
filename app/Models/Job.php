<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job
{
    use HasFactory;
    public static function all()
    {
        return [
            [
                'id' => 1,
                'job' => 'Director',
                'salary' => '100000',
                'company' => 'ABC Company',
                'location' => 'New York'
            ],
            [
                'id' => 2,
                'job' => 'Manager',
                'salary' => '80000',
                'company' => 'XYZ Company',
                'location' => 'San Francisco'
            ],
            [
                'id' => 3,
                'job' => 'Developer',
                'salary' => '60000',
                'company' => 'PQR Company',
                'location' => 'Seattle'
            ],
            [
                'id' => 4,
                'job' => 'Designer',
                'salary' => '50000',
                'company' => 'MNO Company',
                'location' => 'Boston'
            ],
            [
                'id' => 5,
                'job' => 'Engineer',
                'salary' => '40000',
                'company' => 'STU Company',
                'location' => 'Chicago'
            ],
            [
                'id' => 6,
                'job' => 'Analyst',
                'salary' => '30000',
                'company' => 'VWX Company',
                'location' => 'Los Angeles'
            ],
            [
                'id' => 7,
                'job' => 'Intern',
                'salary' => '20000',
                'company' => 'YZA Company',
                'location' => 'San Diego'
            ],
            [
                'id' => 8,
                'job' => 'Intern',
                'salary' => '20000',
                'company' => 'BCD Company',
                'location' => 'San Diego'
            ],

        ];
    }
    public static function find($id)
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }
}
