<?php

declare(strict_types=1);

namespace Sports\BasketballDefensiveStats;

use JsonSerializable;

class BasketballDefensiveStatsModel implements JsonSerializable
{
    private int $id;
    private string $stealsTotal;
    private string $stealsPerGame;
    private string $blocksTotal;
    private string $blocksPerGame;

    public function __construct(BasketballDefensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->stealsTotal = $dto->stealsTotal;
        $this->stealsPerGame = $dto->stealsPerGame;
        $this->blocksTotal = $dto->blocksTotal;
        $this->blocksPerGame = $dto->blocksPerGame;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getStealsTotal(): string
    {
        return $this->stealsTotal;
    }

    public function setStealsTotal(string $stealsTotal): void
    {
        $this->stealsTotal = $stealsTotal;
    }

    public function getStealsPerGame(): string
    {
        return $this->stealsPerGame;
    }

    public function setStealsPerGame(string $stealsPerGame): void
    {
        $this->stealsPerGame = $stealsPerGame;
    }

    public function getBlocksTotal(): string
    {
        return $this->blocksTotal;
    }

    public function setBlocksTotal(string $blocksTotal): void
    {
        $this->blocksTotal = $blocksTotal;
    }

    public function getBlocksPerGame(): string
    {
        return $this->blocksPerGame;
    }

    public function setBlocksPerGame(string $blocksPerGame): void
    {
        $this->blocksPerGame = $blocksPerGame;
    }

    public function toDto(): BasketballDefensiveStatsDto
    {
        $dto = new BasketballDefensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->stealsTotal = $this->stealsTotal ?? "";
        $dto->stealsPerGame = $this->stealsPerGame ?? "";
        $dto->blocksTotal = $this->blocksTotal ?? "";
        $dto->blocksPerGame = $this->blocksPerGame ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "steals_total" => $this->stealsTotal,
            "steals_per_game" => $this->stealsPerGame,
            "blocks_total" => $this->blocksTotal,
            "blocks_per_game" => $this->blocksPerGame,
        ];
    }
}