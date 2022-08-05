<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            [
                'department_name' => 'College of Arts, Science & Tech.',
                'teachers_name' => 'Josefina Pangan',
                'age' => '46 yrs old',
                'work' => 'Bachelor of Science in Information Technology'
            ],
            [
                'department_name' => 'College of Nursing (CON)',
                'teachers_name' => 'Maria Rosario B. Poligrates',
                'age' => '34 yrs old',
                'work' => 'Bachelor of Science in Nursing'
            ],
            [
                'department_name' => 'College of Criminology (COC)',
                'teachers_name' => 'Avelino M. Lofranco ',
                'age' => '48 yrs old',
                'work' => 'Bachelor of Science in Criminology'
            ],
            [
                'department_name' => 'College of Education (COE)',
                'teachers_name' => 'Maria Nympa Reserva',
                'age' => '47 yrs old',
                'work' => 'Bachelor of Science in Education'

            ],
            ];
            foreach($department as $m){
                Course::create($m);
            }
    }
}
