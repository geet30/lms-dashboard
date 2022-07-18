@php 
    $temp=[];
    $unsetTypesArray=[];
    $setTypesArray=[];
   if(!empty($typesArray)){
    
    $temp=array_diff(array_keys($t_and_c_types),$typesArray);
    if(!empty($temp)){
        foreach($t_and_c_types as $key => $value){
      
      if(in_array($key,$temp)){
        
       $unsetTypesArray[$key]=$value;
      }
    }
    foreach($t_and_c_types as $key => $value){
       if(in_array($key,$typesArray)){
           $setTypesArray[$key]=$value;
       }
    }
    }else{
        $setTypesArray=$typesArray;
    }
 
   }else{
       $unsetTypesArray=$t_and_c_types;
   }
 
  
    
@endphp
<style>
    .not-set-class{
        background-color: red;
    }
</style>
<div class="d-flex flex-column gap-7 gap-lg-10">
  <form role="form" id="terms_and_condition_form" class="terms_and_condition_forms" name="terms_and_condition_form">
        @csrf
        <div class="card card-flush">
            <!--begin::Card body-->
            <div class="card-body px-8">
                <!--begin::Input group-->
                <div class="row mb-3">
                    <!--begin::Label-->
                    <label class="col-lg-3 col-form-label required fw-bold fs-6 ">Type</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="col-lg-9 post_submission_service_type">
                        <select data-control="select2" class="form-select form-select-solid" name="terms_and_condition_title" id="terms_and_condition_title">
                            <option value=""  class=""></option>
                            <optgroup class="setTypeOptionsClass" label="Content already set" >
                                @if(!empty($setTypesArray))
                                    @foreach($setTypesArray as $key=> $value)
                                        <option  value="{{$key}}" textName="{{$value}}"  {{!empty($terms_data) && $key == $terms_data['type'] ? 'selected' : ''}}>{{$value}}</option>
                                    @endforeach
                                @endif
                            </optgroup>
                            <optgroup class="unsetTypeOptionsClass" label="Content yet to be set">
                                @if(!empty($unsetTypesArray))
                                    @foreach($unsetTypesArray as $key=> $value)
                                        <option  value="{{$key}}" textName="{{$value}}"  {{!empty($terms_data) && $key == $terms_data['type'] ? 'selected' : ''}}>{{$value}}</option>
                                    @endforeach
                                @endif
                            </optgroup>
                            <!-- @foreach($t_and_c_types as $key => $value){
                                <option value="{{$key}}" textName="{{$value}}" class="{{ in_array($key,$typesArray) ? '':'not-set-class'}}" {{!empty($terms_data) && $key == $terms_data['type'] ? 'selected' : ''}}>{{$value}} </option>
                            @endforeach -->
                        </select>
                        <span class="error text-danger"></span>
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-3">
                    <!--begin::Label-->
                    <label class="col-lg-3 col-form-label required fw-bold fs-6 ">Title:</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="col-lg-9 title">
                    <input type="text" class="form-control form-control-lg form-control-solid" id="title" placeholder="E.g. Cimet's Terms and Conditions" name="title" value="{{$terms_data['title'] ?? ''}}">
                    <span class="error text-danger"></span>

                   </div>
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->

                <div class="row mb-3">
                    <!--begin::Label-->
                    <label class="col-lg-12 col-form-label required fw-bold fs-6">Description:</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="col-lg-12 col-xxl-12 term_description">
                        <textarea type="text" id="term_description" class="form-control form-control-lg form-control-solid ckeditor" tabindex="8" placeholder="" rows="5" name="term_description">{{$terms_data['description'] ?? ''}}</textarea>
                        <span class="error text-danger"></span>
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <div class="card-footer px-8 pt-0">
                <div class="pull-right">
                    <!--begin::Button-->
                    <a type="reset" href="{{ theme()->getPageUrl('provider/list') }}" class="btn btn-light me-3">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="terms_conditions_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
    </form>
      <!--end::Pricing-->
      <!--begin::General options-->
    <div class="card card-flush py-0 px-0">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-0 px-8">
         <div class="card-title">
            <h2>Terms and Conditions</h2>
        </div>
            <div class="pull-right card-toolbar" id="add_button_show_hide">
                <button type="button" class="btn btn-light-primary me-3 add_checkbox_button" id="add_checkbox_button" >+Add Checkbox</button>
            </div>
        </div>

        <div class="card-body px-8 pt-0 table-responsive">
            <table class="table border table-hover align-middle table-row-dashed fs-7 gy-2 gs-4 all-table-css-class" id="provider_ackn_checkbox_table">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-600 px-7">
                        <th class="text-capitalize text-nowrap">Sr. No.</th>
                        <th class="text-capitalize text-nowrap">Required</th>
                        <th class="text-capitalize text-nowrap">Content</th>
                        <!-- <th>Status</th> -->
                        <th class="text-left text-capitalize text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600" id="terms_and_cond_list">
                    @if(!empty($checkboxs) && count($checkboxs) > 0)
                        @foreach($checkboxs as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value["checkbox_required"] ? 'Yes' : 'No'}}</td>
                                <td title="{{ strip_tags($value['content']) }}">
                                    <span class="ellipses_table"> {{ strip_tags($value['content'])}}</span>
                                 </td>

                                <!-- <td></td> -->
                                <td>
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a class="menu-link px-3 termCondCheckBoxEdit" data-bs-toggle="modal" data-bs-target="#add_terms_condition_checkbox" id="terms_condition_edit" data-id="{{$value["id"]}}" data-eic="{{$value["type"]}}" checkbox-value="{{$value["checkbox_required"]}}"  data-required_checkbox="{{$value["checkbox_required"]}}" data-save_checkbox="{{$value["status"]}}"   data-order="{{$value['order']}}" data-validation_message="{{$value["validation_message"]}}" data-checkbox_content="{{$value["content"]}}" >Edit</a>
                                            <a type="button" id="terms_condition_delete" data-id="{{$value["id"]}}" class="menu-link px-3">Delete</a>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td valign="top" colspan="6" class="text-center">There are no records to show'</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <!--end::Pricing-->

