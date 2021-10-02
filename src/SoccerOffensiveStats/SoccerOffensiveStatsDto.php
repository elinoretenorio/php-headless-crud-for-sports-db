<?php

declare(strict_types=1);

namespace Sports\SoccerOffensiveStats;

class SoccerOffensiveStatsDto 
{
    public int $id;
    public string $goalsGameWinning;
    public string $goalsGameTying;
    public string $goalsOvertime;
    public string $goalsShootout;
    public string $goalsTotal;
    public string $assistsGameWinning;
    public string $assistsGameTying;
    public string $assistsOvertime;
    public string $assistsTotal;
    public string $points;
    public string $shotsTotal;
    public string $shotsOnGoalTotal;
    public string $shotsHitFrame;
    public string $shotsPenaltyShotTaken;
    public string $shotsPenaltyShotScored;
    public string $shotsPenaltyShotMissed;
    public string $shotsPenaltyShotPercentage;
    public string $shotsShootoutTaken;
    public string $shotsShootoutScored;
    public string $shotsShootoutMissed;
    public string $shotsShootoutPercentage;
    public string $giveaways;
    public string $offsides;
    public string $cornerKicks;
    public string $hatTricks;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->goalsGameWinning = $row["goals_game_winning"] ?? "";
        $this->goalsGameTying = $row["goals_game_tying"] ?? "";
        $this->goalsOvertime = $row["goals_overtime"] ?? "";
        $this->goalsShootout = $row["goals_shootout"] ?? "";
        $this->goalsTotal = $row["goals_total"] ?? "";
        $this->assistsGameWinning = $row["assists_game_winning"] ?? "";
        $this->assistsGameTying = $row["assists_game_tying"] ?? "";
        $this->assistsOvertime = $row["assists_overtime"] ?? "";
        $this->assistsTotal = $row["assists_total"] ?? "";
        $this->points = $row["points"] ?? "";
        $this->shotsTotal = $row["shots_total"] ?? "";
        $this->shotsOnGoalTotal = $row["shots_on_goal_total"] ?? "";
        $this->shotsHitFrame = $row["shots_hit_frame"] ?? "";
        $this->shotsPenaltyShotTaken = $row["shots_penalty_shot_taken"] ?? "";
        $this->shotsPenaltyShotScored = $row["shots_penalty_shot_scored"] ?? "";
        $this->shotsPenaltyShotMissed = $row["shots_penalty_shot_missed"] ?? "";
        $this->shotsPenaltyShotPercentage = $row["shots_penalty_shot_percentage"] ?? "";
        $this->shotsShootoutTaken = $row["shots_shootout_taken"] ?? "";
        $this->shotsShootoutScored = $row["shots_shootout_scored"] ?? "";
        $this->shotsShootoutMissed = $row["shots_shootout_missed"] ?? "";
        $this->shotsShootoutPercentage = $row["shots_shootout_percentage"] ?? "";
        $this->giveaways = $row["giveaways"] ?? "";
        $this->offsides = $row["offsides"] ?? "";
        $this->cornerKicks = $row["corner_kicks"] ?? "";
        $this->hatTricks = $row["hat_tricks"] ?? "";
    }
}