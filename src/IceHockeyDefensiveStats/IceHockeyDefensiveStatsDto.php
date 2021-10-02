<?php

declare(strict_types=1);

namespace Sports\IceHockeyDefensiveStats;

class IceHockeyDefensiveStatsDto 
{
    public int $id;
    public string $shotsPowerPlayAllowed;
    public string $shotsPenaltyShotAllowed;
    public string $goalsPowerPlayAllowed;
    public string $goalsPenaltyShotAllowed;
    public string $goalsAgainstAverage;
    public string $saves;
    public string $savePercentage;
    public string $penaltyKillingAmount;
    public string $penaltyKillingPercentage;
    public string $shotsBlocked;
    public string $takeaways;
    public string $shutouts;
    public string $minutesPenaltyKilling;
    public string $hits;
    public string $goalsEmptyNetAllowed;
    public string $goalsShortHandedAllowed;
    public string $goalsShootoutAllowed;
    public string $shotsShootoutAllowed;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->shotsPowerPlayAllowed = $row["shots_power_play_allowed"] ?? "";
        $this->shotsPenaltyShotAllowed = $row["shots_penalty_shot_allowed"] ?? "";
        $this->goalsPowerPlayAllowed = $row["goals_power_play_allowed"] ?? "";
        $this->goalsPenaltyShotAllowed = $row["goals_penalty_shot_allowed"] ?? "";
        $this->goalsAgainstAverage = $row["goals_against_average"] ?? "";
        $this->saves = $row["saves"] ?? "";
        $this->savePercentage = $row["save_percentage"] ?? "";
        $this->penaltyKillingAmount = $row["penalty_killing_amount"] ?? "";
        $this->penaltyKillingPercentage = $row["penalty_killing_percentage"] ?? "";
        $this->shotsBlocked = $row["shots_blocked"] ?? "";
        $this->takeaways = $row["takeaways"] ?? "";
        $this->shutouts = $row["shutouts"] ?? "";
        $this->minutesPenaltyKilling = $row["minutes_penalty_killing"] ?? "";
        $this->hits = $row["hits"] ?? "";
        $this->goalsEmptyNetAllowed = $row["goals_empty_net_allowed"] ?? "";
        $this->goalsShortHandedAllowed = $row["goals_short_handed_allowed"] ?? "";
        $this->goalsShootoutAllowed = $row["goals_shootout_allowed"] ?? "";
        $this->shotsShootoutAllowed = $row["shots_shootout_allowed"] ?? "";
    }
}