<!--begin::Modal - Adjust Balance-->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"  id="add_terms_condition_checkbox" tabindex="-1" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header bg-primary px-5 py-4">
                <!--begin::Modal title-->
                <h2 class="fw-bolder fs-12 text-white">Terms and Conditions Checkbox</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div id="terms_condition_close" class="btn btn-icon btn-sm btn-active-icon-primary badge-light-primary rounded-pill" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y">
                <!--begin::Form-->
                <form id="terms_condition_checkbox_form" class="form">
                     @csrf
                    <!--begin::Input group-->
                    <div class="row mb-2">
                        <!--begin::Label-->
                        <label class="col-lg-6 required fw-bold fs-6 mb-5">Checkbox Required? </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="col-lg-6 terms_checkbox_required">
                            <label class="form-check form-check-inline form-check-solid me-5">
                                <!-- <input type="hidden" name="ackn_checkbox_required" value="1"> -->
                                <input class="form-check-input" name="terms_checkbox_required" type="radio" id="term_checkbox_required_yes" value="1" />
                                <span class="fw-bold ps-2 fs-6">
                                    {{ __('Yes') }}
                                </span>
                            </label>
                            <!--end::Option-->

                            <!--begin::Option-->
                            <label class="form-check form-check-inline form-check-solid">
                                <!-- <input type="hidden" name="ackn_checkbox_required" value="0"> -->
                                <input class="form-check-input" id="term_checkbox_required_no" name="terms_checkbox_required" type="radio" value="0" />
                                <span class="fw-bold ps-2 fs-6">
                                    {{ __('No') }}
                                </span>
                            </label>
                            <p><span class="error text-danger"></span></p>
                        </div>
                        <!--end::Input-->
                    </div>
                    <div class="row mb-2">
                        <label class="col-lg-3 col-form-label  fw-bold fs-6 ">Type</label>
                        <div class="col-lg-9 ">
                        <input type="text" name="termTypeId" termId="0" id="termTypeId" value="" disabled/>
                        </div>

                    </div>

                    <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class=" mb-2 terms_and_conditions_checkbox_validation_message">
                        <!--begin::Label-->
                        <label class="col-lg-12 required col-form-label fw-bold fs-6 mb-5">Validation Message</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="col-lg-12 terms_condition_validates">
                            <textarea type="text" id="terms_condition_validates" class="form-control form-control-lg form-control-solid ckeditor" tabindex="8" placeholder="" rows="3" name="terms_condition_validates"></textarea>
                            <span class="error text-danger"></span>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-2">
                        <!--begin::Label-->
                        <label class="col-lg-6 required col-form-label fw-bold fs-6 mb-5">Save Checkbox Status in Database?</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="col-lg-6 term_checkbox_status_save">
                            <label class="form-check form-check-inline form-check-solid me-5">
                                <!-- <input type="hidden" name="ackn_checkbox_status_save" value="1"> -->
                                <input class="form-check-input" name="term_checkbox_status_save" id="term_status_save_yes" type="radio" value="1" />
                                <span class="fw-bold ps-2 fs-6">
                                    {{ __('Yes') }}
                                </span>
                            </label>
                            <!--end::Option-->

                            <!--begin::Option-->
                            <label class="form-check form-check-inline form-check-solid">
                                <!-- <input type="hidden" name="ackn_checkbox_status_save" value="0"> -->
                                <input class="form-check-input" id="term_status_save_no" name="term_checkbox_status_save" type="radio" value="0" />
                                <span class="fw-bold ps-2 fs-6">
                                    {{ __('No') }}
                                </span>
                            </label>
                            <span class="error text-danger"></span>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <div class="row mb-2">
                        <label class="col-lg-6 col-form-label required fs-5 fw-bold mb-1">Order </label>

                        <div class="col-lg-6 order">
                            <input type="number" class="form-control form-control-lg form-control-solid h-50px border" id="term_contn_checkbox_order" placeholder="e.g. 5" name="order">
                            <span class="error text-danger"></span>
                        </div>
                    </div>

                    <!--begin::Hidden values -->
                     <input type="hidden" name="action" id="action" value="add">
                    <!--end::Hidden values -->
                    <!--begin::Input group-->
                    <div class=" mb-2">
                        <!--begin::Label-->
                        <label class="col-lg-12 col-form-label required fw-bold fs-6 mb-5">Checkbox Content</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="col-lg-12 terms_checkbox_content mb-10">
                            <textarea type="text" id="terms_checkbox_content" class="form-control form-control-lg form-control-solid ckeditor" tabindex="8" placeholder="" rows="3" name="terms_checkbox_content"></textarea>
                            <span class="error text-danger"></span>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <div class="text-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="term_condition_submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
            <!--end::Modal body-->

                </form>
                <!--end::Form-->

        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->

</div>
