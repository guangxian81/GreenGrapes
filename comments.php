<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit(0); ?>
<?php if($this->allow('comment')): ?>
    <div id="comments">
        <div class="block">
            <div id="SOHUCS" sid="<?php echo $this->cid;?>" ></div>
        </div>
    </div>
<?php else: ?>

    <div class="comments-block">
        <p class="ui ribbon label <?php $this->options->singleColor() ?>"><?php _e('楼主残忍的关闭了评论'); ?></p>
    </div>

<?php endif; ?>