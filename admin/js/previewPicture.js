const showUploadedPhoto = function(){

	document.getElementById("myImages").innerHTML="";
	var arrSelectedFile = this.files;
	var arrDivPreviewsImg = [];

	for(var i=0; i<arrSelectedFile.length; i++){			

		var myReader = new FileReader();
		myReader.readAsDataURL(arrSelectedFile[i]);
		myReader.elIndex = i;
		var imgData= (arrSelectedFile[i]);
		myReader.onload = function(e){
			imgData = e.target.result;
			var newPreviewDiv = document.createElement('div');	
			newPreviewDiv.classList.add('product-preview-holder');
			newPreviewDiv.addEventListener("click", pickAsMain);
			newPreviewDiv.setAttribute('data-imageindex', this.elIndex);
			var newPreviewPicture = document.createElement('div');
			newPreviewPicture.classList.add('product-pictures-preview');
			newPreviewPicture.classList.add('product-pictures-preview');
			newPreviewPicture.style.backgroundImage="url("+imgData+")";
			newPreviewPicture.style.backgroundPosition="center";
			newPreviewPicture.style.backgroundSize="cover";
			
			newPreviewDiv.appendChild(newPreviewPicture);
			newPreviewDiv.innerHTML += '<p></p>'
			document.getElementById("myImages").appendChild(newPreviewDiv);
		};
	}
};
const pickAsMain = function(){
	const previews = document.getElementsByClassName('product-preview-holder');
	for(var i=0; i<previews.length; i++){
		previews[i].classList.remove('mainPhoto');
		previews[i].querySelector('p').innerHTML = '';
	}
	
	this.classList.add('mainPhoto');
	this.querySelector('p').innerHTML = 'Main Photo';
	console.log($(this));
	let mainPhoto = $(this).data('imageindex');
	$("input[name='bMainPhoto'").val(mainPhoto);
	console.log(mainPhoto);
}

var myUpLoadedFile = document.getElementById("myFile");
myUpLoadedFile.addEventListener("change", showUploadedPhoto);