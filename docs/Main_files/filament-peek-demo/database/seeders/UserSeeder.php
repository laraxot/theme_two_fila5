<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $admin = new User;
=======
        $admin = new User();
>>>>>>> c34c6d1 (.)
=======
        $admin = new User();
>>>>>>> ad90ea0 (.)
        $admin->name = 'Admin';
        $admin->email = 'admin@test.test';
        $admin->password = bcrypt($admin->email);
        $admin->save();
    }
}
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> c34c6d1 (.)
=======
>>>>>>> ad90ea0 (.)
