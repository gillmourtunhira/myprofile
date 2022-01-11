<script>
	import Router from "svelte-spa-router";
    import About from "./routes/About.svelte";
	import Contact from "./routes/Contact.svelte";
	import Home from "./routes/Home.svelte";
	export let name;

	let routes = {
		"/": Home,
		"/about": About,
		"/contact": Contact,
	}

</script>

<div class="bg-gray-900">
	<nav class="p-4 text-white">
		<a href="#/">Home</a>
		<a href="#/about">About</a>
		<a href="#/contact">Contact</a>
	</nav>
</div>

<main>
		<Router {routes} />
</main>

<style lang="postcss" global>
	@tailwind base;
	@tailwind components;
	@tailwind utilities;

	main {
		text-align: center;
		padding: 1em;
		max-width: 240px;
		margin: 0 auto;
	}

	@media (min-width: 640px) {
		main {
			max-width: none;
		}
	}
</style>