<script>
	let github = 'img/github.png';
	let twitter = 'img/twitter.png';
</script>
<section>
	<div id="contact">
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
							<form action="mail.php" method="POST">
								<div class="flex flex-col gap-6">
									<div>
										<label for="name" class="text-lg">Name</label>
										<input type="text" name="name" required class="w-full bg-transparent border-b border-black outline-none">
									</div>
									<div>
										<label for="email" class="text-lg">Email</label>
										<input type="email" name="email" required class="w-full bg-transparent border-b border-black outline-none">
									</div>
									<div class="flex flex-col">
										<label for="message" class="text-lg">How can I help you</label>
										<textarea name="message" id="" cols="30" rows="10" class="bg-transparent border-b border-black outline-none"></textarea>
									</div>
									<button type="submit" class="mt-6 py-4 px-2 lg:w-2/5 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-black hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>