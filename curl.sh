curl -X GET "localhost:8080/american-football-action-participants"

curl -X POST "localhost:8080/american-football-action-participants" -H 'Content-Type: application/json' -d'
{
  "american_football_action_play_id": 9994,
  "field_line": 780,
  "participant_role": "join",
  "person_id": 4981,
  "score_credit": 7227,
  "score_type": "trip",
  "yardage": 2559,
  "yards_gained": 8155
}
'

curl -X POST "localhost:8080/american-football-action-participants/4834" -H 'Content-Type: application/json' -d'
{
  "american_football_action_play_id": 9994,
  "field_line": 780,
  "id": 4834,
  "participant_role": "join",
  "person_id": 4981,
  "score_credit": 7227,
  "score_type": "trip",
  "yardage": 2559,
  "yards_gained": 8155
}
'

curl -X GET "localhost:8080/american-football-action-participants/4834"

curl -X DELETE "localhost:8080/american-football-action-participants/4834"

# --

curl -X GET "localhost:8080/american-football-action-plays"

curl -X POST "localhost:8080/american-football-action-plays" -H 'Content-Type: application/json' -d'
{
  "american_football_event_state_id": 1058,
  "comment": "blue",
  "drive_result": "option",
  "play_type": "sport",
  "points": 121,
  "score_attempt_type": "woman"
}
'

curl -X POST "localhost:8080/american-football-action-plays/3200" -H 'Content-Type: application/json' -d'
{
  "american_football_event_state_id": 1058,
  "comment": "blue",
  "drive_result": "option",
  "id": 3200,
  "play_type": "sport",
  "points": 121,
  "score_attempt_type": "woman"
}
'

curl -X GET "localhost:8080/american-football-action-plays/3200"

curl -X DELETE "localhost:8080/american-football-action-plays/3200"

# --

curl -X GET "localhost:8080/american-football-defensive-stats"

curl -X POST "localhost:8080/american-football-defensive-stats" -H 'Content-Type: application/json' -d'
{
  "interceptions_average": "this",
  "interceptions_longest": "without",
  "interceptions_total": "their",
  "interceptions_touchdown": "wonder",
  "interceptions_yards": "usually",
  "passes_defensed": "address",
  "quarterback_hurries": "agent",
  "sacks_total": "floor",
  "sacks_yards": "sure",
  "tackles_assists": "success",
  "tackles_solo": "fine",
  "tackles_total": "film"
}
'

curl -X POST "localhost:8080/american-football-defensive-stats/7055" -H 'Content-Type: application/json' -d'
{
  "id": 7055,
  "interceptions_average": "this",
  "interceptions_longest": "without",
  "interceptions_total": "their",
  "interceptions_touchdown": "wonder",
  "interceptions_yards": "usually",
  "passes_defensed": "address",
  "quarterback_hurries": "agent",
  "sacks_total": "floor",
  "sacks_yards": "sure",
  "tackles_assists": "success",
  "tackles_solo": "fine",
  "tackles_total": "film"
}
'

curl -X GET "localhost:8080/american-football-defensive-stats/7055"

curl -X DELETE "localhost:8080/american-football-defensive-stats/7055"

# --

curl -X GET "localhost:8080/american-football-down-progress-stats"

curl -X POST "localhost:8080/american-football-down-progress-stats" -H 'Content-Type: application/json' -d'
{
  "conversions_fourth_down": "road",
  "conversions_fourth_down_attempts": "check",
  "conversions_fourth_down_percentage": "become",
  "conversions_third_down": "accept",
  "conversions_third_down_attempts": "however",
  "conversions_third_down_percentage": "shake",
  "first_downs_pass": "now",
  "first_downs_penalty": "spring",
  "first_downs_run": "how",
  "first_downs_total": "buy"
}
'

curl -X POST "localhost:8080/american-football-down-progress-stats/5766" -H 'Content-Type: application/json' -d'
{
  "conversions_fourth_down": "road",
  "conversions_fourth_down_attempts": "check",
  "conversions_fourth_down_percentage": "become",
  "conversions_third_down": "accept",
  "conversions_third_down_attempts": "however",
  "conversions_third_down_percentage": "shake",
  "first_downs_pass": "now",
  "first_downs_penalty": "spring",
  "first_downs_run": "how",
  "first_downs_total": "buy",
  "id": 5766
}
'

curl -X GET "localhost:8080/american-football-down-progress-stats/5766"

curl -X DELETE "localhost:8080/american-football-down-progress-stats/5766"

# --

curl -X GET "localhost:8080/american-football-event-states"

curl -X POST "localhost:8080/american-football-event-states" -H 'Content-Type: application/json' -d'
{
  "clock_state": "bar",
  "context": "suffer",
  "current_state": 8411,
  "distance_for_1st_down": 6402,
  "down": 3475,
  "event_id": 9305,
  "field_line": 7501,
  "field_side": "wrong",
  "period_time_elapsed": "subject",
  "period_time_remaining": "possible",
  "period_value": 7232,
  "sequence_number": 1790,
  "team_in_possession_id": 3547
}
'

curl -X POST "localhost:8080/american-football-event-states/8785" -H 'Content-Type: application/json' -d'
{
  "clock_state": "bar",
  "context": "suffer",
  "current_state": 8411,
  "distance_for_1st_down": 6402,
  "down": 3475,
  "event_id": 9305,
  "field_line": 7501,
  "field_side": "wrong",
  "id": 8785,
  "period_time_elapsed": "subject",
  "period_time_remaining": "possible",
  "period_value": 7232,
  "sequence_number": 1790,
  "team_in_possession_id": 3547
}
'

curl -X GET "localhost:8080/american-football-event-states/8785"

curl -X DELETE "localhost:8080/american-football-event-states/8785"

# --

curl -X GET "localhost:8080/american-football-fumbles-stats"

curl -X POST "localhost:8080/american-football-fumbles-stats" -H 'Content-Type: application/json' -d'
{
  "fumbles_committed": "school",
  "fumbles_forced": "herself",
  "fumbles_lost": "station",
  "fumbles_opposing_committed": "plan",
  "fumbles_opposing_lost": "despite",
  "fumbles_opposing_recovered": "someone",
  "fumbles_opposing_yards_gained": "floor",
  "fumbles_own_committed": "Democrat",
  "fumbles_own_lost": "within",
  "fumbles_own_recovered": "go",
  "fumbles_own_yards_gained": "able",
  "fumbles_recovered": "traditional",
  "fumbles_yards_gained": "relate"
}
'

curl -X POST "localhost:8080/american-football-fumbles-stats/1782" -H 'Content-Type: application/json' -d'
{
  "fumbles_committed": "school",
  "fumbles_forced": "herself",
  "fumbles_lost": "station",
  "fumbles_opposing_committed": "plan",
  "fumbles_opposing_lost": "despite",
  "fumbles_opposing_recovered": "someone",
  "fumbles_opposing_yards_gained": "floor",
  "fumbles_own_committed": "Democrat",
  "fumbles_own_lost": "within",
  "fumbles_own_recovered": "go",
  "fumbles_own_yards_gained": "able",
  "fumbles_recovered": "traditional",
  "fumbles_yards_gained": "relate",
  "id": 1782
}
'

curl -X GET "localhost:8080/american-football-fumbles-stats/1782"

curl -X DELETE "localhost:8080/american-football-fumbles-stats/1782"

# --

curl -X GET "localhost:8080/american-football-offensive-stats"

curl -X POST "localhost:8080/american-football-offensive-stats" -H 'Content-Type: application/json' -d'
{
  "offensive_plays_average_yards_per": "contain",
  "offensive_plays_number": "close",
  "offensive_plays_yards": "push",
  "possession_duration": "think",
  "turnovers_giveaway": "popular"
}
'

