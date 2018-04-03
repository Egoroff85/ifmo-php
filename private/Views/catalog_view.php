		<!-- Начало основного контента -->
		<div class="container">
			<div class="row">
	            <? foreach ($goods as $good): ?>
        		<div class="col-4 col-md-6 col-sm-12">
        			<div class="tovar">
	            		<div class="tovarimage">
		            		<img src="static/images/<? echo $good['image'] ?>" alt="">
		            	</div>
		            	<div class="tovardescription">
							<? echo $good['title']?>
	            		</div>
	            		<div class="price">
							<? echo $good['price']?> Руб.
						</div>
						<input type="button" value="Подробнее" onclick="window.location='/catalog/goods/<?php echo $good['id']?>'">
					</div>
				</div>
				<? endforeach; ?>
			</div>
		</div>
	<!-- Конец основного контента -->
