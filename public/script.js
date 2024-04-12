// initializing canvas
var canvas = document.querySelector('canvas'), ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var letters = 'ABCDEFGHIJKLMNOPQRSTUVXYZABCDEFGHIJKLMNOPQRSTUVXYZABCDEFGHIJKLMNOPQRSTUVXYZABCDEFGHIJKLMNOPQRSTUVXYZABCDEFGHIJKLMNOPQRSTUVXYZABCDEFGHIJKLMNOPQRSTUVXYZ';
letters = letters.split('');

var fontSize = 10, columns = canvas.width / fontSize;
let drops = [];
for(let i=0; i < columns; i++) {
    drops[i] = 1;
}

// setup the draw function
function draw(color) {
    ctx.fillStyle = 'rgba(0, 0, 0, .1)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    for(let i=0; i<drops.length; i++) {
        let text = letters[Math.floor(Math.random() * letters.length)];
        ctx.fillStyle = color;
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);
        drops[i]++;
        if(drops[i] * fontSize > canvas.height && Math.random() > .95) {
            drops[i] = 0;
        }
    }
}

function rgbToHex(rgb) {
    // convert to array of numbers
    let rgbArray = rgb.match(/\d+/g).map(Number);
    // convert to a 2 digit hexa code
    let hexArray = rgbArray.map(function (component) {
        let hex = component.toString(16);
        return hex.length === 1 ? "0" + hex : hex;
    });
    return '#' + hexArray.join('');
}

// loop animation
// get current main color
let firstElement = document.querySelector('[class$="_main_color"]');
if(firstElement) {
    let color = window.getComputedStyle(firstElement).color;
    console.log(color);
    console.log(typeof color);
    colorCode = rgbToHex(color);
    console.log(colorCode);
    setInterval(function () { draw(colorCode) }, 60);
}

// display current datetime in topbar
function updateCurrentTime() {
    const currentTime = new Date();
    const options = {
        weekday: 'short',
        year: '2-digit',
        month: '2-digit',
        day: '2-digit',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
    };
    document.getElementById('current_time').textContent = currentTime.toLocaleString('en-US', options);
}
setInterval(updateCurrentTime, 1000);
updateCurrentTime();

// display top 10 cryptocurrencies market cap
async function fetchCryptoData() {
    const apiUrl = 'https://api.coingecko.com/api/v3/coins/markets';
    const params = {
        vs_currency: 'usd',
        order: 'market_cap_desc',
        per_page: 10,
        page: 1,
        sparkline: false,
    };

    try {
        const response = await fetch(`${apiUrl}?${new URLSearchParams(params)}`);
        const data = await response.json();

        if(data && data.length > 0) {
            const cryptoDataContainer = document.getElementById('cryptoData');

            data.forEach(crypto => {
                const span = document.createElement('span');
                span.textContent = `${crypto.symbol.toUpperCase()}: $${crypto.current_price} `;

                const percentage = crypto.price_change_percentage_24h;
                const percentageSpan = document.createElement('span');
                percentageSpan.textContent = `${percentage.toFixed(2)}% / `;
                if(percentage > 0) {
                    percentageSpan.style.color = 'green';
                } else if (percentage < 0) {
                    percentageSpan.style.color = 'red';
                }

                span.appendChild(percentageSpan);

                cryptoDataContainer.appendChild(span);
                // cryptoDataContainer.appendChild(document.createElement())
            });
        }
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

// DISABLE after testing, persistence
// fetchCryptoData();

// VIM scrolling
document.addEventListener('keydown', function (event) {
    const element = document.documentElement;
    const step = 100;

    if(event.key === 'k') {
        element.scrollTop -= step;
    } else if(event.key === 'j') {
        element.scrollTop += step;
    }
});

// toggle CRT
function toggleCRT() {
    let bodyId = document.body.id;
    var body = document.getElementById(bodyId);

    // Toggle the id on the body element
    if(bodyId === 'crt')
        body.id = 'crt_disabled';
    else
        body.id = 'crt';

    // Update inner text based on the current state
    var crtToggle = document.getElementById("crt_toggle");
    crtToggle.innerText = (body.id === "crt") ? "CRT on" : "CRT off";
}

// loop movie scene on background canvas
// document.addEventListener("DOMContentLoaded", function () {
//     let video = document.getElementById('video_bg');
//     let canvas = document.getElementById('background-canvas');
//     let ctx = canvas.getContext('2d');
//
//     canvas.width = window.innerWidth;
//     canvas.height = window.innerHeight;
//
//     function update() {
//         draw();
//         requestAnimationFrame(update);
//     }
//
//     update();
//
//     window.addEventListener('resize', function () {
//         canvas.width = window.innerWidth;
//         canvas.height = window.innerHeight;
//     });
// });