curl -X POST "localhost:8080/american-football-offensive-stats/7550" -H 'Content-Type: application/json' -d'
{
  "id": 7550,
  "offensive_plays_average_yards_per": "contain",
  "offensive_plays_number": "close",
  "offensive_plays_yards": "push",
  "possession_duration": "think",
  "turnovers_giveaway": "popular"
}
'

curl -X GET "localhost:8080/american-football-offensive-stats/7550"

curl -X DELETE "localhost:8080/american-football-offensive-stats/7550"

# --

curl -X GET "localhost:8080/american-football-passing-stats"

curl -X POST "localhost:8080/american-football-passing-stats" -H 'Content-Type: application/json' -d'
{
  "passer_rating": "performance",
  "passes_attempts": "trip",
  "passes_average_yards_per": "space",
  "passes_completions": "grow",
  "passes_interceptions": "statement",
  "passes_interceptions_percentage": "detail",
  "passes_longest": "without",
  "passes_percentage": "feeling",
  "passes_touchdowns": "many",
  "passes_touchdowns_percentage": "tax",
  "passes_yards_gross": "special",
  "passes_yards_lost": "grow",
  "passes_yards_net": "building",
  "receptions_average_yards_per": "question",
  "receptions_first_down": "again",
  "receptions_longest": "know",
  "receptions_total": "young",
  "receptions_touchdowns": "society",
  "receptions_yards": "college"
}
'

curl -X POST "localhost:8080/american-football-passing-stats/6479" -H 'Content-Type: application/json' -d'
{
  "id": 6479,
  "passer_rating": "performance",
  "passes_attempts": "trip",
  "passes_average_yards_per": "space",
  "passes_completions": "grow",
  "passes_interceptions": "statement",
  "passes_interceptions_percentage": "detail",
  "passes_longest": "without",
  "passes_percentage": "feeling",
  "passes_touchdowns": "many",
  "passes_touchdowns_percentage": "tax",
  "passes_yards_gross": "special",
  "passes_yards_lost": "grow",
  "passes_yards_net": "building",
  "receptions_average_yards_per": "question",
  "receptions_first_down": "again",
  "receptions_longest": "know",
  "receptions_total": "young",
  "receptions_touchdowns": "society",
  "receptions_yards": "college"
}
'

curl -X GET "localhost:8080/american-football-passing-stats/6479"

curl -X DELETE "localhost:8080/american-football-passing-stats/6479"

# --

curl -X GET "localhost:8080/american-football-penalties-stats"

curl -X POST "localhost:8080/american-football-penalties-stats" -H 'Content-Type: application/json' -d'
{
  "penalties_total": "stop",
  "penalty_first_downs": "left",
  "penalty_yards": "set"
}
'

curl -X POST "localhost:8080/american-football-penalties-stats/3477" -H 'Content-Type: application/json' -d'
{
  "id": 3477,
  "penalties_total": "stop",
  "penalty_first_downs": "left",
  "penalty_yards": "set"
}
'

curl -X GET "localhost:8080/american-football-penalties-stats/3477"

curl -X DELETE "localhost:8080/american-football-penalties-stats/3477"

# --

curl -X GET "localhost:8080/american-football-rushing-stats"

curl -X POST "localhost:8080/american-football-rushing-stats" -H 'Content-Type: application/json' -d'
{
  "rushes_attempts": "tend",
  "rushes_first_down": "floor",
  "rushes_longest": "really",
  "rushes_touchdowns": "almost",
  "rushes_yards": "low",
  "rushing_average_yards_per": "spend"
}
'

curl -X POST "localhost:8080/american-football-rushing-stats/469" -H 'Content-Type: application/json' -d'
{
  "id": 469,
  "rushes_attempts": "tend",
  "rushes_first_down": "floor",
  "rushes_longest": "really",
  "rushes_touchdowns": "almost",
  "rushes_yards": "low",
  "rushing_average_yards_per": "spend"
}
'

curl -X GET "localhost:8080/american-football-rushing-stats/469"

curl -X DELETE "localhost:8080/american-football-rushing-stats/469"

# --

curl -X GET "localhost:8080/american-football-sacks-against-stats"

curl -X POST "localhost:8080/american-football-sacks-against-stats" -H 'Content-Type: application/json' -d'
{
  "sacks_against_total": "he",
  "sacks_against_yards": "behavior"
}
'

curl -X POST "localhost:8080/american-football-sacks-against-stats/6976" -H 'Content-Type: application/json' -d'
{
  "id": 6976,
  "sacks_against_total": "he",
  "sacks_against_yards": "behavior"
}
'

curl -X GET "localhost:8080/american-football-sacks-against-stats/6976"

curl -X DELETE "localhost:8080/american-football-sacks-against-stats/6976"

# --

curl -X GET "localhost:8080/american-football-scoring-stats"

curl -X POST "localhost:8080/american-football-scoring-stats" -H 'Content-Type: application/json' -d'
{
  "extra_points_attempts": "real",
  "extra_points_blocked": "child",
  "extra_points_made": "so",
  "extra_points_missed": "court",
  "field_goal_attempts": "reach",
  "field_goals_blocked": "old",
  "field_goals_made": "visit",
  "field_goals_missed": "argue",
  "safeties_against": "respond",
  "touchbacks_total": "their",
  "touchdowns_defensive": "control",
  "touchdowns_passing": "Congress",
  "touchdowns_rushing": "very",
  "touchdowns_special_teams": "toward",
  "touchdowns_total": "easy",
  "two_point_conversions_attempts": "control",
  "two_point_conversions_made": "accept"
}
'

curl -X POST "localhost:8080/american-football-scoring-stats/9713" -H 'Content-Type: application/json' -d'
{
  "extra_points_attempts": "real",
  "extra_points_blocked": "child",
  "extra_points_made": "so",
  "extra_points_missed": "court",
  "field_goal_attempts": "reach",
  "field_goals_blocked": "old",
  "field_goals_made": "visit",
  "field_goals_missed": "argue",
  "id": 9713,
  "safeties_against": "respond",
  "touchbacks_total": "their",
  "touchdowns_defensive": "control",
  "touchdowns_passing": "Congress",
  "touchdowns_rushing": "very",
  "touchdowns_special_teams": "toward",
  "touchdowns_total": "easy",
  "two_point_conversions_attempts": "control",
  "two_point_conversions_made": "accept"
}
'

curl -X GET "localhost:8080/american-football-scoring-stats/9713"

curl -X DELETE "localhost:8080/american-football-scoring-stats/9713"

# --

curl -X GET "localhost:8080/american-football-special-teams-stats"

curl -X POST "localhost:8080/american-football-special-teams-stats" -H 'Content-Type: application/json' -d'
{
  "fair_catches": "build",
  "punts_average": "safe",
  "punts_blocked": "focus",
  "punts_inside_20": "say",
  "punts_inside_20_percentage": "have",
  "punts_longest": "beat",
  "punts_total": "center",
  "punts_yards_gross": "hair",
  "punts_yards_net": "strategy",
  "returns_kickoff_average": "population",
  "returns_kickoff_longest": "capital",
  "returns_kickoff_total": "sister",
  "returns_kickoff_touchdown": "reach",
  "returns_kickoff_yards": "money",
  "returns_punt_average": "tend",
  "returns_punt_longest": "example",
  "returns_punt_total": "continue",
  "returns_punt_touchdown": "different",
  "returns_punt_yards": "employee",
  "returns_total": "guess",
  "returns_yards": "rich",
  "touchbacks_interceptions": "education",
  "touchbacks_interceptions_percentage": "worker",
  "touchbacks_kickoffs": "respond",
  "touchbacks_kickoffs_percentage": "here",
  "touchbacks_punts": "interesting",
  "touchbacks_punts_percentage": "discuss",
  "touchbacks_total": "lose",
  "touchbacks_total_percentage": "site"
}
'

