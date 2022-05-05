let click_count = 0
let level = 0
let time = 500

// helper function to get html element
const $ = function (id) { return document.getElementById(id); };

window.onload = function(){
    $("game_button").onmouseover = change_position
    $("game_button").onclick = increase_score
}

function change_position(){
    setTimeout(()=>{
        // find the area the game played (button should be inside the container zone)
        let width = $("container").clientWidth - $("game_button").offsetWidth
        let height = $("container").clientHeight - $("game_button").offsetHeight
        $("game_button").style.left = Math.random()*width +'px';
        $("game_button").style.top = Math.random()*height+'px';

    }, time);  
}

function increase_score(){
    click_count++;
    // if the button is clicked 3 times, level up:
    if(click_count === 3){
        level++;
        // display the pop-up window
        $("next_level_modal").style.display = "inline-block"
        // insert next level
        $("level").innerHTML = level
        // close (hide) the pop-up window when user clicks to ok button
        $("ok_button").onclick = function(){
            $("next_level_modal").style.display = "none"
        }
        // reset click count for next level and increase time
        click_count=0
        time-=100
    }
}