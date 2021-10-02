<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDownProgressStats;

class AmericanFootballDownProgressStatsDto 
{
    public int $id;
    public string $firstDownsTotal;
    public string $firstDownsPass;
    public string $firstDownsRun;
    public string $firstDownsPenalty;
    public string $conversionsThirdDown;
    public string $conversionsThirdDownAttempts;
    public string $conversionsThirdDownPercentage;
    public string $conversionsFourthDown;
    public string $conversionsFourthDownAttempts;
    public string $conversionsFourthDownPercentage;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->firstDownsTotal = $row["first_downs_total"] ?? "";
        $this->firstDownsPass = $row["first_downs_pass"] ?? "";
        $this->firstDownsRun = $row["first_downs_run"] ?? "";
        $this->firstDownsPenalty = $row["first_downs_penalty"] ?? "";
        $this->conversionsThirdDown = $row["conversions_third_down"] ?? "";
        $this->conversionsThirdDownAttempts = $row["conversions_third_down_attempts"] ?? "";
        $this->conversionsThirdDownPercentage = $row["conversions_third_down_percentage"] ?? "";
        $this->conversionsFourthDown = $row["conversions_fourth_down"] ?? "";
        $this->conversionsFourthDownAttempts = $row["conversions_fourth_down_attempts"] ?? "";
        $this->conversionsFourthDownPercentage = $row["conversions_fourth_down_percentage"] ?? "";
    }
}