curl -X POST "localhost:8080/american-football-special-teams-stats/151" -H 'Content-Type: application/json' -d'
{
  "fair_catches": "build",
  "id": 151,
  "punts_average": "safe",
  "punts_blocked": "focus",
  "punts_inside_20": "say",
  "punts_inside_20_percentage": "have",
  "punts_longest": "beat",
  "punts_total": "center",
  "punts_yards_gross": "hair",
  "punts_yards_net": "strategy",
  "returns_kickoff_average": "population",
  "returns_kickoff_longest": "capital",
  "returns_kickoff_total": "sister",
  "returns_kickoff_touchdown": "reach",
  "returns_kickoff_yards": "money",
  "returns_punt_average": "tend",
  "returns_punt_longest": "example",
  "returns_punt_total": "continue",
  "returns_punt_touchdown": "different",
  "returns_punt_yards": "employee",
  "returns_total": "guess",
  "returns_yards": "rich",
  "touchbacks_interceptions": "education",
  "touchbacks_interceptions_percentage": "worker",
  "touchbacks_kickoffs": "respond",
  "touchbacks_kickoffs_percentage": "here",
  "touchbacks_punts": "interesting",
  "touchbacks_punts_percentage": "discuss",
  "touchbacks_total": "lose",
  "touchbacks_total_percentage": "site"
}
'

curl -X GET "localhost:8080/american-football-special-teams-stats/151"

curl -X DELETE "localhost:8080/american-football-special-teams-stats/151"

# --

curl -X GET "localhost:8080/baseball-action-contact-details"

curl -X POST "localhost:8080/baseball-action-contact-details" -H 'Content-Type: application/json' -d'
{
  "baseball_action_pitch_id": 6538,
  "comment": "Their place happy arrive outside. Certainly letter open technology.",
  "location": "record",
  "strength": "health",
  "trajectory_coordinates": "defense",
  "trajectory_formula": "carry",
  "velocity": 1794
}
'

curl -X POST "localhost:8080/baseball-action-contact-details/8273" -H 'Content-Type: application/json' -d'
{
  "baseball_action_pitch_id": 6538,
  "comment": "Their place happy arrive outside. Certainly letter open technology.",
  "id": 8273,
  "location": "record",
  "strength": "health",
  "trajectory_coordinates": "defense",
  "trajectory_formula": "carry",
  "velocity": 1794
}
'

curl -X GET "localhost:8080/baseball-action-contact-details/8273"

curl -X DELETE "localhost:8080/baseball-action-contact-details/8273"

# --

curl -X GET "localhost:8080/baseball-action-pitches"

curl -X POST "localhost:8080/baseball-action-pitches" -H 'Content-Type: application/json' -d'
{
  "ball_type": "three",
  "baseball_action_play_id": 7762,
  "baseball_defensive_group_id": 7683,
  "comment": "Alone middle different bag. Like building while model medical morning give.",
  "pitch_location": "return",
  "pitch_type": "stay",
  "pitch_velocity": 5393,
  "sequence_number": 9880,
  "strike_type": "tree",
  "trajectory_coordinates": "nor",
  "trajectory_formula": "as",
  "umpire_call": "painting"
}
'

curl -X POST "localhost:8080/baseball-action-pitches/754" -H 'Content-Type: application/json' -d'
{
  "ball_type": "three",
  "baseball_action_play_id": 7762,
  "baseball_defensive_group_id": 7683,
  "comment": "Alone middle different bag. Like building while model medical morning give.",
  "id": 754,
  "pitch_location": "return",
  "pitch_type": "stay",
  "pitch_velocity": 5393,
  "sequence_number": 9880,
  "strike_type": "tree",
  "trajectory_coordinates": "nor",
  "trajectory_formula": "as",
  "umpire_call": "painting"
}
'

curl -X GET "localhost:8080/baseball-action-pitches/754"

curl -X DELETE "localhost:8080/baseball-action-pitches/754"

# --

curl -X GET "localhost:8080/baseball-action-plays"

curl -X POST "localhost:8080/baseball-action-plays" -H 'Content-Type: application/json' -d'
{
  "baseball_defensive_group_id": 4004,
  "baseball_event_state_id": 4541,
  "comment": "seat",
  "earned_runs_scored": "word",
  "notation": "answer",
  "notation_yaml": "Always change direction want focus. Drop certainly should enjoy.",
  "outs_recorded": 2697,
  "play_type": "quite",
  "rbi": 7754,
  "runner_on_first_advance": 3805,
  "runner_on_second_advance": 2262,
  "runner_on_third_advance": 6476,
  "runs_scored": 1669
}
'

curl -X POST "localhost:8080/baseball-action-plays/3035" -H 'Content-Type: application/json' -d'
{
  "baseball_defensive_group_id": 4004,
  "baseball_event_state_id": 4541,
  "comment": "seat",
  "earned_runs_scored": "word",
  "id": 3035,
  "notation": "answer",
  "notation_yaml": "Always change direction want focus. Drop certainly should enjoy.",
  "outs_recorded": 2697,
  "play_type": "quite",
  "rbi": 7754,
  "runner_on_first_advance": 3805,
  "runner_on_second_advance": 2262,
  "runner_on_third_advance": 6476,
  "runs_scored": 1669
}
'

curl -X GET "localhost:8080/baseball-action-plays/3035"

curl -X DELETE "localhost:8080/baseball-action-plays/3035"

# --

curl -X GET "localhost:8080/baseball-action-substitutions"

curl -X POST "localhost:8080/baseball-action-substitutions" -H 'Content-Type: application/json' -d'
{
  "baseball_event_state_id": 3270,
  "comment": "around",
  "person_original_id": 1610,
  "person_original_lineup_slot": 4131,
  "person_original_position_id": 7960,
  "person_replacing_id": 730,
  "person_replacing_lineup_slot": 8348,
  "person_replacing_position_id": 9357,
  "person_type": "direction",
  "sequence_number": 3119,
  "substitution_reason": "sense"
}
'

curl -X POST "localhost:8080/baseball-action-substitutions/5936" -H 'Content-Type: application/json' -d'
{
  "baseball_event_state_id": 3270,
  "comment": "around",
  "id": 5936,
  "person_original_id": 1610,
  "person_original_lineup_slot": 4131,
  "person_original_position_id": 7960,
  "person_replacing_id": 730,
  "person_replacing_lineup_slot": 8348,
  "person_replacing_position_id": 9357,
  "person_type": "direction",
  "sequence_number": 3119,
  "substitution_reason": "sense"
}
'

curl -X GET "localhost:8080/baseball-action-substitutions/5936"

curl -X DELETE "localhost:8080/baseball-action-substitutions/5936"

# --

curl -X GET "localhost:8080/baseball-defensive-group"

curl -X POST "localhost:8080/baseball-defensive-group" -H 'Content-Type: application/json' -d'
{
  "description": "Stage his moment rule doctor expert. Participant computer research half. Everybody news ball."
}
'

curl -X POST "localhost:8080/baseball-defensive-group/3624" -H 'Content-Type: application/json' -d'
{
  "description": "Stage his moment rule doctor expert. Participant computer research half. Everybody news ball.",
  "id": 3624
}
'

curl -X GET "localhost:8080/baseball-defensive-group/3624"

curl -X DELETE "localhost:8080/baseball-defensive-group/3624"

