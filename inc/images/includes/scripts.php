<?php



if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

/**
 * Scripts
 *
 * @since 1.0
 */

/**
 * CSS for admin
 *
 * @since 1.0
 */
function silas_image_gallery_admin_css() { ?>

	<style>
        
        .wp-core-ui .attachment{
            width:auto;
        }
		.attachment.details .check div {
			background-position: -60px 0;
		}

		.attachment.details .check:hover div {
			background-position: -60px 0;
		}

		.gallery_images .details.attachment {
			box-shadow: none;
		}

		.eig-metabox-sortable-placeholder {
			background: #DFDFDF;
		}

		.gallery_images .attachment.details > div {
			width: 150px;
			height: 150px;
			box-shadow: none;
		}

		.gallery_images .attachment-preview .thumbnail {
			 cursor: move;
		}

		.attachment.details div:hover .check {
			display:block;
		}

        .gallery_images:after,
        #gallery_images_container:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }

        .gallery_images > li {
            float: left;
            cursor: move;
            margin: 0 20px 20px 0;
        }

        .gallery_images li.image img {
            width: 150px;
            height: auto;
        }

    </style>

<?php }
add_action( 'admin_head', 'silas_image_gallery_admin_css' );