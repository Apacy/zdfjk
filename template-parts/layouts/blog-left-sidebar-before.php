<div class="u-page-root"><div class="u-content-layout u-sheet">
          <?php $sidebar_html = theme_sidebar(array(
            'id' => 'primary',
            'template' => <<<WIDGET_TEMPLATE
                <div class="u-block u-indent-30 u-block-e543-2">
      <div class="u-block-container u-clearfix">
        <h5 class="u-block-header u-text u-block-e543-3">{block_header}</h5>
        <div class="u-block-content u-text u-block-e543-4">{block_content}</div>
      </div>
    </div>
WIDGET_TEMPLATE
        )); ?> <aside class="u-indent-0 u-sidebar u-spacing-0 u-block-e543-1">
    <?php if ($sidebar_html) { echo stylingDefaultControls($sidebar_html); } else { ?> <div class="u-block u-indent-30 u-block-e543-2">
      <div class="u-block-container u-clearfix">
        <h5 class="u-block-header u-text u-block-e543-3"> Block header </h5>
        <div class="u-block-content u-text u-block-e543-4"> Block content. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices. </div>
      </div>
    </div> <?php } ?>
    
    
    <style data-mode="XL">.u-block-e543-1 {
  flex-basis: auto;
  width: 250px;
}
.u-block-e543-3 {
  font-size: 1.125rem;
  line-height: 2;
}
.u-block-e543-4 {
  font-size: 0.875rem;
  line-height: 2;
}
.u-block-e543-6 {
  font-size: 1.125rem;
  line-height: 2;
}
.u-block-e543-7 {
  font-size: 0.875rem;
  line-height: 2;
}
.u-block-e543-9 {
  font-size: 1.125rem;
  line-height: 2;
}
.u-block-e543-10 {
  font-size: 0.875rem;
  line-height: 2;
}</style>
    <style data-mode="LG"></style>
    <style data-mode="MD"></style>
    <style data-mode="SM"></style>
    <style data-mode="XS"></style>
  </aside>
          <div class="u-content">
             