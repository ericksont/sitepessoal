var Site = function(){

	this.home = true;

	this.pagina = function(p){
		
		if(home == true){
			this.carregarLayout();
		}
	};
	
	this.carregarLayout = function() {
	
		alert(1);
	
	};

}

var objSite = new Site();