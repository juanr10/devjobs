<a href={{ route('vacants.index') }} class="text-white text-sm font-semibold p-3 hover:bg-teal-700 {{ Request::is('vacants') ? 'bg-teal-500' : '' }}">Ver vacantes</a>
<a href={{ route('vacants.create') }} class="text-white text-sm font-semibold p-3 hover:bg-teal-700 {{ Request::is('vacants/create') ? 'bg-teal-500' : '' }}">Nueva vacante</a>
