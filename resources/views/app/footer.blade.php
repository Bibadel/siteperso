<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<footer class="bg-gray-200 border-t-2 py-16 flex flex-col">
	<div
		class=" flex flex-grow-0 flex-col md:flex-row  text-center  mb-16 space-y-8   md:space-y-0  sm:space-x-6 justify-center md:justify-around items-center">
		<a class="md:self-start items-center" href="#">
			<div class="flex justify-center items-center mb-8 md:my-0  ">
				<div class="flex justify-center ">
                    <img class="h-40 w-auto pt-1 mx-3" src="https://cdn.discordapp.com/attachments/864926984659140659/958099405330845736/logo.png" alt="Logo">
				</div>
			</div>
		</a>
		<div>
			<h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Ressources</h3>
			<ul>
				<li class="mb-4"><a href="https://laravel.com/" target="_blank"
						class="text-gray-600 hover:underline">Laravel</a></li>
				<li><a href="https://tailwindcss.com/" target="_blank" rel="nofollow"
						class="text-gray-600 hover:underline">Tailwind CSS</a></li>
						<li><a href="{{ route('tags.index')}}" target="_blank" rel="nofollow"
							class="text-gray-600 hover:underline">Tags Articles / Tutoriels</a></li>
			</ul>
		</div>
		<div>
			<h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Nous suivre</h3>
			<ul>
				<li class="mb-4"><a href="https://github.com/Bibadel" target="_blank"
						class="text-gray-600 hover:underline">Github</a></li>
				<li><a href="https://discord.gg/nsi-tech" target="_blank"
						class="text-gray-600 hover:underline">Discord</a></li>
			</ul>
		</div>
		<div>
			<h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Légalité</h3>
			<ul>
				<li class="mb-4"><a href="#" target="_blank" class="text-gray-600 hover:underline">Réglement du site</a>
				</li>
				<li><a href="#" target="_blank" class="text-gray-600 hover:underline">Termes &amp; Conditions d'utilisations</a></li>
			</ul>
		</div>
		
	</div>
	<hr class=" border-gray-200 sm:mx-auto ">
	<div class=" flex flex-col items-center justify-around">
		<div class="flex  my-4 space-x-6 sm:justify-center ">
            <a href="https://github.com/Bibadel" target="_blank" class="text-gray-500 hover:text-gray-900">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd">
                    </path>
				</svg>
            </a>
        </div>
		<span class="text-sm text-gray-500 sm:text-center"><a href="https://github.com/Bibadel" target="_blank" class="hover:underline">© 2022  {{ config('app.name') }}. Tous droits reservé.</a></span>
	</div>
</footer>