<?php

declare(strict_types=1);

namespace Sports\BaseballDefensivePlayers;

class BaseballDefensivePlayersDto 
{
    public int $id;
    public int $baseballDefensiveGroupId;
    public int $playerId;
    public int $positionId;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->baseballDefensiveGroupId = (int) ($row["baseball_defensive_group_id"] ?? 0);
        $this->playerId = (int) ($row["player_id"] ?? 0);
        $this->positionId = (int) ($row["position_id"] ?? 0);
    }
}