<?php

declare(strict_types=1);

namespace Sports\SoccerOffensiveStats;

use JsonSerializable;

class SoccerOffensiveStatsModel implements JsonSerializable
{
    private int $id;
    private string $goalsGameWinning;
    private string $goalsGameTying;
    private string $goalsOvertime;
    private string $goalsShootout;
    private string $goalsTotal;
    private string $assistsGameWinning;
    private string $assistsGameTying;
    private string $assistsOvertime;
    private string $assistsTotal;
    private string $points;
    private string $shotsTotal;
    private string $shotsOnGoalTotal;
    private string $shotsHitFrame;
    private string $shotsPenaltyShotTaken;
    private string $shotsPenaltyShotScored;
    private string $shotsPenaltyShotMissed;
    private string $shotsPenaltyShotPercentage;
    private string $shotsShootoutTaken;
    private string $shotsShootoutScored;
    private string $shotsShootoutMissed;
    private string $shotsShootoutPercentage;
    private string $giveaways;
    private string $offsides;
    private string $cornerKicks;
    private string $hatTricks;

    public function __construct(SoccerOffensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->goalsGameWinning = $dto->goalsGameWinning;
        $this->goalsGameTying = $dto->goalsGameTying;
        $this->goalsOvertime = $dto->goalsOvertime;
        $this->goalsShootout = $dto->goalsShootout;
        $this->goalsTotal = $dto->goalsTotal;
        $this->assistsGameWinning = $dto->assistsGameWinning;
        $this->assistsGameTying = $dto->assistsGameTying;
        $this->assistsOvertime = $dto->assistsOvertime;
        $this->assistsTotal = $dto->assistsTotal;
        $this->points = $dto->points;
        $this->shotsTotal = $dto->shotsTotal;
        $this->shotsOnGoalTotal = $dto->shotsOnGoalTotal;
        $this->shotsHitFrame = $dto->shotsHitFrame;
        $this->shotsPenaltyShotTaken = $dto->shotsPenaltyShotTaken;
        $this->shotsPenaltyShotScored = $dto->shotsPenaltyShotScored;
        $this->shotsPenaltyShotMissed = $dto->shotsPenaltyShotMissed;
        $this->shotsPenaltyShotPercentage = $dto->shotsPenaltyShotPercentage;
        $this->shotsShootoutTaken = $dto->shotsShootoutTaken;
        $this->shotsShootoutScored = $dto->shotsShootoutScored;
        $this->shotsShootoutMissed = $dto->shotsShootoutMissed;
        $this->shotsShootoutPercentage = $dto->shotsShootoutPercentage;
        $this->giveaways = $dto->giveaways;
        $this->offsides = $dto->offsides;
        $this->cornerKicks = $dto->cornerKicks;
        $this->hatTricks = $dto->hatTricks;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getGoalsGameWinning(): string
    {
        return $this->goalsGameWinning;
    }

    public function setGoalsGameWinning(string $goalsGameWinning): void
    {
        $this->goalsGameWinning = $goalsGameWinning;
    }

    public function getGoalsGameTying(): string
    {
        return $this->goalsGameTying;
    }

    public function setGoalsGameTying(string $goalsGameTying): void
    {
        $this->goalsGameTying = $goalsGameTying;
    }

    public function getGoalsOvertime(): string
    {
        return $this->goalsOvertime;
    }

    public function setGoalsOvertime(string $goalsOvertime): void
    {
        $this->goalsOvertime = $goalsOvertime;
    }

    public function getGoalsShootout(): string
    {
        return $this->goalsShootout;
    }

    public function setGoalsShootout(string $goalsShootout): void
    {
        $this->goalsShootout = $goalsShootout;
    }

    public function getGoalsTotal(): string
    {
        return $this->goalsTotal;
    }

    public function setGoalsTotal(string $goalsTotal): void
    {
        $this->goalsTotal = $goalsTotal;
    }

    public function getAssistsGameWinning(): string
    {
        return $this->assistsGameWinning;
    }

    public function setAssistsGameWinning(string $assistsGameWinning): void
    {
        $this->assistsGameWinning = $assistsGameWinning;
    }

    public function getAssistsGameTying(): string
    {
        return $this->assistsGameTying;
    }

    public function setAssistsGameTying(string $assistsGameTying): void
    {
        $this->assistsGameTying = $assistsGameTying;
    }

    public function getAssistsOvertime(): string
    {
        return $this->assistsOvertime;
    }

    public function setAssistsOvertime(string $assistsOvertime): void
    {
        $this->assistsOvertime = $assistsOvertime;
    }

    public function getAssistsTotal(): string
    {
        return $this->assistsTotal;
    }

    public function setAssistsTotal(string $assistsTotal): void
    {
        $this->assistsTotal = $assistsTotal;
    }

    public function getPoints(): string
    {
        return $this->points;
    }

    public function setPoints(string $points): void
    {
        $this->points = $points;
    }

    public function getShotsTotal(): string
    {
        return $this->shotsTotal;
    }

    public function setShotsTotal(string $shotsTotal): void
    {
        $this->shotsTotal = $shotsTotal;
    }

    public function getShotsOnGoalTotal(): string
    {
        return $this->shotsOnGoalTotal;
    }

    public function setShotsOnGoalTotal(string $shotsOnGoalTotal): void
    {
        $this->shotsOnGoalTotal = $shotsOnGoalTotal;
    }

    public function getShotsHitFrame(): string
    {
        return $this->shotsHitFrame;
    }

    public function setShotsHitFrame(string $shotsHitFrame): void
    {
        $this->shotsHitFrame = $shotsHitFrame;
    }

    public function getShotsPenaltyShotTaken(): string
    {
        return $this->shotsPenaltyShotTaken;
    }

    public function setShotsPenaltyShotTaken(string $shotsPenaltyShotTaken): void
    {
        $this->shotsPenaltyShotTaken = $shotsPenaltyShotTaken;
    }

    public function getShotsPenaltyShotScored(): string
    {
        return $this->shotsPenaltyShotScored;
    }

    public function setShotsPenaltyShotScored(string $shotsPenaltyShotScored): void
    {
        $this->shotsPenaltyShotScored = $shotsPenaltyShotScored;
    }

    public function getShotsPenaltyShotMissed(): string
    {
        return $this->shotsPenaltyShotMissed;
    }

    public function setShotsPenaltyShotMissed(string $shotsPenaltyShotMissed): void
    {
        $this->shotsPenaltyShotMissed = $shotsPenaltyShotMissed;
    }

    public function getShotsPenaltyShotPercentage(): string
    {
        return $this->shotsPenaltyShotPercentage;
    }

    public function setShotsPenaltyShotPercentage(string $shotsPenaltyShotPercentage): void
    {
        $this->shotsPenaltyShotPercentage = $shotsPenaltyShotPercentage;
    }

    public function getShotsShootoutTaken(): string
    {
        return $this->shotsShootoutTaken;
    }

    public function setShotsShootoutTaken(string $shotsShootoutTaken): void
    {
        $this->shotsShootoutTaken = $shotsShootoutTaken;
    }

    public function getShotsShootoutScored(): string
    {
        return $this->shotsShootoutScored;
    }

    public function setShotsShootoutScored(string $shotsShootoutScored): void
    {
        $this->shotsShootoutScored = $shotsShootoutScored;
    }

    public function getShotsShootoutMissed(): string
    {
        return $this->shotsShootoutMissed;
    }

    public function setShotsShootoutMissed(string $shotsShootoutMissed): void
    {
        $this->shotsShootoutMissed = $shotsShootoutMissed;
    }

    public function getShotsShootoutPercentage(): string
    {
        return $this->shotsShootoutPercentage;
    }

    public function setShotsShootoutPercentage(string $shotsShootoutPercentage): void
    {
        $this->shotsShootoutPercentage = $shotsShootoutPercentage;
    }

    public function getGiveaways(): string
    {
        return $this->giveaways;
    }

    public function setGiveaways(string $giveaways): void
    {
        $this->giveaways = $giveaways;
    }

    public function getOffsides(): string
    {
        return $this->offsides;
    }

    public function setOffsides(string $offsides): void
    {
        $this->offsides = $offsides;
    }

    public function getCornerKicks(): string
    {
        return $this->cornerKicks;
    }

    public function setCornerKicks(string $cornerKicks): void
    {
        $this->cornerKicks = $cornerKicks;
    }

    public function getHatTricks(): string
    {
        return $this->hatTricks;
    }

    public function setHatTricks(string $hatTricks): void
    {
        $this->hatTricks = $hatTricks;
    }

    public function toDto(): SoccerOffensiveStatsDto
    {
        $dto = new SoccerOffensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->goalsGameWinning = $this->goalsGameWinning ?? "";
        $dto->goalsGameTying = $this->goalsGameTying ?? "";
        $dto->goalsOvertime = $this->goalsOvertime ?? "";
        $dto->goalsShootout = $this->goalsShootout ?? "";
        $dto->goalsTotal = $this->goalsTotal ?? "";
        $dto->assistsGameWinning = $this->assistsGameWinning ?? "";
        $dto->assistsGameTying = $this->assistsGameTying ?? "";
        $dto->assistsOvertime = $this->assistsOvertime ?? "";
        $dto->assistsTotal = $this->assistsTotal ?? "";
        $dto->points = $this->points ?? "";
        $dto->shotsTotal = $this->shotsTotal ?? "";
        $dto->shotsOnGoalTotal = $this->shotsOnGoalTotal ?? "";
        $dto->shotsHitFrame = $this->shotsHitFrame ?? "";
        $dto->shotsPenaltyShotTaken = $this->shotsPenaltyShotTaken ?? "";
        $dto->shotsPenaltyShotScored = $this->shotsPenaltyShotScored ?? "";
        $dto->shotsPenaltyShotMissed = $this->shotsPenaltyShotMissed ?? "";
        $dto->shotsPenaltyShotPercentage = $this->shotsPenaltyShotPercentage ?? "";
        $dto->shotsShootoutTaken = $this->shotsShootoutTaken ?? "";
        $dto->shotsShootoutScored = $this->shotsShootoutScored ?? "";
        $dto->shotsShootoutMissed = $this->shotsShootoutMissed ?? "";
        $dto->shotsShootoutPercentage = $this->shotsShootoutPercentage ?? "";
        $dto->giveaways = $this->giveaways ?? "";
        $dto->offsides = $this->offsides ?? "";
        $dto->cornerKicks = $this->cornerKicks ?? "";
        $dto->hatTricks = $this->hatTricks ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "goals_game_winning" => $this->goalsGameWinning,
            "goals_game_tying" => $this->goalsGameTying,
            "goals_overtime" => $this->goalsOvertime,
            "goals_shootout" => $this->goalsShootout,
            "goals_total" => $this->goalsTotal,
            "assists_game_winning" => $this->assistsGameWinning,
            "assists_game_tying" => $this->assistsGameTying,
            "assists_overtime" => $this->assistsOvertime,
            "assists_total" => $this->assistsTotal,
            "points" => $this->points,
            "shots_total" => $this->shotsTotal,
            "shots_on_goal_total" => $this->shotsOnGoalTotal,
            "shots_hit_frame" => $this->shotsHitFrame,
            "shots_penalty_shot_taken" => $this->shotsPenaltyShotTaken,
            "shots_penalty_shot_scored" => $this->shotsPenaltyShotScored,
            "shots_penalty_shot_missed" => $this->shotsPenaltyShotMissed,
            "shots_penalty_shot_percentage" => $this->shotsPenaltyShotPercentage,
            "shots_shootout_taken" => $this->shotsShootoutTaken,
            "shots_shootout_scored" => $this->shotsShootoutScored,
            "shots_shootout_missed" => $this->shotsShootoutMissed,
            "shots_shootout_percentage" => $this->shotsShootoutPercentage,
            "giveaways" => $this->giveaways,
            "offsides" => $this->offsides,
            "corner_kicks" => $this->cornerKicks,
            "hat_tricks" => $this->hatTricks,
        ];
    }
}