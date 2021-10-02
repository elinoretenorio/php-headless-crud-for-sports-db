<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSacksAgainstStats;

class AmericanFootballSacksAgainstStatsDto 
{
    public int $id;
    public string $sacksAgainstYards;
    public string $sacksAgainstTotal;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->sacksAgainstYards = $row["sacks_against_yards"] ?? "";
        $this->sacksAgainstTotal = $row["sacks_against_total"] ?? "";
    }
}