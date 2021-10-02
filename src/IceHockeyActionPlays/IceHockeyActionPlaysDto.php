<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionPlays;

class IceHockeyActionPlaysDto 
{
    public int $id;
    public int $iceHockeyEventStateId;
    public string $playType;
    public string $scoreAttemptType;
    public string $playResult;
    public string $comment;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->iceHockeyEventStateId = (int) ($row["ice_hockey_event_state_id"] ?? 0);
        $this->playType = $row["play_type"] ?? "";
        $this->scoreAttemptType = $row["score_attempt_type"] ?? "";
        $this->playResult = $row["play_result"] ?? "";
        $this->comment = $row["comment"] ?? "";
    }
}