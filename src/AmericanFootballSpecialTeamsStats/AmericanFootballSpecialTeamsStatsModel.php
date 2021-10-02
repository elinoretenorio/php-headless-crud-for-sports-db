<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSpecialTeamsStats;

use JsonSerializable;

class AmericanFootballSpecialTeamsStatsModel implements JsonSerializable
{
    private int $id;
    private string $returnsPuntTotal;
    private string $returnsPuntYards;
    private string $returnsPuntAverage;
    private string $returnsPuntLongest;
    private string $returnsPuntTouchdown;
    private string $returnsKickoffTotal;
    private string $returnsKickoffYards;
    private string $returnsKickoffAverage;
    private string $returnsKickoffLongest;
    private string $returnsKickoffTouchdown;
    private string $returnsTotal;
    private string $returnsYards;
    private string $puntsTotal;
    private string $puntsYardsGross;
    private string $puntsYardsNet;
    private string $puntsLongest;
    private string $puntsInside20;
    private string $puntsInside20Percentage;
    private string $puntsAverage;
    private string $puntsBlocked;
    private string $touchbacksTotal;
    private string $touchbacksTotalPercentage;
    private string $touchbacksKickoffs;
    private string $touchbacksKickoffsPercentage;
    private string $touchbacksPunts;
    private string $touchbacksPuntsPercentage;
    private string $touchbacksInterceptions;
    private string $touchbacksInterceptionsPercentage;
    private string $fairCatches;

    public function __construct(AmericanFootballSpecialTeamsStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->returnsPuntTotal = $dto->returnsPuntTotal;
        $this->returnsPuntYards = $dto->returnsPuntYards;
        $this->returnsPuntAverage = $dto->returnsPuntAverage;
        $this->returnsPuntLongest = $dto->returnsPuntLongest;
        $this->returnsPuntTouchdown = $dto->returnsPuntTouchdown;
        $this->returnsKickoffTotal = $dto->returnsKickoffTotal;
        $this->returnsKickoffYards = $dto->returnsKickoffYards;
        $this->returnsKickoffAverage = $dto->returnsKickoffAverage;
        $this->returnsKickoffLongest = $dto->returnsKickoffLongest;
        $this->returnsKickoffTouchdown = $dto->returnsKickoffTouchdown;
        $this->returnsTotal = $dto->returnsTotal;
        $this->returnsYards = $dto->returnsYards;
        $this->puntsTotal = $dto->puntsTotal;
        $this->puntsYardsGross = $dto->puntsYardsGross;
        $this->puntsYardsNet = $dto->puntsYardsNet;
        $this->puntsLongest = $dto->puntsLongest;
        $this->puntsInside20 = $dto->puntsInside20;
        $this->puntsInside20Percentage = $dto->puntsInside20Percentage;
        $this->puntsAverage = $dto->puntsAverage;
        $this->puntsBlocked = $dto->puntsBlocked;
        $this->touchbacksTotal = $dto->touchbacksTotal;
        $this->touchbacksTotalPercentage = $dto->touchbacksTotalPercentage;
        $this->touchbacksKickoffs = $dto->touchbacksKickoffs;
        $this->touchbacksKickoffsPercentage = $dto->touchbacksKickoffsPercentage;
        $this->touchbacksPunts = $dto->touchbacksPunts;
        $this->touchbacksPuntsPercentage = $dto->touchbacksPuntsPercentage;
        $this->touchbacksInterceptions = $dto->touchbacksInterceptions;
        $this->touchbacksInterceptionsPercentage = $dto->touchbacksInterceptionsPercentage;
        $this->fairCatches = $dto->fairCatches;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getReturnsPuntTotal(): string
    {
        return $this->returnsPuntTotal;
    }

    public function setReturnsPuntTotal(string $returnsPuntTotal): void
    {
        $this->returnsPuntTotal = $returnsPuntTotal;
    }

    public function getReturnsPuntYards(): string
    {
        return $this->returnsPuntYards;
    }

    public function setReturnsPuntYards(string $returnsPuntYards): void
    {
        $this->returnsPuntYards = $returnsPuntYards;
    }

    public function getReturnsPuntAverage(): string
    {
        return $this->returnsPuntAverage;
    }

    public function setReturnsPuntAverage(string $returnsPuntAverage): void
    {
        $this->returnsPuntAverage = $returnsPuntAverage;
    }

    public function getReturnsPuntLongest(): string
    {
        return $this->returnsPuntLongest;
    }

    public function setReturnsPuntLongest(string $returnsPuntLongest): void
    {
        $this->returnsPuntLongest = $returnsPuntLongest;
    }

    public function getReturnsPuntTouchdown(): string
    {
        return $this->returnsPuntTouchdown;
    }

    public function setReturnsPuntTouchdown(string $returnsPuntTouchdown): void
    {
        $this->returnsPuntTouchdown = $returnsPuntTouchdown;
    }

    public function getReturnsKickoffTotal(): string
    {
        return $this->returnsKickoffTotal;
    }

    public function setReturnsKickoffTotal(string $returnsKickoffTotal): void
    {
        $this->returnsKickoffTotal = $returnsKickoffTotal;
    }

    public function getReturnsKickoffYards(): string
    {
        return $this->returnsKickoffYards;
    }

    public function setReturnsKickoffYards(string $returnsKickoffYards): void
    {
        $this->returnsKickoffYards = $returnsKickoffYards;
    }

    public function getReturnsKickoffAverage(): string
    {
        return $this->returnsKickoffAverage;
    }

    public function setReturnsKickoffAverage(string $returnsKickoffAverage): void
    {
        $this->returnsKickoffAverage = $returnsKickoffAverage;
    }

    public function getReturnsKickoffLongest(): string
    {
        return $this->returnsKickoffLongest;
    }

    public function setReturnsKickoffLongest(string $returnsKickoffLongest): void
    {
        $this->returnsKickoffLongest = $returnsKickoffLongest;
    }

    public function getReturnsKickoffTouchdown(): string
    {
        return $this->returnsKickoffTouchdown;
    }

    public function setReturnsKickoffTouchdown(string $returnsKickoffTouchdown): void
    {
        $this->returnsKickoffTouchdown = $returnsKickoffTouchdown;
    }

    public function getReturnsTotal(): string
    {
        return $this->returnsTotal;
    }

    public function setReturnsTotal(string $returnsTotal): void
    {
        $this->returnsTotal = $returnsTotal;
    }

    public function getReturnsYards(): string
    {
        return $this->returnsYards;
    }

    public function setReturnsYards(string $returnsYards): void
    {
        $this->returnsYards = $returnsYards;
    }

    public function getPuntsTotal(): string
    {
        return $this->puntsTotal;
    }

    public function setPuntsTotal(string $puntsTotal): void
    {
        $this->puntsTotal = $puntsTotal;
    }

    public function getPuntsYardsGross(): string
    {
        return $this->puntsYardsGross;
    }

    public function setPuntsYardsGross(string $puntsYardsGross): void
    {
        $this->puntsYardsGross = $puntsYardsGross;
    }

    public function getPuntsYardsNet(): string
    {
        return $this->puntsYardsNet;
    }

    public function setPuntsYardsNet(string $puntsYardsNet): void
    {
        $this->puntsYardsNet = $puntsYardsNet;
    }

    public function getPuntsLongest(): string
    {
        return $this->puntsLongest;
    }

    public function setPuntsLongest(string $puntsLongest): void
    {
        $this->puntsLongest = $puntsLongest;
    }

    public function getPuntsInside20(): string
    {
        return $this->puntsInside20;
    }

    public function setPuntsInside20(string $puntsInside20): void
    {
        $this->puntsInside20 = $puntsInside20;
    }

    public function getPuntsInside20Percentage(): string
    {
        return $this->puntsInside20Percentage;
    }

    public function setPuntsInside20Percentage(string $puntsInside20Percentage): void
    {
        $this->puntsInside20Percentage = $puntsInside20Percentage;
    }

    public function getPuntsAverage(): string
    {
        return $this->puntsAverage;
    }

    public function setPuntsAverage(string $puntsAverage): void
    {
        $this->puntsAverage = $puntsAverage;
    }

    public function getPuntsBlocked(): string
    {
        return $this->puntsBlocked;
    }

    public function setPuntsBlocked(string $puntsBlocked): void
    {
        $this->puntsBlocked = $puntsBlocked;
    }

    public function getTouchbacksTotal(): string
    {
        return $this->touchbacksTotal;
    }

    public function setTouchbacksTotal(string $touchbacksTotal): void
    {
        $this->touchbacksTotal = $touchbacksTotal;
    }

    public function getTouchbacksTotalPercentage(): string
    {
        return $this->touchbacksTotalPercentage;
    }

    public function setTouchbacksTotalPercentage(string $touchbacksTotalPercentage): void
    {
        $this->touchbacksTotalPercentage = $touchbacksTotalPercentage;
    }

    public function getTouchbacksKickoffs(): string
    {
        return $this->touchbacksKickoffs;
    }

    public function setTouchbacksKickoffs(string $touchbacksKickoffs): void
    {
        $this->touchbacksKickoffs = $touchbacksKickoffs;
    }

    public function getTouchbacksKickoffsPercentage(): string
    {
        return $this->touchbacksKickoffsPercentage;
    }

    public function setTouchbacksKickoffsPercentage(string $touchbacksKickoffsPercentage): void
    {
        $this->touchbacksKickoffsPercentage = $touchbacksKickoffsPercentage;
    }

    public function getTouchbacksPunts(): string
    {
        return $this->touchbacksPunts;
    }

    public function setTouchbacksPunts(string $touchbacksPunts): void
    {
        $this->touchbacksPunts = $touchbacksPunts;
    }

    public function getTouchbacksPuntsPercentage(): string
    {
        return $this->touchbacksPuntsPercentage;
    }

    public function setTouchbacksPuntsPercentage(string $touchbacksPuntsPercentage): void
    {
        $this->touchbacksPuntsPercentage = $touchbacksPuntsPercentage;
    }

    public function getTouchbacksInterceptions(): string
    {
        return $this->touchbacksInterceptions;
    }

    public function setTouchbacksInterceptions(string $touchbacksInterceptions): void
    {
        $this->touchbacksInterceptions = $touchbacksInterceptions;
    }

    public function getTouchbacksInterceptionsPercentage(): string
    {
        return $this->touchbacksInterceptionsPercentage;
    }

    public function setTouchbacksInterceptionsPercentage(string $touchbacksInterceptionsPercentage): void
    {
        $this->touchbacksInterceptionsPercentage = $touchbacksInterceptionsPercentage;
    }

    public function getFairCatches(): string
    {
        return $this->fairCatches;
    }

    public function setFairCatches(string $fairCatches): void
    {
        $this->fairCatches = $fairCatches;
    }

    public function toDto(): AmericanFootballSpecialTeamsStatsDto
    {
        $dto = new AmericanFootballSpecialTeamsStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->returnsPuntTotal = $this->returnsPuntTotal ?? "";
        $dto->returnsPuntYards = $this->returnsPuntYards ?? "";
        $dto->returnsPuntAverage = $this->returnsPuntAverage ?? "";
        $dto->returnsPuntLongest = $this->returnsPuntLongest ?? "";
        $dto->returnsPuntTouchdown = $this->returnsPuntTouchdown ?? "";
        $dto->returnsKickoffTotal = $this->returnsKickoffTotal ?? "";
        $dto->returnsKickoffYards = $this->returnsKickoffYards ?? "";
        $dto->returnsKickoffAverage = $this->returnsKickoffAverage ?? "";
        $dto->returnsKickoffLongest = $this->returnsKickoffLongest ?? "";
        $dto->returnsKickoffTouchdown = $this->returnsKickoffTouchdown ?? "";
        $dto->returnsTotal = $this->returnsTotal ?? "";
        $dto->returnsYards = $this->returnsYards ?? "";
        $dto->puntsTotal = $this->puntsTotal ?? "";
        $dto->puntsYardsGross = $this->puntsYardsGross ?? "";
        $dto->puntsYardsNet = $this->puntsYardsNet ?? "";
        $dto->puntsLongest = $this->puntsLongest ?? "";
        $dto->puntsInside20 = $this->puntsInside20 ?? "";
        $dto->puntsInside20Percentage = $this->puntsInside20Percentage ?? "";
        $dto->puntsAverage = $this->puntsAverage ?? "";
        $dto->puntsBlocked = $this->puntsBlocked ?? "";
        $dto->touchbacksTotal = $this->touchbacksTotal ?? "";
        $dto->touchbacksTotalPercentage = $this->touchbacksTotalPercentage ?? "";
        $dto->touchbacksKickoffs = $this->touchbacksKickoffs ?? "";
        $dto->touchbacksKickoffsPercentage = $this->touchbacksKickoffsPercentage ?? "";
        $dto->touchbacksPunts = $this->touchbacksPunts ?? "";
        $dto->touchbacksPuntsPercentage = $this->touchbacksPuntsPercentage ?? "";
        $dto->touchbacksInterceptions = $this->touchbacksInterceptions ?? "";
        $dto->touchbacksInterceptionsPercentage = $this->touchbacksInterceptionsPercentage ?? "";
        $dto->fairCatches = $this->fairCatches ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "returns_punt_total" => $this->returnsPuntTotal,
            "returns_punt_yards" => $this->returnsPuntYards,
            "returns_punt_average" => $this->returnsPuntAverage,
            "returns_punt_longest" => $this->returnsPuntLongest,
            "returns_punt_touchdown" => $this->returnsPuntTouchdown,
            "returns_kickoff_total" => $this->returnsKickoffTotal,
            "returns_kickoff_yards" => $this->returnsKickoffYards,
            "returns_kickoff_average" => $this->returnsKickoffAverage,
            "returns_kickoff_longest" => $this->returnsKickoffLongest,
            "returns_kickoff_touchdown" => $this->returnsKickoffTouchdown,
            "returns_total" => $this->returnsTotal,
            "returns_yards" => $this->returnsYards,
            "punts_total" => $this->puntsTotal,
            "punts_yards_gross" => $this->puntsYardsGross,
            "punts_yards_net" => $this->puntsYardsNet,
            "punts_longest" => $this->puntsLongest,
            "punts_inside_20" => $this->puntsInside20,
            "punts_inside_20_percentage" => $this->puntsInside20Percentage,
            "punts_average" => $this->puntsAverage,
            "punts_blocked" => $this->puntsBlocked,
            "touchbacks_total" => $this->touchbacksTotal,
            "touchbacks_total_percentage" => $this->touchbacksTotalPercentage,
            "touchbacks_kickoffs" => $this->touchbacksKickoffs,
            "touchbacks_kickoffs_percentage" => $this->touchbacksKickoffsPercentage,
            "touchbacks_punts" => $this->touchbacksPunts,
            "touchbacks_punts_percentage" => $this->touchbacksPuntsPercentage,
            "touchbacks_interceptions" => $this->touchbacksInterceptions,
            "touchbacks_interceptions_percentage" => $this->touchbacksInterceptionsPercentage,
            "fair_catches" => $this->fairCatches,
        ];
    }
}