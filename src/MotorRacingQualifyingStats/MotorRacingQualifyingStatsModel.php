<?php

declare(strict_types=1);

namespace Sports\MotorRacingQualifyingStats;

use JsonSerializable;

class MotorRacingQualifyingStatsModel implements JsonSerializable
{
    private int $id;
    private string $grid;
    private string $polePosition;
    private string $poleWins;
    private string $qualifyingSpeed;
    private string $qualifyingSpeedUnits;
    private string $qualifyingTime;
    private string $qualifyingPosition;

    public function __construct(MotorRacingQualifyingStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->grid = $dto->grid;
        $this->polePosition = $dto->polePosition;
        $this->poleWins = $dto->poleWins;
        $this->qualifyingSpeed = $dto->qualifyingSpeed;
        $this->qualifyingSpeedUnits = $dto->qualifyingSpeedUnits;
        $this->qualifyingTime = $dto->qualifyingTime;
        $this->qualifyingPosition = $dto->qualifyingPosition;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getGrid(): string
    {
        return $this->grid;
    }

    public function setGrid(string $grid): void
    {
        $this->grid = $grid;
    }

    public function getPolePosition(): string
    {
        return $this->polePosition;
    }

    public function setPolePosition(string $polePosition): void
    {
        $this->polePosition = $polePosition;
    }

    public function getPoleWins(): string
    {
        return $this->poleWins;
    }

    public function setPoleWins(string $poleWins): void
    {
        $this->poleWins = $poleWins;
    }

    public function getQualifyingSpeed(): string
    {
        return $this->qualifyingSpeed;
    }

    public function setQualifyingSpeed(string $qualifyingSpeed): void
    {
        $this->qualifyingSpeed = $qualifyingSpeed;
    }

    public function getQualifyingSpeedUnits(): string
    {
        return $this->qualifyingSpeedUnits;
    }

    public function setQualifyingSpeedUnits(string $qualifyingSpeedUnits): void
    {
        $this->qualifyingSpeedUnits = $qualifyingSpeedUnits;
    }

    public function getQualifyingTime(): string
    {
        return $this->qualifyingTime;
    }

    public function setQualifyingTime(string $qualifyingTime): void
    {
        $this->qualifyingTime = $qualifyingTime;
    }

    public function getQualifyingPosition(): string
    {
        return $this->qualifyingPosition;
    }

    public function setQualifyingPosition(string $qualifyingPosition): void
    {
        $this->qualifyingPosition = $qualifyingPosition;
    }

    public function toDto(): MotorRacingQualifyingStatsDto
    {
        $dto = new MotorRacingQualifyingStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->grid = $this->grid ?? "";
        $dto->polePosition = $this->polePosition ?? "";
        $dto->poleWins = $this->poleWins ?? "";
        $dto->qualifyingSpeed = $this->qualifyingSpeed ?? "";
        $dto->qualifyingSpeedUnits = $this->qualifyingSpeedUnits ?? "";
        $dto->qualifyingTime = $this->qualifyingTime ?? "";
        $dto->qualifyingPosition = $this->qualifyingPosition ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "grid" => $this->grid,
            "pole_position" => $this->polePosition,
            "pole_wins" => $this->poleWins,
            "qualifying_speed" => $this->qualifyingSpeed,
            "qualifying_speed_units" => $this->qualifyingSpeedUnits,
            "qualifying_time" => $this->qualifyingTime,
            "qualifying_position" => $this->qualifyingPosition,
        ];
    }
}