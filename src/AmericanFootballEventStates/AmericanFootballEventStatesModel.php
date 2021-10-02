<?php

declare(strict_types=1);

namespace Sports\AmericanFootballEventStates;

use JsonSerializable;

class AmericanFootballEventStatesModel implements JsonSerializable
{
    private int $id;
    private int $eventId;
    private int $currentState;
    private int $sequenceNumber;
    private int $periodValue;
    private string $periodTimeElapsed;
    private string $periodTimeRemaining;
    private string $clockState;
    private int $down;
    private int $teamInPossessionId;
    private int $distanceFor1stDown;
    private string $fieldSide;
    private int $fieldLine;
    private string $context;

    public function __construct(AmericanFootballEventStatesDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->eventId = $dto->eventId;
        $this->currentState = $dto->currentState;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->periodValue = $dto->periodValue;
        $this->periodTimeElapsed = $dto->periodTimeElapsed;
        $this->periodTimeRemaining = $dto->periodTimeRemaining;
        $this->clockState = $dto->clockState;
        $this->down = $dto->down;
        $this->teamInPossessionId = $dto->teamInPossessionId;
        $this->distanceFor1stDown = $dto->distanceFor1stDown;
        $this->fieldSide = $dto->fieldSide;
        $this->fieldLine = $dto->fieldLine;
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

    public function getPeriodValue(): int
    {
        return $this->periodValue;
    }

    public function setPeriodValue(int $periodValue): void
    {
        $this->periodValue = $periodValue;
    }

    public function getPeriodTimeElapsed(): string
    {
        return $this->periodTimeElapsed;
    }

    public function setPeriodTimeElapsed(string $periodTimeElapsed): void
    {
        $this->periodTimeElapsed = $periodTimeElapsed;
    }

    public function getPeriodTimeRemaining(): string
    {
        return $this->periodTimeRemaining;
    }

    public function setPeriodTimeRemaining(string $periodTimeRemaining): void
    {
        $this->periodTimeRemaining = $periodTimeRemaining;
    }

    public function getClockState(): string
    {
        return $this->clockState;
    }

    public function setClockState(string $clockState): void
    {
        $this->clockState = $clockState;
    }

    public function getDown(): int
    {
        return $this->down;
    }

    public function setDown(int $down): void
    {
        $this->down = $down;
    }

    public function getTeamInPossessionId(): int
    {
        return $this->teamInPossessionId;
    }

    public function setTeamInPossessionId(int $teamInPossessionId): void
    {
        $this->teamInPossessionId = $teamInPossessionId;
    }

    public function getDistanceFor1stDown(): int
    {
        return $this->distanceFor1stDown;
    }

    public function setDistanceFor1stDown(int $distanceFor1stDown): void
    {
        $this->distanceFor1stDown = $distanceFor1stDown;
    }

    public function getFieldSide(): string
    {
        return $this->fieldSide;
    }

    public function setFieldSide(string $fieldSide): void
    {
        $this->fieldSide = $fieldSide;
    }

    public function getFieldLine(): int
    {
        return $this->fieldLine;
    }

    public function setFieldLine(int $fieldLine): void
    {
        $this->fieldLine = $fieldLine;
    }

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): void
    {
        $this->context = $context;
    }

    public function toDto(): AmericanFootballEventStatesDto
    {
        $dto = new AmericanFootballEventStatesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->eventId = (int) ($this->eventId ?? 0);
        $dto->currentState = (int) ($this->currentState ?? 0);
        $dto->sequenceNumber = (int) ($this->sequenceNumber ?? 0);
        $dto->periodValue = (int) ($this->periodValue ?? 0);
        $dto->periodTimeElapsed = $this->periodTimeElapsed ?? "";
        $dto->periodTimeRemaining = $this->periodTimeRemaining ?? "";
        $dto->clockState = $this->clockState ?? "";
        $dto->down = (int) ($this->down ?? 0);
        $dto->teamInPossessionId = (int) ($this->teamInPossessionId ?? 0);
        $dto->distanceFor1stDown = (int) ($this->distanceFor1stDown ?? 0);
        $dto->fieldSide = $this->fieldSide ?? "";
        $dto->fieldLine = (int) ($this->fieldLine ?? 0);
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
            "period_value" => $this->periodValue,
            "period_time_elapsed" => $this->periodTimeElapsed,
            "period_time_remaining" => $this->periodTimeRemaining,
            "clock_state" => $this->clockState,
            "down" => $this->down,
            "team_in_possession_id" => $this->teamInPossessionId,
            "distance_for_1st_down" => $this->distanceFor1stDown,
            "field_side" => $this->fieldSide,
            "field_line" => $this->fieldLine,
            "context" => $this->context,
        ];
    }
}