const ngeslide = () => {
	const burger = document.querySelector('.burger');
	const bar = document.querySelector('.bar-links');

	burger.addEventListener('click', () => {

		// Toggle Bar
		bar.classList.toggle('bar-click');

		// Animate Links
		barLinks.forEach(link, index) => {
			if (link.style.animation) {
				link.style.animation = '';
			} else {
				link.style.animation = 'barLinksFade 0.5s ease forwards $(index / 7 + 0.3)s';
			}
		}
	});
}