<?php

declare(strict_types=1);

namespace Sports\TennisEventStates;

use JsonSerializable;

class TennisEventStatesModel implements JsonSerializable
{
    private int $id;
    private int $eventId;
    private int $currentState;
    private int $sequenceNumber;
    private string $tennisSet;
    private string $game;
    private int $serverPersonId;
    private string $serverScore;
    private int $receiverPersonId;
    private string $receiverScore;
    private string $serviceNumber;
    private string $context;

    public function __construct(TennisEventStatesDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->eventId = $dto->eventId;
        $this->currentState = $dto->currentState;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->tennisSet = $dto->tennisSet;
        $this->game = $dto->game;
        $this->serverPersonId = $dto->serverPersonId;
        $this->serverScore = $dto->serverScore;
        $this->receiverPersonId = $dto->receiverPersonId;
        $this->receiverScore = $dto->receiverScore;
        $this->serviceNumber = $dto->serviceNumber;
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

    public function getTennisSet(): string
    {
        return $this->tennisSet;
    }

    public function setTennisSet(string $tennisSet): void
    {
        $this->tennisSet = $tennisSet;
    }

    public function getGame(): string
    {
        return $this->game;
    }

    public function setGame(string $game): void
    {
        $this->game = $game;
    }

    public function getServerPersonId(): int
    {
        return $this->serverPersonId;
    }

    public function setServerPersonId(int $serverPersonId): void
    {
        $this->serverPersonId = $serverPersonId;
    }

    public function getServerScore(): string
    {
        return $this->serverScore;
    }

    public function setServerScore(string $serverScore): void
    {
        $this->serverScore = $serverScore;
    }

    public function getReceiverPersonId(): int
    {
        return $this->receiverPersonId;
    }

    public function setReceiverPersonId(int $receiverPersonId): void
    {
        $this->receiverPersonId = $receiverPersonId;
    }

    public function getReceiverScore(): string
    {
        return $this->receiverScore;
    }

    public function setReceiverScore(string $receiverScore): void
    {
        $this->receiverScore = $receiverScore;
    }

    public function getServiceNumber(): string
    {
        return $this->serviceNumber;
    }

    public function setServiceNumber(string $serviceNumber): void
    {
        $this->serviceNumber = $serviceNumber;
    }

    public function getContext(): string
    {
        return $this->context;
    }

    public function setContext(string $context): void
    {
        $this->context = $context;
    }

    public function toDto(): TennisEventStatesDto
    {
        $dto = new TennisEventStatesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->eventId = (int) ($this->eventId ?? 0);
        $dto->currentState = (int) ($this->currentState ?? 0);
        $dto->sequenceNumber = (int) ($this->sequenceNumber ?? 0);
        $dto->tennisSet = $this->tennisSet ?? "";
        $dto->game = $this->game ?? "";
        $dto->serverPersonId = (int) ($this->serverPersonId ?? 0);
        $dto->serverScore = $this->serverScore ?? "";
        $dto->receiverPersonId = (int) ($this->receiverPersonId ?? 0);
        $dto->receiverScore = $this->receiverScore ?? "";
        $dto->serviceNumber = $this->serviceNumber ?? "";
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
            "tennis_set" => $this->tennisSet,
            "game" => $this->game,
            "server_person_id" => $this->serverPersonId,
            "server_score" => $this->serverScore,
            "receiver_person_id" => $this->receiverPersonId,
            "receiver_score" => $this->receiverScore,
            "service_number" => $this->serviceNumber,
            "context" => $this->context,
        ];
    }
}