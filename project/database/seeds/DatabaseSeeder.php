<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;
use App\Student;
use App\Professor;
use App\Course;
use App\ListensTo;
use App\Exam;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Roles
        Role::create(['name' => 'student']);
        Role::create(['name' => 'professor']);        
        
        //Students
        User::create(['name' => 'Kosta', 'surname' => 'Eric', 'email' => 'kosta@gmail.com', 'password' => Hash::make('kosta123'), 'role_id' => 1]);
        Student::create(['id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 
        'mobile_number' => '+381698288758', 
        'index_number' => 1, 
        'year_enrolled' => 0000, 
        'verification_code' => '/'
        ]);
        
        User::create(['name' => 'Nikola', 'surname' => 'Samardzic', 'email' => 'nikola@gmail.com', 'password' => Hash::make('nikola123'), 'role_id' => 1]);
        Student::create(['id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 
        'mobile_number' => '+381603393052', 
        'index_number' => 2, 
        'year_enrolled' => 0000, 
        'verification_code' => '/'
        ]);
        
        User::create(['name' => 'Nikola', 'surname' => 'Markovic', 'email' => 'markovic@gmail.com', 'password' => Hash::make('markovic123'), 'role_id' => 1]);
        Student::create(['id' => User::where('email', 'markovic@gmail.com')->get()->first()->id, 
        'mobile_number' => '+38166413483', 
        'index_number' => 3, 
        'year_enrolled' => 0000, 
        'verification_code' => '/'
        ]);

        User::create(['name' => 'Vukasin', 'surname' => 'Paunovic', 'email' => 'vukasin@gmail.com', 'password' => Hash::make('vukasin123'), 'role_id' => 1]);
        Student::create(['id' => User::where('email', 'vukasin@gmail.com')->get()->first()->id, 
        'mobile_number' => '+381638312970', 
        'index_number' => 4, 
        'year_enrolled' => 0000, 
        'verification_code' => '/'
        ]);

        //Professors
        User::create(['name' => 'Milan', 'surname' => 'Eric', 'email' => 'milan@gmail.com', 'password' => Hash::make('milan123'), 'role_id' => 2]);
        Professor::create(['id' => User::where('email', 'milan@gmail.com')->get()->first()->id]);
        
        User::create(['name' => 'Miladin', 'surname' => 'Stefanovic', 'email' => 'miladin@gmail.com', 'password' => Hash::make('miladin123'), 'role_id' => 2]);
        Professor::create(['id' => User::where('email', 'miladin@gmail.com')->get()->first()->id]);
        
        User::create(['name' => 'Aleksandar', 'surname' => 'Peulic', 'email' => 'aleksandar@gmail.com', 'password' => Hash::make('aleksandar123'), 'role_id' => 2]);
        Professor::create(['id' => User::where('email', 'aleksandar@gmail.com')->get()->first()->id]);

        //Courses
        Course::create(['id' => 'BRTSI6300', 'name' => 'Baze podataka', 'professor_id' => 5]);
        Course::create(['id' => 'BRTSI7200', 'name' => 'Projektovanje informacionih sistema i baza podataka', 'professor_id' => 5]);
        Course::create(['id' => 'BRTSI5300', 'name' => 'Programiranje internet aplikacija', 'professor_id' => 6]);
        Course::create(['id' => 'BRTSI7301', 'name' => 'E-poslovanje', 'professor_id' => 6]);
        Course::create(['id' => 'BRTSI5200', 'name' => 'Mikroprocesorski sistemi', 'professor_id' => 7]);

        //ListensTo
        ListensTo::create(['student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI5200']);
        ListensTo::create(['student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI5300']);
        ListensTo::create(['student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI6300']);
        ListensTo::create(['student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI7200']);

        
        ListensTo::create(['student_id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI5200']);
        ListensTo::create(['student_id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI5300']);
        ListensTo::create(['student_id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI6300']);
        ListensTo::create(['student_id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI7200']);
        ListensTo::create(['student_id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI7301']);

        //Exams
        Exam::create(['examination_period' => 'Januar', 'grade' => 5, 'passed' => 'no', 'student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI6300', 'created_at' => '2015-01-17 09:00:00']);
        Exam::create(['examination_period' => 'Januar', 'grade' => 9, 'passed' => 'yes', 'student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI5200', 'created_at' => '2015-01-18 09:00:00']);
        Exam::create(['examination_period' => 'Januar', 'grade' => 10, 'passed' => 'yes', 'student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI5300', 'created_at' => '2015-01-19 15:00:00']);
        Exam::create(['examination_period' => 'Februar', 'grade' => 8, 'passed' => 'yes', 'student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI6300', 'created_at' => '2015-02-13 09:00:00']);
        Exam::create(['examination_period' => 'Jun', 'grade' => 9, 'passed' => 'yes', 'student_id' => User::where('email', 'kosta@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI7200', 'created_at' => '2015-06-27 15:00:00']);

        
        
        Exam::create(['examination_period' => 'Jul', 'grade' => null, 'passed' => null, 'student_id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI5200']);
        Exam::create(['examination_period' => 'Semptembar', 'grade' => null, 'passed' => null, 'student_id' => User::where('email', 'nikola@gmail.com')->get()->first()->id, 'course_id' => 'BRTSI7301']);
    }
}
