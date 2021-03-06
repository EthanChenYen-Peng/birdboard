// php artisan make:factory ProjectFactory --model="App\Project" --- MADE THIS FILE
<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [

            // This data below becomes the dummy data used in the test cases!

            // To use factory dummmy data, call 'php artisan tinker && factory('App\Project')->create() or ->make()(make wont persists/save the data)' in the command line
            'title' => $faker->sentence(4),

            'description' => $faker->sentence(4),
            
            // Helper class to create dummy user and return the id
            'owner_id' => factory(App\User::class)
    ];
});
