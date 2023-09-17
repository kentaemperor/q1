<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
      'name' => 'tony',
      'age' => 35,
      
    ];
    Person::create($param);
    $param = [
      'name' => 'jack',
      'age' => 20,
      
    ];
    Person::create($param);
    $param = [
      'name' => 'sara',
      'age' => 45,
      
    ];
    Person::create($param);
    $param = [
      'name' => 'saly',
      'age' => 31,
      
    ];
    Person::create($param);
  
  }
    
}
