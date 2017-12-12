<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Season;
use App\Match;

class MatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }


    public function add(Season $season)
    {
        $match =  new Match([
            'date'  => $this->get('date'),
            'time' => $this->get('time'),
            'stage_id' => $this->get('stage_id'),
            'register_team_1_id' => $this->get('register_team_1_id'),
            'register_team_2_id' => $this->get('register_team_2_id'),
            'stadium' => $this->get('stadium'),
            'is_played' => 0,
            'team_1_goals' => 0,
            'team_2_goals' => 0,
            'winner_id' => 0,
            'red_cards' => 0,
            'yellow_cards' => 0
        ]);

        $season->matches()->save($match);

        return $match;
    }
}