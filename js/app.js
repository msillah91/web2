const navSlide = () => {
	const burger = document.querySelector('.burger');
		const nav = document.querySelector('.nav_links');
		burger.AddEventListener('click', () => {
			nav.classList.toggle('nav_active');
		});
}
navSlide();