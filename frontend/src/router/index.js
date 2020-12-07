import Vue from "vue";
import VueRouter from "vue-router";
import Dashboard from "../views/dashboard/Dashboard.vue";
import Login from "../views/login/Login.vue";
import PropriedadeConsulta from "../views/propriedade/PropriedadeConsulta";
import PropriedadeManutencao from "../views/propriedade/PropriedadeManutencao";
import store from '../store/index.js'

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Dashboard",
    component: Dashboard,
    meta: { requiresLogin: true }
  },
  {
    path: "/login",
    name: "Login",
    component: Login,
  },
  {
    path: "/propriedades",
    name: "PropriedadeConsulta",
    component: PropriedadeConsulta,
    meta: { requiresLogin: true }
  },
  {
    path: "/propriedades/new",
    name: "PropriedadeNova",
    component: PropriedadeManutencao,
    meta: { requiresLogin: true }
  },
];

const router = new VueRouter({
  mode: "history",
  routes,
});



router.beforeEach((to, from, next) => {
  
  if (to.name !== "Login" && store.getters.usuarioLogado===false){
    console.log('passou')
    next({ name: "Login" })
  }
  // if the user is not authenticated, `next` is called twice
  next();
});

export default router;
