<?php

declare(strict_types=1);

namespace Sports\SoccerEventStates;

class SoccerEventStatesDto 
{
    public int $id;
    public int $eventId;
    public int $currentState;
    public int $sequenceNumber;
    public string $periodValue;
    public string $periodTimeElapsed;
    public string $periodTimeRemaining;
    public string $minutesElapsed;
    public string $periodMinuteElapsed;
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
        $this->periodValue = $row["period_value"] ?? "";
        $this->periodTimeElapsed = $row["period_time_elapsed"] ?? "";
        $this->periodTimeRemaining = $row["period_time_remaining"] ?? "";
        $this->minutesElapsed = $row["minutes_elapsed"] ?? "";
        $this->periodMinuteElapsed = $row["period_minute_elapsed"] ?? "";
        $this->context = $row["context"] ?? "";
    }
}