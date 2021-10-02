<?php

declare(strict_types=1);

namespace Sports\TennisReturnStats;

use JsonSerializable;

class TennisReturnStatsModel implements JsonSerializable
{
    private int $id;
    private string $returnsPlayed;
    private string $matchesPlayed;
    private string $firstServiceReturnPointsWon;
    private string $firstServiceReturnPointsWonPct;
    private string $secondServiceReturnPointsWon;
    private string $secondServiceReturnPointsWonPct;
    private string $returnGamesPlayed;
    private string $returnGamesWon;
    private string $returnGamesWonPct;
    private string $breakPointsPlayed;
    private string $breakPointsConverted;
    private string $breakPointsConvertedPct;

    public function __construct(TennisReturnStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->returnsPlayed = $dto->returnsPlayed;
        $this->matchesPlayed = $dto->matchesPlayed;
        $this->firstServiceReturnPointsWon = $dto->firstServiceReturnPointsWon;
        $this->firstServiceReturnPointsWonPct = $dto->firstServiceReturnPointsWonPct;
        $this->secondServiceReturnPointsWon = $dto->secondServiceReturnPointsWon;
        $this->secondServiceReturnPointsWonPct = $dto->secondServiceReturnPointsWonPct;
        $this->returnGamesPlayed = $dto->returnGamesPlayed;
        $this->returnGamesWon = $dto->returnGamesWon;
        $this->returnGamesWonPct = $dto->returnGamesWonPct;
        $this->breakPointsPlayed = $dto->breakPointsPlayed;
        $this->breakPointsConverted = $dto->breakPointsConverted;
        $this->breakPointsConvertedPct = $dto->breakPointsConvertedPct;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getReturnsPlayed(): string
    {
        return $this->returnsPlayed;
    }

    public function setReturnsPlayed(string $returnsPlayed): void
    {
        $this->returnsPlayed = $returnsPlayed;
    }

    public function getMatchesPlayed(): string
    {
        return $this->matchesPlayed;
    }

    public function setMatchesPlayed(string $matchesPlayed): void
    {
        $this->matchesPlayed = $matchesPlayed;
    }

    public function getFirstServiceReturnPointsWon(): string
    {
        return $this->firstServiceReturnPointsWon;
    }

    public function setFirstServiceReturnPointsWon(string $firstServiceReturnPointsWon): void
    {
        $this->firstServiceReturnPointsWon = $firstServiceReturnPointsWon;
    }

    public function getFirstServiceReturnPointsWonPct(): string
    {
        return $this->firstServiceReturnPointsWonPct;
    }

    public function setFirstServiceReturnPointsWonPct(string $firstServiceReturnPointsWonPct): void
    {
        $this->firstServiceReturnPointsWonPct = $firstServiceReturnPointsWonPct;
    }

    public function getSecondServiceReturnPointsWon(): string
    {
        return $this->secondServiceReturnPointsWon;
    }

    public function setSecondServiceReturnPointsWon(string $secondServiceReturnPointsWon): void
    {
        $this->secondServiceReturnPointsWon = $secondServiceReturnPointsWon;
    }

    public function getSecondServiceReturnPointsWonPct(): string
    {
        return $this->secondServiceReturnPointsWonPct;
    }

    public function setSecondServiceReturnPointsWonPct(string $secondServiceReturnPointsWonPct): void
    {
        $this->secondServiceReturnPointsWonPct = $secondServiceReturnPointsWonPct;
    }

    public function getReturnGamesPlayed(): string
    {
        return $this->returnGamesPlayed;
    }

    public function setReturnGamesPlayed(string $returnGamesPlayed): void
    {
        $this->returnGamesPlayed = $returnGamesPlayed;
    }

    public function getReturnGamesWon(): string
    {
        return $this->returnGamesWon;
    }

    public function setReturnGamesWon(string $returnGamesWon): void
    {
        $this->returnGamesWon = $returnGamesWon;
    }

    public function getReturnGamesWonPct(): string
    {
        return $this->returnGamesWonPct;
    }

    public function setReturnGamesWonPct(string $returnGamesWonPct): void
    {
        $this->returnGamesWonPct = $returnGamesWonPct;
    }

    public function getBreakPointsPlayed(): string
    {
        return $this->breakPointsPlayed;
    }

    public function setBreakPointsPlayed(string $breakPointsPlayed): void
    {
        $this->breakPointsPlayed = $breakPointsPlayed;
    }

    public function getBreakPointsConverted(): string
    {
        return $this->breakPointsConverted;
    }

    public function setBreakPointsConverted(string $breakPointsConverted): void
    {
        $this->breakPointsConverted = $breakPointsConverted;
    }

    public function getBreakPointsConvertedPct(): string
    {
        return $this->breakPointsConvertedPct;
    }

    public function setBreakPointsConvertedPct(string $breakPointsConvertedPct): void
    {
        $this->breakPointsConvertedPct = $breakPointsConvertedPct;
    }

    public function toDto(): TennisReturnStatsDto
    {
        $dto = new TennisReturnStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->returnsPlayed = $this->returnsPlayed ?? "";
        $dto->matchesPlayed = $this->matchesPlayed ?? "";
        $dto->firstServiceReturnPointsWon = $this->firstServiceReturnPointsWon ?? "";
        $dto->firstServiceReturnPointsWonPct = $this->firstServiceReturnPointsWonPct ?? "";
        $dto->secondServiceReturnPointsWon = $this->secondServiceReturnPointsWon ?? "";
        $dto->secondServiceReturnPointsWonPct = $this->secondServiceReturnPointsWonPct ?? "";
        $dto->returnGamesPlayed = $this->returnGamesPlayed ?? "";
        $dto->returnGamesWon = $this->returnGamesWon ?? "";
        $dto->returnGamesWonPct = $this->returnGamesWonPct ?? "";
        $dto->breakPointsPlayed = $this->breakPointsPlayed ?? "";
        $dto->breakPointsConverted = $this->breakPointsConverted ?? "";
        $dto->breakPointsConvertedPct = $this->breakPointsConvertedPct ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "returns_played" => $this->returnsPlayed,
            "matches_played" => $this->matchesPlayed,
            "first_service_return_points_won" => $this->firstServiceReturnPointsWon,
            "first_service_return_points_won_pct" => $this->firstServiceReturnPointsWonPct,
            "second_service_return_points_won" => $this->secondServiceReturnPointsWon,
            "second_service_return_points_won_pct" => $this->secondServiceReturnPointsWonPct,
            "return_games_played" => $this->returnGamesPlayed,
            "return_games_won" => $this->returnGamesWon,
            "return_games_won_pct" => $this->returnGamesWonPct,
            "break_points_played" => $this->breakPointsPlayed,
            "break_points_converted" => $this->breakPointsConverted,
            "break_points_converted_pct" => $this->breakPointsConvertedPct,
        ];
    }
}