<?php

declare(strict_types=1);

namespace Sports\BaseballActionContactDetails;

use JsonSerializable;

class BaseballActionContactDetailsModel implements JsonSerializable
{
    private int $id;
    private int $baseballActionPitchId;
    private string $location;
    private string $strength;
    private int $velocity;
    private string $comment;
    private string $trajectoryCoordinates;
    private string $trajectoryFormula;

    public function __construct(BaseballActionContactDetailsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->baseballActionPitchId = $dto->baseballActionPitchId;
        $this->location = $dto->location;
        $this->strength = $dto->strength;
        $this->velocity = $dto->velocity;
        $this->comment = $dto->comment;
        $this->trajectoryCoordinates = $dto->trajectoryCoordinates;
        $this->trajectoryFormula = $dto->trajectoryFormula;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getBaseballActionPitchId(): int
    {
        return $this->baseballActionPitchId;
    }

    public function setBaseballActionPitchId(int $baseballActionPitchId): void
    {
        $this->baseballActionPitchId = $baseballActionPitchId;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getStrength(): string
    {
        return $this->strength;
    }

    public function setStrength(string $strength): void
    {
        $this->strength = $strength;
    }

    public function getVelocity(): int
    {
        return $this->velocity;
    }

    public function setVelocity(int $velocity): void
    {
        $this->velocity = $velocity;
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

    public function toDto(): BaseballActionContactDetailsDto
    {
        $dto = new BaseballActionContactDetailsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->baseballActionPitchId = (int) ($this->baseballActionPitchId ?? 0);
        $dto->location = $this->location ?? "";
        $dto->strength = $this->strength ?? "";
        $dto->velocity = (int) ($this->velocity ?? 0);
        $dto->comment = $this->comment ?? "";
        $dto->trajectoryCoordinates = $this->trajectoryCoordinates ?? "";
        $dto->trajectoryFormula = $this->trajectoryFormula ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "baseball_action_pitch_id" => $this->baseballActionPitchId,
            "location" => $this->location,
            "strength" => $this->strength,
            "velocity" => $this->velocity,
            "comment" => $this->comment,
            "trajectory_coordinates" => $this->trajectoryCoordinates,
            "trajectory_formula" => $this->trajectoryFormula,
        ];
    }
}