# --

curl -X GET "localhost:8080/baseball-defensive-players"

curl -X POST "localhost:8080/baseball-defensive-players" -H 'Content-Type: application/json' -d'
{
  "baseball_defensive_group_id": 6488,
  "player_id": 2427,
  "position_id": 9285
}
'

curl -X POST "localhost:8080/baseball-defensive-players/5558" -H 'Content-Type: application/json' -d'
{
  "baseball_defensive_group_id": 6488,
  "id": 5558,
  "player_id": 2427,
  "position_id": 9285
}
'

curl -X GET "localhost:8080/baseball-defensive-players/5558"

curl -X DELETE "localhost:8080/baseball-defensive-players/5558"

# --

curl -X GET "localhost:8080/baseball-defensive-stats"

curl -X POST "localhost:8080/baseball-defensive-stats" -H 'Content-Type: application/json' -d'
{
  "assists": 4347,
  "defensive_average": 388.277,
  "double_plays": 6035,
  "errors": 2671,
  "errors_catchers_interference": 3367,
  "errors_passed_ball": 2488,
  "fielding_percentage": 933.8106,
  "putouts": 9891,
  "triple_plays": 7212
}
'

curl -X POST "localhost:8080/baseball-defensive-stats/4997" -H 'Content-Type: application/json' -d'
{
  "assists": 4347,
  "defensive_average": 388.277,
  "double_plays": 6035,
  "errors": 2671,
  "errors_catchers_interference": 3367,
  "errors_passed_ball": 2488,
  "fielding_percentage": 933.8106,
  "id": 4997,
  "putouts": 9891,
  "triple_plays": 7212
}
'

curl -X GET "localhost:8080/baseball-defensive-stats/4997"

curl -X DELETE "localhost:8080/baseball-defensive-stats/4997"

# --

curl -X GET "localhost:8080/baseball-event-states"

curl -X POST "localhost:8080/baseball-event-states" -H 'Content-Type: application/json' -d'
{
  "at_bat_number": 2233,
  "balls": 3997,
  "batter_id": 8979,
  "batter_side": "with",
  "context": "north",
  "current_state": 1525,
  "event_id": 7658,
  "inning_half": "point",
  "inning_value": 5212,
  "outs": 996,
  "pitcher_id": 5680,
  "runner_on_first": 1578,
  "runner_on_first_id": 1550,
  "runner_on_second": 4973,
  "runner_on_second_id": 1967,
  "runner_on_third": 9651,
  "runner_on_third_id": 3436,
  "runs_this_inning_half": 6109,
  "sequence_number": 952,
  "strikes": 5966
}
'

curl -X POST "localhost:8080/baseball-event-states/4801" -H 'Content-Type: application/json' -d'
{
  "at_bat_number": 2233,
  "balls": 3997,
  "batter_id": 8979,
  "batter_side": "with",
  "context": "north",
  "current_state": 1525,
  "event_id": 7658,
  "id": 4801,
  "inning_half": "point",
  "inning_value": 5212,
  "outs": 996,
  "pitcher_id": 5680,
  "runner_on_first": 1578,
  "runner_on_first_id": 1550,
  "runner_on_second": 4973,
  "runner_on_second_id": 1967,
  "runner_on_third": 9651,
  "runner_on_third_id": 3436,
  "runs_this_inning_half": 6109,
  "sequence_number": 952,
  "strikes": 5966
}
'

curl -X GET "localhost:8080/baseball-event-states/4801"

curl -X DELETE "localhost:8080/baseball-event-states/4801"

# --

curl -X GET "localhost:8080/baseball-offensive-stats"

curl -X POST "localhost:8080/baseball-offensive-stats" -H 'Content-Type: application/json' -d'
{
  "at_bats": 4856,
  "at_bats_per_home_run": 661.64,
  "at_bats_per_rbi": 24.8,
  "average": 355.9,
  "bases_on_balls": 9764,
  "defensive_interferance_reaches": 1644,
  "doubles": 7182,
  "grand_slams": 6040,
  "grounded_into_double_play": 4703,
  "hit_by_pitch": 4285,
  "hits": 64,
  "hits_extra_base": 9524,
  "home_runs": 5020,
  "left_in_scoring_position": 4135,
  "left_on_base": 2025,
  "moved_up": 1432,
  "on_base_percentage": 773.1,
  "on_base_plus_slugging": 923.0,
  "plate_appearances": 8016,
  "plate_appearances_per_home_run": 818.31,
  "plate_appearances_per_rbi": 160.0,
  "rbi": 5509,
  "runs_scored": 1437,
  "sac_bunts": 7858,
  "sac_flies": 6777,
  "singles": 709,
  "slugging_percentage": 759.455,
  "stolen_bases": 1549,
  "stolen_bases_average": 430.67683484,
  "stolen_bases_caught": 6335,
  "strikeouts": 6253,
  "total_bases": 351,
  "triples": 3455
}
'

curl -X POST "localhost:8080/baseball-offensive-stats/4423" -H 'Content-Type: application/json' -d'
{
  "at_bats": 4856,
  "at_bats_per_home_run": 661.64,
  "at_bats_per_rbi": 24.8,
  "average": 355.9,
  "bases_on_balls": 9764,
  "defensive_interferance_reaches": 1644,
  "doubles": 7182,
  "grand_slams": 6040,
  "grounded_into_double_play": 4703,
  "hit_by_pitch": 4285,
  "hits": 64,
  "hits_extra_base": 9524,
  "home_runs": 5020,
  "id": 4423,
  "left_in_scoring_position": 4135,
  "left_on_base": 2025,
  "moved_up": 1432,
  "on_base_percentage": 773.1,
  "on_base_plus_slugging": 923.0,
  "plate_appearances": 8016,
  "plate_appearances_per_home_run": 818.31,
  "plate_appearances_per_rbi": 160.0,
  "rbi": 5509,
  "runs_scored": 1437,
  "sac_bunts": 7858,
  "sac_flies": 6777,
  "singles": 709,
  "slugging_percentage": 759.455,
  "stolen_bases": 1549,
  "stolen_bases_average": 430.67683484,
  "stolen_bases_caught": 6335,
  "strikeouts": 6253,
  "total_bases": 351,
  "triples": 3455
}
'

curl -X GET "localhost:8080/baseball-offensive-stats/4423"

curl -X DELETE "localhost:8080/baseball-offensive-stats/4423"

# --

curl -X GET "localhost:8080/baseball-pitching-stats"

curl -X POST "localhost:8080/baseball-pitching-stats" -H 'Content-Type: application/json' -d'
{
  "balks": 5083,
  "bases_on_balls": 8482,
  "bases_on_balls_intentional": 6256,
  "doubles_allowed": 4537,
  "earned_runs": 2993,
  "era": 553.4,
  "errors_hit_with_pitch": 4751,
  "errors_wild_pitch": 5477,
  "event_credit": "third",
  "games_complete": 8167,
  "games_finished": 4237,
  "hits": 9653,
  "home_runs_allowed": 1397,
  "inherited_runners_scored": 6383,
  "innings_pitched": "head",
  "losses": 501,
  "number_of_pitches": 8156,
  "pick_offs": 5484,
  "runs_allowed": 7069,
  "save_credit": "market",
  "saves": 4972,
  "shutouts": 3105,
  "singles_allowed": 5154,
  "strikeout_to_bb_ratio": 865.0,
  "strikeouts": 7065,
  "triples_allowed": 2073,
  "unearned_runs": 5774,
  "winning_percentage": 598.48332,
  "wins": 3742
}
'

