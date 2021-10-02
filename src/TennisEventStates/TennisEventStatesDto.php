<?php

declare(strict_types=1);

namespace Sports\TennisEventStates;

class TennisEventStatesDto 
{
    public int $id;
    public int $eventId;
    public int $currentState;
    public int $sequenceNumber;
    public string $tennisSet;
    public string $game;
    public int $serverPersonId;
    public string $serverScore;
    public int $receiverPersonId;
    public string $receiverScore;
    public string $serviceNumber;
    public string $context;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->eventId = (int) ($row["event_id"] ?? 0);
        $this->currentState = (int) ($row["current_state"] ?? 0);
        $this->sequenceNumber = (int) ($row["sequence_number"] ?? 0);
        $this->tennisSet = $row["tennis_set"] ?? "";
        $this->game = $row["game"] ?? "";
        $this->serverPersonId = (int) ($row["server_person_id"] ?? 0);
        $this->serverScore = $row["server_score"] ?? "";
        $this->receiverPersonId = (int) ($row["receiver_person_id"] ?? 0);
        $this->receiverScore = $row["receiver_score"] ?? "";
        $this->serviceNumber = $row["service_number"] ?? "";
        $this->context = $row["context"] ?? "";
    }
}