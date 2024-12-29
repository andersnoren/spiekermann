/*
 * Is an element within the viewport?
 */
var isInViewport = function ( elem, position = 'top' ) {

	var winHeight     = window.innerHeight,
		docViewTop    = window.scrollY,
		docViewBottom = docViewTop + winHeight,
		elemTop       = elem.getBoundingClientRect().top + docViewTop,
		elemMiddle    = elemTop + Math.min( elem.offsetHeight / 2, winHeight / 2 );

	// The value we check against the scroll position.
	var elemCompare = elemTop;

	if ( position == 'middle' ) {
		elemCompare = elemMiddle;
	}

	// Subtract transformY.
	var elemTransform = window.getComputedStyle( elem ).getPropertyValue( 'transform' );
	if ( elemTransform ) {
		var elemTransformMatrix = new WebKitCSSMatrix( elemTransform );
		if ( elemTransformMatrix ) {
			elemTranslateY = elemTransformMatrix.m42;
			if ( elemTranslateY ) {
				elemCompare = elemCompare - elemTranslateY;
			}
		}
	}

	// Compare the values.
	if ( elemCompare <= docViewBottom ) {
		return true;
	}
};

/*
 * Initiate Fitty on load.
 */
document.addEventListener(
	"DOMContentLoaded",
	(event) => {
		fitty( '.is-style-spiekermann-fitty' );
		setTimeout(
			function () {
				fitty( '.is-style-spiekermann-fitty' );
			},
			100
		);
	}
);

/*
 * Animate in the asymmetrical grid items on scroll.
 */
var findMe = document.querySelectorAll( '.is-style-spiekermann-post-template-asymmetrical-grid-animate > li' );

if ( findMe.length ) {
	findMe.forEach(
		element => {
			element.classList.add( 'will-animate' );
		}
	);

	['scroll', 'load', 'resize', 'orientationchange'].forEach(
		function ( e ) {
			window.addEventListener(
				e,
				function () {
					findMe.forEach(
						element => {
							if ( isInViewport( element, 'middle' ) ) {
								element.classList.add( 'in-viewport' );
							}
						}
					);
				},
			false
			);
		}
	);
}