<?php

declare(strict_types=1);

namespace Sports\BaseballActionSubstitutions;

use JsonSerializable;

class BaseballActionSubstitutionsModel implements JsonSerializable
{
    private int $id;
    private int $baseballEventStateId;
    private int $sequenceNumber;
    private string $personType;
    private int $personOriginalId;
    private int $personOriginalPositionId;
    private int $personOriginalLineupSlot;
    private int $personReplacingId;
    private int $personReplacingPositionId;
    private int $personReplacingLineupSlot;
    private string $substitutionReason;
    private string $comment;

    public function __construct(BaseballActionSubstitutionsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->baseballEventStateId = $dto->baseballEventStateId;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->personType = $dto->personType;
        $this->personOriginalId = $dto->personOriginalId;
        $this->personOriginalPositionId = $dto->personOriginalPositionId;
        $this->personOriginalLineupSlot = $dto->personOriginalLineupSlot;
        $this->personReplacingId = $dto->personReplacingId;
        $this->personReplacingPositionId = $dto->personReplacingPositionId;
        $this->personReplacingLineupSlot = $dto->personReplacingLineupSlot;
        $this->substitutionReason = $dto->substitutionReason;
        $this->comment = $dto->comment;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getBaseballEventStateId(): int
    {
        return $this->baseballEventStateId;
    }

    public function setBaseballEventStateId(int $baseballEventStateId): void
    {
        $this->baseballEventStateId = $baseballEventStateId;
    }

    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function getPersonType(): string
    {
        return $this->personType;
    }

    public function setPersonType(string $personType): void
    {
        $this->personType = $personType;
    }

    public function getPersonOriginalId(): int
    {
        return $this->personOriginalId;
    }

    public function setPersonOriginalId(int $personOriginalId): void
    {
        $this->personOriginalId = $personOriginalId;
    }

    public function getPersonOriginalPositionId(): int
    {
        return $this->personOriginalPositionId;
    }

    public function setPersonOriginalPositionId(int $personOriginalPositionId): void
    {
        $this->personOriginalPositionId = $personOriginalPositionId;
    }

    public function getPersonOriginalLineupSlot(): int
    {
        return $this->personOriginalLineupSlot;
    }

    public function setPersonOriginalLineupSlot(int $personOriginalLineupSlot): void
    {
        $this->personOriginalLineupSlot = $personOriginalLineupSlot;
    }

    public function getPersonReplacingId(): int
    {
        return $this->personReplacingId;
    }

    public function setPersonReplacingId(int $personReplacingId): void
    {
        $this->personReplacingId = $personReplacingId;
    }

    public function getPersonReplacingPositionId(): int
    {
        return $this->personReplacingPositionId;
    }

    public function setPersonReplacingPositionId(int $personReplacingPositionId): void
    {
        $this->personReplacingPositionId = $personReplacingPositionId;
    }

    public function getPersonReplacingLineupSlot(): int
    {
        return $this->personReplacingLineupSlot;
    }

    public function setPersonReplacingLineupSlot(int $personReplacingLineupSlot): void
    {
        $this->personReplacingLineupSlot = $personReplacingLineupSlot;
    }

    public function getSubstitutionReason(): string
    {
        return $this->substitutionReason;
    }

    public function setSubstitutionReason(string $substitutionReason): void
    {
        $this->substitutionReason = $substitutionReason;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function toDto(): BaseballActionSubstitutionsDto
    {
        $dto = new BaseballActionSubstitutionsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->baseballEventStateId = (int) ($this->baseballEventStateId ?? 0);
        $dto->sequenceNumber = (int) ($this->sequenceNumber ?? 0);
        $dto->personType = $this->personType ?? "";
        $dto->personOriginalId = (int) ($this->personOriginalId ?? 0);
        $dto->personOriginalPositionId = (int) ($this->personOriginalPositionId ?? 0);
        $dto->personOriginalLineupSlot = (int) ($this->personOriginalLineupSlot ?? 0);
        $dto->personReplacingId = (int) ($this->personReplacingId ?? 0);
        $dto->personReplacingPositionId = (int) ($this->personReplacingPositionId ?? 0);
        $dto->personReplacingLineupSlot = (int) ($this->personReplacingLineupSlot ?? 0);
        $dto->substitutionReason = $this->substitutionReason ?? "";
        $dto->comment = $this->comment ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "baseball_event_state_id" => $this->baseballEventStateId,
            "sequence_number" => $this->sequenceNumber,
            "person_type" => $this->personType,
            "person_original_id" => $this->personOriginalId,
            "person_original_position_id" => $this->personOriginalPositionId,
            "person_original_lineup_slot" => $this->personOriginalLineupSlot,
            "person_replacing_id" => $this->personReplacingId,
            "person_replacing_position_id" => $this->personReplacingPositionId,
            "person_replacing_lineup_slot" => $this->personReplacingLineupSlot,
            "substitution_reason" => $this->substitutionReason,
            "comment" => $this->comment,
        ];
    }
}