{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Countries" icon="la la-question" :link="backpack_url('country')" />
<x-backpack::menu-item title="Fuel types" icon="la la-question" :link="backpack_url('fuel-type')" />
<x-backpack::menu-item title="Offices" icon="la la-question" :link="backpack_url('office')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Vehicles" icon="la la-question" :link="backpack_url('vehicle')" />
<x-backpack::menu-item title="Vehicle types" icon="la la-question" :link="backpack_url('vehicle-type')" />
<x-backpack::menu-item title="Vehicles rates" icon="la la-question" :link="backpack_url('vehicles-rate')" />
<x-backpack::menu-item title="Rates periods" icon="la la-question" :link="backpack_url('rates-period')" />
<x-backpack::menu-item title="Customer requests" icon="la la-question" :link="backpack_url('customer-request')" />