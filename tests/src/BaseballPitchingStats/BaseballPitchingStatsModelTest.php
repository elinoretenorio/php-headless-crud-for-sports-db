<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballPitchingStats;

use PHPUnit\Framework\TestCase;
use Sports\BaseballPitchingStats\{ BaseballPitchingStatsDto, BaseballPitchingStatsModel };

class BaseballPitchingStatsModelTest extends TestCase
{
    private array $input;
    private BaseballPitchingStatsDto $dto;
    private BaseballPitchingStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7658,
            "runs_allowed" => 6337,
            "singles_allowed" => 5867,
            "doubles_allowed" => 8608,
            "triples_allowed" => 5829,
            "home_runs_allowed" => 3622,
            "innings_pitched" => "key",
            "hits" => 4389,
            "earned_runs" => 8836,
            "unearned_runs" => 1975,
            "bases_on_balls" => 7577,
            "bases_on_balls_intentional" => 2161,
            "strikeouts" => 6,
            "strikeout_to_bb_ratio" => 934.21,
            "number_of_pitches" => 5025,
            "era" => 440.90,
            "inherited_runners_scored" => 2244,
            "pick_offs" => 8396,
            "errors_hit_with_pitch" => 4536,
            "errors_wild_pitch" => 7169,
            "balks" => 6170,
            "wins" => 2471,
            "losses" => 3695,
            "saves" => 9383,
            "shutouts" => 3754,
            "games_complete" => 9726,
            "games_finished" => 139,
            "winning_percentage" => 428.73,
            "event_credit" => "series",
            "save_credit" => "indicate",
        ];
        $this->dto = new BaseballPitchingStatsDto($this->input);
        $this->model = new BaseballPitchingStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballPitchingStatsModel(null);

        $this->assertInstanceOf(BaseballPitchingStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2409;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetRunsAllowed(): void
    {
        $this->assertEquals($this->dto->runsAllowed, $this->model->getRunsAllowed());
    }

    public function testSetRunsAllowed(): void
    {
        $expected = 5436;
        $model = $this->model;
        $model->setRunsAllowed($expected);

        $this->assertEquals($expected, $model->getRunsAllowed());
    }

    public function testGetSinglesAllowed(): void
    {
        $this->assertEquals($this->dto->singlesAllowed, $this->model->getSinglesAllowed());
    }

    public function testSetSinglesAllowed(): void
    {
        $expected = 3499;
        $model = $this->model;
        $model->setSinglesAllowed($expected);

        $this->assertEquals($expected, $model->getSinglesAllowed());
    }

    public function testGetDoublesAllowed(): void
    {
        $this->assertEquals($this->dto->doublesAllowed, $this->model->getDoublesAllowed());
    }

    public function testSetDoublesAllowed(): void
    {
        $expected = 9245;
        $model = $this->model;
        $model->setDoublesAllowed($expected);

        $this->assertEquals($expected, $model->getDoublesAllowed());
    }

    public function testGetTriplesAllowed(): void
    {
        $this->assertEquals($this->dto->triplesAllowed, $this->model->getTriplesAllowed());
    }

    public function testSetTriplesAllowed(): void
    {
        $expected = 8921;
        $model = $this->model;
        $model->setTriplesAllowed($expected);

        $this->assertEquals($expected, $model->getTriplesAllowed());
    }

    public function testGetHomeRunsAllowed(): void
    {
        $this->assertEquals($this->dto->homeRunsAllowed, $this->model->getHomeRunsAllowed());
    }

    public function testSetHomeRunsAllowed(): void
    {
        $expected = 5869;
        $model = $this->model;
        $model->setHomeRunsAllowed($expected);

        $this->assertEquals($expected, $model->getHomeRunsAllowed());
    }

    public function testGetInningsPitched(): void
    {
        $this->assertEquals($this->dto->inningsPitched, $this->model->getInningsPitched());
    }

    public function testSetInningsPitched(): void
    {
        $expected = "image";
        $model = $this->model;
        $model->setInningsPitched($expected);

        $this->assertEquals($expected, $model->getInningsPitched());
    }

    public function testGetHits(): void
    {
        $this->assertEquals($this->dto->hits, $this->model->getHits());
    }

    public function testSetHits(): void
    {
        $expected = 8614;
        $model = $this->model;
        $model->setHits($expected);

        $this->assertEquals($expected, $model->getHits());
    }

    public function testGetEarnedRuns(): void
    {
        $this->assertEquals($this->dto->earnedRuns, $this->model->getEarnedRuns());
    }

    public function testSetEarnedRuns(): void
    {
        $expected = 5869;
        $model = $this->model;
        $model->setEarnedRuns($expected);

        $this->assertEquals($expected, $model->getEarnedRuns());
    }

    public function testGetUnearnedRuns(): void
    {
        $this->assertEquals($this->dto->unearnedRuns, $this->model->getUnearnedRuns());
    }

    public function testSetUnearnedRuns(): void
    {
        $expected = 4006;
        $model = $this->model;
        $model->setUnearnedRuns($expected);

        $this->assertEquals($expected, $model->getUnearnedRuns());
    }

    public function testGetBasesOnBalls(): void
    {
        $this->assertEquals($this->dto->basesOnBalls, $this->model->getBasesOnBalls());
    }

    public function testSetBasesOnBalls(): void
    {
        $expected = 1220;
        $model = $this->model;
        $model->setBasesOnBalls($expected);

        $this->assertEquals($expected, $model->getBasesOnBalls());
    }

    public function testGetBasesOnBallsIntentional(): void
    {
        $this->assertEquals($this->dto->basesOnBallsIntentional, $this->model->getBasesOnBallsIntentional());
    }

    public function testSetBasesOnBallsIntentional(): void
    {
        $expected = 7622;
        $model = $this->model;
        $model->setBasesOnBallsIntentional($expected);

        $this->assertEquals($expected, $model->getBasesOnBallsIntentional());
    }

    public function testGetStrikeouts(): void
    {
        $this->assertEquals($this->dto->strikeouts, $this->model->getStrikeouts());
    }

    public function testSetStrikeouts(): void
    {
        $expected = 3244;
        $model = $this->model;
        $model->setStrikeouts($expected);

        $this->assertEquals($expected, $model->getStrikeouts());
    }

    public function testGetStrikeoutToBbRatio(): void
    {
        $this->assertEquals($this->dto->strikeoutToBbRatio, $this->model->getStrikeoutToBbRatio());
    }

    public function testSetStrikeoutToBbRatio(): void
    {
        $expected = 339.23;
        $model = $this->model;
        $model->setStrikeoutToBbRatio($expected);

        $this->assertEquals($expected, $model->getStrikeoutToBbRatio());
    }

    public function testGetNumberOfPitches(): void
    {
        $this->assertEquals($this->dto->numberOfPitches, $this->model->getNumberOfPitches());
    }

    public function testSetNumberOfPitches(): void
    {
        $expected = 5186;
        $model = $this->model;
        $model->setNumberOfPitches($expected);

        $this->assertEquals($expected, $model->getNumberOfPitches());
    }

    public function testGetEra(): void
    {
        $this->assertEquals($this->dto->era, $this->model->getEra());
    }

    public function testSetEra(): void
    {
        $expected = 323.30;
        $model = $this->model;
        $model->setEra($expected);

        $this->assertEquals($expected, $model->getEra());
    }

    public function testGetInheritedRunnersScored(): void
    {
        $this->assertEquals($this->dto->inheritedRunnersScored, $this->model->getInheritedRunnersScored());
    }

    public function testSetInheritedRunnersScored(): void
    {
        $expected = 5667;
        $model = $this->model;
        $model->setInheritedRunnersScored($expected);

        $this->assertEquals($expected, $model->getInheritedRunnersScored());
    }

    public function testGetPickOffs(): void
    {
        $this->assertEquals($this->dto->pickOffs, $this->model->getPickOffs());
    }

    public function testSetPickOffs(): void
    {
        $expected = 1212;
        $model = $this->model;
        $model->setPickOffs($expected);

        $this->assertEquals($expected, $model->getPickOffs());
    }

    public function testGetErrorsHitWithPitch(): void
    {
        $this->assertEquals($this->dto->errorsHitWithPitch, $this->model->getErrorsHitWithPitch());
    }

    public function testSetErrorsHitWithPitch(): void
    {
        $expected = 4277;
        $model = $this->model;
        $model->setErrorsHitWithPitch($expected);

        $this->assertEquals($expected, $model->getErrorsHitWithPitch());
    }

    public function testGetErrorsWildPitch(): void
    {
        $this->assertEquals($this->dto->errorsWildPitch, $this->model->getErrorsWildPitch());
    }

    public function testSetErrorsWildPitch(): void
    {
        $expected = 3442;
        $model = $this->model;
        $model->setErrorsWildPitch($expected);

        $this->assertEquals($expected, $model->getErrorsWildPitch());
    }

    public function testGetBalks(): void
    {
        $this->assertEquals($this->dto->balks, $this->model->getBalks());
    }

    public function testSetBalks(): void
    {
        $expected = 4568;
        $model = $this->model;
        $model->setBalks($expected);

        $this->assertEquals($expected, $model->getBalks());
    }

    public function testGetWins(): void
    {
        $this->assertEquals($this->dto->wins, $this->model->getWins());
    }

    public function testSetWins(): void
    {
        $expected = 9600;
        $model = $this->model;
        $model->setWins($expected);

        $this->assertEquals($expected, $model->getWins());
    }

    public function testGetLosses(): void
    {
        $this->assertEquals($this->dto->losses, $this->model->getLosses());
    }

    public function testSetLosses(): void
    {
        $expected = 3819;
        $model = $this->model;
        $model->setLosses($expected);

        $this->assertEquals($expected, $model->getLosses());
    }

    public function testGetSaves(): void
    {
        $this->assertEquals($this->dto->saves, $this->model->getSaves());
    }

    public function testSetSaves(): void
    {
        $expected = 7523;
        $model = $this->model;
        $model->setSaves($expected);

        $this->assertEquals($expected, $model->getSaves());
    }

    public function testGetShutouts(): void
    {
        $this->assertEquals($this->dto->shutouts, $this->model->getShutouts());
    }

    public function testSetShutouts(): void
    {
        $expected = 6717;
        $model = $this->model;
        $model->setShutouts($expected);

        $this->assertEquals($expected, $model->getShutouts());
    }

    public function testGetGamesComplete(): void
    {
        $this->assertEquals($this->dto->gamesComplete, $this->model->getGamesComplete());
    }

    public function testSetGamesComplete(): void
    {
        $expected = 1633;
        $model = $this->model;
        $model->setGamesComplete($expected);

        $this->assertEquals($expected, $model->getGamesComplete());
    }

    public function testGetGamesFinished(): void
    {
        $this->assertEquals($this->dto->gamesFinished, $this->model->getGamesFinished());
    }

    public function testSetGamesFinished(): void
    {
        $expected = 6896;
        $model = $this->model;
        $model->setGamesFinished($expected);

        $this->assertEquals($expected, $model->getGamesFinished());
    }

    public function testGetWinningPercentage(): void
    {
        $this->assertEquals($this->dto->winningPercentage, $this->model->getWinningPercentage());
    }

    public function testSetWinningPercentage(): void
    {
        $expected = 937.00;
        $model = $this->model;
        $model->setWinningPercentage($expected);

        $this->assertEquals($expected, $model->getWinningPercentage());
    }

    public function testGetEventCredit(): void
    {
        $this->assertEquals($this->dto->eventCredit, $this->model->getEventCredit());
    }

    public function testSetEventCredit(): void
    {
        $expected = "send";
        $model = $this->model;
        $model->setEventCredit($expected);

        $this->assertEquals($expected, $model->getEventCredit());
    }

    public function testGetSaveCredit(): void
    {
        $this->assertEquals($this->dto->saveCredit, $this->model->getSaveCredit());
    }

    public function testSetSaveCredit(): void
    {
        $expected = "perhaps";
        $model = $this->model;
        $model->setSaveCredit($expected);

        $this->assertEquals($expected, $model->getSaveCredit());
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