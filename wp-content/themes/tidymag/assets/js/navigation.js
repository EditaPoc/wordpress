/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var tidymag_primary_container, tidymag_primary_button, tidymag_primary_menu, tidymag_primary_links, tidymag_primary_i, tidymag_primary_len;

    tidymag_primary_container = document.getElementById( 'tidymag-primary-navigation' );
    if ( ! tidymag_primary_container ) {
        return;
    }

    tidymag_primary_button = tidymag_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof tidymag_primary_button ) {
        return;
    }

    tidymag_primary_menu = tidymag_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof tidymag_primary_menu ) {
        tidymag_primary_button.style.display = 'none';
        return;
    }

    tidymag_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === tidymag_primary_menu.className.indexOf( 'nav-menu' ) ) {
        tidymag_primary_menu.className += ' nav-menu';
    }

    tidymag_primary_button.onclick = function() {
        if ( -1 !== tidymag_primary_container.className.indexOf( 'tidymag-toggled' ) ) {
            tidymag_primary_container.className = tidymag_primary_container.className.replace( ' tidymag-toggled', '' );
            tidymag_primary_button.setAttribute( 'aria-expanded', 'false' );
            tidymag_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            tidymag_primary_container.className += ' tidymag-toggled';
            tidymag_primary_button.setAttribute( 'aria-expanded', 'true' );
            tidymag_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    tidymag_primary_links    = tidymag_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( tidymag_primary_i = 0, tidymag_primary_len = tidymag_primary_links.length; tidymag_primary_i < tidymag_primary_len; tidymag_primary_i++ ) {
        tidymag_primary_links[tidymag_primary_i].addEventListener( 'focus', tidymag_primary_toggleFocus, true );
        tidymag_primary_links[tidymag_primary_i].addEventListener( 'blur', tidymag_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function tidymag_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'tidymag-focus' ) ) {
                    self.className = self.className.replace( ' tidymag-focus', '' );
                } else {
                    self.className += ' tidymag-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( tidymag_primary_container ) {
        var touchStartFn, tidymag_primary_i,
            parentLink = tidymag_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, tidymag_primary_i;

                if ( ! menuItem.classList.contains( 'tidymag-focus' ) ) {
                    e.preventDefault();
                    for ( tidymag_primary_i = 0; tidymag_primary_i < menuItem.parentNode.children.length; ++tidymag_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[tidymag_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[tidymag_primary_i].classList.remove( 'tidymag-focus' );
                    }
                    menuItem.classList.add( 'tidymag-focus' );
                } else {
                    menuItem.classList.remove( 'tidymag-focus' );
                }
            };

            for ( tidymag_primary_i = 0; tidymag_primary_i < parentLink.length; ++tidymag_primary_i ) {
                parentLink[tidymag_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( tidymag_primary_container ) );
} )();