<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballPassingStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballPassingStats\{ AmericanFootballPassingStatsDto, AmericanFootballPassingStatsModel };

class AmericanFootballPassingStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballPassingStatsDto $dto;
    private AmericanFootballPassingStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7518,
            "passes_attempts" => "state",
            "passes_completions" => "quite",
            "passes_percentage" => "sell",
            "passes_yards_gross" => "find",
            "passes_yards_net" => "charge",
            "passes_yards_lost" => "hotel",
            "passes_touchdowns" => "board",
            "passes_touchdowns_percentage" => "career",
            "passes_interceptions" => "back",
            "passes_interceptions_percentage" => "project",
            "passes_longest" => "eye",
            "passes_average_yards_per" => "beat",
            "passer_rating" => "resource",
            "receptions_total" => "news",
            "receptions_yards" => "resource",
            "receptions_touchdowns" => "ground",
            "receptions_first_down" => "stand",
            "receptions_longest" => "region",
            "receptions_average_yards_per" => "different",
        ];
        $this->dto = new AmericanFootballPassingStatsDto($this->input);
        $this->model = new AmericanFootballPassingStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballPassingStatsModel(null);

        $this->assertInstanceOf(AmericanFootballPassingStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 1481;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetPassesAttempts(): void
    {
        $this->assertEquals($this->dto->passesAttempts, $this->model->getPassesAttempts());
    }

    public function testSetPassesAttempts(): void
    {
        $expected = "hot";
        $model = $this->model;
        $model->setPassesAttempts($expected);

        $this->assertEquals($expected, $model->getPassesAttempts());
    }

    public function testGetPassesCompletions(): void
    {
        $this->assertEquals($this->dto->passesCompletions, $this->model->getPassesCompletions());
    }

    public function testSetPassesCompletions(): void
    {
        $expected = "upon";
        $model = $this->model;
        $model->setPassesCompletions($expected);

        $this->assertEquals($expected, $model->getPassesCompletions());
    }

    public function testGetPassesPercentage(): void
    {
        $this->assertEquals($this->dto->passesPercentage, $this->model->getPassesPercentage());
    }

    public function testSetPassesPercentage(): void
    {
        $expected = "system";
        $model = $this->model;
        $model->setPassesPercentage($expected);

        $this->assertEquals($expected, $model->getPassesPercentage());
    }

    public function testGetPassesYardsGross(): void
    {
        $this->assertEquals($this->dto->passesYardsGross, $this->model->getPassesYardsGross());
    }

    public function testSetPassesYardsGross(): void
    {
        $expected = "score";
        $model = $this->model;
        $model->setPassesYardsGross($expected);

        $this->assertEquals($expected, $model->getPassesYardsGross());
    }

    public function testGetPassesYardsNet(): void
    {
        $this->assertEquals($this->dto->passesYardsNet, $this->model->getPassesYardsNet());
    }

    public function testSetPassesYardsNet(): void
    {
        $expected = "still";
        $model = $this->model;
        $model->setPassesYardsNet($expected);

        $this->assertEquals($expected, $model->getPassesYardsNet());
    }

    public function testGetPassesYardsLost(): void
    {
        $this->assertEquals($this->dto->passesYardsLost, $this->model->getPassesYardsLost());
    }

    public function testSetPassesYardsLost(): void
    {
        $expected = "activity";
        $model = $this->model;
        $model->setPassesYardsLost($expected);

        $this->assertEquals($expected, $model->getPassesYardsLost());
    }

    public function testGetPassesTouchdowns(): void
    {
        $this->assertEquals($this->dto->passesTouchdowns, $this->model->getPassesTouchdowns());
    }

    public function testSetPassesTouchdowns(): void
    {
        $expected = "summer";
        $model = $this->model;
        $model->setPassesTouchdowns($expected);

        $this->assertEquals($expected, $model->getPassesTouchdowns());
    }

    public function testGetPassesTouchdownsPercentage(): void
    {
        $this->assertEquals($this->dto->passesTouchdownsPercentage, $this->model->getPassesTouchdownsPercentage());
    }

    public function testSetPassesTouchdownsPercentage(): void
    {
        $expected = "drive";
        $model = $this->model;
        $model->setPassesTouchdownsPercentage($expected);

        $this->assertEquals($expected, $model->getPassesTouchdownsPercentage());
    }

    public function testGetPassesInterceptions(): void
    {
        $this->assertEquals($this->dto->passesInterceptions, $this->model->getPassesInterceptions());
    }

    public function testSetPassesInterceptions(): void
    {
        $expected = "movie";
        $model = $this->model;
        $model->setPassesInterceptions($expected);

        $this->assertEquals($expected, $model->getPassesInterceptions());
    }

    public function testGetPassesInterceptionsPercentage(): void
    {
        $this->assertEquals($this->dto->passesInterceptionsPercentage, $this->model->getPassesInterceptionsPercentage());
    }

    public function testSetPassesInterceptionsPercentage(): void
    {
        $expected = "apply";
        $model = $this->model;
        $model->setPassesInterceptionsPercentage($expected);

        $this->assertEquals($expected, $model->getPassesInterceptionsPercentage());
    }

    public function testGetPassesLongest(): void
    {
        $this->assertEquals($this->dto->passesLongest, $this->model->getPassesLongest());
    }

    public function testSetPassesLongest(): void
    {
        $expected = "present";
        $model = $this->model;
        $model->setPassesLongest($expected);

        $this->assertEquals($expected, $model->getPassesLongest());
    }

    public function testGetPassesAverageYardsPer(): void
    {
        $this->assertEquals($this->dto->passesAverageYardsPer, $this->model->getPassesAverageYardsPer());
    }

    public function testSetPassesAverageYardsPer(): void
    {
        $expected = "professor";
        $model = $this->model;
        $model->setPassesAverageYardsPer($expected);

        $this->assertEquals($expected, $model->getPassesAverageYardsPer());
    }

    public function testGetPasserRating(): void
    {
        $this->assertEquals($this->dto->passerRating, $this->model->getPasserRating());
    }

    public function testSetPasserRating(): void
    {
        $expected = "life";
        $model = $this->model;
        $model->setPasserRating($expected);

        $this->assertEquals($expected, $model->getPasserRating());
    }

    public function testGetReceptionsTotal(): void
    {
        $this->assertEquals($this->dto->receptionsTotal, $this->model->getReceptionsTotal());
    }

    public function testSetReceptionsTotal(): void
    {
        $expected = "approach";
        $model = $this->model;
        $model->setReceptionsTotal($expected);

        $this->assertEquals($expected, $model->getReceptionsTotal());
    }

    public function testGetReceptionsYards(): void
    {
        $this->assertEquals($this->dto->receptionsYards, $this->model->getReceptionsYards());
    }

    public function testSetReceptionsYards(): void
    {
        $expected = "public";
        $model = $this->model;
        $model->setReceptionsYards($expected);

        $this->assertEquals($expected, $model->getReceptionsYards());
    }

    public function testGetReceptionsTouchdowns(): void
    {
        $this->assertEquals($this->dto->receptionsTouchdowns, $this->model->getReceptionsTouchdowns());
    }

    public function testSetReceptionsTouchdowns(): void
    {
        $expected = "institution";
        $model = $this->model;
        $model->setReceptionsTouchdowns($expected);

        $this->assertEquals($expected, $model->getReceptionsTouchdowns());
    }

    public function testGetReceptionsFirstDown(): void
    {
        $this->assertEquals($this->dto->receptionsFirstDown, $this->model->getReceptionsFirstDown());
    }

    public function testSetReceptionsFirstDown(): void
    {
        $expected = "information";
        $model = $this->model;
        $model->setReceptionsFirstDown($expected);

        $this->assertEquals($expected, $model->getReceptionsFirstDown());
    }

    public function testGetReceptionsLongest(): void
    {
        $this->assertEquals($this->dto->receptionsLongest, $this->model->getReceptionsLongest());
    }

    public function testSetReceptionsLongest(): void
    {
        $expected = "few";
        $model = $this->model;
        $model->setReceptionsLongest($expected);

        $this->assertEquals($expected, $model->getReceptionsLongest());
    }

    public function testGetReceptionsAverageYardsPer(): void
    {
        $this->assertEquals($this->dto->receptionsAverageYardsPer, $this->model->getReceptionsAverageYardsPer());
    }

    public function testSetReceptionsAverageYardsPer(): void
    {
        $expected = "several";
        $model = $this->model;
        $model->setReceptionsAverageYardsPer($expected);

        $this->assertEquals($expected, $model->getReceptionsAverageYardsPer());
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