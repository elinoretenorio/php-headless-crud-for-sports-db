<?php

declare(strict_types=1);

namespace Sports\BasketballDefensiveStats;

class BasketballDefensiveStatsDto 
{
    public int $id;
    public string $stealsTotal;
    public string $stealsPerGame;
    public string $blocksTotal;
    public string $blocksPerGame;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->stealsTotal = $row["steals_total"] ?? "";
        $this->stealsPerGame = $row["steals_per_game"] ?? "";
        $this->blocksTotal = $row["blocks_total"] ?? "";
        $this->blocksPerGame = $row["blocks_per_game"] ?? "";
    }
}