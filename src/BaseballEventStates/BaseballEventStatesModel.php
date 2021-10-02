<?php

declare(strict_types=1);

namespace Sports\BaseballEventStates;

use JsonSerializable;

class BaseballEventStatesModel implements JsonSerializable
{
    private int $id;
    private int $eventId;
    private int $currentState;
    private int $sequenceNumber;
    private int $atBatNumber;
    private int $inningValue;
    private string $inningHalf;
    private int $outs;
    private int $balls;
    private int $strikes;
    private int $runnerOnFirstId;
    private int $runnerOnSecondId;
    private int $runnerOnThirdId;
    private int $runnerOnFirst;
    private int $runnerOnSecond;
    private int $runnerOnThird;
    private int $runsThisInningHalf;
    private int $pitcherId;
    private int $batterId;
    private string $batterSide;
    private string $context;

    public function __construct(BaseballEventStatesDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->eventId = $dto->eventId;
        $this->currentState = $dto->currentState;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->atBatNumber = $dto->atBatNumber;
        $this->inningValue = $dto->inningValue;
        $this->inningHalf = $dto->inningHalf;
        $this->outs = $dto->outs;
        $this->balls = $dto->balls;
        $this->strikes = $dto->strikes;
        $this->runnerOnFirstId = $dto->runnerOnFirstId;
        $this->runnerOnSecondId = $dto->runnerOnSecondId;
        $this->runnerOnThirdId = $dto->runnerOnThirdId;
        $this->runnerOnFirst = $dto->runnerOnFirst;
        $this->runnerOnSecond = $dto->runnerOnSecond;
        $this->runnerOnThird = $dto->runnerOnThird;
        $this->runsThisInningHalf = $dto->runsThisInningHalf;
        $this->pitcherId = $dto->pitcherId;
        $this->batterId = $dto->batterId;
        $this->batterSide = $dto->batterSide;
        $this->context = $dto->context;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEventId(): int
    {
        return $this->eventId;
    }

    public function setEventId(int $eventId): void
    {
        $this->eventId = $eventId;
    }

    public function getCurrentState(): int
    {
        return $this->currentState;
    }

    public function setCurrentState(int $currentState): void
    {
        $this->currentState = $currentState;
    }

    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function getAtBatNumber(): int
    {
        return $this->atBatNumber;
    }

    public function setAtBatNumber(int $atBatNumber): void
    {
        $this->atBatNumber = $atBatNumber;
    }

    public function getInningValue(): int
    {
        return $this->inningValue;
    }

    public function setInningValue(int $inningValue): void
    {
        $this->inningValue = $inningValue;
    }

    public function getInningHalf(): string
    {
        return $this->inningHalf;
    }

    public function setInningHalf(string $inningHalf): void
    {
        $this->inningHalf = $inningHalf;
    }

    public function getOuts(): int
    {
        return $this->outs;
    }

    public function setOuts(int $outs): void
    {
        $this->outs = $outs;
    }

    public function getBalls(): int
    {
        return $this->balls;
    }

    public function setBalls(int $balls): void
    {
        $this->balls = $balls;
    }

    public function getStrikes(): int
    {
        return $this->strikes;
    }

    public function setStrikes(int $strikes): void
    {
        $this->strikes = $strikes;
    }

    public function getRunnerOnFirstId(): int
    {
        return $this->runnerOnFirstId;
    }

    public function setRunnerOnFirstId(int $runnerOnFirstId): void
    {
        $this->runnerOnFirstId = $runnerOnFirstId;
    }

    public function getRunnerOnSecondId(): int
    {
        return $this->runnerOnSecondId;
    }

    public function setRunnerOnSecondId(int $runnerOnSecondId): void
    {
        $this->runnerOnSecondId = $runnerOnSecondId;
    }

    public function getRunnerOnThirdId(): int
    {
        return $this->runnerOnThirdId;
    }

    public function setRunnerOnThirdId(int $runnerOnThirdId): void
    {
        $this->runnerOnThirdId = $runnerOnThirdId;
    }

    public function getRunnerOnFirst(): int
    {
        return $this->runnerOnFirst;
    }

    public function setRunnerOnFirst(int $runnerOnFirst): void
    {
        $this->runnerOnFirst = $runnerOnFirst;
    }

    public function getRunnerOnSecond(): int
    {
        return $this->runnerOnSecond;
    }

    public function setRunnerOnSecond(int $runnerOnSecond): void
    {
        $this->runnerOnSecond = $runnerOnSecond;
    }

    public function getRunnerOnThird(): int
    {
        return $this->runnerOnThird;
    }

    public function setRunnerOnThird(int $runnerOnThird): void
    {
        $this->runnerOnThird = $runnerOnThird;
    }

    public function getRunsThisInningHalf(): int
    {
        return $this->runsThisInningHalf;
    }

    public function setRunsThisInningHalf(int $runsThisInningHalf): void
    {
        $this->runsThisInningHalf = $runsThisInningHalf;
    }

    public function getPitcherId(): int
    {
        return $this->pitcherId;
    }

    public function setPitcherId(int $pitcherId): void
    {
        $this->pitcherId = $pitcherId;
    }

    public function getBatterId(): int
    {
        return $this->batterId;
    }

    public function setBatterId(int $batterId): void
    {
        $this->batterId = $batterId;
    }

    public function getBatterSide(): string
    {
        return $this->batterSide;
    }

    public function setBatterSide(string $batterSide): void
    {
        $this->batterSide = $batterSide;
    }

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): void
    {
        $this->context = $context;
    }

