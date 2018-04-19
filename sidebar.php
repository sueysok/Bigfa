<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    <div class="layoutMultiColumn layoutMultiColumn--secondary"> 
     <div class="u-paddingTop50">

      <div class="widget"> 
       <div class="heading-title">
        Posts
       </div> 
       <ul class="list--withIcon list"> 

		<?php $this->widget('Widget_Contents_Post_Recent','pageSize=6')->to($recent)?>
		<?php while($recent->next()): ?>
		<li class="list-item">
         <div class="list-itemInfo">
          <h4 class="list-itemTitle"><a href="<?php $recent->permalink();?>"><?php $recent->title();?></a></h4>
          <p class="list-itemDescription"><a href="<?php $recent->permalink();?>" rel="category tag"><?php $recent->category();?></a></p>
         </div>
		 </li>
		<?php endwhile; ?>

       </ul>
      </div> 
     </div> 
    </div>
