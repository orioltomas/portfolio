import $ from 'jquery';
require('bootstrap');
import Portfolio from "./portfolio";

$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
        $('#content').toggleClass('active');
    });

    new Portfolio();
});