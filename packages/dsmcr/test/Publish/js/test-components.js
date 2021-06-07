console.log("Loading Test Components...");

window.Vue.component("test-component", () => import(/* webpackChunkName: "components/TestComponent" */ "./components/TestComponent"));