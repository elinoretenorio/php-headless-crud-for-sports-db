<?php

declare(strict_types=1);

namespace Sports\MotorRacingQualifyingStats;

class MotorRacingQualifyingStatsDto 
{
    public int $id;
    public string $grid;
    public string $polePosition;
    public string $poleWins;
    public string $qualifyingSpeed;
    public string $qualifyingSpeedUnits;
    public string $qualifyingTime;
    public string $qualifyingPosition;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->grid = $row["grid"] ?? "";
        $this->polePosition = $row["pole_position"] ?? "";
        $this->poleWins = $row["pole_wins"] ?? "";
        $this->qualifyingSpeed = $row["qualifying_speed"] ?? "";
        $this->qualifyingSpeedUnits = $row["qualifying_speed_units"] ?? "";
        $this->qualifyingTime = $row["qualifying_time"] ?? "";
        $this->qualifyingPosition = $row["qualifying_position"] ?? "";
    }
}