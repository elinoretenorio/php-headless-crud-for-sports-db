<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDefensiveStats;

use JsonSerializable;

class AmericanFootballDefensiveStatsModel implements JsonSerializable
{
    private int $id;
    private string $tacklesTotal;
    private string $tacklesSolo;
    private string $tacklesAssists;
    private string $interceptionsTotal;
    private string $interceptionsYards;
    private string $interceptionsAverage;
    private string $interceptionsLongest;
    private string $interceptionsTouchdown;
    private string $quarterbackHurries;
    private string $sacksTotal;
    private string $sacksYards;
    private string $passesDefensed;

    public function __construct(AmericanFootballDefensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->tacklesTotal = $dto->tacklesTotal;
        $this->tacklesSolo = $dto->tacklesSolo;
        $this->tacklesAssists = $dto->tacklesAssists;
        $this->interceptionsTotal = $dto->interceptionsTotal;
        $this->interceptionsYards = $dto->interceptionsYards;
        $this->interceptionsAverage = $dto->interceptionsAverage;
        $this->interceptionsLongest = $dto->interceptionsLongest;
        $this->interceptionsTouchdown = $dto->interceptionsTouchdown;
        $this->quarterbackHurries = $dto->quarterbackHurries;
        $this->sacksTotal = $dto->sacksTotal;
        $this->sacksYards = $dto->sacksYards;
        $this->passesDefensed = $dto->passesDefensed;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTacklesTotal(): string
    {
        return $this->tacklesTotal;
    }

    public function setTacklesTotal(string $tacklesTotal): void
    {
        $this->tacklesTotal = $tacklesTotal;
    }

    public function getTacklesSolo(): string
    {
        return $this->tacklesSolo;
    }

    public function setTacklesSolo(string $tacklesSolo): void
    {
        $this->tacklesSolo = $tacklesSolo;
    }

    public function getTacklesAssists(): string
    {
        return $this->tacklesAssists;
    }

    public function setTacklesAssists(string $tacklesAssists): void
    {
        $this->tacklesAssists = $tacklesAssists;
    }

    public function getInterceptionsTotal(): string
    {
        return $this->interceptionsTotal;
    }

    public function setInterceptionsTotal(string $interceptionsTotal): void
    {
        $this->interceptionsTotal = $interceptionsTotal;
    }

    public function getInterceptionsYards(): string
    {
        return $this->interceptionsYards;
    }

    public function setInterceptionsYards(string $interceptionsYards): void
    {
        $this->interceptionsYards = $interceptionsYards;
    }

    public function getInterceptionsAverage(): string
    {
        return $this->interceptionsAverage;
    }

    public function setInterceptionsAverage(string $interceptionsAverage): void
    {
        $this->interceptionsAverage = $interceptionsAverage;
    }

    public function getInterceptionsLongest(): string
    {
        return $this->interceptionsLongest;
    }

    public function setInterceptionsLongest(string $interceptionsLongest): void
    {
        $this->interceptionsLongest = $interceptionsLongest;
    }

    public function getInterceptionsTouchdown(): string
    {
        return $this->interceptionsTouchdown;
    }

    public function setInterceptionsTouchdown(string $interceptionsTouchdown): void
    {
        $this->interceptionsTouchdown = $interceptionsTouchdown;
    }

    public function getQuarterbackHurries(): string
    {
        return $this->quarterbackHurries;
    }

    public function setQuarterbackHurries(string $quarterbackHurries): void
    {
        $this->quarterbackHurries = $quarterbackHurries;
    }

    public function getSacksTotal(): string
    {
        return $this->sacksTotal;
    }

    public function setSacksTotal(string $sacksTotal): void
    {
        $this->sacksTotal = $sacksTotal;
    }

    public function getSacksYards(): string
    {
        return $this->sacksYards;
    }

    public function setSacksYards(string $sacksYards): void
    {
        $this->sacksYards = $sacksYards;
    }

    public function getPassesDefensed(): string
    {
        return $this->passesDefensed;
    }

    public function setPassesDefensed(string $passesDefensed): void
    {
        $this->passesDefensed = $passesDefensed;
    }

    public function toDto(): AmericanFootballDefensiveStatsDto
    {
        $dto = new AmericanFootballDefensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->tacklesTotal = $this->tacklesTotal ?? "";
        $dto->tacklesSolo = $this->tacklesSolo ?? "";
        $dto->tacklesAssists = $this->tacklesAssists ?? "";
        $dto->interceptionsTotal = $this->interceptionsTotal ?? "";
        $dto->interceptionsYards = $this->interceptionsYards ?? "";
        $dto->interceptionsAverage = $this->interceptionsAverage ?? "";
        $dto->interceptionsLongest = $this->interceptionsLongest ?? "";
        $dto->interceptionsTouchdown = $this->interceptionsTouchdown ?? "";
        $dto->quarterbackHurries = $this->quarterbackHurries ?? "";
        $dto->sacksTotal = $this->sacksTotal ?? "";
        $dto->sacksYards = $this->sacksYards ?? "";
        $dto->passesDefensed = $this->passesDefensed ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "tackles_total" => $this->tacklesTotal,
            "tackles_solo" => $this->tacklesSolo,
            "tackles_assists" => $this->tacklesAssists,
            "interceptions_total" => $this->interceptionsTotal,
            "interceptions_yards" => $this->interceptionsYards,
            "interceptions_average" => $this->interceptionsAverage,
            "interceptions_longest" => $this->interceptionsLongest,
            "interceptions_touchdown" => $this->interceptionsTouchdown,
            "quarterback_hurries" => $this->quarterbackHurries,
            "sacks_total" => $this->sacksTotal,
            "sacks_yards" => $this->sacksYards,
            "passes_defensed" => $this->passesDefensed,
        ];
    }
}