<?php

declare(strict_types=1);

namespace Sports\IceHockeyPlayerStats;

use JsonSerializable;

class IceHockeyPlayerStatsModel implements JsonSerializable
{
    private int $id;
    private string $plusMinus;

    public function __construct(IceHockeyPlayerStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->plusMinus = $dto->plusMinus;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPlusMinus(): string
    {
        return $this->plusMinus;
    }

    public function setPlusMinus(string $plusMinus): void
    {
        $this->plusMinus = $plusMinus;
    }

    public function toDto(): IceHockeyPlayerStatsDto
    {
        $dto = new IceHockeyPlayerStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->plusMinus = $this->plusMinus ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "plus_minus" => $this->plusMinus,
        ];
    }
}