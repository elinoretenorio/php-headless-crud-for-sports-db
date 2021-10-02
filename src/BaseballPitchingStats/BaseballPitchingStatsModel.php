<?php

declare(strict_types=1);

namespace Sports\BaseballPitchingStats;

use JsonSerializable;

class BaseballPitchingStatsModel implements JsonSerializable
{
    private int $id;
    private int $runsAllowed;
    private int $singlesAllowed;
    private int $doublesAllowed;
    private int $triplesAllowed;
    private int $homeRunsAllowed;
    private string $inningsPitched;
    private int $hits;
    private int $earnedRuns;
    private int $unearnedRuns;
    private int $basesOnBalls;
    private int $basesOnBallsIntentional;
    private int $strikeouts;
    private float $strikeoutToBbRatio;
    private int $numberOfPitches;
    private float $era;
    private int $inheritedRunnersScored;
    private int $pickOffs;
    private int $errorsHitWithPitch;
    private int $errorsWildPitch;
    private int $balks;
    private int $wins;
    private int $losses;
    private int $saves;
    private int $shutouts;
    private int $gamesComplete;
    private int $gamesFinished;
    private float $winningPercentage;
    private string $eventCredit;
    private string $saveCredit;

    public function __construct(BaseballPitchingStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->runsAllowed = $dto->runsAllowed;
        $this->singlesAllowed = $dto->singlesAllowed;
        $this->doublesAllowed = $dto->doublesAllowed;
        $this->triplesAllowed = $dto->triplesAllowed;
        $this->homeRunsAllowed = $dto->homeRunsAllowed;
        $this->inningsPitched = $dto->inningsPitched;
        $this->hits = $dto->hits;
        $this->earnedRuns = $dto->earnedRuns;
        $this->unearnedRuns = $dto->unearnedRuns;
        $this->basesOnBalls = $dto->basesOnBalls;
        $this->basesOnBallsIntentional = $dto->basesOnBallsIntentional;
        $this->strikeouts = $dto->strikeouts;
        $this->strikeoutToBbRatio = $dto->strikeoutToBbRatio;
        $this->numberOfPitches = $dto->numberOfPitches;
        $this->era = $dto->era;
        $this->inheritedRunnersScored = $dto->inheritedRunnersScored;
        $this->pickOffs = $dto->pickOffs;
        $this->errorsHitWithPitch = $dto->errorsHitWithPitch;
        $this->errorsWildPitch = $dto->errorsWildPitch;
        $this->balks = $dto->balks;
        $this->wins = $dto->wins;
        $this->losses = $dto->losses;
        $this->saves = $dto->saves;
        $this->shutouts = $dto->shutouts;
        $this->gamesComplete = $dto->gamesComplete;
        $this->gamesFinished = $dto->gamesFinished;
        $this->winningPercentage = $dto->winningPercentage;
        $this->eventCredit = $dto->eventCredit;
        $this->saveCredit = $dto->saveCredit;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getRunsAllowed(): int
    {
        return $this->runsAllowed;
    }

    public function setRunsAllowed(int $runsAllowed): void
    {
        $this->runsAllowed = $runsAllowed;
    }

    public function getSinglesAllowed(): int
    {
        return $this->singlesAllowed;
    }

    public function setSinglesAllowed(int $singlesAllowed): void
    {
        $this->singlesAllowed = $singlesAllowed;
    }

    public function getDoublesAllowed(): int
    {
        return $this->doublesAllowed;
    }

    public function setDoublesAllowed(int $doublesAllowed): void
    {
        $this->doublesAllowed = $doublesAllowed;
    }

    public function getTriplesAllowed(): int
    {
        return $this->triplesAllowed;
    }

    public function setTriplesAllowed(int $triplesAllowed): void
    {
        $this->triplesAllowed = $triplesAllowed;
    }

    public function getHomeRunsAllowed(): int
    {
        return $this->homeRunsAllowed;
    }

    public function setHomeRunsAllowed(int $homeRunsAllowed): void
    {
        $this->homeRunsAllowed = $homeRunsAllowed;
    }

    public function getInningsPitched(): string
    {
        return $this->inningsPitched;
    }

    public function setInningsPitched(string $inningsPitched): void
    {
        $this->inningsPitched = $inningsPitched;
    }

    public function getHits(): int
    {
        return $this->hits;
    }

    public function setHits(int $hits): void
    {
        $this->hits = $hits;
    }

    public function getEarnedRuns(): int
    {
        return $this->earnedRuns;
    }

    public function setEarnedRuns(int $earnedRuns): void
    {
        $this->earnedRuns = $earnedRuns;
    }

    public function getUnearnedRuns(): int
    {
        return $this->unearnedRuns;
    }

    public function setUnearnedRuns(int $unearnedRuns): void
    {
        $this->unearnedRuns = $unearnedRuns;
    }

    public function getBasesOnBalls(): int
    {
        return $this->basesOnBalls;
    }

    public function setBasesOnBalls(int $basesOnBalls): void
    {
        $this->basesOnBalls = $basesOnBalls;
    }

    public function getBasesOnBallsIntentional(): int
    {
        return $this->basesOnBallsIntentional;
    }

    public function setBasesOnBallsIntentional(int $basesOnBallsIntentional): void
    {
        $this->basesOnBallsIntentional = $basesOnBallsIntentional;
    }

    public function getStrikeouts(): int
    {
        return $this->strikeouts;
    }

    public function setStrikeouts(int $strikeouts): void
    {
        $this->strikeouts = $strikeouts;
    }

    public function getStrikeoutToBbRatio(): float
    {
        return $this->strikeoutToBbRatio;
    }

    public function setStrikeoutToBbRatio(float $strikeoutToBbRatio): void
    {
        $this->strikeoutToBbRatio = $strikeoutToBbRatio;
    }

    public function getNumberOfPitches(): int
    {
        return $this->numberOfPitches;
    }

    public function setNumberOfPitches(int $numberOfPitches): void
    {
        $this->numberOfPitches = $numberOfPitches;
    }

    public function getEra(): float
    {
        return $this->era;
    }

    public function setEra(float $era): void
    {
        $this->era = $era;
    }

    public function getInheritedRunnersScored(): int
    {
        return $this->inheritedRunnersScored;
    }

    public function setInheritedRunnersScored(int $inheritedRunnersScored): void
    {
        $this->inheritedRunnersScored = $inheritedRunnersScored;
    }

    public function getPickOffs(): int
    {
        return $this->pickOffs;
    }

    public function setPickOffs(int $pickOffs): void
    {
        $this->pickOffs = $pickOffs;
    }

    public function getErrorsHitWithPitch(): int
    {
        return $this->errorsHitWithPitch;
    }

    public function setErrorsHitWithPitch(int $errorsHitWithPitch): void
    {
        $this->errorsHitWithPitch = $errorsHitWithPitch;
    }

    public function getErrorsWildPitch(): int
    {
        return $this->errorsWildPitch;
    }

    public function setErrorsWildPitch(int $errorsWildPitch): void
    {
        $this->errorsWildPitch = $errorsWildPitch;
    }

    public function getBalks(): int
    {
        return $this->balks;
    }

    public function setBalks(int $balks): void
    {
        $this->balks = $balks;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function setWins(int $wins): void
    {
        $this->wins = $wins;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function setLosses(int $losses): void
    {
        $this->losses = $losses;
    }

    public function getSaves(): int
    {
        return $this->saves;
    }

    public function setSaves(int $saves): void
    {
        $this->saves = $saves;
    }

    public function getShutouts(): int
    {
        return $this->shutouts;
    }

    public function setShutouts(int $shutouts): void
    {
        $this->shutouts = $shutouts;
    }

    public function getGamesComplete(): int
    {
        return $this->gamesComplete;
    }

    public function setGamesComplete(int $gamesComplete): void
    {
        $this->gamesComplete = $gamesComplete;
    }

    public function getGamesFinished(): int
    {
        return $this->gamesFinished;
    }

    public function setGamesFinished(int $gamesFinished): void
    {
        $this->gamesFinished = $gamesFinished;
    }

    public function getWinningPercentage(): float
    {
        return $this->winningPercentage;
    }

    public function setWinningPercentage(float $winningPercentage): void
    {
        $this->winningPercentage = $winningPercentage;
    }

    public function getEventCredit(): string
    {
        return $this->eventCredit;
    }

    public function setEventCredit(string $eventCredit): void
    {
        $this->eventCredit = $eventCredit;
    }

    public function getSaveCredit(): string
    {
        return $this->saveCredit;
    }

    public function setSaveCredit(string $saveCredit): void
    {
        $this->saveCredit = $saveCredit;
    }

    public function toDto(): BaseballPitchingStatsDto
    {
        $dto = new BaseballPitchingStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->runsAllowed = (int) ($this->runsAllowed ?? 0);
        $dto->singlesAllowed = (int) ($this->singlesAllowed ?? 0);
        $dto->doublesAllowed = (int) ($this->doublesAllowed ?? 0);
        $dto->triplesAllowed = (int) ($this->triplesAllowed ?? 0);
        $dto->homeRunsAllowed = (int) ($this->homeRunsAllowed ?? 0);
        $dto->inningsPitched = $this->inningsPitched ?? "";
        $dto->hits = (int) ($this->hits ?? 0);
        $dto->earnedRuns = (int) ($this->earnedRuns ?? 0);
        $dto->unearnedRuns = (int) ($this->unearnedRuns ?? 0);
        $dto->basesOnBalls = (int) ($this->basesOnBalls ?? 0);
        $dto->basesOnBallsIntentional = (int) ($this->basesOnBallsIntentional ?? 0);
        $dto->strikeouts = (int) ($this->strikeouts ?? 0);
        $dto->strikeoutToBbRatio = (float) ($this->strikeoutToBbRatio ?? 0);
        $dto->numberOfPitches = (int) ($this->numberOfPitches ?? 0);
        $dto->era = (float) ($this->era ?? 0);
        $dto->inheritedRunnersScored = (int) ($this->inheritedRunnersScored ?? 0);
        $dto->pickOffs = (int) ($this->pickOffs ?? 0);
        $dto->errorsHitWithPitch = (int) ($this->errorsHitWithPitch ?? 0);
        $dto->errorsWildPitch = (int) ($this->errorsWildPitch ?? 0);
        $dto->balks = (int) ($this->balks ?? 0);
        $dto->wins = (int) ($this->wins ?? 0);
        $dto->losses = (int) ($this->losses ?? 0);
        $dto->saves = (int) ($this->saves ?? 0);
        $dto->shutouts = (int) ($this->shutouts ?? 0);
        $dto->gamesComplete = (int) ($this->gamesComplete ?? 0);
        $dto->gamesFinished = (int) ($this->gamesFinished ?? 0);
        $dto->winningPercentage = (float) ($this->winningPercentage ?? 0);
        $dto->eventCredit = $this->eventCredit ?? "";
        $dto->saveCredit = $this->saveCredit ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "runs_allowed" => $this->runsAllowed,
            "singles_allowed" => $this->singlesAllowed,
            "doubles_allowed" => $this->doublesAllowed,
            "triples_allowed" => $this->triplesAllowed,
            "home_runs_allowed" => $this->homeRunsAllowed,
            "innings_pitched" => $this->inningsPitched,
            "hits" => $this->hits,
            "earned_runs" => $this->earnedRuns,
            "unearned_runs" => $this->unearnedRuns,
            "bases_on_balls" => $this->basesOnBalls,
            "bases_on_balls_intentional" => $this->basesOnBallsIntentional,
            "strikeouts" => $this->strikeouts,
            "strikeout_to_bb_ratio" => $this->strikeoutToBbRatio,
            "number_of_pitches" => $this->numberOfPitches,
            "era" => $this->era,
            "inherited_runners_scored" => $this->inheritedRunnersScored,
            "pick_offs" => $this->pickOffs,
            "errors_hit_with_pitch" => $this->errorsHitWithPitch,
            "errors_wild_pitch" => $this->errorsWildPitch,
            "balks" => $this->balks,
            "wins" => $this->wins,
            "losses" => $this->losses,
            "saves" => $this->saves,
            "shutouts" => $this->shutouts,
            "games_complete" => $this->gamesComplete,
            "games_finished" => $this->gamesFinished,
            "winning_percentage" => $this->winningPercentage,
            "event_credit" => $this->eventCredit,
            "save_credit" => $this->saveCredit,
        ];
    }
}