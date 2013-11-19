// ##################################
// #### Rules #######################
// ##################################

var Game = {
    // Number of players your game calls for
    players: 2,

    // Number of rolls a player gets per turn
    rolls: 2,

    // Number of turns before determining a winner
    // Enter 0 for infinite game
    turns: 0,

    // Number of dice player rolls
    dice: 2,

    // Number of sides the dice have
    dice_sides: 6,

    // Value of winning score
    winning_score: 5,

    // Determines the winning condition in relation to the winning score value
    // Allowed values: 'highest', 'lowest', or 'matching'
    // Example: Highest score that is ....
    // Example: Lowest ....
    win_condition: 'highest',

    // Initial score each player starts at
    initial_score: 0,

    // #####################################
    // ### Do not edit below this line! ####
    // #####################################
    current_player: 0,
    total_turns: 0,
    winning_player: []
};

var players = [];