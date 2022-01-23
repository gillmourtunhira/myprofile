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
	<div class="grid grid-cols place-content-center lg:grid-cols-2 lg:place-content-between pt-8 lg:w-5/6 m-auto gap-y-4 my-8">
		<div class="hero__title items-center order-last lg:order-first">
			<div>
				<h2 class="text-center lg:text-left text-6xl lg:text-8xl md:self-center uppercase">Hi, I'm a <span class="font-extrabold italic">Web Developer</span></h2>
			</div>
			<div>
				<h4 class="text-2xl text-center lg:text-left my-6">based in Harare, Zimbabwe</h4>
			</div>
		</div>
		<div class="hero__img rounded-full">
			<img class="m-auto rounded-full p-4 bg-black" src="{profileImg}" alt="Gillmour Tunhira">
		</div>
	</div>
</section>
<!-- Hero -->
<!-- About -->
<section>
	<div class="about__wrapper py-8 bg-white">
		<div class="w-5/6 m-auto">
			<h3 class="text-center text-4xl font-bold mb-6">Know Me More</h3>
			<div class="about__content flex flex-col justify-between lg:flex-row">
				<div class="text-xl lg:w-4/6">
					<h4 class="my-2">Hi, I'm <span class="font-bold">Gillmour Tunhira</span></h4>
					<p class="font-light">I'm a developer with a passion for web development & designing. I enjoy developing simple, clean and slick custom websites and web applications that provide real value to the end user. Several clients have procured exceptional results while working with me. Delivering work within time and budget which meets client’s requirements is my moto.</p>
					<div class="mt-4">
						<h4 class="text-gray-400 font-bold">Email:</h4>
						<span class="font-bold">me@gillmourtunhira.com</span>
					</div>
				</div>
				<div class="grid justify-items-center my-8">
					<h5 class="font-bold bg-amber-300 p-4 rounded-full w-[6rem] h-[6rem] relative"><span class="absolute -bottom-[0.4em] right-[2px] text-gray-500 text-[10em]">6</span></h5>
					<span class="uppercase text-2xl mt-6">Years of <b>Experience</b></span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About -->

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