<?php

declare(strict_types=1);

namespace Sports\AmericanFootballOffensiveStats;

use JsonSerializable;

class AmericanFootballOffensiveStatsModel implements JsonSerializable
{
    private int $id;
    private string $offensivePlaysYards;
    private string $offensivePlaysNumber;
    private string $offensivePlaysAverageYardsPer;
    private string $possessionDuration;
    private string $turnoversGiveaway;

    public function __construct(AmericanFootballOffensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->offensivePlaysYards = $dto->offensivePlaysYards;
        $this->offensivePlaysNumber = $dto->offensivePlaysNumber;
        $this->offensivePlaysAverageYardsPer = $dto->offensivePlaysAverageYardsPer;
        $this->possessionDuration = $dto->possessionDuration;
        $this->turnoversGiveaway = $dto->turnoversGiveaway;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getOffensivePlaysYards(): string
    {
        return $this->offensivePlaysYards;
    }

    public function setOffensivePlaysYards(string $offensivePlaysYards): void
    {
        $this->offensivePlaysYards = $offensivePlaysYards;
    }

    public function getOffensivePlaysNumber(): string
    {
        return $this->offensivePlaysNumber;
    }

    public function setOffensivePlaysNumber(string $offensivePlaysNumber): void
    {
        $this->offensivePlaysNumber = $offensivePlaysNumber;
    }

    public function getOffensivePlaysAverageYardsPer(): string
    {
        return $this->offensivePlaysAverageYardsPer;
    }

    public function setOffensivePlaysAverageYardsPer(string $offensivePlaysAverageYardsPer): void
    {
        $this->offensivePlaysAverageYardsPer = $offensivePlaysAverageYardsPer;
    }

    public function getPossessionDuration(): string
    {
        return $this->possessionDuration;
    }

    public function setPossessionDuration(string $possessionDuration): void
    {
        $this->possessionDuration = $possessionDuration;
    }

    public function getTurnoversGiveaway(): string
    {
        return $this->turnoversGiveaway;
    }

    public function setTurnoversGiveaway(string $turnoversGiveaway): void
    {
        $this->turnoversGiveaway = $turnoversGiveaway;
    }

    public function toDto(): AmericanFootballOffensiveStatsDto
    {
        $dto = new AmericanFootballOffensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->offensivePlaysYards = $this->offensivePlaysYards ?? "";
        $dto->offensivePlaysNumber = $this->offensivePlaysNumber ?? "";
        $dto->offensivePlaysAverageYardsPer = $this->offensivePlaysAverageYardsPer ?? "";
        $dto->possessionDuration = $this->possessionDuration ?? "";
        $dto->turnoversGiveaway = $this->turnoversGiveaway ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "offensive_plays_yards" => $this->offensivePlaysYards,
            "offensive_plays_number" => $this->offensivePlaysNumber,
            "offensive_plays_average_yards_per" => $this->offensivePlaysAverageYardsPer,
            "possession_duration" => $this->possessionDuration,
            "turnovers_giveaway" => $this->turnoversGiveaway,
        ];
    }
}