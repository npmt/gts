<div class="modal fade" id="training_duration" tabindex="-1" role="dialog" aria-labelledby="tr_dur_lbl" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="tr_dur_form" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="tr_dur_lbl">Contact Properties</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="tr_dur_id" id="tr_dur_id" value="-1" hidden />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-6"><label for="date_start">Date Start:</label></div>
                                <div class="col-md-12">
                                    <div class='input-group date datetime-picker' data-date-format="YYYY/MM/DD">
                                        <input type='text' id="date_start" name="date_start" class="form-control input-group-child" required />
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-6"><label for="date_finish">Date Finish:</label></div>
                                <div class="col-md-12">
                                    <div class='input-group date datetime-picker' data-date-format="YYYY/MM/DD">
                                        <input type='text' id="date_finish" name="date_finish" class="form-control input-group-child" required />
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
