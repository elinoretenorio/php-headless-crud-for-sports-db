<?php

declare(strict_types=1);

$router->get("/american-football-action-participants", "Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsController::getAll");
$router->post("/american-football-action-participants", "Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsController::insert");
$router->group("/american-football-action-participants", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballActionParticipants\AmericanFootballActionParticipantsController::delete");
});

$router->get("/american-football-action-plays", "Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysController::getAll");
$router->post("/american-football-action-plays", "Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysController::insert");
$router->group("/american-football-action-plays", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballActionPlays\AmericanFootballActionPlaysController::delete");
});

$router->get("/american-football-defensive-stats", "Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsController::getAll");
$router->post("/american-football-defensive-stats", "Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsController::insert");
$router->group("/american-football-defensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballDefensiveStats\AmericanFootballDefensiveStatsController::delete");
});

$router->get("/american-football-down-progress-stats", "Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsController::getAll");
$router->post("/american-football-down-progress-stats", "Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsController::insert");
$router->group("/american-football-down-progress-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballDownProgressStats\AmericanFootballDownProgressStatsController::delete");
});

$router->get("/american-football-event-states", "Sports\AmericanFootballEventStates\AmericanFootballEventStatesController::getAll");
$router->post("/american-football-event-states", "Sports\AmericanFootballEventStates\AmericanFootballEventStatesController::insert");
$router->group("/american-football-event-states", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballEventStates\AmericanFootballEventStatesController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballEventStates\AmericanFootballEventStatesController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballEventStates\AmericanFootballEventStatesController::delete");
});

$router->get("/american-football-fumbles-stats", "Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsController::getAll");
$router->post("/american-football-fumbles-stats", "Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsController::insert");
$router->group("/american-football-fumbles-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballFumblesStats\AmericanFootballFumblesStatsController::delete");
});

$router->get("/american-football-offensive-stats", "Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsController::getAll");
$router->post("/american-football-offensive-stats", "Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsController::insert");
$router->group("/american-football-offensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballOffensiveStats\AmericanFootballOffensiveStatsController::delete");
});

$router->get("/american-football-passing-stats", "Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsController::getAll");
$router->post("/american-football-passing-stats", "Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsController::insert");
$router->group("/american-football-passing-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballPassingStats\AmericanFootballPassingStatsController::delete");
});

$router->get("/american-football-penalties-stats", "Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsController::getAll");
$router->post("/american-football-penalties-stats", "Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsController::insert");
$router->group("/american-football-penalties-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballPenaltiesStats\AmericanFootballPenaltiesStatsController::delete");
});

$router->get("/american-football-rushing-stats", "Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsController::getAll");
$router->post("/american-football-rushing-stats", "Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsController::insert");
$router->group("/american-football-rushing-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballRushingStats\AmericanFootballRushingStatsController::delete");
});

$router->get("/american-football-sacks-against-stats", "Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsController::getAll");
$router->post("/american-football-sacks-against-stats", "Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsController::insert");
$router->group("/american-football-sacks-against-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballSacksAgainstStats\AmericanFootballSacksAgainstStatsController::delete");
});

$router->get("/american-football-scoring-stats", "Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsController::getAll");
$router->post("/american-football-scoring-stats", "Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsController::insert");
$router->group("/american-football-scoring-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballScoringStats\AmericanFootballScoringStatsController::delete");
});

$router->get("/american-football-special-teams-stats", "Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsController::getAll");
$router->post("/american-football-special-teams-stats", "Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsController::insert");
$router->group("/american-football-special-teams-stats", function ($router) {
    $router->get("/{id:number}", "Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsController::get");
    $router->post("/{id:number}", "Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsController::update");
    $router->delete("/{id:number}", "Sports\AmericanFootballSpecialTeamsStats\AmericanFootballSpecialTeamsStatsController::delete");
});

$router->get("/baseball-action-contact-details", "Sports\BaseballActionContactDetails\BaseballActionContactDetailsController::getAll");
$router->post("/baseball-action-contact-details", "Sports\BaseballActionContactDetails\BaseballActionContactDetailsController::insert");
$router->group("/baseball-action-contact-details", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballActionContactDetails\BaseballActionContactDetailsController::get");
    $router->post("/{id:number}", "Sports\BaseballActionContactDetails\BaseballActionContactDetailsController::update");
    $router->delete("/{id:number}", "Sports\BaseballActionContactDetails\BaseballActionContactDetailsController::delete");
});

