<?php

declare(strict_types=1);

namespace Sports\AmericanFootballScoringStats;

class AmericanFootballScoringStatsDto 
{
    public int $id;
    public string $touchdownsTotal;
    public string $touchdownsPassing;
    public string $touchdownsRushing;
    public string $touchdownsSpecialTeams;
    public string $touchdownsDefensive;
    public string $extraPointsAttempts;
    public string $extraPointsMade;
    public string $extraPointsMissed;
    public string $extraPointsBlocked;
    public string $fieldGoalAttempts;
    public string $fieldGoalsMade;
    public string $fieldGoalsMissed;
    public string $fieldGoalsBlocked;
    public string $safetiesAgainst;
    public string $twoPointConversionsAttempts;
    public string $twoPointConversionsMade;
    public string $touchbacksTotal;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->touchdownsTotal = $row["touchdowns_total"] ?? "";
        $this->touchdownsPassing = $row["touchdowns_passing"] ?? "";
        $this->touchdownsRushing = $row["touchdowns_rushing"] ?? "";
        $this->touchdownsSpecialTeams = $row["touchdowns_special_teams"] ?? "";
        $this->touchdownsDefensive = $row["touchdowns_defensive"] ?? "";
        $this->extraPointsAttempts = $row["extra_points_attempts"] ?? "";
        $this->extraPointsMade = $row["extra_points_made"] ?? "";
        $this->extraPointsMissed = $row["extra_points_missed"] ?? "";
        $this->extraPointsBlocked = $row["extra_points_blocked"] ?? "";
        $this->fieldGoalAttempts = $row["field_goal_attempts"] ?? "";
        $this->fieldGoalsMade = $row["field_goals_made"] ?? "";
        $this->fieldGoalsMissed = $row["field_goals_missed"] ?? "";
        $this->fieldGoalsBlocked = $row["field_goals_blocked"] ?? "";
        $this->safetiesAgainst = $row["safeties_against"] ?? "";
        $this->twoPointConversionsAttempts = $row["two_point_conversions_attempts"] ?? "";
        $this->twoPointConversionsMade = $row["two_point_conversions_made"] ?? "";
        $this->touchbacksTotal = $row["touchbacks_total"] ?? "";
    }
}