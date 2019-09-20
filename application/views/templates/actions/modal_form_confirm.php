<?php
$data = (isset($data) && $data != NULL) ? $data : '';
$data_param = ($data != '') ? (isset($data->$param)  ? $data->$param : '')   : '';
?>
<button class="btn btn-bold btn-<?php echo $button_color ?> btn-sm " style="margin-left: 5px;" data-toggle="modal" data-target="#<?php echo $modal_id . $data_param ?>">
    <?php echo $name ?>
</button>
<!-- Modal Delete-->
<div class=" modal fade" id="<?php echo $modal_id . $data_param ?>" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <div class="modal-content ">
            <?php echo form_open($url); ?>
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $name ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div style="word-wrap: break-word;" class="alert alert-success">
                    <div style="word-wrap: break-word !important;">
                        Apa Anda Yakin ?
                    </div>
                </div>
                <!--  -->
                <?php
                $_data["form_data"] = $form_data;
                $_data["data"] = $data;
                $this->load->view('templates/form/bsb_form', $_data);
                ?>
                <!--  -->
            </div>
            <div class="modal-footer justify-content-between">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
                <button type="submit" class="btn  btn-success">Ok</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!--  -->