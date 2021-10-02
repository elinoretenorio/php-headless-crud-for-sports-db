<?php

declare(strict_types=1);

namespace Sports\AmericanFootballScoringStats;

use JsonSerializable;

class AmericanFootballScoringStatsModel implements JsonSerializable
{
    private int $id;
    private string $touchdownsTotal;
    private string $touchdownsPassing;
    private string $touchdownsRushing;
    private string $touchdownsSpecialTeams;
    private string $touchdownsDefensive;
    private string $extraPointsAttempts;
    private string $extraPointsMade;
    private string $extraPointsMissed;
    private string $extraPointsBlocked;
    private string $fieldGoalAttempts;
    private string $fieldGoalsMade;
    private string $fieldGoalsMissed;
    private string $fieldGoalsBlocked;
    private string $safetiesAgainst;
    private string $twoPointConversionsAttempts;
    private string $twoPointConversionsMade;
    private string $touchbacksTotal;

    public function __construct(AmericanFootballScoringStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->touchdownsTotal = $dto->touchdownsTotal;
        $this->touchdownsPassing = $dto->touchdownsPassing;
        $this->touchdownsRushing = $dto->touchdownsRushing;
        $this->touchdownsSpecialTeams = $dto->touchdownsSpecialTeams;
        $this->touchdownsDefensive = $dto->touchdownsDefensive;
        $this->extraPointsAttempts = $dto->extraPointsAttempts;
        $this->extraPointsMade = $dto->extraPointsMade;
        $this->extraPointsMissed = $dto->extraPointsMissed;
        $this->extraPointsBlocked = $dto->extraPointsBlocked;
        $this->fieldGoalAttempts = $dto->fieldGoalAttempts;
        $this->fieldGoalsMade = $dto->fieldGoalsMade;
        $this->fieldGoalsMissed = $dto->fieldGoalsMissed;
        $this->fieldGoalsBlocked = $dto->fieldGoalsBlocked;
        $this->safetiesAgainst = $dto->safetiesAgainst;
        $this->twoPointConversionsAttempts = $dto->twoPointConversionsAttempts;
        $this->twoPointConversionsMade = $dto->twoPointConversionsMade;
        $this->touchbacksTotal = $dto->touchbacksTotal;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTouchdownsTotal(): string
    {
        return $this->touchdownsTotal;
    }

    public function setTouchdownsTotal(string $touchdownsTotal): void
    {
        $this->touchdownsTotal = $touchdownsTotal;
    }

    public function getTouchdownsPassing(): string
    {
        return $this->touchdownsPassing;
    }

    public function setTouchdownsPassing(string $touchdownsPassing): void
    {
        $this->touchdownsPassing = $touchdownsPassing;
    }

    public function getTouchdownsRushing(): string
    {
        return $this->touchdownsRushing;
    }

    public function setTouchdownsRushing(string $touchdownsRushing): void
    {
        $this->touchdownsRushing = $touchdownsRushing;
    }

    public function getTouchdownsSpecialTeams(): string
    {
        return $this->touchdownsSpecialTeams;
    }

    public function setTouchdownsSpecialTeams(string $touchdownsSpecialTeams): void
    {
        $this->touchdownsSpecialTeams = $touchdownsSpecialTeams;
    }

    public function getTouchdownsDefensive(): string
    {
        return $this->touchdownsDefensive;
    }

    public function setTouchdownsDefensive(string $touchdownsDefensive): void
    {
        $this->touchdownsDefensive = $touchdownsDefensive;
    }

    public function getExtraPointsAttempts(): string
    {
        return $this->extraPointsAttempts;
    }

    public function setExtraPointsAttempts(string $extraPointsAttempts): void
    {
        $this->extraPointsAttempts = $extraPointsAttempts;
    }

    public function getExtraPointsMade(): string
    {
        return $this->extraPointsMade;
    }

    public function setExtraPointsMade(string $extraPointsMade): void
    {
        $this->extraPointsMade = $extraPointsMade;
    }

    public function getExtraPointsMissed(): string
    {
        return $this->extraPointsMissed;
    }

    public function setExtraPointsMissed(string $extraPointsMissed): void
    {
        $this->extraPointsMissed = $extraPointsMissed;
    }

    public function getExtraPointsBlocked(): string
    {
        return $this->extraPointsBlocked;
    }

    public function setExtraPointsBlocked(string $extraPointsBlocked): void
    {
        $this->extraPointsBlocked = $extraPointsBlocked;
    }

    public function getFieldGoalAttempts(): string
    {
        return $this->fieldGoalAttempts;
    }

    public function setFieldGoalAttempts(string $fieldGoalAttempts): void
    {
        $this->fieldGoalAttempts = $fieldGoalAttempts;
    }

    public function getFieldGoalsMade(): string
    {
        return $this->fieldGoalsMade;
    }

    public function setFieldGoalsMade(string $fieldGoalsMade): void
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
    }

