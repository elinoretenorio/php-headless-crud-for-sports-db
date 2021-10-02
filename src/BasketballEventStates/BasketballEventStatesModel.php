<?php

declare(strict_types=1);

namespace Sports\BasketballEventStates;

use JsonSerializable;

class BasketballEventStatesModel implements JsonSerializable
{
    private int $id;
    private int $eventId;
    private int $currentState;
    private int $sequenceNumber;
    private string $periodValue;
    private string $periodTimeElapsed;
    private string $periodTimeRemaining;
    private string $context;

    public function __construct(BasketballEventStatesDto $dto = null)
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

    public function getPeriodValue(): string
    {
        return $this->periodValue;
    }

    public function setPeriodValue(string $periodValue): void
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

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): void
    {
        $this->context = $context;
    }

    public function toDto(): BasketballEventStatesDto
    {
        $dto = new BasketballEventStatesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->eventId = (int) ($this->eventId ?? 0);
        $dto->currentState = (int) ($this->currentState ?? 0);
        $dto->sequenceNumber = (int) ($this->sequenceNumber ?? 0);
        $dto->periodValue = $this->periodValue ?? "";
        $dto->periodTimeElapsed = $this->periodTimeElapsed ?? "";
        $dto->periodTimeRemaining = $this->periodTimeRemaining ?? "";
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
            "context" => $this->context,
        ];
    }
}