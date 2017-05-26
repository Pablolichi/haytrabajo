var imageArray = [
	'images/1.jpg',
    'images/2.jpg',
    'images/3.jpg',
    'images/4.jpg'
]

var itemInterval = 3000
  , numberOfItems = 4
  , currentItem = 1;
  
function changeImage () {
    $('.coverImage').css('background', 'url(' + imageArray[currentItem] + ')');
    if (currentItem === numberOfItems - 1) {
        currentItem = 0;
    } else {
        currentItem++
    }
}

setInterval(function () {
	changeImage();
}, itemInterval)
