<?php

declare(strict_types=1);

namespace Sports\Tests\TennisServiceStats;

use PHPUnit\Framework\TestCase;
use Sports\TennisServiceStats\{ TennisServiceStatsDto, TennisServiceStatsModel };

class TennisServiceStatsModelTest extends TestCase
{
    private array $input;
    private TennisServiceStatsDto $dto;
    private TennisServiceStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 60,
            "services_played" => "because",
            "matches_played" => "record",
            "aces" => "course",
            "first_services_good" => "direction",
            "first_services_good_pct" => "in",
            "first_service_points_won" => "possible",
            "first_service_points_won_pct" => "structure",
            "second_service_points_won" => "admit",
            "second_service_points_won_pct" => "respond",
            "service_games_played" => "hot",
            "service_games_won" => "office",
            "service_games_won_pct" => "program",
            "break_points_played" => "necessary",
            "break_points_saved" => "short",
            "break_points_saved_pct" => "involve",
        ];
        $this->dto = new TennisServiceStatsDto($this->input);
        $this->model = new TennisServiceStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TennisServiceStatsModel(null);

        $this->assertInstanceOf(TennisServiceStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 6079;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetServicesPlayed(): void
    {
        $this->assertEquals($this->dto->servicesPlayed, $this->model->getServicesPlayed());
    }

    public function testSetServicesPlayed(): void
    {
        $expected = "compare";
        $model = $this->model;
        $model->setServicesPlayed($expected);

        $this->assertEquals($expected, $model->getServicesPlayed());
    }

    public function testGetMatchesPlayed(): void
    {
        $this->assertEquals($this->dto->matchesPlayed, $this->model->getMatchesPlayed());
    }

    public function testSetMatchesPlayed(): void
    {
        $expected = "fall";
        $model = $this->model;
        $model->setMatchesPlayed($expected);

        $this->assertEquals($expected, $model->getMatchesPlayed());
    }

    public function testGetAces(): void
    {
        $this->assertEquals($this->dto->aces, $this->model->getAces());
    }

    public function testSetAces(): void
    {
        $expected = "event";
        $model = $this->model;
        $model->setAces($expected);

        $this->assertEquals($expected, $model->getAces());
    }

    public function testGetFirstServicesGood(): void
    {
        $this->assertEquals($this->dto->firstServicesGood, $this->model->getFirstServicesGood());
    }

    public function testSetFirstServicesGood(): void
    {
        $expected = "clearly";
        $model = $this->model;
        $model->setFirstServicesGood($expected);

        $this->assertEquals($expected, $model->getFirstServicesGood());
    }

    public function testGetFirstServicesGoodPct(): void
    {
        $this->assertEquals($this->dto->firstServicesGoodPct, $this->model->getFirstServicesGoodPct());
    }

    public function testSetFirstServicesGoodPct(): void
    {
        $expected = "during";
        $model = $this->model;
        $model->setFirstServicesGoodPct($expected);

        $this->assertEquals($expected, $model->getFirstServicesGoodPct());
    }

    public function testGetFirstServicePointsWon(): void
    {
        $this->assertEquals($this->dto->firstServicePointsWon, $this->model->getFirstServicePointsWon());
    }

    public function testSetFirstServicePointsWon(): void
    {
        $expected = "understand";
        $model = $this->model;
        $model->setFirstServicePointsWon($expected);

        $this->assertEquals($expected, $model->getFirstServicePointsWon());
    }

    public function testGetFirstServicePointsWonPct(): void
    {
        $this->assertEquals($this->dto->firstServicePointsWonPct, $this->model->getFirstServicePointsWonPct());
    }

    public function testSetFirstServicePointsWonPct(): void
    {
        $expected = "body";
        $model = $this->model;
        $model->setFirstServicePointsWonPct($expected);

        $this->assertEquals($expected, $model->getFirstServicePointsWonPct());
    }

    public function testGetSecondServicePointsWon(): void
    {
        $this->assertEquals($this->dto->secondServicePointsWon, $this->model->getSecondServicePointsWon());
    }

    public function testSetSecondServicePointsWon(): void
    {
        $expected = "several";
        $model = $this->model;
        $model->setSecondServicePointsWon($expected);

        $this->assertEquals($expected, $model->getSecondServicePointsWon());
    }

    public function testGetSecondServicePointsWonPct(): void
    {
        $this->assertEquals($this->dto->secondServicePointsWonPct, $this->model->getSecondServicePointsWonPct());
    }

    public function testSetSecondServicePointsWonPct(): void
    {
        $expected = "grow";
        $model = $this->model;
        $model->setSecondServicePointsWonPct($expected);

        $this->assertEquals($expected, $model->getSecondServicePointsWonPct());
    }

    public function testGetServiceGamesPlayed(): void
    {
        $this->assertEquals($this->dto->serviceGamesPlayed, $this->model->getServiceGamesPlayed());
    }

    public function testSetServiceGamesPlayed(): void
    {
        $expected = "range";
        $model = $this->model;
        $model->setServiceGamesPlayed($expected);

        $this->assertEquals($expected, $model->getServiceGamesPlayed());
    }

    public function testGetServiceGamesWon(): void
    {
        $this->assertEquals($this->dto->serviceGamesWon, $this->model->getServiceGamesWon());
    }

    public function testSetServiceGamesWon(): void
    {
        $expected = "top";
        $model = $this->model;
        $model->setServiceGamesWon($expected);

        $this->assertEquals($expected, $model->getServiceGamesWon());
    }

    public function testGetServiceGamesWonPct(): void
    {
        $this->assertEquals($this->dto->serviceGamesWonPct, $this->model->getServiceGamesWonPct());
    }

    public function testSetServiceGamesWonPct(): void
    {
        $expected = "relate";
        $model = $this->model;
        $model->setServiceGamesWonPct($expected);

        $this->assertEquals($expected, $model->getServiceGamesWonPct());
    }

    public function testGetBreakPointsPlayed(): void
    {
        $this->assertEquals($this->dto->breakPointsPlayed, $this->model->getBreakPointsPlayed());
    }

    public function testSetBreakPointsPlayed(): void
    {
        $expected = "during";
        $model = $this->model;
        $model->setBreakPointsPlayed($expected);

        $this->assertEquals($expected, $model->getBreakPointsPlayed());
    }

    public function testGetBreakPointsSaved(): void
    {
        $this->assertEquals($this->dto->breakPointsSaved, $this->model->getBreakPointsSaved());
    }

    public function testSetBreakPointsSaved(): void
    {
        $expected = "turn";
        $model = $this->model;
        $model->setBreakPointsSaved($expected);

        $this->assertEquals($expected, $model->getBreakPointsSaved());
    }

    public function testGetBreakPointsSavedPct(): void
    {
        $this->assertEquals($this->dto->breakPointsSavedPct, $this->model->getBreakPointsSavedPct());
    }

    public function testSetBreakPointsSavedPct(): void
    {
        $expected = "national";
        $model = $this->model;
        $model->setBreakPointsSavedPct($expected);

        $this->assertEquals($expected, $model->getBreakPointsSavedPct());
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