<?php

declare(strict_types=1);

namespace Sports\TennisActionVolleys;

use JsonSerializable;

class TennisActionVolleysModel implements JsonSerializable
{
    private int $id;
    private string $sequenceNumber;
    private int $tennisActionPointsId;
    private string $landingLocation;
    private string $swingType;
    private string $result;
    private string $spinType;
    private string $trajectoryDetails;

    public function __construct(TennisActionVolleysDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->tennisActionPointsId = $dto->tennisActionPointsId;
        $this->landingLocation = $dto->landingLocation;
        $this->swingType = $dto->swingType;
        $this->result = $dto->result;
        $this->spinType = $dto->spinType;
        $this->trajectoryDetails = $dto->trajectoryDetails;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSequenceNumber(): string
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(string $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function getTennisActionPointsId(): int
    {
        return $this->tennisActionPointsId;
    }

    public function setTennisActionPointsId(int $tennisActionPointsId): void
    {
        $this->tennisActionPointsId = $tennisActionPointsId;
    }

    public function getLandingLocation(): string
    {
        return $this->landingLocation;
    }

    public function setLandingLocation(string $landingLocation): void
    {
        $this->landingLocation = $landingLocation;
    }

    public function getSwingType(): string
    {
        return $this->swingType;
    }

    public function setSwingType(string $swingType): void
    {
        $this->swingType = $swingType;
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function setResult(string $result): void
    {
        $this->result = $result;
    }

    public function getSpinType(): string
    {
        return $this->spinType;
    }

    public function setSpinType(string $spinType): void
    {
        $this->spinType = $spinType;
    }

    public function getTrajectoryDetails(): string
    {
        return $this->trajectoryDetails;
    }

    public function setTrajectoryDetails(string $trajectoryDetails): void
    {
        $this->trajectoryDetails = $trajectoryDetails;
    }

    public function toDto(): TennisActionVolleysDto
    {
        $dto = new TennisActionVolleysDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->sequenceNumber = $this->sequenceNumber ?? "";
        $dto->tennisActionPointsId = (int) ($this->tennisActionPointsId ?? 0);
        $dto->landingLocation = $this->landingLocation ?? "";
        $dto->swingType = $this->swingType ?? "";
        $dto->result = $this->result ?? "";
        $dto->spinType = $this->spinType ?? "";
        $dto->trajectoryDetails = $this->trajectoryDetails ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "sequence_number" => $this->sequenceNumber,
            "tennis_action_points_id" => $this->tennisActionPointsId,
            "landing_location" => $this->landingLocation,
            "swing_type" => $this->swingType,
            "result" => $this->result,
            "spin_type" => $this->spinType,
            "trajectory_details" => $this->trajectoryDetails,
        ];
    }
}