<?php
/*
 * Plugin Name: UFCLAS Sticky Function
 * Plugin URI: https://github.com/ufclas/ufclas-sticky-function/blob/main/README.md
 * Description: This plugin is for making navigation stick using sticky style.
 * Version: 1.0
 * Author: Fnu Ojasvi
 * Author URI: https://commsupport.clas.ufl.edu
 */

/*==================================

Set height of parent of sticky

====================================*/

function set_sticky_height() {
    ?>
    <script>
        if (document.querySelector('.sticky')) {
            function setStickyHeight() {
                const parentDiv = document.querySelector('.sibling-of-sticky');
                const parent = document.querySelector('.parent-of-sticky');
                const parentHeight = parentDiv.getBoundingClientRect().height;
                parent.style.height = (parentHeight) + 'px';
            }
            setStickyHeight();
        }
    </script>
    <?php
}

add_action('wp_footer', 'set_sticky_height');
