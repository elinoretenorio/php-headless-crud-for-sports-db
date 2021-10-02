<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\SoccerDefensiveStats\{ SoccerDefensiveStatsDto, SoccerDefensiveStatsModel };

class SoccerDefensiveStatsModelTest extends TestCase
{
    private array $input;
    private SoccerDefensiveStatsDto $dto;
    private SoccerDefensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7295,
            "shots_penalty_shot_allowed" => "available",
            "goals_penalty_shot_allowed" => "question",
            "goals_against_average" => "matter",
            "goals_against_total" => "very",
            "saves" => "reflect",
            "save_percentage" => "house",
            "catches_punches" => "near",
            "shots_on_goal_total" => "easy",
            "shots_shootout_total" => "movie",
            "shots_shootout_allowed" => "benefit",
            "shots_blocked" => "glass",
            "shutouts" => "war",
        ];
        $this->dto = new SoccerDefensiveStatsDto($this->input);
        $this->model = new SoccerDefensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new SoccerDefensiveStatsModel(null);

        $this->assertInstanceOf(SoccerDefensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 886;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetShotsPenaltyShotAllowed(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotAllowed, $this->model->getShotsPenaltyShotAllowed());
    }

    public function testSetShotsPenaltyShotAllowed(): void
    {
        $expected = "letter";
        $model = $this->model;
        $model->setShotsPenaltyShotAllowed($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotAllowed());
    }

    public function testGetGoalsPenaltyShotAllowed(): void
    {
        $this->assertEquals($this->dto->goalsPenaltyShotAllowed, $this->model->getGoalsPenaltyShotAllowed());
    }

    public function testSetGoalsPenaltyShotAllowed(): void
    {
        $expected = "court";
        $model = $this->model;
        $model->setGoalsPenaltyShotAllowed($expected);

        $this->assertEquals($expected, $model->getGoalsPenaltyShotAllowed());
    }

    public function testGetGoalsAgainstAverage(): void
    {
        $this->assertEquals($this->dto->goalsAgainstAverage, $this->model->getGoalsAgainstAverage());
    }

    public function testSetGoalsAgainstAverage(): void
    {
        $expected = "yes";
        $model = $this->model;
        $model->setGoalsAgainstAverage($expected);

        $this->assertEquals($expected, $model->getGoalsAgainstAverage());
    }

    public function testGetGoalsAgainstTotal(): void
    {
        $this->assertEquals($this->dto->goalsAgainstTotal, $this->model->getGoalsAgainstTotal());
    }

    public function testSetGoalsAgainstTotal(): void
    {
        $expected = "visit";
        $model = $this->model;
        $model->setGoalsAgainstTotal($expected);

        $this->assertEquals($expected, $model->getGoalsAgainstTotal());
    }

    public function testGetSaves(): void
    {
        $this->assertEquals($this->dto->saves, $this->model->getSaves());
    }

    public function testSetSaves(): void
    {
        $expected = "party";
        $model = $this->model;
        $model->setSaves($expected);

        $this->assertEquals($expected, $model->getSaves());
    }

    public function testGetSavePercentage(): void
    {
        $this->assertEquals($this->dto->savePercentage, $this->model->getSavePercentage());
    }

    public function testSetSavePercentage(): void
    {
        $expected = "still";
        $model = $this->model;
        $model->setSavePercentage($expected);

        $this->assertEquals($expected, $model->getSavePercentage());
    }

    public function testGetCatchesPunches(): void
    {
        $this->assertEquals($this->dto->catchesPunches, $this->model->getCatchesPunches());
    }

    public function testSetCatchesPunches(): void
    {
        $expected = "often";
        $model = $this->model;
        $model->setCatchesPunches($expected);

        $this->assertEquals($expected, $model->getCatchesPunches());
    }

    public function testGetShotsOnGoalTotal(): void
    {
        $this->assertEquals($this->dto->shotsOnGoalTotal, $this->model->getShotsOnGoalTotal());
    }

    public function testSetShotsOnGoalTotal(): void
    {
        $expected = "financial";
        $model = $this->model;
        $model->setShotsOnGoalTotal($expected);

        $this->assertEquals($expected, $model->getShotsOnGoalTotal());
    }

    public function testGetShotsShootoutTotal(): void
    {
        $this->assertEquals($this->dto->shotsShootoutTotal, $this->model->getShotsShootoutTotal());
    }

    public function testSetShotsShootoutTotal(): void
    {
        $expected = "field";
        $model = $this->model;
        $model->setShotsShootoutTotal($expected);

        $this->assertEquals($expected, $model->getShotsShootoutTotal());
    }

    public function testGetShotsShootoutAllowed(): void
    {
        $this->assertEquals($this->dto->shotsShootoutAllowed, $this->model->getShotsShootoutAllowed());
    }

    public function testSetShotsShootoutAllowed(): void
    {
        $expected = "feel";
        $model = $this->model;
        $model->setShotsShootoutAllowed($expected);

        $this->assertEquals($expected, $model->getShotsShootoutAllowed());
    }

    public function testGetShotsBlocked(): void
    {
        $this->assertEquals($this->dto->shotsBlocked, $this->model->getShotsBlocked());
    }

    public function testSetShotsBlocked(): void
    {
        $expected = "court";
        $model = $this->model;
        $model->setShotsBlocked($expected);

        $this->assertEquals($expected, $model->getShotsBlocked());
    }

    public function testGetShutouts(): void
    {
        $this->assertEquals($this->dto->shutouts, $this->model->getShutouts());
    }

    public function testSetShutouts(): void
    {
        $expected = "doctor";
        $model = $this->model;
        $model->setShutouts($expected);

        $this->assertEquals($expected, $model->getShutouts());
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