var Game = {
    current_player: 0,
    next_player: 0,
    players: 2,
    rolls: 3,
    turns: 1,
    dice: 2,
    dice_sides: 6,
    winning_score: 5,
    initial_score: 0,
    total_turns: 0,
    winning_player: false
};

var players = [];

initialize_game();

$('#roll').click(function() {
    $('#results').html(begin_roll());
});

function begin_roll() {
    set_current_player(); // Don't touch this!
    set_roll_score(roll_dice());
    set_turn_score();
    check_for_winner('highest');
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
    if (!permission_to_roll()) {
        if ((Game.current_player < Game.players - 1) && (Game.total_turns > 0)) {
            Game.current_player += 1;
            players[Game.current_player].current_roll = 0;
            console.log('*** Player' + Game.current_player);
        } else {
            Game.current_player = 0;
            players[Game.current_player].current_roll = 0;
            Game.total_turns += 1;
            console.log('*** ' + Game.current_player);
        }
    }

}

function permission_to_roll() {
    if (players[Game.current_player].current_roll < Game.rolls) {
        return true;
    } else {
        Game.total_turns += 1;
        return false;
    }
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
    console.log(dice);

    // Edit this function to take on your
    // own scoring method
    var roll_score = 0;
    $(dice).each(function(index, value) {
        roll_score += value;
    });
    console.log(Game.current_player);
    players[Game.current_player].roll_scores.push(roll_score);
    console.log(players[Game.current_player].roll_scores);

}

function set_turn_score() {
    if (!permission_to_roll()) {
        $(players[Game.current_player].roll_scores).each(function(index, value) {
            if ((index + 1) % 2 == 0) {
                players[Game.current_player].total_score -= value;
            } else {
                players[Game.current_player].total_score += value;
            }

            if (players[Game.current_player].total_score < 0) {
                players[Game.current_player].total_score = 0;
            }
        });
        console.log(players[Game.current_player].total_score);
        players[Game.current_player].roll_scores = [];
    }
}

function check_for_winner(condition) {
    if ((Game.turns != 0) && (Game.total_turns > Game.turns)) {
        if (condition == 'highest') {
            find_highest_score();
        } else if (condition == 'lowest') {
            find_lowest_score();
        } else {
            find_closest_score(condition);
        }
    } else if ((Game.turns == 0) && (Game.total_turns >= Game.players)) {

    }
}

//function find_highest_score() {
//    if ((Game.turns != 0) && (Game.total_turns > Game.turns)) {
//        //        var highest_score = 0;
//        $(players).each(function (x) {
//            if (players[x].total_score >= highest_score) {
//                if (players[x].total_score == highest_score) {
//                    //draw
//                }
//                highest_score = players[x].total_score;
//                Game.winning_player = x;
//            }
//        });
//        alert(Game.winning_player + ' wins with a score of ' + players[Game.winning_player].total_score + '!');
//
//    } else {
//        if ((players[Game.current_player].total_score >= Game.winning_score) && (Game.total_turns > Game.turns)) {
//            Game.winning_player = Game.current_player
//            alert(Game.winning_player + ' wins with a score of ' + players[Game.current_player].total_score + '!');
//        }
//    }
//}


function render_roll() {
    $("#player-" + Game.current_player + "-current").html(players[Game.current_player].current_roll);
    $("#player-" + Game.current_player + "-roll-score").html(players[Game.current_player].roll_scores + ',');
    $("#player-" + Game.current_player + "-turn-score").html(players[Game.current_player].total_score);
}