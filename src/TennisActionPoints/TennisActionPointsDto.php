<?php

declare(strict_types=1);

namespace Sports\TennisActionPoints;

class TennisActionPointsDto 
{
    public int $id;
    public string $subPeriodId;
    public string $sequenceNumber;
    public string $winType;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->subPeriodId = $row["sub_period_id"] ?? "";
        $this->sequenceNumber = $row["sequence_number"] ?? "";
        $this->winType = $row["win_type"] ?? "";
    }
}