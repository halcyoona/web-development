// Listen here for form submit
document.getElementById('myForm').addEventListener('submit' , saveBookmark);

function saveBookmark(e){
	// get form values
	var siteName = document.getElementById('siteName').value;
	var siteUrl = document.getElementById('siteUrl').value;

	if(!validateForm(siteName , siteUrl)){
		return false;
	}

	var bookmark = {
		name: siteName,
		url: siteUrl 
	}

	//local storage
	/*
	localStorage.setItem('test' , 'Hello World');
	console.log(localStorage.getItem('test'));
	localStorage.removeItem('test');
	console.log(localStorage.getItem('test'));
	*/

	if(localStorage.getItem('bookmarks') === null){
		// init array
		var bookmarks = [];
		// add to array
		bookmarks.push(bookmark);
		// set to local storage
		localStorage.setItem('bookmarks' , JSON.stringify(bookmarks));
	}
	else{
		// get bookmarks from  local storage
		var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
		// add bookmark to an array
		bookmarks.push(bookmark);
		// re-set back to local storage
		localStorage.setItem('bookmarks' , JSON.stringify(bookmarks));

	}
	fetchBookmarks();

	// Prevent form From submitting
	e.preventDefault();
}

//delete Bookmarks
function deleteBookmark(url){
	// get bookmark from local storage
	var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
	for(var i = 0; i < bookmarks.length; i++){
		if(bookmarks[i].url == url){
			bookmarks.splice(i , 1);
		}
	}

	localStorage.setItem('bookmarks' , JSON.stringify(bookmarks));

	// re-fetch bookmark again
	fetchBookmarks();	
}

function fetchBookmarks(){
	var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

	// get output id

	var bookmarksResults = document.getElementById('bookmarksResults');

	// build output
	bookmarksResults.innerHTML = '';
	for(var i = 0; i < bookmarks.length; i++){
		var name = bookmarks[i].name;
		var url = bookmarks[i].url;
		bookmarksResults.innerHTML += '<div class = "well">'+
										'<h3>'+name+
										'<a class = "btn btn-default" target="_blank" href ="'+url+'">Visit</a>'+
										'<a onclick="deleteBookmark(\''+url+'\')" class = "btn btn-danger"  href ="#">Delete</a>'+
										'</h3>'+
										'</div>'; 

	}

}

function validateForm(siteName , siteUrl){
	if(!siteName || !siteUrl){
		alert("Please fill the form");
		return false;
	}

	var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
	var regex = new RegExp(expression);

	if(!siteUrl.match(regex)){
		alert("please use a valid Url");
		return false;
	}
	return true;
}