
const like_buttons = document.querySelectorAll(".like_button");
const like_inputs = document.querySelectorAll(".like_input");
for (let i=0; i<like_buttons.length; i++) {
  const button = like_buttons[i];
  button.addEventListener('click', function() {
    let like = like_inputs[i].value;
    let new_like = parseInt(like) + 1;
    like_inputs[i].value = new_like;
  });
}