$router->get("/baseball-action-pitches", "Sports\BaseballActionPitches\BaseballActionPitchesController::getAll");
$router->post("/baseball-action-pitches", "Sports\BaseballActionPitches\BaseballActionPitchesController::insert");
$router->group("/baseball-action-pitches", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballActionPitches\BaseballActionPitchesController::get");
    $router->post("/{id:number}", "Sports\BaseballActionPitches\BaseballActionPitchesController::update");
    $router->delete("/{id:number}", "Sports\BaseballActionPitches\BaseballActionPitchesController::delete");
});

$router->get("/baseball-action-plays", "Sports\BaseballActionPlays\BaseballActionPlaysController::getAll");
$router->post("/baseball-action-plays", "Sports\BaseballActionPlays\BaseballActionPlaysController::insert");
$router->group("/baseball-action-plays", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballActionPlays\BaseballActionPlaysController::get");
    $router->post("/{id:number}", "Sports\BaseballActionPlays\BaseballActionPlaysController::update");
    $router->delete("/{id:number}", "Sports\BaseballActionPlays\BaseballActionPlaysController::delete");
});

$router->get("/baseball-action-substitutions", "Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsController::getAll");
$router->post("/baseball-action-substitutions", "Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsController::insert");
$router->group("/baseball-action-substitutions", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsController::get");
    $router->post("/{id:number}", "Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsController::update");
    $router->delete("/{id:number}", "Sports\BaseballActionSubstitutions\BaseballActionSubstitutionsController::delete");
});

$router->get("/baseball-defensive-group", "Sports\BaseballDefensiveGroup\BaseballDefensiveGroupController::getAll");
$router->post("/baseball-defensive-group", "Sports\BaseballDefensiveGroup\BaseballDefensiveGroupController::insert");
$router->group("/baseball-defensive-group", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballDefensiveGroup\BaseballDefensiveGroupController::get");
    $router->post("/{id:number}", "Sports\BaseballDefensiveGroup\BaseballDefensiveGroupController::update");
    $router->delete("/{id:number}", "Sports\BaseballDefensiveGroup\BaseballDefensiveGroupController::delete");
});

$router->get("/baseball-defensive-players", "Sports\BaseballDefensivePlayers\BaseballDefensivePlayersController::getAll");
$router->post("/baseball-defensive-players", "Sports\BaseballDefensivePlayers\BaseballDefensivePlayersController::insert");
$router->group("/baseball-defensive-players", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballDefensivePlayers\BaseballDefensivePlayersController::get");
    $router->post("/{id:number}", "Sports\BaseballDefensivePlayers\BaseballDefensivePlayersController::update");
    $router->delete("/{id:number}", "Sports\BaseballDefensivePlayers\BaseballDefensivePlayersController::delete");
});

$router->get("/baseball-defensive-stats", "Sports\BaseballDefensiveStats\BaseballDefensiveStatsController::getAll");
$router->post("/baseball-defensive-stats", "Sports\BaseballDefensiveStats\BaseballDefensiveStatsController::insert");
$router->group("/baseball-defensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballDefensiveStats\BaseballDefensiveStatsController::get");
    $router->post("/{id:number}", "Sports\BaseballDefensiveStats\BaseballDefensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\BaseballDefensiveStats\BaseballDefensiveStatsController::delete");
});

$router->get("/baseball-event-states", "Sports\BaseballEventStates\BaseballEventStatesController::getAll");
$router->post("/baseball-event-states", "Sports\BaseballEventStates\BaseballEventStatesController::insert");
$router->group("/baseball-event-states", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballEventStates\BaseballEventStatesController::get");
    $router->post("/{id:number}", "Sports\BaseballEventStates\BaseballEventStatesController::update");
    $router->delete("/{id:number}", "Sports\BaseballEventStates\BaseballEventStatesController::delete");
});

$router->get("/baseball-offensive-stats", "Sports\BaseballOffensiveStats\BaseballOffensiveStatsController::getAll");
$router->post("/baseball-offensive-stats", "Sports\BaseballOffensiveStats\BaseballOffensiveStatsController::insert");
$router->group("/baseball-offensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballOffensiveStats\BaseballOffensiveStatsController::get");
    $router->post("/{id:number}", "Sports\BaseballOffensiveStats\BaseballOffensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\BaseballOffensiveStats\BaseballOffensiveStatsController::delete");
});

$router->get("/baseball-pitching-stats", "Sports\BaseballPitchingStats\BaseballPitchingStatsController::getAll");
$router->post("/baseball-pitching-stats", "Sports\BaseballPitchingStats\BaseballPitchingStatsController::insert");
$router->group("/baseball-pitching-stats", function ($router) {
    $router->get("/{id:number}", "Sports\BaseballPitchingStats\BaseballPitchingStatsController::get");
    $router->post("/{id:number}", "Sports\BaseballPitchingStats\BaseballPitchingStatsController::update");
    $router->delete("/{id:number}", "Sports\BaseballPitchingStats\BaseballPitchingStatsController::delete");
});

