<?php

declare(strict_types=1);

namespace Sports\SoccerFoulStats;

class SoccerFoulStatsDto 
{
    public int $id;
    public string $foulsSuffered;
    public string $foulsCommited;
    public string $cautionsTotal;
    public string $cautionsPending;
    public string $cautionPointsTotal;
    public string $cautionPointsPending;
    public string $ejectionsTotal;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->foulsSuffered = $row["fouls_suffered"] ?? "";
        $this->foulsCommited = $row["fouls_commited"] ?? "";
        $this->cautionsTotal = $row["cautions_total"] ?? "";
        $this->cautionsPending = $row["cautions_pending"] ?? "";
        $this->cautionPointsTotal = $row["caution_points_total"] ?? "";
        $this->cautionPointsPending = $row["caution_points_pending"] ?? "";
        $this->ejectionsTotal = $row["ejections_total"] ?? "";
    }
}