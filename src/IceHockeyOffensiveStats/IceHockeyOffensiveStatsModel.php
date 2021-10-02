<?php

declare(strict_types=1);

namespace Sports\IceHockeyOffensiveStats;

use JsonSerializable;

class IceHockeyOffensiveStatsModel implements JsonSerializable
{
    private int $id;
    private string $goalsGameWinning;
    private string $goalsGameTying;
    private string $goalsPowerPlay;
    private string $goalsShortHanded;
    private string $goalsEvenStrength;
    private string $goalsEmptyNet;
    private string $goalsOvertime;
    private string $goalsShootout;
    private string $goalsPenaltyShot;
    private string $assists;
    private string $points;
    private string $powerPlayAmount;
    private string $powerPlayPercentage;
    private string $shotsPenaltyShotTaken;
    private string $shotsPenaltyShotMissed;
    private string $shotsPenaltyShotPercentage;
    private string $giveaways;
    private string $minutesPowerPlay;
    private string $faceoffWins;
    private string $faceoffLosses;
    private string $faceoffWinPercentage;
    private string $scoringChances;

    public function __construct(IceHockeyOffensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->goalsGameWinning = $dto->goalsGameWinning;
        $this->goalsGameTying = $dto->goalsGameTying;
        $this->goalsPowerPlay = $dto->goalsPowerPlay;
        $this->goalsShortHanded = $dto->goalsShortHanded;
        $this->goalsEvenStrength = $dto->goalsEvenStrength;
        $this->goalsEmptyNet = $dto->goalsEmptyNet;
        $this->goalsOvertime = $dto->goalsOvertime;
        $this->goalsShootout = $dto->goalsShootout;
        $this->goalsPenaltyShot = $dto->goalsPenaltyShot;
        $this->assists = $dto->assists;
        $this->points = $dto->points;
        $this->powerPlayAmount = $dto->powerPlayAmount;
        $this->powerPlayPercentage = $dto->powerPlayPercentage;
        $this->shotsPenaltyShotTaken = $dto->shotsPenaltyShotTaken;
        $this->shotsPenaltyShotMissed = $dto->shotsPenaltyShotMissed;
        $this->shotsPenaltyShotPercentage = $dto->shotsPenaltyShotPercentage;
        $this->giveaways = $dto->giveaways;
        $this->minutesPowerPlay = $dto->minutesPowerPlay;
        $this->faceoffWins = $dto->faceoffWins;
        $this->faceoffLosses = $dto->faceoffLosses;
        $this->faceoffWinPercentage = $dto->faceoffWinPercentage;
        $this->scoringChances = $dto->scoringChances;
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

    public function getGoalsPowerPlay(): string
    {
        return $this->goalsPowerPlay;
    }

    public function setGoalsPowerPlay(string $goalsPowerPlay): void
    {
        $this->goalsPowerPlay = $goalsPowerPlay;
    }

    public function getGoalsShortHanded(): string
    {
        return $this->goalsShortHanded;
    }

    public function setGoalsShortHanded(string $goalsShortHanded): void
    {
        $this->goalsShortHanded = $goalsShortHanded;
    }

    public function getGoalsEvenStrength(): string
    {
        return $this->goalsEvenStrength;
    }

    public function setGoalsEvenStrength(string $goalsEvenStrength): void
    {
        $this->goalsEvenStrength = $goalsEvenStrength;
    }

    public function getGoalsEmptyNet(): string
    {
        return $this->goalsEmptyNet;
    }

    public function setGoalsEmptyNet(string $goalsEmptyNet): void
    {
        $this->goalsEmptyNet = $goalsEmptyNet;
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

    public function getGoalsPenaltyShot(): string
    {
        return $this->goalsPenaltyShot;
    }

    public function setGoalsPenaltyShot(string $goalsPenaltyShot): void
    {
        $this->goalsPenaltyShot = $goalsPenaltyShot;
    }

    public function getAssists(): string
    {
        return $this->assists;
    }

    public function setAssists(string $assists): void
    {
        $this->assists = $assists;
    }

    public function getPoints(): string
    {
        return $this->points;
    }

    public function setPoints(string $points): void
    {
        $this->points = $points;
    }

    public function getPowerPlayAmount(): string
    {
        return $this->powerPlayAmount;
    }

    public function setPowerPlayAmount(string $powerPlayAmount): void
    {
        $this->powerPlayAmount = $powerPlayAmount;
    }

    public function getPowerPlayPercentage(): string
    {
        return $this->powerPlayPercentage;
    }

    public function setPowerPlayPercentage(string $powerPlayPercentage): void
    {
        $this->powerPlayPercentage = $powerPlayPercentage;
    }

    public function getShotsPenaltyShotTaken(): string
    {
        return $this->shotsPenaltyShotTaken;
    }

    public function setShotsPenaltyShotTaken(string $shotsPenaltyShotTaken): void
    {
        $this->shotsPenaltyShotTaken = $shotsPenaltyShotTaken;
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

    public function getGiveaways(): string
    {
        return $this->giveaways;
    }

    public function setGiveaways(string $giveaways): void
    {
        $this->giveaways = $giveaways;
    }

    public function getMinutesPowerPlay(): string
    {
        return $this->minutesPowerPlay;
    }

    public function setMinutesPowerPlay(string $minutesPowerPlay): void
    {
        $this->minutesPowerPlay = $minutesPowerPlay;
    }

    public function getFaceoffWins(): string
    {
        return $this->faceoffWins;
    }

    public function setFaceoffWins(string $faceoffWins): void
    {
        $this->faceoffWins = $faceoffWins;
    }

    public function getFaceoffLosses(): string
    {
        return $this->faceoffLosses;
    }

    public function setFaceoffLosses(string $faceoffLosses): void
    {
        $this->faceoffLosses = $faceoffLosses;
    }

    public function getFaceoffWinPercentage(): string
    {
        return $this->faceoffWinPercentage;
    }

    public function setFaceoffWinPercentage(string $faceoffWinPercentage): void
    {
        $this->faceoffWinPercentage = $faceoffWinPercentage;
    }

    public function getScoringChances(): string
    {
        return $this->scoringChances;
    }

    public function setScoringChances(string $scoringChances): void
    {
        $this->scoringChances = $scoringChances;
    }

    public function toDto(): IceHockeyOffensiveStatsDto
    {
        $dto = new IceHockeyOffensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->goalsGameWinning = $this->goalsGameWinning ?? "";
        $dto->goalsGameTying = $this->goalsGameTying ?? "";
        $dto->goalsPowerPlay = $this->goalsPowerPlay ?? "";
        $dto->goalsShortHanded = $this->goalsShortHanded ?? "";
        $dto->goalsEvenStrength = $this->goalsEvenStrength ?? "";
        $dto->goalsEmptyNet = $this->goalsEmptyNet ?? "";
        $dto->goalsOvertime = $this->goalsOvertime ?? "";
        $dto->goalsShootout = $this->goalsShootout ?? "";
        $dto->goalsPenaltyShot = $this->goalsPenaltyShot ?? "";
        $dto->assists = $this->assists ?? "";
        $dto->points = $this->points ?? "";
        $dto->powerPlayAmount = $this->powerPlayAmount ?? "";
        $dto->powerPlayPercentage = $this->powerPlayPercentage ?? "";
        $dto->shotsPenaltyShotTaken = $this->shotsPenaltyShotTaken ?? "";
        $dto->shotsPenaltyShotMissed = $this->shotsPenaltyShotMissed ?? "";
        $dto->shotsPenaltyShotPercentage = $this->shotsPenaltyShotPercentage ?? "";
        $dto->giveaways = $this->giveaways ?? "";
        $dto->minutesPowerPlay = $this->minutesPowerPlay ?? "";
        $dto->faceoffWins = $this->faceoffWins ?? "";
        $dto->faceoffLosses = $this->faceoffLosses ?? "";
        $dto->faceoffWinPercentage = $this->faceoffWinPercentage ?? "";
        $dto->scoringChances = $this->scoringChances ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "goals_game_winning" => $this->goalsGameWinning,
            "goals_game_tying" => $this->goalsGameTying,
            "goals_power_play" => $this->goalsPowerPlay,
            "goals_short_handed" => $this->goalsShortHanded,
            "goals_even_strength" => $this->goalsEvenStrength,
            "goals_empty_net" => $this->goalsEmptyNet,
            "goals_overtime" => $this->goalsOvertime,
            "goals_shootout" => $this->goalsShootout,
            "goals_penalty_shot" => $this->goalsPenaltyShot,
            "assists" => $this->assists,
            "points" => $this->points,
            "power_play_amount" => $this->powerPlayAmount,
            "power_play_percentage" => $this->powerPlayPercentage,
            "shots_penalty_shot_taken" => $this->shotsPenaltyShotTaken,
            "shots_penalty_shot_missed" => $this->shotsPenaltyShotMissed,
            "shots_penalty_shot_percentage" => $this->shotsPenaltyShotPercentage,
            "giveaways" => $this->giveaways,
            "minutes_power_play" => $this->minutesPowerPlay,
            "faceoff_wins" => $this->faceoffWins,
            "faceoff_losses" => $this->faceoffLosses,
            "faceoff_win_percentage" => $this->faceoffWinPercentage,
            "scoring_chances" => $this->scoringChances,
        ];
    }
}