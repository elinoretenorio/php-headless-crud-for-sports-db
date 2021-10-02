<?php

declare(strict_types=1);

namespace Sports\BasketballReboundingStats;

class BasketballReboundingStatsDto 
{
    public int $id;
    public string $reboundsTotal;
    public string $reboundsPerGame;
    public string $reboundsDefensive;
    public string $reboundsOffensive;
    public string $teamReboundsTotal;
    public string $teamReboundsPerGame;
    public string $teamReboundsDefensive;
    public string $teamReboundsOffensive;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->reboundsTotal = $row["rebounds_total"] ?? "";
        $this->reboundsPerGame = $row["rebounds_per_game"] ?? "";
        $this->reboundsDefensive = $row["rebounds_defensive"] ?? "";
        $this->reboundsOffensive = $row["rebounds_offensive"] ?? "";
        $this->teamReboundsTotal = $row["team_rebounds_total"] ?? "";
        $this->teamReboundsPerGame = $row["team_rebounds_per_game"] ?? "";
        $this->teamReboundsDefensive = $row["team_rebounds_defensive"] ?? "";
        $this->teamReboundsOffensive = $row["team_rebounds_offensive"] ?? "";
    }
}