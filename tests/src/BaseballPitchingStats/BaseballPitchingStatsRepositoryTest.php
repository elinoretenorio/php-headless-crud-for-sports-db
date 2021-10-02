<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballPitchingStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballPitchingStats\{ BaseballPitchingStatsDto, IBaseballPitchingStatsRepository, BaseballPitchingStatsRepository };

class BaseballPitchingStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballPitchingStatsDto $dto;
    private IBaseballPitchingStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 4556,
            "runs_allowed" => 9813,
            "singles_allowed" => 4418,
            "doubles_allowed" => 8234,
            "triples_allowed" => 4266,
            "home_runs_allowed" => 7690,
            "innings_pitched" => "simple",
            "hits" => 2710,
            "earned_runs" => 1804,
            "unearned_runs" => 1020,
            "bases_on_balls" => 8097,
            "bases_on_balls_intentional" => 1338,
            "strikeouts" => 7223,
            "strikeout_to_bb_ratio" => 598.00,
            "number_of_pitches" => 5386,
            "era" => 307.80,
            "inherited_runners_scored" => 6815,
            "pick_offs" => 4914,
            "errors_hit_with_pitch" => 1979,
            "errors_wild_pitch" => 7508,
            "balks" => 4553,
            "wins" => 7149,
            "losses" => 4431,
            "saves" => 2355,
            "shutouts" => 7611,
            "games_complete" => 9238,
            "games_finished" => 9817,
            "winning_percentage" => 486.50,
            "event_credit" => "seek",
            "save_credit" => "our",
        ];
        $this->dto = new BaseballPitchingStatsDto($this->input);
        $this->repository = new BaseballPitchingStatsRepository($this->db);
    }

    protected function tearDown(): void
    {
        unset($this->db);
        unset($this->result);
        unset($this->input);
        unset($this->dto);
        unset($this->repository);
    }

    public function testInsert_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 1199;

        $sql = "INSERT INTO `baseball_pitching_stats` (`runs_allowed`, `singles_allowed`, `doubles_allowed`, `triples_allowed`, `home_runs_allowed`, `innings_pitched`, `hits`, `earned_runs`, `unearned_runs`, `bases_on_balls`, `bases_on_balls_intentional`, `strikeouts`, `strikeout_to_bb_ratio`, `number_of_pitches`, `era`, `inherited_runners_scored`, `pick_offs`, `errors_hit_with_pitch`, `errors_wild_pitch`, `balks`, `wins`, `losses`, `saves`, `shutouts`, `games_complete`, `games_finished`, `winning_percentage`, `event_credit`, `save_credit`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->runsAllowed,
                $this->dto->singlesAllowed,
                $this->dto->doublesAllowed,
                $this->dto->triplesAllowed,
                $this->dto->homeRunsAllowed,
                $this->dto->inningsPitched,
                $this->dto->hits,
                $this->dto->earnedRuns,
                $this->dto->unearnedRuns,
                $this->dto->basesOnBalls,
                $this->dto->basesOnBallsIntentional,
                $this->dto->strikeouts,
                $this->dto->strikeoutToBbRatio,
                $this->dto->numberOfPitches,
                $this->dto->era,
                $this->dto->inheritedRunnersScored,
                $this->dto->pickOffs,
                $this->dto->errorsHitWithPitch,
                $this->dto->errorsWildPitch,
                $this->dto->balks,
                $this->dto->wins,
                $this->dto->losses,
                $this->dto->saves,
                $this->dto->shutouts,
                $this->dto->gamesComplete,
                $this->dto->gamesFinished,
                $this->dto->winningPercentage,
                $this->dto->eventCredit,
                $this->dto->saveCredit
            ]);
        $this->db->expects($this->once())
            ->method("lastInsertId")
            ->willReturn($expected);

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 8278;

        $sql = "UPDATE `baseball_pitching_stats` SET `runs_allowed` = ?, `singles_allowed` = ?, `doubles_allowed` = ?, `triples_allowed` = ?, `home_runs_allowed` = ?, `innings_pitched` = ?, `hits` = ?, `earned_runs` = ?, `unearned_runs` = ?, `bases_on_balls` = ?, `bases_on_balls_intentional` = ?, `strikeouts` = ?, `strikeout_to_bb_ratio` = ?, `number_of_pitches` = ?, `era` = ?, `inherited_runners_scored` = ?, `pick_offs` = ?, `errors_hit_with_pitch` = ?, `errors_wild_pitch` = ?, `balks` = ?, `wins` = ?, `losses` = ?, `saves` = ?, `shutouts` = ?, `games_complete` = ?, `games_finished` = ?, `winning_percentage` = ?, `event_credit` = ?, `save_credit` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->runsAllowed,
                $this->dto->singlesAllowed,
                $this->dto->doublesAllowed,
                $this->dto->triplesAllowed,
                $this->dto->homeRunsAllowed,
                $this->dto->inningsPitched,
                $this->dto->hits,
                $this->dto->earnedRuns,
                $this->dto->unearnedRuns,
                $this->dto->basesOnBalls,
                $this->dto->basesOnBallsIntentional,
                $this->dto->strikeouts,
                $this->dto->strikeoutToBbRatio,
                $this->dto->numberOfPitches,
                $this->dto->era,
                $this->dto->inheritedRunnersScored,
                $this->dto->pickOffs,
                $this->dto->errorsHitWithPitch,
                $this->dto->errorsWildPitch,
                $this->dto->balks,
                $this->dto->wins,
                $this->dto->losses,
                $this->dto->saves,
                $this->dto->shutouts,
                $this->dto->gamesComplete,
                $this->dto->gamesFinished,
                $this->dto->winningPercentage,
                $this->dto->eventCredit,
                $this->dto->saveCredit,
                $this->dto->id
            ]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testGet_ReturnsEmptyOnException(): void
    {
        $id = 5432;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 4270;

        $sql = "SELECT `id`, `runs_allowed`, `singles_allowed`, `doubles_allowed`, `triples_allowed`, `home_runs_allowed`, `innings_pitched`, `hits`, `earned_runs`, `unearned_runs`, `bases_on_balls`, `bases_on_balls_intentional`, `strikeouts`, `strikeout_to_bb_ratio`, `number_of_pitches`, `era`, `inherited_runners_scored`, `pick_offs`, `errors_hit_with_pitch`, `errors_wild_pitch`, `balks`, `wins`, `losses`, `saves`, `shutouts`, `games_complete`, `games_finished`, `winning_percentage`, `event_credit`, `save_credit`
                FROM `baseball_pitching_stats` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->get($id);
        $this->assertEquals($this->dto, $actual);
    }

    public function testGetAll_ReturnsEmptyOnException(): void
    {
        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsDtos(): void
    {
        $sql = "SELECT `id`, `runs_allowed`, `singles_allowed`, `doubles_allowed`, `triples_allowed`, `home_runs_allowed`, `innings_pitched`, `hits`, `earned_runs`, `unearned_runs`, `bases_on_balls`, `bases_on_balls_intentional`, `strikeouts`, `strikeout_to_bb_ratio`, `number_of_pitches`, `era`, `inherited_runners_scored`, `pick_offs`, `errors_hit_with_pitch`, `errors_wild_pitch`, `balks`, `wins`, `losses`, `saves`, `shutouts`, `games_complete`, `games_finished`, `winning_percentage`, `event_credit`, `save_credit`
                FROM `baseball_pitching_stats`";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute");
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->getAll();
        $this->assertEquals([$this->dto], $actual);
    }

    public function testDelete_ReturnsFailedOnException(): void
    {
        $id = 7624;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 9261;
        $expected = 7954;

        $sql = "DELETE FROM `baseball_pitching_stats` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }
}