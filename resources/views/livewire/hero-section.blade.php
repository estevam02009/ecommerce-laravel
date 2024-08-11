<section class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:items-center">
        <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Online Marketplace.
                <strong class="font-extrabold text-blue-700 sm:block"> Descubra produtos de qualidade online agora. </strong>
            </h1>

            <p class="mt-4 sm:text-xl/relaxed">
                Navegue pela nossa coleção de produtos de alta qualidade e aproveite compras on-line sem complicações.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                @if (auth()->check())
                    <a class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                        href="/offer"
                    >
                        Resgate sua oferta agora!
                    </a>
                @else
                <a class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
                    href="/auth/login"
                >
                    Comprar Agora
                </a>
                @endif


                <a class="block w-full rounded px-12 py-3 text-sm font-medium text-blue-600 shadow hover:text-blue-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                    href="#">
                    Saiba Mais
                </a>
            </div>
        </div>
    </div>
</section>
