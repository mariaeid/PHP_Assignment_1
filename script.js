'use strict';

// Creates constants of the like_button and like_input from html
const like_buttons = document.querySelectorAll(".like_button");
const like_inputs = document.querySelectorAll(".like_input");

for (let i=0; i<like_buttons.length; i++) {
  const button = like_buttons[i];
  //Each time the like_button is clicked the value of like_input is increased by one
  button.addEventListener('click', function() {
    let like = like_inputs[i].value;
    let new_like = parseInt(like) + 1;
    like_inputs[i].value = new_like;
  });
}
