<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Match::class, 50)->create()->each(function ($u) {
            $u->teams()->save(factory(App\Team::class)->make());
            $u->round()->associate(factory(App\Round::class)->make()->save())->save();
        });

    }
}
