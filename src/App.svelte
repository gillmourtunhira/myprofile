<script>
	import Router from "svelte-spa-router";
    import About from "./routes/About.svelte";
	import Contact from "./routes/Contact.svelte";
	import Skills from "./routes/Skills.svelte";
	import Work from "./routes/Work.svelte";

	let routes = {
		"/about": About,
		"/skills": Skills,
		"/work": Work,
		"/contact": Contact,
	}

</script>

<div class="flex justify-between pt-8 w-5/6 m-auto">
	<div class="logo text-4xl uppercase font-bold">Gillmour.</div>
	<nav class="p-4 text-black text-xl">
		<a href="#/about">About Me <span>//</span></a>
		<a href="#/skills">What I Do <span>//</span></a>
		<a href="#/work">My Work <span>//</span></a>
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