<?php

declare(strict_types=1);

// Core

$container->add("Pdo", PDO::class)
    ->addArgument("mysql:dbname={$_ENV["DB_NAME"]};host={$_ENV["DB_HOST"]}")
    ->addArgument($_ENV["DB_USER"])
    ->addArgument($_ENV["DB_PASS"])
    ->addArgument([]);
$container->add("Database", Sports\Database\PdoDatabase::class)
    ->addArgument("Pdo");

// AmericanFootballActionParticipants

$container->add("AmericanFootballActionParticipantsRepository", Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballActionParticipantsService", Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsService::class)
    ->addArgument("AmericanFootballActionParticipantsRepository");
$container->add(Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsController::class)
    ->addArgument("AmericanFootballActionParticipantsService");

// AmericanFootballActionPlays

$container->add("AmericanFootballActionPlaysRepository", Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballActionPlaysService", Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysService::class)
    ->addArgument("AmericanFootballActionPlaysRepository");
$container->add(Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysController::class)
    ->addArgument("AmericanFootballActionPlaysService");

// AmericanFootballDefensiveStats

$container->add("AmericanFootballDefensiveStatsRepository", Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballDefensiveStatsService", Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsService::class)
    ->addArgument("AmericanFootballDefensiveStatsRepository");
$container->add(Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsController::class)
    ->addArgument("AmericanFootballDefensiveStatsService");

// AmericanFootballDownProgressStats

$container->add("AmericanFootballDownProgressStatsRepository", Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballDownProgressStatsService", Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsService::class)
    ->addArgument("AmericanFootballDownProgressStatsRepository");
$container->add(Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsController::class)
    ->addArgument("AmericanFootballDownProgressStatsService");

// AmericanFootballEventStates

$container->add("AmericanFootballEventStatesRepository", Sports\AmericanFootballEventStates\AmericanFootballEventStatesRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballEventStatesService", Sports\AmericanFootballEventStates\AmericanFootballEventStatesService::class)
    ->addArgument("AmericanFootballEventStatesRepository");
$container->add(Sports\AmericanFootballEventStates\AmericanFootballEventStatesController::class)
    ->addArgument("AmericanFootballEventStatesService");

// AmericanFootballFumblesStats

$container->add("AmericanFootballFumblesStatsRepository", Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballFumblesStatsService", Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsService::class)
    ->addArgument("AmericanFootballFumblesStatsRepository");
$container->add(Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsController::class)
    ->addArgument("AmericanFootballFumblesStatsService");

// AmericanFootballOffensiveStats

$container->add("AmericanFootballOffensiveStatsRepository", Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballOffensiveStatsService", Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsService::class)
    ->addArgument("AmericanFootballOffensiveStatsRepository");
$container->add(Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsController::class)
    ->addArgument("AmericanFootballOffensiveStatsService");

// AmericanFootballPassingStats

$container->add("AmericanFootballPassingStatsRepository", Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballPassingStatsService", Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsService::class)
    ->addArgument("AmericanFootballPassingStatsRepository");
$container->add(Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsController::class)
    ->addArgument("AmericanFootballPassingStatsService");

// AmericanFootballPenaltiesStats

$container->add("AmericanFootballPenaltiesStatsRepository", Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballPenaltiesStatsService", Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsService::class)
    ->addArgument("AmericanFootballPenaltiesStatsRepository");
$container->add(Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsController::class)
    ->addArgument("AmericanFootballPenaltiesStatsService");

// AmericanFootballRushingStats

$container->add("AmericanFootballRushingStatsRepository", Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballRushingStatsService", Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsService::class)
    ->addArgument("AmericanFootballRushingStatsRepository");
$container->add(Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsController::class)
    ->addArgument("AmericanFootballRushingStatsService");

// AmericanFootballSacksAgainstStats

$container->add("AmericanFootballSacksAgainstStatsRepository", Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballSacksAgainstStatsService", Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsService::class)
    ->addArgument("AmericanFootballSacksAgainstStatsRepository");
$container->add(Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsController::class)
    ->addArgument("AmericanFootballSacksAgainstStatsService");

// AmericanFootballScoringStats

$container->add("AmericanFootballScoringStatsRepository", Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballScoringStatsService", Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsService::class)
    ->addArgument("AmericanFootballScoringStatsRepository");
$container->add(Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsController::class)
    ->addArgument("AmericanFootballScoringStatsService");

// AmericanFootballSpecialTeamsStats

$container->add("AmericanFootballSpecialTeamsStatsRepository", Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsRepository::class)
    ->addArgument("Database");
$container->add("AmericanFootballSpecialTeamsStatsService", Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsService::class)
    ->addArgument("AmericanFootballSpecialTeamsStatsRepository");
$container->add(Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsController::class)
    ->addArgument("AmericanFootballSpecialTeamsStatsService");

// BaseballActionContactDetails

$container->add("BaseballActionContactDetailsRepository", Sports\BaseballActionContactDetails\BaseballActionContactDetailsRepository::class)
    ->addArgument("Database");
$container->add("BaseballActionContactDetailsService", Sports\BaseballActionContactDetails\BaseballActionContactDetailsService::class)
    ->addArgument("BaseballActionContactDetailsRepository");
$container->add(Sports\BaseballActionContactDetails\BaseballActionContactDetailsController::class)
    ->addArgument("BaseballActionContactDetailsService");

// BaseballActionPitches

$container->add("BaseballActionPitchesRepository", Sports\BaseballActionPitches\BaseballActionPitchesRepository::class)
    ->addArgument("Database");
$container->add("BaseballActionPitchesService", Sports\BaseballActionPitches\BaseballActionPitchesService::class)
    ->addArgument("BaseballActionPitchesRepository");
$container->add(Sports\BaseballActionPitches\BaseballActionPitchesController::class)
    ->addArgument("BaseballActionPitchesService");

// BaseballActionPlays

$container->add("BaseballActionPlaysRepository", Sports\BaseballActionPlays\BaseballActionPlaysRepository::class)
    ->addArgument("Database");
$container->add("BaseballActionPlaysService", Sports\BaseballActionPlays\BaseballActionPlaysService::class)
    ->addArgument("BaseballActionPlaysRepository");
$container->add(Sports\BaseballActionPlays\BaseballActionPlaysController::class)
    ->addArgument("BaseballActionPlaysService");

// BaseballActionSubstitutions

$container->add("BaseballActionSubstitutionsRepository", Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsRepository::class)
    ->addArgument("Database");
$container->add("BaseballActionSubstitutionsService", Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsService::class)
    ->addArgument("BaseballActionSubstitutionsRepository");
$container->add(Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsController::class)
    ->addArgument("BaseballActionSubstitutionsService");

// BaseballDefensiveGroup

$container->add("BaseballDefensiveGroupRepository", Sports\BaseballDefensiveGroup\BaseballDefensiveGroupRepository::class)
    ->addArgument("Database");
$container->add("BaseballDefensiveGroupService", Sports\BaseballDefensiveGroup\BaseballDefensiveGroupService::class)
    ->addArgument("BaseballDefensiveGroupRepository");
$container->add(Sports\BaseballDefensiveGroup\BaseballDefensiveGroupController::class)
    ->addArgument("BaseballDefensiveGroupService");

// BaseballDefensivePlayers

$container->add("BaseballDefensivePlayersRepository", Sports\BaseballDefensivePlayers\BaseballDefensivePlayersRepository::class)
    ->addArgument("Database");
$container->add("BaseballDefensivePlayersService", Sports\BaseballDefensivePlayers\BaseballDefensivePlayersService::class)
    ->addArgument("BaseballDefensivePlayersRepository");
$container->add(Sports\BaseballDefensivePlayers\BaseballDefensivePlayersController::class)
    ->addArgument("BaseballDefensivePlayersService");

// BaseballDefensiveStats

$container->add("BaseballDefensiveStatsRepository", Sports\BaseballDefensiveStats\BaseballDefensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("BaseballDefensiveStatsService", Sports\BaseballDefensiveStats\BaseballDefensiveStatsService::class)
    ->addArgument("BaseballDefensiveStatsRepository");
$container->add(Sports\BaseballDefensiveStats\BaseballDefensiveStatsController::class)
    ->addArgument("BaseballDefensiveStatsService");

// BaseballEventStates

$container->add("BaseballEventStatesRepository", Sports\BaseballEventStates\BaseballEventStatesRepository::class)
    ->addArgument("Database");
$container->add("BaseballEventStatesService", Sports\BaseballEventStates\BaseballEventStatesService::class)
    ->addArgument("BaseballEventStatesRepository");
$container->add(Sports\BaseballEventStates\BaseballEventStatesController::class)
    ->addArgument("BaseballEventStatesService");

// BaseballOffensiveStats

$container->add("BaseballOffensiveStatsRepository", Sports\BaseballOffensiveStats\BaseballOffensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("BaseballOffensiveStatsService", Sports\BaseballOffensiveStats\BaseballOffensiveStatsService::class)
    ->addArgument("BaseballOffensiveStatsRepository");
$container->add(Sports\BaseballOffensiveStats\BaseballOffensiveStatsController::class)
    ->addArgument("BaseballOffensiveStatsService");

// BaseballPitchingStats

$container->add("BaseballPitchingStatsRepository", Sports\BaseballPitchingStats\BaseballPitchingStatsRepository::class)
    ->addArgument("Database");
$container->add("BaseballPitchingStatsService", Sports\BaseballPitchingStats\BaseballPitchingStatsService::class)
    ->addArgument("BaseballPitchingStatsRepository");
$container->add(Sports\BaseballPitchingStats\BaseballPitchingStatsController::class)
    ->addArgument("BaseballPitchingStatsService");

// BasketballDefensiveStats

$container->add("BasketballDefensiveStatsRepository", Sports\BasketballDefensiveStats\BasketballDefensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("BasketballDefensiveStatsService", Sports\BasketballDefensiveStats\BasketballDefensiveStatsService::class)
    ->addArgument("BasketballDefensiveStatsRepository");
$container->add(Sports\BasketballDefensiveStats\BasketballDefensiveStatsController::class)
    ->addArgument("BasketballDefensiveStatsService");

// BasketballEventStates

$container->add("BasketballEventStatesRepository", Sports\BasketballEventStates\BasketballEventStatesRepository::class)
    ->addArgument("Database");
$container->add("BasketballEventStatesService", Sports\BasketballEventStates\BasketballEventStatesService::class)
    ->addArgument("BasketballEventStatesRepository");
$container->add(Sports\BasketballEventStates\BasketballEventStatesController::class)
    ->addArgument("BasketballEventStatesService");

// BasketballOffensiveStats

$container->add("BasketballOffensiveStatsRepository", Sports\BasketballOffensiveStats\BasketballOffensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("BasketballOffensiveStatsService", Sports\BasketballOffensiveStats\BasketballOffensiveStatsService::class)
    ->addArgument("BasketballOffensiveStatsRepository");
$container->add(Sports\BasketballOffensiveStats\BasketballOffensiveStatsController::class)
    ->addArgument("BasketballOffensiveStatsService");

// BasketballReboundingStats

$container->add("BasketballReboundingStatsRepository", Sports\BasketballReboundingStats\BasketballReboundingStatsRepository::class)
    ->addArgument("Database");
$container->add("BasketballReboundingStatsService", Sports\BasketballReboundingStats\BasketballReboundingStatsService::class)
    ->addArgument("BasketballReboundingStatsRepository");
$container->add(Sports\BasketballReboundingStats\BasketballReboundingStatsController::class)
    ->addArgument("BasketballReboundingStatsService");

// BasketballTeamStats

$container->add("BasketballTeamStatsRepository", Sports\BasketballTeamStats\BasketballTeamStatsRepository::class)
    ->addArgument("Database");
$container->add("BasketballTeamStatsService", Sports\BasketballTeamStats\BasketballTeamStatsService::class)
    ->addArgument("BasketballTeamStatsRepository");
$container->add(Sports\BasketballTeamStats\BasketballTeamStatsController::class)
    ->addArgument("BasketballTeamStatsService");

// IceHockeyActionParticipants

$container->add("IceHockeyActionParticipantsRepository", Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsRepository::class)
    ->addArgument("Database");
$container->add("IceHockeyActionParticipantsService", Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsService::class)
    ->addArgument("IceHockeyActionParticipantsRepository");
$container->add(Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsController::class)
    ->addArgument("IceHockeyActionParticipantsService");

// IceHockeyActionPlays

$container->add("IceHockeyActionPlaysRepository", Sports\IceHockeyActionPlays\IceHockeyActionPlaysRepository::class)
    ->addArgument("Database");
$container->add("IceHockeyActionPlaysService", Sports\IceHockeyActionPlays\IceHockeyActionPlaysService::class)
    ->addArgument("IceHockeyActionPlaysRepository");
$container->add(Sports\IceHockeyActionPlays\IceHockeyActionPlaysController::class)
    ->addArgument("IceHockeyActionPlaysService");

// IceHockeyDefensiveStats

$container->add("IceHockeyDefensiveStatsRepository", Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("IceHockeyDefensiveStatsService", Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsService::class)
    ->addArgument("IceHockeyDefensiveStatsRepository");
$container->add(Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsController::class)
    ->addArgument("IceHockeyDefensiveStatsService");

// IceHockeyEventStates

$container->add("IceHockeyEventStatesRepository", Sports\IceHockeyEventStates\IceHockeyEventStatesRepository::class)
    ->addArgument("Database");
$container->add("IceHockeyEventStatesService", Sports\IceHockeyEventStates\IceHockeyEventStatesService::class)
    ->addArgument("IceHockeyEventStatesRepository");
$container->add(Sports\IceHockeyEventStates\IceHockeyEventStatesController::class)
    ->addArgument("IceHockeyEventStatesService");

// IceHockeyOffensiveStats

$container->add("IceHockeyOffensiveStatsRepository", Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("IceHockeyOffensiveStatsService", Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsService::class)
    ->addArgument("IceHockeyOffensiveStatsRepository");
$container->add(Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsController::class)
    ->addArgument("IceHockeyOffensiveStatsService");

// IceHockeyPlayerStats

$container->add("IceHockeyPlayerStatsRepository", Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsRepository::class)
    ->addArgument("Database");
$container->add("IceHockeyPlayerStatsService", Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsService::class)
    ->addArgument("IceHockeyPlayerStatsRepository");
$container->add(Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsController::class)
    ->addArgument("IceHockeyPlayerStatsService");

// MotorRacingEventStates

$container->add("MotorRacingEventStatesRepository", Sports\MotorRacingEventStates\MotorRacingEventStatesRepository::class)
    ->addArgument("Database");
$container->add("MotorRacingEventStatesService", Sports\MotorRacingEventStates\MotorRacingEventStatesService::class)
    ->addArgument("MotorRacingEventStatesRepository");
$container->add(Sports\MotorRacingEventStates\MotorRacingEventStatesController::class)
    ->addArgument("MotorRacingEventStatesService");

// MotorRacingQualifyingStats

$container->add("MotorRacingQualifyingStatsRepository", Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsRepository::class)
    ->addArgument("Database");
$container->add("MotorRacingQualifyingStatsService", Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsService::class)
    ->addArgument("MotorRacingQualifyingStatsRepository");
$container->add(Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsController::class)
    ->addArgument("MotorRacingQualifyingStatsService");

// MotorRacingRaceStats

$container->add("MotorRacingRaceStatsRepository", Sports\MotorRacingRaceStats\MotorRacingRaceStatsRepository::class)
    ->addArgument("Database");
$container->add("MotorRacingRaceStatsService", Sports\MotorRacingRaceStats\MotorRacingRaceStatsService::class)
    ->addArgument("MotorRacingRaceStatsRepository");
$container->add(Sports\MotorRacingRaceStats\MotorRacingRaceStatsController::class)
    ->addArgument("MotorRacingRaceStatsService");

// SoccerDefensiveStats

$container->add("SoccerDefensiveStatsRepository", Sports\SoccerDefensiveStats\SoccerDefensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("SoccerDefensiveStatsService", Sports\SoccerDefensiveStats\SoccerDefensiveStatsService::class)
    ->addArgument("SoccerDefensiveStatsRepository");
$container->add(Sports\SoccerDefensiveStats\SoccerDefensiveStatsController::class)
    ->addArgument("SoccerDefensiveStatsService");

// SoccerEventStates

$container->add("SoccerEventStatesRepository", Sports\SoccerEventStates\SoccerEventStatesRepository::class)
    ->addArgument("Database");
$container->add("SoccerEventStatesService", Sports\SoccerEventStates\SoccerEventStatesService::class)
    ->addArgument("SoccerEventStatesRepository");
$container->add(Sports\SoccerEventStates\SoccerEventStatesController::class)
    ->addArgument("SoccerEventStatesService");

// SoccerFoulStats

$container->add("SoccerFoulStatsRepository", Sports\SoccerFoulStats\SoccerFoulStatsRepository::class)
    ->addArgument("Database");
$container->add("SoccerFoulStatsService", Sports\SoccerFoulStats\SoccerFoulStatsService::class)
    ->addArgument("SoccerFoulStatsRepository");
$container->add(Sports\SoccerFoulStats\SoccerFoulStatsController::class)
    ->addArgument("SoccerFoulStatsService");

// SoccerOffensiveStats

$container->add("SoccerOffensiveStatsRepository", Sports\SoccerOffensiveStats\SoccerOffensiveStatsRepository::class)
    ->addArgument("Database");
$container->add("SoccerOffensiveStatsService", Sports\SoccerOffensiveStats\SoccerOffensiveStatsService::class)
    ->addArgument("SoccerOffensiveStatsRepository");
$container->add(Sports\SoccerOffensiveStats\SoccerOffensiveStatsController::class)
    ->addArgument("SoccerOffensiveStatsService");

// TeamAmericanFootballStats

$container->add("TeamAmericanFootballStatsRepository", Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsRepository::class)
    ->addArgument("Database");
$container->add("TeamAmericanFootballStatsService", Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsService::class)
    ->addArgument("TeamAmericanFootballStatsRepository");
$container->add(Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsController::class)
    ->addArgument("TeamAmericanFootballStatsService");

// TennisActionPoints

$container->add("TennisActionPointsRepository", Sports\TennisActionPoints\TennisActionPointsRepository::class)
    ->addArgument("Database");
$container->add("TennisActionPointsService", Sports\TennisActionPoints\TennisActionPointsService::class)
    ->addArgument("TennisActionPointsRepository");
$container->add(Sports\TennisActionPoints\TennisActionPointsController::class)
    ->addArgument("TennisActionPointsService");

// TennisActionVolleys

$container->add("TennisActionVolleysRepository", Sports\TennisActionVolleys\TennisActionVolleysRepository::class)
    ->addArgument("Database");
$container->add("TennisActionVolleysService", Sports\TennisActionVolleys\TennisActionVolleysService::class)
    ->addArgument("TennisActionVolleysRepository");
$container->add(Sports\TennisActionVolleys\TennisActionVolleysController::class)
    ->addArgument("TennisActionVolleysService");

// TennisEventStates

$container->add("TennisEventStatesRepository", Sports\TennisEventStates\TennisEventStatesRepository::class)
    ->addArgument("Database");
$container->add("TennisEventStatesService", Sports\TennisEventStates\TennisEventStatesService::class)
    ->addArgument("TennisEventStatesRepository");
$container->add(Sports\TennisEventStates\TennisEventStatesController::class)
    ->addArgument("TennisEventStatesService");

// TennisReturnStats

$container->add("TennisReturnStatsRepository", Sports\TennisReturnStats\TennisReturnStatsRepository::class)
    ->addArgument("Database");
$container->add("TennisReturnStatsService", Sports\TennisReturnStats\TennisReturnStatsService::class)
    ->addArgument("TennisReturnStatsRepository");
$container->add(Sports\TennisReturnStats\TennisReturnStatsController::class)
    ->addArgument("TennisReturnStatsService");

// TennisServiceStats

$container->add("TennisServiceStatsRepository", Sports\TennisServiceStats\TennisServiceStatsRepository::class)
    ->addArgument("Database");
$container->add("TennisServiceStatsService", Sports\TennisServiceStats\TennisServiceStatsService::class)
    ->addArgument("TennisServiceStatsRepository");
$container->add(Sports\TennisServiceStats\TennisServiceStatsController::class)
    ->addArgument("TennisServiceStatsService");

