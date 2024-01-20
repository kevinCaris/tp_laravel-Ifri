<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Acceuil') }}
        </h2>
    </x-slot>

    <div class="w-full">
        <div>
            <div class="absolute text-5xl text-white text-center w-full font-bold top-2/3">
                Louer la voiture de vos rêves
            </div>
            <img class="h-screen object-cover w-full"
                src="https://images.pexels.com/photos/11396006/pexels-photo-11396006.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="Mercedes class G : Mauvaise connextion intenet">
        </div>

        <section class="bg-white mt-12 dark:bg-gray-900">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Dans la loaction depuis 20 ans</h2>
                    <p class="mb-4">Nous vous offrons les meilleurs voitures sur le marché.</p>
                    <p>Que ce soit la dernière voiture la plus en vogue ou la moins cher, vous pourrez la louer
                        rapidement ici. <a href="{{ route('cars.index') }}">
                            <x-button class="my-10">Voir les voitures disponibles</x-button>
                        </a></p>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img class="w-full rounded-lg"
                        src="https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&w=400"
                        alt="office content 1">
                    <img class="mt-4 w-full lg:mt-10 rounded-lg"
                        src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="office content 2">
                </div>
            </div>
        </section>
    </div>
</x-app-layout>