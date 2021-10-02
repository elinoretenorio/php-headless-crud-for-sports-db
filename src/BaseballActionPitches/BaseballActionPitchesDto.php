<?php

declare(strict_types=1);

namespace Sports\BaseballActionPitches;

class BaseballActionPitchesDto 
{
    public int $id;
    public int $baseballActionPlayId;
    public int $sequenceNumber;
    public int $baseballDefensiveGroupId;
    public string $umpireCall;
    public string $pitchLocation;
    public string $pitchType;
    public int $pitchVelocity;
    public string $comment;
    public string $trajectoryCoordinates;
    public string $trajectoryFormula;
    public string $ballType;
    public string $strikeType;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->baseballActionPlayId = (int) ($row["baseball_action_play_id"] ?? 0);
        $this->sequenceNumber = (int) ($row["sequence_number"] ?? 0);
        $this->baseballDefensiveGroupId = (int) ($row["baseball_defensive_group_id"] ?? 0);
        $this->umpireCall = $row["umpire_call"] ?? "";
        $this->pitchLocation = $row["pitch_location"] ?? "";
        $this->pitchType = $row["pitch_type"] ?? "";
        $this->pitchVelocity = (int) ($row["pitch_velocity"] ?? 0);
        $this->comment = $row["comment"] ?? "";
        $this->trajectoryCoordinates = $row["trajectory_coordinates"] ?? "";
        $this->trajectoryFormula = $row["trajectory_formula"] ?? "";
        $this->ballType = $row["ball_type"] ?? "";
        $this->strikeType = $row["strike_type"] ?? "";
    }
}