curl -X POST "localhost:8080/baseball-pitching-stats/6818" -H 'Content-Type: application/json' -d'
{
  "balks": 5083,
  "bases_on_balls": 8482,
  "bases_on_balls_intentional": 6256,
  "doubles_allowed": 4537,
  "earned_runs": 2993,
  "era": 553.4,
  "errors_hit_with_pitch": 4751,
  "errors_wild_pitch": 5477,
  "event_credit": "third",
  "games_complete": 8167,
  "games_finished": 4237,
  "hits": 9653,
  "home_runs_allowed": 1397,
  "id": 6818,
  "inherited_runners_scored": 6383,
  "innings_pitched": "head",
  "losses": 501,
  "number_of_pitches": 8156,
  "pick_offs": 5484,
  "runs_allowed": 7069,
  "save_credit": "market",
  "saves": 4972,
  "shutouts": 3105,
  "singles_allowed": 5154,
  "strikeout_to_bb_ratio": 865.0,
  "strikeouts": 7065,
  "triples_allowed": 2073,
  "unearned_runs": 5774,
  "winning_percentage": 598.48332,
  "wins": 3742
}
'

curl -X GET "localhost:8080/baseball-pitching-stats/6818"

curl -X DELETE "localhost:8080/baseball-pitching-stats/6818"

# --

curl -X GET "localhost:8080/basketball-defensive-stats"

curl -X POST "localhost:8080/basketball-defensive-stats" -H 'Content-Type: application/json' -d'
{
  "blocks_per_game": "economic",
  "blocks_total": "direction",
  "steals_per_game": "eat",
  "steals_total": "among"
}
'

curl -X POST "localhost:8080/basketball-defensive-stats/1257" -H 'Content-Type: application/json' -d'
{
  "blocks_per_game": "economic",
  "blocks_total": "direction",
  "id": 1257,
  "steals_per_game": "eat",
  "steals_total": "among"
}
'

curl -X GET "localhost:8080/basketball-defensive-stats/1257"

curl -X DELETE "localhost:8080/basketball-defensive-stats/1257"

# --

curl -X GET "localhost:8080/basketball-event-states"

curl -X POST "localhost:8080/basketball-event-states" -H 'Content-Type: application/json' -d'
{
  "context": "moment",
  "current_state": 3252,
  "event_id": 6798,
  "period_time_elapsed": "through",
  "period_time_remaining": "these",
  "period_value": "price",
  "sequence_number": 5927
}
'

curl -X POST "localhost:8080/basketball-event-states/3255" -H 'Content-Type: application/json' -d'
{
  "context": "moment",
  "current_state": 3252,
  "event_id": 6798,
  "id": 3255,
  "period_time_elapsed": "through",
  "period_time_remaining": "these",
  "period_value": "price",
  "sequence_number": 5927
}
'

curl -X GET "localhost:8080/basketball-event-states/3255"

curl -X DELETE "localhost:8080/basketball-event-states/3255"

# --

curl -X GET "localhost:8080/basketball-offensive-stats"

curl -X POST "localhost:8080/basketball-offensive-stats" -H 'Content-Type: application/json' -d'
{
  "assists_per_game": "rule",
  "assists_total": "well",
  "field_goals_attempted": 9321,
  "field_goals_attempted_per_game": "quickly",
  "field_goals_made": 543,
  "field_goals_per_game": "position",
  "field_goals_percentage": "trial",
  "field_goals_percentage_adjusted": "across",
  "free_throws_attempted": "have",
  "free_throws_attempted_per_game": "risk",
  "free_throws_made": "Congress",
  "free_throws_per_game": "human",
  "free_throws_percentage": "cost",
  "points_scored_in_paint": "ahead",
  "points_scored_off_turnovers": "political",
  "points_scored_on_fast_break": "city",
  "points_scored_on_second_chance": "concern",
  "points_scored_per_game": "thousand",
  "points_scored_total": "section",
  "three_pointers_attempted": 8687,
  "three_pointers_attempted_per_game": "market",
  "three_pointers_made": 3751,
  "three_pointers_per_game": "play",
  "three_pointers_percentage": "defense",
  "turnovers_per_game": "rich",
  "turnovers_total": "crime"
}
'

curl -X POST "localhost:8080/basketball-offensive-stats/2468" -H 'Content-Type: application/json' -d'
{
  "assists_per_game": "rule",
  "assists_total": "well",
  "field_goals_attempted": 9321,
  "field_goals_attempted_per_game": "quickly",
  "field_goals_made": 543,
  "field_goals_per_game": "position",
  "field_goals_percentage": "trial",
  "field_goals_percentage_adjusted": "across",
  "free_throws_attempted": "have",
  "free_throws_attempted_per_game": "risk",
  "free_throws_made": "Congress",
  "free_throws_per_game": "human",
  "free_throws_percentage": "cost",
  "id": 2468,
  "points_scored_in_paint": "ahead",
  "points_scored_off_turnovers": "political",
  "points_scored_on_fast_break": "city",
  "points_scored_on_second_chance": "concern",
  "points_scored_per_game": "thousand",
  "points_scored_total": "section",
  "three_pointers_attempted": 8687,
  "three_pointers_attempted_per_game": "market",
  "three_pointers_made": 3751,
  "three_pointers_per_game": "play",
  "three_pointers_percentage": "defense",
  "turnovers_per_game": "rich",
  "turnovers_total": "crime"
}
'

curl -X GET "localhost:8080/basketball-offensive-stats/2468"

curl -X DELETE "localhost:8080/basketball-offensive-stats/2468"

# --

curl -X GET "localhost:8080/basketball-rebounding-stats"

curl -X POST "localhost:8080/basketball-rebounding-stats" -H 'Content-Type: application/json' -d'
{
  "rebounds_defensive": "space",
  "rebounds_offensive": "nor",
  "rebounds_per_game": "husband",
  "rebounds_total": "standard",
  "team_rebounds_defensive": "situation",
  "team_rebounds_offensive": "security",
  "team_rebounds_per_game": "card",
  "team_rebounds_total": "management"
}
'

curl -X POST "localhost:8080/basketball-rebounding-stats/6272" -H 'Content-Type: application/json' -d'
{
  "id": 6272,
  "rebounds_defensive": "space",
  "rebounds_offensive": "nor",
  "rebounds_per_game": "husband",
  "rebounds_total": "standard",
  "team_rebounds_defensive": "situation",
  "team_rebounds_offensive": "security",
  "team_rebounds_per_game": "card",
  "team_rebounds_total": "management"
}
'

curl -X GET "localhost:8080/basketball-rebounding-stats/6272"

curl -X DELETE "localhost:8080/basketball-rebounding-stats/6272"

# --

curl -X GET "localhost:8080/basketball-team-stats"

curl -X POST "localhost:8080/basketball-team-stats" -H 'Content-Type: application/json' -d'
{
  "fouls_total": "teacher",
  "largest_lead": "board",
  "timeouts_left": "west",
  "turnover_margin": "go"
}
'

curl -X POST "localhost:8080/basketball-team-stats/6677" -H 'Content-Type: application/json' -d'
{
  "fouls_total": "teacher",
  "id": 6677,
  "largest_lead": "board",
  "timeouts_left": "west",
  "turnover_margin": "go"
}
'

curl -X GET "localhost:8080/basketball-team-stats/6677"

curl -X DELETE "localhost:8080/basketball-team-stats/6677"

# --

curl -X GET "localhost:8080/ice-hockey-action-participants"

curl -X POST "localhost:8080/ice-hockey-action-participants" -H 'Content-Type: application/json' -d'
{
  "ice_hockey_action_play_id": 1065,
  "participant_role": "prepare",
  "person_id": 8225,
  "point_credit": 3264
}
'

