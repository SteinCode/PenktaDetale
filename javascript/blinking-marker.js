(function () {
	const LENGTH_PX = 16;
	const THICKNESS_PX = 2;
	const COLOR = '#9B59B6';
	const BLINK_INTERVAL = 500;

	document.addEventListener('DOMContentLoaded', () => {
		document.querySelectorAll('.type_marker').forEach((marker) => {
			marker.style.display = 'inline-block';
			marker.style.verticalAlign = 'text-bottom';
			marker.style.width = `${LENGTH_PX}px`;
			marker.style.height = `${THICKNESS_PX}px`;
			marker.style.backgroundColor = COLOR;
			marker.style.marginLeft = '0.2em'; // small gap
			marker.style.transition = 'opacity 0.1s';
			let on = true;
			setInterval(() => {
				marker.style.opacity = on ? '0' : '1';
				on = !on;
			}, BLINK_INTERVAL);
		});
	});
})();
