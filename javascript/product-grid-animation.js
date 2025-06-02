import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

// Select rows
const leftRows = gsap.utils.toArray('.product-row-left');
const rightRows = gsap.utils.toArray('.product-row-right');

// .product-row-left → animate from the right
leftRows.forEach((row) => {
	const imgLine = row.querySelectorAll('.row-image, .row-line');
	const text = row.querySelector('.row-text');

	const tl = gsap.timeline({
		scrollTrigger: {
			trigger: row,
			start: 'top 100%',
			end: 'bottom 80%',
			scrub: true,
			// markers: true,
		},
	});

	// 1) Image + line enter from xPercent: +100 → 0
	tl.from(imgLine, {
		xPercent: 100,
		opacity: 0,
		duration: 0.8,
		ease: 'power1.out',
	});

	// 2) Shortly after, text enters from x: +50 → 0
	tl.from(
		text,
		{
			x: 50,
			opacity: 0,
			duration: 0.6,
			ease: 'power1.out',
		},
		'<0.1'
	);
});

// .product-row-right → animate from the left
rightRows.forEach((row) => {
	const imgLine = row.querySelectorAll('.row-image, .row-line');
	const text = row.querySelector('.row-text');

	const tl = gsap.timeline({
		scrollTrigger: {
			trigger: row,
			start: 'top 100%',
			end: 'bottom 90%',
			scrub: true,
			// markers: true,
		},
	});

	// 1) Image + line enter from xPercent: -100 → 0
	tl.from(imgLine, {
		xPercent: -100,
		opacity: 0,
		duration: 0.8,
		ease: 'power1.out',
	});

	// 2) Then text from x: -50 → 0
	tl.from(
		text,
		{
			x: -50,
			opacity: 0,
			duration: 0.6,
			ease: 'power1.out',
		},
		'<0.1'
	);
});
