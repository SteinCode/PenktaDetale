import { gsap } from 'gsap';

document.addEventListener('DOMContentLoaded', () => {
	const banners = document.querySelectorAll('.spinning-banner');
	const defaultSpeed = 70; // fallback px/sec if no data-speed is set
	const initialOffset = 10; // px into the loop

	banners.forEach((banner) => {
		const text = banner.querySelector('.spinning-text');
		if (!text) return;

		// Read the two speed attrs (or fallback if missing)
		const dataSpeed = parseFloat(banner.dataset.speed) || defaultSpeed;
		const dataSpeedMobile =
			parseFloat(banner.dataset.speedMobile) || dataSpeed;

		// direction is 'left' or 'right' (default 'right' if nothing set)
		const direction =
			banner.dataset.direction === 'left' ? 'left' : 'right';

		// pauseOnHover only applies if data-pause-on-hover="true"
		const pauseOnHover = banner.dataset.pauseOnHover === 'true';

		let marqueeTween = null;
		let resizeTimeout = null;
		let resumeTimeout = null;

		function createMarquee() {
			// Kill old tween if it exists
			if (marqueeTween) {
				marqueeTween.kill();
				marqueeTween = null;
			}
			if (resumeTimeout) {
				clearTimeout(resumeTimeout);
				resumeTimeout = null;
			}

			// Determine if we’re in “mobile” viewport this moment
			const isMobile = window.matchMedia('(max-width: 767px)').matches;

			// Pick speed depending on viewport
			const speed = isMobile ? dataSpeedMobile : dataSpeed;

			// Recalculate distances
			const bannerW = banner.clientWidth;
			const textW = text.clientWidth;
			const distance = bannerW + textW - initialOffset;
			const duration = distance / speed; // seconds = px ÷ (px/sec)

			// Position the text just off‐screen (depending on direction)
			if (direction === 'right') {
				gsap.set(text, { x: -textW + initialOffset });
				marqueeTween = gsap.to(text, {
					x: bannerW,
					duration: duration,
					ease: 'none',
					repeat: -1,
				});
			} else {
				// direction === 'left'
				gsap.set(text, { x: bannerW - initialOffset });
				marqueeTween = gsap.to(text, {
					x: -textW,
					duration: duration,
					ease: 'none',
					repeat: -1,
				});
			}

			// If pauseOnHover is true, add the desktop hover handlers
			if (pauseOnHover) {
				banner.addEventListener(
					'mouseenter',
					() => marqueeTween && marqueeTween.pause(),
					{ passive: true }
				);
				banner.addEventListener(
					'mouseleave',
					() => marqueeTween && marqueeTween.play(),
					{ passive: true }
				);
			}

			// On mobile, if pauseOnHover is also true, we treat a TOUCH/CLICK as “pause for 5 sec”
			if (pauseOnHover) {
				banner.addEventListener(
					'click',
					(e) => {
						// Only run mobile‐pause logic if viewport ≤ 767px
						if (!window.matchMedia('(max-width: 767px)').matches) {
							return;
						}
						e.stopPropagation();
						if (!marqueeTween) return;

						// Pause immediately
						marqueeTween.pause();

						// Reset any existing “resume” timer
						if (resumeTimeout) {
							clearTimeout(resumeTimeout);
						}

						// After 5 seconds of no additional click, resume
						resumeTimeout = setTimeout(() => {
							if (marqueeTween) {
								marqueeTween.play();
							}
							resumeTimeout = null;
						}, 5000);
					},
					{ passive: true }
				);
			}
		}

		// Initial creation
		createMarquee();

		// Re-create on resize (throttled)
		window.addEventListener('resize', () => {
			clearTimeout(resizeTimeout);
			resizeTimeout = setTimeout(() => {
				createMarquee();
			}, 150);
		});
	});
});
