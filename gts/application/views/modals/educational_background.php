<div class="modal fade" id="educational_background" tabindex="-1" role="dialog" aria-labelledby="edu_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="edu_bg_form" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="edu_modal_label">Educational Background</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="edu_bg_id" id="edu_bg_id" value="-1" hidden />
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="school">School:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="school" id="school" required /></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="edu_lvl">Educational Level:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="edu_lvl" id="edu_lvl"  required /></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="school_year">School Year:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="school_year" id="school_year" required /></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="degree">Degree:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="degree" id="degree" required /></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="crs_minor">Minor:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="crs_minor" id="crs_minor" /></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="crs_major">Major:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="crs_major" id="crs_major" /></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="units_earned">Units Earned:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="units_earned" id="units_earned" /></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5"><label class="control-label" for="honors">Honors Received:</label></div>
                        <div class="col-md-7"><input type="text" class="form-control" name="honors" id="honors" /></div>
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
