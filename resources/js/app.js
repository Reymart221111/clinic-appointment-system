import $ from 'jquery';
window.$ = window.jQuery = $;

import 'popper.js';
import 'bootstrap';
import 'admin-lte';

import { initPasswordToggle } from './modules/passwordToggle.js';

document.addEventListener('DOMContentLoaded', function() {
    initPasswordToggle();
});