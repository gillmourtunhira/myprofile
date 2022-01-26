<script>
	// Routes
	// import Router from "svelte-spa-router";
    // import About from "./routes/About.svelte";
	// import Contact from "./routes/Contact.svelte";
	// import Skills from "./routes/Skills.svelte";
	// import Work from "./routes/Work.svelte";

	// let routes = {
	// 	"/about": About,
	// 	"/skills": Skills,
	// 	"/work": Work,
	// 	"/contact": Contact,
	// }

	// Components
	import Header from './components/Header.svelte';
	import Hero from './components/Hero.svelte';
	import About from './components/About.svelte';
	import Skills from './components/Skills.svelte';
	import Work from './components/Work.svelte';
	import Contact from './components/Contact.svelte';
	import Footer from './components/Footer.svelte';

</script>
<!-- Header -->
<Header/>
<!-- Header -->
<!-- Hero -->
<Hero/>
<!-- Hero -->
<!-- About -->
<About/>
<!-- About -->
<!-- What I Do -->
<Skills/>
<!-- What I Do -->
<!-- Work -->
<Work/>
<!-- Work -->
<!-- Contact -->
<Contact/>
<!-- Contact -->
<!-- Footer -->
<Footer/>
<!-- Footer -->

<style lang="postcss" global>
	@tailwind base;
	@tailwind components;
	@tailwind utilities;

	@media (max-width: 768px){
		.main__nav{
			display: none;
		}
	}
</style>