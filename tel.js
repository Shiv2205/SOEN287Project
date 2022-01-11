function main(){
	var tel=document.getElementById("tel");
	var name=document.getElementById("tel");
		var validtel=tel.value.search(/^\d{10}$/);
		if(name.value==""){
			alert("Please enter name");
		}
		if(validtel==-1){
			correctTel();
		}


}
function correctTel(){	
		alert("Please enter valid telephone number");
		document.getElementById("tel").value="";
}
