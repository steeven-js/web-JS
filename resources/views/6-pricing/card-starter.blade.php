
<div
class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
<h3 class="mb-4 text-2xl font-semibold">Starter</h3>
<p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Meilleure option pour un usage personnel et pour votre prochain projet.</p>
<div class="flex justify-center items-center space-x-3 my-8">
    <span class="dark:text-white">A partir de</span>
    <span class="mr-2 text-5xl font-extrabold">99€</span>
</div>
<!-- List -->
<ul role="list" class="mb-8 space-y-4 text-left">
    <li class="flex items-center space-x-3">
        <!-- Icon -->
        @include('components.check')
        <span>Design personnalisé</span>
    </li>
    <li class="flex items-center space-x-3">
        <!-- Icon -->
        @include('components.red_cross')
        <span>Pages dynamiques</span>
    </li>
    <li class="flex items-center space-x-3">
        <!-- Icon -->
        @include('components.red_cross')
        <span>E-commerce</span>
    </li>
    <li class="flex items-center space-x-3">
        <!-- Icon -->
        @include('components.check')
        <span>Hébergement</span>
    </li>
    <li class="flex justify-between space-x-3">
        <div class="flex justify-between space-x-3">
            @include('components.check')
            <span>Nombre de pages statiques</span>
        </div>
        <span>5 pages</span>
    </li>
    <li class="flex justify-between space-x-3">
        <span>Mises à jour</span>
        <span>2/mois (inclus)</span>
    </li>
</ul>
<a href="#"
    class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get
    started</a>
</div>