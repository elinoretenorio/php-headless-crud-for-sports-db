<?php

declare(strict_types=1);

namespace Sports\BaseballOffensiveStats;

class BaseballOffensiveStatsDto 
{
    public int $id;
    public float $average;
    public int $runsScored;
    public int $atBats;
    public int $hits;
    public int $rbi;
    public int $totalBases;
    public float $sluggingPercentage;
    public int $basesOnBalls;
    public int $strikeouts;
    public int $leftOnBase;
    public int $leftInScoringPosition;
    public int $singles;
    public int $doubles;
    public int $triples;
    public int $homeRuns;
    public int $grandSlams;
    public float $atBatsPerRbi;
    public float $plateAppearancesPerRbi;
    public float $atBatsPerHomeRun;
    public float $plateAppearancesPerHomeRun;
    public int $sacFlies;
    public int $sacBunts;
    public int $groundedIntoDoublePlay;
    public int $movedUp;
    public float $onBasePercentage;
    public int $stolenBases;
    public int $stolenBasesCaught;
    public float $stolenBasesAverage;
    public int $hitByPitch;
    public int $defensiveInterferanceReaches;
    public float $onBasePlusSlugging;
    public int $plateAppearances;
    public int $hitsExtraBase;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->average = (float) ($row["average"] ?? 0);
        $this->runsScored = (int) ($row["runs_scored"] ?? 0);
        $this->atBats = (int) ($row["at_bats"] ?? 0);
        $this->hits = (int) ($row["hits"] ?? 0);
        $this->rbi = (int) ($row["rbi"] ?? 0);
        $this->totalBases = (int) ($row["total_bases"] ?? 0);
        $this->sluggingPercentage = (float) ($row["slugging_percentage"] ?? 0);
        $this->basesOnBalls = (int) ($row["bases_on_balls"] ?? 0);
        $this->strikeouts = (int) ($row["strikeouts"] ?? 0);
        $this->leftOnBase = (int) ($row["left_on_base"] ?? 0);
        $this->leftInScoringPosition = (int) ($row["left_in_scoring_position"] ?? 0);
        $this->singles = (int) ($row["singles"] ?? 0);
        $this->doubles = (int) ($row["doubles"] ?? 0);
        $this->triples = (int) ($row["triples"] ?? 0);
        $this->homeRuns = (int) ($row["home_runs"] ?? 0);
        $this->grandSlams = (int) ($row["grand_slams"] ?? 0);
        $this->atBatsPerRbi = (float) ($row["at_bats_per_rbi"] ?? 0);
        $this->plateAppearancesPerRbi = (float) ($row["plate_appearances_per_rbi"] ?? 0);
        $this->atBatsPerHomeRun = (float) ($row["at_bats_per_home_run"] ?? 0);
        $this->plateAppearancesPerHomeRun = (float) ($row["plate_appearances_per_home_run"] ?? 0);
        $this->sacFlies = (int) ($row["sac_flies"] ?? 0);
        $this->sacBunts = (int) ($row["sac_bunts"] ?? 0);
        $this->groundedIntoDoublePlay = (int) ($row["grounded_into_double_play"] ?? 0);
        $this->movedUp = (int) ($row["moved_up"] ?? 0);
        $this->onBasePercentage = (float) ($row["on_base_percentage"] ?? 0);
        $this->stolenBases = (int) ($row["stolen_bases"] ?? 0);
        $this->stolenBasesCaught = (int) ($row["stolen_bases_caught"] ?? 0);
        $this->stolenBasesAverage = (float) ($row["stolen_bases_average"] ?? 0);
        $this->hitByPitch = (int) ($row["hit_by_pitch"] ?? 0);
        $this->defensiveInterferanceReaches = (int) ($row["defensive_interferance_reaches"] ?? 0);
        $this->onBasePlusSlugging = (float) ($row["on_base_plus_slugging"] ?? 0);
        $this->plateAppearances = (int) ($row["plate_appearances"] ?? 0);
        $this->hitsExtraBase = (int) ($row["hits_extra_base"] ?? 0);
    }
}