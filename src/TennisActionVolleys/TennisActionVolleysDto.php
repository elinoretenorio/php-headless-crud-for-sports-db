<?php

declare(strict_types=1);

namespace Sports\TennisActionVolleys;

class TennisActionVolleysDto 
{
    public int $id;
    public string $sequenceNumber;
    public int $tennisActionPointsId;
    public string $landingLocation;
    public string $swingType;
    public string $result;
    public string $spinType;
    public string $trajectoryDetails;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->sequenceNumber = $row["sequence_number"] ?? "";
        $this->tennisActionPointsId = (int) ($row["tennis_action_points_id"] ?? 0);
        $this->landingLocation = $row["landing_location"] ?? "";
        $this->swingType = $row["swing_type"] ?? "";
        $this->result = $row["result"] ?? "";
        $this->spinType = $row["spin_type"] ?? "";
        $this->trajectoryDetails = $row["trajectory_details"] ?? "";
    }
}