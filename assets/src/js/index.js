import "./spec"
import "./fixes"

import Router from './utils/Router';
import global from './global';
import components from './components';

const routes = new Router({
    global,
    components,
})

window.addEventListener("DOMContentLoaded", () => {
    routes.loadEvents();
    global.init();
    components.init();
})
