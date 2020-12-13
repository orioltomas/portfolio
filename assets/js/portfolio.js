import $ from 'jquery';
require('bootstrap');

export default class Portfolio {

    constructor() {
        this.init();
    }

    init() {
        this.registerEvents();
    }

    registerEvents() {
        document.querySelectorAll('.portfolio__filter').forEach((element) => {
            element.addEventListener('click', (e) => this.handleFilterClick(e));
            element.addEventListener('mouseenter', (e) => this.handleFilterHoverEnter(e));
            element.addEventListener('mouseleave', (e) => this.handleFilterHoverLeave(e));
        });
    }

    handleFilterHoverEnter(e) {
        e.preventDefault();
        e.currentTarget.classList.add('hover');
    }

    handleFilterHoverLeave(e) {
        e.preventDefault();
        e.currentTarget.classList.remove('hover');
    }

    handleFilterClick(e) {
        e.preventDefault();
        e.currentTarget.classList.toggle('selected');
        e.currentTarget.classList.remove('hover');
        this.updateFilteredProjects();
    }

    updateFilteredProjects() {
        let filters = [];
        document.querySelectorAll('.portfolio__filter.selected').forEach((element) => {
            filters.push([element.getAttribute('data-filter')]);
        });

        const filtersString = filters.length > 0 ?  '.' + filters.join('.') : '';
        document.querySelectorAll(".portfolio__overview-project").forEach((element) => {
            element.classList.add('hidden');
        });
        document.querySelectorAll(".portfolio__overview-project" + filtersString).forEach((element) => {
            element.classList.remove('hidden');
        });
    }
}