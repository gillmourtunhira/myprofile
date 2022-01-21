<script>
	import Router from "svelte-spa-router";
    import About from "./routes/About.svelte";
	import Contact from "./routes/Contact.svelte";
	import Skills from "./routes/Skills.svelte";
	import Work from "./routes/Work.svelte";

	let profileImg = 'img/gillmour.jpg';

	let routes = {
		"/about": About,
		"/skills": Skills,
		"/work": Work,
		"/contact": Contact,
	}

</script>
<!-- Header -->
<section>
	<div class="flex justify-between pt-8 w-5/6 m-auto">
		<div class="logo text-4xl uppercase font-bold">Gillmour.</div>
		<div class="mobile__nav lg:hidden">
			<div class="space-y-2">
				<span class="block w-5 h-0.5 bg-black"></span>
				<span class="block w-8 h-0.5 bg-black"></span>
				<span class="block w-8 h-0.5 bg-black"></span>
			  </div>
		</div>
		<nav class="p-4 text-black text-xl flex main__nav">
			<a href="#/about">About Me <span>//</span></a>
			<a href="#/skills">What I Do <span>//</span></a>
			<a href="#/work">My Work <span>//</span></a>
			<a href="#/contact">Contact</a>
		</nav>
	</div>
</section>
<!-- Header -->
<!-- Hero -->
<section>
	<div class="grid grid-cols place-content-center lg:grid-cols-2 lg:place-content-between pt-8 w-full gap-y-4">
		<div class="hero__title items-center order-last lg:order-first md:flex">
			<h2 class="text-center text-6xl md:self-center">Hi, I'm a <span class="font-extrabold italic">Web Developer</span></h2>
		</div>
		<div class="hero__img rounded-full">
			<img class="m-auto rounded-full p-4 bg-black" src="{profileImg}" alt="Gillmour Tunhira">
		</div>
	</div>
</section>
<!-- Hero -->

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
	@media (max-width: 768px){
		.main__nav{
			display: none;
		}
	}
</style>