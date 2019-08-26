import VueRouter from 'vue-router'

let routes = [
{
	path: '/test',
	component: require('./components/Example')
}


];

export default new VueRouter({
	routes
});