<?php

declare(strict_types=1);

namespace Sports\BaseballActionPlays;

use JsonSerializable;

class BaseballActionPlaysModel implements JsonSerializable
{
    private int $id;
    private int $baseballEventStateId;
    private string $playType;
    private string $notation;
    private string $notationYaml;
    private int $baseballDefensiveGroupId;
    private string $comment;
    private int $runnerOnFirstAdvance;
    private int $runnerOnSecondAdvance;
    private int $runnerOnThirdAdvance;
    private int $outsRecorded;
    private int $rbi;
    private int $runsScored;
    private string $earnedRunsScored;

    public function __construct(BaseballActionPlaysDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->baseballEventStateId = $dto->baseballEventStateId;
        $this->playType = $dto->playType;
        $this->notation = $dto->notation;
        $this->notationYaml = $dto->notationYaml;
        $this->baseballDefensiveGroupId = $dto->baseballDefensiveGroupId;
        $this->comment = $dto->comment;
        $this->runnerOnFirstAdvance = $dto->runnerOnFirstAdvance;
        $this->runnerOnSecondAdvance = $dto->runnerOnSecondAdvance;
        $this->runnerOnThirdAdvance = $dto->runnerOnThirdAdvance;
        $this->outsRecorded = $dto->outsRecorded;
        $this->rbi = $dto->rbi;
        $this->runsScored = $dto->runsScored;
        $this->earnedRunsScored = $dto->earnedRunsScored;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getBaseballEventStateId(): int
    {
        return $this->baseballEventStateId;
    }

    public function setBaseballEventStateId(int $baseballEventStateId): void
    {
        $this->baseballEventStateId = $baseballEventStateId;
    }

    public function getPlayType(): string
    {
        return $this->playType;
    }

    public function setPlayType(string $playType): void
    {
        $this->playType = $playType;
    }

    public function getNotation(): string
    {
        return $this->notation;
    }

    public function setNotation(string $notation): void
    {
        $this->notation = $notation;
    }

    public function getNotationYaml(): string
    {
        return $this->notationYaml;
    }

    public function setNotationYaml(string $notationYaml): void
    {
        $this->notationYaml = $notationYaml;
    }

    public function getBaseballDefensiveGroupId(): int
    {
        return $this->baseballDefensiveGroupId;
    }

    public function setBaseballDefensiveGroupId(int $baseballDefensiveGroupId): void
    {
        $this->baseballDefensiveGroupId = $baseballDefensiveGroupId;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getRunnerOnFirstAdvance(): int
    {
        return $this->runnerOnFirstAdvance;
    }

    public function setRunnerOnFirstAdvance(int $runnerOnFirstAdvance): void
    {
        $this->runnerOnFirstAdvance = $runnerOnFirstAdvance;
    }

    public function getRunnerOnSecondAdvance(): int
    {
        return $this->runnerOnSecondAdvance;
    }

    public function setRunnerOnSecondAdvance(int $runnerOnSecondAdvance): void
    {
        $this->runnerOnSecondAdvance = $runnerOnSecondAdvance;
    }

    public function getRunnerOnThirdAdvance(): int
    {
        return $this->runnerOnThirdAdvance;
    }

    public function setRunnerOnThirdAdvance(int $runnerOnThirdAdvance): void
    {
        $this->runnerOnThirdAdvance = $runnerOnThirdAdvance;
    }

    public function getOutsRecorded(): int
    {
        return $this->outsRecorded;
    }

    public function setOutsRecorded(int $outsRecorded): void
    {
        $this->outsRecorded = $outsRecorded;
    }

    public function getRbi(): int
    {
        return $this->rbi;
    }

    public function setRbi(int $rbi): void
    {
        $this->rbi = $rbi;
    }

    public function getRunsScored(): int
    {
        return $this->runsScored;
    }

    public function setRunsScored(int $runsScored): void
    {
        $this->runsScored = $runsScored;
    }

    public function getEarnedRunsScored(): string
    {
        return $this->earnedRunsScored;
    }

    public function setEarnedRunsScored(string $earnedRunsScored): void
    {
        $this->earnedRunsScored = $earnedRunsScored;
    }

    public function toDto(): BaseballActionPlaysDto
    {
        $dto = new BaseballActionPlaysDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->baseballEventStateId = (int) ($this->baseballEventStateId ?? 0);
        $dto->playType = $this->playType ?? "";
        $dto->notation = $this->notation ?? "";
        $dto->notationYaml = $this->notationYaml ?? "";
        $dto->baseballDefensiveGroupId = (int) ($this->baseballDefensiveGroupId ?? 0);
        $dto->comment = $this->comment ?? "";
        $dto->runnerOnFirstAdvance = (int) ($this->runnerOnFirstAdvance ?? 0);
        $dto->runnerOnSecondAdvance = (int) ($this->runnerOnSecondAdvance ?? 0);
        $dto->runnerOnThirdAdvance = (int) ($this->runnerOnThirdAdvance ?? 0);
        $dto->outsRecorded = (int) ($this->outsRecorded ?? 0);
        $dto->rbi = (int) ($this->rbi ?? 0);
        $dto->runsScored = (int) ($this->runsScored ?? 0);
        $dto->earnedRunsScored = $this->earnedRunsScored ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "baseball_event_state_id" => $this->baseballEventStateId,
            "play_type" => $this->playType,
            "notation" => $this->notation,
            "notation_yaml" => $this->notationYaml,
            "baseball_defensive_group_id" => $this->baseballDefensiveGroupId,
            "comment" => $this->comment,
            "runner_on_first_advance" => $this->runnerOnFirstAdvance,
            "runner_on_second_advance" => $this->runnerOnSecondAdvance,
            "runner_on_third_advance" => $this->runnerOnThirdAdvance,
            "outs_recorded" => $this->outsRecorded,
            "rbi" => $this->rbi,
            "runs_scored" => $this->runsScored,
            "earned_runs_scored" => $this->earnedRunsScored,
        ];
    }
}