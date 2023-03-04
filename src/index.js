const ballOne = document.querySelector('a[href="#principal"]')
const ballTwo = document.querySelector('a[href="#form"]')
const slider = document.querySelector('.slider')

slider.onscroll = function() {

		if (slider.scrollLeft < (window.innerWidth / 2)) {
			ballOne.classList.add("active")
			ballTwo.classList.remove("active")
		} else {
			ballTwo.classList.add("active")
			ballOne.classList.remove("active")
		}
}
