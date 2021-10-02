<?php

declare(strict_types=1);

namespace Sports\BaseballActionSubstitutions;

class BaseballActionSubstitutionsDto 
{
    public int $id;
    public int $baseballEventStateId;
    public int $sequenceNumber;
    public string $personType;
    public int $personOriginalId;
    public int $personOriginalPositionId;
    public int $personOriginalLineupSlot;
    public int $personReplacingId;
    public int $personReplacingPositionId;
    public int $personReplacingLineupSlot;
    public string $substitutionReason;
    public string $comment;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->baseballEventStateId = (int) ($row["baseball_event_state_id"] ?? 0);
        $this->sequenceNumber = (int) ($row["sequence_number"] ?? 0);
        $this->personType = $row["person_type"] ?? "";
        $this->personOriginalId = (int) ($row["person_original_id"] ?? 0);
        $this->personOriginalPositionId = (int) ($row["person_original_position_id"] ?? 0);
        $this->personOriginalLineupSlot = (int) ($row["person_original_lineup_slot"] ?? 0);
        $this->personReplacingId = (int) ($row["person_replacing_id"] ?? 0);
        $this->personReplacingPositionId = (int) ($row["person_replacing_position_id"] ?? 0);
        $this->personReplacingLineupSlot = (int) ($row["person_replacing_lineup_slot"] ?? 0);
        $this->substitutionReason = $row["substitution_reason"] ?? "";
        $this->comment = $row["comment"] ?? "";
    }
}