    public function toDto(): BaseballEventStatesDto
    {
        $dto = new BaseballEventStatesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->eventId = (int) ($this->eventId ?? 0);
        $dto->currentState = (int) ($this->currentState ?? 0);
        $dto->sequenceNumber = (int) ($this->sequenceNumber ?? 0);
        $dto->atBatNumber = (int) ($this->atBatNumber ?? 0);
        $dto->inningValue = (int) ($this->inningValue ?? 0);
        $dto->inningHalf = $this->inningHalf ?? "";
        $dto->outs = (int) ($this->outs ?? 0);
        $dto->balls = (int) ($this->balls ?? 0);
        $dto->strikes = (int) ($this->strikes ?? 0);
        $dto->runnerOnFirstId = (int) ($this->runnerOnFirstId ?? 0);
        $dto->runnerOnSecondId = (int) ($this->runnerOnSecondId ?? 0);
        $dto->runnerOnThirdId = (int) ($this->runnerOnThirdId ?? 0);
        $dto->runnerOnFirst = (int) ($this->runnerOnFirst ?? 0);
        $dto->runnerOnSecond = (int) ($this->runnerOnSecond ?? 0);
        $dto->runnerOnThird = (int) ($this->runnerOnThird ?? 0);
        $dto->runsThisInningHalf = (int) ($this->runsThisInningHalf ?? 0);
        $dto->pitcherId = (int) ($this->pitcherId ?? 0);
        $dto->batterId = (int) ($this->batterId ?? 0);
        $dto->batterSide = $this->batterSide ?? "";
        $dto->context = $this->context ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "event_id" => $this->eventId,
            "current_state" => $this->currentState,
            "sequence_number" => $this->sequenceNumber,
            "at_bat_number" => $this->atBatNumber,
            "inning_value" => $this->inningValue,
            "inning_half" => $this->inningHalf,
            "outs" => $this->outs,
            "balls" => $this->balls,
            "strikes" => $this->strikes,
            "runner_on_first_id" => $this->runnerOnFirstId,
            "runner_on_second_id" => $this->runnerOnSecondId,
            "runner_on_third_id" => $this->runnerOnThirdId,
            "runner_on_first" => $this->runnerOnFirst,
            "runner_on_second" => $this->runnerOnSecond,
            "runner_on_third" => $this->runnerOnThird,
            "runs_this_inning_half" => $this->runsThisInningHalf,
            "pitcher_id" => $this->pitcherId,
            "batter_id" => $this->batterId,
            "batter_side" => $this->batterSide,
            "context" => $this->context,
        ];
    }
}