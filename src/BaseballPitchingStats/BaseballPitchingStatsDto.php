<?php

declare(strict_types=1);

namespace Sports\BaseballPitchingStats;

class BaseballPitchingStatsDto 
{
    public int $id;
    public int $runsAllowed;
    public int $singlesAllowed;
    public int $doublesAllowed;
    public int $triplesAllowed;
    public int $homeRunsAllowed;
    public string $inningsPitched;
    public int $hits;
    public int $earnedRuns;
    public int $unearnedRuns;
    public int $basesOnBalls;
    public int $basesOnBallsIntentional;
    public int $strikeouts;
    public float $strikeoutToBbRatio;
    public int $numberOfPitches;
    public float $era;
    public int $inheritedRunnersScored;
    public int $pickOffs;
    public int $errorsHitWithPitch;
    public int $errorsWildPitch;
    public int $balks;
    public int $wins;
    public int $losses;
    public int $saves;
    public int $shutouts;
    public int $gamesComplete;
    public int $gamesFinished;
    public float $winningPercentage;
    public string $eventCredit;
    public string $saveCredit;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->runsAllowed = (int) ($row["runs_allowed"] ?? 0);
        $this->singlesAllowed = (int) ($row["singles_allowed"] ?? 0);
        $this->doublesAllowed = (int) ($row["doubles_allowed"] ?? 0);
        $this->triplesAllowed = (int) ($row["triples_allowed"] ?? 0);
        $this->homeRunsAllowed = (int) ($row["home_runs_allowed"] ?? 0);
        $this->inningsPitched = $row["innings_pitched"] ?? "";
        $this->hits = (int) ($row["hits"] ?? 0);
        $this->earnedRuns = (int) ($row["earned_runs"] ?? 0);
        $this->unearnedRuns = (int) ($row["unearned_runs"] ?? 0);
        $this->basesOnBalls = (int) ($row["bases_on_balls"] ?? 0);
        $this->basesOnBallsIntentional = (int) ($row["bases_on_balls_intentional"] ?? 0);
        $this->strikeouts = (int) ($row["strikeouts"] ?? 0);
        $this->strikeoutToBbRatio = (float) ($row["strikeout_to_bb_ratio"] ?? 0);
        $this->numberOfPitches = (int) ($row["number_of_pitches"] ?? 0);
        $this->era = (float) ($row["era"] ?? 0);
        $this->inheritedRunnersScored = (int) ($row["inherited_runners_scored"] ?? 0);
        $this->pickOffs = (int) ($row["pick_offs"] ?? 0);
        $this->errorsHitWithPitch = (int) ($row["errors_hit_with_pitch"] ?? 0);
        $this->errorsWildPitch = (int) ($row["errors_wild_pitch"] ?? 0);
        $this->balks = (int) ($row["balks"] ?? 0);
        $this->wins = (int) ($row["wins"] ?? 0);
        $this->losses = (int) ($row["losses"] ?? 0);
        $this->saves = (int) ($row["saves"] ?? 0);
        $this->shutouts = (int) ($row["shutouts"] ?? 0);
        $this->gamesComplete = (int) ($row["games_complete"] ?? 0);
        $this->gamesFinished = (int) ($row["games_finished"] ?? 0);
        $this->winningPercentage = (float) ($row["winning_percentage"] ?? 0);
        $this->eventCredit = $row["event_credit"] ?? "";
        $this->saveCredit = $row["save_credit"] ?? "";
    }
}