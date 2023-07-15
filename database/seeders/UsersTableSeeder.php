<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'suber',
            'phone' => 'admin',
            'email' => 'admin@admin.com',
            'address'=>'aaa',
            'password' => bcrypt('12345678'),
        ]);

        $user->attachRole('super_admin');
    }//end of run

}//end of seeder
