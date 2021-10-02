<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPenaltiesStats;

use JsonSerializable;

class AmericanFootballPenaltiesStatsModel implements JsonSerializable
{
    private int $id;
    private string $penaltiesTotal;
    private string $penaltyYards;
    private string $penaltyFirstDowns;

    public function __construct(AmericanFootballPenaltiesStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->penaltiesTotal = $dto->penaltiesTotal;
        $this->penaltyYards = $dto->penaltyYards;
        $this->penaltyFirstDowns = $dto->penaltyFirstDowns;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPenaltiesTotal(): string
    {
        return $this->penaltiesTotal;
    }

    public function setPenaltiesTotal(string $penaltiesTotal): void
    {
        $this->penaltiesTotal = $penaltiesTotal;
    }

    public function getPenaltyYards(): string
    {
        return $this->penaltyYards;
    }

    public function setPenaltyYards(string $penaltyYards): void
    {
        $this->penaltyYards = $penaltyYards;
    }

    public function getPenaltyFirstDowns(): string
    {
        return $this->penaltyFirstDowns;
    }

    public function setPenaltyFirstDowns(string $penaltyFirstDowns): void
    {
        $this->penaltyFirstDowns = $penaltyFirstDowns;
    }

    public function toDto(): AmericanFootballPenaltiesStatsDto
    {
        $dto = new AmericanFootballPenaltiesStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->penaltiesTotal = $this->penaltiesTotal ?? "";
        $dto->penaltyYards = $this->penaltyYards ?? "";
        $dto->penaltyFirstDowns = $this->penaltyFirstDowns ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "penalties_total" => $this->penaltiesTotal,
            "penalty_yards" => $this->penaltyYards,
            "penalty_first_downs" => $this->penaltyFirstDowns,
        ];
    }
}