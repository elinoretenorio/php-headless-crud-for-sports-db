<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballScoringStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballScoringStats\{ AmericanFootballScoringStatsDto, AmericanFootballScoringStatsModel };

class AmericanFootballScoringStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballScoringStatsDto $dto;
    private AmericanFootballScoringStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6474,
            "touchdowns_total" => "state",
            "touchdowns_passing" => "performance",
            "touchdowns_rushing" => "at",
            "touchdowns_special_teams" => "place",
            "touchdowns_defensive" => "network",
            "extra_points_attempts" => "always",
            "extra_points_made" => "spend",
            "extra_points_missed" => "benefit",
            "extra_points_blocked" => "person",
            "field_goal_attempts" => "development",
            "field_goals_made" => "west",
            "field_goals_missed" => "we",
            "field_goals_blocked" => "human",
            "safeties_against" => "only",
            "two_point_conversions_attempts" => "police",
            "two_point_conversions_made" => "recently",
            "touchbacks_total" => "professor",
        ];
        $this->dto = new AmericanFootballScoringStatsDto($this->input);
        $this->model = new AmericanFootballScoringStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballScoringStatsModel(null);

        $this->assertInstanceOf(AmericanFootballScoringStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 6022;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetTouchdownsTotal(): void
    {
        $this->assertEquals($this->dto->touchdownsTotal, $this->model->getTouchdownsTotal());
    }

    public function testSetTouchdownsTotal(): void
    {
        $expected = "able";
        $model = $this->model;
        $model->setTouchdownsTotal($expected);

        $this->assertEquals($expected, $model->getTouchdownsTotal());
    }

    public function testGetTouchdownsPassing(): void
    {
        $this->assertEquals($this->dto->touchdownsPassing, $this->model->getTouchdownsPassing());
    }

    public function testSetTouchdownsPassing(): void
    {
        $expected = "determine";
        $model = $this->model;
        $model->setTouchdownsPassing($expected);

        $this->assertEquals($expected, $model->getTouchdownsPassing());
    }

    public function testGetTouchdownsRushing(): void
    {
        $this->assertEquals($this->dto->touchdownsRushing, $this->model->getTouchdownsRushing());
    }

    public function testSetTouchdownsRushing(): void
    {
        $expected = "high";
        $model = $this->model;
        $model->setTouchdownsRushing($expected);

        $this->assertEquals($expected, $model->getTouchdownsRushing());
    }

    public function testGetTouchdownsSpecialTeams(): void
    {
        $this->assertEquals($this->dto->touchdownsSpecialTeams, $this->model->getTouchdownsSpecialTeams());
    }

    public function testSetTouchdownsSpecialTeams(): void
    {
        $expected = "play";
        $model = $this->model;
        $model->setTouchdownsSpecialTeams($expected);

        $this->assertEquals($expected, $model->getTouchdownsSpecialTeams());
    }

    public function testGetTouchdownsDefensive(): void
    {
        $this->assertEquals($this->dto->touchdownsDefensive, $this->model->getTouchdownsDefensive());
    }

    public function testSetTouchdownsDefensive(): void
    {
        $expected = "including";
        $model = $this->model;
        $model->setTouchdownsDefensive($expected);

        $this->assertEquals($expected, $model->getTouchdownsDefensive());
    }

    public function testGetExtraPointsAttempts(): void
    {
        $this->assertEquals($this->dto->extraPointsAttempts, $this->model->getExtraPointsAttempts());
    }

    public function testSetExtraPointsAttempts(): void
    {
        $expected = "address";
        $model = $this->model;
        $model->setExtraPointsAttempts($expected);

        $this->assertEquals($expected, $model->getExtraPointsAttempts());
    }

    public function testGetExtraPointsMade(): void
    {
        $this->assertEquals($this->dto->extraPointsMade, $this->model->getExtraPointsMade());
    }

    public function testSetExtraPointsMade(): void
    {
        $expected = "say";
        $model = $this->model;
        $model->setExtraPointsMade($expected);

        $this->assertEquals($expected, $model->getExtraPointsMade());
    }

    public function testGetExtraPointsMissed(): void
    {
        $this->assertEquals($this->dto->extraPointsMissed, $this->model->getExtraPointsMissed());
    }

    public function testSetExtraPointsMissed(): void
    {
        $expected = "real";
        $model = $this->model;
        $model->setExtraPointsMissed($expected);

        $this->assertEquals($expected, $model->getExtraPointsMissed());
    }

    public function testGetExtraPointsBlocked(): void
    {
        $this->assertEquals($this->dto->extraPointsBlocked, $this->model->getExtraPointsBlocked());
    }

    public function testSetExtraPointsBlocked(): void
    {
        $expected = "fish";
        $model = $this->model;
        $model->setExtraPointsBlocked($expected);

        $this->assertEquals($expected, $model->getExtraPointsBlocked());
    }

    public function testGetFieldGoalAttempts(): void
    {
        $this->assertEquals($this->dto->fieldGoalAttempts, $this->model->getFieldGoalAttempts());
    }

    public function testSetFieldGoalAttempts(): void
    {
        $expected = "whatever";
        $model = $this->model;
        $model->setFieldGoalAttempts($expected);

        $this->assertEquals($expected, $model->getFieldGoalAttempts());
    }

    public function testGetFieldGoalsMade(): void
    {
        $this->assertEquals($this->dto->fieldGoalsMade, $this->model->getFieldGoalsMade());
    }

    public function testSetFieldGoalsMade(): void
    {
        $expected = "meet";
        $model = $this->model;
        $model->setFieldGoalsMade($expected);

        $this->assertEquals($expected, $model->getFieldGoalsMade());
    }

    public function testGetFieldGoalsMissed(): void
    {
        $this->assertEquals($this->dto->fieldGoalsMissed, $this->model->getFieldGoalsMissed());
    }

    public function testSetFieldGoalsMissed(): void
    {
        $expected = "once";
        $model = $this->model;
        $model->setFieldGoalsMissed($expected);

        $this->assertEquals($expected, $model->getFieldGoalsMissed());
    }

    public function testGetFieldGoalsBlocked(): void
    {
        $this->assertEquals($this->dto->fieldGoalsBlocked, $this->model->getFieldGoalsBlocked());
    }

    public function testSetFieldGoalsBlocked(): void
    {
        $expected = "dark";
        $model = $this->model;
        $model->setFieldGoalsBlocked($expected);

        $this->assertEquals($expected, $model->getFieldGoalsBlocked());
    }

    public function testGetSafetiesAgainst(): void
    {
        $this->assertEquals($this->dto->safetiesAgainst, $this->model->getSafetiesAgainst());
    }

    public function testSetSafetiesAgainst(): void
    {
        $expected = "account";
        $model = $this->model;
        $model->setSafetiesAgainst($expected);

        $this->assertEquals($expected, $model->getSafetiesAgainst());
    }

    public function testGetTwoPointConversionsAttempts(): void
    {
        $this->assertEquals($this->dto->twoPointConversionsAttempts, $this->model->getTwoPointConversionsAttempts());
    }

    public function testSetTwoPointConversionsAttempts(): void
    {
        $expected = "natural";
        $model = $this->model;
        $model->setTwoPointConversionsAttempts($expected);

        $this->assertEquals($expected, $model->getTwoPointConversionsAttempts());
    }

    public function testGetTwoPointConversionsMade(): void
    {
        $this->assertEquals($this->dto->twoPointConversionsMade, $this->model->getTwoPointConversionsMade());
    }

    public function testSetTwoPointConversionsMade(): void
    {
        $expected = "sing";
        $model = $this->model;
        $model->setTwoPointConversionsMade($expected);

        $this->assertEquals($expected, $model->getTwoPointConversionsMade());
    }

    public function testGetTouchbacksTotal(): void
    {
        $this->assertEquals($this->dto->touchbacksTotal, $this->model->getTouchbacksTotal());
    }

    public function testSetTouchbacksTotal(): void
    {
        $expected = "research";
        $model = $this->model;
        $model->setTouchbacksTotal($expected);

        $this->assertEquals($expected, $model->getTouchbacksTotal());
    }

    public function testToDto(): void
    {
        $this->assertEquals($this->dto, $this->model->toDto());
    }

    public function testJsonSerialize(): void
    {
        $this->assertEquals($this->input, $this->model->jsonSerialize());
    }
}