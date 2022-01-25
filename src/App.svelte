<script>
	import Router from "svelte-spa-router";
    import About from "./routes/About.svelte";
	import Contact from "./routes/Contact.svelte";
	import Skills from "./routes/Skills.svelte";
	import Work from "./routes/Work.svelte";

	let profileImg = 'img/gillmour.jpg';
	let devImg = 'img/dev.png';
	let designImg = 'img/design.png';
	let marketingImg = 'img/markering.png';
	let github = 'img/github.png';
	let twitter = 'img/twitter.png';

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
<!-- What I Do -->
<section>
	<div class="py-8 bg-gray-300">
		<div class="do__wrapper w-full lg:w-5/6 m-auto">
			<div>
				<h2 class="text-4xl font-bold text-center mb-6">How I can help your next project</h2>
			</div>
			<div class="three_items flex flex-col lg:flex-row lg:gap-8 align-center justify-items-center">
				<div class="web_dev grid justify-items-center lg:w-1/3">
					<div>
						<img src="{devImg}" alt="Web Development">
					</div>
					<div class="text-center">
						<div>
							<h4 class="my-4 text-2xl font-bold">Web Development</h4>
							<p class="text-xl font-light">I love to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
						</div>
						<div>
							<h5 class="my-4 text-xl font-medium">Languages</h5>
							<p class="text-xl font-light">HTML5, CSS3, Sass, Tailwindcss,
								Javascript, Svelte
								<span class="font-medium italic">Wordpress Core</span>, Node/ExpressJs</p>
						</div>
					</div>
				</div>
				<div class="web_design grid justify-items-center lg:w-1/3 mt-4">
					<div>
						<img src="{designImg}" alt="Web Design">
					</div>
					<div class="text-center">
						<div>
							<h4 class="my-4 text-2xl font-bold">Web Design</h4>
							<p class="text-xl font-light">My approach to website design is to create a website that strengthens your company’s brand while ensuring ease of use and simplicity for your audience.</p>
						</div>
						<div>
							<h5 class="my-4 text-xl font-medium">Tools</h5>
							<p class="text-xl font-light">Figma</p>
						</div>
					</div>
				</div>
				<div class="marketing grid justify-items-center lg:w-1/3 mt-4">
					<div>
						<img src="{marketingImg}" alt="Digital Marketing">
					</div>
					<div class="text-center">
						<div>
							<h4 class="my-4 text-2xl font-bold">Digital Marketing</h4>
							<p class="text-xl font-light">Helping clients increase mileage with digital footprint, on several social and digital platforms. This enhances business growth.</p>
						</div>
						<div>
							<h5 class="my-4 text-xl font-medium">Platforms</h5>
							<p class="text-xl font-light">Google AdManager
								Google Analytics
								Facebook Ads</p>
						</div>
					</div>
				</div>
			</div>
			<div class="grid justify-items-center">
				<a href="https://bit.ly/3HhM3Hn" class="my-8 px-4 py-6 bg-yellow-300 uppercase rounded font-bold">Download My Resume</a>
			</div>
		</div>
	</div>
</section>
<!-- What I Do -->
<!-- Work -->
<section>
	<div class="pb-[6rem] pt-6 bg-black">
		<div class="work__wrapper w-full lg:w-5/6 m-auto text-white flex flex-col">
			<div>
				<h3 class="text-center text-4xl font-bold mb-10">My Recent Work</h3>
			</div>
			<div class="flex lg:items-center lg:justify-between flex-col lg:flex-row">
				<div class="p-6 bg-orange-500 text-center lg:text-left lg:w-[20rem] lg:rounded">
					<a href="https://bit.ly/2XNRMCH">
						<h4 class="text-5xl font-bold">POSB</h4>
					<span>Design</span>
					</a>
				</div>
				<div class="p-6 bg-blue-500 text-center lg:text-left lg:w-[25rem] lg:rounded">
					<a href="http://insidebusiness.co.zw"><h4 class="text-5xl font-bold">Inside Business</h4>
						<span>Website</span></a>
				</div>
				<div class="p-6 bg-green-500 text-center lg:text-left lg:w-[20rem] lg:rounded">
					<a href="https://adventecho.com">
						<h4 class="text-5xl font-bold">Advent Echo</h4>
					<span>Website</span>
					</a>
				</div>
				<div class="p-6 bg-gray-500 text-center lg:text-left lg:w-[20rem] lg:rounded">
					<a href="http://zlc.co.zw">
						<h4 class="text-5xl font-bold">ZLC</h4>
					<span>Website</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Work -->
<!-- Contact -->
<section>
	<div>
		<div class="contact__wrapper w-5/6 m-auto py-6 px-8">
			<div class="flex flex-col justify-between lg:flex-row gap-6">
				<div class="left__contact text-xl font-light lg:w-1/2">
					<div>
						<h3 class="text-3xl font-bold my-6">Let's get in touch</h3>
						<p>I enjoy discussing new projects and design challenges. Please share as much info, as possible so we can get the most out of our first catch-up.</p>
						<p>Living in Mainway Meadows, Harare</p>
					</div>
					<div class="my-4">
						<h4 class="font-bold">Call:</h4>
						<span>(+263) 775 534 575</span>
					</div>
					<div>
						<ul class="flex gap-4">
							<li><a href="https://github.com/gillmourtunhira"><img src="{github}" alt="Gillmour Github Repo" class="w-[48px]"></a></li>
							<li><a href="https://twitter.com/gillmourtunhira"><img src="{twitter}" alt="Gillmour Twitter" class="w-[48px]"></a></li>
						</ul>
					</div>
				</div>
				<div class="right__contact lg:w-1/2">
					<div>
						<h3 class="text-3xl font-bold my-6">Estimate your Project?</h3>
						<div>
							<form action="#">
								<div class="flex flex-col gap-6">
									<div>
										<label for="name" class="text-lg">Name</label>
										<input type="text" name="name" class="w-full bg-transparent border-b border-black outline-none">
									</div>
									<div>
										<label for="email" class="text-lg">Email</label>
										<input type="email" name="email" class="w-full bg-transparent border-b border-black outline-none">
									</div>
									<div class="flex flex-col">
										<label for="message" class="text-lg">How can I help you</label>
										<textarea name="message" id="" cols="30" rows="10" class="bg-transparent border-b border-black outline-none"></textarea>
									</div>
									<button type="submit" class="mt-6 py-4 px-2 w-1/5 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-black hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact -->
<!-- Footer -->
<section>
	<div class="pb-[4rem] pt-[4rem] bg-black">
		<div class="w-5/6 m-auto">
			<div class="flex flex-col lg:flex-row justify-between align-center text-white
			py-4">
				<div class="self-center">
					<p class="text-xl">&copy; 2022 <span class="text-yellow-300">Gillmour Tunhira.</span> All Rights Reserved.</p>
				</div>
				<div class="self-center">
					<p class="text-xl">Designed and Developed by <span class="text-yellow-300">Gillmour.</span></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Footer -->

<main>
		<Router {routes} />
</main>

<style lang="postcss" global>
	@tailwind base;
	@tailwind components;
	@tailwind utilities;

	main {
		text-align: center;
		/* padding: 1em 1em 0 1em; */
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