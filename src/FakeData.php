<?php
/**
 * Created by PhpStorm.
 * User: henri
 * Date: 06/02/19
 * Time: 14:14
 */

namespace App;


use Faker\Factory;

class FakeData
{
    public static function games($count = 10)
    {
        $faker = Factory::create("fr_FR");
        $games = [];
        for ($i = 1; $i <= $count; $i++) {
            $color1 = ltrim($faker->hexColor, "#");
            $color2 = ltrim($faker->hexColor, "#");
            $games[] = [
                "id" => $i,
                "name" => $name = $faker->sentence(2),
                "image" => "https://fakeimg.pl/256x256/$color1/$color2/?text=" . urlencode($name)
            ];
        }
        return $games;

    }

    public static function players($count = 10)
    {
        $faker = Factory::create("fr_FR");
        $players = [];
        for ($i = 1; $i <= $count; $i++) {
            $players[] = ["id" => $i, "username" => $faker->userName, "email" => $faker->email, "games"=>self::games(5)];
        }

        return $players;
    }


    public static function scores($count = 100)
    {
        $faker = Factory::create("fr_FR");

        $games = self::games(5);
        $players = self::players(5);
        $scores = [];
        for ($i = 1; $i <= $count; $i++) {
            $scores[] = ["id" => $i,
                "game" => $games[rand(0, 4)],
                "player" => $players[rand(0, 4)],
                "score" => rand(1, 100000),
                "createdAt" => $faker->dateTime
            ];
        }
        return $scores;
    }
}