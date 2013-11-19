$('#roll').click(function() {
    begin_roll();
});


// ##################################
// #### Game Board ##################
// ##################################


function initialize_game() {
    for (var i = 0; i < Game.players; i++) {
        players[i] = {
            current_roll: 0,
            roll_scores: [],
            total_score: 0
        };
        $("#game-board").append("<div class='player-" + i +"'>");
        $("#game-board").append("<h2>Player: <span id='player-" + i +"'>" + i + "</span></h2>");
        $("#game-board").append("<h4>Current Roll: <span id='player-" + i +"-current'></span>");
        $("#game-board").append("<h4>Roll Score: <span id='player-" + i +"-roll-score'></span>");
        $("#game-board").append("<h4>Turn Score: <span id='player-" + i +"-turn-score'></span>");
        $("#game-board").append("<h4>Total Score: <span id='player-" + i +"-total-score'></span>");
        $("#game-board").append("</div>");
    }
}


function render_roll() {
    $("#player-" + Game.current_player + "-current").html(players[Game.current_player].current_roll);
    $("#player-" + Game.current_player + "-roll-score").html(players[Game.current_player].roll_scores + ',');
    $("#player-" + Game.current_player + "-turn-score").html(players[Game.current_player].total_score);
}


function announce_winner() {
    alert('GAME OVER, check logs for winner(s)!');
    $(Game.winning_player).each(function(x) {
        console.log('Player ' + Game.winning_player[x] + ' wins with a score of ' + players[Game.winning_player[x]].total_score + '!');
    });
}