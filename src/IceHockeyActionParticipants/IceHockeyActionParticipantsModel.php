<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionParticipants;

use JsonSerializable;

class IceHockeyActionParticipantsModel implements JsonSerializable
{
    private int $id;
    private int $iceHockeyActionPlayId;
    private int $personId;
    private string $participantRole;
    private int $pointCredit;

    public function __construct(IceHockeyActionParticipantsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->iceHockeyActionPlayId = $dto->iceHockeyActionPlayId;
        $this->personId = $dto->personId;
        $this->participantRole = $dto->participantRole;
        $this->pointCredit = $dto->pointCredit;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIceHockeyActionPlayId(): int
    {
        return $this->iceHockeyActionPlayId;
    }

    public function setIceHockeyActionPlayId(int $iceHockeyActionPlayId): void
    {
        $this->iceHockeyActionPlayId = $iceHockeyActionPlayId;
    }

    public function getPersonId(): int
    {
        return $this->personId;
    }

    public function setPersonId(int $personId): void
    {
        $this->personId = $personId;
    }

    public function getParticipantRole(): string
    {
        return $this->participantRole;
    }

    public function setParticipantRole(string $participantRole): void
    {
        $this->participantRole = $participantRole;
    }

    public function getPointCredit(): int
    {
        return $this->pointCredit;
    }

    public function setPointCredit(int $pointCredit): void
    {
        $this->pointCredit = $pointCredit;
    }

    public function toDto(): IceHockeyActionParticipantsDto
    {
        $dto = new IceHockeyActionParticipantsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->iceHockeyActionPlayId = (int) ($this->iceHockeyActionPlayId ?? 0);
        $dto->personId = (int) ($this->personId ?? 0);
        $dto->participantRole = $this->participantRole ?? "";
        $dto->pointCredit = (int) ($this->pointCredit ?? 0);

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "ice_hockey_action_play_id" => $this->iceHockeyActionPlayId,
            "person_id" => $this->personId,
            "participant_role" => $this->participantRole,
            "point_credit" => $this->pointCredit,
        ];
    }
}