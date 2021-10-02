<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyDefensiveStats\{ IceHockeyDefensiveStatsDto, IceHockeyDefensiveStatsModel };

class IceHockeyDefensiveStatsModelTest extends TestCase
{
    private array $input;
    private IceHockeyDefensiveStatsDto $dto;
    private IceHockeyDefensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1672,
            "shots_power_play_allowed" => "project",
            "shots_penalty_shot_allowed" => "part",
            "goals_power_play_allowed" => "so",
            "goals_penalty_shot_allowed" => "how",
            "goals_against_average" => "without",
            "saves" => "against",
            "save_percentage" => "theory",
            "penalty_killing_amount" => "successful",
            "penalty_killing_percentage" => "store",
            "shots_blocked" => "phone",
            "takeaways" => "image",
            "shutouts" => "rather",
            "minutes_penalty_killing" => "now",
            "hits" => "recent",
            "goals_empty_net_allowed" => "late",
            "goals_short_handed_allowed" => "prevent",
            "goals_shootout_allowed" => "population",
            "shots_shootout_allowed" => "support",
        ];
        $this->dto = new IceHockeyDefensiveStatsDto($this->input);
        $this->model = new IceHockeyDefensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new IceHockeyDefensiveStatsModel(null);

        $this->assertInstanceOf(IceHockeyDefensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2828;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetShotsPowerPlayAllowed(): void
    {
        $this->assertEquals($this->dto->shotsPowerPlayAllowed, $this->model->getShotsPowerPlayAllowed());
    }

    public function testSetShotsPowerPlayAllowed(): void
    {
        $expected = "coach";
        $model = $this->model;
        $model->setShotsPowerPlayAllowed($expected);

        $this->assertEquals($expected, $model->getShotsPowerPlayAllowed());
    }

    public function testGetShotsPenaltyShotAllowed(): void
    {
        $this->assertEquals($this->dto->shotsPenaltyShotAllowed, $this->model->getShotsPenaltyShotAllowed());
    }

    public function testSetShotsPenaltyShotAllowed(): void
    {
        $expected = "walk";
        $model = $this->model;
        $model->setShotsPenaltyShotAllowed($expected);

        $this->assertEquals($expected, $model->getShotsPenaltyShotAllowed());
    }

    public function testGetGoalsPowerPlayAllowed(): void
    {
        $this->assertEquals($this->dto->goalsPowerPlayAllowed, $this->model->getGoalsPowerPlayAllowed());
    }

    public function testSetGoalsPowerPlayAllowed(): void
    {
        $expected = "listen";
        $model = $this->model;
        $model->setGoalsPowerPlayAllowed($expected);

        $this->assertEquals($expected, $model->getGoalsPowerPlayAllowed());
    }

    public function testGetGoalsPenaltyShotAllowed(): void
    {
        $this->assertEquals($this->dto->goalsPenaltyShotAllowed, $this->model->getGoalsPenaltyShotAllowed());
    }

    public function testSetGoalsPenaltyShotAllowed(): void
    {
        $expected = "choice";
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
        $expected = "tax";
        $model = $this->model;
        $model->setGoalsAgainstAverage($expected);

        $this->assertEquals($expected, $model->getGoalsAgainstAverage());
    }

    public function testGetSaves(): void
    {
        $this->assertEquals($this->dto->saves, $this->model->getSaves());
    }

    public function testSetSaves(): void
    {
        $expected = "join";
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
        $expected = "ball";
        $model = $this->model;
        $model->setSavePercentage($expected);

        $this->assertEquals($expected, $model->getSavePercentage());
    }

    public function testGetPenaltyKillingAmount(): void
    {
        $this->assertEquals($this->dto->penaltyKillingAmount, $this->model->getPenaltyKillingAmount());
    }

    public function testSetPenaltyKillingAmount(): void
    {
        $expected = "treat";
        $model = $this->model;
        $model->setPenaltyKillingAmount($expected);

        $this->assertEquals($expected, $model->getPenaltyKillingAmount());
    }

    public function testGetPenaltyKillingPercentage(): void
    {
        $this->assertEquals($this->dto->penaltyKillingPercentage, $this->model->getPenaltyKillingPercentage());
    }

    public function testSetPenaltyKillingPercentage(): void
    {
        $expected = "coach";
        $model = $this->model;
        $model->setPenaltyKillingPercentage($expected);

        $this->assertEquals($expected, $model->getPenaltyKillingPercentage());
    }

    public function testGetShotsBlocked(): void
    {
        $this->assertEquals($this->dto->shotsBlocked, $this->model->getShotsBlocked());
    }

    public function testSetShotsBlocked(): void
    {
        $expected = "from";
        $model = $this->model;
        $model->setShotsBlocked($expected);

        $this->assertEquals($expected, $model->getShotsBlocked());
    }

    public function testGetTakeaways(): void
    {
        $this->assertEquals($this->dto->takeaways, $this->model->getTakeaways());
    }

    public function testSetTakeaways(): void
    {
        $expected = "ok";
        $model = $this->model;
        $model->setTakeaways($expected);

        $this->assertEquals($expected, $model->getTakeaways());
    }

    public function testGetShutouts(): void
    {
        $this->assertEquals($this->dto->shutouts, $this->model->getShutouts());
    }

    public function testSetShutouts(): void
    {
        $expected = "professional";
        $model = $this->model;
        $model->setShutouts($expected);

        $this->assertEquals($expected, $model->getShutouts());
    }

    public function testGetMinutesPenaltyKilling(): void
    {
        $this->assertEquals($this->dto->minutesPenaltyKilling, $this->model->getMinutesPenaltyKilling());
    }

    public function testSetMinutesPenaltyKilling(): void
    {
        $expected = "owner";
        $model = $this->model;
        $model->setMinutesPenaltyKilling($expected);

        $this->assertEquals($expected, $model->getMinutesPenaltyKilling());
    }

    public function testGetHits(): void
    {
        $this->assertEquals($this->dto->hits, $this->model->getHits());
    }

    public function testSetHits(): void
    {
        $expected = "order";
        $model = $this->model;
        $model->setHits($expected);

        $this->assertEquals($expected, $model->getHits());
    }

    public function testGetGoalsEmptyNetAllowed(): void
    {
        $this->assertEquals($this->dto->goalsEmptyNetAllowed, $this->model->getGoalsEmptyNetAllowed());
    }

    public function testSetGoalsEmptyNetAllowed(): void
    {
        $expected = "tree";
        $model = $this->model;
        $model->setGoalsEmptyNetAllowed($expected);

        $this->assertEquals($expected, $model->getGoalsEmptyNetAllowed());
    }

    public function testGetGoalsShortHandedAllowed(): void
    {
        $this->assertEquals($this->dto->goalsShortHandedAllowed, $this->model->getGoalsShortHandedAllowed());
    }

    public function testSetGoalsShortHandedAllowed(): void
    {
        $expected = "whom";
        $model = $this->model;
        $model->setGoalsShortHandedAllowed($expected);

        $this->assertEquals($expected, $model->getGoalsShortHandedAllowed());
    }

    public function testGetGoalsShootoutAllowed(): void
    {
        $this->assertEquals($this->dto->goalsShootoutAllowed, $this->model->getGoalsShootoutAllowed());
    }

    public function testSetGoalsShootoutAllowed(): void
    {
        $expected = "from";
        $model = $this->model;
        $model->setGoalsShootoutAllowed($expected);

        $this->assertEquals($expected, $model->getGoalsShootoutAllowed());
    }

    public function testGetShotsShootoutAllowed(): void
    {
        $this->assertEquals($this->dto->shotsShootoutAllowed, $this->model->getShotsShootoutAllowed());
    }

    public function testSetShotsShootoutAllowed(): void
    {
        $expected = "miss";
        $model = $this->model;
        $model->setShotsShootoutAllowed($expected);

        $this->assertEquals($expected, $model->getShotsShootoutAllowed());
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