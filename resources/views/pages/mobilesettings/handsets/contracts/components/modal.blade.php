<!-- weekdays title -->
<div class="modal fade" id="mobile_contract_modal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
	<div class="modal-dialog mw-650px">
		<div class="modal-content">
			<div class="modal-header bg-primary px-5 py-4">
				<h2 class="fw-bolder fs-12 text-white contract_heading">
					Add Contract
				</h2>
				<div data-bs-dismiss="modal"
                    class="btn btn-icon btn-sm btn-active-icon-primary badge-light-primary rounded-pill">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                </div>

	  		</div>
	 		 <div class="modal-body px-5">

			    <form id="mobile_contract_form" name="mobile_contract_form" accept-charset="UTF-8"
                    class="form mobile_contract_form pb-0">
					<input class="" id="hidden_edit_id" type="hidden" value="" />
	 				<!-- hidden field -->
					 @csrf
					 <div class="row mb-6 field-holder">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __ ('mobile_settings.contractPage.contractname.label')}}</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-check form-check-solid form-switch fv-row">
							<input class="form-control form-control-lg form-control-solid" type="text" id="" name="contract_name" placeholder="{{ __ ('mobile_settings.contractPage.contractname.placeHolder')}}" />
							<span class="error" style="color: red;display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-6 field-holder">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __ ('mobile_settings.contractPage.contractvalidity.label')}}</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-check form-check-solid form-switch fv-row">
                                <input class="form-control form-control-lg form-control-solid" type="number" min="1" name="validity" placeholder="{{ __ ('mobile_settings.contractPage.contractvalidity.placeHolder')}}" />
                                <span class="error" style="color: red;display: none;"></span>
                            </div>
                        </div>
                    </div>

					<div class="row mb-6 field-holder">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __ ('mobile_settings.contractPage.description.label')}}</label>
                        <div class="col-lg-8 fv-row">
                            <div class="form-check form-check-solid form-switch fv-row">
							<textarea name="description" id="" class="form-control form-control-lg form-control-solid"  placeholder="{{ __ ('mobile_settings.contractPage.description.placeHolder')}}" rows = "2" cols = "40"></textarea>
							<span class="error" style="color: red;display: none;"></span>
                            </div>
                        </div>
                    </div>
					<div class="clearfix"></div>
					<div class="card-footer d-flex justify-content-end py-6 px-9">
						<a class="btn btn-light btn-active-light-primary me-2" href="" data-bs-dismiss="modal">{{ __ ('mobile_settings.buttons.cancel')}}</a>
						<button type="button" id="add_contract_submit_btn" class="submit_button" class="btn btn-primary add_contract_submit_btn">{{ __ ('mobile_settings.buttons.save')}}
						</button>
					</div>
                </form>
			</div>
  		</div>
	</div>
</div>
