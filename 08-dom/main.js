var form = document.getElementById('addForm');
var itemList = document.getElementById('items');
var filter = document.getElementById('filter')

// form submit event
form.addEventListener('submit', addItem);
// delete event
itemList.addEventListener('click',removeItem);
// filter Event
filter.addEventListener('keyup' , filterItems);
// add item
function addItem(e){
	e.preventDefault();
	// get input value
	var newItem = document.getElementById('item').value;
	// create new li element
	var li = document.createElement('li');
	// add class
	li.className = "list-group-item";
	// add text node with input value
	li.appendChild(document.createTextNode(newItem));
	// create delete button element
	var deletebtn = document.createElement('button');
	// add classes to del button
	deletebtn.className = "btn btn-danger btn-sm float-right delete";
	// append Text Node
	deletebtn.appendChild(document.createTextNode('X'));
	// Append button li
	li.appendChild(deletebtn);
	// Append li to list  
	itemList.appendChild(li);
}
// Remove Item
function removeItem(e){
	if(e.target.classList.contains('delete')){
		if(confirm("Are you Sure")){
			var li = e.target.parentElement;
			itemList.removeChild(li);
		}
	}
}
// Filters Items
function filterItems(e){
	// convert text to lowercase
	var text = e.target.value.toLowerCase();
	// get list
	var items = itemList.getElementsByTagName('li');
	// converted into an array
	Array.from(items).forEach(function(item){
		var itemName = item.firstChild.textContent;
		if(itemName.toLowerCase().indexOf(text) != -1){
			item.style.display = 'block';
		}
		else{
			item.style.display = 'none';
		}
	});

}