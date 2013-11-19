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

initialize_game();

$('#roll').click(function() {
    begin_roll();
});

function begin_roll() {
    set_current_player(); // Don't touch this!
    set_roll_score(roll_dice());
    set_turn_score();
    increment_turn();
    check_for_winner();
    render_roll();
}

function initialize_game() {
    for (var i = 0; i < Game.players; i++) {
        players[i] = {
            current_roll: 0,
            roll_scores: [],
            total_score: 0
        };
        $(".players").append("<div class='player-" + i +"'>");
        $(".players").append("<h2>Player: <span id='player-" + i +"'>" + i + "</span></h2>");
        $(".players").append("<h4>Current Roll: <span id='player-" + i +"-current'></span>");
        $(".players").append("<h4>Roll Score: <span id='player-" + i +"-roll-score'></span>");
        $(".players").append("<h4>Turn Score: <span id='player-" + i +"-turn-score'></span>");
        $(".players").append("<h4>Total Score: <span id='player-" + i +"-total-score'></span>");
        $(".players").append("</div>");


    }
}

function set_current_player() {
    if (end_of_current_players_turn()) {
        if ((Game.current_player < Game.players - 1)) {
            Game.current_player += 1;
        } else {
            Game.current_player = 0;
        }
        console.log('*** Player' + Game.current_player);
        players[Game.current_player].current_roll = 0;
    }

}

function end_of_current_players_turn() {
    if (players[Game.current_player].current_roll == Game.rolls) {
        return true;
    } else {
        return false;
    }
}

function increment_turn() {
    console.log('current-player: ' + Game.current_player);
    console.log('current-roll: ' + players[Game.current_player].current_roll);
    if (Game.current_player == (Game.players - 1) && (players[Game.current_player].current_roll == Game.rolls)) {
        Game.total_turns += 1;
    }
    console.log(Game.total_turns);
}

function roll_dice() {
    console.log('current player: ' + Game.current_player);
    console.log('current roll: ' + players[Game.current_player].current_roll);
    players[Game.current_player].current_roll += 1;
    var dice = [];
    for (var i = 0; i < Game.dice; i++) {
        dice.push(Math.ceil(Math.random() * Game.dice_sides));
    }
    return dice;
}

function set_roll_score(dice) {

    // depending on game variables, this calculation may need to change.
    console.log("dice values: " + dice);

    // Edit this function to take on your
    // own scoring method
    // in this case we are summing the dice roll values and pushing the total to the current player's roll score
    var roll_score = 0;
    $(dice).each(function(index, value) {
        roll_score += value;
    });
    players[Game.current_player].roll_scores.push(roll_score);
    console.log("dice sum: " + players[Game.current_player].roll_scores);

}

function set_turn_score() {
    if (end_of_current_players_turn()) {
        $(players[Game.current_player].roll_scores).each(function(index, value) {
            if ((index + 1) % 2 == 0) {
                players[Game.current_player].total_score -= value;
            } else {
                players[Game.current_player].total_score += value;
            }

            //if score is less than 0, set score equal to 0
            if (players[Game.current_player].total_score < 0) {
                players[Game.current_player].total_score = 0;
            }
        });
        console.log("round score: " + players[Game.current_player].total_score);
        players[Game.current_player].roll_scores = [];
    }
}

function check_for_winner() {
    if ((Game.turns != 0) && (Game.total_turns == Game.turns)) {
        if (Game.win_condition == 'highest') {
            find_highest_score();
        } else if (Game.win_condition == 'lowest') {
            find_lowest_score();
        } else {
            find_closest_score();
        }
    } else if ((Game.turns == 0) && (Game.current_player == Game.players - 1) && (players[Game.current_player].current_roll == Game.rolls)) {
        if (Game.win_condition == 'highest') {
            find_highest_score_for_infinite();
        } else if (Game.win_condition == 'lowest') {
            find_lowest_score_for_infinite();
        } else {
            find_exact_score_for_infinite();
        }
    }
}

function find_highest_score() {
    var highest_score = players[0].total_score;
    Game.winning_player = [0];
    $(players).each(function (x) {
        if (players[x].total_score > highest_score) {
            Game.winning_player.length = 0;
            Game.winning_player.push(x);
            highest_score = players[x].total_score;
        } else if (players[x].total_score == highest_score) {
            if (x != 0) {
                Game.winning_player.push(x);
            }
        }
    });
    announce_winner();
}

function find_highest_score_for_infinite() {
    var current_highest_score = Game.winning_score;
    $(players).each(function (x) {
        if (players[x].total_score >= Game.winning_score) {
            if (players[x].total_score > current_highest_score) {
                Game.winning_player.length = 0;
                Game.winning_player.push(x);
                current_highest_score = players[x].total_score;
            } else if (players[x].total_score == current_highest_score) {
                Game.winning_player.push(x);
                current_highest_score = players[x].total_score;
            }
        }     
    });
    if (Game.winning_player.length > 0) {
        announce_winner();
    }
}

function find_lowest_score_for_infinite() {
    var current_lowest_score = Game.winning_score;
    $(players).each(function (x) {
        if (players[x].total_score <= Game.winning_score) {
            if (players[x].total_score < current_lowest_score) {
                Game.winning_player.length = 0;
                Game.winning_player.push(x);
                current_lowest_score = players[x].total_score;
            } else if (players[x].total_score == current_lowest_score) {
                Game.winning_player.push(x);
                current_lowest_score = players[x].total_score;
            }
        }     
    });
    if (Game.winning_player.length > 0) {
        announce_winner();
    }
}



function find_lowest_score() {
    var lowest_score = players[0].total_score;
    Game.winning_player = [0];
    $(players).each(function (x) {
        if (players[x].total_score < lowest_score) {
            Game.winning_player.length = 0;
            Game.winning_player.push(x);
            lowest_score = players[x].total_score;
        } else if (players[x].total_score == lowest_score) {
            if (x != 0) {
                Game.winning_player.push(x);
            }
        }
    });
    announce_winner();
}


function find_closest_score() {
    var closest_score = Math.abs(Game.winning_score - players[0].total_score);
    console.log('initial closest score: ' + closest_score);
    Game.winning_player = [0];
    $(players).each(function (x) {
        console.log('player score: ' + (Math.abs(Game.winning_score - players[x].total_score)));
        if ((Math.abs(Game.winning_score - players[x].total_score)) < closest_score) {
            Game.winning_player.length = 0;
            Game.winning_player.push(x);
            closest_score = Math.abs(Game.winning_score - players[x].total_score);
            console.log("new closest score");
        } else if ((Math.abs(Game.winning_score - players[x].total_score)) == closest_score) {
            if (x != 0) {
                Game.winning_player.push(x);
            }
        }
    });
    announce_winner();
}

function find_exact_score_for_infinite() {
    $(players).each(function (x) {
        if (players[x].total_score == Game.winning_score) {
            Game.winning_player.push(x);
        }
    });
    if (Game.winning_player.length > 0) {
        announce_winner();
    }
}



function announce_winner() {
    alert('GAME OVER, check logs for winner(s)!');
    $(Game.winning_player).each(function(x) {
        console.log('Player ' + Game.winning_player[x] + ' wins with a score of ' + players[Game.winning_player[x]].total_score + '!');
    });
}


function render_roll() {
    $("#player-" + Game.current_player + "-current").html(players[Game.current_player].current_roll);
    $("#player-" + Game.current_player + "-roll-score").html(players[Game.current_player].roll_scores + ',');
    $("#player-" + Game.current_player + "-turn-score").html(players[Game.current_player].total_score);
}