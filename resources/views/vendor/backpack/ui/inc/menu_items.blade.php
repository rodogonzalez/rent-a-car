{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<x-backpack::menu-item title="Customer requests" icon="la la-question" :link="backpack_url('customer-request')" />



<x-backpack::menu-dropdown title=" Parametros" icon="las la-clinic-medical" :withColumns="true">




    <x-theme-tabler::menu-dropdown-column>
        <x-backpack::menu-dropdown-item title="Countries" icon="la la-question" :link="backpack_url('country')" />
        <x-backpack::menu-dropdown-item title="Fuel types" icon="la la-question" :link="backpack_url('fuel-type')" />
        <x-backpack::menu-dropdown-item title="Offices" icon="la la-question" :link="backpack_url('office')" />
        <x-backpack::menu-dropdown-item title="Users" icon="la la-question" :link="backpack_url('user')" />
        <x-backpack::menu-dropdown-item title="Vehicles" icon="la la-question" :link="backpack_url('vehicle')" />
        <x-backpack::menu-dropdown-item title="Vehicle types" icon="la la-question" :link="backpack_url('vehicle-type')" />
    </x-theme-tabler::menu-dropdown-column>
    <x-theme-tabler::menu-dropdown-column>
        <x-backpack::menu-dropdown-item title="Vehicles rates" icon="la la-question" :link="backpack_url('vehicles-rate')" />
        <x-backpack::menu-dropdown-item title="Rates periods" icon="la la-question" :link="backpack_url('rates-period')" />
    </x-theme-tabler::menu-dropdown-column>
</x-backpack::menu-dropdown>