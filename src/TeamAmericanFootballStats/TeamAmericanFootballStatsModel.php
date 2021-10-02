<?php

declare(strict_types=1);

namespace Sports\TeamAmericanFootballStats;

use JsonSerializable;

class TeamAmericanFootballStatsModel implements JsonSerializable
{
    private int $id;
    private string $yardsPerAttempt;
    private string $averageStartingPosition;
    private string $timeouts;
    private string $timeOfPossession;
    private string $turnoverRatio;

    public function __construct(TeamAmericanFootballStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->yardsPerAttempt = $dto->yardsPerAttempt;
        $this->averageStartingPosition = $dto->averageStartingPosition;
        $this->timeouts = $dto->timeouts;
        $this->timeOfPossession = $dto->timeOfPossession;
        $this->turnoverRatio = $dto->turnoverRatio;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getYardsPerAttempt(): string
    {
        return $this->yardsPerAttempt;
    }

    public function setYardsPerAttempt(string $yardsPerAttempt): void
    {
        $this->yardsPerAttempt = $yardsPerAttempt;
    }

    public function getAverageStartingPosition(): string
    {
        return $this->averageStartingPosition;
    }

    public function setAverageStartingPosition(string $averageStartingPosition): void
    {
        $this->averageStartingPosition = $averageStartingPosition;
    }

    public function getTimeouts(): string
    {
        return $this->timeouts;
    }

    public function setTimeouts(string $timeouts): void
    {
        $this->timeouts = $timeouts;
    }

    public function getTimeOfPossession(): string
    {
        return $this->timeOfPossession;
    }

    public function setTimeOfPossession(string $timeOfPossession): void
    {
        $this->timeOfPossession = $timeOfPossession;
    }

    public function getTurnoverRatio(): string
    {
        return $this->turnoverRatio;
    }

    public function setTurnoverRatio(string $turnoverRatio): void
    {
        $this->turnoverRatio = $turnoverRatio;
    }

    public function toDto(): TeamAmericanFootballStatsDto
    {
        $dto = new TeamAmericanFootballStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->yardsPerAttempt = $this->yardsPerAttempt ?? "";
        $dto->averageStartingPosition = $this->averageStartingPosition ?? "";
        $dto->timeouts = $this->timeouts ?? "";
        $dto->timeOfPossession = $this->timeOfPossession ?? "";
        $dto->turnoverRatio = $this->turnoverRatio ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "yards_per_attempt" => $this->yardsPerAttempt,
            "average_starting_position" => $this->averageStartingPosition,
            "timeouts" => $this->timeouts,
            "time_of_possession" => $this->timeOfPossession,
            "turnover_ratio" => $this->turnoverRatio,
        ];
    }
}