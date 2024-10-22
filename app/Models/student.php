<?php
namespace App\Models;


class Student {
    public static function all(){
        return  
        [
        [   'id' => 1 ,
            'talaba_id' => "222012",
            'name' => "Po'latjon",
            'lastname' => "Asamov",
             'age' => "21" 
        ],
        [   'id'  => 2 ,
            'talaba_id' => "22012",
            'name' => "Nurbek",
            'lastname' => "Tukhtamishev",
            'age' => "23"
        ],
        [   'id' => 3,
            'talaba_id' => "22213",
            'name' => "Otabek",
            'lastname' => "Abdullayev",
            'age' => "23"
            
            
        ],
        [    'id' => 4,
            'talaba_id' => "22980",
            'name' => "Sunnatulla",
            'lastname' => "Sobitjanov",
            'age' => "22"
            
            
        ],
        [    'id' => 5,
            'talaba_id' => "223143",
            'name' => "Mirjalol",
            'lastname' => "Olimov",
            'age' => "19"
            
            
        ],
        ];
    }

    public static function find(int $id){
      $users = Student::all();
      $fandUsers = [];

      foreach ($users as $user) {
          if ($user['id'] == $id) {
            $fandUsers = $user;
          }
      }

      if (!$fandUsers) {
         return abort(404);
      }
      return $fandUsers;
    }
}