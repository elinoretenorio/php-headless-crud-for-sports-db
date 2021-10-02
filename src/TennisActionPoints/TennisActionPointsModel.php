<?php

declare(strict_types=1);

namespace Sports\TennisActionPoints;

use JsonSerializable;

class TennisActionPointsModel implements JsonSerializable
{
    private int $id;
    private string $subPeriodId;
    private string $sequenceNumber;
    private string $winType;

    public function __construct(TennisActionPointsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->subPeriodId = $dto->subPeriodId;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->winType = $dto->winType;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSubPeriodId(): string
    {
        return $this->subPeriodId;
    }

    public function setSubPeriodId(string $subPeriodId): void
    {
        $this->subPeriodId = $subPeriodId;
    }

    public function getSequenceNumber(): string
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(string $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function getWinType(): string
    {
        return $this->winType;
    }

    public function setWinType(string $winType): void
    {
        $this->winType = $winType;
    }

    public function toDto(): TennisActionPointsDto
    {
        $dto = new TennisActionPointsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->subPeriodId = $this->subPeriodId ?? "";
        $dto->sequenceNumber = $this->sequenceNumber ?? "";
        $dto->winType = $this->winType ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "sub_period_id" => $this->subPeriodId,
            "sequence_number" => $this->sequenceNumber,
            "win_type" => $this->winType,
        ];
    }
}