curl -X POST "localhost:8080/ice-hockey-action-participants/2312" -H 'Content-Type: application/json' -d'
{
  "ice_hockey_action_play_id": 1065,
  "id": 2312,
  "participant_role": "prepare",
  "person_id": 8225,
  "point_credit": 3264
}
'

curl -X GET "localhost:8080/ice-hockey-action-participants/2312"

curl -X DELETE "localhost:8080/ice-hockey-action-participants/2312"

# --

curl -X GET "localhost:8080/ice-hockey-action-plays"

curl -X POST "localhost:8080/ice-hockey-action-plays" -H 'Content-Type: application/json' -d'
{
  "comment": "ten",
  "ice_hockey_event_state_id": 3692,
  "play_result": "on",
  "play_type": "enter",
  "score_attempt_type": "training"
}
'

curl -X POST "localhost:8080/ice-hockey-action-plays/5967" -H 'Content-Type: application/json' -d'
{
  "comment": "ten",
  "ice_hockey_event_state_id": 3692,
  "id": 5967,
  "play_result": "on",
  "play_type": "enter",
  "score_attempt_type": "training"
}
'

curl -X GET "localhost:8080/ice-hockey-action-plays/5967"

curl -X DELETE "localhost:8080/ice-hockey-action-plays/5967"

# --

curl -X GET "localhost:8080/ice-hockey-defensive-stats"

curl -X POST "localhost:8080/ice-hockey-defensive-stats" -H 'Content-Type: application/json' -d'
{
  "goals_against_average": "them",
  "goals_empty_net_allowed": "discuss",
  "goals_penalty_shot_allowed": "amount",
  "goals_power_play_allowed": "law",
  "goals_shootout_allowed": "financial",
  "goals_short_handed_allowed": "degree",
  "hits": "before",
  "minutes_penalty_killing": "turn",
  "penalty_killing_amount": "me",
  "penalty_killing_percentage": "give",
  "save_percentage": "last",
  "saves": "simply",
  "shots_blocked": "season",
  "shots_penalty_shot_allowed": "than",
  "shots_power_play_allowed": "center",
  "shots_shootout_allowed": "live",
  "shutouts": "quickly",
  "takeaways": "five"
}
'

curl -X POST "localhost:8080/ice-hockey-defensive-stats/2517" -H 'Content-Type: application/json' -d'
{
  "goals_against_average": "them",
  "goals_empty_net_allowed": "discuss",
  "goals_penalty_shot_allowed": "amount",
  "goals_power_play_allowed": "law",
  "goals_shootout_allowed": "financial",
  "goals_short_handed_allowed": "degree",
  "hits": "before",
  "id": 2517,
  "minutes_penalty_killing": "turn",
  "penalty_killing_amount": "me",
  "penalty_killing_percentage": "give",
  "save_percentage": "last",
  "saves": "simply",
  "shots_blocked": "season",
  "shots_penalty_shot_allowed": "than",
  "shots_power_play_allowed": "center",
  "shots_shootout_allowed": "live",
  "shutouts": "quickly",
  "takeaways": "five"
}
'

curl -X GET "localhost:8080/ice-hockey-defensive-stats/2517"

curl -X DELETE "localhost:8080/ice-hockey-defensive-stats/2517"

# --

curl -X GET "localhost:8080/ice-hockey-event-states"

curl -X POST "localhost:8080/ice-hockey-event-states" -H 'Content-Type: application/json' -d'
{
  "context": "certain",
  "current_state": 8440,
  "event_id": 3384,
  "period_time_elapsed": "detail",
  "period_time_remaining": "war",
  "period_value": "image",
  "sequence_number": 7198
}
'

curl -X POST "localhost:8080/ice-hockey-event-states/6673" -H 'Content-Type: application/json' -d'
{
  "context": "certain",
  "current_state": 8440,
  "event_id": 3384,
  "id": 6673,
  "period_time_elapsed": "detail",
  "period_time_remaining": "war",
  "period_value": "image",
  "sequence_number": 7198
}
'

curl -X GET "localhost:8080/ice-hockey-event-states/6673"

curl -X DELETE "localhost:8080/ice-hockey-event-states/6673"

# --

curl -X GET "localhost:8080/ice-hockey-offensive-stats"

curl -X POST "localhost:8080/ice-hockey-offensive-stats" -H 'Content-Type: application/json' -d'
{
  "assists": "state",
  "faceoff_losses": "some",
  "faceoff_win_percentage": "themselves",
  "faceoff_wins": "seem",
  "giveaways": "hot",
  "goals_empty_net": "while",
  "goals_even_strength": "age",
  "goals_game_tying": "raise",
  "goals_game_winning": "between",
  "goals_overtime": "mention",
  "goals_penalty_shot": "major",
  "goals_power_play": "would",
  "goals_shootout": "color",
  "goals_short_handed": "experience",
  "minutes_power_play": "hit",
  "points": "speak",
  "power_play_amount": "education",
  "power_play_percentage": "thousand",
  "scoring_chances": "car",
  "shots_penalty_shot_missed": "thought",
  "shots_penalty_shot_percentage": "them",
  "shots_penalty_shot_taken": "eight"
}
'

curl -X POST "localhost:8080/ice-hockey-offensive-stats/9087" -H 'Content-Type: application/json' -d'
{
  "assists": "state",
  "faceoff_losses": "some",
  "faceoff_win_percentage": "themselves",
  "faceoff_wins": "seem",
  "giveaways": "hot",
  "goals_empty_net": "while",
  "goals_even_strength": "age",
  "goals_game_tying": "raise",
  "goals_game_winning": "between",
  "goals_overtime": "mention",
  "goals_penalty_shot": "major",
  "goals_power_play": "would",
  "goals_shootout": "color",
  "goals_short_handed": "experience",
  "id": 9087,
  "minutes_power_play": "hit",
  "points": "speak",
  "power_play_amount": "education",
  "power_play_percentage": "thousand",
  "scoring_chances": "car",
  "shots_penalty_shot_missed": "thought",
  "shots_penalty_shot_percentage": "them",
  "shots_penalty_shot_taken": "eight"
}
'

curl -X GET "localhost:8080/ice-hockey-offensive-stats/9087"

curl -X DELETE "localhost:8080/ice-hockey-offensive-stats/9087"

# --

curl -X GET "localhost:8080/ice-hockey-player-stats"

curl -X POST "localhost:8080/ice-hockey-player-stats" -H 'Content-Type: application/json' -d'
{
  "plus_minus": "standard"
}
'

curl -X POST "localhost:8080/ice-hockey-player-stats/324" -H 'Content-Type: application/json' -d'
{
  "id": 324,
  "plus_minus": "standard"
}
'

curl -X GET "localhost:8080/ice-hockey-player-stats/324"

curl -X DELETE "localhost:8080/ice-hockey-player-stats/324"

# --

curl -X GET "localhost:8080/motor-racing-event-states"

curl -X POST "localhost:8080/motor-racing-event-states" -H 'Content-Type: application/json' -d'
{
  "context": "attack",
  "current_state": 8566,
  "event_id": 4538,
  "flag_state": "management",
  "lap": "garden",
  "laps_remaining": "room",
  "sequence_number": 2886,
  "time_elapsed": "choice"
}
'

curl -X POST "localhost:8080/motor-racing-event-states/3210" -H 'Content-Type: application/json' -d'
{
  "context": "attack",
  "current_state": 8566,
  "event_id": 4538,
  "flag_state": "management",
  "id": 3210,
  "lap": "garden",
  "laps_remaining": "room",
  "sequence_number": 2886,
  "time_elapsed": "choice"
}
'

curl -X GET "localhost:8080/motor-racing-event-states/3210"

