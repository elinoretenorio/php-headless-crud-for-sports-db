<?php

declare(strict_types=1);

namespace Sports\IceHockeyOffensiveStats;

class IceHockeyOffensiveStatsDto 
{
    public int $id;
    public string $goalsGameWinning;
    public string $goalsGameTying;
    public string $goalsPowerPlay;
    public string $goalsShortHanded;
    public string $goalsEvenStrength;
    public string $goalsEmptyNet;
    public string $goalsOvertime;
    public string $goalsShootout;
    public string $goalsPenaltyShot;
    public string $assists;
    public string $points;
    public string $powerPlayAmount;
    public string $powerPlayPercentage;
    public string $shotsPenaltyShotTaken;
    public string $shotsPenaltyShotMissed;
    public string $shotsPenaltyShotPercentage;
    public string $giveaways;
    public string $minutesPowerPlay;
    public string $faceoffWins;
    public string $faceoffLosses;
    public string $faceoffWinPercentage;
    public string $scoringChances;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->goalsGameWinning = $row["goals_game_winning"] ?? "";
        $this->goalsGameTying = $row["goals_game_tying"] ?? "";
        $this->goalsPowerPlay = $row["goals_power_play"] ?? "";
        $this->goalsShortHanded = $row["goals_short_handed"] ?? "";
        $this->goalsEvenStrength = $row["goals_even_strength"] ?? "";
        $this->goalsEmptyNet = $row["goals_empty_net"] ?? "";
        $this->goalsOvertime = $row["goals_overtime"] ?? "";
        $this->goalsShootout = $row["goals_shootout"] ?? "";
        $this->goalsPenaltyShot = $row["goals_penalty_shot"] ?? "";
        $this->assists = $row["assists"] ?? "";
        $this->points = $row["points"] ?? "";
        $this->powerPlayAmount = $row["power_play_amount"] ?? "";
        $this->powerPlayPercentage = $row["power_play_percentage"] ?? "";
        $this->shotsPenaltyShotTaken = $row["shots_penalty_shot_taken"] ?? "";
        $this->shotsPenaltyShotMissed = $row["shots_penalty_shot_missed"] ?? "";
        $this->shotsPenaltyShotPercentage = $row["shots_penalty_shot_percentage"] ?? "";
        $this->giveaways = $row["giveaways"] ?? "";
        $this->minutesPowerPlay = $row["minutes_power_play"] ?? "";
        $this->faceoffWins = $row["faceoff_wins"] ?? "";
        $this->faceoffLosses = $row["faceoff_losses"] ?? "";
        $this->faceoffWinPercentage = $row["faceoff_win_percentage"] ?? "";
        $this->scoringChances = $row["scoring_chances"] ?? "";
    }
}