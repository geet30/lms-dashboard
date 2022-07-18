
<div class="card-body pt-0 table-responsive " id="">
    <table class="table border table-hover align-middle table-row-dashed fs-7 gy-2 gs-4 all-table-css-class" id="colors_table">
        <thead>
            <tr class="fw-bolder fs-7 text-gray-800 px-7">
                <th class="text-capitalize text-nowrap">Sr.No</th>
                <th class="text-capitalize text-nowrap">Color name</th>
				<th class="text-capitalize text-nowrap">Hexacode</th>
				<th class="text-capitalize text-nowrap">Status</th>
                <th class="text-capitalize text-nowrap">Actions</th>
            </tr>
        </thead>
		@include('pages.mobilesettings.handsets.colors.components.filtertable')

    </table>
</div>

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="/common/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
<script src="/common/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="/custom/js/breadcrumbs.js"></script>
<script>
 	$('#back_button').attr("href", '{{url("/")}}');

    const breadArray = [{
			title: 'Dashboard',
			link: '/',
			active: false
		},
		{
			title: 'Handsets',
			link: "#",
			active: false
		},
	];

	const breadInstance = new BreadCrumbs(breadArray);
	breadInstance.init();

</script>
@endsection
