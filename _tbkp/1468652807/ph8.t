<figure class="portfolio-item">
 $PHOTO$
 <figcaption>
 <h2>$PHOTO_NAME$</h2>
 <?if(len($PHOTO_DESCR$)>120)?><p><?substr($PHOTO_DESCR$,0,117)?>...<?else?>$PHOTO_DESCR$</p><?endif?>
 <a href="$PHOTO_URL$" class="btn btn-main"><i class="fa fa-link"></i> Подробнее</a>
 </figcaption>
 </figure>