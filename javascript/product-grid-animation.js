import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
	// Whenever ScrollTrigger positions or sizes change, recalc
	ScrollTrigger.refresh();

	gsap.utils
		.toArray('.product-row-left, .product-row-right')
		.forEach((row) => {
			// 1) Figure out which direction to animate from
			const fromX = row.classList.contains('product-row-left')
				? 200
				: -200;

			// 2) Grab sub-elements, but bail if any are missing
			const lineEl = row.querySelector('.row-line');
			const imgEl = row.querySelector('.row-image');
			const txtEl = row.querySelector('.row-text');

			// If any of the required elements are null, skip this row entirely.
			if (!lineEl || !imgEl || !txtEl) {
				// console.warn(`Skipping row because required sub-element is missing`, row);
				return;
			}

			// 3) Build a single timeline for “line → image → text.”
			const tl = gsap.timeline({
				scrollTrigger: {
					trigger: row,
					// On mobile, start earlier so it definitely fires; on desktop, stick to 85%.
					start: window.innerWidth <= 767 ? 'top bottom' : 'top 85%',
					// Reverse when you scroll back up past the start point
					toggleActions: 'play none none reverse',
					// Ensure Scrub is off (we want just play/reverse)
					scrub: false,
					invalidateOnRefresh: true,
				},
			});

			tl.from(lineEl, {
				x: fromX,
				opacity: 0,
				duration: 0.25,
				ease: 'power2.out',
			})
				.from(
					imgEl,
					{
						x: fromX,
						opacity: 0,
						duration: 0.25,
						ease: 'power2.out',
					},
					'-=0.1'
				)
				.from(
					txtEl,
					{
						x: fromX,
						opacity: 0,
						duration: 0.25,
						ease: 'power2.out',
					},
					'-=0.1'
				);
		});
});
