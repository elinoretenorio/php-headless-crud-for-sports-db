<?php

declare(strict_types=1);

namespace Sports\BaseballOffensiveStats;

use JsonSerializable;

class BaseballOffensiveStatsModel implements JsonSerializable
{
    private int $id;
    private float $average;
    private int $runsScored;
    private int $atBats;
    private int $hits;
    private int $rbi;
    private int $totalBases;
    private float $sluggingPercentage;
    private int $basesOnBalls;
    private int $strikeouts;
    private int $leftOnBase;
    private int $leftInScoringPosition;
    private int $singles;
    private int $doubles;
    private int $triples;
    private int $homeRuns;
    private int $grandSlams;
    private float $atBatsPerRbi;
    private float $plateAppearancesPerRbi;
    private float $atBatsPerHomeRun;
    private float $plateAppearancesPerHomeRun;
    private int $sacFlies;
    private int $sacBunts;
    private int $groundedIntoDoublePlay;
    private int $movedUp;
    private float $onBasePercentage;
    private int $stolenBases;
    private int $stolenBasesCaught;
    private float $stolenBasesAverage;
    private int $hitByPitch;
    private int $defensiveInterferanceReaches;
    private float $onBasePlusSlugging;
    private int $plateAppearances;
    private int $hitsExtraBase;

