<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        if ($admin) {
            $admin->update([
                'role' => User::ROLE_SUPER_ADMIN,
                'is_active' => true,
            ]);
        }
    }
}
