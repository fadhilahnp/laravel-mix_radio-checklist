import Vue from "vue";
import VueRouter from "vue-router";

import Ship from "@/js/pages/Ship";
import ShipDetail from "@/js/pages/ShipDetail";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Ship
        },
        {
            path: "/dashboard",
            name: "dashboard",
            component: Ship
        },
        {
            path: "/ship-detail",
            name: "ship-detail",
            component: ShipDetail
        },
        {
            path: "/ship/:id",
            name: "ship.edit",
            component: ShipDetail
        }
    ]
});

export default router;
