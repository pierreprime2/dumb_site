const audioPlayer = document.querySelector(".audio_player");
const audio = new Audio("http://188.40.109.122:8000/ices2");

console.dir(audio);

audio.addEventListener(
    "loadeddata",
    () => {
        audioPlayer.querySelector(".time.length").textContent = getTimeCodeFromNum(audio.duration);
        audio.volume = .75;
    },
    false
);

// click on timeline to skip
const timeline = audioPlayer.querySelector(".timeline");
timeline.addEventListener("click", e => {
    const timelineWidth = window.getComputedStyle(timeline).width;
    const timeToSeek = e.offsetX / parseInt(timelineWidth) * audio.duration;
    audio.currentTime = timeToSeek;
}, false);

// click volume slider to change volume
const volumeSlider = audioPlayer.querySelector(".controls.volume_slider");
volumeSlider.addEventListener('click', e => {
    const sliderWidth = window.getComputedStyle(volumeSlider).width;
    const newVolume = e.offsetX / parseInt(sliderWidth);
    audio.volume = newVolume;
    audioPlayer.querySelector(".controls.volume_percentage").style.width = newVolume * 100 + '%';
}, false);

// check audio percentage and update time
setInterval(() => {
    const progressBar = audioPlayer.querySelector(".progress");
    progressBar.style.width = audio.currentTime / audio.duration * 100 + "%";
    audioPlayer.querySelector(".time.current").textContent = getTimeCodeFromNum(
        audio.currentTime
    );
}, 500);

// toggle between playing and pausing on click
const playBtn = audioPlayer.querySelector(".controls.toggle_play");
playBtn.addEventListener(
    "click",
    () => {
        if(audio.paused) {
            playBtn.classList.remove("play");
            playBtn.classList.add("pause");
            audio.play();
        } else {
            playBtn.classList.remove("pause");
            playBtn.classList.add("play");
            audio.pause();
        }
    },
    false
);

audioPlayer.querySelector(".volume_button").addEventListener("click", () => {
    const volumeEl = audioPlayer.querySelector(".volume_container .volume");
    audio.muted = !audio.muted;
    if(audio.muted) {
        volumeEl.classList.remove("icono-volumeMedium");
        volumeEl.classList.add("icono-volumeMute");
    } else {
        volumeEl.classList.add("icono-volumeMedium");
        volumeEl.classList.remove("icono-volumeMute");
    }
});

// turn 128 seconds into 2:08
function getTimeCodeFromNum(num) {
    let seconds = parseInt(num);
    let minutes = parseInt(seconds / 60);
    seconds -= minutes * 60;
    const hours = parseInt(minutes / 60);
    minutes -= hours * 60;

    if(hours === 0) return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
    return `${String(hours).padStart(2, 0)}:${minutes}:${String(
        seconds % 60
    ).padStart(2, 0)}`;
}