curl -X DELETE "localhost:8080/motor-racing-event-states/3210"

# --

curl -X GET "localhost:8080/motor-racing-qualifying-stats"

curl -X POST "localhost:8080/motor-racing-qualifying-stats" -H 'Content-Type: application/json' -d'
{
  "grid": "parent",
  "pole_position": "kind",
  "pole_wins": "water",
  "qualifying_position": "city",
  "qualifying_speed": "protect",
  "qualifying_speed_units": "situation",
  "qualifying_time": "itself"
}
'

curl -X POST "localhost:8080/motor-racing-qualifying-stats/2904" -H 'Content-Type: application/json' -d'
{
  "grid": "parent",
  "id": 2904,
  "pole_position": "kind",
  "pole_wins": "water",
  "qualifying_position": "city",
  "qualifying_speed": "protect",
  "qualifying_speed_units": "situation",
  "qualifying_time": "itself"
}
'

curl -X GET "localhost:8080/motor-racing-qualifying-stats/2904"

curl -X DELETE "localhost:8080/motor-racing-qualifying-stats/2904"

# --

curl -X GET "localhost:8080/motor-racing-race-stats"

curl -X POST "localhost:8080/motor-racing-race-stats" -H 'Content-Type: application/json' -d'
{
  "bonus": "enjoy",
  "distance_completed": "lose",
  "distance_leading": "so",
  "distance_units": "make",
  "finishes": "behavior",
  "finishes_top_10": "major",
  "finishes_top_5": "threat",
  "laps_ahead_follower": "of",
  "laps_behind_leader": "center",
  "laps_completed": "improve",
  "laps_leading_total": "certain",
  "leads_total": "level",
  "money": "hit",
  "money_units": "rock",
  "non_finishes": "yard",
  "points": "water",
  "points_rookie": "indeed",
  "races_leading": "up",
  "speed_average": "control",
  "speed_units": "board",
  "starts": "edge",
  "status": "have",
  "time": "science",
  "time_ahead_follower": "ready",
  "time_behind_leader": "sister",
  "wins": "toward"
}
'

curl -X POST "localhost:8080/motor-racing-race-stats/3949" -H 'Content-Type: application/json' -d'
{
  "bonus": "enjoy",
  "distance_completed": "lose",
  "distance_leading": "so",
  "distance_units": "make",
  "finishes": "behavior",
  "finishes_top_10": "major",
  "finishes_top_5": "threat",
  "id": 3949,
  "laps_ahead_follower": "of",
  "laps_behind_leader": "center",
  "laps_completed": "improve",
  "laps_leading_total": "certain",
  "leads_total": "level",
  "money": "hit",
  "money_units": "rock",
  "non_finishes": "yard",
  "points": "water",
  "points_rookie": "indeed",
  "races_leading": "up",
  "speed_average": "control",
  "speed_units": "board",
  "starts": "edge",
  "status": "have",
  "time": "science",
  "time_ahead_follower": "ready",
  "time_behind_leader": "sister",
  "wins": "toward"
}
'

curl -X GET "localhost:8080/motor-racing-race-stats/3949"

curl -X DELETE "localhost:8080/motor-racing-race-stats/3949"

# --

curl -X GET "localhost:8080/soccer-defensive-stats"

curl -X POST "localhost:8080/soccer-defensive-stats" -H 'Content-Type: application/json' -d'
{
  "catches_punches": "four",
  "goals_against_average": "city",
  "goals_against_total": "visit",
  "goals_penalty_shot_allowed": "action",
  "save_percentage": "prepare",
  "saves": "force",
  "shots_blocked": "catch",
  "shots_on_goal_total": "nothing",
  "shots_penalty_shot_allowed": "until",
  "shots_shootout_allowed": "race",
  "shots_shootout_total": "front",
  "shutouts": "kid"
}
'

curl -X POST "localhost:8080/soccer-defensive-stats/6921" -H 'Content-Type: application/json' -d'
{
  "catches_punches": "four",
  "goals_against_average": "city",
  "goals_against_total": "visit",
  "goals_penalty_shot_allowed": "action",
  "id": 6921,
  "save_percentage": "prepare",
  "saves": "force",
  "shots_blocked": "catch",
  "shots_on_goal_total": "nothing",
  "shots_penalty_shot_allowed": "until",
  "shots_shootout_allowed": "race",
  "shots_shootout_total": "front",
  "shutouts": "kid"
}
'

curl -X GET "localhost:8080/soccer-defensive-stats/6921"

curl -X DELETE "localhost:8080/soccer-defensive-stats/6921"

# --

curl -X GET "localhost:8080/soccer-event-states"

curl -X POST "localhost:8080/soccer-event-states" -H 'Content-Type: application/json' -d'
{
  "context": "itself",
  "current_state": 2059,
  "event_id": 6423,
  "minutes_elapsed": "order",
  "period_minute_elapsed": "that",
  "period_time_elapsed": "assume",
  "period_time_remaining": "explain",
  "period_value": "hundred",
  "sequence_number": 6620
}
'

curl -X POST "localhost:8080/soccer-event-states/2366" -H 'Content-Type: application/json' -d'
{
  "context": "itself",
  "current_state": 2059,
  "event_id": 6423,
  "id": 2366,
  "minutes_elapsed": "order",
  "period_minute_elapsed": "that",
  "period_time_elapsed": "assume",
  "period_time_remaining": "explain",
  "period_value": "hundred",
  "sequence_number": 6620
}
'

curl -X GET "localhost:8080/soccer-event-states/2366"

curl -X DELETE "localhost:8080/soccer-event-states/2366"

# --

curl -X GET "localhost:8080/soccer-foul-stats"

curl -X POST "localhost:8080/soccer-foul-stats" -H 'Content-Type: application/json' -d'
{
  "caution_points_pending": "enjoy",
  "caution_points_total": "south",
  "cautions_pending": "around",
  "cautions_total": "effect",
  "ejections_total": "opportunity",
  "fouls_commited": "writer",
  "fouls_suffered": "whether"
}
'

curl -X POST "localhost:8080/soccer-foul-stats/5277" -H 'Content-Type: application/json' -d'
{
  "caution_points_pending": "enjoy",
  "caution_points_total": "south",
  "cautions_pending": "around",
  "cautions_total": "effect",
  "ejections_total": "opportunity",
  "fouls_commited": "writer",
  "fouls_suffered": "whether",
  "id": 5277
}
'

curl -X GET "localhost:8080/soccer-foul-stats/5277"

curl -X DELETE "localhost:8080/soccer-foul-stats/5277"

# --

curl -X GET "localhost:8080/soccer-offensive-stats"

curl -X POST "localhost:8080/soccer-offensive-stats" -H 'Content-Type: application/json' -d'
{
  "assists_game_tying": "industry",
  "assists_game_winning": "term",
  "assists_overtime": "week",
  "assists_total": "mind",
  "corner_kicks": "say",
  "giveaways": "huge",
  "goals_game_tying": "poor",
  "goals_game_winning": "cost",
  "goals_overtime": "wish",
  "goals_shootout": "sister",
  "goals_total": "describe",
  "hat_tricks": "without",
  "offsides": "follow",
  "points": "energy",
  "shots_hit_frame": "PM",
  "shots_on_goal_total": "culture",
  "shots_penalty_shot_missed": "choice",
  "shots_penalty_shot_percentage": "blue",
  "shots_penalty_shot_scored": "community",
  "shots_penalty_shot_taken": "environmental",
  "shots_shootout_missed": "family",
  "shots_shootout_percentage": "may",
  "shots_shootout_scored": "sort",
  "shots_shootout_taken": "national",
  "shots_total": "heart"
}
'

