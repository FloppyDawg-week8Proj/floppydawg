<style>
.dashBoardContainer
{
	position: relative;
	display: inline;
}
.dashBoard
{
	margin-top: 5%;
	text-align: center;
	float: left;
	width: 50%;
	padding: 20px;
}
.purchaseHistory
{
	box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.5);
	background-color: #363636;/*dark grey*/ 
	padding: 50px;
}
.editProfile
{
	box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.5);
	background-color: #363636;/*light grey*/ 
	padding: 50px;
}
.editProfile h2
{
	color: #fff;
	font-size: 30px;
}
.purchaseHistory h2
{
	color: #fff;
	font-size: 30px;
}
.fa-history,.fa-user
{
	color: #fff;
	font-size: 80px;
	margin-bottom: 20px;
}
.dashBoard:hover
{
	opacity: 0.7;
	transition: all ease 0.7s;
}
.dashBoardContainer a
{
	margin-left: 20px;
	margin-top: 20px;
}
.dashBoardContainer h1
{
	text-align: center;
	margin-top: 20px;
}

</style>
<div class="dashBoardContainer">
	<h1 class="pageTitle">USER DASHBOARD</h1>
		<div class="dashBoard">
			<a href="#">
				<div class="purchaseHistory">
					<i class="fas fa-history"></i>
					<h2>Purchase History</h2>
				</div><!--purchaseHistory-->
			</a>
		</div><!--dashBoard-->
		<div class="dashBoard">
			<a href="#">
				<div class="editProfile">
					<i class="fas fa-user"></i>
					<h2>Edit Profile</h2>
				</div><!--editProfile-->
			</a>
		</div><!--dashBoard-->
	<a href="#" class="btn btn-primary">VIEW PRODUCTS</a>
</div><!--dashBoardContainer-->