$('.roll').click(function() {
    begin_roll();
});


// ##################################
// #### Game Board ##################
// ##################################


// Draws the game board on page load
function initialize_game_board() {
    for (var i = 0; i < Game.players; i++) {
        $("#game-board").append("<div class='player-" + i +"'>");
        $("#game-board").append("<h2>Player: <span id='player-" + i +"'>" + i + "</span></h2>");
        $("#game-board").append("<h4>Current Roll: <span id='player-" + i +"-current'></span>");
        $("#game-board").append("<h4>Roll Score: <span id='player-" + i +"-roll-score'></span>");
        $("#game-board").append("<h4>Turn Score: <span id='player-" + i +"-turn-score'></span>");
        $("#game-board").append("<h4>Total Score: <span id='player-" + i +"-total-score'></span>");
        $("#game-board").append("</div>");
    }
}


// Redraws the current player's portion of the game
// board at the end of their turn
function render_roll() {
    $("#player-" + Game.current_player + "-current").html(players[Game.current_player].current_roll);
    $("#player-" + Game.current_player + "-roll-score").html(players[Game.current_player].roll_scores + ',');
    $("#player-" + Game.current_player + "-turn-score").html(players[Game.current_player].total_score);
}


// If there is a winner, draw the results
function announce_winner() {
    $('.roll').html('Game over');
    Game.end = true;
    alert('GAME OVER, check logs for winner(s)!');
    $(Game.winning_player).each(function(x) {
        console.log('Player ' + Game.winning_player[x] + ' wins with a score of ' + players[Game.winning_player[x]].total_score + '!');
    });
}