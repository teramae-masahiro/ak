<footer id="footer" class="c-footer">
  <div class="inner-block">
    <nav>
      <ul>
        <?php foreach ($siteData["pages"] as $key => $value) : ?>
          <li><a href="<?php echo $siteData["pages"][$key]["slug"]; ?>"><?php echo $siteData["pages"][$key]["name"]; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <p><small>（c）<?php echo $siteData["siteInfo"]["name"]; ?></small></p>
  </div><!-- /inner-block -->
</footer>

<div id="pagetop" class="c-pagetop"><a href="#wrapper"><img src="/img/common/pagetop.png" alt="↑"></a></div>

</div><!-- /wrapper -->

<script src="/js/lib/svgxuse.min.js"></script>
<script src="/js/lib/jquery-3.6.0.min.js"></script>
<script src="/js/common.js"></script>
</body>

</html>