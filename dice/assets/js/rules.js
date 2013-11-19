// ##################################
// #### Rules #######################
// ##################################

var Game = {
    current_player: 0,
    next_player: 0,
    players: 2,
    rolls: 2,
    // total number of turns the game can have before determining a winner, 0 for infinite game
    turns: 0,
    dice: 2,
    dice_sides: 6,
    winning_score: 5,
    // allowed values: highest, lowest, or matching
    win_condition: 'highest',
    initial_score: 0,
    total_turns: 0,
    winning_player: []
};

var players = [];