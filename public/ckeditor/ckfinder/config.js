/*
 Copyright (c) 2007-2016, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or http://cksource.com/ckfinder/license
 */

var config = {};

// Set your configuration options below.

// Examples:
// config.language = 'pl';
// config.skin = 'jquery-mobile';

CKFinder.define( config );
 $config['authentication'] = function() {
      return true;
 };
 session_start();
 
 $config['authentication'] = function() {
     return isset($_SESSION['IsAuthorized']) && $_SESSION['IsAuthorized'];
 };


 config.filebrowserBrowseUrl = 'http://[localhost:8000]/ckfinder/ckfinder.html';
 
config.filebrowserImageBrowseUrl = 'http://[localhost:8000]/ckfinder/ckfinder.html?type=Images';
 
config.filebrowserFlashBrowseUrl = 'http://[localhost:8000]/ckfinder/ckfinder.html?type=Flash';
 
config.filebrowserUploadUrl = 'http://[localhost:8000]/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
 
config.filebrowserImageUploadUrl = 'http://[localhost:8000]/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
 
config.filebrowserFlashUploadUrl = 'http://[localhost:8000]/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
