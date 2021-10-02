<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionParticipants;

use JsonSerializable;

class AmericanFootballActionParticipantsModel implements JsonSerializable
{
    private int $id;
    private int $americanFootballActionPlayId;
    private int $personId;
    private string $participantRole;
    private string $scoreType;
    private int $fieldLine;
    private int $yardage;
    private int $scoreCredit;
    private int $yardsGained;

    public function __construct(AmericanFootballActionParticipantsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->americanFootballActionPlayId = $dto->americanFootballActionPlayId;
        $this->personId = $dto->personId;
        $this->participantRole = $dto->participantRole;
        $this->scoreType = $dto->scoreType;
        $this->fieldLine = $dto->fieldLine;
        $this->yardage = $dto->yardage;
        $this->scoreCredit = $dto->scoreCredit;
        $this->yardsGained = $dto->yardsGained;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAmericanFootballActionPlayId(): int
    {
        return $this->americanFootballActionPlayId;
    }

    public function setAmericanFootballActionPlayId(int $americanFootballActionPlayId): void
    {
        $this->americanFootballActionPlayId = $americanFootballActionPlayId;
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

    public function getScoreType(): string
    {
        return $this->scoreType;
    }

    public function setScoreType(string $scoreType): void
    {
        $this->scoreType = $scoreType;
    }

    public function getFieldLine(): int
    {
        return $this->fieldLine;
    }

    public function setFieldLine(int $fieldLine): void
    {
        $this->fieldLine = $fieldLine;
    }

    public function getYardage(): int
    {
        return $this->yardage;
    }

    public function setYardage(int $yardage): void
    {
        $this->yardage = $yardage;
    }

    public function getScoreCredit(): int
    {
        return $this->scoreCredit;
    }

    public function setScoreCredit(int $scoreCredit): void
    {
        $this->scoreCredit = $scoreCredit;
    }

    public function getYardsGained(): int
    {
        return $this->yardsGained;
    }

    public function setYardsGained(int $yardsGained): void
    {
        $this->yardsGained = $yardsGained;
    }

    public function toDto(): AmericanFootballActionParticipantsDto
    {
        $dto = new AmericanFootballActionParticipantsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->americanFootballActionPlayId = (int) ($this->americanFootballActionPlayId ?? 0);
        $dto->personId = (int) ($this->personId ?? 0);
        $dto->participantRole = $this->participantRole ?? "";
        $dto->scoreType = $this->scoreType ?? "";
        $dto->fieldLine = (int) ($this->fieldLine ?? 0);
        $dto->yardage = (int) ($this->yardage ?? 0);
        $dto->scoreCredit = (int) ($this->scoreCredit ?? 0);
        $dto->yardsGained = (int) ($this->yardsGained ?? 0);

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "american_football_action_play_id" => $this->americanFootballActionPlayId,
            "person_id" => $this->personId,
            "participant_role" => $this->participantRole,
            "score_type" => $this->scoreType,
            "field_line" => $this->fieldLine,
            "yardage" => $this->yardage,
            "score_credit" => $this->scoreCredit,
            "yards_gained" => $this->yardsGained,
        ];
    }
}