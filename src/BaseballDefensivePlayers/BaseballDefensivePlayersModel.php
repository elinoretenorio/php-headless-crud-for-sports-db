<?php

declare(strict_types=1);

namespace Sports\BaseballDefensivePlayers;

use JsonSerializable;

class BaseballDefensivePlayersModel implements JsonSerializable
{
    private int $id;
    private int $baseballDefensiveGroupId;
    private int $playerId;
    private int $positionId;

    public function __construct(BaseballDefensivePlayersDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->baseballDefensiveGroupId = $dto->baseballDefensiveGroupId;
        $this->playerId = $dto->playerId;
        $this->positionId = $dto->positionId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getBaseballDefensiveGroupId(): int
    {
        return $this->baseballDefensiveGroupId;
    }

    public function setBaseballDefensiveGroupId(int $baseballDefensiveGroupId): void
    {
        $this->baseballDefensiveGroupId = $baseballDefensiveGroupId;
    }

    public function getPlayerId(): int
    {
        return $this->playerId;
    }

    public function setPlayerId(int $playerId): void
    {
        $this->playerId = $playerId;
    }

    public function getPositionId(): int
    {
        return $this->positionId;
    }

    public function setPositionId(int $positionId): void
    {
        $this->positionId = $positionId;
    }

    public function toDto(): BaseballDefensivePlayersDto
    {
        $dto = new BaseballDefensivePlayersDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->baseballDefensiveGroupId = (int) ($this->baseballDefensiveGroupId ?? 0);
        $dto->playerId = (int) ($this->playerId ?? 0);
        $dto->positionId = (int) ($this->positionId ?? 0);

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "baseball_defensive_group_id" => $this->baseballDefensiveGroupId,
            "player_id" => $this->playerId,
            "position_id" => $this->positionId,
        ];
    }
}