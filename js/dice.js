var redPath = [20, 21, 22, 23, 24, 16, 13, 10, 7, 4, 1, 2, 3, 6, 9, 12, 15, 18, 37, 38, 39, 40, 41, 42, 48, 54, 53, 52, 51, 50, 49, 57, 60, 63, 66, 69, 72, 71, 70, 67, 64, 61, 58, 55, 36, 35, 34, 33, 32, 31, 25, 26, 27, 28, 29, 30]
var greenPath = [6, 9, 12, 15, 18, 37, 38, 39, 40, 41, 42, 48, 54, 53, 52, 51, 50, 49, 57, 60, 63, 66, 69, 72, 71, 70, 67, 64, 61, 58, 55, 36, 35, 34, 33, 32, 31, 25, 19, 20, 21, 22, 23, 24, 16, 13, 10, 7, 4, 1, 2, 5, 8, 11, 14, 17]
var yellowPath = [53, 52, 51, 50, 49, 57, 60, 63, 66, 69, 72, 71, 70, 67, 64, 61, 58, 55, 36, 35, 34, 33, 32, 31, 25, 19, 20, 21, 22, 23, 24, 16, 13, 10, 7, 4, 1, 2, 3, 6, 9, 12, 15, 18, 37, 38, 39, 40, 41, 42, 48, 47, 46, 45, 44, 43]
var bluePath = [67, 64, 61, 58, 55, 36, 35, 34, 33, 32, 31, 25, 19, 20, 21, 22, 23, 24, 16, 13, 10, 7, 4, 1, 2, 3, 6, 9, 12, 15, 18, 37, 38, 39, 40, 41, 42, 48, 54, 53, 52, 51, 50, 49, 57, 60, 63, 66, 69, 72, 71, 68, 65, 62, 59, 56]

var diceProbability = [[4], [2, 6], [2, 4, 6], [0, 2, 6, 8], [0, 2, 4, 6, 8], [0, 2, 3, 5, 6, 8]]

var b1 = document.getElementById('b1')
var b2 = document.getElementById('b2')
var b3 = document.getElementById('b3')
var b4 = document.getElementById('b4')

var r1 = document.getElementById('r1')
var r2 = document.getElementById('r2')
var r3 = document.getElementById('r3')
var r4 = document.getElementById('r4')

var g1 = document.getElementById('g1')
var g2 = document.getElementById('g2')
var g3 = document.getElementById('g3')
var g4 = document.getElementById('g4')

var y1 = document.getElementById('y1')
var y2 = document.getElementById('y2')
var y3 = document.getElementById('y3')
var y4 = document.getElementById('y4')


const xhr = new XMLHttpRequest()

xhr.open('GET', 'test.html', true)
xhr.send()
xhr.timeout = 1000
xhr.onload = () => {
  if (xhr.status == 200) {
    // console.log(xhr.responseText)
    // console.log(xhr.statusText)
  }
}


let dice = document.getElementById('dice')
dice.addEventListener('click', rollRes)

var user = ['ainzel', 'dibyanshu', 'Manoranjan', 'koi nehi']
var pawns = [[b1, b2, b3, b4], [r1, r2, r3, r4], [g1, g2, g3, g4], [y1, y2, y3, y4]]

var pawnPosition = [[-6, -6, -6, -6], [-6, -6, -6, -6], [-6, -6, -6, -6], [-6, -6, -6, -6]]

function rollDice() {
  $('.bg-white').removeClass('bg-white')
  var x = Math.floor(Math.random() * 6);
  for (var d in diceProbability[x]) {
    var index = diceProbability[x][d]
    $('.dot')[index].classList.add('bg-white')
  }
  console.log('the result from function rollDice() is', x + 1)
  return x + 1
}
var currTurn = 0,
  able, hu, currRes

function rollRes() {
  currRes = rollDice()
  able = disableUser(hu)
  if (!able) {
    dice.removeEventListener('click', rollRes)
    dice.style.background = '#FF76B8'
    $('.piece').click(function(){
      $('')
    })
  }

}

function disableUser(t) {
  t = currRes == 6 ? true : false
  return t
}