$router->get("/basketball-defensive-stats", "Sports\BasketballDefensiveStats\BasketballDefensiveStatsController::getAll");
$router->post("/basketball-defensive-stats", "Sports\BasketballDefensiveStats\BasketballDefensiveStatsController::insert");
$router->group("/basketball-defensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\BasketballDefensiveStats\BasketballDefensiveStatsController::get");
    $router->post("/{id:number}", "Sports\BasketballDefensiveStats\BasketballDefensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\BasketballDefensiveStats\BasketballDefensiveStatsController::delete");
});

$router->get("/basketball-event-states", "Sports\BasketballEventStates\BasketballEventStatesController::getAll");
$router->post("/basketball-event-states", "Sports\BasketballEventStates\BasketballEventStatesController::insert");
$router->group("/basketball-event-states", function ($router) {
    $router->get("/{id:number}", "Sports\BasketballEventStates\BasketballEventStatesController::get");
    $router->post("/{id:number}", "Sports\BasketballEventStates\BasketballEventStatesController::update");
    $router->delete("/{id:number}", "Sports\BasketballEventStates\BasketballEventStatesController::delete");
});

$router->get("/basketball-offensive-stats", "Sports\BasketballOffensiveStats\BasketballOffensiveStatsController::getAll");
$router->post("/basketball-offensive-stats", "Sports\BasketballOffensiveStats\BasketballOffensiveStatsController::insert");
$router->group("/basketball-offensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\BasketballOffensiveStats\BasketballOffensiveStatsController::get");
    $router->post("/{id:number}", "Sports\BasketballOffensiveStats\BasketballOffensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\BasketballOffensiveStats\BasketballOffensiveStatsController::delete");
});

$router->get("/basketball-rebounding-stats", "Sports\BasketballReboundingStats\BasketballReboundingStatsController::getAll");
$router->post("/basketball-rebounding-stats", "Sports\BasketballReboundingStats\BasketballReboundingStatsController::insert");
$router->group("/basketball-rebounding-stats", function ($router) {
    $router->get("/{id:number}", "Sports\BasketballReboundingStats\BasketballReboundingStatsController::get");
    $router->post("/{id:number}", "Sports\BasketballReboundingStats\BasketballReboundingStatsController::update");
    $router->delete("/{id:number}", "Sports\BasketballReboundingStats\BasketballReboundingStatsController::delete");
});

$router->get("/basketball-team-stats", "Sports\BasketballTeamStats\BasketballTeamStatsController::getAll");
$router->post("/basketball-team-stats", "Sports\BasketballTeamStats\BasketballTeamStatsController::insert");
$router->group("/basketball-team-stats", function ($router) {
    $router->get("/{id:number}", "Sports\BasketballTeamStats\BasketballTeamStatsController::get");
    $router->post("/{id:number}", "Sports\BasketballTeamStats\BasketballTeamStatsController::update");
    $router->delete("/{id:number}", "Sports\BasketballTeamStats\BasketballTeamStatsController::delete");
});

$router->get("/ice-hockey-action-participants", "Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsController::getAll");
$router->post("/ice-hockey-action-participants", "Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsController::insert");
$router->group("/ice-hockey-action-participants", function ($router) {
    $router->get("/{id:number}", "Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsController::get");
    $router->post("/{id:number}", "Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsController::update");
    $router->delete("/{id:number}", "Sports\IceHockeyActionParticipants\IceHockeyActionParticipantsController::delete");
});

$router->get("/ice-hockey-action-plays", "Sports\IceHockeyActionPlays\IceHockeyActionPlaysController::getAll");
$router->post("/ice-hockey-action-plays", "Sports\IceHockeyActionPlays\IceHockeyActionPlaysController::insert");
$router->group("/ice-hockey-action-plays", function ($router) {
    $router->get("/{id:number}", "Sports\IceHockeyActionPlays\IceHockeyActionPlaysController::get");
    $router->post("/{id:number}", "Sports\IceHockeyActionPlays\IceHockeyActionPlaysController::update");
    $router->delete("/{id:number}", "Sports\IceHockeyActionPlays\IceHockeyActionPlaysController::delete");
});

$router->get("/ice-hockey-defensive-stats", "Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsController::getAll");
$router->post("/ice-hockey-defensive-stats", "Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsController::insert");
$router->group("/ice-hockey-defensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsController::get");
    $router->post("/{id:number}", "Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\IceHockeyDefensiveStats\IceHockeyDefensiveStatsController::delete");
});

