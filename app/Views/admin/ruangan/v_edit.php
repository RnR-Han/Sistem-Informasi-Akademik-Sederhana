<section class="content-header">
        <h1>
          <?= $title?>
        </h1>
        <br>
</section>

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <div class="box box-primary box-solid">
        <!-- Blue old = Primary
             Blue = -info
             Green = -success
             yellow = -warning
             red = -danger -->
            <div class="box-header with-border">
              <h3 class="box-title">Data <?= $title?></h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php
            $error = session()->getFlashdata('errors');
            if (!empty($error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($error as $key => $value) { ?>
                            <li>
                                <?= esc($value) ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <?php echo form_open('ruangan/update/' . $ruangan['id_ruangan']); ?>

                    <div class="form-group">
                        <label>Gedung</label>
                        <select name="id_gedung" class="form-control">
                            <option value=" <?= $ruangan['id_gedung']?> "><?= $ruangan['gedung']?></option>
                            <?php foreach ($gedung as $key => $value) { ?>
                                <option value="<?= $value['id_gedung'] ?>"><?= $value['gedung'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ruangan</label>
                        <input name="ruangan" value="<?= $ruangan['id_ruangan']?>" class="form-control" placeholder="ruang" required>
                    </div>
                
            </div>
            <div class="modal-footer">
                <a href="<?=base_url('ruangan')?>" class="btn btn-danger pull-left btn-flat">Close</a>
                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
            <!-- /.box-body -->
          </div>
          <div class="col-sm-3"></div>
          <!-- /.box -->
    </div>
</div>
