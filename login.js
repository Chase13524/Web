const successCallback = (position) => {
	var location = position.coords.longitude + " " + position.coords.latitude;
	localStorage.setItem("location", location);
};

const errorCallBack = (position) => {
	console.log(position);
	localStorage("location", "NULL");
};

function getLocation(){
	navigator.geolocation.getCurrentPosition(successCallback, errorCallBack);
}

function submitTemp(){
	document.getElementById("submitTemp").submit();
}