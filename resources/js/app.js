import $ from 'jquery';
window.$ = window.jQuery = $;

import 'popper.js';
import 'bootstrap';
import 'admin-lte';

import { initPasswordToggle } from './modules/passwordToggle.js';
import { initImagePreview } from './modules/imageProfilePreview.js';

document.addEventListener('DOMContentLoaded', function() {
    initPasswordToggle();
    initImagePreview();
});