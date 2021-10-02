<?php

declare(strict_types=1);

namespace Sports\MotorRacingEventStates;

class MotorRacingEventStatesDto 
{
    public int $id;
    public int $eventId;
    public int $currentState;
    public int $sequenceNumber;
    public string $lap;
    public string $lapsRemaining;
    public string $timeElapsed;
    public string $flagState;
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
        $this->lap = $row["lap"] ?? "";
        $this->lapsRemaining = $row["laps_remaining"] ?? "";
        $this->timeElapsed = $row["time_elapsed"] ?? "";
        $this->flagState = $row["flag_state"] ?? "";
        $this->context = $row["context"] ?? "";
    }
}