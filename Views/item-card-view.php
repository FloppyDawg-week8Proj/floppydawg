			<div class="cart-item">
				<div class="cart-intemcontent cart-itemdetails">
					<div class="item-nameandrate">
						<?=$arrData['strName']?>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half-alt"></i></div>
					<div class="item-view">
						<div class="item-preview coverBg"><img src="assets/placeholder.jpg" alt="placeholder"></div>
						<div class="item-details">
							<div class="item-details-row item-price">
								<label>Unity:</label>
								<p>$<?=$arrData['nUnityPrice']?></p>
							</div>
							<div class="item-details-row item-colorandsize">
								<div class="item-color">
									<label>Color:</label>
									<select name="" id="">
										<option>Blue</option>
										<option>Red</option>
										<option>Brown</option>
									</select>
								</div>
								<div class="item-size">
									<label>Size:</label>
									<select name="nSizeID" id="">
										<option <?=($arrData['nSizeID']==1)?'selected':'';?>>Small</option>
										<option <?=($arrData['nSizeID']==2)?'selected':'';?>>Medium</option>
										<option <?=($arrData['nSizeID']==3)?'selected':'';?>>Large</option>
									</select>
								</div>
							</div>
							<div class="item-details-row item-quantity" >
								<label>Quantity: </label>
								<div class="item-quantity-decrementincrement"><span class="fas fa-minus"></span></div>
								<input name="nQuantity" type="text" value="1">
								<div class="item-quantity-increment"><span class="fas fa-plus"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-intemcontent cart-itemsubtotal">
					<div class="cart-itemsubtotal-row">
						<p class="cart-subtotal-label">Subtotal:</p>
					</div>
					<div class="cart-itemsubtotal-row ">
						<p class="cart-subtotal-price">$<?=array_product(array($arrData['nQuantity'],$arrData['nUnityPrice']))?></p>
					</div>
					<div class="cart-itemsubtotal-row cart-itemsubtotal-btn">
						<div class="btn btn-primary">
							<a href="index.php?action=products&id=<?=$arrData['id']?>">View Details</a>
						</div>
						<div class="btn btn-grey">
							<a href="#" data-target="index.php?controller=cart&action=delete&item=<?=(isset($arrData['itemKey']))?$arrData['itemKey']:'';?>">Delete</a>
						</div>
					</div>
				</div>
			</div>	