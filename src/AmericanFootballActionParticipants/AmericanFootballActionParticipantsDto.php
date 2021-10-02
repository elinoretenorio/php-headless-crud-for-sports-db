<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionParticipants;

class AmericanFootballActionParticipantsDto 
{
    public int $id;
    public int $americanFootballActionPlayId;
    public int $personId;
    public string $participantRole;
    public string $scoreType;
    public int $fieldLine;
    public int $yardage;
    public int $scoreCredit;
    public int $yardsGained;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->americanFootballActionPlayId = (int) ($row["american_football_action_play_id"] ?? 0);
        $this->personId = (int) ($row["person_id"] ?? 0);
        $this->participantRole = $row["participant_role"] ?? "";
        $this->scoreType = $row["score_type"] ?? "";
        $this->fieldLine = (int) ($row["field_line"] ?? 0);
        $this->yardage = (int) ($row["yardage"] ?? 0);
        $this->scoreCredit = (int) ($row["score_credit"] ?? 0);
        $this->yardsGained = (int) ($row["yards_gained"] ?? 0);
    }
}