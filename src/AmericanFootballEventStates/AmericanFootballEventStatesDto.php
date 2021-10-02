<?php

declare(strict_types=1);

namespace Sports\AmericanFootballEventStates;

class AmericanFootballEventStatesDto 
{
    public int $id;
    public int $eventId;
    public int $currentState;
    public int $sequenceNumber;
    public int $periodValue;
    public string $periodTimeElapsed;
    public string $periodTimeRemaining;
    public string $clockState;
    public int $down;
    public int $teamInPossessionId;
    public int $distanceFor1stDown;
    public string $fieldSide;
    public int $fieldLine;
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
        $this->periodValue = (int) ($row["period_value"] ?? 0);
        $this->periodTimeElapsed = $row["period_time_elapsed"] ?? "";
        $this->periodTimeRemaining = $row["period_time_remaining"] ?? "";
        $this->clockState = $row["clock_state"] ?? "";
        $this->down = (int) ($row["down"] ?? 0);
        $this->teamInPossessionId = (int) ($row["team_in_possession_id"] ?? 0);
        $this->distanceFor1stDown = (int) ($row["distance_for_1st_down"] ?? 0);
        $this->fieldSide = $row["field_side"] ?? "";
        $this->fieldLine = (int) ($row["field_line"] ?? 0);
        $this->context = $row["context"] ?? "";
    }
}