<div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="sched_lbl" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="sched_form" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="sched_lbl">Contact Properties</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="sched_id" id="sched_id" value="-1" hidden />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-6"><label for="sched_sem">Semester:</label></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="sched_sem" id="sched_sem" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-6"><label for="sched_sy">School Year:</label></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="sched_sy" id="sched_sy" required />
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