$router->get("/ice-hockey-event-states", "Sports\IceHockeyEventStates\IceHockeyEventStatesController::getAll");
$router->post("/ice-hockey-event-states", "Sports\IceHockeyEventStates\IceHockeyEventStatesController::insert");
$router->group("/ice-hockey-event-states", function ($router) {
    $router->get("/{id:number}", "Sports\IceHockeyEventStates\IceHockeyEventStatesController::get");
    $router->post("/{id:number}", "Sports\IceHockeyEventStates\IceHockeyEventStatesController::update");
    $router->delete("/{id:number}", "Sports\IceHockeyEventStates\IceHockeyEventStatesController::delete");
});

$router->get("/ice-hockey-offensive-stats", "Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsController::getAll");
$router->post("/ice-hockey-offensive-stats", "Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsController::insert");
$router->group("/ice-hockey-offensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsController::get");
    $router->post("/{id:number}", "Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\IceHockeyOffensiveStats\IceHockeyOffensiveStatsController::delete");
});

$router->get("/ice-hockey-player-stats", "Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsController::getAll");
$router->post("/ice-hockey-player-stats", "Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsController::insert");
$router->group("/ice-hockey-player-stats", function ($router) {
    $router->get("/{id:number}", "Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsController::get");
    $router->post("/{id:number}", "Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsController::update");
    $router->delete("/{id:number}", "Sports\IceHockeyPlayerStats\IceHockeyPlayerStatsController::delete");
});

$router->get("/motor-racing-event-states", "Sports\MotorRacingEventStates\MotorRacingEventStatesController::getAll");
$router->post("/motor-racing-event-states", "Sports\MotorRacingEventStates\MotorRacingEventStatesController::insert");
$router->group("/motor-racing-event-states", function ($router) {
    $router->get("/{id:number}", "Sports\MotorRacingEventStates\MotorRacingEventStatesController::get");
    $router->post("/{id:number}", "Sports\MotorRacingEventStates\MotorRacingEventStatesController::update");
    $router->delete("/{id:number}", "Sports\MotorRacingEventStates\MotorRacingEventStatesController::delete");
});

$router->get("/motor-racing-qualifying-stats", "Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsController::getAll");
$router->post("/motor-racing-qualifying-stats", "Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsController::insert");
$router->group("/motor-racing-qualifying-stats", function ($router) {
    $router->get("/{id:number}", "Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsController::get");
    $router->post("/{id:number}", "Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsController::update");
    $router->delete("/{id:number}", "Sports\MotorRacingQualifyingStats\MotorRacingQualifyingStatsController::delete");
});

$router->get("/motor-racing-race-stats", "Sports\MotorRacingRaceStats\MotorRacingRaceStatsController::getAll");
$router->post("/motor-racing-race-stats", "Sports\MotorRacingRaceStats\MotorRacingRaceStatsController::insert");
$router->group("/motor-racing-race-stats", function ($router) {
    $router->get("/{id:number}", "Sports\MotorRacingRaceStats\MotorRacingRaceStatsController::get");
    $router->post("/{id:number}", "Sports\MotorRacingRaceStats\MotorRacingRaceStatsController::update");
    $router->delete("/{id:number}", "Sports\MotorRacingRaceStats\MotorRacingRaceStatsController::delete");
});

$router->get("/soccer-defensive-stats", "Sports\SoccerDefensiveStats\SoccerDefensiveStatsController::getAll");
$router->post("/soccer-defensive-stats", "Sports\SoccerDefensiveStats\SoccerDefensiveStatsController::insert");
$router->group("/soccer-defensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\SoccerDefensiveStats\SoccerDefensiveStatsController::get");
    $router->post("/{id:number}", "Sports\SoccerDefensiveStats\SoccerDefensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\SoccerDefensiveStats\SoccerDefensiveStatsController::delete");
});

$router->get("/soccer-event-states", "Sports\SoccerEventStates\SoccerEventStatesController::getAll");
$router->post("/soccer-event-states", "Sports\SoccerEventStates\SoccerEventStatesController::insert");
$router->group("/soccer-event-states", function ($router) {
    $router->get("/{id:number}", "Sports\SoccerEventStates\SoccerEventStatesController::get");
    $router->post("/{id:number}", "Sports\SoccerEventStates\SoccerEventStatesController::update");
    $router->delete("/{id:number}", "Sports\SoccerEventStates\SoccerEventStatesController::delete");
});