curl -X POST "localhost:8080/soccer-offensive-stats/2155" -H 'Content-Type: application/json' -d'
{
  "assists_game_tying": "industry",
  "assists_game_winning": "term",
  "assists_overtime": "week",
  "assists_total": "mind",
  "corner_kicks": "say",
  "giveaways": "huge",
  "goals_game_tying": "poor",
  "goals_game_winning": "cost",
  "goals_overtime": "wish",
  "goals_shootout": "sister",
  "goals_total": "describe",
  "hat_tricks": "without",
  "id": 2155,
  "offsides": "follow",
  "points": "energy",
  "shots_hit_frame": "PM",
  "shots_on_goal_total": "culture",
  "shots_penalty_shot_missed": "choice",
  "shots_penalty_shot_percentage": "blue",
  "shots_penalty_shot_scored": "community",
  "shots_penalty_shot_taken": "environmental",
  "shots_shootout_missed": "family",
  "shots_shootout_percentage": "may",
  "shots_shootout_scored": "sort",
  "shots_shootout_taken": "national",
  "shots_total": "heart"
}
'

curl -X GET "localhost:8080/soccer-offensive-stats/2155"

curl -X DELETE "localhost:8080/soccer-offensive-stats/2155"

# --

curl -X GET "localhost:8080/team-american-football-stats"

curl -X POST "localhost:8080/team-american-football-stats" -H 'Content-Type: application/json' -d'
{
  "average_starting_position": "skin",
  "time_of_possession": "bar",
  "timeouts": "page",
  "turnover_ratio": "cut",
  "yards_per_attempt": "especially"
}
'

curl -X POST "localhost:8080/team-american-football-stats/2452" -H 'Content-Type: application/json' -d'
{
  "average_starting_position": "skin",
  "id": 2452,
  "time_of_possession": "bar",
  "timeouts": "page",
  "turnover_ratio": "cut",
  "yards_per_attempt": "especially"
}
'

curl -X GET "localhost:8080/team-american-football-stats/2452"

curl -X DELETE "localhost:8080/team-american-football-stats/2452"

# --

curl -X GET "localhost:8080/tennis-action-points"

curl -X POST "localhost:8080/tennis-action-points" -H 'Content-Type: application/json' -d'
{
  "sequence_number": "eight",
  "sub_period_id": "political",
  "win_type": "wall"
}
'

curl -X POST "localhost:8080/tennis-action-points/4713" -H 'Content-Type: application/json' -d'
{
  "id": 4713,
  "sequence_number": "eight",
  "sub_period_id": "political",
  "win_type": "wall"
}
'

curl -X GET "localhost:8080/tennis-action-points/4713"

curl -X DELETE "localhost:8080/tennis-action-points/4713"

# --

curl -X GET "localhost:8080/tennis-action-volleys"

curl -X POST "localhost:8080/tennis-action-volleys" -H 'Content-Type: application/json' -d'
{
  "landing_location": "six",
  "result": "because",
  "sequence_number": "film",
  "spin_type": "cover",
  "swing_type": "small",
  "tennis_action_points_id": 1746,
  "trajectory_details": "fact"
}
'

curl -X POST "localhost:8080/tennis-action-volleys/8854" -H 'Content-Type: application/json' -d'
{
  "id": 8854,
  "landing_location": "six",
  "result": "because",
  "sequence_number": "film",
  "spin_type": "cover",
  "swing_type": "small",
  "tennis_action_points_id": 1746,
  "trajectory_details": "fact"
}
'

curl -X GET "localhost:8080/tennis-action-volleys/8854"

curl -X DELETE "localhost:8080/tennis-action-volleys/8854"

# --

curl -X GET "localhost:8080/tennis-event-states"

curl -X POST "localhost:8080/tennis-event-states" -H 'Content-Type: application/json' -d'
{
  "context": "environmental",
  "current_state": 6940,
  "event_id": 9897,
  "game": "create",
  "receiver_person_id": 4623,
  "receiver_score": "part",
  "sequence_number": 9094,
  "server_person_id": 1360,
  "server_score": "discuss",
  "service_number": "standard",
  "tennis_set": "bill"
}
'

curl -X POST "localhost:8080/tennis-event-states/327" -H 'Content-Type: application/json' -d'
{
  "context": "environmental",
  "current_state": 6940,
  "event_id": 9897,
  "game": "create",
  "id": 327,
  "receiver_person_id": 4623,
  "receiver_score": "part",
  "sequence_number": 9094,
  "server_person_id": 1360,
  "server_score": "discuss",
  "service_number": "standard",
  "tennis_set": "bill"
}
'

curl -X GET "localhost:8080/tennis-event-states/327"

curl -X DELETE "localhost:8080/tennis-event-states/327"

# --

curl -X GET "localhost:8080/tennis-return-stats"

curl -X POST "localhost:8080/tennis-return-stats" -H 'Content-Type: application/json' -d'
{
  "break_points_converted": "consumer",
  "break_points_converted_pct": "bar",
  "break_points_played": "assume",
  "first_service_return_points_won": "give",
  "first_service_return_points_won_pct": "car",
  "matches_played": "cover",
  "return_games_played": "everyone",
  "return_games_won": "agree",
  "return_games_won_pct": "now",
  "returns_played": "gun",
  "second_service_return_points_won": "baby",
  "second_service_return_points_won_pct": "add"
}
'

curl -X POST "localhost:8080/tennis-return-stats/5583" -H 'Content-Type: application/json' -d'
{
  "break_points_converted": "consumer",
  "break_points_converted_pct": "bar",
  "break_points_played": "assume",
  "first_service_return_points_won": "give",
  "first_service_return_points_won_pct": "car",
  "id": 5583,
  "matches_played": "cover",
  "return_games_played": "everyone",
  "return_games_won": "agree",
  "return_games_won_pct": "now",
  "returns_played": "gun",
  "second_service_return_points_won": "baby",
  "second_service_return_points_won_pct": "add"
}
'

curl -X GET "localhost:8080/tennis-return-stats/5583"

curl -X DELETE "localhost:8080/tennis-return-stats/5583"

# --

curl -X GET "localhost:8080/tennis-service-stats"

curl -X POST "localhost:8080/tennis-service-stats" -H 'Content-Type: application/json' -d'
{
  "aces": "less",
  "break_points_played": "reason",
  "break_points_saved": "special",
  "break_points_saved_pct": "another",
  "first_service_points_won": "rise",
  "first_service_points_won_pct": "area",
  "first_services_good": "bring",
  "first_services_good_pct": "necessary",
  "matches_played": "commercial",
  "second_service_points_won": "reduce",
  "second_service_points_won_pct": "how",
  "service_games_played": "conference",
  "service_games_won": "the",
  "service_games_won_pct": "difficult",
  "services_played": "federal"
}
'

curl -X POST "localhost:8080/tennis-service-stats/4840" -H 'Content-Type: application/json' -d'
{
  "aces": "less",
  "break_points_played": "reason",
  "break_points_saved": "special",
  "break_points_saved_pct": "another",
  "first_service_points_won": "rise",
  "first_service_points_won_pct": "area",
  "first_services_good": "bring",
  "first_services_good_pct": "necessary",
  "id": 4840,
  "matches_played": "commercial",
  "second_service_points_won": "reduce",
  "second_service_points_won_pct": "how",
  "service_games_played": "conference",
  "service_games_won": "the",
  "service_games_won_pct": "difficult",
  "services_played": "federal"
}
'

curl -X GET "localhost:8080/tennis-service-stats/4840"

curl -X DELETE "localhost:8080/tennis-service-stats/4840"

# --

