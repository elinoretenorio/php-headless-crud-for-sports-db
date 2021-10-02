<?php

declare(strict_types=1);

namespace Sports\IceHockeyPlayerStats;

class IceHockeyPlayerStatsDto 
{
    public int $id;
    public string $plusMinus;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->plusMinus = $row["plus_minus"] ?? "";
    }
}