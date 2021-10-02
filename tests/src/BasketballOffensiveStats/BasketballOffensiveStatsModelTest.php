<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BasketballOffensiveStats\{ BasketballOffensiveStatsDto, BasketballOffensiveStatsModel };

class BasketballOffensiveStatsModelTest extends TestCase
{
    private array $input;
    private BasketballOffensiveStatsDto $dto;
    private BasketballOffensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8017,
            "field_goals_made" => 8068,
            "field_goals_attempted" => 5354,
            "field_goals_percentage" => "type",
            "field_goals_per_game" => "economy",
            "field_goals_attempted_per_game" => "type",
            "field_goals_percentage_adjusted" => "manage",
            "three_pointers_made" => 1751,
            "three_pointers_attempted" => 770,
            "three_pointers_percentage" => "protect",
            "three_pointers_per_game" => "prevent",
            "three_pointers_attempted_per_game" => "glass",
            "free_throws_made" => "free",
            "free_throws_attempted" => "range",
            "free_throws_percentage" => "beat",
            "free_throws_per_game" => "continue",
            "free_throws_attempted_per_game" => "alone",
            "points_scored_total" => "born",
            "points_scored_per_game" => "mind",
            "assists_total" => "operation",
            "assists_per_game" => "training",
            "turnovers_total" => "responsibility",
            "turnovers_per_game" => "moment",
            "points_scored_off_turnovers" => "total",
            "points_scored_in_paint" => "every",
            "points_scored_on_second_chance" => "write",
            "points_scored_on_fast_break" => "make",
        ];
        $this->dto = new BasketballOffensiveStatsDto($this->input);
        $this->model = new BasketballOffensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BasketballOffensiveStatsModel(null);

        $this->assertInstanceOf(BasketballOffensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 4485;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetFieldGoalsMade(): void
    {
        $this->assertEquals($this->dto->fieldGoalsMade, $this->model->getFieldGoalsMade());
    }

    public function testSetFieldGoalsMade(): void
    {
        $expected = 4530;
        $model = $this->model;
        $model->setFieldGoalsMade($expected);

        $this->assertEquals($expected, $model->getFieldGoalsMade());
    }

    public function testGetFieldGoalsAttempted(): void
    {
        $this->assertEquals($this->dto->fieldGoalsAttempted, $this->model->getFieldGoalsAttempted());
    }

    public function testSetFieldGoalsAttempted(): void
    {
        $expected = 8754;
        $model = $this->model;
        $model->setFieldGoalsAttempted($expected);

        $this->assertEquals($expected, $model->getFieldGoalsAttempted());
    }

    public function testGetFieldGoalsPercentage(): void
    {
        $this->assertEquals($this->dto->fieldGoalsPercentage, $this->model->getFieldGoalsPercentage());
    }

    public function testSetFieldGoalsPercentage(): void
    {
        $expected = "market";
        $model = $this->model;
        $model->setFieldGoalsPercentage($expected);

        $this->assertEquals($expected, $model->getFieldGoalsPercentage());
    }

    public function testGetFieldGoalsPerGame(): void
    {
        $this->assertEquals($this->dto->fieldGoalsPerGame, $this->model->getFieldGoalsPerGame());
    }

    public function testSetFieldGoalsPerGame(): void
    {
        $expected = "challenge";
        $model = $this->model;
        $model->setFieldGoalsPerGame($expected);

        $this->assertEquals($expected, $model->getFieldGoalsPerGame());
    }

    public function testGetFieldGoalsAttemptedPerGame(): void
    {
        $this->assertEquals($this->dto->fieldGoalsAttemptedPerGame, $this->model->getFieldGoalsAttemptedPerGame());
    }

    public function testSetFieldGoalsAttemptedPerGame(): void
    {
        $expected = "happen";
        $model = $this->model;
        $model->setFieldGoalsAttemptedPerGame($expected);

        $this->assertEquals($expected, $model->getFieldGoalsAttemptedPerGame());
    }

    public function testGetFieldGoalsPercentageAdjusted(): void
    {
        $this->assertEquals($this->dto->fieldGoalsPercentageAdjusted, $this->model->getFieldGoalsPercentageAdjusted());
    }

    public function testSetFieldGoalsPercentageAdjusted(): void
    {
        $expected = "major";
        $model = $this->model;
        $model->setFieldGoalsPercentageAdjusted($expected);

        $this->assertEquals($expected, $model->getFieldGoalsPercentageAdjusted());
    }

    public function testGetThreePointersMade(): void
    {
        $this->assertEquals($this->dto->threePointersMade, $this->model->getThreePointersMade());
    }

    public function testSetThreePointersMade(): void
    {
        $expected = 3658;
        $model = $this->model;
        $model->setThreePointersMade($expected);

        $this->assertEquals($expected, $model->getThreePointersMade());
    }

    public function testGetThreePointersAttempted(): void
    {
        $this->assertEquals($this->dto->threePointersAttempted, $this->model->getThreePointersAttempted());
    }

    public function testSetThreePointersAttempted(): void
    {
        $expected = 1344;
        $model = $this->model;
        $model->setThreePointersAttempted($expected);

        $this->assertEquals($expected, $model->getThreePointersAttempted());
    }

    public function testGetThreePointersPercentage(): void
    {
        $this->assertEquals($this->dto->threePointersPercentage, $this->model->getThreePointersPercentage());
    }

    public function testSetThreePointersPercentage(): void
    {
        $expected = "remain";
        $model = $this->model;
        $model->setThreePointersPercentage($expected);

        $this->assertEquals($expected, $model->getThreePointersPercentage());
    }

    public function testGetThreePointersPerGame(): void
    {
        $this->assertEquals($this->dto->threePointersPerGame, $this->model->getThreePointersPerGame());
    }

    public function testSetThreePointersPerGame(): void
    {
        $expected = "house";
        $model = $this->model;
        $model->setThreePointersPerGame($expected);

        $this->assertEquals($expected, $model->getThreePointersPerGame());
    }

    public function testGetThreePointersAttemptedPerGame(): void
    {
        $this->assertEquals($this->dto->threePointersAttemptedPerGame, $this->model->getThreePointersAttemptedPerGame());
    }

    public function testSetThreePointersAttemptedPerGame(): void
    {
        $expected = "talk";
        $model = $this->model;
        $model->setThreePointersAttemptedPerGame($expected);

        $this->assertEquals($expected, $model->getThreePointersAttemptedPerGame());
    }

    public function testGetFreeThrowsMade(): void
    {
        $this->assertEquals($this->dto->freeThrowsMade, $this->model->getFreeThrowsMade());
    }

    public function testSetFreeThrowsMade(): void
    {
        $expected = "significant";
        $model = $this->model;
        $model->setFreeThrowsMade($expected);

        $this->assertEquals($expected, $model->getFreeThrowsMade());
    }

    public function testGetFreeThrowsAttempted(): void
    {
        $this->assertEquals($this->dto->freeThrowsAttempted, $this->model->getFreeThrowsAttempted());
    }

    public function testSetFreeThrowsAttempted(): void
    {
        $expected = "product";
        $model = $this->model;
        $model->setFreeThrowsAttempted($expected);

        $this->assertEquals($expected, $model->getFreeThrowsAttempted());
    }

    public function testGetFreeThrowsPercentage(): void
    {
        $this->assertEquals($this->dto->freeThrowsPercentage, $this->model->getFreeThrowsPercentage());
    }

    public function testSetFreeThrowsPercentage(): void
    {
        $expected = "standard";
        $model = $this->model;
        $model->setFreeThrowsPercentage($expected);

        $this->assertEquals($expected, $model->getFreeThrowsPercentage());
    }

    public function testGetFreeThrowsPerGame(): void
    {
        $this->assertEquals($this->dto->freeThrowsPerGame, $this->model->getFreeThrowsPerGame());
    }

    public function testSetFreeThrowsPerGame(): void
    {
        $expected = "Congress";
        $model = $this->model;
        $model->setFreeThrowsPerGame($expected);

        $this->assertEquals($expected, $model->getFreeThrowsPerGame());
    }

    public function testGetFreeThrowsAttemptedPerGame(): void
    {
        $this->assertEquals($this->dto->freeThrowsAttemptedPerGame, $this->model->getFreeThrowsAttemptedPerGame());
    }

    public function testSetFreeThrowsAttemptedPerGame(): void
    {
        $expected = "song";
        $model = $this->model;
        $model->setFreeThrowsAttemptedPerGame($expected);

        $this->assertEquals($expected, $model->getFreeThrowsAttemptedPerGame());
    }

    public function testGetPointsScoredTotal(): void
    {
        $this->assertEquals($this->dto->pointsScoredTotal, $this->model->getPointsScoredTotal());
    }

    public function testSetPointsScoredTotal(): void
    {
        $expected = "turn";
        $model = $this->model;
        $model->setPointsScoredTotal($expected);

        $this->assertEquals($expected, $model->getPointsScoredTotal());
    }

    public function testGetPointsScoredPerGame(): void
    {
        $this->assertEquals($this->dto->pointsScoredPerGame, $this->model->getPointsScoredPerGame());
    }

    public function testSetPointsScoredPerGame(): void
    {
        $expected = "capital";
        $model = $this->model;
        $model->setPointsScoredPerGame($expected);

        $this->assertEquals($expected, $model->getPointsScoredPerGame());
    }

    public function testGetAssistsTotal(): void
    {
        $this->assertEquals($this->dto->assistsTotal, $this->model->getAssistsTotal());
    }

    public function testSetAssistsTotal(): void
    {
        $expected = "trip";
        $model = $this->model;
        $model->setAssistsTotal($expected);

        $this->assertEquals($expected, $model->getAssistsTotal());
    }

    public function testGetAssistsPerGame(): void
    {
        $this->assertEquals($this->dto->assistsPerGame, $this->model->getAssistsPerGame());
    }

    public function testSetAssistsPerGame(): void
    {
        $expected = "too";
        $model = $this->model;
        $model->setAssistsPerGame($expected);

        $this->assertEquals($expected, $model->getAssistsPerGame());
    }

    public function testGetTurnoversTotal(): void
    {
        $this->assertEquals($this->dto->turnoversTotal, $this->model->getTurnoversTotal());
    }

    public function testSetTurnoversTotal(): void
    {
        $expected = "of";
        $model = $this->model;
        $model->setTurnoversTotal($expected);

        $this->assertEquals($expected, $model->getTurnoversTotal());
    }

    public function testGetTurnoversPerGame(): void
    {
        $this->assertEquals($this->dto->turnoversPerGame, $this->model->getTurnoversPerGame());
    }

    public function testSetTurnoversPerGame(): void
    {
        $expected = "send";
        $model = $this->model;
        $model->setTurnoversPerGame($expected);

        $this->assertEquals($expected, $model->getTurnoversPerGame());
    }

    public function testGetPointsScoredOffTurnovers(): void
    {
        $this->assertEquals($this->dto->pointsScoredOffTurnovers, $this->model->getPointsScoredOffTurnovers());
    }

    public function testSetPointsScoredOffTurnovers(): void
    {
        $expected = "lead";
        $model = $this->model;
        $model->setPointsScoredOffTurnovers($expected);

        $this->assertEquals($expected, $model->getPointsScoredOffTurnovers());
    }

    public function testGetPointsScoredInPaint(): void
    {
        $this->assertEquals($this->dto->pointsScoredInPaint, $this->model->getPointsScoredInPaint());
    }

    public function testSetPointsScoredInPaint(): void
    {
        $expected = "forget";
        $model = $this->model;
        $model->setPointsScoredInPaint($expected);

        $this->assertEquals($expected, $model->getPointsScoredInPaint());
    }

    public function testGetPointsScoredOnSecondChance(): void
    {
        $this->assertEquals($this->dto->pointsScoredOnSecondChance, $this->model->getPointsScoredOnSecondChance());
    }

    public function testSetPointsScoredOnSecondChance(): void
    {
        $expected = "by";
        $model = $this->model;
        $model->setPointsScoredOnSecondChance($expected);

        $this->assertEquals($expected, $model->getPointsScoredOnSecondChance());
    }

    public function testGetPointsScoredOnFastBreak(): void
    {
        $this->assertEquals($this->dto->pointsScoredOnFastBreak, $this->model->getPointsScoredOnFastBreak());
    }

    public function testSetPointsScoredOnFastBreak(): void
    {
        $expected = "product";
        $model = $this->model;
        $model->setPointsScoredOnFastBreak($expected);

        $this->assertEquals($expected, $model->getPointsScoredOnFastBreak());
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