<?php

declare(strict_types=1);

namespace Sports\TennisServiceStats;

use JsonSerializable;

class TennisServiceStatsModel implements JsonSerializable
{
    private int $id;
    private string $servicesPlayed;
    private string $matchesPlayed;
    private string $aces;
    private string $firstServicesGood;
    private string $firstServicesGoodPct;
    private string $firstServicePointsWon;
    private string $firstServicePointsWonPct;
    private string $secondServicePointsWon;
    private string $secondServicePointsWonPct;
    private string $serviceGamesPlayed;
    private string $serviceGamesWon;
    private string $serviceGamesWonPct;
    private string $breakPointsPlayed;
    private string $breakPointsSaved;
    private string $breakPointsSavedPct;

    public function __construct(TennisServiceStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->servicesPlayed = $dto->servicesPlayed;
        $this->matchesPlayed = $dto->matchesPlayed;
        $this->aces = $dto->aces;
        $this->firstServicesGood = $dto->firstServicesGood;
        $this->firstServicesGoodPct = $dto->firstServicesGoodPct;
        $this->firstServicePointsWon = $dto->firstServicePointsWon;
        $this->firstServicePointsWonPct = $dto->firstServicePointsWonPct;
        $this->secondServicePointsWon = $dto->secondServicePointsWon;
        $this->secondServicePointsWonPct = $dto->secondServicePointsWonPct;
        $this->serviceGamesPlayed = $dto->serviceGamesPlayed;
        $this->serviceGamesWon = $dto->serviceGamesWon;
        $this->serviceGamesWonPct = $dto->serviceGamesWonPct;
        $this->breakPointsPlayed = $dto->breakPointsPlayed;
        $this->breakPointsSaved = $dto->breakPointsSaved;
        $this->breakPointsSavedPct = $dto->breakPointsSavedPct;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getServicesPlayed(): string
    {
        return $this->servicesPlayed;
    }

    public function setServicesPlayed(string $servicesPlayed): void
    {
        $this->servicesPlayed = $servicesPlayed;
    }

    public function getMatchesPlayed(): string
    {
        return $this->matchesPlayed;
    }

    public function setMatchesPlayed(string $matchesPlayed): void
    {
        $this->matchesPlayed = $matchesPlayed;
    }

    public function getAces(): string
    {
        return $this->aces;
    }

    public function setAces(string $aces): void
    {
        $this->aces = $aces;
    }

    public function getFirstServicesGood(): string
    {
        return $this->firstServicesGood;
    }

    public function setFirstServicesGood(string $firstServicesGood): void
    {
        $this->firstServicesGood = $firstServicesGood;
    }

    public function getFirstServicesGoodPct(): string
    {
        return $this->firstServicesGoodPct;
    }

    public function setFirstServicesGoodPct(string $firstServicesGoodPct): void
    {
        $this->firstServicesGoodPct = $firstServicesGoodPct;
    }

    public function getFirstServicePointsWon(): string
    {
        return $this->firstServicePointsWon;
    }

    public function setFirstServicePointsWon(string $firstServicePointsWon): void
    {
        $this->firstServicePointsWon = $firstServicePointsWon;
    }

    public function getFirstServicePointsWonPct(): string
    {
        return $this->firstServicePointsWonPct;
    }

    public function setFirstServicePointsWonPct(string $firstServicePointsWonPct): void
    {
        $this->firstServicePointsWonPct = $firstServicePointsWonPct;
    }

    public function getSecondServicePointsWon(): string
    {
        return $this->secondServicePointsWon;
    }

    public function setSecondServicePointsWon(string $secondServicePointsWon): void
    {
        $this->secondServicePointsWon = $secondServicePointsWon;
    }

    public function getSecondServicePointsWonPct(): string
    {
        return $this->secondServicePointsWonPct;
    }

    public function setSecondServicePointsWonPct(string $secondServicePointsWonPct): void
    {
        $this->secondServicePointsWonPct = $secondServicePointsWonPct;
    }

    public function getServiceGamesPlayed(): string
    {
        return $this->serviceGamesPlayed;
    }

    public function setServiceGamesPlayed(string $serviceGamesPlayed): void
    {
        $this->serviceGamesPlayed = $serviceGamesPlayed;
    }

    public function getServiceGamesWon(): string
    {
        return $this->serviceGamesWon;
    }

    public function setServiceGamesWon(string $serviceGamesWon): void
    {
        $this->serviceGamesWon = $serviceGamesWon;
    }

    public function getServiceGamesWonPct(): string
    {
        return $this->serviceGamesWonPct;
    }

    public function setServiceGamesWonPct(string $serviceGamesWonPct): void
    {
        $this->serviceGamesWonPct = $serviceGamesWonPct;
    }

    public function getBreakPointsPlayed(): string
    {
        return $this->breakPointsPlayed;
    }

    public function setBreakPointsPlayed(string $breakPointsPlayed): void
    {
        $this->breakPointsPlayed = $breakPointsPlayed;
    }

    public function getBreakPointsSaved(): string
    {
        return $this->breakPointsSaved;
    }

    public function setBreakPointsSaved(string $breakPointsSaved): void
    {
        $this->breakPointsSaved = $breakPointsSaved;
    }

    public function getBreakPointsSavedPct(): string
    {
        return $this->breakPointsSavedPct;
    }

    public function setBreakPointsSavedPct(string $breakPointsSavedPct): void
    {
        $this->breakPointsSavedPct = $breakPointsSavedPct;
    }

    public function toDto(): TennisServiceStatsDto
    {
        $dto = new TennisServiceStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->servicesPlayed = $this->servicesPlayed ?? "";
        $dto->matchesPlayed = $this->matchesPlayed ?? "";
        $dto->aces = $this->aces ?? "";
        $dto->firstServicesGood = $this->firstServicesGood ?? "";
        $dto->firstServicesGoodPct = $this->firstServicesGoodPct ?? "";
        $dto->firstServicePointsWon = $this->firstServicePointsWon ?? "";
        $dto->firstServicePointsWonPct = $this->firstServicePointsWonPct ?? "";
        $dto->secondServicePointsWon = $this->secondServicePointsWon ?? "";
        $dto->secondServicePointsWonPct = $this->secondServicePointsWonPct ?? "";
        $dto->serviceGamesPlayed = $this->serviceGamesPlayed ?? "";
        $dto->serviceGamesWon = $this->serviceGamesWon ?? "";
        $dto->serviceGamesWonPct = $this->serviceGamesWonPct ?? "";
        $dto->breakPointsPlayed = $this->breakPointsPlayed ?? "";
        $dto->breakPointsSaved = $this->breakPointsSaved ?? "";
        $dto->breakPointsSavedPct = $this->breakPointsSavedPct ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "services_played" => $this->servicesPlayed,
            "matches_played" => $this->matchesPlayed,
            "aces" => $this->aces,
            "first_services_good" => $this->firstServicesGood,
            "first_services_good_pct" => $this->firstServicesGoodPct,
            "first_service_points_won" => $this->firstServicePointsWon,
            "first_service_points_won_pct" => $this->firstServicePointsWonPct,
            "second_service_points_won" => $this->secondServicePointsWon,
            "second_service_points_won_pct" => $this->secondServicePointsWonPct,
            "service_games_played" => $this->serviceGamesPlayed,
            "service_games_won" => $this->serviceGamesWon,
            "service_games_won_pct" => $this->serviceGamesWonPct,
            "break_points_played" => $this->breakPointsPlayed,
            "break_points_saved" => $this->breakPointsSaved,
            "break_points_saved_pct" => $this->breakPointsSavedPct,
        ];
    }
}