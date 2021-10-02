<?php

declare(strict_types=1);

namespace Sports\Tests\TennisReturnStats;

use PHPUnit\Framework\TestCase;
use Sports\TennisReturnStats\{ TennisReturnStatsDto, TennisReturnStatsModel };

class TennisReturnStatsModelTest extends TestCase
{
    private array $input;
    private TennisReturnStatsDto $dto;
    private TennisReturnStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7213,
            "returns_played" => "behavior",
            "matches_played" => "think",
            "first_service_return_points_won" => "art",
            "first_service_return_points_won_pct" => "tree",
            "second_service_return_points_won" => "art",
            "second_service_return_points_won_pct" => "whose",
            "return_games_played" => "wear",
            "return_games_won" => "team",
            "return_games_won_pct" => "director",
            "break_points_played" => "thank",
            "break_points_converted" => "of",
            "break_points_converted_pct" => "discuss",
        ];
        $this->dto = new TennisReturnStatsDto($this->input);
        $this->model = new TennisReturnStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TennisReturnStatsModel(null);

        $this->assertInstanceOf(TennisReturnStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 372;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetReturnsPlayed(): void
    {
        $this->assertEquals($this->dto->returnsPlayed, $this->model->getReturnsPlayed());
    }

    public function testSetReturnsPlayed(): void
    {
        $expected = "wonder";
        $model = $this->model;
        $model->setReturnsPlayed($expected);

        $this->assertEquals($expected, $model->getReturnsPlayed());
    }

    public function testGetMatchesPlayed(): void
    {
        $this->assertEquals($this->dto->matchesPlayed, $this->model->getMatchesPlayed());
    }

    public function testSetMatchesPlayed(): void
    {
        $expected = "kind";
        $model = $this->model;
        $model->setMatchesPlayed($expected);

        $this->assertEquals($expected, $model->getMatchesPlayed());
    }

    public function testGetFirstServiceReturnPointsWon(): void
    {
        $this->assertEquals($this->dto->firstServiceReturnPointsWon, $this->model->getFirstServiceReturnPointsWon());
    }

    public function testSetFirstServiceReturnPointsWon(): void
    {
        $expected = "exactly";
        $model = $this->model;
        $model->setFirstServiceReturnPointsWon($expected);

        $this->assertEquals($expected, $model->getFirstServiceReturnPointsWon());
    }

    public function testGetFirstServiceReturnPointsWonPct(): void
    {
        $this->assertEquals($this->dto->firstServiceReturnPointsWonPct, $this->model->getFirstServiceReturnPointsWonPct());
    }

    public function testSetFirstServiceReturnPointsWonPct(): void
    {
        $expected = "option";
        $model = $this->model;
        $model->setFirstServiceReturnPointsWonPct($expected);

        $this->assertEquals($expected, $model->getFirstServiceReturnPointsWonPct());
    }

    public function testGetSecondServiceReturnPointsWon(): void
    {
        $this->assertEquals($this->dto->secondServiceReturnPointsWon, $this->model->getSecondServiceReturnPointsWon());
    }

    public function testSetSecondServiceReturnPointsWon(): void
    {
        $expected = "marriage";
        $model = $this->model;
        $model->setSecondServiceReturnPointsWon($expected);

        $this->assertEquals($expected, $model->getSecondServiceReturnPointsWon());
    }

    public function testGetSecondServiceReturnPointsWonPct(): void
    {
        $this->assertEquals($this->dto->secondServiceReturnPointsWonPct, $this->model->getSecondServiceReturnPointsWonPct());
    }

    public function testSetSecondServiceReturnPointsWonPct(): void
    {
        $expected = "very";
        $model = $this->model;
        $model->setSecondServiceReturnPointsWonPct($expected);

        $this->assertEquals($expected, $model->getSecondServiceReturnPointsWonPct());
    }

    public function testGetReturnGamesPlayed(): void
    {
        $this->assertEquals($this->dto->returnGamesPlayed, $this->model->getReturnGamesPlayed());
    }

    public function testSetReturnGamesPlayed(): void
    {
        $expected = "career";
        $model = $this->model;
        $model->setReturnGamesPlayed($expected);

        $this->assertEquals($expected, $model->getReturnGamesPlayed());
    }

    public function testGetReturnGamesWon(): void
    {
        $this->assertEquals($this->dto->returnGamesWon, $this->model->getReturnGamesWon());
    }

    public function testSetReturnGamesWon(): void
    {
        $expected = "during";
        $model = $this->model;
        $model->setReturnGamesWon($expected);

        $this->assertEquals($expected, $model->getReturnGamesWon());
    }

    public function testGetReturnGamesWonPct(): void
    {
        $this->assertEquals($this->dto->returnGamesWonPct, $this->model->getReturnGamesWonPct());
    }

    public function testSetReturnGamesWonPct(): void
    {
        $expected = "run";
        $model = $this->model;
        $model->setReturnGamesWonPct($expected);

        $this->assertEquals($expected, $model->getReturnGamesWonPct());
    }

    public function testGetBreakPointsPlayed(): void
    {
        $this->assertEquals($this->dto->breakPointsPlayed, $this->model->getBreakPointsPlayed());
    }

    public function testSetBreakPointsPlayed(): void
    {
        $expected = "go";
        $model = $this->model;
        $model->setBreakPointsPlayed($expected);

        $this->assertEquals($expected, $model->getBreakPointsPlayed());
    }

    public function testGetBreakPointsConverted(): void
    {
        $this->assertEquals($this->dto->breakPointsConverted, $this->model->getBreakPointsConverted());
    }

    public function testSetBreakPointsConverted(): void
    {
        $expected = "whether";
        $model = $this->model;
        $model->setBreakPointsConverted($expected);

        $this->assertEquals($expected, $model->getBreakPointsConverted());
    }

    public function testGetBreakPointsConvertedPct(): void
    {
        $this->assertEquals($this->dto->breakPointsConvertedPct, $this->model->getBreakPointsConvertedPct());
    }

    public function testSetBreakPointsConvertedPct(): void
    {
        $expected = "place";
        $model = $this->model;
        $model->setBreakPointsConvertedPct($expected);

        $this->assertEquals($expected, $model->getBreakPointsConvertedPct());
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