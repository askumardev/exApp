<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */

use App\Models\User;
 
/**
 * Run the database seeders.
 */
public function run(): void
{
    User::factory()
            ->count(10)
            ->hasPosts(1)
            ->create();
}
