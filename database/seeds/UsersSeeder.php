<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();


        $authorRole = new Role();
        $authorRole->name="author";
        $authorRole->display_name="author";
        $authorRole->save();

        $admin = new User();
        $admin->name="Admin Larapus";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);


        $author = new User();
        $author->name="Author";
        $author->email="author@gmail.com";
        $author->password=bcrypt('rahasia');
        $author->save();
        $author->attachRole($authorRole);


      
    }
}