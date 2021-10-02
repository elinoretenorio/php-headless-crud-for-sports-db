<?php

declare(strict_types=1);

namespace Sports\BasketballTeamStats;

class BasketballTeamStatsDto 
{
    public int $id;
    public string $timeoutsLeft;
    public string $largestLead;
    public string $foulsTotal;
    public string $turnoverMargin;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->timeoutsLeft = $row["timeouts_left"] ?? "";
        $this->largestLead = $row["largest_lead"] ?? "";
        $this->foulsTotal = $row["fouls_total"] ?? "";
        $this->turnoverMargin = $row["turnover_margin"] ?? "";
    }
}