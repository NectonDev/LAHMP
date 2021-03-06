<?php

namespace App\Transformer\Teams;

class TeamTransformer {

    public function transform($team){
        return [
            'id' => $team->id,
            'team' => $team->name,
            'team_logo' => $team->logo,
            'points' => $team->points,
            'season' => $team->season,
            'players' => $team->players,
            'matches' => $team->matches,
            'goals' => $team->goals,
            'assists' => $team->assists
        ];
    }
}