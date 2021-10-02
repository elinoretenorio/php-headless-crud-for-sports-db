<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionParticipants;

class IceHockeyActionParticipantsDto 
{
    public int $id;
    public int $iceHockeyActionPlayId;
    public int $personId;
    public string $participantRole;
    public int $pointCredit;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->iceHockeyActionPlayId = (int) ($row["ice_hockey_action_play_id"] ?? 0);
        $this->personId = (int) ($row["person_id"] ?? 0);
        $this->participantRole = $row["participant_role"] ?? "";
        $this->pointCredit = (int) ($row["point_credit"] ?? 0);
    }
}