<!--begin::Aside-->
<div
	id="kt_aside"
	class="aside"
	data-kt-drawer="true"
	data-kt-drawer-name="aside"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'200px', '300px': '250px'}"
	data-kt-drawer-direction="start"
	data-kt-drawer-toggle="#kt_aside_mobile_toggle"
	>

    <!--begin::Aside Toolbarl-->
    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
        {{ theme()->getView('layout/aside/_toolbar') }}
        <!--end::Aside user-->
    </div>
    <!--end::Aside Toolbarl-->

    <!--begin::Aside menu-->
	<div class="aside-menu flex-column-fluid">
		{{ theme()->getView('layout/aside/_menu') }}
    </div>
    <!--end::Aside menu-->

    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
        <a href="#" data-action="{{ theme()->getPageUrl('logout') }}" data-method="post" data-csrf="{{ csrf_token() }}" data-reload="true" class="btn btn-custom btn-primary w-100 button-ajax menu-link px-5 btn-label">
                {{ __('Sign Out') }} {!! theme()->getSvgIcon("icons/duotune/arrows/arr076.svg", "svg-icon-1 minimize-active") !!}
            {!! theme()->getSvgIcon("icons/duotune/general/gen005.svg", "btn-icon svg-icon-2") !!}
        </a>
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->
