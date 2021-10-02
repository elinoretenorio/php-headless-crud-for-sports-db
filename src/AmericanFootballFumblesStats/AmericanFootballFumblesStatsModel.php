<?php

declare(strict_types=1);

namespace Sports\AmericanFootballFumblesStats;

use JsonSerializable;

class AmericanFootballFumblesStatsModel implements JsonSerializable
{
    private int $id;
    private string $fumblesCommitted;
    private string $fumblesForced;
    private string $fumblesRecovered;
    private string $fumblesLost;
    private string $fumblesYardsGained;
    private string $fumblesOwnCommitted;
    private string $fumblesOwnRecovered;
    private string $fumblesOwnLost;
    private string $fumblesOwnYardsGained;
    private string $fumblesOpposingCommitted;
    private string $fumblesOpposingRecovered;
    private string $fumblesOpposingLost;
    private string $fumblesOpposingYardsGained;

    public function __construct(AmericanFootballFumblesStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->fumblesCommitted = $dto->fumblesCommitted;
        $this->fumblesForced = $dto->fumblesForced;
        $this->fumblesRecovered = $dto->fumblesRecovered;
        $this->fumblesLost = $dto->fumblesLost;
        $this->fumblesYardsGained = $dto->fumblesYardsGained;
        $this->fumblesOwnCommitted = $dto->fumblesOwnCommitted;
        $this->fumblesOwnRecovered = $dto->fumblesOwnRecovered;
        $this->fumblesOwnLost = $dto->fumblesOwnLost;
        $this->fumblesOwnYardsGained = $dto->fumblesOwnYardsGained;
        $this->fumblesOpposingCommitted = $dto->fumblesOpposingCommitted;
        $this->fumblesOpposingRecovered = $dto->fumblesOpposingRecovered;
        $this->fumblesOpposingLost = $dto->fumblesOpposingLost;
        $this->fumblesOpposingYardsGained = $dto->fumblesOpposingYardsGained;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFumblesCommitted(): string
    {
        return $this->fumblesCommitted;
    }

    public function setFumblesCommitted(string $fumblesCommitted): void
    {
        $this->fumblesCommitted = $fumblesCommitted;
    }

    public function getFumblesForced(): string
    {
        return $this->fumblesForced;
    }

    public function setFumblesForced(string $fumblesForced): void
    {
        $this->fumblesForced = $fumblesForced;
    }

    public function getFumblesRecovered(): string
    {
        return $this->fumblesRecovered;
    }

    public function setFumblesRecovered(string $fumblesRecovered): void
    {
        $this->fumblesRecovered = $fumblesRecovered;
    }

    public function getFumblesLost(): string
    {
        return $this->fumblesLost;
    }

    public function setFumblesLost(string $fumblesLost): void
    {
        $this->fumblesLost = $fumblesLost;
    }

    public function getFumblesYardsGained(): string
    {
        return $this->fumblesYardsGained;
    }

    public function setFumblesYardsGained(string $fumblesYardsGained): void
    {
        $this->fumblesYardsGained = $fumblesYardsGained;
    }

    public function getFumblesOwnCommitted(): string
    {
        return $this->fumblesOwnCommitted;
    }

    public function setFumblesOwnCommitted(string $fumblesOwnCommitted): void
    {
        $this->fumblesOwnCommitted = $fumblesOwnCommitted;
    }

    public function getFumblesOwnRecovered(): string
    {
        return $this->fumblesOwnRecovered;
    }

    public function setFumblesOwnRecovered(string $fumblesOwnRecovered): void
    {
        $this->fumblesOwnRecovered = $fumblesOwnRecovered;
    }

    public function getFumblesOwnLost(): string
    {
        return $this->fumblesOwnLost;
    }

    public function setFumblesOwnLost(string $fumblesOwnLost): void
    {
        $this->fumblesOwnLost = $fumblesOwnLost;
    }

    public function getFumblesOwnYardsGained(): string
    {
        return $this->fumblesOwnYardsGained;
    }

    public function setFumblesOwnYardsGained(string $fumblesOwnYardsGained): void
    {
        $this->fumblesOwnYardsGained = $fumblesOwnYardsGained;
    }

    public function getFumblesOpposingCommitted(): string
    {
        return $this->fumblesOpposingCommitted;
    }

    public function setFumblesOpposingCommitted(string $fumblesOpposingCommitted): void
    {
        $this->fumblesOpposingCommitted = $fumblesOpposingCommitted;
    }

    public function getFumblesOpposingRecovered(): string
    {
        return $this->fumblesOpposingRecovered;
    }

    public function setFumblesOpposingRecovered(string $fumblesOpposingRecovered): void
    {
        $this->fumblesOpposingRecovered = $fumblesOpposingRecovered;
    }

    public function getFumblesOpposingLost(): string
    {
        return $this->fumblesOpposingLost;
    }

    public function setFumblesOpposingLost(string $fumblesOpposingLost): void
    {
        $this->fumblesOpposingLost = $fumblesOpposingLost;
    }

    public function getFumblesOpposingYardsGained(): string
    {
        return $this->fumblesOpposingYardsGained;
    }

    public function setFumblesOpposingYardsGained(string $fumblesOpposingYardsGained): void
    {
        $this->fumblesOpposingYardsGained = $fumblesOpposingYardsGained;
    }

    public function toDto(): AmericanFootballFumblesStatsDto
    {
        $dto = new AmericanFootballFumblesStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->fumblesCommitted = $this->fumblesCommitted ?? "";
        $dto->fumblesForced = $this->fumblesForced ?? "";
        $dto->fumblesRecovered = $this->fumblesRecovered ?? "";
        $dto->fumblesLost = $this->fumblesLost ?? "";
        $dto->fumblesYardsGained = $this->fumblesYardsGained ?? "";
        $dto->fumblesOwnCommitted = $this->fumblesOwnCommitted ?? "";
        $dto->fumblesOwnRecovered = $this->fumblesOwnRecovered ?? "";
        $dto->fumblesOwnLost = $this->fumblesOwnLost ?? "";
        $dto->fumblesOwnYardsGained = $this->fumblesOwnYardsGained ?? "";
        $dto->fumblesOpposingCommitted = $this->fumblesOpposingCommitted ?? "";
        $dto->fumblesOpposingRecovered = $this->fumblesOpposingRecovered ?? "";
        $dto->fumblesOpposingLost = $this->fumblesOpposingLost ?? "";
        $dto->fumblesOpposingYardsGained = $this->fumblesOpposingYardsGained ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "fumbles_committed" => $this->fumblesCommitted,
            "fumbles_forced" => $this->fumblesForced,
            "fumbles_recovered" => $this->fumblesRecovered,
            "fumbles_lost" => $this->fumblesLost,
            "fumbles_yards_gained" => $this->fumblesYardsGained,
            "fumbles_own_committed" => $this->fumblesOwnCommitted,
            "fumbles_own_recovered" => $this->fumblesOwnRecovered,
            "fumbles_own_lost" => $this->fumblesOwnLost,
            "fumbles_own_yards_gained" => $this->fumblesOwnYardsGained,
            "fumbles_opposing_committed" => $this->fumblesOpposingCommitted,
            "fumbles_opposing_recovered" => $this->fumblesOpposingRecovered,
            "fumbles_opposing_lost" => $this->fumblesOpposingLost,
            "fumbles_opposing_yards_gained" => $this->fumblesOpposingYardsGained,
        ];
    }
}