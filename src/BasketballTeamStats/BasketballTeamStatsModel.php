<?php

declare(strict_types=1);

namespace Sports\BasketballTeamStats;

use JsonSerializable;

class BasketballTeamStatsModel implements JsonSerializable
{
    private int $id;
    private string $timeoutsLeft;
    private string $largestLead;
    private string $foulsTotal;
    private string $turnoverMargin;

    public function __construct(BasketballTeamStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->timeoutsLeft = $dto->timeoutsLeft;
        $this->largestLead = $dto->largestLead;
        $this->foulsTotal = $dto->foulsTotal;
        $this->turnoverMargin = $dto->turnoverMargin;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTimeoutsLeft(): string
    {
        return $this->timeoutsLeft;
    }

    public function setTimeoutsLeft(string $timeoutsLeft): void
    {
        $this->timeoutsLeft = $timeoutsLeft;
    }

    public function getLargestLead(): string
    {
        return $this->largestLead;
    }

    public function setLargestLead(string $largestLead): void
    {
        $this->largestLead = $largestLead;
    }

    public function getFoulsTotal(): string
    {
        return $this->foulsTotal;
    }

    public function setFoulsTotal(string $foulsTotal): void
    {
        $this->foulsTotal = $foulsTotal;
    }

    public function getTurnoverMargin(): string
    {
        return $this->turnoverMargin;
    }

    public function setTurnoverMargin(string $turnoverMargin): void
    {
        $this->turnoverMargin = $turnoverMargin;
    }

    public function toDto(): BasketballTeamStatsDto
    {
        $dto = new BasketballTeamStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->timeoutsLeft = $this->timeoutsLeft ?? "";
        $dto->largestLead = $this->largestLead ?? "";
        $dto->foulsTotal = $this->foulsTotal ?? "";
        $dto->turnoverMargin = $this->turnoverMargin ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "timeouts_left" => $this->timeoutsLeft,
            "largest_lead" => $this->largestLead,
            "fouls_total" => $this->foulsTotal,
            "turnover_margin" => $this->turnoverMargin,
        ];
    }
}