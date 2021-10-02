<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPassingStats;

use JsonSerializable;

class AmericanFootballPassingStatsModel implements JsonSerializable
{
    private int $id;
    private string $passesAttempts;
    private string $passesCompletions;
    private string $passesPercentage;
    private string $passesYardsGross;
    private string $passesYardsNet;
    private string $passesYardsLost;
    private string $passesTouchdowns;
    private string $passesTouchdownsPercentage;
    private string $passesInterceptions;
    private string $passesInterceptionsPercentage;
    private string $passesLongest;
    private string $passesAverageYardsPer;
    private string $passerRating;
    private string $receptionsTotal;
    private string $receptionsYards;
    private string $receptionsTouchdowns;
    private string $receptionsFirstDown;
    private string $receptionsLongest;
    private string $receptionsAverageYardsPer;

    public function __construct(AmericanFootballPassingStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->passesAttempts = $dto->passesAttempts;
        $this->passesCompletions = $dto->passesCompletions;
        $this->passesPercentage = $dto->passesPercentage;
        $this->passesYardsGross = $dto->passesYardsGross;
        $this->passesYardsNet = $dto->passesYardsNet;
        $this->passesYardsLost = $dto->passesYardsLost;
        $this->passesTouchdowns = $dto->passesTouchdowns;
        $this->passesTouchdownsPercentage = $dto->passesTouchdownsPercentage;
        $this->passesInterceptions = $dto->passesInterceptions;
        $this->passesInterceptionsPercentage = $dto->passesInterceptionsPercentage;
        $this->passesLongest = $dto->passesLongest;
        $this->passesAverageYardsPer = $dto->passesAverageYardsPer;
        $this->passerRating = $dto->passerRating;
        $this->receptionsTotal = $dto->receptionsTotal;
        $this->receptionsYards = $dto->receptionsYards;
        $this->receptionsTouchdowns = $dto->receptionsTouchdowns;
        $this->receptionsFirstDown = $dto->receptionsFirstDown;
        $this->receptionsLongest = $dto->receptionsLongest;
        $this->receptionsAverageYardsPer = $dto->receptionsAverageYardsPer;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPassesAttempts(): string
    {
        return $this->passesAttempts;
    }

    public function setPassesAttempts(string $passesAttempts): void
    {
        $this->passesAttempts = $passesAttempts;
    }

    public function getPassesCompletions(): string
    {
        return $this->passesCompletions;
    }

    public function setPassesCompletions(string $passesCompletions): void
    {
        $this->passesCompletions = $passesCompletions;
    }

    public function getPassesPercentage(): string
    {
        return $this->passesPercentage;
    }

    public function setPassesPercentage(string $passesPercentage): void
    {
        $this->passesPercentage = $passesPercentage;
    }

    public function getPassesYardsGross(): string
    {
        return $this->passesYardsGross;
    }

    public function setPassesYardsGross(string $passesYardsGross): void
    {
        $this->passesYardsGross = $passesYardsGross;
    }

    public function getPassesYardsNet(): string
    {
        return $this->passesYardsNet;
    }

    public function setPassesYardsNet(string $passesYardsNet): void
    {
        $this->passesYardsNet = $passesYardsNet;
    }

    public function getPassesYardsLost(): string
    {
        return $this->passesYardsLost;
    }

    public function setPassesYardsLost(string $passesYardsLost): void
    {
        $this->passesYardsLost = $passesYardsLost;
    }

    public function getPassesTouchdowns(): string
    {
        return $this->passesTouchdowns;
    }

    public function setPassesTouchdowns(string $passesTouchdowns): void
    {
        $this->passesTouchdowns = $passesTouchdowns;
    }

    public function getPassesTouchdownsPercentage(): string
    {
        return $this->passesTouchdownsPercentage;
    }

    public function setPassesTouchdownsPercentage(string $passesTouchdownsPercentage): void
    {
        $this->passesTouchdownsPercentage = $passesTouchdownsPercentage;
    }

    public function getPassesInterceptions(): string
    {
        return $this->passesInterceptions;
    }

    public function setPassesInterceptions(string $passesInterceptions): void
    {
        $this->passesInterceptions = $passesInterceptions;
    }

    public function getPassesInterceptionsPercentage(): string
    {
        return $this->passesInterceptionsPercentage;
    }

    public function setPassesInterceptionsPercentage(string $passesInterceptionsPercentage): void
    {
        $this->passesInterceptionsPercentage = $passesInterceptionsPercentage;
    }

    public function getPassesLongest(): string
    {
        return $this->passesLongest;
    }

    public function setPassesLongest(string $passesLongest): void
    {
        $this->passesLongest = $passesLongest;
    }

    public function getPassesAverageYardsPer(): string
    {
        return $this->passesAverageYardsPer;
    }

    public function setPassesAverageYardsPer(string $passesAverageYardsPer): void
    {
        $this->passesAverageYardsPer = $passesAverageYardsPer;
    }

    public function getPasserRating(): string
    {
        return $this->passerRating;
    }

    public function setPasserRating(string $passerRating): void
    {
        $this->passerRating = $passerRating;
    }

    public function getReceptionsTotal(): string
    {
        return $this->receptionsTotal;
    }

    public function setReceptionsTotal(string $receptionsTotal): void
    {
        $this->receptionsTotal = $receptionsTotal;
    }

    public function getReceptionsYards(): string
    {
        return $this->receptionsYards;
    }

    public function setReceptionsYards(string $receptionsYards): void
    {
        $this->receptionsYards = $receptionsYards;
    }

    public function getReceptionsTouchdowns(): string
    {
        return $this->receptionsTouchdowns;
    }

    public function setReceptionsTouchdowns(string $receptionsTouchdowns): void
    {
        $this->receptionsTouchdowns = $receptionsTouchdowns;
    }

    public function getReceptionsFirstDown(): string
    {
        return $this->receptionsFirstDown;
    }

    public function setReceptionsFirstDown(string $receptionsFirstDown): void
    {
        $this->receptionsFirstDown = $receptionsFirstDown;
    }

    public function getReceptionsLongest(): string
    {
        return $this->receptionsLongest;
    }

    public function setReceptionsLongest(string $receptionsLongest): void
    {
        $this->receptionsLongest = $receptionsLongest;
    }

    public function getReceptionsAverageYardsPer(): string
    {
        return $this->receptionsAverageYardsPer;
    }

    public function setReceptionsAverageYardsPer(string $receptionsAverageYardsPer): void
    {
        $this->receptionsAverageYardsPer = $receptionsAverageYardsPer;
    }

    public function toDto(): AmericanFootballPassingStatsDto
    {
        $dto = new AmericanFootballPassingStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->passesAttempts = $this->passesAttempts ?? "";
        $dto->passesCompletions = $this->passesCompletions ?? "";
        $dto->passesPercentage = $this->passesPercentage ?? "";
        $dto->passesYardsGross = $this->passesYardsGross ?? "";
        $dto->passesYardsNet = $this->passesYardsNet ?? "";
        $dto->passesYardsLost = $this->passesYardsLost ?? "";
        $dto->passesTouchdowns = $this->passesTouchdowns ?? "";
        $dto->passesTouchdownsPercentage = $this->passesTouchdownsPercentage ?? "";
        $dto->passesInterceptions = $this->passesInterceptions ?? "";
        $dto->passesInterceptionsPercentage = $this->passesInterceptionsPercentage ?? "";
        $dto->passesLongest = $this->passesLongest ?? "";
        $dto->passesAverageYardsPer = $this->passesAverageYardsPer ?? "";
        $dto->passerRating = $this->passerRating ?? "";
        $dto->receptionsTotal = $this->receptionsTotal ?? "";
        $dto->receptionsYards = $this->receptionsYards ?? "";
        $dto->receptionsTouchdowns = $this->receptionsTouchdowns ?? "";
        $dto->receptionsFirstDown = $this->receptionsFirstDown ?? "";
        $dto->receptionsLongest = $this->receptionsLongest ?? "";
        $dto->receptionsAverageYardsPer = $this->receptionsAverageYardsPer ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "passes_attempts" => $this->passesAttempts,
            "passes_completions" => $this->passesCompletions,
            "passes_percentage" => $this->passesPercentage,
            "passes_yards_gross" => $this->passesYardsGross,
            "passes_yards_net" => $this->passesYardsNet,
            "passes_yards_lost" => $this->passesYardsLost,
            "passes_touchdowns" => $this->passesTouchdowns,
            "passes_touchdowns_percentage" => $this->passesTouchdownsPercentage,
            "passes_interceptions" => $this->passesInterceptions,
            "passes_interceptions_percentage" => $this->passesInterceptionsPercentage,
            "passes_longest" => $this->passesLongest,
            "passes_average_yards_per" => $this->passesAverageYardsPer,
            "passer_rating" => $this->passerRating,
            "receptions_total" => $this->receptionsTotal,
            "receptions_yards" => $this->receptionsYards,
            "receptions_touchdowns" => $this->receptionsTouchdowns,
            "receptions_first_down" => $this->receptionsFirstDown,
            "receptions_longest" => $this->receptionsLongest,
            "receptions_average_yards_per" => $this->receptionsAverageYardsPer,
        ];
    }
}