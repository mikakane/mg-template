<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new User;$model->name = 'admin';$model->email = '';$model->password = bcrypt('1234');$model->save();
        $model = new User;$model->name = 'user01';$model->email = '';$model->password = bcrypt('1234');$model->save();
    }
}
