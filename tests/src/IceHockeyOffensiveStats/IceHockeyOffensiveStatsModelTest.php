<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyOffensiveStats\{ IceHockeyOffensiveStatsDto, IceHockeyOffensiveStatsModel };

class IceHockeyOffensiveStatsModelTest extends TestCase
{
    private array $input;
    private IceHockeyOffensiveStatsDto $dto;
    private IceHockeyOffensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9589,
            "goals_game_winning" => "establish",
            "goals_game_tying" => "meet",
            "goals_power_play" => "ability",
            "goals_short_handed" => "director",
            "goals_even_strength" => "eat",
            "goals_empty_net" => "represent",
            "goals_overtime" => "president",
            "goals_shootout" => "line",
            "goals_penalty_shot" => "work",
            "assists" => "similar",
            "points" => "its",
            "power_play_amount" => "true",
            "power_play_percentage" => "choice",
            "shots_penalty_shot_taken" => "recently",
            "shots_penalty_shot_missed" => "country",
            "shots_penalty_shot_percentage" => "several",
            "giveaways" => "field",
            "minutes_power_play" => "civil",
            "faceoff_wins" => "drug",
            "faceoff_losses" => "trial",
            "faceoff_win_percentage" => "mind",
            "scoring_chances" => "go",
        ];
        $this->dto = new IceHockeyOffensiveStatsDto($this->input);
        $this->model = new IceHockeyOffensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new IceHockeyOffensiveStatsModel(null);

        $this->assertInstanceOf(IceHockeyOffensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 5918;
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
        $expected = "throughout";
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
        $expected = "imagine";
        $model = $this->model;
        $model->setGoalsGameTying($expected);

        $this->assertEquals($expected, $model->getGoalsGameTying());
    }

    public function testGetGoalsPowerPlay(): void
    {
        $this->assertEquals($this->dto->goalsPowerPlay, $this->model->getGoalsPowerPlay());
    }

    public function testSetGoalsPowerPlay(): void
    {
        $expected = "stop";
        $model = $this->model;
        $model->setGoalsPowerPlay($expected);

        $this->assertEquals($expected, $model->getGoalsPowerPlay());
    }

    public function testGetGoalsShortHanded(): void
    {
        $this->assertEquals($this->dto->goalsShortHanded, $this->model->getGoalsShortHanded());
    }

    public function testSetGoalsShortHanded(): void
    {
        $expected = "amount";
        $model = $this->model;
        $model->setGoalsShortHanded($expected);

        $this->assertEquals($expected, $model->getGoalsShortHanded());
    }

    public function testGetGoalsEvenStrength(): void
    {
        $this->assertEquals($this->dto->goalsEvenStrength, $this->model->getGoalsEvenStrength());
    }

    public function testSetGoalsEvenStrength(): void
    {
        $expected = "available";
        $model = $this->model;
        $model->setGoalsEvenStrength($expected);

        $this->assertEquals($expected, $model->getGoalsEvenStrength());
    }

    public function testGetGoalsEmptyNet(): void
    {
        $this->assertEquals($this->dto->goalsEmptyNet, $this->model->getGoalsEmptyNet());
    }

    public function testSetGoalsEmptyNet(): void
    {
        $expected = "sport";
        $model = $this->model;
        $model->setGoalsEmptyNet($expected);

        $this->assertEquals($expected, $model->getGoalsEmptyNet());
    }

    public function testGetGoalsOvertime(): void
    {
        $this->assertEquals($this->dto->goalsOvertime, $this->model->getGoalsOvertime());
    }

    public function testSetGoalsOvertime(): void
    {
        $expected = "sport";
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
        $expected = "mother";
        $model = $this->model;
        $model->setGoalsShootout($expected);

        $this->assertEquals($expected, $model->getGoalsShootout());
    }

    public function testGetGoalsPenaltyShot(): void
    {
        $this->assertEquals($this->dto->goalsPenaltyShot, $this->model->getGoalsPenaltyShot());
    }

    public function testSetGoalsPenaltyShot(): void
    {
        $expected = "modern";
        $model = $this->model;
        $model->setGoalsPenaltyShot($expected);

        $this->assertEquals($expected, $model->getGoalsPenaltyShot());
    }

    public function testGetAssists(): void
    {
        $this->assertEquals($this->dto->assists, $this->model->getAssists());
    }

    public function testSetAssists(): void
    {
        $expected = "safe";
        $model = $this->model;
        $model->setAssists($expected);

        $this->assertEquals($expected, $model->getAssists());
    }

    public function testGetPoints(): void
    {
        $this->assertEquals($this->dto->points, $this->model->getPoints());
    }

    public function testSetPoints(): void
    {
        $expected = "long";
        $model = $this->model;
        $model->setPoints($expected);

        $this->assertEquals($expected, $model->getPoints());
    }

    public function testGetPowerPlayAmount(): void
    {
        $this->assertEquals($this->dto->powerPlayAmount, $this->model->getPowerPlayAmount());
    }

    public function testSetPowerPlayAmount(): void
    {
        $expected = "sure";
        $model = $this->model;
        $model->setPowerPlayAmount($expected);

        $this->assertEquals($expected, $model->getPowerPlayAmount());
    }

    public function testGetPowerPlayPercentage(): void
    {
        $this->assertEquals($this->dto->powerPlayPercentage, $this->model->getPowerPlayPercentage());
    }

    public function testSetPowerPlayPercentage(): void
    {
        $expected = "address";
        $model = $this->model;
        $model->setPowerPlayPercentage($expected);

        $this->assertEquals($expected, $model->getPowerPlayPercentage());
    }

    public function testGetShotsPenaltyShotTaken(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotTaken, $this->model->getShotsPenaltyShotTaken());
    }

    public function testSetShotsPenaltyShotTaken(): void
    {
        $expected = "item";
        $model = $this->model;
        $model->setShotsPenaltyShotTaken($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotTaken());
    }

    public function testGetShotsPenaltyShotMissed(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotMissed, $this->model->getShotsPenaltyShotMissed());
    }

    public function testSetShotsPenaltyShotMissed(): void
    {
        $expected = "world";
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
        $expected = "star";
        $model = $this->model;
        $model->setShotsPenaltyShotPercentage($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotPercentage());
    }

    public function testGetGiveaways(): void
    {
        $this->assertEquals($this->dto->giveaways, $this->model->getGiveaways());
    }

    public function testSetGiveaways(): void
    {
        $expected = "address";
        $model = $this->model;
        $model->setGiveaways($expected);

        $this->assertEquals($expected, $model->getGiveaways());
    }

    public function testGetMinutesPowerPlay(): void
    {
        $this->assertEquals($this->dto->minutesPowerPlay, $this->model->getMinutesPowerPlay());
    }

    public function testSetMinutesPowerPlay(): void
    {
        $expected = "hot";
        $model = $this->model;
        $model->setMinutesPowerPlay($expected);

        $this->assertEquals($expected, $model->getMinutesPowerPlay());
    }

    public function testGetFaceoffWins(): void
    {
        $this->assertEquals($this->dto->faceoffWins, $this->model->getFaceoffWins());
    }

    public function testSetFaceoffWins(): void
    {
        $expected = "course";
        $model = $this->model;
        $model->setFaceoffWins($expected);

        $this->assertEquals($expected, $model->getFaceoffWins());
    }

    public function testGetFaceoffLosses(): void
    {
        $this->assertEquals($this->dto->faceoffLosses, $this->model->getFaceoffLosses());
    }

    public function testSetFaceoffLosses(): void
    {
        $expected = "reveal";
        $model = $this->model;
        $model->setFaceoffLosses($expected);

        $this->assertEquals($expected, $model->getFaceoffLosses());
    }

    public function testGetFaceoffWinPercentage(): void
    {
        $this->assertEquals($this->dto->faceoffWinPercentage, $this->model->getFaceoffWinPercentage());
    }

    public function testSetFaceoffWinPercentage(): void
    {
        $expected = "join";
        $model = $this->model;
        $model->setFaceoffWinPercentage($expected);

        $this->assertEquals($expected, $model->getFaceoffWinPercentage());
    }

    public function testGetScoringChances(): void
    {
        $this->assertEquals($this->dto->scoringChances, $this->model->getScoringChances());
    }

    public function testSetScoringChances(): void
    {
        $expected = "various";
        $model = $this->model;
        $model->setScoringChances($expected);

        $this->assertEquals($expected, $model->getScoringChances());
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