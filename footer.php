<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<footer class="layoutSingleColumn layoutSingleColumn--wide footer" role="contentinfo">
  <div class="site-info">
    <p>© 2018 jjmm.fun&nbsp;&nbsp;&nbsp;&nbsp; Theme <a href="https://github.com/jozhn/Bigfa" target="_blank">Bigfa</a>
      by <a href="https://dearjohn.cn/" target="_blank"><span class="cute">John</span></a>.</p>
    <p>沪ICP备18012254号</p>
  </div>
</footer>


</div> <!-- 对应site-main surface-container -->
<div class="loadingBar"></div>


<?php $this->footer(); ?>

<script src="https://cdn.bootcss.com/instantclick/3.0.0/instantclick.min.js" data-no-instant></script>
<script data-no-instant>
    InstantClick.on('change', function (isInitialLoad) {
        jQuery("time.timeago").timeago();
        if (typeof Prism !== 'undefined') {
            Prism.highlightAll(true, null);
        }
    });
    InstantClick.init('mousedown');
</script>

</body>
</html>
