import gsap from 'gsap';

document.addEventListener('DOMContentLoaded', function () {
	const cursor = document.createElement('div');
	cursor.classList.add('custom-cursor');
	document.body.appendChild(cursor);

	const productImages = document.querySelectorAll('.row-image');

	gsap.set(cursor, { xPercent: -50, yPercent: -50, autoAlpha: 0, scale: 0 });
	let xTo = gsap.quickTo(cursor, 'x', { duration: 0.15, ease: 'power3' });
	let yTo = gsap.quickTo(cursor, 'y', { duration: 0.15, ease: 'power3' });

	function onPointerMove(e) {
		xTo(e.clientX);
		yTo(e.clientY);
	}

	function onSectionEnter() {
		gsap.to(cursor, {
			autoAlpha: 1,
			scale: 1,
			duration: 0.2,
			ease: 'power2.out',
		});
	}

	function onSectionLeave() {
		gsap.to(cursor, {
			autoAlpha: 0,
			scale: 0,
			duration: 0.2,
			ease: 'power2.in',
		});
	}

	function handleCursor() {
		if (window.innerWidth >= 768) {
			window.addEventListener('pointermove', onPointerMove);

			productImages.forEach((img) => {
				img.addEventListener('mouseenter', onSectionEnter);
				img.addEventListener('mouseleave', onSectionLeave);
			});
		} else {
			gsap.set(cursor, { autoAlpha: 0 });
			window.removeEventListener('pointermove', onPointerMove);

			productImages.forEach((img) => {
				img.removeEventListener('mouseenter', onSectionEnter);
				img.removeEventListener('mouseleave', onSectionLeave);
			});
		}
	}

	handleCursor(); // Initial run
	window.addEventListener('resize', handleCursor); // Update on resize
});
