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
        });
    }

    handleFilterClick(e) {
        e.preventDefault();

        e.currentTarget.classList.toggle('selected');
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

        console.log(document.querySelectorAll(".portfolio__overview-project" + filtersString));

        document.querySelectorAll(".portfolio__overview-project" + filtersString).forEach((element) => {
            element.classList.remove('hidden');
        });
    }
}