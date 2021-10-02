<?php

declare(strict_types=1);

namespace Sports\BasketballReboundingStats;

use JsonSerializable;

class BasketballReboundingStatsModel implements JsonSerializable
{
    private int $id;
    private string $reboundsTotal;
    private string $reboundsPerGame;
    private string $reboundsDefensive;
    private string $reboundsOffensive;
    private string $teamReboundsTotal;
    private string $teamReboundsPerGame;
    private string $teamReboundsDefensive;
    private string $teamReboundsOffensive;

    public function __construct(BasketballReboundingStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->reboundsTotal = $dto->reboundsTotal;
        $this->reboundsPerGame = $dto->reboundsPerGame;
        $this->reboundsDefensive = $dto->reboundsDefensive;
        $this->reboundsOffensive = $dto->reboundsOffensive;
        $this->teamReboundsTotal = $dto->teamReboundsTotal;
        $this->teamReboundsPerGame = $dto->teamReboundsPerGame;
        $this->teamReboundsDefensive = $dto->teamReboundsDefensive;
        $this->teamReboundsOffensive = $dto->teamReboundsOffensive;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getReboundsTotal(): string
    {
        return $this->reboundsTotal;
    }

    public function setReboundsTotal(string $reboundsTotal): void
    {
        $this->reboundsTotal = $reboundsTotal;
    }

    public function getReboundsPerGame(): string
    {
        return $this->reboundsPerGame;
    }

    public function setReboundsPerGame(string $reboundsPerGame): void
    {
        $this->reboundsPerGame = $reboundsPerGame;
    }

    public function getReboundsDefensive(): string
    {
        return $this->reboundsDefensive;
    }

    public function setReboundsDefensive(string $reboundsDefensive): void
    {
        $this->reboundsDefensive = $reboundsDefensive;
    }

    public function getReboundsOffensive(): string
    {
        return $this->reboundsOffensive;
    }

    public function setReboundsOffensive(string $reboundsOffensive): void
    {
        $this->reboundsOffensive = $reboundsOffensive;
    }

    public function getTeamReboundsTotal(): string
    {
        return $this->teamReboundsTotal;
    }

    public function setTeamReboundsTotal(string $teamReboundsTotal): void
    {
        $this->teamReboundsTotal = $teamReboundsTotal;
    }

    public function getTeamReboundsPerGame(): string
    {
        return $this->teamReboundsPerGame;
    }

    public function setTeamReboundsPerGame(string $teamReboundsPerGame): void
    {
        $this->teamReboundsPerGame = $teamReboundsPerGame;
    }

    public function getTeamReboundsDefensive(): string
    {
        return $this->teamReboundsDefensive;
    }

    public function setTeamReboundsDefensive(string $teamReboundsDefensive): void
    {
        $this->teamReboundsDefensive = $teamReboundsDefensive;
    }

    public function getTeamReboundsOffensive(): string
    {
        return $this->teamReboundsOffensive;
    }

    public function setTeamReboundsOffensive(string $teamReboundsOffensive): void
    {
        $this->teamReboundsOffensive = $teamReboundsOffensive;
    }

    public function toDto(): BasketballReboundingStatsDto
    {
        $dto = new BasketballReboundingStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->reboundsTotal = $this->reboundsTotal ?? "";
        $dto->reboundsPerGame = $this->reboundsPerGame ?? "";
        $dto->reboundsDefensive = $this->reboundsDefensive ?? "";
        $dto->reboundsOffensive = $this->reboundsOffensive ?? "";
        $dto->teamReboundsTotal = $this->teamReboundsTotal ?? "";
        $dto->teamReboundsPerGame = $this->teamReboundsPerGame ?? "";
        $dto->teamReboundsDefensive = $this->teamReboundsDefensive ?? "";
        $dto->teamReboundsOffensive = $this->teamReboundsOffensive ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "rebounds_total" => $this->reboundsTotal,
            "rebounds_per_game" => $this->reboundsPerGame,
            "rebounds_defensive" => $this->reboundsDefensive,
            "rebounds_offensive" => $this->reboundsOffensive,
            "team_rebounds_total" => $this->teamReboundsTotal,
            "team_rebounds_per_game" => $this->teamReboundsPerGame,
            "team_rebounds_defensive" => $this->teamReboundsDefensive,
            "team_rebounds_offensive" => $this->teamReboundsOffensive,
        ];
    }
}