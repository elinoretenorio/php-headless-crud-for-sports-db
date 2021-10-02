<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\SoccerOffensiveStats\{ SoccerOffensiveStatsDto, SoccerOffensiveStatsModel };

class SoccerOffensiveStatsModelTest extends TestCase
{
    private array $input;
    private SoccerOffensiveStatsDto $dto;
    private SoccerOffensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 5652,
            "goals_game_winning" => "arrive",
            "goals_game_tying" => "heavy",
            "goals_overtime" => "by",
            "goals_shootout" => "strategy",
            "goals_total" => "to",
            "assists_game_winning" => "music",
            "assists_game_tying" => "yet",
            "assists_overtime" => "probably",
            "assists_total" => "list",
            "points" => "front",
            "shots_total" => "student",
            "shots_on_goal_total" => "security",
            "shots_hit_frame" => "north",
            "shots_penalty_shot_taken" => "behind",
            "shots_penalty_shot_scored" => "address",
            "shots_penalty_shot_missed" => "fund",
            "shots_penalty_shot_percentage" => "there",
            "shots_shootout_taken" => "since",
            "shots_shootout_scored" => "boy",
            "shots_shootout_missed" => "later",
            "shots_shootout_percentage" => "yes",
            "giveaways" => "sing",
            "offsides" => "smile",
            "corner_kicks" => "American",
            "hat_tricks" => "eat",
        ];
        $this->dto = new SoccerOffensiveStatsDto($this->input);
        $this->model = new SoccerOffensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new SoccerOffensiveStatsModel(null);

        $this->assertInstanceOf(SoccerOffensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 6622;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetGoalsGameWinning(): void
    {
        $this->assertEquals($this->dto->goalsGameWinning, $this->model->getGoalsGameWinning());
    }

    public function testSetGoalsGameWinning(): void
    {
        $expected = "floor";
        $model = $this->model;
        $model->setGoalsGameWinning($expected);

        $this->assertEquals($expected, $model->getGoalsGameWinning());
    }

    public function testGetGoalsGameTying(): void
    {
        $this->assertEquals($this->dto->goalsGameTying, $this->model->getGoalsGameTying());
    }

    public function testSetGoalsGameTying(): void
    {
        $expected = "group";
        $model = $this->model;
        $model->setGoalsGameTying($expected);

        $this->assertEquals($expected, $model->getGoalsGameTying());
    }

    public function testGetGoalsOvertime(): void
    {
        $this->assertEquals($this->dto->goalsOvertime, $this->model->getGoalsOvertime());
    }

    public function testSetGoalsOvertime(): void
    {
        $expected = "it";
        $model = $this->model;
        $model->setGoalsOvertime($expected);

        $this->assertEquals($expected, $model->getGoalsOvertime());
    }

    public function testGetGoalsShootout(): void
    {
        $this->assertEquals($this->dto->goalsShootout, $this->model->getGoalsShootout());
    }

    public function testSetGoalsShootout(): void
    {
        $expected = "adult";
        $model = $this->model;
        $model->setGoalsShootout($expected);

        $this->assertEquals($expected, $model->getGoalsShootout());
    }

    public function testGetGoalsTotal(): void
    {
        $this->assertEquals($this->dto->goalsTotal, $this->model->getGoalsTotal());
    }

    public function testSetGoalsTotal(): void
    {
        $expected = "necessary";
        $model = $this->model;
        $model->setGoalsTotal($expected);

        $this->assertEquals($expected, $model->getGoalsTotal());
    }

    public function testGetAssistsGameWinning(): void
    {
        $this->assertEquals($this->dto->assistsGameWinning, $this->model->getAssistsGameWinning());
    }

    public function testSetAssistsGameWinning(): void
    {
        $expected = "response";
        $model = $this->model;
        $model->setAssistsGameWinning($expected);

        $this->assertEquals($expected, $model->getAssistsGameWinning());
    }

    public function testGetAssistsGameTying(): void
    {
        $this->assertEquals($this->dto->assistsGameTying, $this->model->getAssistsGameTying());
    }

    public function testSetAssistsGameTying(): void
    {
        $expected = "foreign";
        $model = $this->model;
        $model->setAssistsGameTying($expected);

        $this->assertEquals($expected, $model->getAssistsGameTying());
    }

    public function testGetAssistsOvertime(): void
    {
        $this->assertEquals($this->dto->assistsOvertime, $this->model->getAssistsOvertime());
    }

    public function testSetAssistsOvertime(): void
    {
        $expected = "population";
        $model = $this->model;
        $model->setAssistsOvertime($expected);

        $this->assertEquals($expected, $model->getAssistsOvertime());
    }

    public function testGetAssistsTotal(): void
    {
        $this->assertEquals($this->dto->assistsTotal, $this->model->getAssistsTotal());
    }

    public function testSetAssistsTotal(): void
    {
        $expected = "push";
        $model = $this->model;
        $model->setAssistsTotal($expected);

        $this->assertEquals($expected, $model->getAssistsTotal());
    }

    public function testGetPoints(): void
    {
        $this->assertEquals($this->dto->points, $this->model->getPoints());
    }

    public function testSetPoints(): void
    {
        $expected = "fill";
        $model = $this->model;
        $model->setPoints($expected);

        $this->assertEquals($expected, $model->getPoints());
    }

    public function testGetShotsTotal(): void
    {
        $this->assertEquals($this->dto->shotsTotal, $this->model->getShotsTotal());
    }

    public function testSetShotsTotal(): void
    {
        $expected = "structure";
        $model = $this->model;
        $model->setShotsTotal($expected);

        $this->assertEquals($expected, $model->getShotsTotal());
    }

    public function testGetShotsOnGoalTotal(): void
    {
        $this->assertEquals($this->dto->shotsOnGoalTotal, $this->model->getShotsOnGoalTotal());
    }

    public function testSetShotsOnGoalTotal(): void
    {
        $expected = "reason";
        $model = $this->model;
        $model->setShotsOnGoalTotal($expected);

        $this->assertEquals($expected, $model->getShotsOnGoalTotal());
    }

    public function testGetShotsHitFrame(): void
    {
        $this->assertEquals($this->dto->shotsHitFrame, $this->model->getShotsHitFrame());
    }

    public function testSetShotsHitFrame(): void
    {
        $expected = "president";
        $model = $this->model;
        $model->setShotsHitFrame($expected);

        $this->assertEquals($expected, $model->getShotsHitFrame());
    }

    public function testGetShotsPenaltyShotTaken(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotTaken, $this->model->getShotsPenaltyShotTaken());
    }

    public function testSetShotsPenaltyShotTaken(): void
    {
        $expected = "model";
        $model = $this->model;
        $model->setShotsPenaltyShotTaken($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotTaken());
    }

    public function testGetShotsPenaltyShotScored(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotScored, $this->model->getShotsPenaltyShotScored());
    }

    public function testSetShotsPenaltyShotScored(): void
    {
        $expected = "administration";
        $model = $this->model;
        $model->setShotsPenaltyShotScored($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotScored());
    }

    public function testGetShotsPenaltyShotMissed(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotMissed, $this->model->getShotsPenaltyShotMissed());
    }

    public function testSetShotsPenaltyShotMissed(): void
    {
        $expected = "themselves";
        $model = $this->model;
        $model->setShotsPenaltyShotMissed($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotMissed());
    }

    public function testGetShotsPenaltyShotPercentage(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotPercentage, $this->model->getShotsPenaltyShotPercentage());
    }

    public function testSetShotsPenaltyShotPercentage(): void
    {
        $expected = "hair";
        $model = $this->model;
        $model->setShotsPenaltyShotPercentage($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotPercentage());
    }

    public function testGetShotsShootoutTaken(): void
    {
        $this->assertEquals($this->dto->shotsShootoutTaken, $this->model->getShotsShootoutTaken());
    }

    public function testSetShotsShootoutTaken(): void
    {
        $expected = "crime";
        $model = $this->model;
        $model->setShotsShootoutTaken($expected);

        $this->assertEquals($expected, $model->getShotsShootoutTaken());
    }

    public function testGetShotsShootoutScored(): void
    {
        $this->assertEquals($this->dto->shotsShootoutScored, $this->model->getShotsShootoutScored());
    }

    public function testSetShotsShootoutScored(): void
    {
        $expected = "list";
        $model = $this->model;
        $model->setShotsShootoutScored($expected);

        $this->assertEquals($expected, $model->getShotsShootoutScored());
    }

    public function testGetShotsShootoutMissed(): void
    {
        $this->assertEquals($this->dto->shotsShootoutMissed, $this->model->getShotsShootoutMissed());
    }

    public function testSetShotsShootoutMissed(): void
    {
        $expected = "factor";
        $model = $this->model;
        $model->setShotsShootoutMissed($expected);

        $this->assertEquals($expected, $model->getShotsShootoutMissed());
    }

    public function testGetShotsShootoutPercentage(): void
    {
        $this->assertEquals($this->dto->shotsShootoutPercentage, $this->model->getShotsShootoutPercentage());
    }

    public function testSetShotsShootoutPercentage(): void
    {
        $expected = "blood";
        $model = $this->model;
        $model->setShotsShootoutPercentage($expected);

        $this->assertEquals($expected, $model->getShotsShootoutPercentage());
    }

    public function testGetGiveaways(): void
    {
        $this->assertEquals($this->dto->giveaways, $this->model->getGiveaways());
    }

    public function testSetGiveaways(): void
    {
        $expected = "series";
        $model = $this->model;
        $model->setGiveaways($expected);

        $this->assertEquals($expected, $model->getGiveaways());
    }

    public function testGetOffsides(): void
    {
        $this->assertEquals($this->dto->offsides, $this->model->getOffsides());
    }

    public function testSetOffsides(): void
    {
        $expected = "blue";
        $model = $this->model;
        $model->setOffsides($expected);

        $this->assertEquals($expected, $model->getOffsides());
    }

    public function testGetCornerKicks(): void
    {
        $this->assertEquals($this->dto->cornerKicks, $this->model->getCornerKicks());
    }

    public function testSetCornerKicks(): void
    {
        $expected = "guess";
        $model = $this->model;
        $model->setCornerKicks($expected);

        $this->assertEquals($expected, $model->getCornerKicks());
    }

    public function testGetHatTricks(): void
    {
        $this->assertEquals($this->dto->hatTricks, $this->model->getHatTricks());
    }

    public function testSetHatTricks(): void
    {
        $expected = "check";
        $model = $this->model;
        $model->setHatTricks($expected);

        $this->assertEquals($expected, $model->getHatTricks());
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