<?php
/**
 * Created by PhpStorm.
 * User: stagiaire one
 * Date: 08/04/2019
 * Time: 16:09
 */

/* note that all _URL and _DIR configurations below must end with a forward slash (/) */
$config = [
    /* Url for image serving in final download */
    SERVE_URL => "https://YOUR_EMAIL_IMAGE_SERVER_URL/",
    /* Base Url for accessing Mosaco */
    BASE_URL => "http://mosaico.test",

    /* local file system base path to where image directories are located */
    BASE_DIR => "/var/www/mosaico",

    /* url to the uploads folder (relative to BASE_URL) */
    UPLOADS_URL => "uploads/",

    /* local file system path to the uploads folder (relative to BASE_DIR) */
    UPLOADS_DIR => "uploads/",

    /* url to the static images folder (relative to SERVE_URL) */
    STATIC_URL => "media/newsletter/static/",
    /* local file system path to the static images folder (relative to BASE_DIR) */
    STATIC_DIR => "uploads/static/",

    /* url to the thumbnail images folder (relative to BASE_URL */
    THUMBNAILS_URL => "uploads/thumbnail/",

    /* local file system path to the thumbnail images folder (relative to BASE_DIR) */
    THUMBNAILS_DIR => "uploads/thumbnail/",

    /* width and height of generated thumbnails */
    THUMBNAIL_WIDTH => 90,
    THUMBNAIL_HEIGHT => 90
];