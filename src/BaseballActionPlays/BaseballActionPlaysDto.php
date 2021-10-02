<?php

declare(strict_types=1);

namespace Sports\BaseballActionPlays;

class BaseballActionPlaysDto 
{
    public int $id;
    public int $baseballEventStateId;
    public string $playType;
    public string $notation;
    public string $notationYaml;
    public int $baseballDefensiveGroupId;
    public string $comment;
    public int $runnerOnFirstAdvance;
    public int $runnerOnSecondAdvance;
    public int $runnerOnThirdAdvance;
    public int $outsRecorded;
    public int $rbi;
    public int $runsScored;
    public string $earnedRunsScored;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->baseballEventStateId = (int) ($row["baseball_event_state_id"] ?? 0);
        $this->playType = $row["play_type"] ?? "";
        $this->notation = $row["notation"] ?? "";
        $this->notationYaml = $row["notation_yaml"] ?? "";
        $this->baseballDefensiveGroupId = (int) ($row["baseball_defensive_group_id"] ?? 0);
        $this->comment = $row["comment"] ?? "";
        $this->runnerOnFirstAdvance = (int) ($row["runner_on_first_advance"] ?? 0);
        $this->runnerOnSecondAdvance = (int) ($row["runner_on_second_advance"] ?? 0);
        $this->runnerOnThirdAdvance = (int) ($row["runner_on_third_advance"] ?? 0);
        $this->outsRecorded = (int) ($row["outs_recorded"] ?? 0);
        $this->rbi = (int) ($row["rbi"] ?? 0);
        $this->runsScored = (int) ($row["runs_scored"] ?? 0);
        $this->earnedRunsScored = $row["earned_runs_scored"] ?? "";
    }
}