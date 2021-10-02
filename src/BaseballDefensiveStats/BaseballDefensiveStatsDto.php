<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveStats;

class BaseballDefensiveStatsDto 
{
    public int $id;
    public int $doublePlays;
    public int $triplePlays;
    public int $putouts;
    public int $assists;
    public int $errors;
    public float $fieldingPercentage;
    public float $defensiveAverage;
    public int $errorsPassedBall;
    public int $errorsCatchersInterference;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->doublePlays = (int) ($row["double_plays"] ?? 0);
        $this->triplePlays = (int) ($row["triple_plays"] ?? 0);
        $this->putouts = (int) ($row["putouts"] ?? 0);
        $this->assists = (int) ($row["assists"] ?? 0);
        $this->errors = (int) ($row["errors"] ?? 0);
        $this->fieldingPercentage = (float) ($row["fielding_percentage"] ?? 0);
        $this->defensiveAverage = (float) ($row["defensive_average"] ?? 0);
        $this->errorsPassedBall = (int) ($row["errors_passed_ball"] ?? 0);
        $this->errorsCatchersInterference = (int) ($row["errors_catchers_interference"] ?? 0);
    }
}