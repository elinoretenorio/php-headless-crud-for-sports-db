<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballSpecialTeamsStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballSpecialTeamsStats\{ AmericanFootballSpecialTeamsStatsDto, AmericanFootballSpecialTeamsStatsModel };

class AmericanFootballSpecialTeamsStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballSpecialTeamsStatsDto $dto;
    private AmericanFootballSpecialTeamsStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9683,
            "returns_punt_total" => "decide",
            "returns_punt_yards" => "ability",
            "returns_punt_average" => "economic",
            "returns_punt_longest" => "few",
            "returns_punt_touchdown" => "game",
            "returns_kickoff_total" => "whom",
            "returns_kickoff_yards" => "tonight",
            "returns_kickoff_average" => "put",
            "returns_kickoff_longest" => "decide",
            "returns_kickoff_touchdown" => "soon",
            "returns_total" => "role",
            "returns_yards" => "exist",
            "punts_total" => "seek",
            "punts_yards_gross" => "pressure",
            "punts_yards_net" => "push",
            "punts_longest" => "nature",
            "punts_inside_20" => "professional",
            "punts_inside_20_percentage" => "must",
            "punts_average" => "art",
            "punts_blocked" => "city",
            "touchbacks_total" => "determine",
            "touchbacks_total_percentage" => "particular",
            "touchbacks_kickoffs" => "mention",
            "touchbacks_kickoffs_percentage" => "general",
            "touchbacks_punts" => "truth",
            "touchbacks_punts_percentage" => "coach",
            "touchbacks_interceptions" => "those",
            "touchbacks_interceptions_percentage" => "outside",
            "fair_catches" => "line",
        ];
        $this->dto = new AmericanFootballSpecialTeamsStatsDto($this->input);
        $this->model = new AmericanFootballSpecialTeamsStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballSpecialTeamsStatsModel(null);

        $this->assertInstanceOf(AmericanFootballSpecialTeamsStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 7941;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetReturnsPuntTotal(): void
    {
        $this->assertEquals($this->dto->returnsPuntTotal, $this->model->getReturnsPuntTotal());
    }

    public function testSetReturnsPuntTotal(): void
    {
        $expected = "thousand";
        $model = $this->model;
        $model->setReturnsPuntTotal($expected);

        $this->assertEquals($expected, $model->getReturnsPuntTotal());
    }

    public function testGetReturnsPuntYards(): void
    {
        $this->assertEquals($this->dto->returnsPuntYards, $this->model->getReturnsPuntYards());
    }

    public function testSetReturnsPuntYards(): void
    {
        $expected = "PM";
        $model = $this->model;
        $model->setReturnsPuntYards($expected);

        $this->assertEquals($expected, $model->getReturnsPuntYards());
    }

    public function testGetReturnsPuntAverage(): void
    {
        $this->assertEquals($this->dto->returnsPuntAverage, $this->model->getReturnsPuntAverage());
    }

    public function testSetReturnsPuntAverage(): void
    {
        $expected = "authority";
        $model = $this->model;
        $model->setReturnsPuntAverage($expected);

        $this->assertEquals($expected, $model->getReturnsPuntAverage());
    }

    public function testGetReturnsPuntLongest(): void
    {
        $this->assertEquals($this->dto->returnsPuntLongest, $this->model->getReturnsPuntLongest());
    }

    public function testSetReturnsPuntLongest(): void
    {
        $expected = "southern";
        $model = $this->model;
        $model->setReturnsPuntLongest($expected);

        $this->assertEquals($expected, $model->getReturnsPuntLongest());
    }

    public function testGetReturnsPuntTouchdown(): void
    {
        $this->assertEquals($this->dto->returnsPuntTouchdown, $this->model->getReturnsPuntTouchdown());
    }

    public function testSetReturnsPuntTouchdown(): void
    {
        $expected = "girl";
        $model = $this->model;
        $model->setReturnsPuntTouchdown($expected);

        $this->assertEquals($expected, $model->getReturnsPuntTouchdown());
    }

    public function testGetReturnsKickoffTotal(): void
    {
        $this->assertEquals($this->dto->returnsKickoffTotal, $this->model->getReturnsKickoffTotal());
    }

    public function testSetReturnsKickoffTotal(): void
    {
        $expected = "quite";
        $model = $this->model;
        $model->setReturnsKickoffTotal($expected);

        $this->assertEquals($expected, $model->getReturnsKickoffTotal());
    }

    public function testGetReturnsKickoffYards(): void
    {
        $this->assertEquals($this->dto->returnsKickoffYards, $this->model->getReturnsKickoffYards());
    }

    public function testSetReturnsKickoffYards(): void
    {
        $expected = "today";
        $model = $this->model;
        $model->setReturnsKickoffYards($expected);

        $this->assertEquals($expected, $model->getReturnsKickoffYards());
    }

    public function testGetReturnsKickoffAverage(): void
    {
        $this->assertEquals($this->dto->returnsKickoffAverage, $this->model->getReturnsKickoffAverage());
    }

    public function testSetReturnsKickoffAverage(): void
    {
        $expected = "family";
        $model = $this->model;
        $model->setReturnsKickoffAverage($expected);

        $this->assertEquals($expected, $model->getReturnsKickoffAverage());
    }

    public function testGetReturnsKickoffLongest(): void
    {
        $this->assertEquals($this->dto->returnsKickoffLongest, $this->model->getReturnsKickoffLongest());
    }

    public function testSetReturnsKickoffLongest(): void
    {
        $expected = "worry";
        $model = $this->model;
        $model->setReturnsKickoffLongest($expected);

        $this->assertEquals($expected, $model->getReturnsKickoffLongest());
    }

    public function testGetReturnsKickoffTouchdown(): void
    {
        $this->assertEquals($this->dto->returnsKickoffTouchdown, $this->model->getReturnsKickoffTouchdown());
    }

    public function testSetReturnsKickoffTouchdown(): void
    {
        $expected = "memory";
        $model = $this->model;
        $model->setReturnsKickoffTouchdown($expected);

        $this->assertEquals($expected, $model->getReturnsKickoffTouchdown());
    }

    public function testGetReturnsTotal(): void
    {
        $this->assertEquals($this->dto->returnsTotal, $this->model->getReturnsTotal());
    }

    public function testSetReturnsTotal(): void
    {
        $expected = "himself";
        $model = $this->model;
        $model->setReturnsTotal($expected);

        $this->assertEquals($expected, $model->getReturnsTotal());
    }

    public function testGetReturnsYards(): void
    {
        $this->assertEquals($this->dto->returnsYards, $this->model->getReturnsYards());
    }

    public function testSetReturnsYards(): void
    {
        $expected = "senior";
        $model = $this->model;
        $model->setReturnsYards($expected);

        $this->assertEquals($expected, $model->getReturnsYards());
    }

    public function testGetPuntsTotal(): void
    {
        $this->assertEquals($this->dto->puntsTotal, $this->model->getPuntsTotal());
    }

    public function testSetPuntsTotal(): void
    {
        $expected = "recognize";
        $model = $this->model;
        $model->setPuntsTotal($expected);

        $this->assertEquals($expected, $model->getPuntsTotal());
    }

    public function testGetPuntsYardsGross(): void
    {
        $this->assertEquals($this->dto->puntsYardsGross, $this->model->getPuntsYardsGross());
    }

    public function testSetPuntsYardsGross(): void
    {
        $expected = "song";
        $model = $this->model;
        $model->setPuntsYardsGross($expected);

        $this->assertEquals($expected, $model->getPuntsYardsGross());
    }

    public function testGetPuntsYardsNet(): void
    {
        $this->assertEquals($this->dto->puntsYardsNet, $this->model->getPuntsYardsNet());
    }

    public function testSetPuntsYardsNet(): void
    {
        $expected = "word";
        $model = $this->model;
        $model->setPuntsYardsNet($expected);

        $this->assertEquals($expected, $model->getPuntsYardsNet());
    }

    public function testGetPuntsLongest(): void
    {
        $this->assertEquals($this->dto->puntsLongest, $this->model->getPuntsLongest());
    }

    public function testSetPuntsLongest(): void
    {
        $expected = "but";
        $model = $this->model;
        $model->setPuntsLongest($expected);

        $this->assertEquals($expected, $model->getPuntsLongest());
    }

    public function testGetPuntsInside20(): void
    {
        $this->assertEquals($this->dto->puntsInside20, $this->model->getPuntsInside20());
    }

    public function testSetPuntsInside20(): void
    {
        $expected = "vote";
        $model = $this->model;
        $model->setPuntsInside20($expected);

        $this->assertEquals($expected, $model->getPuntsInside20());
    }

    public function testGetPuntsInside20Percentage(): void
    {
        $this->assertEquals($this->dto->puntsInside20Percentage, $this->model->getPuntsInside20Percentage());
    }

    public function testSetPuntsInside20Percentage(): void
    {
        $expected = "operation";
        $model = $this->model;
        $model->setPuntsInside20Percentage($expected);

        $this->assertEquals($expected, $model->getPuntsInside20Percentage());
    }

    public function testGetPuntsAverage(): void
    {
        $this->assertEquals($this->dto->puntsAverage, $this->model->getPuntsAverage());
    }

    public function testSetPuntsAverage(): void
    {
        $expected = "data";
        $model = $this->model;
        $model->setPuntsAverage($expected);

        $this->assertEquals($expected, $model->getPuntsAverage());
    }

    public function testGetPuntsBlocked(): void
    {
        $this->assertEquals($this->dto->puntsBlocked, $this->model->getPuntsBlocked());
    }

    public function testSetPuntsBlocked(): void
    {
        $expected = "important";
        $model = $this->model;
        $model->setPuntsBlocked($expected);

        $this->assertEquals($expected, $model->getPuntsBlocked());
    }

    public function testGetTouchbacksTotal(): void
    {
        $this->assertEquals($this->dto->touchbacksTotal, $this->model->getTouchbacksTotal());
    }

    public function testSetTouchbacksTotal(): void
    {
        $expected = "I";
        $model = $this->model;
        $model->setTouchbacksTotal($expected);

        $this->assertEquals($expected, $model->getTouchbacksTotal());
    }

    public function testGetTouchbacksTotalPercentage(): void
    {
        $this->assertEquals($this->dto->touchbacksTotalPercentage, $this->model->getTouchbacksTotalPercentage());
    }

    public function testSetTouchbacksTotalPercentage(): void
    {
        $expected = "letter";
        $model = $this->model;
        $model->setTouchbacksTotalPercentage($expected);

        $this->assertEquals($expected, $model->getTouchbacksTotalPercentage());
    }

    public function testGetTouchbacksKickoffs(): void
    {
        $this->assertEquals($this->dto->touchbacksKickoffs, $this->model->getTouchbacksKickoffs());
    }

    public function testSetTouchbacksKickoffs(): void
    {
        $expected = "score";
        $model = $this->model;
        $model->setTouchbacksKickoffs($expected);

        $this->assertEquals($expected, $model->getTouchbacksKickoffs());
    }

    public function testGetTouchbacksKickoffsPercentage(): void
    {
        $this->assertEquals($this->dto->touchbacksKickoffsPercentage, $this->model->getTouchbacksKickoffsPercentage());
    }

    public function testSetTouchbacksKickoffsPercentage(): void
    {
        $expected = "away";
        $model = $this->model;
        $model->setTouchbacksKickoffsPercentage($expected);

        $this->assertEquals($expected, $model->getTouchbacksKickoffsPercentage());
    }

    public function testGetTouchbacksPunts(): void
    {
        $this->assertEquals($this->dto->touchbacksPunts, $this->model->getTouchbacksPunts());
    }

    public function testSetTouchbacksPunts(): void
    {
        $expected = "defense";
        $model = $this->model;
        $model->setTouchbacksPunts($expected);

        $this->assertEquals($expected, $model->getTouchbacksPunts());
    }

    public function testGetTouchbacksPuntsPercentage(): void
    {
        $this->assertEquals($this->dto->touchbacksPuntsPercentage, $this->model->getTouchbacksPuntsPercentage());
    }

    public function testSetTouchbacksPuntsPercentage(): void
    {
        $expected = "modern";
        $model = $this->model;
        $model->setTouchbacksPuntsPercentage($expected);

        $this->assertEquals($expected, $model->getTouchbacksPuntsPercentage());
    }

    public function testGetTouchbacksInterceptions(): void
    {
        $this->assertEquals($this->dto->touchbacksInterceptions, $this->model->getTouchbacksInterceptions());
    }

    public function testSetTouchbacksInterceptions(): void
    {
        $expected = "itself";
        $model = $this->model;
        $model->setTouchbacksInterceptions($expected);

        $this->assertEquals($expected, $model->getTouchbacksInterceptions());
    }

    public function testGetTouchbacksInterceptionsPercentage(): void
    {
        $this->assertEquals($this->dto->touchbacksInterceptionsPercentage, $this->model->getTouchbacksInterceptionsPercentage());
    }

    public function testSetTouchbacksInterceptionsPercentage(): void
    {
        $expected = "seat";
        $model = $this->model;
        $model->setTouchbacksInterceptionsPercentage($expected);

        $this->assertEquals($expected, $model->getTouchbacksInterceptionsPercentage());
    }

    public function testGetFairCatches(): void
    {
        $this->assertEquals($this->dto->fairCatches, $this->model->getFairCatches());
    }

    public function testSetFairCatches(): void
    {
        $expected = "unit";
        $model = $this->model;
        $model->setFairCatches($expected);

        $this->assertEquals($expected, $model->getFairCatches());
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