<?php

declare(strict_types=1);

namespace Sports\MotorRacingEventStates;

use JsonSerializable;

class MotorRacingEventStatesModel implements JsonSerializable
{
    private int $id;
    private int $eventId;
    private int $currentState;
    private int $sequenceNumber;
    private string $lap;
    private string $lapsRemaining;
    private string $timeElapsed;
    private string $flagState;
    private string $context;

    public function __construct(MotorRacingEventStatesDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->eventId = $dto->eventId;
        $this->currentState = $dto->currentState;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->lap = $dto->lap;
        $this->lapsRemaining = $dto->lapsRemaining;
        $this->timeElapsed = $dto->timeElapsed;
        $this->flagState = $dto->flagState;
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

    public function getLap(): string
    {
        return $this->lap;
    }

    public function setLap(string $lap): void
    {
        $this->lap = $lap;
    }

    public function getLapsRemaining(): string
    {
        return $this->lapsRemaining;
    }

    public function setLapsRemaining(string $lapsRemaining): void
    {
        $this->lapsRemaining = $lapsRemaining;
    }

    public function getTimeElapsed(): string
    {
        return $this->timeElapsed;
    }

    public function setTimeElapsed(string $timeElapsed): void
    {
        $this->timeElapsed = $timeElapsed;
    }

    public function getFlagState(): string
    {
        return $this->flagState;
    }

    public function setFlagState(string $flagState): void
    {
        $this->flagState = $flagState;
    }

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): void
    {
        $this->context = $context;
    }

    public function toDto(): MotorRacingEventStatesDto
    {
        $dto = new MotorRacingEventStatesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->eventId = (int) ($this->eventId ?? 0);
        $dto->currentState = (int) ($this->currentState ?? 0);
        $dto->sequenceNumber = (int) ($this->sequenceNumber ?? 0);
        $dto->lap = $this->lap ?? "";
        $dto->lapsRemaining = $this->lapsRemaining ?? "";
        $dto->timeElapsed = $this->timeElapsed ?? "";
        $dto->flagState = $this->flagState ?? "";
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
            "lap" => $this->lap,
            "laps_remaining" => $this->lapsRemaining,
            "time_elapsed" => $this->timeElapsed,
            "flag_state" => $this->flagState,
            "context" => $this->context,
        ];
    }
}