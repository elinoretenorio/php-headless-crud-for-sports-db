<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSacksAgainstStats;

use JsonSerializable;

class AmericanFootballSacksAgainstStatsModel implements JsonSerializable
{
    private int $id;
    private string $sacksAgainstYards;
    private string $sacksAgainstTotal;

    public function __construct(AmericanFootballSacksAgainstStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->sacksAgainstYards = $dto->sacksAgainstYards;
        $this->sacksAgainstTotal = $dto->sacksAgainstTotal;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSacksAgainstYards(): string
    {
        return $this->sacksAgainstYards;
    }

    public function setSacksAgainstYards(string $sacksAgainstYards): void
    {
        $this->sacksAgainstYards = $sacksAgainstYards;
    }

    public function getSacksAgainstTotal(): string
    {
        return $this->sacksAgainstTotal;
    }

    public function setSacksAgainstTotal(string $sacksAgainstTotal): void
    {
        $this->sacksAgainstTotal = $sacksAgainstTotal;
    }

    public function toDto(): AmericanFootballSacksAgainstStatsDto
    {
        $dto = new AmericanFootballSacksAgainstStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->sacksAgainstYards = $this->sacksAgainstYards ?? "";
        $dto->sacksAgainstTotal = $this->sacksAgainstTotal ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "sacks_against_yards" => $this->sacksAgainstYards,
            "sacks_against_total" => $this->sacksAgainstTotal,
        ];
    }
}