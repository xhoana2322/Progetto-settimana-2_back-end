/**
 * WordPress dependencies
 */
import { Path, SVG } from '@wordpress/primitives';

const icon = () => {
	return (
		<SVG
			width="100"
			height="100"
			viewBox="0 0 100 100"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
			className="ob-logo"
		>
			<Path
				d="M95.0264 100H4.97356C2.22797 100 0 97.772 0 95.0264V4.97356C0 2.22797 2.22797 0 4.97356 0H95.0264C97.772 0 100 2.22797 100 4.97356V95.0264C100 97.772 97.772 100 95.0264 100Z"
				fill="#0366D6"
			/>
			<Path
				d="M82.6941 86.7448V30.8205V18.4653H70.3502H14.4146L26.7584 30.8205H70.3502V74.401L82.6941 86.7448Z"
				fill="white"
			/>
			<Path
				d="M42.2416 58.9291L42.2528 71.183L53.2352 82.1653L53.1902 47.9806L18.9941 47.9355L29.9765 58.9066L42.2416 58.9291Z"
				fill="white"
			/>
		</SVG>
	);
};

export const NeveIcon = () => {
	return (
		<SVG
			width="61"
			height="100"
			viewBox="0 0 75 60"
			fill="currentColor"
			xmlns="http://www.w3.org/2000/svg"
		>
			<Path fillRule="evenodd" clipRule="evenodd" d="M0.5 0.198486H61V59.9128H0.5V0.198486ZM25.0305 30.0698V44.2415H17.7858V15.4382C17.7858 15.2989 17.8281 15.2013 17.9129 15.1456C17.9976 15.0899 18.1529 15.1595 18.3789 15.3546L36.4696 30.0698V15.8145H43.7143V44.6596C43.7143 44.8268 43.672 44.9313 43.5872 44.9731C43.5025 45.0149 43.3472 44.9383 43.1212 44.7432L25.0305 30.0698ZM43.7143 48.9127H17.7858V51.2699H43.7143V48.9127Z" fill="#0366D5"/>
		</SVG>
	);
}

export default icon;
