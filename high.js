const RANDOM_QUOTE_API_URL = 'http://api.quotable.io/random'
const quoteDisplayElement = document.getElementById('quoteDisplay')
const quoteInputElement = document.getElementById('quoteInput')
function countdown() {
        var seconds = 60;
        function tick() {
          var counter = document.getElementById("counter");
          seconds--;
          counter.innerHTML =
            "0:" + (seconds < 5 ? "0" : "") + String(seconds);
          if (seconds > 0) {
            setTimeout(tick, 1000);
          } else {
            document.getElementById("verifiBtn").innerHTML = `
                <div class="Btn" id="ResendBtn">
                    <button type="submit">Resend</button>
                </div>
            `;
            document.getElementById("counter").innerHTML = "";
          }
        }
        tick();
      }
      countdown();


quoteInputElement.addEventListener('input', () => {
const arrayQuote = quoteDisplayElement.querySelectorAll('span')
const arrayValue = quoteInputElement.value.split('')

let correct = true
arrayQuote.forEach((characterSpan, index) => {
  const character = arrayValue[index]
  if (character == null) {
    characterSpan.classList.remove('correct')
    characterSpan.classList.remove('incorrect')
    correct = false
  } else if (character === characterSpan.innerText) {
    characterSpan.classList.add('correct')
    characterSpan.classList.remove('incorrect')
  } else {
    characterSpan.classList.remove('correct')
    characterSpan.classList.add('incorrect')
    correct = false
  }
})

if (correct) renderNewQuote()
})

function getRandomQuote() {
return fetch(RANDOM_QUOTE_API_URL)
  .then(response => response.json())
  .then(data => data.content)
}

async function renderNewQuote() {
const quote = await getRandomQuote()
quoteDisplayElement.innerHTML = ''
quote.split('').forEach(character => {
  const characterSpan = document.createElement('span')
  characterSpan.innerText = character
  quoteDisplayElement.appendChild(characterSpan)
})
quoteInputElement.value = null
startTimer()
}

let startTime
function startTimer() {
timerElement.innerText = 0
startTime = new Date()
setInterval(() => {
  timer.innerText = getTimerTime()
}, 1000)
}

function getTimerTime() {
return Math.floor((new Date() - startTime) / 1000)
}

renderNewQuote()
