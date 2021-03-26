<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;



class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

    {
        for ($i = 0; $i < 10; $i++) {
            $students = new Student();
            $students->name = $faker->name();
            $students->lastname = $faker->lastName();
            $students->class = rand(1, 5);
            $students->save();
        }

    }
}
