<?php

declare(strict_types=1);

namespace Sports\BaseballActionPitches;

use JsonSerializable;

class BaseballActionPitchesModel implements JsonSerializable
{
    private int $id;
    private int $baseballActionPlayId;
    private int $sequenceNumber;
    private int $baseballDefensiveGroupId;
    private string $umpireCall;
    private string $pitchLocation;
    private string $pitchType;
    private int $pitchVelocity;
    private string $comment;
    private string $trajectoryCoordinates;
    private string $trajectoryFormula;
    private string $ballType;
    private string $strikeType;

    public function __construct(BaseballActionPitchesDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->baseballActionPlayId = $dto->baseballActionPlayId;
        $this->sequenceNumber = $dto->sequenceNumber;
        $this->baseballDefensiveGroupId = $dto->baseballDefensiveGroupId;
        $this->umpireCall = $dto->umpireCall;
        $this->pitchLocation = $dto->pitchLocation;
        $this->pitchType = $dto->pitchType;
        $this->pitchVelocity = $dto->pitchVelocity;
        $this->comment = $dto->comment;
        $this->trajectoryCoordinates = $dto->trajectoryCoordinates;
        $this->trajectoryFormula = $dto->trajectoryFormula;
        $this->ballType = $dto->ballType;
        $this->strikeType = $dto->strikeType;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getBaseballActionPlayId(): int
    {
        return $this->baseballActionPlayId;
    }

    public function setBaseballActionPlayId(int $baseballActionPlayId): void
    {
        $this->baseballActionPlayId = $baseballActionPlayId;
    }

    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    public function getBaseballDefensiveGroupId(): int
    {
        return $this->baseballDefensiveGroupId;
    }

    public function setBaseballDefensiveGroupId(int $baseballDefensiveGroupId): void
    {
        $this->baseballDefensiveGroupId = $baseballDefensiveGroupId;
    }

    public function getUmpireCall(): string
    {
        return $this->umpireCall;
    }

    public function setUmpireCall(string $umpireCall): void
    {
        $this->umpireCall = $umpireCall;
    }

    public function getPitchLocation(): string
    {
        return $this->pitchLocation;
    }

    public function setPitchLocation(string $pitchLocation): void
    {
        $this->pitchLocation = $pitchLocation;
    }

    public function getPitchType(): string
    {
        return $this->pitchType;
    }

    public function setPitchType(string $pitchType): void
    {
        $this->pitchType = $pitchType;
    }

    public function getPitchVelocity(): int
    {
        return $this->pitchVelocity;
    }

    public function setPitchVelocity(int $pitchVelocity): void
    {
        $this->pitchVelocity = $pitchVelocity;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getTrajectoryCoordinates(): string
    {
        return $this->trajectoryCoordinates;
    }

    public function setTrajectoryCoordinates(string $trajectoryCoordinates): void
    {
        $this->trajectoryCoordinates = $trajectoryCoordinates;
    }

    public function getTrajectoryFormula(): string
    {
        return $this->trajectoryFormula;
    }

    public function setTrajectoryFormula(string $trajectoryFormula): void
    {
        $this->trajectoryFormula = $trajectoryFormula;
    }

    public function getBallType(): string
    {
        return $this->ballType;
    }

    public function setBallType(string $ballType): void
    {
        $this->ballType = $ballType;
    }

    public function getStrikeType(): string
    {
        return $this->strikeType;
    }

    public function setStrikeType(string $strikeType): void
    {
        $this->strikeType = $strikeType;
    }

    public function toDto(): BaseballActionPitchesDto
    {
        $dto = new BaseballActionPitchesDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->baseballActionPlayId = (int) ($this->baseballActionPlayId ?? 0);
        $dto->sequenceNumber = (int) ($this->sequenceNumber ?? 0);
        $dto->baseballDefensiveGroupId = (int) ($this->baseballDefensiveGroupId ?? 0);
        $dto->umpireCall = $this->umpireCall ?? "";
        $dto->pitchLocation = $this->pitchLocation ?? "";
        $dto->pitchType = $this->pitchType ?? "";
        $dto->pitchVelocity = (int) ($this->pitchVelocity ?? 0);
        $dto->comment = $this->comment ?? "";
        $dto->trajectoryCoordinates = $this->trajectoryCoordinates ?? "";
        $dto->trajectoryFormula = $this->trajectoryFormula ?? "";
        $dto->ballType = $this->ballType ?? "";
        $dto->strikeType = $this->strikeType ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "baseball_action_play_id" => $this->baseballActionPlayId,
            "sequence_number" => $this->sequenceNumber,
            "baseball_defensive_group_id" => $this->baseballDefensiveGroupId,
            "umpire_call" => $this->umpireCall,
            "pitch_location" => $this->pitchLocation,
            "pitch_type" => $this->pitchType,
            "pitch_velocity" => $this->pitchVelocity,
            "comment" => $this->comment,
            "trajectory_coordinates" => $this->trajectoryCoordinates,
            "trajectory_formula" => $this->trajectoryFormula,
            "ball_type" => $this->ballType,
            "strike_type" => $this->strikeType,
        ];
    }
}