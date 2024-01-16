<?php
    if (!empty($itemValue) and !is_array($itemValue)) {
        $itemValue = json_decode($itemValue, true);
    }
?>

<div class="tab-pane mt-3 fade" id="general_options" role="tabpanel" aria-labelledby="general_options-tab">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="<?php echo e(getAdminPanelUrl()); ?>/settings/general_options" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="page" value="general">
                <input type="hidden" name="general_options" value="general_options">

                <div class="mb-5">
                    <h5><?php echo e(trans('update.direct_publication_options')); ?></h5>

                    <?php
                        $directPublicationOptions = ['direct_publication_of_courses', 'direct_publication_of_comments', 'direct_publication_of_reviews', 'direct_publication_of_blog'];
                    ?>

                    <?php $__currentLoopData = $directPublicationOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directPublicationOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group mt-3 custom-switches-stacked">
                            <label class="custom-switch pl-0">
                                <input type="hidden" name="value[<?php echo e($directPublicationOption); ?>]" value="0">
                                <input type="checkbox" name="value[<?php echo e($directPublicationOption); ?>]" id="<?php echo e($directPublicationOption); ?>Switch" value="1" <?php echo e((!empty($itemValue) and !empty($itemValue[$directPublicationOption]) and $itemValue[$directPublicationOption]) ? 'checked="checked"' : ''); ?> class="custom-switch-input"/>
                                <span class="custom-switch-indicator"></span>
                                <label class="custom-switch-description mb-0 cursor-pointer" for="<?php echo e($directPublicationOption); ?>Switch"><?php echo e(trans("update.{$directPublicationOption}")); ?></label>
                            </label>
                            <p class="font-12 text-gray mb-0"><?php echo e(trans("update.{$directPublicationOption}_hint")); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>


                <button type="submit" class="btn btn-primary"><?php echo e(trans('admin/main.save_change')); ?></button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Lms17\resources\views/admin/settings/general/options.blade.php ENDPATH**/ ?>