$router->get("/soccer-foul-stats", "Sports\SoccerFoulStats\SoccerFoulStatsController::getAll");
$router->post("/soccer-foul-stats", "Sports\SoccerFoulStats\SoccerFoulStatsController::insert");
$router->group("/soccer-foul-stats", function ($router) {
    $router->get("/{id:number}", "Sports\SoccerFoulStats\SoccerFoulStatsController::get");
    $router->post("/{id:number}", "Sports\SoccerFoulStats\SoccerFoulStatsController::update");
    $router->delete("/{id:number}", "Sports\SoccerFoulStats\SoccerFoulStatsController::delete");
});

$router->get("/soccer-offensive-stats", "Sports\SoccerOffensiveStats\SoccerOffensiveStatsController::getAll");
$router->post("/soccer-offensive-stats", "Sports\SoccerOffensiveStats\SoccerOffensiveStatsController::insert");
$router->group("/soccer-offensive-stats", function ($router) {
    $router->get("/{id:number}", "Sports\SoccerOffensiveStats\SoccerOffensiveStatsController::get");
    $router->post("/{id:number}", "Sports\SoccerOffensiveStats\SoccerOffensiveStatsController::update");
    $router->delete("/{id:number}", "Sports\SoccerOffensiveStats\SoccerOffensiveStatsController::delete");
});

$router->get("/team-american-football-stats", "Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsController::getAll");
$router->post("/team-american-football-stats", "Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsController::insert");
$router->group("/team-american-football-stats", function ($router) {
    $router->get("/{id:number}", "Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsController::get");
    $router->post("/{id:number}", "Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsController::update");
    $router->delete("/{id:number}", "Sports\TeamAmericanFootballStats\TeamAmericanFootballStatsController::delete");
});

$router->get("/tennis-action-points", "Sports\TennisActionPoints\TennisActionPointsController::getAll");
$router->post("/tennis-action-points", "Sports\TennisActionPoints\TennisActionPointsController::insert");
$router->group("/tennis-action-points", function ($router) {
    $router->get("/{id:number}", "Sports\TennisActionPoints\TennisActionPointsController::get");
    $router->post("/{id:number}", "Sports\TennisActionPoints\TennisActionPointsController::update");
    $router->delete("/{id:number}", "Sports\TennisActionPoints\TennisActionPointsController::delete");
});

$router->get("/tennis-action-volleys", "Sports\TennisActionVolleys\TennisActionVolleysController::getAll");
$router->post("/tennis-action-volleys", "Sports\TennisActionVolleys\TennisActionVolleysController::insert");
$router->group("/tennis-action-volleys", function ($router) {
    $router->get("/{id:number}", "Sports\TennisActionVolleys\TennisActionVolleysController::get");
    $router->post("/{id:number}", "Sports\TennisActionVolleys\TennisActionVolleysController::update");
    $router->delete("/{id:number}", "Sports\TennisActionVolleys\TennisActionVolleysController::delete");
});

$router->get("/tennis-event-states", "Sports\TennisEventStates\TennisEventStatesController::getAll");
$router->post("/tennis-event-states", "Sports\TennisEventStates\TennisEventStatesController::insert");
$router->group("/tennis-event-states", function ($router) {
    $router->get("/{id:number}", "Sports\TennisEventStates\TennisEventStatesController::get");
    $router->post("/{id:number}", "Sports\TennisEventStates\TennisEventStatesController::update");
    $router->delete("/{id:number}", "Sports\TennisEventStates\TennisEventStatesController::delete");
});

$router->get("/tennis-return-stats", "Sports\TennisReturnStats\TennisReturnStatsController::getAll");
$router->post("/tennis-return-stats", "Sports\TennisReturnStats\TennisReturnStatsController::insert");
$router->group("/tennis-return-stats", function ($router) {
    $router->get("/{id:number}", "Sports\TennisReturnStats\TennisReturnStatsController::get");
    $router->post("/{id:number}", "Sports\TennisReturnStats\TennisReturnStatsController::update");
    $router->delete("/{id:number}", "Sports\TennisReturnStats\TennisReturnStatsController::delete");
});

$router->get("/tennis-service-stats", "Sports\TennisServiceStats\TennisServiceStatsController::getAll");
$router->post("/tennis-service-stats", "Sports\TennisServiceStats\TennisServiceStatsController::insert");
$router->group("/tennis-service-stats", function ($router) {
    $router->get("/{id:number}", "Sports\TennisServiceStats\TennisServiceStatsController::get");
    $router->post("/{id:number}", "Sports\TennisServiceStats\TennisServiceStatsController::update");
    $router->delete("/{id:number}", "Sports\TennisServiceStats\TennisServiceStatsController::delete");
});

