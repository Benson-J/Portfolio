var transition = 0

document.querySelectorAll('main').forEach(function (tile) {
    resetTile(tile, 'none')
})

document.querySelector('.homeMain').style.display = 'flex'
moveTile(document.querySelector('.homeMain'), 1)

document.querySelectorAll('header span').forEach(function (button) {
    button.addEventListener('click', function () {
        if (!transition) {
            let newTile = document.querySelector('main.' + button.className)
            let oldTile = document.querySelector('main.active')
            if (newTile !== oldTile) {
                transition = 1
                resetTile(newTile, 'flex')
                requestAnimationFrame(function () {
                    moveTile(oldTile, -1)
                    moveTile(newTile, 1)
                })
            }
        }
    })
})

function moveTile(tile, direction) {
    tile.style.left = parseInt(tile.style.left) + 10 + 'px'
    tile.style.opacity = parseFloat(tile.style.opacity) + 0.1 * direction
    if (tile.style.opacity != parseInt(tile.style.opacity)) {
        requestAnimationFrame(function () {
            moveTile(tile, direction)
        })
    } else {
        tile.classList.toggle('active')
        transition = 0
        tile.style.display = (direction>0 ? 'flex' : 'none')
    }
}

function resetTile(tile, display) {
    tile.style.display = display
    tile.style.left = '-100px'
    tile.style.opacity = 0
}