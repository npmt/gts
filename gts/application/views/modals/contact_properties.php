<div class="modal fade" id="contact_properties" tabindex="-1" role="dialog" aria-labelledby="con_lbl" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="contact_prop_form" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="con_lbl">Contact Properties</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="contact_prop_id" id="contact_prop_id" value="-1" hidden />
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="con_type">Type:</label></div>
                        <div class="col-md-7">
                            <select class="form-control" name="con_type" id="con_type">
                                <option value="1">Telephone</option>
                                <option value="2">Cellular</option>
                                <option value="3">Pager</option>
                                <option value="4">E-mail</option>
                                <option value="5">Fax</option>
                                <option value="0">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group conditional">
                        <div class="col-md-5 hidden-xs"></div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="spec_con_type" id="spec_con_type" placeholder="Contact Type" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="con_details">Details:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="con_details" id="con_details" required /></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </form>    
        </div>
    </div>
</div>
