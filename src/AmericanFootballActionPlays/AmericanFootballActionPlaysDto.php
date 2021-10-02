<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionPlays;

class AmericanFootballActionPlaysDto 
{
    public int $id;
    public int $americanFootballEventStateId;
    public string $playType;
    public string $scoreAttemptType;
    public string $driveResult;
    public int $points;
    public string $comment;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->americanFootballEventStateId = (int) ($row["american_football_event_state_id"] ?? 0);
        $this->playType = $row["play_type"] ?? "";
        $this->scoreAttemptType = $row["score_attempt_type"] ?? "";
        $this->driveResult = $row["drive_result"] ?? "";
        $this->points = (int) ($row["points"] ?? 0);
        $this->comment = $row["comment"] ?? "";
    }
}