    public function __construct(BaseballOffensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->average = $dto->average;
        $this->runsScored = $dto->runsScored;
        $this->atBats = $dto->atBats;
        $this->hits = $dto->hits;
        $this->rbi = $dto->rbi;
        $this->totalBases = $dto->totalBases;
        $this->sluggingPercentage = $dto->sluggingPercentage;
        $this->basesOnBalls = $dto->basesOnBalls;
        $this->strikeouts = $dto->strikeouts;
        $this->leftOnBase = $dto->leftOnBase;
        $this->leftInScoringPosition = $dto->leftInScoringPosition;
        $this->singles = $dto->singles;
        $this->doubles = $dto->doubles;
        $this->triples = $dto->triples;
        $this->homeRuns = $dto->homeRuns;
        $this->grandSlams = $dto->grandSlams;
        $this->atBatsPerRbi = $dto->atBatsPerRbi;
        $this->plateAppearancesPerRbi = $dto->plateAppearancesPerRbi;
        $this->atBatsPerHomeRun = $dto->atBatsPerHomeRun;
        $this->plateAppearancesPerHomeRun = $dto->plateAppearancesPerHomeRun;
        $this->sacFlies = $dto->sacFlies;
        $this->sacBunts = $dto->sacBunts;
        $this->groundedIntoDoublePlay = $dto->groundedIntoDoublePlay;
        $this->movedUp = $dto->movedUp;
        $this->onBasePercentage = $dto->onBasePercentage;
        $this->stolenBases = $dto->stolenBases;
        $this->stolenBasesCaught = $dto->stolenBasesCaught;
        $this->stolenBasesAverage = $dto->stolenBasesAverage;
        $this->hitByPitch = $dto->hitByPitch;
        $this->defensiveInterferanceReaches = $dto->defensiveInterferanceReaches;
        $this->onBasePlusSlugging = $dto->onBasePlusSlugging;
        $this->plateAppearances = $dto->plateAppearances;
        $this->hitsExtraBase = $dto->hitsExtraBase;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAverage(): float
    {
        return $this->average;
    }

    public function setAverage(float $average): void
    {
        $this->average = $average;
    }

    public function getRunsScored(): int
    {
        return $this->runsScored;
    }

    public function setRunsScored(int $runsScored): void
    {
        $this->runsScored = $runsScored;
    }

    public function getAtBats(): int
    {
        return $this->atBats;
    }

    public function setAtBats(int $atBats): void
    {
        $this->atBats = $atBats;
    }

    public function getHits(): int
    {
        return $this->hits;
    }

    public function setHits(int $hits): void
    {
        $this->hits = $hits;
    }

    public function getRbi(): int
    {
        return $this->rbi;
    }

    public function setRbi(int $rbi): void
    {
        $this->rbi = $rbi;
    }

    public function getTotalBases(): int
    {
        return $this->totalBases;
    }

    public function setTotalBases(int $totalBases): void
    {
        $this->totalBases = $totalBases;
    }

    public function getSluggingPercentage(): float
    {
        return $this->sluggingPercentage;
    }

    public function setSluggingPercentage(float $sluggingPercentage): void
    {
        $this->sluggingPercentage = $sluggingPercentage;
    }

    public function getBasesOnBalls(): int
    {
        return $this->basesOnBalls;
    }

    public function setBasesOnBalls(int $basesOnBalls): void
    {
        $this->basesOnBalls = $basesOnBalls;
    }

    public function getStrikeouts(): int
    {
        return $this->strikeouts;
    }

    public function setStrikeouts(int $strikeouts): void
    {
        $this->strikeouts = $strikeouts;
    }

    public function getLeftOnBase(): int
    {
        return $this->leftOnBase;
    }

    public function setLeftOnBase(int $leftOnBase): void
    {
        $this->leftOnBase = $leftOnBase;
    }

    public function getLeftInScoringPosition(): int
    {
        return $this->leftInScoringPosition;
    }

    public function setLeftInScoringPosition(int $leftInScoringPosition): void
    {
        $this->leftInScoringPosition = $leftInScoringPosition;
    }

    public function getSingles(): int
    {
        return $this->singles;
    }

    public function setSingles(int $singles): void
    {
        $this->singles = $singles;
    }

    public function getDoubles(): int
    {
        return $this->doubles;
    }

    public function setDoubles(int $doubles): void
    {
        $this->doubles = $doubles;
    }

    public function getTriples(): int
    {
        return $this->triples;
    }

    public function setTriples(int $triples): void
    {
        $this->triples = $triples;
    }

    public function getHomeRuns(): int
    {
        return $this->homeRuns;
    }

    public function setHomeRuns(int $homeRuns): void
    {
        $this->homeRuns = $homeRuns;
    }

    public function getGrandSlams(): int
    {
        return $this->grandSlams;
    }

    public function setGrandSlams(int $grandSlams): void
    {
        $this->grandSlams = $grandSlams;
    }

    public function getAtBatsPerRbi(): float
    {
        return $this->atBatsPerRbi;
    }

    public function setAtBatsPerRbi(float $atBatsPerRbi): void
    {
        $this->atBatsPerRbi = $atBatsPerRbi;
    }

    public function getPlateAppearancesPerRbi(): float
    {
        return $this->plateAppearancesPerRbi;
    }

    public function setPlateAppearancesPerRbi(float $plateAppearancesPerRbi): void
    {
        $this->plateAppearancesPerRbi = $plateAppearancesPerRbi;
    }

    public function getAtBatsPerHomeRun(): float
    {
        return $this->atBatsPerHomeRun;
    }

    public function setAtBatsPerHomeRun(float $atBatsPerHomeRun): void
    {
        $this->atBatsPerHomeRun = $atBatsPerHomeRun;
    }

    public function getPlateAppearancesPerHomeRun(): float
    {
        return $this->plateAppearancesPerHomeRun;
    }

    public function setPlateAppearancesPerHomeRun(float $plateAppearancesPerHomeRun): void
    {
        $this->plateAppearancesPerHomeRun = $plateAppearancesPerHomeRun;
    }

    public function getSacFlies(): int
    {
        return $this->sacFlies;
    }

    public function setSacFlies(int $sacFlies): void
    {
        $this->sacFlies = $sacFlies;
    }

    public function getSacBunts(): int
    {
        return $this->sacBunts;
    }

    public function setSacBunts(int $sacBunts): void
    {
        $this->sacBunts = $sacBunts;
    }

    public function getGroundedIntoDoublePlay(): int
    {
        return $this->groundedIntoDoublePlay;
    }

    public function setGroundedIntoDoublePlay(int $groundedIntoDoublePlay): void
    {
        $this->groundedIntoDoublePlay = $groundedIntoDoublePlay;
    }

    public function getMovedUp(): int
    {
        return $this->movedUp;
    }

    public function setMovedUp(int $movedUp): void
    {
        $this->movedUp = $movedUp;
    }

    public function getOnBasePercentage(): float
    {
        return $this->onBasePercentage;
    }

    public function setOnBasePercentage(float $onBasePercentage): void
    {
        $this->onBasePercentage = $onBasePercentage;
    }

    public function getStolenBases(): int
    {
        return $this->stolenBases;
    }

    public function setStolenBases(int $stolenBases): void
    {
        $this->stolenBases = $stolenBases;
    }

    public function getStolenBasesCaught(): int
    {
        return $this->stolenBasesCaught;
    }

    public function setStolenBasesCaught(int $stolenBasesCaught): void
    {
        $this->stolenBasesCaught = $stolenBasesCaught;
    }

    public function getStolenBasesAverage(): float
    {
        return $this->stolenBasesAverage;
    }

    public function setStolenBasesAverage(float $stolenBasesAverage): void
    {
        $this->stolenBasesAverage = $stolenBasesAverage;
    }

    public function getHitByPitch(): int
    {
        return $this->hitByPitch;
    }

    public function setHitByPitch(int $hitByPitch): void
    {
        $this->hitByPitch = $hitByPitch;
    }

    public function getDefensiveInterferanceReaches(): int
    {
        return $this->defensiveInterferanceReaches;
    }

    public function setDefensiveInterferanceReaches(int $defensiveInterferanceReaches): void
    {
        $this->defensiveInterferanceReaches = $defensiveInterferanceReaches;
    }

    public function getOnBasePlusSlugging(): float
    {
        return $this->onBasePlusSlugging;
    }

    public function setOnBasePlusSlugging(float $onBasePlusSlugging): void
    {
        $this->onBasePlusSlugging = $onBasePlusSlugging;
    }

    public function getPlateAppearances(): int
    {
        return $this->plateAppearances;
    }

    public function setPlateAppearances(int $plateAppearances): void
    {
        $this->plateAppearances = $plateAppearances;
    }

    public function getHitsExtraBase(): int
    {
        return $this->hitsExtraBase;
    }

    public function setHitsExtraBase(int $hitsExtraBase): void
    {
        $this->hitsExtraBase = $hitsExtraBase;
    }

    public function toDto(): BaseballOffensiveStatsDto
    {
        $dto = new BaseballOffensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->average = (float) ($this->average ?? 0);
        $dto->runsScored = (int) ($this->runsScored ?? 0);
        $dto->atBats = (int) ($this->atBats ?? 0);
        $dto->hits = (int) ($this->hits ?? 0);
        $dto->rbi = (int) ($this->rbi ?? 0);
        $dto->totalBases = (int) ($this->totalBases ?? 0);
        $dto->sluggingPercentage = (float) ($this->sluggingPercentage ?? 0);
        $dto->basesOnBalls = (int) ($this->basesOnBalls ?? 0);
        $dto->strikeouts = (int) ($this->strikeouts ?? 0);
        $dto->leftOnBase = (int) ($this->leftOnBase ?? 0);
        $dto->leftInScoringPosition = (int) ($this->leftInScoringPosition ?? 0);
        $dto->singles = (int) ($this->singles ?? 0);
        $dto->doubles = (int) ($this->doubles ?? 0);
        $dto->triples = (int) ($this->triples ?? 0);
        $dto->homeRuns = (int) ($this->homeRuns ?? 0);
        $dto->grandSlams = (int) ($this->grandSlams ?? 0);
        $dto->atBatsPerRbi = (float) ($this->atBatsPerRbi ?? 0);
        $dto->plateAppearancesPerRbi = (float) ($this->plateAppearancesPerRbi ?? 0);
        $dto->atBatsPerHomeRun = (float) ($this->atBatsPerHomeRun ?? 0);
        $dto->plateAppearancesPerHomeRun = (float) ($this->plateAppearancesPerHomeRun ?? 0);
        $dto->sacFlies = (int) ($this->sacFlies ?? 0);
        $dto->sacBunts = (int) ($this->sacBunts ?? 0);
        $dto->groundedIntoDoublePlay = (int) ($this->groundedIntoDoublePlay ?? 0);
        $dto->movedUp = (int) ($this->movedUp ?? 0);
        $dto->onBasePercentage = (float) ($this->onBasePercentage ?? 0);
        $dto->stolenBases = (int) ($this->stolenBases ?? 0);
        $dto->stolenBasesCaught = (int) ($this->stolenBasesCaught ?? 0);
        $dto->stolenBasesAverage = (float) ($this->stolenBasesAverage ?? 0);
        $dto->hitByPitch = (int) ($this->hitByPitch ?? 0);
        $dto->defensiveInterferanceReaches = (int) ($this->defensiveInterferanceReaches ?? 0);
        $dto->onBasePlusSlugging = (float) ($this->onBasePlusSlugging ?? 0);
        $dto->plateAppearances = (int) ($this->plateAppearances ?? 0);
        $dto->hitsExtraBase = (int) ($this->hitsExtraBase ?? 0);

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "average" => $this->average,
            "runs_scored" => $this->runsScored,
            "at_bats" => $this->atBats,
            "hits" => $this->hits,
            "rbi" => $this->rbi,
            "total_bases" => $this->totalBases,
            "slugging_percentage" => $this->sluggingPercentage,
            "bases_on_balls" => $this->basesOnBalls,
            "strikeouts" => $this->strikeouts,
            "left_on_base" => $this->leftOnBase,
            "left_in_scoring_position" => $this->leftInScoringPosition,
            "singles" => $this->singles,
            "doubles" => $this->doubles,
            "triples" => $this->triples,
            "home_runs" => $this->homeRuns,
            "grand_slams" => $this->grandSlams,
            "at_bats_per_rbi" => $this->atBatsPerRbi,
            "plate_appearances_per_rbi" => $this->plateAppearancesPerRbi,
            "at_bats_per_home_run" => $this->atBatsPerHomeRun,
            "plate_appearances_per_home_run" => $this->plateAppearancesPerHomeRun,
            "sac_flies" => $this->sacFlies,
            "sac_bunts" => $this->sacBunts,
            "grounded_into_double_play" => $this->groundedIntoDoublePlay,
            "moved_up" => $this->movedUp,
            "on_base_percentage" => $this->onBasePercentage,
            "stolen_bases" => $this->stolenBases,
            "stolen_bases_caught" => $this->stolenBasesCaught,
            "stolen_bases_average" => $this->stolenBasesAverage,
            "hit_by_pitch" => $this->hitByPitch,
            "defensive_interferance_reaches" => $this->defensiveInterferanceReaches,
            "on_base_plus_slugging" => $this->onBasePlusSlugging,
            "plate_appearances" => $this->plateAppearances,
            "hits_extra_base" => $this->hitsExtraBase,
        ];
    }
}