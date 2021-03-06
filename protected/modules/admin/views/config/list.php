<?php if (user()->hasFlash('save_config_success')):?>
<div class="alert alert-success">
    <a href="#" data-dismiss="alert" class="close">&times;</a>
    <?php echo user()->getFlash('save_config_success');?>
</div>
<?php endif;?>
<h4><?php echo $this->adminTitle;?></h4>
<table class="table table-striped table-bordered beta-config-table">
    <thead>
        <tr>
            <th class="span1 align-center">ID</th>
            <th class="span2 align-right"><?php echo t('config_nickname', 'model');?>/<?php echo t('config_var_name', 'model');?></th>
            <th class="span6"><?php echo t('config_value', 'model');?></th>
            <th class="span3 align-center"><?php echo l(t('edit_config_params', 'admin'), url('admin/config/edit', array('categoryid'=>$categoryid)));?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($models as $model):?>
        <tr>
            <td class="align-center"><?php echo $model['id'];?></td>
            <td class="align-right config-name">
                <strong><?php echo h($model['name']);?></strong>
                <span class="cgray f12px"><?php echo $model['config_name'];?></span>
            </td>
            <td><?php echo h($model['config_value']);?></td>
            <td><?php echo nl2br(h($model['desc']));?></td>
            <td>&nbsp;</td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
