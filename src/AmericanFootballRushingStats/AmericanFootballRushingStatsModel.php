<?php

declare(strict_types=1);

namespace Sports\AmericanFootballRushingStats;

use JsonSerializable;

class AmericanFootballRushingStatsModel implements JsonSerializable
{
    private int $id;
    private string $rushesAttempts;
    private string $rushesYards;
    private string $rushesTouchdowns;
    private string $rushingAverageYardsPer;
    private string $rushesFirstDown;
    private string $rushesLongest;

    public function __construct(AmericanFootballRushingStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->rushesAttempts = $dto->rushesAttempts;
        $this->rushesYards = $dto->rushesYards;
        $this->rushesTouchdowns = $dto->rushesTouchdowns;
        $this->rushingAverageYardsPer = $dto->rushingAverageYardsPer;
        $this->rushesFirstDown = $dto->rushesFirstDown;
        $this->rushesLongest = $dto->rushesLongest;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getRushesAttempts(): string
    {
        return $this->rushesAttempts;
    }

    public function setRushesAttempts(string $rushesAttempts): void
    {
        $this->rushesAttempts = $rushesAttempts;
    }

    public function getRushesYards(): string
    {
        return $this->rushesYards;
    }

    public function setRushesYards(string $rushesYards): void
    {
        $this->rushesYards = $rushesYards;
    }

    public function getRushesTouchdowns(): string
    {
        return $this->rushesTouchdowns;
    }

    public function setRushesTouchdowns(string $rushesTouchdowns): void
    {
        $this->rushesTouchdowns = $rushesTouchdowns;
    }

    public function getRushingAverageYardsPer(): string
    {
        return $this->rushingAverageYardsPer;
    }

    public function setRushingAverageYardsPer(string $rushingAverageYardsPer): void
    {
        $this->rushingAverageYardsPer = $rushingAverageYardsPer;
    }

    public function getRushesFirstDown(): string
    {
        return $this->rushesFirstDown;
    }

    public function setRushesFirstDown(string $rushesFirstDown): void
    {
        $this->rushesFirstDown = $rushesFirstDown;
    }

    public function getRushesLongest(): string
    {
        return $this->rushesLongest;
    }

    public function setRushesLongest(string $rushesLongest): void
    {
        $this->rushesLongest = $rushesLongest;
    }

    public function toDto(): AmericanFootballRushingStatsDto
    {
        $dto = new AmericanFootballRushingStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->rushesAttempts = $this->rushesAttempts ?? "";
        $dto->rushesYards = $this->rushesYards ?? "";
        $dto->rushesTouchdowns = $this->rushesTouchdowns ?? "";
        $dto->rushingAverageYardsPer = $this->rushingAverageYardsPer ?? "";
        $dto->rushesFirstDown = $this->rushesFirstDown ?? "";
        $dto->rushesLongest = $this->rushesLongest ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "rushes_attempts" => $this->rushesAttempts,
            "rushes_yards" => $this->rushesYards,
            "rushes_touchdowns" => $this->rushesTouchdowns,
            "rushing_average_yards_per" => $this->rushingAverageYardsPer,
            "rushes_first_down" => $this->rushesFirstDown,
            "rushes_longest" => $this->rushesLongest,
        ];
    }
}