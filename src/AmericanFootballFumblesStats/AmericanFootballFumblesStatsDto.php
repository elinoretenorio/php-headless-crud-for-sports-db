<?php

declare(strict_types=1);

namespace Sports\AmericanFootballFumblesStats;

class AmericanFootballFumblesStatsDto 
{
    public int $id;
    public string $fumblesCommitted;
    public string $fumblesForced;
    public string $fumblesRecovered;
    public string $fumblesLost;
    public string $fumblesYardsGained;
    public string $fumblesOwnCommitted;
    public string $fumblesOwnRecovered;
    public string $fumblesOwnLost;
    public string $fumblesOwnYardsGained;
    public string $fumblesOpposingCommitted;
    public string $fumblesOpposingRecovered;
    public string $fumblesOpposingLost;
    public string $fumblesOpposingYardsGained;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->fumblesCommitted = $row["fumbles_committed"] ?? "";
        $this->fumblesForced = $row["fumbles_forced"] ?? "";
        $this->fumblesRecovered = $row["fumbles_recovered"] ?? "";
        $this->fumblesLost = $row["fumbles_lost"] ?? "";
        $this->fumblesYardsGained = $row["fumbles_yards_gained"] ?? "";
        $this->fumblesOwnCommitted = $row["fumbles_own_committed"] ?? "";
        $this->fumblesOwnRecovered = $row["fumbles_own_recovered"] ?? "";
        $this->fumblesOwnLost = $row["fumbles_own_lost"] ?? "";
        $this->fumblesOwnYardsGained = $row["fumbles_own_yards_gained"] ?? "";
        $this->fumblesOpposingCommitted = $row["fumbles_opposing_committed"] ?? "";
        $this->fumblesOpposingRecovered = $row["fumbles_opposing_recovered"] ?? "";
        $this->fumblesOpposingLost = $row["fumbles_opposing_lost"] ?? "";
        $this->fumblesOpposingYardsGained = $row["fumbles_opposing_yards_gained"] ?? "";
    }
}