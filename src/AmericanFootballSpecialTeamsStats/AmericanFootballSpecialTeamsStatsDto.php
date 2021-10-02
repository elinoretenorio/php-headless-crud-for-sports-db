<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSpecialTeamsStats;

class AmericanFootballSpecialTeamsStatsDto 
{
    public int $id;
    public string $returnsPuntTotal;
    public string $returnsPuntYards;
    public string $returnsPuntAverage;
    public string $returnsPuntLongest;
    public string $returnsPuntTouchdown;
    public string $returnsKickoffTotal;
    public string $returnsKickoffYards;
    public string $returnsKickoffAverage;
    public string $returnsKickoffLongest;
    public string $returnsKickoffTouchdown;
    public string $returnsTotal;
    public string $returnsYards;
    public string $puntsTotal;
    public string $puntsYardsGross;
    public string $puntsYardsNet;
    public string $puntsLongest;
    public string $puntsInside20;
    public string $puntsInside20Percentage;
    public string $puntsAverage;
    public string $puntsBlocked;
    public string $touchbacksTotal;
    public string $touchbacksTotalPercentage;
    public string $touchbacksKickoffs;
    public string $touchbacksKickoffsPercentage;
    public string $touchbacksPunts;
    public string $touchbacksPuntsPercentage;
    public string $touchbacksInterceptions;
    public string $touchbacksInterceptionsPercentage;
    public string $fairCatches;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->returnsPuntTotal = $row["returns_punt_total"] ?? "";
        $this->returnsPuntYards = $row["returns_punt_yards"] ?? "";
        $this->returnsPuntAverage = $row["returns_punt_average"] ?? "";
        $this->returnsPuntLongest = $row["returns_punt_longest"] ?? "";
        $this->returnsPuntTouchdown = $row["returns_punt_touchdown"] ?? "";
        $this->returnsKickoffTotal = $row["returns_kickoff_total"] ?? "";
        $this->returnsKickoffYards = $row["returns_kickoff_yards"] ?? "";
        $this->returnsKickoffAverage = $row["returns_kickoff_average"] ?? "";
        $this->returnsKickoffLongest = $row["returns_kickoff_longest"] ?? "";
        $this->returnsKickoffTouchdown = $row["returns_kickoff_touchdown"] ?? "";
        $this->returnsTotal = $row["returns_total"] ?? "";
        $this->returnsYards = $row["returns_yards"] ?? "";
        $this->puntsTotal = $row["punts_total"] ?? "";
        $this->puntsYardsGross = $row["punts_yards_gross"] ?? "";
        $this->puntsYardsNet = $row["punts_yards_net"] ?? "";
        $this->puntsLongest = $row["punts_longest"] ?? "";
        $this->puntsInside20 = $row["punts_inside_20"] ?? "";
        $this->puntsInside20Percentage = $row["punts_inside_20_percentage"] ?? "";
        $this->puntsAverage = $row["punts_average"] ?? "";
        $this->puntsBlocked = $row["punts_blocked"] ?? "";
        $this->touchbacksTotal = $row["touchbacks_total"] ?? "";
        $this->touchbacksTotalPercentage = $row["touchbacks_total_percentage"] ?? "";
        $this->touchbacksKickoffs = $row["touchbacks_kickoffs"] ?? "";
        $this->touchbacksKickoffsPercentage = $row["touchbacks_kickoffs_percentage"] ?? "";
        $this->touchbacksPunts = $row["touchbacks_punts"] ?? "";
        $this->touchbacksPuntsPercentage = $row["touchbacks_punts_percentage"] ?? "";
        $this->touchbacksInterceptions = $row["touchbacks_interceptions"] ?? "";
        $this->touchbacksInterceptionsPercentage = $row["touchbacks_interceptions_percentage"] ?? "";
        $this->fairCatches = $row["fair_catches"] ?? "";
    }
}