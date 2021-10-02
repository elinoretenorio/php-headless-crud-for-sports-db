<?php

declare(strict_types=1);

namespace Sports\BaseballActionContactDetails;

class BaseballActionContactDetailsDto 
{
    public int $id;
    public int $baseballActionPitchId;
    public string $location;
    public string $strength;
    public int $velocity;
    public string $comment;
    public string $trajectoryCoordinates;
    public string $trajectoryFormula;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->baseballActionPitchId = (int) ($row["baseball_action_pitch_id"] ?? 0);
        $this->location = $row["location"] ?? "";
        $this->strength = $row["strength"] ?? "";
        $this->velocity = (int) ($row["velocity"] ?? 0);
        $this->comment = $row["comment"] ?? "";
        $this->trajectoryCoordinates = $row["trajectory_coordinates"] ?? "";
        $this->trajectoryFormula = $row["trajectory_formula"] ?? "";
    }
}