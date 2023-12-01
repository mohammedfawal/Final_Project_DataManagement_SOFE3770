//Show button
const showPlayButton = (a, b) => {
  const button = document.querySelector(a);
  button.classList = "play-button show-button";
  const overlay = document.querySelector(b);
  overlay.classList = "overlay show-button";
};

//hide button
const hidePlayButton = (a, b) => {
  const button = document.querySelector(a);
  button.classList = "play-button";
  const overlay = document.querySelector(b);
  overlay.classList = "overlay";
};