    public function getFieldGoalsMissed(): string
    {
        return $this->fieldGoalsMissed;
    }

    public function setFieldGoalsMissed(string $fieldGoalsMissed): void
    {
        $this->fieldGoalsMissed = $fieldGoalsMissed;
    }

    public function getFieldGoalsBlocked(): string
    {
        return $this->fieldGoalsBlocked;
    }

    public function setFieldGoalsBlocked(string $fieldGoalsBlocked): void
    {
        $this->fieldGoalsBlocked = $fieldGoalsBlocked;
    }

    public function getSafetiesAgainst(): string
    {
        return $this->safetiesAgainst;
    }

    public function setSafetiesAgainst(string $safetiesAgainst): void
    {
        $this->safetiesAgainst = $safetiesAgainst;
    }

    public function getTwoPointConversionsAttempts(): string
    {
        return $this->twoPointConversionsAttempts;
    }

    public function setTwoPointConversionsAttempts(string $twoPointConversionsAttempts): void
    {
        $this->twoPointConversionsAttempts = $twoPointConversionsAttempts;
    }

    public function getTwoPointConversionsMade(): string
    {
        return $this->twoPointConversionsMade;
    }

    public function setTwoPointConversionsMade(string $twoPointConversionsMade): void
    {
        $this->twoPointConversionsMade = $twoPointConversionsMade;
    }

    public function getTouchbacksTotal(): string
    {
        return $this->touchbacksTotal;
    }

    public function setTouchbacksTotal(string $touchbacksTotal): void
    {
        $this->touchbacksTotal = $touchbacksTotal;
    }

    public function toDto(): AmericanFootballScoringStatsDto
    {
        $dto = new AmericanFootballScoringStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->touchdownsTotal = $this->touchdownsTotal ?? "";
        $dto->touchdownsPassing = $this->touchdownsPassing ?? "";
        $dto->touchdownsRushing = $this->touchdownsRushing ?? "";
        $dto->touchdownsSpecialTeams = $this->touchdownsSpecialTeams ?? "";
        $dto->touchdownsDefensive = $this->touchdownsDefensive ?? "";
        $dto->extraPointsAttempts = $this->extraPointsAttempts ?? "";
        $dto->extraPointsMade = $this->extraPointsMade ?? "";
        $dto->extraPointsMissed = $this->extraPointsMissed ?? "";
        $dto->extraPointsBlocked = $this->extraPointsBlocked ?? "";
        $dto->fieldGoalAttempts = $this->fieldGoalAttempts ?? "";
        $dto->fieldGoalsMade = $this->fieldGoalsMade ?? "";
        $dto->fieldGoalsMissed = $this->fieldGoalsMissed ?? "";
        $dto->fieldGoalsBlocked = $this->fieldGoalsBlocked ?? "";
        $dto->safetiesAgainst = $this->safetiesAgainst ?? "";
        $dto->twoPointConversionsAttempts = $this->twoPointConversionsAttempts ?? "";
        $dto->twoPointConversionsMade = $this->twoPointConversionsMade ?? "";
        $dto->touchbacksTotal = $this->touchbacksTotal ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "touchdowns_total" => $this->touchdownsTotal,
            "touchdowns_passing" => $this->touchdownsPassing,
            "touchdowns_rushing" => $this->touchdownsRushing,
            "touchdowns_special_teams" => $this->touchdownsSpecialTeams,
            "touchdowns_defensive" => $this->touchdownsDefensive,
            "extra_points_attempts" => $this->extraPointsAttempts,
            "extra_points_made" => $this->extraPointsMade,
            "extra_points_missed" => $this->extraPointsMissed,
            "extra_points_blocked" => $this->extraPointsBlocked,
            "field_goal_attempts" => $this->fieldGoalAttempts,
            "field_goals_made" => $this->fieldGoalsMade,
            "field_goals_missed" => $this->fieldGoalsMissed,
            "field_goals_blocked" => $this->fieldGoalsBlocked,
            "safeties_against" => $this->safetiesAgainst,
            "two_point_conversions_attempts" => $this->twoPointConversionsAttempts,
            "two_point_conversions_made" => $this->twoPointConversionsMade,
            "touchbacks_total" => $this->touchbacksTotal,
        ];
    }
}