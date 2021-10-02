<?php

declare(strict_types=1);

namespace Sports\SoccerFoulStats;

use JsonSerializable;

class SoccerFoulStatsModel implements JsonSerializable
{
    private int $id;
    private string $foulsSuffered;
    private string $foulsCommited;
    private string $cautionsTotal;
    private string $cautionsPending;
    private string $cautionPointsTotal;
    private string $cautionPointsPending;
    private string $ejectionsTotal;

    public function __construct(SoccerFoulStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->foulsSuffered = $dto->foulsSuffered;
        $this->foulsCommited = $dto->foulsCommited;
        $this->cautionsTotal = $dto->cautionsTotal;
        $this->cautionsPending = $dto->cautionsPending;
        $this->cautionPointsTotal = $dto->cautionPointsTotal;
        $this->cautionPointsPending = $dto->cautionPointsPending;
        $this->ejectionsTotal = $dto->ejectionsTotal;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFoulsSuffered(): string
    {
        return $this->foulsSuffered;
    }

    public function setFoulsSuffered(string $foulsSuffered): void
    {
        $this->foulsSuffered = $foulsSuffered;
    }

    public function getFoulsCommited(): string
    {
        return $this->foulsCommited;
    }

    public function setFoulsCommited(string $foulsCommited): void
    {
        $this->foulsCommited = $foulsCommited;
    }

    public function getCautionsTotal(): string
    {
        return $this->cautionsTotal;
    }

    public function setCautionsTotal(string $cautionsTotal): void
    {
        $this->cautionsTotal = $cautionsTotal;
    }

    public function getCautionsPending(): string
    {
        return $this->cautionsPending;
    }

    public function setCautionsPending(string $cautionsPending): void
    {
        $this->cautionsPending = $cautionsPending;
    }

    public function getCautionPointsTotal(): string
    {
        return $this->cautionPointsTotal;
    }

    public function setCautionPointsTotal(string $cautionPointsTotal): void
    {
        $this->cautionPointsTotal = $cautionPointsTotal;
    }

    public function getCautionPointsPending(): string
    {
        return $this->cautionPointsPending;
    }

    public function setCautionPointsPending(string $cautionPointsPending): void
    {
        $this->cautionPointsPending = $cautionPointsPending;
    }

    public function getEjectionsTotal(): string
    {
        return $this->ejectionsTotal;
    }

    public function setEjectionsTotal(string $ejectionsTotal): void
    {
        $this->ejectionsTotal = $ejectionsTotal;
    }

    public function toDto(): SoccerFoulStatsDto
    {
        $dto = new SoccerFoulStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->foulsSuffered = $this->foulsSuffered ?? "";
        $dto->foulsCommited = $this->foulsCommited ?? "";
        $dto->cautionsTotal = $this->cautionsTotal ?? "";
        $dto->cautionsPending = $this->cautionsPending ?? "";
        $dto->cautionPointsTotal = $this->cautionPointsTotal ?? "";
        $dto->cautionPointsPending = $this->cautionPointsPending ?? "";
        $dto->ejectionsTotal = $this->ejectionsTotal ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "fouls_suffered" => $this->foulsSuffered,
            "fouls_commited" => $this->foulsCommited,
            "cautions_total" => $this->cautionsTotal,
            "cautions_pending" => $this->cautionsPending,
            "caution_points_total" => $this->cautionPointsTotal,
            "caution_points_pending" => $this->cautionPointsPending,
            "ejections_total" => $this->ejectionsTotal,
        ];
    }
}